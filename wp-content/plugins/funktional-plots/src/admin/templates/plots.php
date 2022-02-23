<link rel="stylesheet" href="<?= home_url('/wp-content/plugins/funktional-plots/dist/admin/css/admin.css') ?>">
<script src="<?= home_url('/wp-content/plugins/funktional-plots/dist/admin/js/admin.js') ?>"></script>

<main class="funktional-plots">
    <div id="wpbody" role="main">
        <div id="wpbody-content">
            <div class="wrap">
                <h1 class="wp-heading-inline">Ceny działek</h1>
                
                <a href="<?= home_url('/wp-admin/post-new.php?post_type=plots') ?>"
                   class="page-title-action" target="_blank">Dodaj nową działkę</a>

                <hr class="wp-header-end">
                <div class="clear"></div>

                <form class="funktional-plots__filters">
                    <label>
                        <span>Inwestycja</span>
                        <select name="investition">
                            <option value="">Wszystkie</option>
                        </select>
                    </label>
                    <label>
                        <span>Sektor</span>
                        <select name="sector">
                            <option value="">Wszystkie</option>
                        </select>
                    </label>
                    <label>
                        <span>Nr działki</span>
                        <div class="range-slider" data-min="0" data-max="100" data-range="100" name="plotNr"></div>
                        <span class="range-slider__values"><span>0</span> - <span>0</span></span>
                    </label>
                    <label>
                        <span>Typ działki</span>
                        <select name="plot_type">
                            <option value="">Wszystkie</option>
                        </select>
                    </label>
                    <label>
                        <span>Status</span>
                        <select name="status">
                            <option value="">Wszystkie</option>
                        </select>
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
                            <th scope="col" class="manage-column"><span>Inwestycja</span></th>
                            <th scope="col" class="manage-column"><span>Sektor</span></th>
                            <th scope="col" class="manage-column"><span>Nr działki</span></th>
                            <th scope="col" class="manage-column"><span>Typ działki</span></th>
                            <th scope="col" class="manage-column"><span>Status</span></th>
                            <th scope="col" class="manage-column"><span>Cena netto</span><input data-all-plots-price type="number"></th>
                            <th scope="col" class="manage-column"><span>Powierzchnia</span></th>
                            <th scope="col" class="manage-column"><span>Rabat</span></th>
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