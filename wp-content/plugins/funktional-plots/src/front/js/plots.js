import $ from 'jquery';
import 'select2';

class FunktionalPlotsMap {
    constructor() {
        this.mainMap = $('[data-plots-map]');
        this.sectorsSelection = $('[data-plots-sectors]');
        this.sectors = $('[data-plots-sector]');
        this.sector = null;
        this.plots = null;
        this.plotSelected = null;
        this.plotInfoModal = $('[data-plots-info]');

        this.initSectorsEvents();
        this.setPlotsStatus();
    }

    initSectorsEvents() {
        if (this.sectorsSelection.length) {
            this.sectorsSelection.find('[data-plots-sector-selector]').click(this.handleSelectSector.bind(this));
        } else {
            this.sector = $('[data-plots-sector]');
            this.sector.show();
            this.initPlotsEvent();
        }

        this.plotInfoModal.find('[data-plots-info-close]').click((event) => {
            if (event) {
                event.preventDefault();
            }
            this.hidePlotInfo(true)
        });
        this.plotInfoModal.find('[data-plots-info-next]').click(this.showNextPlotInfo.bind(this));
        this.plotInfoModal.find('[data-plots-info-prev]').click(this.showPrevPlotInfo.bind(this));
        this.mainMap.find('[data-plots-back-to-sectors]').click(this.handleBackToMainMap.bind(this));
    }

    initPlotsEvent() {
        if (!this.plots) {
            console.error('Plots paths not found!');
            return
        }

        this.plots.on('mouseover hover click', (event) => {
            const plot = $(event.target).is('[data-plots-plot]') ? $(event.target) : $(event.target).closest('[data-plots-plot]');

            if (plot) {
                const plotNumber = parseInt(plot.attr('data-plots-plot'));

                if (event.type === 'click') {
                    this.showPlotInfo(plotNumber, true);
                } else if (!this.plotSelected) {
                    this.showPlotInfo(plotNumber, false);
                }
            } else {
                console.error('Selected plot has wrong attribute! Event:', event)
            }
        });

        this.plots.on('mouseout blur', () => {
            if (!this.plotSelected) {
                this.hidePlotInfo();
            }
        });
    }

    setPlotsStatus() {
        window.FunktionalPlots.forEach((plot) => {
            let plotEl;

            if (plot.sector && plot.sector.value) {
                const sectorEl = $(`[data-plots-sector="${plot.sector.value}"]`);

                if (sectorEl && sectorEl.length) {
                    plotEl = sectorEl.find(`[data-plots-plot="${plot.plotNr}"]`)
                } else {
                    console.warn('sector element for plot not found! Plot data: ', plot);
                }
            } else if (this.sector) {
                plotEl = $(this.sector).find(`[data-plots-plot="${plot.plotNr}"]`)
            }

            if (plotEl && plotEl.length) {
                plotEl.addClass(`plot-status--${plot.status.value}`);
            } else {
                console.warn('plot element not found! Plot data: ', plot);
            }
        })
    }

    handleSelectSector(event) {
        const sector = $(event.currentTarget).attr('data-plots-sector-selector');

        if (sector && typeof sector === 'string') {
            this.sector = $(`[data-plots-sector="${sector}"]`);

            if (this.sector.length) {
                this.sectorsSelection.hide();
                this.sector.show();
                this.plots = this.sector.find('[data-plots-plot]');
                this.initPlotsEvent();
            } else {
                console.error(`Sector ${sector} was not found!`);
            }
        } else {
            console.error(`Selected ${sector} sector has wrong attribute!`);
        }
    }

    handleBackToMainMap(event) {
        if (event) {
            event.preventDefault();
        }

        this.sector.hide();
        this.sector = null;
        this.sectorsSelection.show();
        this.hidePlotInfo(true);
    }

    showPlotInfo(plotNr, selectPlot) {
        const plotData = window.FunktionalPlots.find((plot) => plot.plotNr === plotNr);

        if (!plotData) {
            console[selectPlot ? 'error' : 'warn'](`Plot ${plotNr} data not found!`);
            return;
        }

        if (selectPlot) {
            this.plotSelected = plotData;
        }

        this.prepareInfoModalForPlot(plotData);
        this.plotInfoModal.show();
    }

