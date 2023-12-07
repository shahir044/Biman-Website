/*---------------------------------------------
Template name:  Trizen - Travel, hotel Booking HTML5 Template
Version:        1.0
Author:         TechyDevs
Author Email:   contact@tecydevs.com

[Table of Content]

01: Preloader
02: Header top bar menu
02: Responsive Mobile menu
03: Canvas menu open
04: Canvas menu close
05: Dashboard menu
06: window resize
07: Navbar offset top
08: Page scroll anchor menu
09: Back to top button
10: Hotel-card-carousel
11: Car-carousel
12: Trending-carousel
13: Gallery-carousel
14: Client logo
15: Testimonial-carousel
16: Fancybox for video
17: Fancybox for gallery
18: ripple-bg
19: Ui range slider
20: Filer uploader
21: Daterangepicker
22: Bootstrap select picker
23: Bootstrap tooltip
24: Add multiple flight function
25: multi-flight-remove
26: Google map
27: Guests Dropdown
28: mobile dropdown menu
29: Sub menu open
----------------------------------------------*/

(function ($) {
    "use strict";
    var $window = $(window);

    $window.on('load', function () {
        var $document = $(document);
        var $dom = $('html, body');
        var preloader = $('#preloader');
        var dropdownMenu = $('.main-menu-content .dropdown-menu-item');
        var isMenuOpen = false;
        var topNav = document.querySelector('.header-menu-wrapper');
        var scrollTopBtn = $('#back-to-top');
        var scrollLink = $('#single-content-nav .scroll-link');
        var hotelCardCarousel = $('.hotel-card-carousel');
        var hotelCardCarouselTwo = $('.hotel-card-carousel-2');
        var cardImgCarousel = $('.card-img-carousel');
        var carCarousel = $('.car-carousel');
        var trendingCarousel = $('.trending-carousel');
        var galleryCarousel = $('.gallery-carousel');
        var clientCarousel = $('.client-logo');
        var testimonialCarousel = $('.testimonial-carousel');
        var testimonialCarouselTwo = $('.testimonial-carousel-2');
        var fancyVideo = $('[data-fancybox="video"]');
        //var fancyGallery = $('[data-fancybox="gallery"]');
        var hotelSingleMainGallery = $('[data-fancybox="hotel-single-main-gallery"]');
        var rippleBg = $('.ripple-bg');
        var masonryGrid = $('.grid-masonry');
        var rangeSlider = $('#slider-range');
        var rangeSliderAmount = $('#amount');
        var rangeSliderTwo = $('#slider-range2');
        var rangeSliderAmountTwo = $('#amount2');
        var datePickerMultiple = $('.date-picker-multiple');
        var datePickerSingle = $('.date-picker-single');
        var bootstrapSelectMenu = $('.select-contain-select');
        var numberCounter = $('.counter');
        var fullWidthSlider = $('.full-width-slider');


        /* ======= Preloader ======= */
        preloader.delay('500').fadeOut(2000);

        /*=========== Header top bar menu ============*/
        $document.on('click', '.down-button', function () {
            $(this).toggleClass('active');
            $('.header-top-bar').slideToggle(200);
        });

        /*=========== Responsive Mobile menu ============*/
        $document.on('click', '.menu-toggler', function () {
            $(this).toggleClass('active');
            $('.main-menu-content').slideToggle(200);
        });

        /*=========== Dropdown menu ============*/
        dropdownMenu.parent('li').children('a').append(function () {
            return '<button class="drop-menu-toggler" type="button"><i class="la la-angle-down"></i></button>';
        });

        /*=========== Dropdown menu ============*/
        $document.on('click', '.main-menu-content .drop-menu-toggler', function () {
            var Self = $(this);
            Self.parent().parent().children('.dropdown-menu-item').toggle();
            return false;
        });

        /*=========== Sub menu ============*/
        $('.main-menu-content .dropdown-menu-item .sub-menu').parent('li').children('a').append(function () {
            return '<button class="sub-menu-toggler" type="button"><i class="la la-plus"></i></button>';
        });

        /*=========== Dropdown menu ============*/
        $document.on('click', '.main-menu-content .dropdown-menu-item .sub-menu-toggler', function () {
            var Self = $(this);
            Self.parent().parent().children('.sub-menu').toggle();
            return false;
        });

        /*=========== Canvas menu open ============*/
        $document.on('click', '.user-menu-open', function () {
            $('.user-canvas-container').addClass('active');
        });

        /*=========== Canvas menu close ============*/
        $document.on('click', '.side-menu-close', function () {
            $('.user-canvas-container, .sidebar-nav').removeClass('active');
        });

        /*=========== Dashboard menu ============*/
        $document.on('click', '.menu-toggler', function () {
            $('.sidebar-nav').toggleClass('active');
        });

        /*=========== When window will resize then this action will work ============*/
        $window.on('resize', function () {
            if ($window.width() > 991) {
                $('.main-menu-content').show();
                $('.dropdown-menu-item').show();
                $('.sub-menu').show();
                $('.header-top-bar').show();
            } else {
                if (isMenuOpen) {
                    $('.main-menu-content').show();
                    $('.dropdown-menu-item').show();
                    $('.sub-menu').show();
                    $('.header-top-bar').show();
                } else {
                    $('.main-menu-content').hide();
                    $('.dropdown-menu-item').hide();
                    $('.sub-menu').hide();
                    $('.header-top-bar').hide();
                }
            }
        });

        /*=========== Navbar offset top ============*/
        if ($(topNav).length) {
            var topOfNav = topNav.offsetTop;
        }

        $window.on('scroll', function () {

            if ($window.scrollTop() >= topOfNav) {
                document.body.style.paddingTop = topNav.offsetHeight + 'px';
                document.body.classList.add('fixed-nav');
            } else {
                document.body.style.paddingTop = '0px';
                document.body.classList.remove('fixed-nav');
            }

            //back to top button control
            if ($window.scrollTop() > 500) {
                $(scrollTopBtn).addClass('active');
            } else {
                $(scrollTopBtn).removeClass('active');
            }

            //page scroll position
            findPosition();

        });

        /*========== Page scroll ==========*/

        scrollLink.on('click', function (e) {
            var target = $($(this).attr('href'));

            $($dom).animate({
                scrollTop: target.offset().top
            }, 600);

            $(this).addClass('active');

            e.preventDefault();
        });

        function findPosition() {
            $('.page-scroll').each(function () {
                if (($(this).offset().top - $(window).scrollTop()) < 20) {
                    scrollLink.removeClass('active');
                    $('#single-content-nav').find('[data-scroll="' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        }

        /*===== Back to top button ======*/
        $document.on("click", "#back-to-top", function () {
            $($dom).animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        /*==== Hotel-card-carousel =====*/
        if ($(hotelCardCarousel).length) {
            $(hotelCardCarousel).owlCarousel({
                loop: true,
                items: 4,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                active: true,
                margin: 30,
                navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 991 up
                    768: {
                        items: 2
                    },
                    // breakpoint from 992 up
                    992: {
                        items: 3
                    },
                    // breakpoint from 1441 up
                    1441: {
                        items: 4
                    }
                }
            });
        }

        /*==== Hotel-card-carousel 2 =====*/
        if ($(hotelCardCarouselTwo).length) {
            $(hotelCardCarouselTwo).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                active: true,
                margin: 30,
                navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 991 up
                    768: {
                        items: 2
                    },
                    // breakpoint from 992 up
                    992: {
                        items: 3
                    },
                }
            });
        }

        /*==== card-img-carousel =====*/
        if ($(cardImgCarousel).length) {
            $(cardImgCarousel).owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                active: true,
                margin: 30,
                navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>']
            });
        }

        /*==== Car-carousel =====*/
        if ($(carCarousel).length) {
            $(carCarousel).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                active: true,
                margin: 30,
                navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
                responsive: {
                    // breakpoint from 167 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 2
                    },
                    // breakpoint from 992 up
                    992: {
                        items: 3
                    }
                }
            });
        }

        /*==== Trending-carousel =====*/
        if ($(trendingCarousel).length) {
            $(trendingCarousel).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                margin: 30,
                navText: ['<i class="la la-long-arrow-left"></i>', '<i class="la la-long-arrow-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 2
                    },
                    // breakpoint from 992 up
                    992: {
                        items: 3
                    }
                }
            });
        }

        /*==== Gallery-carousel =====*/
        if ($(galleryCarousel).length) {
            $(galleryCarousel).owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                dots: true,
                smartSpeed: 700,
                margin: 20,
                navText: ['<i class="la la-long-arrow-left"></i>', '<i class="la la-long-arrow-right"></i>']
            });
        }

        /*==== Client logo =====*/
        if ($(clientCarousel).length) {
            $(clientCarousel).owlCarousel({
                loop: true,
                items: 6,
                nav: false,
                dots: false,
                smartSpeed: 700,
                autoplay: true,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 425 up
                    425: {
                        items: 2
                    },
                    // breakpoint from 480 up
                    480: {
                        items: 2
                    },
                    // breakpoint from 767 up
                    767: {
                        items: 4
                    },
                    // breakpoint from 992 up
                    992: {
                        items: 6
                    }
                }
            });
        }

        /*==== testimonial-carousel =====*/
        if ($(testimonialCarousel).length) {
            $(testimonialCarousel).owlCarousel({
                loop: true,
                items: 2,
                nav: true,
                dots: false,
                smartSpeed: 700,
                autoplay: false,
                margin: 30,
                navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 900 up
                    900: {
                        items: 2
                    }

                }
            });
        }

        /*==== testimonial-carousel-2 =====*/
        if ($(testimonialCarouselTwo).length) {
            $(testimonialCarouselTwo).owlCarousel({
                loop: true,
                items: 3,
                nav: true,
                dots: true,
                smartSpeed: 700,
                autoplay: false,
                margin: 30,
                navText: ['<i class="la la-long-arrow-left"></i>', '<i class="la la-long-arrow-right"></i>'],
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 2
                    },
                    // breakpoint from 992 up
                    992: {
                        items: 3
                    }
                }
            });
        }

        /*==== Fancybox for video =====*/
        if ($(fancyVideo).length) {
            $(fancyVideo).fancybox({
                buttons: [
                    "share",
                    "fullScreen",
                    "close"
                ]
            });
        }

        /*==== Fancybox for gallery =====*/
        if ($(hotelSingleMainGallery).length) {
            $(hotelSingleMainGallery).fancybox({
                buttons: [
                    "share",
                    "slideShow",
                    "fullScreen",
                    "download",
                    "thumbs",
                    "close"
                ]
            });
        }

        /*====  Ripple-bg =====*/
        if ($(rippleBg).length) {
            $(rippleBg).ripples({
                resolution: 500,
                dropRadius: 20,
                perturbance: 0
            });
        }

        if ($(masonryGrid).length) {
            $(masonryGrid).masonry({});
        }

        /*======= ui price range slider ========*/
        if ($(rangeSlider).length) {
            $(rangeSlider).slider({
                range: true,
                min: 0,
                max: 1000,
                values: [40, 800],
                slide: function (event, ui) {
                    $(rangeSliderAmount).val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
        }
        $(rangeSliderAmount).val("$" + $(rangeSlider).slider("values", 0) +
            " - $" + $(rangeSlider).slider("values", 1));

        /*======= ui price range slider 2 ========*/
        if ($(rangeSliderTwo).length) {
            $(rangeSliderTwo).slider({
                range: true,
                min: 0,
                max: 1000,
                values: [40, 800],
                slide: function (event, ui) {
                    $(rangeSliderAmountTwo).val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
        }

        $(rangeSliderAmountTwo).val("$" + $(rangeSliderTwo).slider("values", 0) +
            " - $" + $(rangeSliderTwo).slider("values", 1));

        /*==== Date picker multiple =====*/
        if ($(datePickerMultiple).length) {
            $(datePickerMultiple).daterangepicker({
                opens: 'right',
                locale: {
                    format: 'DD/MM/YYYY',
                }
            });
        }

        /*==== Date picker single =====*/
        if ($(datePickerSingle).length) {
            $(datePickerSingle).daterangepicker({
                singleDatePicker: true,
                opens: 'right',
                locale: {
                    format: 'DD/MM/YYYY',
                }
            });
        }

        /*==== Bootstrap select picker =====*/
        if ($(bootstrapSelectMenu).length) {
            $(bootstrapSelectMenu).selectpicker({
                liveSearch: true,
                liveSearchPlaceholder: 'Search',
                liveSearchStyle: 'contains',
                size: 5
            });
        }

        /*==== counter =====*/
        if (numberCounter.length) {
            numberCounter.countTo({
                speed: 1200
            });
        }

        /*==== Bootstrap tooltip =====*/
        if ($('[data-toggle="tooltip"]').length) {
            $('[data-toggle="tooltip"]').tooltip();
        }

        /*==== When you will click the add another flight btn then this action will be work =====*/
        var personno = 2;
        $document.on('click', '.add-person-btn', function () {

            if ($('.multi-person-field').length < 10) {

                $(this).closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-add-wrap').hide();
                $(this).closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-delete-wrap').hide();

                var newPerson = $('.multi-person-field:last').clone().find("input:text").val("").end().insertAfter('.multi-person-field:last');


                newPerson.find('label').each(function () {
                    if (this.id.match('l_p_name_')) {
                        $(this).attr('name', 'l_p_name_' + personno);
                        $(this).attr('id', 'l_p_name_' + personno);
                        $(this).text('Passenger-'+personno+' Full Name');
                    } else if (this.id.match('l_p_ticket_')) {
                        $(this).attr('name', 'l_p_ticket_' + personno);
                        $(this).attr('id', 'l_p_ticket_' + personno);
                    }
                });

                newPerson.find('input').each(function () {
                    if (this.name.match('p_name_')) {
                        $(this).attr('name', 'p_name_' + personno);
                        $(this).attr('id', 'p_name_' + personno);
                    } else if (this.name.match('p_ticket_')) {
                        $(this).attr('name', 'p_ticket_' + personno);
                        $(this).attr('id', 'p_ticket_' + personno);
                    }
                    console.log(this.name);
                });

                personno = personno + 1;
            }

            if(personno<10){
                $(this).closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-delete-wrap').show();
                $(this).closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-add-wrap').show();
            }
            if(personno==10){
                $(this).closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-delete-wrap').show();
            }

        });

        /*=========== multi-person-remove ============*/
        $document.on('click', '.multi-person-remove', function () {
            $('.multi-person-remove').closest('.multi-person-wrap').find('.multi-person-field').not(':first').last().remove();
            personno = personno - 1;


            if(personno<10){
                if(personno == 2){
                    $('.multi-person-remove').closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-add-wrap').show();

                }else{
                    $('.multi-person-remove').closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-delete-wrap').show();
                    $('.multi-person-remove').closest('.multi-person-wrap').find('.multi-person-field:last').children('.multi-person-add-wrap').show();
                }
            }
        });



        /*==== When you will click the add another flight btn then this action will be work =====*/
        var flightno = 2;
        $document.on('click', '.add-flight-btn', function () {

            if ($('.multi-flight-field').length < 4) {

                // $('#depart').select2('destroy');
                // $('#depart1').select2('destroy');
                // $('#depart2').select2('destroy');
                // $('#depart3').select2('destroy');
                //
                // $('#arriv').select2('destroy');
                // $('#arriv1').select2('destroy');
                // $('#arriv2').select2('destroy');
                // $('#arriv3').select2('destroy');
                $('.select-clone').select2("destroy");

                var newaddress = $('.multi-flight-field:last').clone().find("select").val("").end().insertAfter('.multi-flight-field:last');

                newaddress.find('input').each(function () {
                    // console.log(this.name);
                    if (this.name.match('daterange_single')) {
                        $(this).attr('name', 'daterange_single' + flightno);
                        $(this).attr('id', 'daterange_single' + flightno);
                        // this.name = 'daterange_single' + flightno;
                        // this.id = 'date' + flightno;
                    }
                    $('#daterange_single'+flightno).daterangepicker({
                        "autoApply": true,
                        // "locale": {
                        //     "format": "DD/MM/YYYY",
                        // },
                        singleDatePicker: true,
                        minYear: 1901,
                        maxYear: parseInt(moment().format('YYYY'), 10)
                    }, function (start, end, label) {
                    });
                    console.log(this.name);
                });
                newaddress.find('select').each(function () {
                    // console.log(this.name);
                    if (this.name.match('depart')) {
                        // this.name= 'depart'+flightno;
                        // this.id= 'depart'+flightno;
                        $(this).attr('name', 'depart' + flightno);
                        $(this).attr('id', 'depart' + flightno);
                    } else if (this.name.match('arriv')) {
                        // this.name= 'arriv'+flightno;
                        // this.id= 'arriv'+flightno;
                        $(this).attr('name', 'arriv' + flightno);
                        $(this).attr('id', 'arriv' + flightno);
                    }
                    $('.select-clone').select2({
                        placeholder: 'City or airport name',
                        dropdownAutoWidth : true,
                        dropdownCssClass: "bigdrop",
                        templateResult: formatOutput,
                        templateSelection: formatOutputTwo
                    });
                    var optionsDepartMultiCity2 = $("#depart"+flightno);
                    optionsDepartMultiCity2.html('');
                    var optionsArrivMultiCity2 = $("#arriv"+flightno);
                    $.each(airportName, function () {
                        optionsDepartMultiCity2.append($("<option />").val(this.iata_code).text("<span style='font-size: .85rem; font-weight: 100'>"+this.airport_name +"</span> <span style='font-size: .85rem;'>"+this.country +"</span>, " + this.city + " <span style='float: right; margin-top: .4rem; margin-top: .4rem' class=\"badge badge-primary\">" + this.iata_code + "</span>"));
                        // options.append($("<option />").val(this.iata_code).text(this.city + " (" + this.iata_code + ") "));
                    });
                    $('#depart'+flightno).change(function () {

                        var value = $(this).val();
                        optionsArrivMultiCity2.html('');
                        // destinationOptions.append(new Option('Select Destination', '0'));
                        optionsArrivMultiCity2.append("<option disabled='disabled' SELECTED>,Select Destination</option>");

                        $.each(sampledata, function () {
                            var from = this.from_airport;
                            if (value == from) {
                                var to_airport = this.to_airport;
                                // console.log(to_airport);

                                $.each(airportName, function () {
                                    if (this.iata_code == to_airport) {
                                        optionsArrivMultiCity2.append($("<option />").val(this.iata_code).text("<span style='font-size: .85rem; font-weight: 100'>"+this.airport_name +"</span> <span style='font-size: .85rem;'>"+this.country +"</span>, " + this.city + " <span style='float: right; margin-top: .4rem; margin-top: .4rem' class=\"badge badge-primary\">" + this.iata_code + "</span>"));
                                    }

                                });
                            }

                            // options.append( $("<option />").val(this.id)
                            //     .text(this.fro + " " + this.iata_code + " (" + this.city + ") ")
                            // );
                        });

                    });

                });
                console.log(flightno)

                flightno = flightno + 1;
            }

            $(this).closest('.multi-flight-wrap').find('.multi-flight-field:last').children('.multi-flight-delete-wrap').show();

        });

        /*=========== multi-flight-remove ============*/
        $document.on('click', '.multi-flight-remove', function () {
            $('.multi-flight-remove').closest('.multi-flight-wrap').find('.multi-flight-field').not(':first').last().remove();
            flightno = flightno-1;
        });

        /*====  mobile dropdown menu  =====*/
        $document.on('click', '.toggle-menu > li .toggle-menu-icon', function (e) {
            e.preventDefault();
            $(this).closest('li').siblings().removeClass('active').find('.toggle-drop-menu, .dropdown-menu-item').slideUp(200);
            $(this).closest('li').toggleClass('active').find('.toggle-drop-menu, .dropdown-menu-item').slideToggle(200);
            return false;
        });

        /*====== Dropdown btn ======*/
        $('.dropdown-btn').on('click', function (e) {
            e.preventDefault();
            $(this).next('.dropdown-menu-wrap').slideToggle(300);
            e.stopPropagation();
        });

        /*====== When you click on the out side of dropdown menu item then its will be hide ======*/
        $document.on('click', function (event) {
            var $trigger = $('.dropdown-contain');
            if ($trigger !== event.target && !$trigger.has(event.target).length) {
                $('.dropdown-menu-wrap').slideUp(300);
            }
        });

        $('.progressbar-line').each(function () {
            $(this).find('.progressbar-line-item').animate({
                width: $(this).attr('data-percent')
            }, 6000);
        });

        if ($(fullWidthSlider).length) {
            $(fullWidthSlider).owlCarousel({
                center: true,
                items: 2,
                nav: true,
                dots: false,
                loop: true,
                margin: 10,
                smartSpeed: 500,
                navText: ['<i class="la la-long-arrow-left"></i>', '<i class="la la-long-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        autoplay: true
                    },
                    576: {
                        items: 2
                    }
                }
            });
        }

        /*======= Recommended tag =======*/
        $document.on('click', '.recommended-tag', function () {
            $(this).addClass('active');
            $('.undo-btn').addClass('active');
            $(this).siblings().removeClass('active');
        });

        /*======= Undo btn =======*/
        $document.on('click', '.undo-btn', function () {
            $(this).removeClass('active');
            $('.recommended-tag').removeClass('active');
        });

        /*======= paste-btn =======*/
        $document.on('click', '.paste-btn', function (e) {
            e.preventDefault();
            $('#resume_text').toggle();
        });

    });

})(jQuery);
