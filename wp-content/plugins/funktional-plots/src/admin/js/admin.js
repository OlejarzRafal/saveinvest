import $ from 'jquery';
import toastr from 'toastr';
import DoubleSlider from 'double-slider';

class FunktionalPlotsService {
    getFiltersValues() {
        return $.post('/wp-json/funktional-plots/v1/filters');
    }

    getPlots(filters) {
        return $.post('/wp-json/funktional-plots/v1/plots', {filters});
    }

    updatePlot(data) {
        return $.ajax({
            url: '/wp-json/funktional-plots/v1/update',
            method: 'PUT',
            data: { data }
        });
    }

    updatePlots(data) {
        return $.ajax({
            url: '/wp-json/funktional-plots/v1/update-multiple',
            method: 'PUT',
            data: { data }
        });
    }
}

class FunktionalPlots {
    constructor() {
        this.service = new FunktionalPlotsService();
        this.plotsTableHead = $('.funktional-plots__table thead');
        this.plotsTableBody = $('.funktional-plots__table tbody');
        this.filtersForm = $('.funktional-plots__filters');
        this.rangeSliders = {};
        this.timeout = setTimeout(() => {});

        this.initFilters(true);
        this.initEvents();
    }

    initEvents() {
        this.filtersForm.find('select').on('change', (event) => {
            event.preventDefault();
            this.rebuildPlotsTable();
        });

        this.filtersForm.on('submit', (event) => {
            event.preventDefault();
            this.rebuildPlotsTable();
        });

        this.plotsTableHead.find('[data-all-plots-price]').on('input change', (event) => {
            event.preventDefault();
            this.plotsTableBody.find('[name*="-priceNetto"]').val($(event.target).val());
        });

        this.plotsTableHead.find('[data-save-all-plots]').on('click', (event) => {
            event.preventDefault();
            this.saveAllPlotsData();
        });
    }

    getFilters() {
        return [
            ...this.filtersForm.serializeArray(),
            ...Object.keys(this.rangeSliders).map((name) => ({name, value: this.rangeSliders[name].value}))
        ];
    }

    initRangeSliders() {
        $('.range-slider').toArray().forEach(slider => {
            let prevValue = this.rangeSliders[$(slider).attr('name')] ? this.rangeSliders[$(slider).attr('name')].value : null;

            this.rangeSliders[$(slider).attr('name')] = new DoubleSlider(slider);

            if (prevValue) {
                this.rangeSliders[$(slider).attr('name')].value = prevValue;
            }

            ((slider, values) => {
                const setValues = () => {
                    values.find('span:first-of-type').text(slider.value.min);
                    values.find('span:last-of-type').text(slider.value.max);
                };

                const handleChange = () => {
                    setValues();
                    this.filtersForm.submit();
                };

                setValues();
                slider.removeEventListener('slider:change', handleChange);
                slider.removeEventListener('slider:input', setValues);
                slider.addEventListener('slider:change', handleChange);
                slider.addEventListener('slider:input', setValues);
            })(this.rangeSliders[$(slider).attr('name')], $(slider).next());
        });
    };

    initFilters(rebuildPlotsTable = false) {
        this.service.getFiltersValues().then((filtersValues) => {
            this.rebuildFiltersValues(filtersValues);
            this.initRangeSliders();

            if (rebuildPlotsTable) {
                this.rebuildPlotsTable();
            }
        }).catch(this.displayError.bind(this));
    }

    rebuildFiltersValues(filtersValues) {
        filtersValues.forEach(filterValues => {
            const filterEl = this.filtersForm.find(`[name="${filterValues.name}"]`);

            if (filterEl && filterEl.length) {
                if (filterEl.is('.range-slider')) {
                    filterEl.attr('data-max', filterValues.value.max);
                    filterEl.attr('data-range', filterValues.value.max);
                }
                if (filterEl.is('select')) {
                    let addEmptyOption = false;

                    filterEl.find('option:not([value=""])').remove();

                    filterValues.value.forEach(value => {
                        if (value.value && value.name) {
                            filterEl.append(`<option value="${value.value}">${value.name}</option>`);
                        } else {
                            addEmptyOption = true;
                        }
                    });

                    if (addEmptyOption) {
                        filterEl.append(`<option value="empty">Brak</option>`);
                    }
                }
            }
        });
    }

    rebuildPlotsTable() {
        clearTimeout(this.timeout);

        this.timeout = setTimeout(() => {
            this.plotsTableBody.html('');

            this.service.getPlots(this.getFilters()).then((plotsData) => {
                this.appendPlotsToTable(plotsData);
            }).catch(this.displayError.bind(this));
        }, 300);
    }

    appendPlotsToTable(plotsData) {
        plotsData.forEach((plotData) => {
            this.plotsTableBody.append(this.buildPlotRow(plotData));
        });

        this.initEditPlotActions();
    }

    buildPlotRow(params) {
        return params ? `<tr class="author-self status-publish hentry">
                            <td class="column-primary"><strong>${params.investition.label}</strong></td>
                            <td class="column-primary"><strong>${params.sector && params.sector.label ? params.sector.label : '-'}</strong></td>
                            <td class="column-primary"><strong>${params.plotNr}</strong></td>
                            <td class="column-primary"><strong>${params.plot_type.label}</strong></td>
                            <td class="column-primary"><strong>${params.status.label}</strong></td>
                            <td class="column-primary">
                                <input type="hidden" name="postId" value="${params.postId}" />
                                <input type="number" name="${params.postId}-priceNetto" value="${params.priceNetto}" />
                            </td>
                            <td class="column-primary"><strong>${params.area}</strong></td>
                            <td class="column-primary"><strong>${params.discount || '-'}</strong></td>
                            <td class="column-primary"><button data-save-plot class="button action">Zapisz</button></td>
                            <td class="column-primary">
                                <a class="button action" 
                                    href="/wp-admin/post.php?action=edit&post=${params.postId}"
                                    target="_blank">Edytuj działkę</a>
                            </td>
                        </tr>` : '';
    };

    initEditPlotActions() {
        this.plotsTableBody.find('[name*="-priceNetto"]').on('input change', (event) => {
            event.preventDefault();
            this.plotsTableHead.find('[data-all-plots-price]').val('');
        })

        this.plotsTableBody.find('[data-save-plot]').on('click', (event) => {
            event.preventDefault();

            this.service.updatePlot(this.getPlotEditData($(event.target).parent().parent())).then((response) => {
                if (response.status === 'OK') {
                    toastr.success('Działka została zapisana poprawnie');
                    this.initFilters();
                }
            }).catch(this.displayError.bind(this));
        });
    }

    saveAllPlotsData() {
        const plotsData = this.plotsTableBody.find('tr').toArray().map(row => this.getPlotEditData($(row)));

        this.service.updatePlots(plotsData).then((response) => {
            if (response.status === 'OK') {
                toastr.success('Działki zostały zapisane poprawnie');
                this.initFilters();
            }
        }).catch(this.displayError.bind(this));
    }

    getPlotEditData(plotRow) {
        const plotId = plotRow.find('input[name="postId"]').val();
        const inputs = plotRow.find('input:not([name="postId"])');
        const editData = { plotId, fields: {} };

        inputs.toArray().forEach(input => {
            editData.fields[$(input).attr('name').replace(`${plotId}-`, '')] = $(input).val();
        });

        return editData;
    }

    displayError() {
        toastr.error('Wystąpił błąd podczas pobierania danych. Skontaktuj się z administratorem strony.');
    }
}

$(() => {
    if ($('main.funktional-plots').length) {
        new FunktionalPlots();
    }
});
