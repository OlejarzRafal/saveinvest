window.addEventListener('DOMContentLoaded', (event) => {

    if (document.getElementById('Group_1210') !== null) {

        let popup_download = document.querySelector('.popup .btn-download');
        let popup = document.querySelector('.popup');
        let btn_close = document.querySelector('.btn-close');
        let bikes = document.querySelector('.bikes');
        let pool = document.querySelector('.pool');
        let playground = document.querySelector('.playground');

        document.getElementById('Group_1210').addEventListener('click', function (item) {
            let target_id = item.target.dataset.name;
            let data_status = document.querySelector('.plot[data-id="' + target_id + '"]').dataset.status;
            let download = document.querySelector('.plot[data-id="' + target_id + '"] .btn-download');
            let photo = document.querySelector('.plot[data-id="' + target_id + '"] .photo').src;
            let data = document.querySelector('.plot[data-id="' + target_id + '"] .data').innerHTML;

            if (data_status !== 'sold') {
                popup.classList.add('open_always');
            }
            if (download !== null) {
                popup_download.style.display = 'inline-block';
                popup_download.setAttribute('href', download.href);
            } else {
                popup_download.style.display = 'none';
            }

            let price_difference = document.querySelector('.plot[data-id="' + target_id + '"] .extra .text');
            let extra = document.querySelector('.popup .pasteExtra');

            if (price_difference !== null) {
                extra.style.display = "block";
                document.querySelector('.pasteExtra .text').textContent = price_difference.textContent;
            } else {
                extra.style.display = "none";
            }

            document.querySelector('.popup .title2').textContent = target_id;
            document.querySelector('.popup').dataset.status = data_status;
            document.querySelector('.popup .status').innerHTML = document.querySelector('.plot[data-id="' + target_id + '"] .status').innerHTML;
            document.querySelector('.pasteData').innerHTML = data;
            document.querySelector('.pastePhoto img').src = photo;
            document.querySelector('.pastePhoto img').classList.add('img-fluid');
        });

        document.getElementById('Group_1210').addEventListener('mouseover', function (item) {
            if (window.innerWidth > 767) {
                if (!popup.classList.contains('open_always')) {
                    popup.classList.add('open');
                    let target_id = item.target.dataset.name;
                    let data = document.querySelector('.plot[data-id="' + target_id + '"] .data').innerHTML;
                    let photo = document.querySelector('.plot[data-id="' + target_id + '"] .photo').src;
                    let data_status = document.querySelector('.plot[data-id="' + target_id + '"]').dataset.status;
                    let price_difference = document.querySelector('.plot[data-id="' + target_id + '"] .extra .text');
                    let extra = document.querySelector('.popup .pasteExtra');

                    if (price_difference !== null) {
                        extra.style.display = "block";
                        document.querySelector('.pasteExtra .text').textContent = price_difference.textContent;
                    } else {
                        extra.style.display = "none";
                    }

                    popup_download.style.display = 'none';

                    document.querySelector('.popup .title2').textContent = target_id;
                    document.querySelector('.popup').dataset.status = data_status;
                    document.querySelector('.popup .status').innerHTML = document.querySelector('.plot[data-id="' + target_id + '"] .status').innerHTML;
                    document.querySelector('.pasteData').innerHTML = data;

                    document.querySelector('.pastePhoto img').src = photo;
                    document.querySelector('.pastePhoto img').classList.add('img-fluid');
                }
            }
        });

        document.getElementById('Group_1210').addEventListener('mouseout', function (item) {
            popup.classList.remove('open');
        });

        btn_close.addEventListener('click', function (item) {
            popup.classList.remove('open_always');
            let target_id = item.target.dataset.name;
            let download = document.querySelector('.plot[data-id="' + target_id + '"] .btn-download');
            if (download !== null) {
                popup_download.style.display = 'inline-block';
                popup_download.setAttribute('href', download.src);
            } else {
                popup_download.style.display = 'none';
            }
        });

        document.getElementById('bikes').addEventListener('mouseover', function () {
            popup.classList.remove('open_always', "open");
            bikes.classList.add('open');
        });

        document.getElementById('bikes').addEventListener('mouseout', function () {
            popup.classList.remove('open_always', "open");
            bikes.classList.remove('open');
        });

        document.getElementById('pool').addEventListener('mouseover', function () {
            popup.classList.remove('open_always', "open");
            pool.classList.add('open');
        });

        document.getElementById('pool').addEventListener('mouseout', function () {
            popup.classList.remove('open_always', "open");
            pool.classList.remove('open');
        });

        document.getElementById('playground').addEventListener('mouseover', function () {
            playground.classList.add('open');
        });

        document.getElementById('playground').addEventListener('mouseout', function () {
            playground.classList.remove('open');
        });


        let btn_write = document.querySelectorAll('.btn-write');

        for (var i = 0; i < btn_write.length; i++) {
            btn_write[i].addEventListener('click', function (item) {
                document.getElementById('modalMessage').style.display = "block";
                document.getElementById('modalMessage').classList.remove('fade');
                document.querySelector('.js_area_number').textContent = item.target.dataset.id;
            });
        }


        document.querySelector('.modal .close').addEventListener('click', function (item) {
            document.getElementById('modalMessage').style.display = "none";
            document.getElementById('modalMessage').classList.add('fade');
        });
    }
});

function areasSetStart() {
    areasSort('id', 'down');
}

areasSetStart();

// Sort list


function areasSort(sortType, sortDir) {
    $('.widget-areaslist #arealist').attr('data-page', 0);

    let items = $('.plots .plot');
    if (sortDir === 'up')
        items.sort(function (a, b) {
            return +$(b).data(sortType) - +$(a).data(sortType);
        });
    if (sortDir === 'down')
        items.sort(function (a, b) {
            return +$(a).data(sortType) - +$(b).data(sortType);
        });
    items.appendTo('.plots');
}

$(document).on('click', '.sorts a', function (event) {
    $('.widget-areaslist .sorts a').removeClass('active');
    $(this).addClass('active');
    $(this).toggleClass('up down');

    if ($(this).hasClass('up'))
        dir = 'up';
    if ($(this).hasClass('down'))
        dir = 'down';

    areasSort($(this).data('sort'), dir);
});

