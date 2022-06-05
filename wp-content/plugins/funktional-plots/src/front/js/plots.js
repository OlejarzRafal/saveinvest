import $ from 'jquery';
import 'select2';

class PlotDataElement {
    static prepareConditionalElementsForPlot(plotData, element) {
        const conditionalElements = element.find('[data-plot-info-show-if]');

        if (!conditionalElements || !conditionalElements.length) {
            return;
        }
        conditionalElements.hide();

        conditionalElements.toArray().forEach(element => {
            let condition = $(element).attr('data-plot-info-show-if');

            if (condition.includes('=')) {
                let negation = false;

                if (condition.includes('!=')) {
                    negation = true;
                    condition = condition.split('!=');
                } else {
                    condition = condition.split('=');
                }

                if (plotData[condition[0]]) {
                    const plotConditionData = plotData[condition[0]];

                    if (typeof plotConditionData === 'object') {
                        if (negation) {
                            if (plotConditionData.value !== condition[1]) {
                                $(element).show();
                            }
                        } else {
                            if (plotConditionData.value === condition[1]) {
                                $(element).show();
                            }
                        }
                    } else {
                        if (negation) {
                            if (plotConditionData !== condition[1]) {
                                $(element).show();
                            }
                        } else {
                            if (plotConditionData === condition[1]) {
                                $(element).show();
                            }
                        }
                    }
                }
            } else if (condition[0] === '!') {
                condition = condition.replace('!', '');

                if (!plotData[condition]) {
                    $(element).show();
                }
            } else if (plotData[condition]) {
                $(element).show();
            }
        });
    }

    static prepareParamElementsForPlot(plotData, element) {
        const paramElements = element.find('[data-plot-info-param]');


        if (!paramElements || !paramElements.length) {
            return;
        }

        paramElements.toArray().forEach(paramElement => {
            const param = $(paramElement).attr('data-plot-info-param');
            const conditionAbove = $(paramElement).closest('[data-plot-info-show-if]');

            if (conditionAbove && conditionAbove.length && conditionAbove.css('display') === 'none') {
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
        });

        const investName = plotData.investition.label.toLowerCase().replace(' ', '-');
        const sectorUrlPath = plotData.sector && plotData.sector.value ? plotData.sector.value + '/' : '';
        const sectorName = plotData.sector && plotData.sector.value ? plotData.sector.value : '';
        const investitionAssetsUrl = `${window.FunktionalGlobals.homeUrl}/Plots/${investName}/${sectorUrlPath}`

        element.find('[data-plot-info-image]').attr('src', `${investitionAssetsUrl}obrysy/${sectorUrlPath.replace('/', '-')}${plotData.plotNr}.png`);
        element.find('[data-plot-info-image-pdf-card]').attr('href', `${investitionAssetsUrl}karty/${sectorUrlPath.replace('/', '-')}${plotData.plotNr}.pdf`);

        // TODO set href to plotcotact form or change it to click action

        element.find('[data-plot-info-image-send-message]').click((e) => {
            e.preventDefault();
            $('.form-plots .form-plots-number').val(plotData.plotNr);
            $('.form-plots .form-plots-sector').val(sectorName);
            $('.form-plots-text-number').html('Działka ' + '<span>' + sectorName + plotData.plotNr + '</span>');
            $('.form-plots').show();
        })
        $('.form-plots-close').click((e) => {
            $('.form-plots').hide();
        });

    }

    static prepareParamClassesForPlot(plotData, element) {
        const paramClassElements = element.find('[data-plot-class-param]');

        if (!paramClassElements || !paramClassElements.length) {
            return;
        }

        paramClassElements.toArray().forEach(classElement => {
            const param = $(classElement).attr('data-plot-class-param');

            const getPlotDataParam = (plotParamData) => {
                if (!plotParamData) {
                    return '';
                }

                return typeof plotParamData === 'object' ? plotParamData.value : plotParamData;
            }

            classElement.classList.forEach(elClass => {
                if (elClass.includes('param--')) {
                    $(classElement).removeClass(elClass);
                }
            })

            $(classElement).addClass('param--' + param + '--' + getPlotDataParam(plotData[param]));
        });
    }
}

class FunktionalPlotsMap {
    constructor() {
        this.mainMap = $('[data-plots-map]');
        this.sectorsSelection = this.mainMap.find('[data-plots-sectors]');
        this.sectors = this.mainMap.find('[data-plots-sector]');
        this.sector = null;
        this.plots = null;
        this.plotSelected = null;
        this.plotInfoModal = this.mainMap.find('[data-plots-info]');

        this.initSectorsEvents();
        this.setPlotsStatus();
        this.handleUrlSection(false);
        this.initUrlChangeEvents();
    }

