class FunktionalPlotsMap {
    constructor() {
        if(!window.funktionalPlots || typeof window.funktionalPlots !== 'object') {
            console.error('funktionalPlots data not found!');
            return;
        }

        this.mainMap = $('[data-plots-map]');
        this.sectorsSelection = $('[data-plots-sectors]');
        this.sectors = $('[data-plots-sector]');
        this.sector = null;
        this.plots = null;
        this.plotSelected = null;

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

            if(plotEl && plotEl.length) {
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

        console.log('plotData', plotData);
    }

    hidePlotInfo(withSelected) {
        if (withSelected) {
            this.plotSelected = null;
        }
    }
}

$(() => {
    if ($('[data-plots-map]').length) {
        new FunktionalPlotsMap();
    }
});