    showNextPlotInfo(event) {
        if (event) {
            event.preventDefault();
        }

        this.showPlotInfo(this.plotSelected.plotNr + 1, true);
    }

    showPrevPlotInfo(event) {
        if (event) {
            event.preventDefault();
        }

        this.showPlotInfo(this.plotSelected.plotNr - 1, true);
    }

    hidePlotInfo(withSelected) {
        if (withSelected) {
            this.plotSelected = null;
        } else if (this.plotSelected) {
            return;
        }

        this.plotInfoModal.hide();
    }

    prepareInfoModalForPlot(plotData) {
        this.prepareInfoModalConditionalElementsForPlot(plotData);
        this.prepareInfoModalParamElementsForPlot(plotData);

        // TODO set src to plot preview
        $('[data-plots-info-image]').attr('src', '');

        $('[data-plots-info-on-selected]')[this.plotSelected ? 'show' : 'hide']();

        const prevPlot = window.FunktionalPlots.find((plot) => plot.plotNr === (plotData.plotNr - 1));
        const nextPlot = window.FunktionalPlots.find((plot) => plot.plotNr === (plotData.plotNr + 1));

        this.plotInfoModal.find('[data-plots-info-prev]')[prevPlot ? 'show' : 'hide']();
        this.plotInfoModal.find('[data-plots-info-next]')[nextPlot ? 'show' : 'hide']();
    }

    prepareInfoModalConditionalElementsForPlot(plotData) {
        const conditionalElements = this.plotInfoModal.find('[data-plots-info-show-if]');

        if (!conditionalElements || !conditionalElements.length) {
            return;
        }
        conditionalElements.hide();

        conditionalElements.toArray().forEach(element => {
            let condition = $(element).attr('data-plots-info-show-if');

            if (condition.includes('=')) {
                condition = condition.split('=');

                if (plotData[condition[0]]) {
                    const plotConditionData = plotData[condition[0]];

                    if (typeof plotConditionData === 'object') {
                        if (plotConditionData.value === condition[1]) {
                            $(element).show();
                        }
                    } else if (plotConditionData === condition[1]) {
                        $(element).show();
                    }
                }
            } else if(condition[0] === '!') {
                condition = condition.replace('!', '');

                if (!plotData[condition]) {
                    $(element).show();
                }
            } else if (plotData[condition]) {
                $(element).show();
            }
        })
    }

    prepareInfoModalParamElementsForPlot(plotData) {
        const paramElements = this.plotInfoModal.find('[data-plots-info-param]');

        if (!paramElements || !paramElements.length) {
            return;
        }

        paramElements.toArray().forEach(paramElement => {
            const param = $(paramElement).attr('data-plots-info-param');
            const conditionAbove = $(paramElement).closest('[data-plots-info-show-if]');

            if (conditionAbove.css('display') === 'none') {
                $(paramElement).text('');
                return;
            }

            const getPlotDataParam = (plotParamData) => {
                if (!plotParamData) {
                    return '';
                }

                return typeof plotParamData === 'object' ? plotParamData.label : plotParamData;
            }

            if (param.includes('|')) {
                const params = param.split('|');

                $(paramElement).text(params.map((param) => getPlotDataParam(plotData[param])).join(''));
            } else {
                $(paramElement).text(getPlotDataParam(plotData[param]));
            }
        })
    }
}

class FunktionalPlotsList {
    constructor() {
        this.mainList = $('[data-plot-list]');
        this.filters = {};
        this.sort = 'asc';
        this.sortBy = 'plotNr';
        this.activePage = 0;
        this.perPage = 2;
        this.hideSold = false;

        this.initFilters();
        this.initSorting();
        this.reloadList();
    }

