class FunktionalPlotsMap {
    constructor() {
        this.mainMap = $('[data-plots-map]');
        this.sectorsSelection = $('[data-plots-sectors]');
        this.sectors = $('[data-plots-sector]');
        this.sector = null;
        this.plots = null;
        this.plotInfoShowed = false;

        this.initSectorsEvents();
    }

    initSectorsEvents() {
        if (this.sectorsSelection.length) {
            this.sectorsSelection.find('[data-plots-sector-selector]').click(this.handleSelectSector.bind(this));
        } else {
            this.sector = $('[data-plots-sector]');
            this.sector.show();
            this.initPlotsEvent();
        }
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
                } else if (!this.plotInfoShowed) {
                    this.showPlotInfo(plotNumber, false);
                }
            } else {
                console.error('Selected plot has wrong attribute!')
            }
        });

        this.plots.on('mouseout blur', () => {
            if (!this.plotInfoShowed) {
                this.hidePlotInfo();
            }
        });
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
                console.error('Sector was not found!');
            }
        } else {
            console.error('Selected sector has wrong attribute!');
        }
    }

    showPlotInfo(plotNr, stayOnBlur) {
        const plotData = window.funktionalPlots.find((plot) => plot.plotNr === plotNr);

        if (!plotData) {
            console.error('Plot data not found!');
            return;
        }

        if (stayOnBlur) {
            this.plotInfoShowed = true;
        }

        console.log('plotData', plotData);
    }

    hidePlotInfo() {
        this.plotInfoShowed = false;
    }
}

$(() => {
    if ($('[data-plots-map]').length) {
        new FunktionalPlotsMap();
    }
});