    initSectorsEvents() {
        if (this.sectorsSelection.length) {
            this.sectorsSelection.find('[data-plots-sector-selector]').click(this.handleSelectSector.bind(this));
        } else {
            this.sector = this.mainMap.find('[data-plots-sector]');
            this.sector.show();
            this.plots = this.sector.find('[data-plots-plot]');
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
                const forceSector = plot.attr('data-plots-plot-sector');

                if (event.type === 'click') {
                    this.showPlotInfo(plotNumber, forceSector, true);
                } else if (!this.plotSelected) {
                    this.showPlotInfo(plotNumber, forceSector, false);
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
                    plotEl = this.sector.find(`[data-plots-plot="${plot.plotNr}"][data-plots-plot-sector="${plot.sector.value}"]`);

                    if (!plotEl.length && this.sector.find(`[data-plots-plot="${plot.plotNr}"]:not([data-plots-plot-sector])`).length) {
                        plotEl = this.sector.find(`[data-plots-plot="${plot.plotNr}"]:not([data-plots-plot-sector])`);
                    } else if(!plotEl.length) {
                        console.log(`sector element for plot ${(plot.sector && plot.sector.value) ? plot.sector.value : ''}${plot.plotNr} not found!`, plot);
                    }
                }
            } else if (this.sector) {
                plotEl = $(this.sector).find(`[data-plots-plot="${plot.plotNr}"]`)
            }

            if (plotEl && plotEl.length) {
                plotEl.addClass(`plot-status--${plot.status.value}`);
            } else {
                console.log(`plot ${(plot.sector && plot.sector.value) ? plot.sector.value : ''}${plot.plotNr} element not found!`, plot);
            }
        })
    }

    handleSelectSector(event) {
        const sector = $(event.currentTarget).attr('data-plots-sector-selector');
        const url = new URL(window.location.href);

        if (sector && typeof sector === 'string') {
            url.searchParams.set('sector', sector);

            this.sector = $(`[data-plots-sector="${sector}"]`);

            if (this.sector.length) {
                this.sectorsSelection.hide();
                this.sector.show();
                window.history.pushState({}, '', url);
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

        const url = new URL(window.location.href);

        url.searchParams.delete('sector');
        window.history.pushState({}, '', url);

        this.sector.hide();
        this.sector = null;
        this.sectorsSelection.show();
        this.hidePlotInfo(true);
    }

    showPlotInfo(plotNr, forceSector, selectPlot) {
        const plotData = window.FunktionalPlots.find((plot) => {
            if (plot.plotNr !== plotNr) {
                return false;
            }

            if (
                (forceSector || this.sector && this.sector.attr('data-plots-sector')) &&
                (!plot.sector || !plot.sector.value)
            ) {
                return false;
            }

            if (forceSector && plot.sector.value !== forceSector) {
                return false;
            } else if (this.sector && this.sector.attr('data-plots-sector') && plot.sector.value !== this.sector.attr('data-plots-sector')) {
                return false;
            }

            return true;
        });

        if (!plotData) {
            console[selectPlot ? 'error' : 'warn'](`Plot ${plotNr} data not found!`);
            return;
        }

        if (selectPlot) {
            this.plotSelected = plotData;
            this.plotInfoModal.addClass('stay-visible');
        }

        this.prepareInfoModalForPlot(plotData, forceSector);
        this.plotInfoModal.show();
    }

    showNextPlotInfo(event) {
        if (event) {
            event.preventDefault();
        }

        if (this.plotSelected.sector && this.plotSelected.sector.value &&
            this.sector.find(`[data-plots-plot="${this.plotSelected.plotNr}"][data-plots-plot-sector="${this.plotSelected.sector.value}"]`).length) {
            this.showPlotInfo(this.plotSelected.plotNr + 1, this.plotSelected.sector.value, true);
        } else {
            this.showPlotInfo(this.plotSelected.plotNr + 1, null, true);
        }
    }

    showPrevPlotInfo(event) {
        if (event) {
            event.preventDefault();
        }

        if (this.plotSelected.sector && this.plotSelected.sector.value &&
            this.sector.find(`[data-plots-plot="${this.plotSelected.plotNr}"][data-plots-plot-sector="${this.plotSelected.sector.value}"]`).length) {
            this.showPlotInfo(this.plotSelected.plotNr - 1, this.plotSelected.sector.value, true);
        } else {
            this.showPlotInfo(this.plotSelected.plotNr - 1, null, true);
        }
    }

    hidePlotInfo(withSelected) {
        if (withSelected) {
            this.plotSelected = null;
            this.plotInfoModal.removeClass('stay-visible');
        } else if (this.plotSelected) {
            return;
        }

        this.plotInfoModal.hide();
    }

    prepareInfoModalForPlot(plotData) {
        PlotDataElement.prepareConditionalElementsForPlot(plotData, this.plotInfoModal)
        PlotDataElement.prepareParamElementsForPlot(plotData, this.plotInfoModal);
        PlotDataElement.prepareParamClassesForPlot(plotData, this.plotInfoModal);

        this.plotInfoModal.find('[data-plots-info-on-selected]')[this.plotSelected ? 'show' : 'hide']();

        const prevPlot = window.FunktionalPlots.find((plot) => plot.plotNr === (plotData.plotNr - 1) &&
            ((!plotData.sector || !plotData.sector.value || !plot.sector || !plot.sector.value) || plot.sector.value === plotData.sector.value));
        const nextPlot = window.FunktionalPlots.find((plot) => plot.plotNr === (plotData.plotNr + 1) &&
            ((!plotData.sector || !plotData.sector.value || !plot.sector || !plot.sector.value) || plot.sector.value === plotData.sector.value));

        this.plotInfoModal.find('[data-plots-info-prev]')[prevPlot ? 'show' : 'hide']();
        this.plotInfoModal.find('[data-plots-info-next]')[nextPlot ? 'show' : 'hide']();
    }

    initUrlChangeEvents() {
        window.addEventListener('locationchange', this.handleUrlSection.bind(this));
        window.addEventListener('hashchange', this.handleUrlSection.bind(this));
        window.addEventListener('replacestate', this.handleUrlSection.bind(this));
        window.addEventListener('popstate', this.handleUrlSection.bind(this));
    }

    handleUrlSection(backToMainMap = true) {
        const url = new URL(window.location.href);

        if (url.searchParams.get('sector')) {
            const sectorElFormUrl = this.sectorsSelection.find(`[data-plots-sector-selector="${url.searchParams.get('sector')}"]`);

            if (sectorElFormUrl) {
                this.handleSelectSector({currentTarget: sectorElFormUrl});
            }
        } else if (backToMainMap) {
            this.handleBackToMainMap();
        }
    }
}

class FunktionalPlotsList {
    constructor() {
        this.mainList = $('[data-plot-list]');
        this.filters = {};
        this.sort = 'asc';
        this.sortBy = 'plotNr';
        this.activePage = 0;
        this.perPage = 14;
        this.bannerAfterPlots = 5;
        this.hideSold = false;
        this.plotTemplate = this.mainList.find('[data-plot-list-plot-template]').clone();
        this.banerTemplate = this.mainList.find('[data-plot-list-baner-template]').clone();
        this.plotsContainer = this.mainList.find('[data-plot-list-container]');
        this.pagination = this.mainList.find('[data-plot-list-pagination]');

        this.initFilters();
        this.initSorting();
        this.reloadList();

        this.mainList.find('[data-plot-list-plot-template]').remove();
        this.mainList.find('[data-plot-list-baner-template]').remove();
    }

    initFilters() {
        this.mainList.find('[data-plot-list-filter]').toArray().forEach(filter => {
            const filterName = $(filter).attr('data-plot-list-filter');

            if ($(filter).is('select')) {
                this.addFilterValuesToSelect(this.getFilterValues(filterName), $(filter));
            }

            $(filter).on('change', this.handleFilterChange.bind(this));
        });

        this.mainList.find('[data-plot-list-hide-sold]').on('change', (event) => {
            this.hideSold = $(event.currentTarget).is(':checked');
            this.reloadList();
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
            multiple: true,
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

        this.plotsContainer.html('');

        plots.plots.forEach((plot, index) => {
            const plotElement = this.plotTemplate.clone();

            plotElement.removeAttr('data-plot-list-plot-template');
            plotElement.addClass('plots-list__item');
            PlotDataElement.prepareConditionalElementsForPlot(plot, plotElement)
            PlotDataElement.prepareParamElementsForPlot(plot, plotElement);
            PlotDataElement.prepareParamClassesForPlot(plot, plotElement);

            this.plotsContainer.append(plotElement);

            if ((index + 1) % this.bannerAfterPlots === 0) {
                const banerElement = this.banerTemplate.clone();

                banerElement.removeAttr('data-plot-list-baner-template');
                banerElement.addClass('plots-list__baner');
                this.plotsContainer.append(banerElement);

            }
        });

        this.reloadPagination(plots.all);
    }

    reloadPagination(allCount) {
        this.pagination.html('');
        const currentItemsCount = this.activePage * this.perPage;

        this.pagination.append('<div class="plots-nav"></div>');

        if (this.activePage) {
            this.pagination.find('.plots-nav').append('<button class="plots-nav__prev" data-plot-list-pagination-prev>POPRZEDNIA</button></div><div class="plots-nav__number-wrap">');
        }
        this.pagination.find('.plots-nav').append(`<div class="plots-nav__wrap"><span class="plots-nav__wrap__name">Strona</span></div>`);

        for (let i = this.perPage; i <= allCount; i += this.perPage) {
            this.pagination.find('.plots-nav__wrap').append(`<button ${((i / this.perPage) - 1) === this.activePage ? 'class="plots-nav__number plots-nav__number--active" ' : 'class="plots-nav__number" '}data-plot-list-pagination-page="${(i / this.perPage) - 1}"> ${i / this.perPage}</button>`);
        }


        if (currentItemsCount + this.perPage < allCount) {
            this.pagination.find('.plots-nav').append('</div><button class="plots-nav__next" data-plot-list-pagination-next>NASTĘPNA</button>');
        }

        if (this.pagination.find('button').length) {
            $('[data-plot-list-pagination-prev]').on('click', (event) => {
                event.preventDefault();
                this.activePage = Math.max((this.activePage - 1), 0);
                this.scrollToList();
                this.reloadList();
            });

            $('[data-plot-list-pagination-next]').on('click', (event) => {
                event.preventDefault();
                this.activePage = Math.min((this.activePage + 1), (allCount / this.perPage));
                this.scrollToList();
                this.reloadList();
            });

            $('[data-plot-list-pagination-page]').on('click', (event) => {
                event.preventDefault();
                const page = parseInt($(event.target).attr('data-plot-list-pagination-page'));

                if (page !== this.activePage) {
                    this.activePage = Math.max(Math.min(page, (allCount / this.perPage)), 0);
                    this.scrollToList();
                    this.reloadList();
                }
            });
        }
    }

    scrollToList() {
        $(document).scrollTop(this.mainList.offset().top);
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

            return filterResult;
        }) : true).filter(plot => this.hideSold ? plot.status.value !== 'sprzedana' : true).sort((plotA, plotB) => {
            const valueA = Number.isNaN(parseFloat(plotA[this.sortBy])) ? plotA[this.sortBy] : parseFloat(plotA[this.sortBy]);
            const valueB = Number.isNaN(parseFloat(plotB[this.sortBy])) ? plotB[this.sortBy] : parseFloat(plotB[this.sortBy]);

            return this.sort === 'asc' ? (valueA > valueB ? 1 : -1) : (valueA > valueB ? -1 : 1);
        });

        return {
            plots: filteredPlots.slice(this.activePage * this.perPage, (this.activePage * this.perPage) + this.perPage),
            all: filteredPlots.length,
        };
    }
}

class FunktionalPlotsCollectedInfo {
    constructor() {
        this.collectedInfo = $('[plots-collected-info]');

        this.setCollectedInfo();
    }

    setCollectedInfo() {
        this.collectedInfo.find('[plots-collected-count-by-sector]').toArray().forEach((countEl) => {
            const sector = $(countEl).attr('plots-collected-count-by-sector');

            $(countEl).text(window.FunktionalPlots.filter(plot => plot.sector.value === sector).length);
        });

        this.collectedInfo.find('[plots-collected-available-count-by-sector]').toArray().forEach((countEl) => {
            const sector = $(countEl).attr('plots-collected-available-count-by-sector');

            $(countEl).text(window.FunktionalPlots.filter(plot => plot.status.value === 'wolna' && plot.sector.value === sector).length);
        });
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

    if ($('[plots-collected-info]').length) {
        new FunktionalPlotsCollectedInfo();
    }
});