    initFilters() {
        this.mainList.find('[data-plot-list-filter]').toArray().forEach(filter => {
            const filterName = $(filter).attr('data-plot-list-filter');

            if ($(filter).is('select')) {
                this.addFilterValuesToSelect(this.getFilterValues(filterName), $(filter));
            }

            $(filter).on('change', this.handleFilterChange.bind(this));
        });
    }

    initSorting() {
        this.mainList.find('[data-plot-list-sort]').on('click', this.handleSortChange.bind(this))
        this.setSortButtonsClasses();
    }

    getFilterValues(filterName) {
        const values = {};

        window.FunktionalPlots.forEach(plot => {
            if (plot[filterName]) {
                if (typeof plot[filterName] === 'object') {
                    values[plot[filterName].label] = plot[filterName].value;
                } else {
                    values[plot[filterName]] = plot[filterName];
                }
            }
        });

        return values;
    }

    addFilterValuesToSelect(values, selectFilter) {
        Object.keys(values).sort((labelA, labelB) => labelA > labelB ? 1 : -1).forEach(label => {
            selectFilter.append(`<option value="${values[label]}">${label}</option>`);
        });

        $(selectFilter).select2({
            placeholder: 'Wszystkie',
            multiple: true
        });

        $(selectFilter).val(null).trigger('change');
    }

    handleFilterChange(event) {
        const filter = $(event.target);
        const filterName = filter.attr('data-plot-list-filter');
        const filterValue = filter.val();

        if (filterValue) {
            this.filters[filterName] = filterValue;
        } else {
            delete this.filters[filterName];
        }

        this.activePage = 0;
        this.reloadList();
    }

    handleSortChange(event) {
        const sortEl = $(event.target);

        [this.sortBy, this.sort] = sortEl.attr('data-plot-list-sort').split('|');

        this.activePage = 0;
        this.setSortButtonsClasses();
        this.reloadList();
    }

    setSortButtonsClasses() {
        this.mainList.find('[data-plot-list-sort]').removeClass('active');
        this.mainList.find(`[data-plot-list-sort="${this.sortBy}-${this.sort}"]`).addClass('active');
    }

    reloadList() {
        const plots = this.getPlotsList();

        console.log('plots', plots);
    }

    getPlotsList() {
        const filteredPlots = window.FunktionalPlots.filter((plot) => Object.keys(this.filters).length ? Object.keys(this.filters).some(filterName => {
            let filterResult = false;

            if (typeof plot[filterName] === 'undefined') {
                filterResult = true;
            } else {
                if (typeof plot[filterName] === 'object') {
                    if (Array.isArray(this.filters[filterName])) {
                        filterResult = this.filters[filterName].includes(plot[filterName].value);
                    } else {
                        filterResult = plot[filterName].value === this.filters[filterName];
                    }
                } else {
                    if (Array.isArray(this.filters[filterName])) {
                        filterResult = this.filters[filterName].includes(plot[filterName]);
                    } else {
                        filterResult = plot[filterName] === this.filters[filterName];
                    }
                }
            }

            return this.hideSold ? filterResult && plot.status.value !== 'sprzedana' : filterResult;

        }) : true).sort((plotA, plotB) => {
            const valueA = Number.isNaN(parseFloat(plotA[this.sortBy])) ? plotA[this.sortBy] : parseFloat(plotA[this.sortBy]);
            const valueB = Number.isNaN(parseFloat(plotB[this.sortBy])) ? plotB[this.sortBy] : parseFloat(plotB[this.sortBy]);

            return this.sort === 'asc' ? (valueA > valueB ? 1 : -1) : (valueA > valueB ? -1 : 1);
        });

        return {
            plots: filteredPlots.slice(this.activePage * this.perPage, (this.activePage * this.perPage) + this.perPage),
            all: filteredPlots.length
        };
    }
}

$(() => {
    if (!window.FunktionalPlots || typeof window.FunktionalPlots !== 'object') {
        console.error('FunktionalPlots data not found!');
        return;
    }

    if ($('[data-plots-map]').length) {
        new FunktionalPlotsMap();
    }

    if ($('[data-plot-list]').length) {
        new FunktionalPlotsList();
    }
});
