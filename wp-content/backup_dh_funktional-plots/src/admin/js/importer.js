import $ from 'jquery';

class PlotsImporterService {
    addPlot(data) {
        return $.post(`${window.FunktionalImportData.homeUrl}wp-json/funktional-plots/v1/add-plot`, {
            plotData: {
                ...data,
                Inwestycja: window.FunktionalImportData.importInvestition,
            },
        }, null, 'text');
    }
}

class PlotsImporter {
    constructor() {
        this.service = new PlotsImporterService();
        this.fileInput = $('[name="import-plots-file"]');
        this.progressBar = $('.progress-bar');
        this.importedPlots = 0;

        if (this.fileInput.length) {
            this.initFileInput()
        }

        if (window.FunktionalImportData && window.FunktionalImportData.plotsCsvData && window.FunktionalImportData.plotsCsvData.length) {
            this.runImport();
        }
    }

    initFileInput() {
        this.fileInput.on('change', () => {
            const files = this.fileInput.get(0).files;

            if (files && files.length) {
                this.fileInput.parent().find('span').text(files[0].name);
            } else {
                this.fileInput.parent().find('span').text('Wybierz CSV do importu');
            }
        });
    }

    runImport() {
        this.progressBar.find('.progress-bar__values span:last-of-type').text(window.FunktionalImportData.plotsCsvData.length);
        this.importPlot(0);
    }

    importPlot(index) {
        const plotData = window.FunktionalImportData.plotsCsvData[index];

        this.service.addPlot(plotData).then(response => {
            if (response === 'true') {
                this.importedPlots = index + 1;
                this.progressBar.find('.progress-bar__values span:first-of-type').text(this.importedPlots);
                $('.progress-bar figure i').width(parseFloat((this.importedPlots / window.FunktionalImportData.plotsCsvData.length) * 100) + '%')
            } else {
                alert('Wystąpił błąd podczas importu działki ' + plotData['Nr działki'] + (plotData['Sektor'] ? (' z sektoru ' + plotData['Sektor']) : ''));
            }

            if ((index + 1) === window.FunktionalImportData.plotsCsvData.length) {
                setTimeout(() => {
                    if (this.importedPlots === window.FunktionalImportData.plotsCsvData.length) {
                        alert('Import zakończony sukcesem!');
                    } else {
                        alert('Import zakończony - wystąpiły błędy.');
                    }

                    window.location.reload();
                }, 100);
            } else {
                setTimeout(() => {
                    this.importPlot(index + 1);
                }, 50);
            }
        });
    }
}

$(() => {
    if ($('.file-upload-form').length || $('.progress-bar').length) {
        new PlotsImporter();
    }
});
