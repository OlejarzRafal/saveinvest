class FunktionalPlotsMap {
    constructor() {
    }
}

$(() => {
    if ($('[data-plots-map]').length) {
        new FunktionalPlotsMap();
    }
});
