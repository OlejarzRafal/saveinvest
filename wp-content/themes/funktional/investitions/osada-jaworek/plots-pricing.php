<?php
/**
 * Template Name: Ceny działek
 * Template Post Type: osada-jaworek
 */

wp_head();
global $PlotsFront;

$plots = $PlotsFront->getPlotsForInvestition('Osada Jaworek');
?>

<section class="plots-map" data-plots-map>
    <div data-plots-sectors>
        <img class="plots-map__img"
             src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/sector/sector-0/sektor-0-new.png">

        <svg class="plots-map__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 1920 1082">
            <g>
                <g>
                    <g data-plots-sector-selector="A">
                        <path d="M20.136,0,0,220.944,44.453,239.43l-1.54,39.611,2.37,7.922,56.252,20.464,8.278-110.14s9.453-74.47,10.452-81.517,9.023-53.713,9.023-53.713L72.951,21.346Z"
                              transform="translate(138.756 761.545) rotate(-90)"></path>
                    </g>
                    <g data-plots-sector-selector="B">
                        <path d="M8777.884,601.621,8766.33,633.53l288.385,5.952-3-17.2h-20.62l.53-12.014-116.929-1.2Z"
                              transform="translate(-8329.179 58.477)"></path>
                    </g>
                    <g data-plots-sector-selector="C">
                        <path d="M8913.816,479.962,8902.422,531.6l-98.616-.687-9.927,25.608,137.61,1.561-5.37,18.518,28.936.414,86.731.033-3.265-17.405-1.192-27.036-.5-1.947v-1.679l-.162-2.718s-.383-7.457-.4-9.185.211-4.953.211-4.953-.079-19.213-.592-23.361a48.769,48.769,0,0,0-2.114-8.718Z"
                              transform="translate(-8326.256 41.401)"></path>
                        <path d="M1812.654,553.575l1.381,17.955,142.123-1.8-2.072-16.712Z"
                              transform="translate(-1095)"></path>
                    </g>
                    <g data-plots-sector-selector="D">
                        <path d="M9019.342,570.551,9023.831,614s147.331-6.732,151.644-6.732,108.1-4.186,114.088-2.978c-5.748-13.3-16.416-40.651-16.416-40.651s-119.784,3.788-128.656,4.03S9019.342,570.551,9019.342,570.551Z"
                              transform="translate(-8293.681 52.675)"></path>
                    </g>
                    <g data-plots-sector-selector="E">
                        <path d="M9262.154,608.562s36.294-4.14,77.4-9.679c41.807-5.633,88.509-12.677,91.14-13.043,5.174-.719,73.052-9.491,81.391-10.354,4.187-.433,20.693-1.849,40.584-4.213,19.16-2.277,41.722-5.5,41.722-5.5s-32.668-11.55-46.324-16.008-35.518-10.806-35.518-10.806-23.183,4.03-53.383,7.05-88.295,7.478-97.788,8.772-62.557,5.464-69.461,6.471-47.32,5.029-47.32,5.029Z"
                              transform="translate(-8262.145 49.345)"></path>
                    </g>
                    <g data-plots-sector-selector="F">
                        <path d="M1209.111,531.815l23.514,16.1,54.114-8.081,23.507,13.223,106.026-16.9-40.4-21.059s-64.889,4.653-68.072,4.653-61.461-6.611-61.461-6.611l-5.24,1,15.894,10.815Z"></path>
                    </g>
                </g>
            </g>
        </svg>
    </div>

    <div data-plots-sector="A">
        <div class="plots-map__back-btn">
            <div class="container">
                <div class="row">
                    <button data-plots-back-to-sectors>WRÓĆ DO MAPY SEKTORÓW</button>
                </div>
            </div>
        </div>

        <img class="plots-map__img"
             src="https://osadajaworek.pl/1/wp-content/themes/starter/assets/img/prices/sector/sector-A/sectorA.jpg">
        <svg class="plots-map__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 0 1920 1082">
            <g>
                <g>
                    <g data-plots-plot="50">
                        <g>
                            <path d="M9164.059,775.486l86.615,88.039,116.9-62.215L9274.94,723.92l-26.379,12.9Z"
                                  transform="translate(-8548.19 73.139)"></path>
                        </g>
                        <text transform="translate(704 866)">
                            <tspan x="0" y="0">17</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="20">
                        <g>
                            <path d="M7523.359,630.089l-92.481,52.288,94.616,63.67,103.268-65.2-86.083-49.461Z"
                                  transform="translate(-6468 140)"></path>
                        </g>
                        <text transform="translate(1051 831)">
                            <tspan x="0" y="0">20</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="19">
                        <g>
                            <path d="M7566.742,599.8l-118.8,65.093,90.348,76.12L7661,664.892l-24.9-17.785Z"
                                  transform="translate(-6606 224)"></path>
                        </g>
                        <text transform="translate(938 894)">
                            <tspan x="0" y="0">19</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="16">
                        <g>
                            <path d="M7543.04,623.126,7427.49,677.218l75.77,63.142,46.3-23.152h26.1l58.3-30.729Z"
                                  transform="translate(-6698 119)"></path>
                        </g>
                        <text transform="translate(819 804)">
                            <tspan x="0" y="0">16</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="15">
                        <g>
                            <path d="M7535.116,629.4l-99.764,46.3,91.345,62.51,91.977-48.619V678.651Z"
                                  transform="translate(-6588 66)"></path>
                        </g>
                        <text transform="translate(934 755)">
                            <tspan x="0" y="0">15</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="14">
                        <g>
                            <path d="M7536.662,636.674l-91.333,37.76,67.047,45.692,99.635-46.358-59.353-37.095Z"
                                  transform="translate(-6667 20)"></path>
                        </g>
                        <text transform="translate(850 701)">
                            <tspan x="0" y="0">14</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="13">
                        <g>
                            <path d="M7565.336,627.254,7455.07,673.769l61.837,52.26,116.56-52.26L7602,651.606Z"
                                  transform="translate(-6790 68)"></path>
                        </g>
                        <text transform="translate(745 745)">
                            <tspan x="0" y="0">13</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="12">
                        <g>
                            <path d="M7558.928,631.075l-104.815,43.357,68.614,70.3L7634.487,693.8l-37.253-30.518Z"
                                  transform="translate(-6909 102)"></path>
                        </g>
                        <text transform="translate(621 792)">
                            <tspan x="0" y="0">12</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="11">
                        <g>
                            <path d="M7553.956,637.264l-98.922,36.266,61.685,62.332,104.588-42.58-36.1-29.79Z"
                                  transform="translate(-6973 39)"></path>
                        </g>
                        <text transform="translate(557 731)">
                            <tspan x="0" y="0">11</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="10">
                        <g>
                            <path d="M7549.568,647.751l-90.179,32.542,56.018,46.3,40.152-15.866,20.238.971,41.285-16.514Z"
                                  transform="translate(-6876 -5)"></path>
                        </g>
                        <text transform="translate(648 686)">
                            <tspan x="0" y="0">10</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="9">
                        <g>
                            <path d="M7581.981,635.208l-122.236,45.333,47.437,33.352L7617.6,669.531l3.076-7.933Z"
                                  transform="translate(-6763.965 -25.208)"></path>
                        </g>
                        <text transform="translate(766.246 656)">
                            <tspan x="0" y="0">9</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="8">
                        <g>
                            <path d="M7586.677,635.352l-129.854,44.6,40.085,28.618,122.523-45.32L7599.5,646.062Z"
                                  transform="translate(-6803 -54)"></path>
                        </g>
                        <text transform="translate(730 624)">
                            <tspan x="0" y="0">8</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="7">
                        <g>
                            <path d="M7583.527,638.277l-126.7,41.673,32.623,23.362,130.072-45.041-22.731-19.995Z"
                                  transform="translate(-6837 -78)"></path>
                        </g>
                        <text transform="translate(697 596)">
                            <tspan x="0" y="0">7</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="6">
                        <g>
                            <path d="M7548.3,652.649l-86.308,28.306,50.893,43.231,90.088-32.556-22.791-16.066Z"
                                  transform="translate(-6931 -50)"></path>
                        </g>
                        <text transform="translate(598 644)">
                            <tspan x="0" y="0">6</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="5">
                        <g>
                            <path d="M7555.6,640.1l-93.583,31.355,54.889,55.1,99.246-36.59-31.895-26.552Z"
                                  transform="translate(-7036 -15)"></path>
                        </g>
                        <text transform="translate(496 674)">
                            <tspan x="0" y="0">5</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="4">
                        <g>
                            <path d="M7548.568,640.074l-86.555,31.384,35,34.248,93.779-31.01-17.685-14.82Z"
                                  transform="translate(-7072 -51)"></path>
                        </g>
                        <text transform="translate(451 624)">
                            <tspan x="0" y="0">4</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="3">
                        <g>
                            <path d="M7548.633,644.594,7467.6,674.481l34.956,28.365,36.6-11.949H7556l40.2-12.628Z"
                                  transform="translate(-6989 -86)"></path>
                        </g>
                        <text transform="translate(537 591)">
                            <tspan x="0" y="0">3</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="2">
                        <g>
                            <path d="M7534.036,646.021l-62.3,22.941,48.2,33.255,70.3-22.1-18.943-11.155Z"
                                  transform="translate(-6910 -111)"></path>
                        </g>
                        <text transform="translate(615 567)">
                            <tspan x="0" y="0">2</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="1">
                        <g>
                            <path d="M7557.955,634.838l-84.675,30.438,55.371,34.161,55.046-17.485,4.209-5.99Z"
                                  transform="translate(-6847 -131)"></path>
                        </g>
                        <text transform="translate(685 543)">
                            <tspan x="0" y="0">1</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="21">
                        <g>
                            <path d="M7536.491,640.651l-42.727,12.55,31.135,39.9,13.316.716,43.014-14.083Z"
                                  transform="translate(-6761 -156)"></path>
                        </g>
                        <text transform="translate(765 516)">
                            <tspan x="0" y="0">21</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="22">
                        <g>
                            <path d="M7533.375,640.972l-44.343,12.664L7514.27,676.1l20.238,17,45.98-15.057Z"
                                  transform="translate(-6712 -170)"></path>
                        </g>
                        <text transform="translate(813 502)">
                            <tspan x="0" y="0">22</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="23">
                        <g>
                            <path d="M7530.627,641.057l-41.6,12.579,26.278,20.8,20.424,15.941,43.677-14.271Z"
                                  transform="translate(-6666 -183)"></path>
                        </g>
                        <text transform="translate(857 487)">
                            <tspan x="0" y="0">23</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="24">
                        <g>
                            <path d="M7527.976,643.475l-38.981,11.084,26.4,18.806,22.168,16.19,41.845-13.45Z"
                                  transform="translate(-6623 -197)"></path>
                        </g>
                        <text transform="translate(901 474)">
                            <tspan x="0" y="0">24</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="25">
                        <g>
                            <path d="M7523.092,644.706l-38.144,11.439,29.239,18.027,22.342,14.409,38.695-13.114Z"
                                  transform="translate(-6579 -210)"></path>
                        </g>
                        <text transform="translate(941 462)">
                            <tspan x="0" y="0">25</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="26A">
                        <g>
                            <path d="M7556.771,635.265l-71.823,20.88,29.018,17.186,11.728-3.357,66.54-17.234Z"
                                  transform="translate(-6540 -222)"></path>
                        </g>
                        <text transform="translate(984 436)">
                            <tspan x="0" y="0">26A</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="26B" transform="translate(36 18.183)">
                        <g>
                            <path d="M7556.771,635.265l-66.638,17.111,16.957,10.155,12.933,7.951,69.934-18.968Z"
                                  transform="translate(-6540 -222)"></path>
                        </g>
                        <text transform="translate(984 436)">
                            <tspan x="0" y="0">26B</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="27">
                        <g>
                            <path d="M7594.146,654.49l-71.629,19.045-7.443,4.5,30.141,15.3,78.85-23.95Z"
                                  transform="translate(-6507 -206)"></path>
                        </g>
                        <text transform="translate(1051 472)">
                            <tspan x="0" y="0">27</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="28">
                        <g>
                            <path d="M7592.069,655.15l-78.556,23.567,17.627,8.239,18.942,9.177,79.083-25.406Z"
                                  transform="translate(-6474 -191)"></path>
                        </g>
                        <text transform="translate(1088 491)">
                            <tspan x="0" y="0">28</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="50">
                        <g>
                            <path d="M7588.909,651.972l-79.955,25.157,21.956,10.136,17.818,8.622,78.556-26.632Z"
                                  transform="translate(-6432 -171)"></path>
                        </g>
                        <text transform="translate(1130 509)">
                            <tspan x="0" y="0">50</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="51">
                        <g>
                            <path d="M7582.015,649.906l-78.584,26.9,27.772,12.828,16.564,7.971,78.958-29.142Z"
                                  transform="translate(-6385 -151)"></path>
                        </g>
                        <text transform="translate(1174 528)">
                            <tspan x="0" y="0">51</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="52">
                        <g>
                            <path d="M7577.1,648.923l-79.817,29.628,32.7,15.057,15.381,6.962,80.465-32.218Z"
                                  transform="translate(-6333 -131)"></path>
                        </g>
                        <text transform="translate(1222 546)">
                            <tspan x="0" y="0">52</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="53">
                        <g>
                            <path d="M7572.752,648.369l-80.451,32.01,35.78,16.838,17.485,6.476,81.922-34.647Z"
                                  transform="translate(-6278 -110)"></path>
                        </g>
                        <text transform="translate(1277 568)">
                            <tspan x="0" y="0">53</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="54">
                        <g>
                            <path d="M7572.752,648.369l-82.408,35.456,37.237,14.895,23.638,9.39,82.408-38.047Z"
                                  transform="translate(-6221 -89)"></path>
                        </g>
                        <text transform="translate(1334 592)">
                            <tspan x="0" y="0">54</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="55">
                        <g>
                            <path d="M7567.185,645.323l-82.926,38.727,42.142,16.6,25.655,10.088,79.954-41.631Z"
                                  transform="translate(-6152 -64)"></path>
                        </g>
                        <text transform="translate(1399 616)">
                            <tspan x="0" y="0">55</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="29">
                        <g>
                            <path d="M7532.023,652.964l-27.523-.747-30.761,10.711,60.231,34.121,50.189-18.681Z"
                                  transform="translate(-6529 -169)"></path>
                        </g>
                        <text transform="translate(989 506)">
                            <tspan x="0" y="0">29</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="30">
                        <g>
                            <path d="M7523.993,643.425l-32.035,10.135-17.781,6.3,58.241,37.234,51.933-19.179Z"
                                  transform="translate(-6581 -149)"></path>
                        </g>
                        <text transform="translate(935 524)">
                            <tspan x="0" y="0">30</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="31">
                        <g>
                            <path d="M7533.056,639.736l-41.1,13.824-12.952,4.11,56.374,39.725,55.669-20.549Z"
                                  transform="translate(-6641 -128)"></path>
                        </g>
                        <text transform="translate(884 543)">
                            <tspan x="0" y="0">31</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="32">
                        <g>
                            <path d="M7538.389,638.044l-48.944,16.688-4.234,5.978,49.4,39.974,60.028-22.417Z"
                                  transform="translate(-6702 -108)"></path>
                        </g>
                        <text transform="translate(828 564)">
                            <tspan x="0" y="0">32</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="33">
                        <g>
                            <path d="M7584.3,634.087l-75.471,28.146L7470.1,676.68l6.6,5.978,24.41,16.315,122.084-46.4Z"
                                  transform="translate(-6636 -83)"></path>
                        </g>
                        <text transform="translate(908 586)">
                            <tspan x="0" y="0">33</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="49">
                        <g>
                            <path d="M7585.281,633.612l-76.841,28.52-29.018,10.835,39.028,19.307,104.987-40.6Z"
                                  transform="translate(-6529 -123)"></path>
                        </g>
                        <text transform="translate(1010 545)">
                            <tspan x="0" y="0">49</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="48">
                        <g>
                            <path d="M7586.163,634.583l-74.678,29-30.4,11.315,44.523,22.343,102.322-42.257Z"
                                  transform="translate(-6490 -105)"></path>
                        </g>
                        <text transform="translate(1054 566)">
                            <tspan x="0" y="0">48</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="47">
                        <g>
                            <path d="M7582.525,633.091l-71.86,29.392L7481.088,674.9l51.5,25.446L7630.6,656.38Z"
                                  transform="translate(-6443 -82)"></path>
                        </g>
                        <text transform="translate(1101 590)">
                            <tspan x="0" y="0">47</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="46">
                        <g>
                            <path d="M7581.766,632.376l-98.955,43.739,59.9,29.142,96.332-47.276-25.475-9.8Z"
                                  transform="translate(-6392 -57)"></path>
                        </g>
                        <text transform="translate(1161 614)">
                            <tspan x="0" y="0">46</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="45">
                        <g>
                            <path d="M7576.476,630.439l-96.818,46.79,68.161,31.247,94.875-50.837-28.5-11.819Z"
                                  transform="translate(-6327 -28)"></path>
                        </g>
                        <text transform="translate(1229 645)">
                            <tspan x="0" y="0">45</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="34">
                        <g>
                            <path d="M7587.33,634.544,7508.969,664.5,7466.6,680.844,7502.1,704.88l125.546-51.07Z"
                                  transform="translate(-6599 -64)"></path>
                        </g>
                        <text transform="translate(945 605)">
                            <tspan x="0" y="0">34</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="35">
                        <g>
                            <path d="M7586.947,633.621l-78.523,32.057-46.458,19.075,23.538,15.692,17.436,9.714,126.75-55.166Z"
                                  transform="translate(-6557 -43)"></path>
                        </g>
                        <text transform="translate(983 629)">
                            <tspan x="0" y="0">35</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="36">
                        <g>
                            <path d="M7586,633.218l-77.79,33.434-49.9,21.5,47.2,27.025,126.858-59.449Z"
                                  transform="translate(-6511 -20)"></path>
                        </g>
                        <text transform="translate(1035 655)">
                            <tspan x="0" y="0">36</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="37">
                        <g>
                            <path d="M7585.57,633.072l-76.449,35.734-50.5,23.122,51.684,29.516L7635.961,657.6Z"
                                  transform="translate(-6462 4)"></path>
                        </g>
                        <text transform="translate(1083 681)">
                            <tspan x="0" y="0">37</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="38">
                        <g>
                            <path d="M7583.835,631.842l-74.916,37.841-51.99,26,56.666,32.131L7640.836,658Z"
                                  transform="translate(-6407 31)"></path>
                        </g>
                        <text transform="translate(1140 710)">
                            <tspan x="0" y="0">38</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="39">
                        <g>
                            <path d="M7581.518,627.145l-74.341,41-53.222,28.792,62.021,35.369,127.717-77Z"
                                  transform="translate(-6345 63)"></path>
                        </g>
                        <text transform="translate(1200 741)">
                            <tspan x="0" y="0">39</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="40">
                        <g>
                            <path d="M7465.656,693.521l12.932,6.865,127.655,64.277h24.9l43.778-35.023-159.244-84.547-65.339,39.959Z"
                                  transform="translate(-6276 112)"></path>
                        </g>
                        <text transform="translate(1279 822)">
                            <tspan x="0" y="0">40</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="41">
                        <g>
                            <path d="M7544.315,630.344l-38.033,23.531-16.417,10.4,158.97,84,53.628-41.316Z"
                                  transform="translate(-6248 92)"></path>
                        </g>
                        <text transform="translate(1336 784)">
                            <tspan x="0" y="0">41</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="42">
                        <g>
                            <path d="M7546.089,638.194l-34.1,21.258-15.785,9.471,157.644,75.349,48.614-37.316Z"
                                  transform="translate(-6198 53)"></path>
                        </g>
                        <text transform="translate(1386 745)">
                            <tspan x="0" y="0">42</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="43">
                        <g>
                            <path d="M7680.173,704.627l-141.5-58.609-45.495,28.333,155.426,68.97,38.047-29.628Z"
                                  transform="translate(-6143 16)"></path>
                        </g>
                        <text transform="translate(1431 713)">
                            <tspan x="0" y="0">43</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="57">
                        <g>
                            <path d="M7559.934,632.678l-79.348,45.462,73.244,29.887h19.153l63.142-48.829Z"
                                  transform="translate(-6001)"></path>
                        </g>
                        <text transform="translate(1548 671)">
                            <tspan x="0" y="0">57</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="56">
                        <g>
                            <path d="M7564.8,641.527l-81.453,42.726,63.773,24.625,10.313,4.42,79.769-45.462Z"
                                  transform="translate(-6081 -36)"></path>
                        </g>
                        <text transform="translate(1467 644)">
                            <tspan x="0" y="0">56</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="44">
                        <g>
                            <path d="M7576.476,630.439l-95.018,51.544,76.841,35.369,92.534-56.292L7614.2,645.82Z"
                                  transform="translate(-6258)"></path>
                        </g>
                        <text transform="translate(1296 675)">
                            <tspan x="0" y="0">44</tspan>
                        </text>
                    </g>
                    <g data-plots-plot="18">
                        <g>
                            <path d="M7565.3,604.387,7449.017,666.5,7551.349,772.66,7674.2,694.953l-39.714-33.107Z"
                                  transform="translate(-6744 272)"></path>
                        </g>
                        <text transform="translate(804 956)">
                            <tspan x="0" y="0">18</tspan>
                        </text>
                    </g>
                </g>
            </g>
        </svg>
    </div>
</section>


<?php
var_dump($plots);
?>

<?php
wp_footer();
?>
