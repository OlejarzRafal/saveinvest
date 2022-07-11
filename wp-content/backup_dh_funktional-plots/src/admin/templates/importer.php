<link rel="stylesheet" href="<?= home_url('/wp-content/plugins/funktional-plots/dist/admin/css/importer.css') ?>?1.0.0">
<script src="<?= home_url('/wp-content/plugins/funktional-plots/dist/admin/js/admin.js') ?>?1.0.0"></script>

<main class="funktional-plots">
    <div id="wpbody" role="main">
        <div id="wpbody-content">
            <div class="wrap wp-core-ui">
                <h1 class="wp-heading-inline">Importuj działki</h1>

                <?php if (isset($_FILES) && !empty($_FILES) && isset($_FILES['import-plots-file'])) { ?>
                    <?php
                    $file = wp_upload_bits($_FILES['import-plots-file']['name'], null, @file_get_contents($_FILES['import-plots-file']['tmp_name']));

                    if ($file['error']) {
                        exit('Wystąpił problem podczas przesyłania pliku!');
                    }

                    $csv = array_map('str_getcsv', file($file['file']));
                    array_walk($csv, function(&$a) use ($csv) {
                        $a = @array_combine($csv[0], $a);
                    });
                    array_shift($csv); # remove column header

                    echo "<script> window.FunktionalImportData = {
                            plotsCsvData: ". json_encode($csv) .",
                            homeUrl: '". home_url('/') ."',
                            importInvestition: '". $_POST['import-investition'] ."'
                          }; </script>";
                    ?>

                    <div class="progress-bar">
                        <figure>
                            <i></i>
                        </figure>

                        <div class="progress-bar__values">
                            <span>0</span>
                            <span>/</span>
                            <span>0</span>
                        </div>
                    </div>
                <?php } else { ?>
                    <form action="<?= admin_url('/admin.php?page=import-plots') ?>" class="file-upload-form"
                          enctype="multipart/form-data" method="post">

                        <label class="investition-select">
                            <span>Inwestycja</span>

                            <select name="import-investition">
                                <?php
                                foreach (get_post_types() as $postType => $postTypeName) {
                                    $postTypeObject = get_post_type_object($postType);

                                    if ($postTypeObject->show_in_menu === 'investitions') {
                                        echo '<option value="' . $postType . '">' . $postTypeObject->label . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </label>

                        <p>Plik csv musi zawierać tylko i wyłącznie pola, które można wypełnić dla danej działki.
                            Wartości muszą być rozdzielone przecinkami</p>
                        <label class="file-upload-input">
                            <input type="file" name="import-plots-file" accept="text/csv">
                            <button class="button action" type="button">Wybierz</button>
                            <span>Wybierz CSV do importu</span>
                        </label>

                        <label>
                            <br><br>
                            <button class="button action" type="submit">Importuj</button>
                        </label>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</main>