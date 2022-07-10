import $ from 'jquery';
import toastr from 'toastr';
import DoubleSlider from 'double-slider';
import 'select2';
import * as moment from 'moment-timezone';
import flatpickr from "flatpickr";
import { Polish } from "flatpickr/dist/l10n/pl.js"

flatpickr.localize(Polish);

class FunktionalPlotsService {
    getFiltersValues() {
        return $.post(`${window.FunktionalGlobals.homeUrl}wp-json/funktional-plots/v1/filters`);
    }

    getPlots(filters, sort) {
        return $.post(`${window.FunktionalGlobals.homeUrl}wp-json/funktional-plots/v1/plots`, {filters, sort});
    }

    updatePlot(data) {
        return $.ajax({
            url: `${window.FunktionalGlobals.homeUrl}wp-json/funktional-plots/v1/update`,
            method: 'PUT',
            data: {data},
        });
    }

    updatePlots(data) {
        return $.ajax({
            url: `${window.FunktionalGlobals.homeUrl}wp-json/funktional-plots/v1/update-multiple`,
            method: 'PUT',
            data: {data},
        });
    }

    removePlot(plotId) {
        return $.ajax({
            url: `${window.FunktionalGlobals.homeUrl}wp-json/funktional-plots/v1/remove-plot`,
            method: 'DELETE',
            data: {plotId},
        });
    }

    setPlotStatus(plotId, status) {
        return $.ajax({
            url: `${window.FunktionalGlobals.homeUrl}wp-json/funktional-plots/v1/set-plot-status`,
            method: 'POST',
            data: {plotId, status},
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
        this.timeout = setTimeout(() => {
        });

        this.initFilters(true);
    }

    initEvents() {
        this.filtersForm.find('select').on('change', (event) => {
            event.preventDefault();
            this.rebuildPlotsTable();
        });

        this.filtersForm.on('submit', (event) => {
            event.preventDefault();
            this.plotsTableHead.find('[data-all-plots-data]').val('');
            this.rebuildPlotsTable();
        });

        this.plotsTableHead.find('[data-all-plots-data]').on('input change', (event) => {
            event.preventDefault();

            const name = $(event.currentTarget).attr('data-all-plots-data');

            this.plotsTableBody.find('[data-edit-param-field][name$="' + name + '"]').val($(event.target).val());
        });

        this.plotsTableHead.find('[data-save-all-plots]').on('click', (event) => {
            event.preventDefault();
            this.saveAllPlotsData();
        });

        this.plotsTableHead.find('.sorting-buttons button').on('click', (event) => {
            event.preventDefault();

            this.plotsTableHead.find('.sorting-buttons button').removeClass('active');
            $(event.target).addClass('active');
            this.rebuildPlotsTable();
        });
    }

    getSortData() {
        const sortData = this.plotsTableHead.find('.sorting-buttons button.active').attr('data-sort').split('-');

        return {sortBy: sortData[0], sort: sortData[1]};
    }

    getFilters() {
        const filters = {};

        this.filtersForm.serializeArray().forEach((filter) => {
            if (!filters[filter.name]) {
                filters[filter.name] = filter.value;
            } else {
                if (Array.isArray(filters[filter.name])) {
                    filters[filter.name].push(filter.value);
                } else {
                    filters[filter.name] = [
                        filters[filter.name],
                        filter.value,
                    ]
                }
            }
        });

        return [
            ...Object.keys(filters).map(filterName => ({name: filterName, value: filters[filterName]})),
            ...Object.keys(this.rangeSliders).map((name) => ({name, value: this.rangeSliders[name].value})),
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
                this.initTableHeaderFields();
                this.initEvents();
                this.rebuildPlotsTable();
            }
        }).catch(this.displayError.bind(this));
    }

