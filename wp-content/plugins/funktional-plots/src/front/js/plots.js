class FunktionalPlotsMap {
    constructor() {
        if (!window.funktionalPlots || typeof window.funktionalPlots !== 'object') {
            console.error('funktionalPlots data not found!');
            return;
        }

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
            if(event) {
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
                const plotNumber = plot.attr('data-plots-plot');

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
        window.funktionalPlots.forEach((plot) => {
            let plotEl;

            if (plot.sector && plot.sector.value) {
                const sectorEl = $(`[data-plots-sector="${plot.sector.value}"]`);

                if (sectorEl && sectorEl.length) {
                    plotEl = sectorEl.find(`[data-plots-plot="${plot.plotNr}"]`)
                } else {
                    console.log(`sector element for plot ${plot} not found!`);
                }
            } else if (this.sector) {
                plotEl = $(this.sector).find(`[data-plots-plot="${plot.plotNr}"]`)
            }

            if (plotEl && plotEl.length) {
                plotEl.addClass(`plot-status--${plot.status.value}`);
            } else {
                console.log(`plot ${plot} element not found!`);
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
        const plotData = window.funktionalPlots.find((plot) => plot.plotNr === plotNr);

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

        this.showPlotInfo((parseInt(this.plotSelected.plotNr) + 1).toString(), true);
    }

    showPrevPlotInfo(event) {
        if (event) {
            event.preventDefault();
        }

        this.showPlotInfo((parseInt(this.plotSelected.plotNr) - 1).toString(), true);
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

        const prevPlot = window.funktionalPlots.find((plot) => plot.plotNr === (parseInt(plotData.plotNr) - 1).toString());
        const nextPlot = window.funktionalPlots.find((plot) => plot.plotNr === (parseInt(plotData.plotNr) + 1).toString());

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

            if(conditionAbove.css('display') === 'none') {
                $(paramElement).text('');
                return;
            }

            const getPlotDataParam = (plotParamData) => {
                if (!plotParamData) {
                    return '';
                }

                return typeof plotParamData === 'object' ? plotParamData.label : plotParamData;
            }

            if(param.includes('|')) {
                const params = param.split('|');

                $(paramElement).text(params.map((param) => getPlotDataParam(plotData[param])).join(''));
            } else {
                $(paramElement).text(getPlotDataParam(plotData[param]));
            }
        })
    }
}

$(() => {
    if ($('[data-plots-map]').length) {
        new FunktionalPlotsMap();
    }
});
