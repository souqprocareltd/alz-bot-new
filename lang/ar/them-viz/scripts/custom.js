/*
 * ===========================================================
 * CUSTOM.JS 
 * ===========================================================
 * This is a custom file and it's used only on this template.
 *
*/

"use strict";
(function ($) {
    let fixed_area_menu = $('.fixed-area-menu');
    if (fixed_area_menu.length) {
        fixed_area_menu.css('max-height', (window.innerHeight - 200) + 'px');
    }
    var URL = window.location.href;
    var menu_button = $('body > nav .menu-right .btn');

    // Top menu purchase button
    if (menu_button.length) {
        var link = false;
         if (URL.includes('/active-ecommerce')) {
            link = 'https://1.envato.market/00gWO';
         } else if (URL.includes('/dialogflow')) {
            link = 'https://board.support/shop/dialogflow';
        } else if(URL.includes('/messenger')) {
             link = 'https://board.support/shop/messenger?utm_source=website&utm_medium=page&utm_campaign=pricing';
        } else if (URL.includes('/tickets')) {
            link = 'https://board.support/shop/tickets';
        } else if (URL.includes('/woocommerce')) {
            link = 'https://1.envato.market/naWr6';
        } else if (URL.includes('/slack')) {
            link = 'https://board.support/shop/slack';
        } else if (URL.includes('/perfex')) {
            link = 'https://1.envato.market/GjXv3m';
        } else if (URL.includes('/ultimate-membership-pro')) {
            link = 'https://1.envato.market/b42kP';
        } else if (URL.includes('/whmcs')) {
            link = 'https://board.support/shop/whmcs';
        } else if (URL.includes('/active-ecommerce')) {
            link = 'https://1.envato.market/00gWO';
        }
        if (link) {
            menu_button.attr('href', link);
        }
    }

    // iframe
    if (inIframe()) {
        $('.btn').each(function () {
            if ($(this).attr('href').includes('envato')) {
                $(this).attr('target', '_blank');
            }
        });
    }
    function inIframe() {
        try {
            return window.self !== window.top;
        } catch (e) {
            return true;
        }
    }

    // Cloud landing page link changes
    let cloud_page = localStorage.getItem('cloud');
    if (URL.includes('?cloud')) {
        localStorage.setItem('cloud', 'yes');
        window.history.replaceState({}, document.title, URL.replace('?cloud', ''));
    }
    if (cloud_page !== null) {
        $('[href="wordpress"],[href="../wordpress"]').attr('href', 'https://board.support/hire-us').html('Hire us');
        $('[href="php"],[href="../php"]').attr('href', 'https://board.support/more-features').html('More features');
        $('[href="docs/"],[href="../docs/"]').attr('href', 'https://board.support/docs/?cloud');
        $('.cloud-remove').remove();
    }
}(jQuery)); 