    initTableHeaderFields() {
        this.plotsTableHead.find('select[data-all-plots-data]').toArray().forEach((select) => {
            $(select).find('option').remove();

            const name = $(select).attr('data-all-plots-data');
            const availableValues = window.FunktionalGlobals.availableFields.find(params => params.name === name);

            if (availableValues && availableValues.choices) {
                Object.keys(availableValues.choices).forEach((choice) => {
                    const choiceName = availableValues.choices[choice];

                    $(select).append($(`<option value="${choice}">${choiceName}</option>`))
                });
            }

            $(select).val(null);
        });

        this.plotsTableHead.find('input[data-datepicker-field]').toArray().forEach((dateField) => {
            const dateFieldFlatpickr = flatpickr(dateField, {
                enableTime: true,
                dateFormat: "H:i d-m-Y",
                defaultDate: '',
                time_24hr: true,
                onChange: ([selectedDate]) => {
                    this.plotsTableBody.find(`[data-edit-param-field][name$="-${$(dateField).attr('data-all-plots-data')}"]`).toArray().forEach(flatpickrEl => {
                        flatpickrEl._flatpickr.setDate(selectedDate);
                    });
                },
                onClose: () => {
                    this.plotsTableBody.find(`[data-edit-param-field][name$="-${$(dateField).attr('data-all-plots-data')}"]`).toArray().forEach(flatpickrEl => {
                        flatpickrEl._flatpickr.setDate(dateFieldFlatpickr.selectedDates[0]);
                    });
                }
            });

            $('.gmi-picker-panel.gmi-date-picker').addClass('header-picker');
        });
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

                    filterEl.select2({
                        placeholder: 'Wszystkie',
                        multiple: true,
                    });

                    filterEl.val(null).trigger('change');
                }
            }
        });
    }

    rebuildPlotsTable() {
        clearTimeout(this.timeout);

        this.timeout = setTimeout(() => {
            this.plotsTableBody.find('input[data-datepicker-field]').toArray().forEach(flatpickrEl => {
                flatpickrEl._flatpickr.destroy();
            });
            this.plotsTableBody.html('');

            this.service.getPlots(this.getFilters(), this.getSortData()).then((plotsData) => {
                this.appendPlotsToTable(plotsData);
            }).catch(this.displayError.bind(this));
        }, 300);
    }

    appendPlotsToTable(plotsData) {
        plotsData.forEach((plotData) => {
            this.plotsTableBody.append(this.buildPlotRow(plotData));
        });

        this.plotsTableBody.find('input[data-datepicker-field]').toArray().forEach((dateField) => {
            flatpickr(dateField, {
                enableTime: true,
                dateFormat: "H:i d-m-Y",
                defaultDate: '',
                time_24hr: true
            });
        });

        this.initEditPlotActions();
    }

    buildPlotRow(params) {
        const getPlotEditSelectField = (currentValue, name, postId) => {

            let select = `<select data-edit-param-field name="${postId}-${name}">`;
            const availableValues = window.FunktionalGlobals.availableFields.find(params => params.name === name);

            if (availableValues && availableValues.choices) {
                Object.keys(availableValues.choices).forEach((choice) => {
                    const choiceName = availableValues.choices[choice];

                    select += `<option value="${choice}" ${choice === currentValue ? 'selected="true"' : ''}>${choiceName}</option>`;
                });
            }

            return select + '</select>';
        };

        const getFormattedDate = (date) => {
            try {
                if (!date) {
                    return '';
                } else {
                    const momentDate = moment(parseInt(date) * 1000);

                    return momentDate.isValid() ? momentDate.tz('Europe/Warsaw').format('HH:mm DD-MM-YYYY') : '';
                }
            } catch (e) {
                console.warn('error creating date from date:', date, ' status: ', e);
                return '';
            }
        };

        return params ? `<tr class="author-self status-publish hentry">
                            <td class="column-primary status-column">
                                <input type="hidden" name="postId" value="${params.postId}" />
                                <input type="checkbox" value="true" data-toggle-status ${params.postStatus ? 'checked="true"' : ''}>
                            </td>
                            <td class="column-primary"><strong>${params.investition.label}</strong></td>
                            <td class="column-primary"><strong>${params.sector && params.sector.label ? params.sector.label : '-'}</strong></td>
                            <td class="column-primary"><strong>${params.plotNr}</strong></td>
                            <td class="column-primary">${getPlotEditSelectField(params.plot_type.value, 'plot_type', params.postId)}</td>
                            <td class="column-primary">${getPlotEditSelectField(params.status.value, 'status', params.postId)}</td>
                            <td class="column-primary">
                                <input type="number" data-edit-param-field name="${params.postId}-priceNetto" value="${params.priceNetto}" />
                            </td>
                            <td class="column-primary">
                                <input type="number" data-edit-param-field name="${params.postId}-area" value="${params.area}" />
                            </td>
                            <td class="column-primary">
                                <input type="number" data-edit-param-field name="${params.postId}-discount" value="${params.discount}" />
                            </td>  
                            <td class="column-primary">
                                <input data-edit-param-field name="${params.postId}-discount_date"
                                        value="${getFormattedDate(params.discount_date)}" type="text" data-datepicker-field>
                            </td>
                            <td class="column-primary">
                                <button data-save-plot class="button action">Zapisz</button>
                            </td>
                            <td class="column-primary">
                                <a class="button action" target="_blank"
                                    href="${window.FunktionalGlobals.homeUrl}wp-admin/post.php?action=edit&post=${params.postId}">Edytuj</a>
                                <a class="button deletion" data-delete-plot href="#">Usuń</a>
                            </td>
                        </tr>` : '';
    };

    initEditPlotActions() {
        this.plotsTableBody.find('[data-edit-param-field]').on('input change', (event) => {
            event.preventDefault();

            const nameParts = $(event.currentTarget).attr('name').split('-');

            if (nameParts && nameParts.length > 1) {
                this.plotsTableHead.find('[data-all-plots-data="' + nameParts[1] + '"]').val('');
            }
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

        this.plotsTableBody.find('[data-delete-plot]').on('click', (event) => {
            event.preventDefault();

            if (confirm('Na pewno chcesz usunąć wybraną działkę?')) {
                this.service.removePlot(this.getPlotEditData($(event.currentTarget).parent().parent()).plotId).then((response) => {
                    if (response) {
                        this.rebuildPlotsTable();
                        toastr.success('Działka została poprawnie usunięta');
                    } else {
                        toastr.error('Wystąpił problem podczas usuwania działki');
                    }
                }).catch(() => {
                    toastr.error('Wystąpił problem podczas usuwania działki');
                });
            }
        });

        this.plotsTableBody.find('[data-toggle-status]').on('click', (event) => {
            const status = $(event.currentTarget).is(':checked');

            this.service.setPlotStatus(
                this.getPlotEditData($(event.currentTarget).parent().parent()).plotId,
                status,
            ).then(() => {
                if (status) {
                    toastr.success('Działka została poprawnie aktywowana');
                } else {
                    toastr.success('Działka została poprawnie dezaktywowana');
                }
            }).catch(() => {
                toastr.error('Wystąpił problem podczas usuwania działki');
            });
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
        this.plotsTableHead.find('[data-all-plots-data]').val('');
    }

    getPlotEditData(plotRow) {
        const plotId = plotRow.find('input[name="postId"]').val();
        const inputs = plotRow.find('[data-edit-param-field]');
        const editData = {plotId, fields: {}};

        inputs.toArray().forEach(input => {
            editData.fields[$(input).attr('name').replace(`${plotId}-`, '')] =
                $(input).is('[data-datepicker-field]') && $(input).val() ? moment($(input).val(), 'HH:mm DD-MM-YYYY').unix() : $(input).val();
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

