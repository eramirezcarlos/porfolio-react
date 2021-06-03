/*=========================================

Template Name: Carlos - Personal Portfolio Template

=========================================*/


(function ($) {
    "use strict";

    var $window = $(window),
        $body = $('body');

    jQuery(document).ready(function ($) {

        /*======== Sticky header ===========*/
        $('.navbar-collapse a').on('click', function () {
            $(".navbar-collapse").collapse('hide');
        });

        $window.on('scroll', function () {
            if ($(".navbar").offset().top > 100) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        /*======== Smoothscroll js ===========*/
        $(function () {
            $('a.smoth-scroll').on('click', function (event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 0
                }, 1000);
                event.preventDefault();
            });
        });

        /*======== jquery scroll spy ===========*/
        $body.scrollspy({
            target: ".navbar-collapse",
            offset: 95
        });

        /*========  Bootstrap menu fix ===========*/
        $(".navbar-toggle").on("click", function () {
            $body.addClass("mobile-menu-activated");
        });

        $("ul.nav.navbar-nav li a").on("click", function () {
            $(".navbar-collapse").removeClass("in");
        });

        /*======== background-image flickering solution for mobile ===========*/
        var bg = jQuery("#home");

        function resizeBackground() {
            bg.height(jQuery(window).height() + 60);
        }

        resizeBackground();

        /*======== Modal js ===========*/
        $("#projectModal1, #projectModal2, #projectModal3, #projectModal4, #projectModal5, #projectModal6, #projectModal7, #projectModal8, #projectModal9").on('hidden.bs.modal', function (e) {
            $("#projectModal1 iframe, #projectModal2 iframe, #projectModal3 iframe, #projectModal3 iframe, #projectModal4 iframe, #projectModal5 iframe, #projectModal6 iframe, #projectModal7 iframe, #projectModal8 iframe, #projectModal9 iframe").attr("src", $("projectModal1 iframe, #projectModal2 iframe, #projectModal3 iframe, #projectModal3 iframe, #projectModal4 iframe, #projectModal5 iframe, #projectModal6 iframe, #projectModal7 iframe, #projectModal8 iframe, #projectModal9 iframe").attr("src"));
        });

        /*======== Intro typer ===========*/
        var element = $(".element");
        $(function () {
            element.typed({
                strings: ["Software Engineer ", "FullStack Developer ", "PHP Developer ", "UX/UI Developer ", "Pega Certified System Architect ", "Oracle PL/SQL Certified Professional "],
                typeSpeed: 100,
                loop: true,
            });
        });

        /*======== Parallax js ===========*/
        $window.stellar({
            responsive: true,
            positionProperty: 'position',
            horizontalScrolling: false
        });

        /*======== Magnific Popup ===========*/
        $('.work-popup').magnificPopup({type: 'image'});

        /*========  CounterUp ===========*/
        $('.counter').counterUp({
            delay: 4,
            time: 800
        });

        /*========   WOW js===========*/
        new WOW({mobile: false}).init();

        /*======== jQuery mixItUp ===========*/
        $('.work-inner').mixItUp();

        /*========   owl carousel testimonial ===========*/
        $(".testimonial-list").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });


    });
    //set the same height of boxes
    $('.row-eq-height').each(function () {
        var highestBox = 0;
        $(this).children('[class*="col-"]').each(function (index, el) {
            if ($(el).height() > highestBox) highestBox = $(el).height();
        });
        $(this).children('[class*="col-"]').css('height', highestBox);
    });

    $window.on('load', function () {

        /*======== Preloder ===========*/
        setTimeout(function () {
            $('body').addClass('loaded');
        }, 2500);

    });

}(jQuery));	

