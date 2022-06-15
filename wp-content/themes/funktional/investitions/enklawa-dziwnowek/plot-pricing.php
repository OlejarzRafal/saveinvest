<?php

/**
 * Template Name: Ceny działek enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
global $PlotsFront;

$PlotsFront->getScriptsAndStyles('Enklawa Dziwnowek');
?>
<?php
$query = array(
    'post_type' => 'areas',
    'posts_per_page' => -1,
    'order' =>  'ASC',
    'ignore_sticky_posts' => 0,
    'post_status' => 'publish'
);
$query_result = new WP_Query($query);

if ($query_result->have_posts()) {
    $areas_status = [];
    while ($query_result->have_posts()) {
        $query_result->the_post();
        $variable = get_post_meta(get_the_ID());
        if ($variable['status'][0] == 'free') {
            $color = '#079207';
        } elseif ($variable['status'][0] == 'reservation') {
            $color = '#cf4f00';
        } else {
            $color = '#d32407';
        }
        array_push($areas_status, [$variable['status'][0], $color]);
    }
}
?>

<div class="mainSection aboutPage pricesPage">

    <?php get_template_part('investitions/enklawa-dziwnowek/nav-head'); ?>
    <?php get_template_part('investitions/enklawa-dziwnowek/nav-subpages'); ?>


</div>

<div class="widget widget-areaslist">

    <div class="bikes">
        <div class="imageBox">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/preview_bikes.jpg" alt="Plac zabaw" class="img-fluid" />
            <div class="name">
                portiernia i rowerownia
            </div>
        </div>
    </div>

    <div class="pool">
        <div class="imageBox">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/preview_pool.jpg" alt="Plac zabaw" class="img-fluid" />
            <div class="name">
                basen
            </div>
        </div>
    </div>

    <div class="playground">
        <div class="imageBox">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/preview_playground.png" alt="Plac zabaw" class="img-fluid" />
            <div class="name">
                Plac zabaw
            </div>
        </div>
    </div>



    <div class="popup" data-status="free" data-type="long">
        <div class="in">
            <div class="btn-close">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/icons/icon_close.png" alt="Zamknij" />
            </div>

            <div class="row table-row">
                <div class="left col-xs-12 col-sm-5 col-md-5">
                    <div class="line"></div>
                    <div class="pastePhoto"><img class="photo" src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/02.jpg" alt=""></div>
                </div>

                <div class="right col-xs-12 col-sm-7 col-md-7">
                    <div class="pasteHeader">
                        <div class="title1">Działka</div>
                        <div class="title2">
                            42
                        </div>
                        <div class="status">
                            <span class="point"></span>
                            Wolna
                        </div>
                    </div>
                    <div class="pasteData">
                        <div>
                            <div>Nr ewidencyjny:</div>
                            <div>4/610</div>


                        </div>
                        <div>
                            <div>Typ działki:</div>
                            <div>Budowlana</div>
                        </div>
                        <div>
                            <div>Powierzchnia:</div>
                            <div>366m2</div>
                        </div>

                        <div>
                            <div>Cena netto / m<sub>2</sub></div>
                            <div>
                                <span class="new gray">186 840 zł</span>
                            </div>
                        </div>
                        <div>
                            <div>Rata / mc od:</div>
                            <div>
                                <span class="new">54 zł</span>
                            </div>
                        </div>
                    </div>
                    <div class="pasteBts">
                        <a class="btn-download" target="_blank" href="#">Pobierz kartę</a>
                        <a class="btn-write" data-id="42">Wiadomość</a>
                    </div>
                </div>
                <div class="pasteExtra">
                    <svg x="0px" y="0px" width="159px" height="94.449px" viewBox="0 0 159 94.449" enable-background="new 0 0 159 94.449" xml:space="preserve">
                        <polygon fill="#253862" points="4,0 64,-0.5 159,54.541 159,89.069 "></polygon>
                        <polygon fill="#0e1525" points="149,94.449 159,89.069 149,83.323 "></polygon>
                        <polygon fill="#0e1525" points="4,0 0.152,5.5 13.499,5.458 "></polygon>
                    </svg>
                    <div class="text">TANIEJ O 39&nbsp;528</div>
                </div>
            </div>
        </div>
    </div>

    <div class="imageBox">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/beach_n_sea.jpg" alt="Morze i plaża" class="img-fluid" />
        <div class="name">
            Morze i plaża
        </div>
    </div>

    <div class="introSection">
        <div class="subtitle">
            Przy pięknym lesie, tuż obok morza
        </div>
        <div class="title">
            Działki pośród natury
        </div>
        <div class="did_u_know">
            Czy wiesz, że w ostatnim roku 375 000 turystów odwiedziło Dziwnów?<br>
            Nie musisz inwestować 1 000 000 zł, żeby stać się właścicielem działki.
        </div>

        <div class="description">
            Enklawa Dziwnówek to luksusowy kompleks działek budowlanych, położonych 600 m od morza. Przyszłe
            ogrodzone
            osiedle będzie posiadać ogrodzony basen zewnętrzny, oświetlenie, portiernię z ochroną, wspólny plac
            zabaw
            dla dzieci. Działki zostaną uzbrojone w prąd, wodę, gaz, a drogi wewnętrzne zostaną wykonane z kostki
            brukowej.
            <div class="arrow">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/arrow_down.svg" alt="" />
            </div>
        </div>
    </div>

    <div id="areamap">
        <div class="map">
            <div class="areamap_static" tabindex="1">


                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="custom_map" width="1920" height="2771" viewBox="0 0 1920 2771" style="display: block;">
                    <defs>
                        <clipPath id="clip-path">
                            <rect id="Rectangle_589" data-name="Rectangle 589" width="1920" height="2771" transform="translate(0 159)" fill="none" />
                        </clipPath>
                    </defs>
                    <g id="Mask_Group_4" data-name="Mask Group 4" transform="translate(0 -159)" clip-path="url(#clip-path)">
                        <g id="Group_1239" data-name="Group 1239">
                            <g id="basen_i_plac" data-name="basen i plac" transform="translate(-12 -28)">
                                <path id="playground" data-name="plac zabaw" d="M11017.554,6259.75l46.054,80,14.59-23.486-3.075-86.757Z" transform="translate(-10143 -4312)" fill="#fff" opacity="0.25" />
                                <path id="pool" d="M10989.235,6210.58l28.268,49.154,57.5-30.18-1.08-59.185-6.761-6.405Z" transform="translate(-10143 -4312)" fill="#fff" opacity="0.25" />
                            </g>
                            <path id="bikes" d="M11024.282,5820.3l28.216-72.222,10.106-10.528,2.948,82.75Z" transform="translate(-10155 -4340)" fill="#fff" opacity="0.25" />
                            <g id="Group_1210" data-name="Group 1210">
                                <g id="_1" data-name="1" transform="translate(-12 -28)">
                                    <path id="Path_1570" data-name="1" d="M943.025,1425.918l1.517,53.1,6.3,6.419,36.764-1.167-1.167-60.689Z" fill="<?php echo $areas_status[0][1]; ?>" opacity="0.75" />
                                    <text id="_1-2" data-name="1" transform="translate(967 1459)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-2.91" y="0">1</tspan>
                                    </text>
                                </g>
                                <g id="_22" data-name="22" transform="translate(-12 -28)">
                                    <path id="Path_1496" data-name="22" d="M11093.862,6067.479l-1.149-38.32,6.515-7.472,40.332-1.054,1.532,45.17Z" transform="translate(-10147 -4514)" fill="<?php echo $areas_status[21][1]; ?>" opacity="0.75" />
                                    <text id="_22-2" data-name="22" transform="matrix(0.999, -0.035, 0.035, 0.999, 971.626, 1538.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.794" y="0">22</tspan>
                                    </text>
                                </g>
                                <g id="_23" data-name="23" transform="translate(-12 -28)">
                                    <path id="Path_1494" data-name="23" d="M11094.638,6065.8l-.862-38.8,47.221-1.716,1.841,38.305Z" transform="translate(-10147 -4472)" fill="<?php echo $areas_status[22][1]; ?>" opacity="0.75" />
                                    <text id="_23-2" data-name="23" transform="matrix(0.999, -0.035, 0.035, 0.999, 972.092, 1580.121)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.837" y="0">23</tspan>
                                    </text>
                                </g>
                                <g id="_24" data-name="24" transform="translate(-12 -28)">
                                    <path id="Path_1491" data-name="24" d="M11094.638,6065.8l-.862-38.8,47.709-2.108,1.353,38.7Z" transform="translate(-10146 -4432)" fill="<?php echo $areas_status[23][1]; ?>" opacity="0.75" />
                                    <text id="_24-2" data-name="24" transform="matrix(0.999, -0.035, 0.035, 0.999, 973.488, 1620.096)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.657" y="0">24</tspan>
                                    </text>
                                </g>
                                <g id="_25" data-name="25" transform="translate(-12 -28)">
                                    <path id="Path_1489" data-name="25" d="M11094.638,6065.8l-.862-38.8,47.709-2.108,1.353,38.7Z" transform="translate(-10145 -4392)" fill="<?php echo $areas_status[24][1]; ?>" opacity="0.75" />
                                    <text id="_25-2" data-name="25" transform="matrix(0.999, -0.035, 0.035, 0.999, 974.814, 1659.073)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.848" y="0">25</tspan>
                                    </text>
                                </g>
                                <g id="_26" data-name="26" transform="translate(-12 -28)">
                                    <path id="Path_1487" data-name="26" d="M11094.054,6065.212v-39.148l47.676-1.506,1.107,39.035Z" transform="translate(-10144 -4352)" fill="<?php echo $areas_status[25][1]; ?>" opacity="0.75" />
                                    <text id="_26-2" data-name="26" transform="matrix(0.999, -0.035, 0.035, 0.999, 976.28, 1700.047)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.122" y="0">26</tspan>
                                    </text>
                                </g>
                                <g id="_27" data-name="27" transform="translate(-12 -28)">
                                    <path id="Path_1476" data-name="27" d="M11094.054,6065.212v-39.148l48.2-1.684.585,39.213Z" transform="translate(-10143 -4312)" fill="<?php echo $areas_status[26][1]; ?>" opacity="0.75" />
                                    <text id="_27-2" data-name="27" transform="matrix(0.999, -0.035, 0.035, 0.999, 976.676, 1739.023)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.184" y="0">27</tspan>
                                    </text>
                                </g>
                                <g id="_28" data-name="28" transform="translate(-12 -28)">
                                    <path id="Path_1498" data-name="28" d="M11096.449,6064.232l-1.5-38.732,47.575-1.246,1.369,37.736Z" transform="translate(-10143 -4271)" fill="<?php echo $areas_status[27][1]; ?>" opacity="0.75" />
                                    <text id="_28-2" data-name="28" transform="matrix(0.999, -0.035, 0.035, 0.999, 978.002, 1778)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.993" y="0">28</tspan>
                                    </text>
                                </g>
                                <g id="_29" data-name="29" transform="translate(-12 -28)">
                                    <path id="Path_1475" data-name="29" d="M11096,6106.438l.951,38.517,48.363-1.825-1.428-38.8Z" transform="translate(-10143 -4312)" fill="<?php echo $areas_status[28][1]; ?>" opacity="0.75" />
                                    <text id="_29-2" data-name="29" transform="matrix(0.999, -0.035, 0.035, 0.999, 979.398, 1819.339)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.122" y="0">29</tspan>
                                    </text>
                                </g>
                                <g id="_30" data-name="30" transform="translate(-12 -28)">
                                    <path id="Path_1500" data-name="30" d="M11096.449,6064.232l-.755-37.777,47.45-1.868,1.121,38.358Z" transform="translate(-10141 -4192)" fill="<?php echo $areas_status[29][1]; ?>" opacity="0.75" />
                                    <text id="_30-2" data-name="30" transform="matrix(0.999, -0.035, 0.035, 0.999, 980.793, 1857.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.626" y="0">30</tspan>
                                    </text>
                                </g>
                                <g id="_21" data-name="21" transform="translate(-12 -28)">
                                    <path id="Path_1495" data-name="21" d="M11094.25,6067.468l-1.583-45.218,41.333-1.341,6.567,6.227v38.607Z" transform="translate(-10098 -4516)" fill="<?php echo $areas_status[20][1]; ?>" opacity="0.75" />
                                    <text id="_21-2" data-name="21" transform="matrix(0.999, -0.035, 0.035, 0.999, 1018.661, 1536.128)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.407" y="0">21</tspan>
                                    </text>
                                </g>
                                <g id="_13" data-name="13" transform="translate(-12 -28)">
                                    <g id="Group_1136" data-name="Group 1136">
                                        <path id="Path_1499" data-name="13" d="M11096.507,6064.821l-1.86-38.691,47.442-1.536,1.121,38.483Z" transform="translate(-10091 -4194)" fill="<?php echo $areas_status[12][1]; ?>" opacity="0.75" />
                                        <text id="_13-2" data-name="13" transform="matrix(0.999, -0.035, 0.035, 0.999, 1030.759, 1855.934)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                            <tspan x="-7.567" y="0">13</tspan>
                                        </text>
                                    </g>
                                </g>
                                <g id="_14" data-name="14" transform="translate(-12 -28)">
                                    <path id="Path_1477" data-name="14" d="M11141.622,5984.271l-.73-39.034,47.574-1.619.552,38.751Z" transform="translate(-10138 -4153)" fill="<?php echo $areas_status[13][1]; ?>" opacity="0.75" />
                                    <text id="_14-2" data-name="14" transform="matrix(0.999, -0.035, 0.035, 0.999, 1029.433, 1817.269)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.446" y="0">14</tspan>
                                    </text>
                                </g>
                                <g id="_15" data-name="15" transform="translate(-12 -28)">
                                    <path id="Path_1497" data-name="Path 1497" d="M11095.767,6063.742l-1.12-37.611,46.951-2.242,1.246,38.732Z" transform="translate(-10093 -4273)" fill="<?php echo $areas_status[14][1]; ?>" opacity="0.75" />
                                    <text id="_15-2" data-name="15" transform="matrix(0.999, -0.035, 0.035, 0.999, 1026.967, 1775.983)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.462" y="0">15</tspan>
                                    </text>
                                </g>
                                <g id="_16" data-name="16" transform="translate(-12 -28)">
                                    <path id="Path_1486" data-name="16" d="M11095.538,6065.5l-1.179-39.278,47.163-1.474,1.105,39.2Z" transform="translate(-10094 -4314)" fill="<?php echo $areas_status[15][1]; ?>" opacity="0.75" />
                                    <text id="_16-2" data-name="16" transform="matrix(0.999, -0.035, 0.035, 0.999, 1025.641, 1737.006)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.735" y="0">16</tspan>
                                    </text>
                                </g>
                                <g id="_17" data-name="17" transform="translate(-12 -28)">
                                    <path id="Path_1488" data-name="17" d="M11095.538,6065.5l-1.179-39.278,47.163-1.474,1.105,39.2Z" transform="translate(-10095 -4354)" fill="<?php echo $areas_status[16][1]; ?>" opacity="0.75" />
                                    <text id="_17-2" data-name="17" transform="matrix(0.999, -0.035, 0.035, 0.999, 1024.175, 1696.067)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-6.798" y="0">17</tspan>
                                    </text>
                                </g>
                                <g id="_18" data-name="18" transform="translate(-12 -28)">
                                    <path id="Path_1490" data-name="18" d="M11095.538,6065.5l-1.179-39.278,46.7-1.341,1.245,38.7Z" transform="translate(-10096 -4394)" fill="<?php echo $areas_status[17][1]; ?>" opacity="0.75" />
                                    <text id="_18-2" data-name="18" transform="matrix(0.999, -0.035, 0.035, 0.999, 1023.849, 1657.055)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.606" y="0">18</tspan>
                                    </text>
                                </g>
                                <g id="_19" data-name="19" transform="translate(-12 -28)">
                                    <path id="Path_1492" data-name="19" d="M11095.208,6065.268l-.958-38.512,46.8-1.872,1.245,38.7Z" transform="translate(-10097 -4434)" fill="<?php echo $areas_status[18][1]; ?>" opacity="0.75" />
                                    <text id="_19-2" data-name="19" transform="matrix(0.999, -0.035, 0.035, 0.999, 1022.522, 1618.078)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.735" y="0">19</tspan>
                                    </text>
                                </g>
                                <g id="_20" data-name="20" transform="translate(-12 -28)">
                                    <path id="Path_1493" data-name="20" d="M11095.208,6065.268l-1.1-37.98,46.751-1.916,1.445,38.216Z" transform="translate(-10098 -4474)" fill="<?php echo $areas_status[19][1]; ?>" opacity="0.75" />
                                    <text id="_20-2" data-name="20" transform="matrix(0.999, -0.035, 0.035, 0.999, 1021.055, 1578.034)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.466" y="0">20</tspan>
                                    </text>
                                </g>
                                <g id="_2" data-name="2" transform="translate(-12 -28)">
                                    <path id="Path_1571" data-name="2" d="M988.542,1423.583l1.05,60.222,43.767-1.05,8.4-8.636-1.4-53.57Z" fill="<?php echo $areas_status[1][1]; ?>" opacity="0.75" />
                                    <text id="_2-2" data-name="2" transform="translate(1016 1459)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-4.297" y="0">2</tspan>
                                    </text>
                                </g>
                                <g id="_3" data-name="3" transform="translate(-12 -28)">
                                    <path id="Path_1569" data-name="3" d="M1062.3,1419.5l2.03,76.376,63.465-1.658-2.355-77.986Z" fill="<?php echo $areas_status[2][1]; ?>" opacity="0.75" />
                                    <text id="_3-2" data-name="3" transform="translate(1096 1465)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-4.457" y="0">3</tspan>
                                    </text>
                                </g>
                                <g id="_4" data-name="4" transform="translate(-12 -28)">
                                    <path id="Path_1568" data-name="4" d="M1064.4,1496.994l1.283,38.164,63.16-1.04-.837-38.408Z" fill="<?php echo $areas_status[3][1]; ?>" opacity="0.75" />
                                    <text id="_4-2" data-name="4" transform="translate(1098 1521)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-4.336" y="0">4</tspan>
                                    </text>
                                </g>
                                <g id="_5" data-name="5" transform="translate(-12 -28)">
                                    <path id="Path_1567" data-name="5" d="M1065.687,1536.792s.721,38.992,1.071,38.992,63.373-2.1,63.373-2.1l-1.421-37.824Z" fill="<?php echo $areas_status[4][1]; ?>" opacity="0.75" />
                                    <text id="_5-2" data-name="5" transform="translate(1099 1562)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-4.352" y="0">5</tspan>
                                    </text>
                                </g>
                                <g id="_6" data-name="6" transform="translate(-12 -28)">
                                    <path id="Path_1566" data-name="6" d="M1067.574,1615.465l-.72-38.758,63.373-1.4,1.051,38.281Z" fill="<?php echo $areas_status[5][1]; ?>" opacity="0.75" />
                                    <text id="_6-2" data-name="6" transform="translate(1099 1602)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-4.625" y="0">6</tspan>
                                    </text>
                                </g>
                                <g id="_7" data-name="7" transform="translate(-12 -28)">
                                    <path id="Path_1565" data-name="7" d="M1068.955,1654.552l-.7-37.7,62.906-1.634.827,38.526Z" fill="<?php echo $areas_status[6][1]; ?>" opacity="0.75" />
                                    <text id="_7-2" data-name="7" transform="translate(1100 1642)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-3.688" y="0">7</tspan>
                                    </text>
                                </g>
                                <g id="_8" data-name="8" transform="translate(-12 -28)">
                                    <path id="Path_1564" data-name="8" d="M1070.472,1695.05l-.934-38.748,62.44-1.284.769,38.328Z" fill="<?php echo $areas_status[7][1]; ?>" opacity="0.75" />
                                    <text id="_8-2" data-name="8" transform="translate(1102 1680)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-4.496" y="0">8</tspan>
                                    </text>
                                </g>
                                <g id="_9" data-name="9" transform="translate(-12 -28)">
                                    <path id="Path_1563" data-name="9" d="M1071.056,1733.915h64.271l-1.947-38.865-62.907,1.518Z" fill="<?php echo $areas_status[8][1]; ?>" opacity="0.75" />
                                    <text id="_9-2" data-name="9" transform="translate(1102 1718)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-4.625" y="0">9</tspan>
                                    </text>
                                </g>
                                <g id="_10" data-name="10" transform="translate(-12 -28)">
                                    <path id="Path_1562" data-name="10" d="M1072.969,1774.822l-1.1-38.339,63.489-1.284.116,38.106Z" fill="<?php echo $areas_status[9][1]; ?>" opacity="0.75" />
                                    <text id="_10-2" data-name="10" transform="translate(1102 1760)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.079" y="0">10</tspan>
                                    </text>
                                </g>
                                <g id="_11" data-name="11" transform="translate(-12 -28)">
                                    <path id="Path_1561" data-name="11" d="M1072.573,1776.047l.7,38.631,63.419-1.47s-.863-38.445-1.1-38.445S1072.573,1776.047,1072.573,1776.047Z" fill="<?php echo $areas_status[10][1]; ?>" opacity="0.75" />
                                    <text id="_11-2" data-name="11" transform="translate(1102 1801)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-6.02" y="0">11</tspan>
                                    </text>
                                </g>
                                <g id="_12" data-name="12" transform="translate(-12 -28)">
                                    <path id="Path_1560" data-name="12" d="M1073.623,1816.2l.7,38.631,63.583-1.867-1.493-37.931Z" fill="<?php echo $areas_status[11][1]; ?>" opacity="0.75" />
                                    <text id="_12-2" data-name="12" transform="translate(1103 1842)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.407" y="0">12</tspan>
                                    </text>
                                </g>

                                <g id="_31" data-name="31" transform="translate(-12 -28)">
                                    <path id="Path_1613" data-name="31" d="M865.337,1546.941h58.014l-1.325-38.03H880.631Z" fill="<?php echo $areas_status[30][1]; ?>" opacity="0.75" />
                                    <text id="_31-2" data-name="31" transform="matrix(0.999, -0.035, 0.035, 0.999, 896.626, 1534.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.567" y="0">31</tspan>
                                    </text>
                                </g>
                                <g id="_32" data-name="32" transform="translate(-12 -28)">
                                    <path id="Path_1612" data-name="32" d="M9521.086,5900.439l77.591-1.122-1.326-39.356-58.422.51Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[31][1]; ?>" opacity="0.75" />
                                    <text id="_32-2" data-name="32" transform="matrix(0.999, -0.035, 0.035, 0.999, 896.626, 1574.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.954" y="0">32</tspan>
                                    </text>
                                </g>
                                <g id="_33" data-name="33" transform="translate(-8.277 -28)">
                                    <path id="Path_1614" data-name="33" d="M9498.756,5941.536l17-40.44,79.2-.682,1.088,38.571Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[32][1]; ?>" opacity="0.75" />
                                    <text id="_33-2" data-name="33" transform="matrix(0.999, -0.035, 0.035, 0.999, 878.639, 1615.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.114" y="0">33</tspan>
                                    </text>
                                </g>
                                <g id="_34" data-name="34" transform="translate(-12 -28)">
                                    <path id="Path_1616" data-name="34" d="M9556.824,5941.768v46.391h37.246l7.157-6.76-1.325-40.691Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[33][1]; ?>" opacity="0.75" />
                                    <text id="_34-2" data-name="34" transform="matrix(0.999, -0.035, 0.035, 0.999, 905.626, 1660.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.993" y="0">34</tspan>
                                    </text>
                                </g>
                                <g id="_35" data-name="35" transform="translate(-12 -28)">
                                    <path id="Path_1615" data-name="35" d="M9535.1,6003.1l19.472-13.958v-47.534l-54.367,2.3-2.84,7.33Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[34][1]; ?>" opacity="0.75" />
                                    <text id="_35-2" data-name="35" transform="matrix(0.999, -0.035, 0.035, 0.999, 858.626, 1660.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.009" y="0">35</tspan>
                                    </text>
                                </g>
                                <g id="_36" data-name="36" transform="translate(-12 -28)">
                                    <path id="Path_1617" data-name="36" d="M9534.412,6004.131l-31.532,22.4-32.566-45.146,21.538-15.163,5.858-12.923Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[35][1]; ?>" opacity="0.75" />
                                    <text id="_36-2" data-name="36" transform="matrix(0.999, -0.035, 0.035, 0.999, 828.626, 1686.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.282" y="0">36</tspan>
                                    </text>
                                </g>
                                <g id="_37" data-name="37" transform="translate(-12 -28)">
                                    <path id="Path_1618" data-name="37" d="M9470.83,6049.966l-33.256-45.49,31.533-22.4,33.146,45.34Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[36][1]; ?>" opacity="0.75" />
                                    <text id="_37-2" data-name="37" transform="matrix(0.999, -0.035, 0.035, 0.999, 796.626, 1710.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.149" y="0">37</tspan>
                                    </text>
                                </g>
                                <g id="_38" data-name="38" transform="translate(-12 -28)">
                                    <path id="Path_1619" data-name="38" d="M9470.609,6049.573l-33.035-45.1,31.656-22.621,32.788,45.366Z" transform="translate(-8706 -4288)" fill="<?php echo $areas_status[37][1]; ?>" opacity="0.75" />
                                    <text id="_38-2" data-name="38" transform="matrix(0.999, -0.035, 0.035, 0.999, 764.626, 1733.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.153" y="0">38</tspan>
                                    </text>
                                </g>
                                <g id="_39" data-name="39" transform="translate(-12 -28)">
                                    <path id="Path_1620" data-name="39" d="M9470.215,6049.49l-32.911-44.628,31.286-22.958,32.985,45.358Z" transform="translate(-8738 -4265)" fill="<?php echo $areas_status[38][1]; ?>" opacity="0.75" />
                                    <text id="_39-2" data-name="39" transform="matrix(0.999, -0.035, 0.035, 0.999, 731.626, 1756.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.282" y="0">39</tspan>
                                    </text>
                                </g>
                                <g id="_40" data-name="40" transform="translate(-12 -28)">
                                    <path id="Path_1621" data-name="40" d="M9469.993,6050.786l-33.084-45.49,31.36-23.09,32.911,45.49Z" transform="translate(-8770 -4242)" fill="<?php echo $areas_status[39][1]; ?>" opacity="0.75" />
                                    <text id="_40-2" data-name="40" transform="matrix(0.999, -0.035, 0.035, 0.999, 699.626, 1780.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.505" y="0">40</tspan>
                                    </text>
                                </g>
                                <g id="_41" data-name="41" transform="translate(-12 -28)">
                                    <path id="Path_1622" data-name="41" d="M9463.223,6049.771l-20.849-34.634,1.723-18.265,24.123-16.886,32.739,45.317-16.024,12.406Z" transform="translate(-8802 -4216)" fill="<?php echo $areas_status[40][1]; ?>" opacity="0.75" />
                                    <text id="_41-2" data-name="41" transform="matrix(0.999, -0.035, 0.035, 0.999, 666.626, 1806.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.446" y="0">41</tspan>
                                    </text>
                                </g>
                                <g id="_42" data-name="42" transform="translate(-12 -28)">
                                    <path id="Path_1623" data-name="42" d="M9232.871,6109.585l-52.037-89.773,2.239-4.48,104.248,63.238Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[41][1]; ?>" opacity="0.75" />
                                    <text id="_42-2" data-name="42" transform="matrix(0.999, -0.035, 0.035, 0.999, 560.626, 1763.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.833" y="0">42</tspan>
                                    </text>
                                </g>
                                <g id="_43" data-name="43" transform="translate(-12 -28)">
                                    <path id="Path_1624" data-name="43" d="M9253.376,6144.22l-19.3-32.911,54.622-31.877,24.641,13.785-1.379,17.231Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[42][1]; ?>" opacity="0.75" />
                                    <text id="_43-2" data-name="43" transform="matrix(0.999, -0.035, 0.035, 0.999, 595.626, 1803.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.993" y="0">43</tspan>
                                    </text>
                                </g>
                                <g id="_44" data-name="44" transform="translate(-12 -28)">
                                    <path id="Path_1625" data-name="44" d="M9274.57,6181.094l-20.5-35.151,59.1-33.256,21.367,34.117Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[43][1]; ?>" opacity="0.75" />
                                    <text id="_44-2" data-name="44" transform="matrix(0.999, -0.035, 0.035, 0.999, 618.626, 1838.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.872" y="0">44</tspan>
                                    </text>
                                </g>
                                <g id="_45" data-name="45" transform="translate(-12 -28)">
                                    <path id="Path_1627" data-name="45" d="M9295.075,6216.59l-19.644-34.118,41.01-23.089,19.126,34.117Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[44][1]; ?>" opacity="0.75" />
                                    <text id="_45-2" data-name="45" transform="matrix(0.999, -0.035, 0.035, 0.999, 631.626, 1880.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.887" y="0">45</tspan>
                                    </text>
                                </g>
                                <g id="_50" data-name="50" transform="translate(-12 -28)">
                                    <path id="Path_1626" data-name="50" d="M9336.6,6192.466l-19.644-34.117,40.479-22.8,20,33.826Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[49][1]; ?>" opacity="0.75" />
                                    <text id="_50-2" data-name="50" transform="matrix(0.999, -0.035, 0.035, 0.999, 672.626, 1858.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.52" y="0">50</tspan>
                                    </text>
                                </g>
                                <g id="_49" data-name="49" transform="translate(-12 -28)">
                                    <path id="Path_1629" data-name="49" d="M9337.98,6194.189l20.16,34.807,39.8-23.606-20.16-34.634Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[48][1]; ?>" opacity="0.75" />
                                    <text id="_49-2" data-name="49" transform="matrix(0.999, -0.035, 0.035, 0.999, 693.626, 1893.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.161" y="0">49</tspan>
                                    </text>
                                </g>
                                <g id="_48" data-name="48" transform="translate(-12 -28)">
                                    <path id="Path_1631" data-name="48" d="M9358.829,6230.375l21.022,36.185,33.944-19.126,2.758-9.3-17.748-30.843Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[47][1]; ?>" opacity="0.75" />
                                    <text id="_48-2" data-name="48" transform="matrix(0.999, -0.035, 0.035, 0.999, 716.626, 1931.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.032" y="0">48</tspan>
                                    </text>
                                </g>
                                <g id="_47" data-name="47" transform="translate(-12 -28)">
                                    <path id="Path_1630" data-name="47" d="M9316.958,6254.5l17.748,31.188,9.478,2.412,34.807-20.677-21.038-36.229Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[46][1]; ?>" opacity="0.75" />
                                    <text id="_47-2" data-name="47" transform="matrix(0.999, -0.035, 0.035, 0.999, 674.626, 1955.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.223" y="0">47</tspan>
                                    </text>
                                </g>
                                <g id="_46" data-name="46" transform="translate(-12 -28)">
                                    <path id="Path_1628" data-name="46" d="M9296.453,6219.174l19.644,33.256,40.493-22.745-19.743-34.484Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[45][1]; ?>" opacity="0.75" />
                                    <text id="_46-2" data-name="46" transform="matrix(0.999, -0.035, 0.035, 0.999, 653.626, 1918.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.161" y="0">46</tspan>
                                    </text>
                                </g>
                                <g id="_61" data-name="61" transform="translate(-12 -28)">
                                    <path id="Path_1639" data-name="61" d="M9414.606,6187.986l35.527-21.813,25.4,45.2-28.9,17.472-10.752-2.688Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[60][1]; ?>" opacity="0.75" />
                                    <text id="_61-2" data-name="61" transform="matrix(0.999, -0.035, 0.035, 0.999, 771.626, 1893.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.735" y="0">61</tspan>
                                    </text>
                                </g>
                                <g id="_60" data-name="60" transform="translate(-12 -28)">
                                    <path id="Path_1638" data-name="60" d="M9451.194,6166.438l32.605-19.352,25.783,44.346-32.256,19.264Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[59][1]; ?>" opacity="0.75" />
                                    <text id="_60-2" data-name="60" transform="matrix(0.999, -0.035, 0.035, 0.999, 807.626, 1873.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.794" y="0">60</tspan>
                                    </text>
                                </g>
                                <g id="_59" data-name="59" transform="translate(-12 -28)">
                                    <path id="Path_1637" data-name="59" d="M9484.943,6145.771l32.48-18.4,26.553,44.9-32.872,18.689Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[58][1]; ?>" opacity="0.75" />
                                    <text id="_59-2" data-name="59" transform="matrix(0.999, -0.035, 0.035, 0.999, 842.626, 1853.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.177" y="0">59</tspan>
                                    </text>
                                </g>
                                <g id="_58" data-name="58" transform="translate(-12 -28)">
                                    <path id="Path_1636" data-name="58" d="M9518.991,6126.248l32.54-18.66,25.7,44.644-32.2,19.111Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[57][1]; ?>" opacity="0.75" />
                                    <text id="_58-2" data-name="58" transform="matrix(0.999, -0.035, 0.035, 0.999, 875.626, 1832.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.048" y="0">58</tspan>
                                    </text>
                                </g>
                                <g id="_57" data-name="57" transform="translate(-12 -28)">
                                    <path id="Path_1642" data-name="57" d="M9546,6095.311l32.739,56,19.815-11.028,6.548-11.717-1.206-34.634Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[56][1]; ?>" opacity="0.75" />
                                    <text id="_57-2" data-name="57" transform="matrix(0.999, -0.035, 0.035, 0.999, 906.519, 1813.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.239" y="0">57</tspan>
                                    </text>
                                </g>
                                <g id="_56" data-name="56" transform="translate(-12 -28)">
                                    <path id="Path_1641" data-name="56" d="M9545.139,6093.587l-21.884-37.046,79.091-1.723,1.379,37.391Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[55][1]; ?>" opacity="0.75" />
                                    <text id="_56-2" data-name="56" transform="matrix(0.999, -0.035, 0.035, 0.999, 904.518, 1770.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.177" y="0">56</tspan>
                                    </text>
                                </g>
                                <g id="_55" data-name="55" transform="translate(-12 -28)">
                                    <path id="Path_1640" data-name="55" d="M9522.738,6055.162l-5.858-9.994,46.352-32.739,31.188-1.551,7.409,6.375,1.033,35.668Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[54][1]; ?>" opacity="0.75" />
                                    <text id="_55-2" data-name="55" transform="matrix(0.999, -0.035, 0.035, 0.999, 904.518, 1729.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.903" y="0">55</tspan>
                                    </text>
                                </g>
                                <g id="_54" data-name="54" transform="translate(-12 -28)">
                                    <path id="Path_1635" data-name="54" d="M9484.943,6068.455l30.9-22.253,34.807,59.447-33.053,19.169Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[53][1]; ?>" opacity="0.75" />
                                    <text id="_54-2" data-name="54" transform="matrix(0.999, -0.035, 0.035, 0.999, 847.518, 1783.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.887" y="0">54</tspan>
                                    </text>
                                </g>
                                <g id="_53" data-name="53" transform="translate(-12 -28)">
                                    <path id="Path_1634" data-name="53" d="M9453.05,6091.815l31-22.4,32.492,56.2-32.492,19Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[52][1]; ?>" opacity="0.75" />
                                    <text id="_53-2" data-name="53" transform="matrix(0.999, -0.035, 0.035, 0.999, 814.518, 1803.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.009" y="0">53</tspan>
                                    </text>
                                </g>
                                <g id="_52" data-name="52" transform="translate(-12 -28)">
                                    <path id="Path_1633" data-name="52" d="M9450.664,6164.318l31.815-19.03-30.688-53.312-30.817,22.637Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[22][1]; ?>" opacity="0.75" />
                                    <text id="_52-2" data-name="52" transform="matrix(0.999, -0.035, 0.035, 0.999, 778.518, 1823.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.848" y="0">52</tspan>
                                    </text>
                                </g>
                                <g id="_51" data-name="51" transform="translate(-12 -28)">
                                    <path id="Path_1632" data-name="51" d="M9392.209,6135.551l-1.792,10.859,22.624,40.1,36.032-21.394-28.63-50.632Z" transform="translate(-8674 -4312)" fill="<?php echo $areas_status[50][1]; ?>" opacity="0.75" />
                                    <text id="_51-2" data-name="51" transform="matrix(0.999, -0.035, 0.035, 0.999, 743.518, 1846.146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.462" y="0">51</tspan>
                                    </text>
                                </g>
                                <g id="_87" data-name="87" transform="translate(-12 11)">
                                    <path id="Path_1560-2" data-name="87" d="M1074.752,1816.861l1.245,38.7,61.909-.738v-39.758Z" fill="<?php echo $areas_status[86][1]; ?>" opacity="0.75" />
                                    <text id="_87-2" data-name="87" transform="translate(1103 1842)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.384" y="0">87</tspan>
                                    </text>
                                </g>
                                <g id="_88" data-name="88">
                                    <path id="Path_1560-3" data-name="88" d="M1076.177,1816.616l1.133,43.39,64.011,19.3-3.414-64.239Z" transform="translate(-12 51)" fill="<?php echo $areas_status[87][1]; ?>" opacity="0.75" />
                                    <text id="_88-2" data-name="88" transform="translate(1091 1899)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.192" y="0">88</tspan>
                                    </text>
                                </g>
                                <g id="_89" data-name="89">
                                    <path id="Path_1664" data-name="89" d="M1076.177,1816.616l4.724,63.714,7.554,9.033,23.813,6.241,19.215-63.557Z" transform="translate(-9.981 97)" fill="<?php echo $areas_status[88][1]; ?>" opacity="0.75" />
                                    <text id="_89-2" data-name="89" transform="translate(1091 1959)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.262" y="0">89</tspan>
                                    </text>
                                </g>
                                <g id="_96" data-name="96">
                                    <path id="Path_1691" data-name="96" d="M1068.045,1835.424l4.434,53.375,39.79,6.8,12.6-43.756Z" transform="translate(5.833 173.111)" fill="<?php echo $areas_status[95][1]; ?>" opacity="0.75" />
                                    <text id="_96-2" data-name="96" transform="translate(1102 2047)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.45" y="0">96</tspan>
                                    </text>
                                </g>
                                <g id="_97" data-name="97">
                                    <path id="Path_1692" data-name="97" d="M1069.687,1843.011l-13.138,44.178,55.72,8.414,5.374-31.406-3.942-7.883Z" transform="translate(62.656 182.111)" fill="<?php echo $areas_status[96][1]; ?>" opacity="0.75" />
                                    <text id="_97-2" data-name="97" transform="translate(1150 2058)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.317" y="0">97</tspan>
                                    </text>
                                </g>
                                <g id="_103" data-name="103">
                                    <path id="Path_1680" data-name="103" d="M1088.06,1814.382l-7.045,4.911-10.418,66.266,61.658,10.166,10.675-64.477Z" transform="translate(115.462 231.155)" fill="<?php echo $areas_status[102][1]; ?>" opacity="0.75" />
                                    <text id="_103-2" data-name="103" transform="translate(1221 2093)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-12.736" y="0">103</tspan>
                                    </text>
                                </g>
                                <g id="_105" data-name="105">
                                    <path id="Path_1679" data-name="105" d="M1076.85,1847.363l-6.254,38.2,56.9,9.714,6.167-38.016Z" transform="translate(109.019 270.155)" fill="<?php echo $areas_status[104][1]; ?>" opacity="0.75" />
                                    <text id="_105-2" data-name="105" transform="translate(1211 2146)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-12.63" y="0">105</tspan>
                                    </text>
                                </g>
                                <g id="_107" data-name="107">
                                    <path id="Path_1678" data-name="107" d="M1077.243,1848.071l-5.811,38.025,56.062,9.177,6.6-37.854Z" transform="translate(102.019 309.155)" fill="<?php echo $areas_status[106][1]; ?>" opacity="0.75" />
                                    <text id="_107-2" data-name="107" transform="translate(1205 2186)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-11.791" y="0">107</tspan>
                                    </text>
                                </g>
                                <g id="_109" data-name="109">
                                    <path id="Path_1677" data-name="109" d="M1077.305,1848.244l-5.811,37.268,56,9.761,6.155-38.186Z" transform="translate(96.019 349.155)" fill="<?php echo $areas_status[108][1]; ?>" opacity="0.75" />
                                    <text id="_109-2" data-name="109" transform="translate(1198 2226)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-12.904" y="0">109</tspan>
                                    </text>
                                </g>
                                <g id="_111" data-name="111">
                                    <path id="Path_1676" data-name="111" d="M1077.2,1848.785l-5.432,32.467,6.569,5.559,49.159,8.462,5.794-38.149Z" transform="translate(89.432 388.155)" fill="<?php echo $areas_status[110][1]; ?>" opacity="0.75" />
                                    <text id="_111-2" data-name="111" transform="translate(1192 2265)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.13" y="0">111</tspan>
                                    </text>
                                </g>
                                <g id="_106" data-name="106">
                                    <path id="Path_1672" data-name="106" d="M1076.85,1847.363l-6.254,38.2,56.9,9.714,5.293-38.3Z" transform="translate(167.019 280.155)" fill="<?php echo $areas_status[105][1]; ?>" opacity="0.75" />
                                    <text id="_106-2" data-name="106" transform="translate(1267 2157)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-12.904" y="0">106</tspan>
                                    </text>
                                </g>
                                <g id="_108" data-name="108">
                                    <path id="Path_1673" data-name="108" d="M1076.85,1847.363l-6.254,38.2,56.9,9.714,5.293-38.3Z" transform="translate(160.019 319.155)" fill="<?php echo $areas_status[107][1]; ?>" opacity="0.75" />
                                    <text id="_108-2" data-name="108" transform="translate(1260 2196)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-12.775" y="0">108</tspan>
                                    </text>
                                </g>
                                <g id="_110" data-name="110">
                                    <path id="Path_1674" data-name="110" d="M1076.85,1847.363l-6.254,38.2,56.9,9.714,5.293-38.3Z" transform="translate(154.019 359.155)" fill="<?php echo $areas_status[109][1]; ?>" opacity="0.75" />
                                    <text id="_110-2" data-name="110" transform="translate(1254 2236)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-11.189" y="0">110</tspan>
                                    </text>
                                </g>
                                <g id="_112" data-name="112">
                                    <path id="Path_1675" data-name="112" d="M1076.582,1848.282l-5.986,37.277,56.9,9.714,5.293-38.3Z" transform="translate(147.432 398.155)" fill="<?php echo $areas_status[111][1]; ?>" opacity="0.75" />
                                    <text id="_112-2" data-name="112" transform="translate(1247 2275)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-10.517" y="0">112</tspan>
                                    </text>
                                </g>
                                <g id="_102" data-name="102">
                                    <path id="Path_1697" data-name="102" d="M1067.226,1843.817l3.2,39.908,45.5,6.768,6.569-37.444Z" transform="translate(26.603 384.093)" fill="<?php echo $areas_status[101][1]; ?>" opacity="0.75" />
                                    <text id="_102-2" data-name="102" transform="translate(1119 2257)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-12.517" y="0">102</tspan>
                                    </text>
                                </g>
                                <g id="_101" data-name="101">
                                    <path id="Path_1696" data-name="101" d="M1067.226,1843.817l3.2,39.908,55.4,8.845,6.076-37.773Z" transform="translate(23.603 343.093)" fill="<?php echo $areas_status[100][1]; ?>" opacity="0.75" />
                                    <text id="_101-2" data-name="101" transform="translate(1121 2218)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-11.189" y="0">101</tspan>
                                    </text>
                                </g>
                                <g id="_100" data-name="100">
                                    <path id="Path_1695" data-name="100" d="M1067.226,1843.817l3.2,39.908,65.473,10.123,6.076-37.609Z" transform="translate(19.603 301.907)" fill="<?php echo $areas_status[99][1]; ?>" opacity="0.75" />
                                    <text id="_100-2" data-name="100" transform="translate(1122 2177)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-13.248" y="0">100</tspan>
                                    </text>
                                </g>
                                <g id="_99" data-name="99">
                                    <path id="Path_1694" data-name="99" d="M1067.226,1843.817l3.2,39.908,76.289,11.766,5.764-38Z" transform="translate(15.603 261.063)" fill="<?php echo $areas_status[98][1]; ?>" opacity="0.75" />
                                    <text id="_99-2" data-name="99" transform="translate(1123 2136)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.45" y="0">99</tspan>
                                    </text>
                                </g>
                                <g id="_98" data-name="98">
                                    <path id="Path_1693" data-name="98" d="M1067.226,1843.817l3.613,39.908,86.549,13.138,5.584-37.609Z" transform="translate(11.414 220.063)" fill="<?php echo $areas_status[97][1]; ?>" opacity="0.75" />
                                    <text id="_98-2" data-name="98" transform="translate(1123 2096)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.321" y="0">98</tspan>
                                    </text>
                                </g>
                                <g id="_104" data-name="104">
                                    <path id="Path_1671" data-name="104" d="M1080.934,1826.244l-9.98,63.923,51.417,8.717,8.591-52.68-2.906-6.064Z" transform="translate(178.169 236.612)" fill="<?php echo $areas_status[103][1]; ?>" opacity="0.75" />
                                    <text id="_104-2" data-name="104" transform="translate(1279 2105)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-12.615" y="0">104</tspan>
                                    </text>
                                </g>
                                <g id="_90" data-name="90">
                                    <path id="Path_1665" data-name="90" d="M1094.65,1821.385l-18.229,64.378,36.459,10.839,19.215-63.721Z" transform="translate(27.019 108.155)" fill="<?php echo $areas_status[89][1]; ?>" opacity="0.75" />
                                    <text id="_90-2" data-name="90" transform="translate(1130 1974)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.794" y="0">90</tspan>
                                    </text>
                                </g>
                                <g id="_91" data-name="91">
                                    <path id="Path_1666" data-name="91" d="M1094.65,1821.385l-18.229,64.378,36.459,10.839,19.215-63.721Z" transform="translate(65.019 119.155)" fill="<?php echo $areas_status[90][1]; ?>" opacity="0.75" />
                                    <text id="_91-2" data-name="91" transform="translate(1168 1985)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.735" y="0">91</tspan>
                                    </text>
                                </g>
                                <g id="_92" data-name="92">
                                    <path id="Path_1667" data-name="92" d="M1095.181,1822.542l-18.761,63.222,36.459,10.839,19.215-63.721Z" transform="translate(103.019 130.155)" fill="<?php echo $areas_status[91][1]; ?>" opacity="0.75" />
                                    <text id="_92-2" data-name="92" transform="translate(1206 1995)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.122" y="0">92</tspan>
                                    </text>
                                </g>
                                <g id="_93" data-name="93">
                                    <path id="Path_1668" data-name="93" d="M1095.181,1822.542l-18.761,63.222,36.459,10.839,19.215-63.721Z" transform="translate(141.019 141.155)" fill="<?php echo $areas_status[92][1]; ?>" opacity="0.75" />
                                    <text id="_93-2" data-name="93" transform="translate(1243 2006)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.282" y="0">93</tspan>
                                    </text>
                                </g>
                                <g id="_94" data-name="94" opacity="0.93">
                                    <path id="Path_1669" data-name="94" d="M1095.181,1822.542l-18.761,63.222,36.459,10.839,19.215-63.721Z" transform="translate(179.019 152.155)" fill="<?php echo $areas_status[93][1]; ?>" opacity="0.75" />
                                    <text id="_94-2" data-name="94" transform="translate(1282 2017)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.161" y="0">94</tspan>
                                    </text>
                                </g>
                                <g id="_95" data-name="95">
                                    <path id="Path_1670" data-name="95" d="M1095.828,1822.388l-18.558,64.05,39.251,12.153,10.675-66.677Z" transform="translate(216.019 163.155)" fill="<?php echo $areas_status[94][1]; ?>" opacity="0.75" />
                                    <text id="_95-2" data-name="95" transform="translate(1320 2027)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.177" y="0">95</tspan>
                                    </text>
                                </g>
                                <g id="_65" data-name="65" transform="translate(-12 -28)">
                                    <path id="Path_1643" data-name="65" d="M11118.563,6084.937l-26.277-45.706,3.113-9.465,29.018-17.062,30.014,51.435Z" transform="translate(-10312 -4093)" fill="<?php echo $areas_status[64][1]; ?>" opacity="0.75" />
                                    <text id="_65-2" data-name="65" transform="matrix(0.999, -0.035, 0.035, 0.999, 809.793, 1962.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.177" y="0">65</tspan>
                                    </text>
                                </g>
                                <g id="_67" data-name="67" transform="translate(-12 -28)">
                                    <path id="Path_1647" data-name="67" d="M11109.475,6069.656l-17.188-30.425,3.113-9.465,36.367-20.387,20.923,35.618Z" transform="translate(-10413 -4035)" fill="<?php echo $areas_status[66][1]; ?>" opacity="0.75" />
                                    <text id="_67-2" data-name="67" transform="matrix(0.999, -0.035, 0.035, 0.999, 708.793, 2009.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.454" y="0">67</tspan>
                                    </text>
                                </g>
                                <g id="_66" data-name="66" transform="translate(-12 -28)">
                                    <path id="Path_1648" data-name="66" d="M11107.188,6068.25l-20.3-35.743,32.38-19.054,9.092,2.491,17.187,30.139Z" transform="translate(-10367 -4059)" fill="<?php echo $areas_status[65][1]; ?>" opacity="0.75" />
                                    <text id="_66-2" data-name="66" transform="matrix(0.999, -0.035, 0.035, 0.999, 749.793, 1986.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.45" y="0">66</tspan>
                                    </text>
                                </g>
                                <g id="_64" data-name="64" transform="translate(-12 -28)">
                                    <path id="Path_1645" data-name="64" d="M11136.85,6104.309l-9.964-2.3-38.511-66.581,35.864-21.2,42.212,72.455Z" transform="translate(-10281 -4042)" fill="<?php echo $areas_status[63][1]; ?>" opacity="0.75" />
                                    <text id="_64-2" data-name="64" transform="matrix(0.999, -0.035, 0.035, 0.999, 844.793, 2022.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.161" y="0">64</tspan>
                                    </text>
                                </g>
                                <g id="_62" data-name="62" transform="translate(-12 -28)">
                                    <path id="Path_1644" data-name="62" d="M11118.563,6084.937l-30.025-52.1,33.376-19.3,30.11,51.943Z" transform="translate(-10275 -4114)" fill="<?php echo $areas_status[61][1]; ?>" opacity="0.75" />
                                    <text id="_62-2" data-name="62" transform="matrix(0.999, -0.035, 0.035, 0.999, 846.793, 1941.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.122" y="0">62</tspan>
                                    </text>
                                </g>
                                <g id="_69" data-name="69" transform="translate(-12 -28)">
                                    <path id="Path_1649" data-name="69" d="M11107.237,6065.373l-18.7-32.541,38.127-22.132,18.806,32.255Z" transform="translate(-10347 -4022)" fill="<?php echo $areas_status[68][1]; ?>" opacity="0.75" />
                                    <text id="_69-2" data-name="69" transform="matrix(0.999, -0.035, 0.035, 0.999, 771.793, 2022.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.45" y="0">69</tspan>
                                    </text>
                                </g>
                                <g id="_68" data-name="68" transform="translate(-12 -28)">
                                    <path id="Path_1650" data-name="68" d="M11107.237,6065.373l-18.644-33.224,42.842-24.908,18.681,32.754Z" transform="translate(-10391 -3996)" fill="<?php echo $areas_status[67][1]; ?>" opacity="0.75" />
                                    <text id="_68-2" data-name="68" transform="matrix(0.999, -0.035, 0.035, 0.999, 728.793, 2044.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.321" y="0">68</tspan>
                                    </text>
                                </g>
                                <g id="_71" data-name="71" transform="translate(-12 -28)">
                                    <path id="Path_1651" data-name="71" d="M11106.821,6064.55l-18.489-32.284,42.631-25,18.776,32.38Z" transform="translate(-10371 -3962)" fill="<?php echo $areas_status[70][1]; ?>" opacity="0.75" />
                                    <text id="_71-2" data-name="71" transform="matrix(0.999, -0.035, 0.035, 0.999, 748.793, 2078.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-6.798" y="0">71</tspan>
                                    </text>
                                </g>
                                <g id="_72" data-name="72" transform="translate(-12 -28)">
                                    <path id="Path_1653" data-name="72" d="M11103.532,6057.47l-15.2-25.2,43.174-25.282,31.614,54.414Z" transform="translate(-10352 -3928)" fill="<?php echo $areas_status[71][1]; ?>" opacity="0.75" />
                                    <text id="_72-2" data-name="72" transform="matrix(0.999, -0.035, 0.035, 0.999, 767.793, 2116.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.184" y="0">72</tspan>
                                    </text>
                                </g>
                                <g id="_73" data-name="73" transform="translate(-12 -28)">
                                    <path id="Path_1654" data-name="73" d="M11119.8,6086.919l-31.468-54.653,38.566-21.939,47.7,80.826Z" transform="translate(-10308 -3954)" fill="<?php echo $areas_status[72][1]; ?>" opacity="0.75" />
                                    <text id="_73-2" data-name="73" transform="matrix(0.999, -0.035, 0.035, 0.999, 818.793, 2106.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.345" y="0">73</tspan>
                                    </text>
                                </g>
                                <g id="_74" data-name="74" transform="translate(-12 -28)">
                                    <path id="Path_1655" data-name="74" d="M11112.464,6073.776l-24.132-41.51,34.967-19.764,37.61,64.512Z" transform="translate(-10245 -3937)" fill="<?php echo $areas_status[73][1]; ?>" opacity="0.75" />
                                    <text id="_74-2" data-name="74" transform="matrix(0.999, -0.035, 0.035, 0.999, 878.793, 2115.34)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.11" y="0">74</tspan>
                                    </text>
                                </g>
                                <g id="_75" data-name="75" transform="translate(-12 -28)">
                                    <path id="Path_1656" data-name="75" d="M11125.79,6097.915l-37.458-65.648,33.521-18.949,51.263,87.854Z" transform="translate(-10209.332 -3958.317)" fill="<?php echo $areas_status[74][1]; ?>" opacity="0.75" />
                                    <text id="_75-2" data-name="75" transform="matrix(0.999, -0.035, 0.035, 0.999, 920.517, 2115.34)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.239" y="0">75</tspan>
                                    </text>
                                </g>
                                <g id="_76" data-name="76" transform="translate(-12 -28)">
                                    <path id="Path_1657" data-name="76" d="M11113.794,6076.449l-25.462-44.183,47.766-26.692h11.783l-.833,55.932Z" transform="translate(-10175.332 -3978.317)" fill="<?php echo $areas_status[75][1]; ?>" opacity="0.75" />
                                    <text id="_76-2" data-name="76" transform="matrix(0.999, -0.035, 0.035, 0.999, 946.517, 2070.34)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.512" y="0">76</tspan>
                                    </text>
                                </g>
                                <g id="_77" data-name="77" transform="translate(-12 -28)">
                                    <path id="Path_1658" data-name="77" d="M11092.169,6061.506l1.494-55.932,43.091,3.171,4.234,4.857v37.611l-6.726,4.857v7.224Z" transform="translate(-10119.332 -3978.317)" fill="<?php echo $areas_status[76][1]; ?>" opacity="0.75" />
                                    <text id="_77-2" data-name="77" transform="matrix(0.999, -0.035, 0.035, 0.999, 997.517, 2063.34)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-7.575" y="0">77</tspan>
                                    </text>
                                </g>
                                <g id="_78" data-name="78" transform="translate(-12 -28)">
                                    <path id="Path_1660" data-name="78" d="M11084.2,6057.58l-25.281-43.978,32.38-14.8,55.3,2.242-.747,60.467Z" transform="translate(-10119.332 -3914.317)" fill="<?php echo $areas_status[77][1]; ?>" opacity="0.75" />
                                    <text id="_78-2" data-name="78" transform="matrix(0.999, -0.035, 0.035, 0.999, 992.517, 2121.34)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.384" y="0">78</tspan>
                                    </text>
                                </g>
                                <g id="_80" data-name="80" transform="translate(-12 -28)">
                                    <path id="Path_1659" data-name="80" d="M11143.742,6065.035l-4.981-53.3-42.358-2.987-4.234,4.857-.856,36.861,6.227,4.857v7.846Z" transform="translate(-10055.331 -3977.317)" fill="<?php echo $areas_status[79][1]; ?>" opacity="0.75" />
                                    <text id="_80-2" data-name="80" transform="matrix(0.999, -0.035, 0.035, 0.999, 1062.517, 2063.34)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.665" y="0">80</tspan>
                                    </text>
                                </g>
                                <g id="_79" data-name="79" transform="translate(-12 -28)">
                                    <path id="Path_1661" data-name="79" d="M11088.215,6075.063v-60.775l59.53,1.495,5.479,63.266Z" transform="translate(-10059.215 -3927.288)" fill="<?php echo $areas_status[78][1]; ?>" opacity="0.75" />
                                    <text id="_79-2" data-name="79" transform="matrix(0.999, -0.035, 0.035, 0.999, 1061.518, 2125.34)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.512" y="0">79</tspan>
                                    </text>
                                </g>
                                <g id="_70" data-name="70" transform="translate(-12 -28)">
                                    <path id="Path_1652" data-name="70" d="M11106.889,6064.451l-19.063-32.572,38.511-22.7,19.064,33.051Z" transform="translate(-10327 -3987)" fill="<?php echo $areas_status[69][1]; ?>" opacity="0.75" />
                                    <text id="_70-2" data-name="70" transform="matrix(0.999, -0.035, 0.035, 0.999, 790.793, 2055.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.856" y="0">70</tspan>
                                    </text>
                                </g>
                                <g id="_63" data-name="63" transform="translate(-12 -28)">
                                    <path id="Path_1646" data-name="63" d="M11130.459,6105.451l-42.294-72.479,33.146-19.256,42.612,72.161Z" transform="translate(-10244 -4061)" fill="<?php echo $areas_status[62][1]; ?>" opacity="0.75" />
                                    <text id="_63-2" data-name="63" transform="matrix(0.999, -0.035, 0.035, 0.999, 881.793, 2003.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.282" y="0">63</tspan>
                                    </text>
                                </g>
                                <g id="_85" data-name="85" transform="translate(-11 12)">
                                    <path id="Path_1500-2" data-name="85" d="M11095.914,6064.831l-.37-38.763,47.826-1.916,1.179,38.762Z" transform="translate(-10141 -4192)" fill="<?php echo $areas_status[84][1]; ?>" opacity="0.75" />
                                    <text id="_85-2" data-name="85" transform="matrix(0.999, -0.035, 0.035, 0.999, 980.793, 1857.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.048" y="0">85</tspan>
                                    </text>
                                </g>
                                <g id="_86" data-name="86" transform="translate(39 12)">
                                    <path id="Path_1500-3" data-name="86" d="M11095.8,6062.914l-.737-39.057,47.531-1.842L11143.7,6061Z" transform="translate(-10141 -4192)" fill="<?php echo $areas_status[85][1]; ?>" opacity="0.75" />
                                    <text id="_86-2" data-name="86" transform="matrix(0.999, -0.035, 0.035, 0.999, 980.793, 1857.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.321" y="0">86</tspan>
                                    </text>
                                </g>
                                <g id="_83" data-name="83" transform="translate(39 50)">
                                    <g id="Group_1217" data-name="Group 1217">
                                        <path id="Path_1500-4" data-name="83" d="M11096.76,6065l-.811-39.13,47.6-1.474,1.622,38.836Z" transform="translate(-10141 -4192)" fill="<?php echo $areas_status[82][1]; ?>" opacity="0.75" />
                                        <text id="_83-2" data-name="83" transform="matrix(0.999, -0.035, 0.035, 0.999, 980.793, 1857.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                            <tspan x="-9.153" y="0">83</tspan>
                                        </text>
                                    </g>
                                </g>
                                <g id="_84" data-name="84" transform="translate(-11 51)">
                                    <path id="Path_1500-5" data-name="84" d="M11097.533,6065.771l-1.326-39.278,48.563-1.695.958,39.057Z" transform="translate(-10141 -4192)" fill="<?php echo $areas_status[83][1]; ?>" opacity="0.75" />
                                    <text id="_84-2" data-name="84" transform="matrix(0.999, -0.035, 0.035, 0.999, 980.793, 1857.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.032" y="0">84</tspan>
                                    </text>
                                </g>
                                <g id="_85" data-name="85" transform="translate(-9 92)">
                                    <path id="Path_1500-6" data-name="85" d="M11096.93,6070.985l-1.149-44.93,47.9-2.012,1.533,55.372-41.769-2.874Z" transform="translate(-10141 -4192)" fill="<?php echo $areas_status[84][1]; ?>" opacity="0.75" />
                                    <text id="_85-4" data-name="85" transform="matrix(0.999, -0.035, 0.035, 0.999, 980.793, 1864.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-9.048" y="0">85</tspan>
                                    </text>
                                </g>
                                <g id="_82" data-name="82" transform="translate(42 102)">
                                    <path id="Path_1500-7" data-name="82" d="M11096.129,6069.224l-1.725-55.468,48-1.629,4.5,52.594-6.131,7.568Z" transform="translate(-10141 -4192)" fill="<?php echo $areas_status[81][1]; ?>" opacity="0.75" />
                                    <text id="_82-2" data-name="82" transform="matrix(0.999, -0.035, 0.035, 0.999, 980.793, 1855.881)" fill="#fff" font-size="16" font-family="Lora-Regular, Lora" letter-spacing="0.025em">
                                        <tspan x="-8.993" y="0">82</tspan>
                                    </text>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>

            </div>
        </div>
    </div>
</div>

<div id="modalMessage" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg x="0px" y="0px" width="20.707px" height="20.707px" viewBox="6.125 -50.625 20.707 20.707" enable-background="new 6.125 -50.625 20.707 20.707" xml:space="preserve">
                        <path class="line1" fill="none" stroke="#8A8CFF" stroke-miterlimit="10" d="M6.479-50.271l20,20" />
                        <path class="line2" fill="none" stroke="#8A8CFF" stroke-miterlimit="10" d="M26.479-50.271l-20,20" />
                    </svg>
                </button>
                <div class="header">
                    <h3>Wyślij wiadomość</h3>
                    <p>Działka nr. <span class="js_area_number">x</span></p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="492" title="Lista działek: Formularz"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="plotsList">
    <div class="container" id="arealist" data-page="0">
        <div class="row">
            <div class="col-xs-4 col-sm-7 col-md-9">
                <div class="header">Lista działek</div>
            </div>

            <div class="col-sm-5 col-md-3">
                <div class="quality">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_1.svg" alt="Najwyższa jakość" />
                </div>

            </div>
        </div>

        <div class="row disclaimer">
            <div class="col-md-12">
                Wszystkie podane ceny są cenami netto. Do ceny netto należy doliczyć 23% podatku VAT. Przedsiębiorca
                otrzymuje zwrot podatku VAT w ciągu 30 lub 60 dni od wystąpienia o zwrot do urzędu skarbowego.
                Nakłady
                inwestycyjne związane z budową i utrzymaniem basenu oraz utwardzeniem kostką brukową zostaną
                podzielone
                na wszystkich właścicieli.
            </div>
        </div>

        <div class="row sorts">
            <div class="col-md-12">
                <span>Sortuj po:</span>
                <a class="down" data-sort="id">
                    Numer działki
                    <svg x="0px" y="0px" width="9.875px" height="16.584px" viewBox="0 0 9.875 16.584" enable-background="new 0 0 9.875 16.584" xml:space="preserve">
                        <polyline class="up" fill="none" stroke-miterlimit="10" points="0.562,5.625 4.969,1.035 9.375,5.625 "></polyline>
                        <polyline class="down" fill="none" stroke-miterlimit="10" points="9.375,11.035 4.969,15.625 0.562,11.035 "></polyline>
                    </svg>
                </a>

                <a class="up" data-sort="price_net">Cena
                    <svg x="0px" y="0px" width="9.875px" height="16.584px" viewBox="0 0 9.875 16.584" enable-background="new 0 0 9.875 16.584" xml:space="preserve">
                        <polyline class="up" fill="none" stroke-miterlimit="10" points="0.562,5.625 4.969,1.035 9.375,5.625 "></polyline>
                        <polyline class="down" fill="none" stroke-miterlimit="10" points="9.375,11.035 4.969,15.625 0.562,11.035 "></polyline>
                    </svg>
                </a>

                <a class="up" data-sort="area">
                    Powierzchnia
                    <svg x="0px" y="0px" width="9.875px" height="16.584px" viewBox="0 0 9.875 16.584" enable-background="new 0 0 9.875 16.584" xml:space="preserve">
                        <polyline class="up" fill="none" stroke-miterlimit="10" points="0.562,5.625 4.969,1.035 9.375,5.625 "></polyline>
                        <polyline class="down" fill="none" stroke-miterlimit="10" points="9.375,11.035 4.969,15.625 0.562,11.035 "></polyline>
                    </svg>
                </a>

                <a class="up" data-sort="active">
                    Aktywność
                    <svg x="0px" y="0px" width="9.875px" height="16.584px" viewBox="0 0 9.875 16.584" enable-background="new 0 0 9.875 16.584" xml:space="preserve">
                        <polyline class="up" fill="none" stroke-miterlimit="10" points="0.562,5.625 4.969,1.035 9.375,5.625 "></polyline>
                        <polyline class="down" fill="none" stroke-miterlimit="10" points="9.375,11.035 4.969,15.625 0.562,11.035 "></polyline>
                    </svg>
                </a>
            </div>
            <div class="disabled-sold">
                <label for="sold">
                    <input type="checkbox" class="disabled-sold__input" name="sold" id="sold">
                    Ukryj sprzedane działki
                </label>
            </div>
        </div>

        <div class="plots">

            <div class="plot-main-banner disabled" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/plot-baner.png);">
                <h2>Kup działkę na raty</h2><a class="btn-write" href="<?= get_home_url() ?>/promocja/">DOWIEDZ SIĘ WIĘCEJ</a>
            </div>

            <?php
            $rand_adw = 0;

            $query = array(
                'post_type' => 'areas',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'ignore_sticky_posts' => 0,
                'post_status' => 'publish'
            );
            $query_result = new WP_Query($query);

            if ($query_result->have_posts()) :
                while ($query_result->have_posts()) : $query_result->the_post();
                    $variable = get_post_meta(get_the_ID());

                    $surface = clear_number($variable['areafield'][0]);
                    $price_net_m2 = clear_number($variable['price_net_m2'][0]);

                    if (empty($surface)) {
                        $surface = 0;
                    }

                    $price_net = (int)($surface * $price_net_m2);
                    $price_net_2 = (int)($surface * $price_net_m2);

                    $discount = $variable['discount'][0];
                    if ($discount > 0) {
                        $old_price = $price_net;
                        $get_price = ($old_price * (100 - $discount)) / 100;
                        $difference = $old_price - $get_price;
                    } else {
                        $get_price = $price_net;
                    }


                    $count_old_surface = $price_net_m2;


                    if ($variable['status'][0] == 'sold') {
                        $plot_status = 2;
                    } else if ($variable['status'][0] == 'free') {
                        $plot_status = 0;
                    } else {
                        $plot_status = 1;
                    }

                    if ($rand_adw == 3) {
                        $rand_adw = 0;
                    }
                    $rand_adw++;


            ?>

                    <div class="plot row no-gutters" data-active="<?php echo $plot_status; ?>" data-status="<?php echo $variable['status'][0]; ?>" data-id="<?php echo $variable['number'][0]; ?>" data-area="<?php echo $variable['areafield'][0]; ?>" data-price_net="<?php echo $get_price; ?>" data-price_surface="<?php echo $price_net_m2; ?>">

                        <div class="left col-xs-12 col-md-4">
                            <div class="row">
                                <div class="cl1 col-xs-4 col-sm-4 col-md-6">
                                    <div class="title1">Działka</div>
                                    <div class="title2">
                                        <?php
                                        if (strlen($variable['number'][0]) == 1)
                                            echo '0' . $variable['number'][0];
                                        else
                                            echo $variable['number'][0];
                                        ?>
                                    </div>
                                    <div class="status">
                                        <span class="point"></span>
                                        <?php
                                        switch ($variable['status'][0]) {
                                            case 'reservation':
                                                echo 'Zarezerwowana';
                                                break;
                                            case 'sold':
                                                echo 'Sprzedana';
                                                break;
                                            case 'free':
                                                echo 'Wolna';
                                                break;
                                            default:
                                                echo '';
                                                break;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="cl2 col-xs-4 col-sm-4 col-md-6">
                                    <?php
                                    if (strlen($variable['photo1'][0])) {
                                        echo '<img class="photo" src="' . wp_get_attachment_image_src($variable['photo1'][0], 'full', true)[0] . '" style="max-width: ' . wp_get_attachment_image_src($variable['photo1'][0], 'full', true)[1] . 'px" alt="" />';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="right col-xs-12 col-md-8">
                            <div class="row">
                                <div class="data col-xs-12 col-sm-6 col-md-6">

                                    <div>
                                        <div>Typ działki:</div>
                                        <div>Budowlana</div>
                                    </div>
                                    <div>
                                        <div>Powierzchnia:</div>
                                        <div><?php echo $variable['areafield'][0]; ?> m<sup>2</sup></div>
                                    </div>

                                    <?php
                                    if ($variable['status'][0] != 'sold') {
                                    ?>
                                        <div>
                                            <div>Cena netto:</div>
                                            <div>
                                                <?php
                                                $discount = $variable['discount'][0];
                                                if ($discount > 0) {
                                                    $get_discount = $get_price;
                                                    $price_net = number_format($price_net, 0, ',', ' ');
                                                    echo '<span class="new">' . number_format($get_discount, 0, ',', ' ') . ' zł</span>';
                                                    echo '<span class="old">' . $price_net . ' zł</span>';
                                                } else {
                                                    echo '<span class="new">' . $price_net . ' zł</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div>
                                            <div>lub miesięcznie:</div>
                                            <div>


                                                <?php

                                                // $loan = round(((clear_number($get_price) * 1.1 - 2000) - 6000) / 60);
                                                // $loan = round((  (((clear_number($get_price) * 1.23) * 1.1) + 2460) - 6000) / 60);
                                                // $loan = round((((clear_number($get_price) * 1.1) + 2000) - 4878) / 60);
                                                // $loan = round((((clear_number($get_price) * 1.21) + 2000) - 4878) / 84);
                                                // echo '<div style=display:none;>'.$price_net. '+'.gettype($price_net).'</div>';
                                                // $price_net_int = (int)$price_net;
                                                // echo gettype($price_net_int);
                                                if ($discount > 0) {
                                                    $get_discount = $get_price;

                                                    $loan =  ((($get_discount - (12000 / 1.23)) * 1.35) + 3000) / 84;
                                                    $loanBrutto = ((($old_price - (12000 / 1.23)) * 1.35) + 3000) / 84;
                                                } else {
                                                    $loan =  ((($price_net_2 - (12000 / 1.23)) * 1.35) + 3000) / 84;
                                                }


                                                echo '' . number_format($loan, 0, ',', ' ') . ' zł';
                                                echo '<span class="old" style="margin-left:5px">' . number_format($loanBrutto, 0, ',', ' ') . ' zł </span>';

                                                // echo "<div style='display:none'>Cena działki:" . clear_number($get_price) .", Rata netto:"
                                                ?>
                                            </div>
                                        </div>

                                    <?php } else { ?>

                                        <div>
                                            <div>&nbsp;</div>
                                            <div>&nbsp;</div>
                                        </div>
                                        <div>
                                            <div>&nbsp;</div>
                                            <div>&nbsp;</div>
                                        </div>
                                    <?php } ?>

                                </div>
                                <div class="bts col-xs-12 col-sm-3 col-md-3">
                                    <?php
                                    if ($variable['status'][0] != 'sold') {
                                    ?>
                                        <?php
                                        if (strlen($variable['pdf'][0])) {
                                            echo '<a class="btn-download" target="_blank" href="' . wp_get_attachment_url($variable['pdf'][0]) . '">Pobierz kartę</a>';
                                        }
                                        ?>
                                        <a class="btn-write" data-id="<?php echo $variable['number'][0]; ?>">Wiadomość</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-3">
                                    <div class="awards">
                                        <?php if ($rand_adw == 1) : ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_2.svg" alt="adw" class="img-fluid">
                                        <?php endif; ?>

                                        <?php if ($rand_adw == 2) : ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_1.svg" alt="adw" class="img-fluid">
                                        <?php endif; ?>

                                        <?php if ($rand_adw == 3) : ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_3.png" alt="adw" class="img-fluid">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($variable['status'][0] !== 'sold' && $difference > 0) { ?>
                            <div class="extra">
                                <svg x="0px" y="0px" width="159px" height="94.449px" viewBox="0 0 159 94.449" enable-background="new 0 0 159 94.449" xml:space="preserve">
                                    <polygon fill="#253862" points="4,0 64,-0.5 159,54.541 159,89.069 " />
                                    <polygon fill="#0e1525" points="149,94.449 159,89.069 149,83.323 " />
                                    <polygon fill="#0e1525" points="4,0 0.152,5.5 13.499,5.458 " />
                                </svg>
                                <div class="text">Taniej o <?php echo number_format($difference, 0, ',', ' '); ?></div>
                            </div>
                        <?php } ?>
                    </div>


                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!--            <div class="row">-->
        <!--                <div class="col-md-12">-->
        <!--                    <div class="pages bottom">-->
        <!--                        <a class="prev off">-->
        <!--                            <svg class="icon" x="0px" y="0px" width="26.253px" height="11.949px"-->
        <!--                                 viewBox="0 0 26.253 11.949"-->
        <!--                                 enable-background="new 0 0 26.253 11.949" xml:space="preserve">-->
        <!--							<path class="start" fill="none" stroke-miterlimit="10"-->
        <!--                                  d="M6.917,0.366L1.254,6.054l6,5.583"></path>-->
        <!--                                <path class="end" fill="none" stroke-miterlimit="10" d="M1.254,5.949h25"></path>-->
        <!--						</svg>-->
        <!--                            <span class="text">Poprzednie</span>-->
        <!--                        </a>-->
        <!--                        <a class="next">-->
        <!--                            <span class="text">Następne</span>-->
        <!--                            <svg class="icon" x="0px" y="0px" width="26.253px" height="11.949px"-->
        <!--                                 viewBox="0 0 26.253 11.949"-->
        <!--                                 enable-background="new 0 0 26.253 11.949" xml:space="preserve">-->
        <!--							<path class="end" fill="none" stroke-miterlimit="10" d="M25,5.949H0"></path>-->
        <!--                                <path class="start" fill="none" stroke-miterlimit="10"-->
        <!--                                      d="M19.337,0.366L25,6.054l-6,5.583"></path>-->
        <!--						</svg>-->
        <!--                        </a>-->
        <!--                        <div class="info">Strona <b><span class="act">1</span></b> z <span class="max">3</span></div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->


        <div class="row disclaimer">
            <div class="col-md-12">
                Ceny netto. Do ceny netto należy doliczyć 23% podatku VAT. Przedsiębiorca otrzymuje zwrot podatku
                VAT w ciągu 30 lub 60 dni od wystąpienia o zwrot do urzędu skarbowego.

                Nakłady inwestycyjne związane z doprowadzeniem mediów do każdej z działek oraz utwardzeniem kostką
                brukową drogi wewnętrznej zostaną podzielone na wszystkich właścicieli.
            </div>
        </div>
    </div>
</div>

<div class="endSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="awards">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_2.svg" alt="adw" />
                        </li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_1.svg" alt="adw" />
                        </li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/adw_3.png" alt="adw" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="nextPageBox">
                    <a href="<?php echo esc_url(home_url('')); ?>/galeria">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/preview_gallery.jpg" class="img-fluid" alt="Ceny działek" />
                        <div class="button">Galeria</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>



<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>