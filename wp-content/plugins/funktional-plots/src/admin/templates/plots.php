<link rel="stylesheet" href="<?= home_url('/wp-content/plugins/funktional-plots/dist/admin/css/admin.css') ?>?1.0.0">
<script src="<?= home_url('/wp-content/plugins/funktional-plots/dist/admin/js/admin.js') ?>?1.0.0"></script>

<main class="funktional-plots">
    <div id="wpbody" role="main">
        <div id="wpbody-content">
            <div class="wrap">
                <h1 class="wp-heading-inline">Ceny działek</h1>
                
                <a href="<?= admin_url('/post-new.php?post_type=plots') ?>"
                   class="page-title-action" target="_blank">Dodaj nową działkę</a>

                <hr class="wp-header-end">
                <div class="clear"></div>

                <form class="funktional-plots__filters">
                    <label>
                        <span>Inwestycja</span><select name="investition"></select>
                    </label>
                    <label>
                        <span>Sektor</span>
                        <select name="sector"></select>
                    </label>
                    <label>
                        <span>Nr działki</span>
                        <div class="range-slider" data-min="0" data-max="100" data-range="100" name="plotNr"></div>
                        <span class="range-slider__values"><span>0</span> - <span>0</span></span>
                    </label>
                    <label>
                        <span>Typ działki</span>
                        <select name="plot_type"></select>
                    </label>
                    <label>
                        <span>Status</span>
                        <select name="status"></select>
                    </label>
                    <label>
                        <span>Cena netto</span>
                        <div class="range-slider" data-min="0" data-max="100" data-range="100" name="priceNetto"></div>
                        <span class="range-slider__values"><span>0</span> - <span>0</span></span>
                    </label>
                    <label>
                        <span>Powierzchnia</span>
                        <div class="range-slider" data-min="0" data-max="100" data-range="100" name="area"></div>
                        <span class="range-slider__values"><span>0</span> - <span>0</span></span>
                    </label>
                    <label>
                        <span>Rabat</span>
                        <div class="range-slider" data-min="0" data-max="100" data-range="100" name="discount"></div>
                        <span class="range-slider__values"><span>0</span> - <span>0</span></span>
                    </label>

                    <div class="submit-button">
                        <button class="button action" type="submit">Odśwież listę</button>
                    </div>
                </form>

                <div class="funktional-plots__table">
                    <table class="wp-list-table widefat fixed striped table-view-list posts">
                        <thead>
                        <tr>
                            <th scope="col" class="manage-column status-column"></th>
                            <th scope="col" class="manage-column">
                                <span>Inwestycja</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="investition-desc"></button>
                                    <button class="sorting-buttons_asc active" data-sort="investition-asc"></button>
                                </div>
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Sektor</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="sector-desc"></button>
                                    <button class="sorting-buttons_asc" data-sort="sector-asc"></button>
                                </div>
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Nr działki</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="plotNr-desc"></button>
                                    <button class="sorting-buttons_asc" data-sort="plotNr-asc"></button>
                                </div>
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Typ działki</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="plot_type-desc"></button>
                                    <button class="sorting-buttons_asc" data-sort="plot_type-asc"></button>
                                </div>
                                <select data-all-plots-data="plot_type"></select>
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Status</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="status-desc"></button>
                                    <button class="sorting-buttons_asc" data-sort="status-asc"></button>
                                </div>
                                <select data-all-plots-data="status"></select>
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Cena netto</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="discount-desc"></button>
                                    <button class="sorting-buttons_asc" data-sort="priceNetto-asc"></button>
                                </div>
                                <input data-all-plots-data="priceNetto" type="number">
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Powierzchnia</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="area-desc"></button>
                                    <button class="sorting-buttons_asc" data-sort="area-asc"></button>
                                </div>
                                <input data-all-plots-data="area" type="number">
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Rabat</span>
                                <div class="sorting-buttons">
                                    <button class="sorting-buttons_desc" data-sort="discount-desc"></button>
                                    <button class="sorting-buttons_asc" data-sort="discount-asc"></button>
                                </div>
                                <input data-all-plots-data="discount" type="number">
                            </th>
                            <th scope="col" class="manage-column">
                                <span>Data obowiązywania rabatu</span>
                                <input data-all-plots-data="discount_date" type="text" data-datepicker-field>
                            </th>
                            <th scope="col" class="manage-column"><button data-save-all-plots class="page-title-action">Zapisz Wszystkie</button></th>
                            <th scope="col" class="manage-column"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- HERE WILL BE GENERATED PLOTS LIST -->
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</main>