new Swiper('.swiper-main', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    mousewheel: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    hashNavigation: {
        watchState: true
    }
});

new Swiper('.swiper-container', {
    loop: true,
    direction: 'vertical',
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
});

window.onload = function () {
    $("#loading-scrin").removeClass("activ");
};

jQuery(function ($) {
    $('.phone-mask').mask('+7 (999) 999-99-99');

    $('#invait, #to-be')
        .on('show.bs.modal', function (e) {
            $(this).find('form')[0].reset();
            $(this).removeClass('loading');
        })
        .on('submit', 'form', function (e) {
            var $this = $(this), $modal = $this.parents('.modal').addClass('loading');
            $.ajax({
                url: '/', type: 'POST', dataType: 'json', data: $this.serialize(), success: function (data) {
                    var $alert = $('#alert-message').toggleClass('alert-danger', data.error).toggleClass('alert-success', !data.error).html(data.message).fadeIn(100);
                    setTimeout(function () {
                        $alert.fadeOut(500);
                    }, 5000);
                    $this[0].reset();
                    $modal.modal('hide');
                }
            });
            e.preventDefault();
        });

    $('.portfolio-link').on('click', function (e) {
        var $modal = $('#portfolio-modal').modal('show');

        $modal
            .find('.modal-content')
            .addClass('loading')
            .find('.modal-body')
            .html('');

        $.get($(this).attr('href'), function (data) {
            $modal
                .find('.modal-content')
                //.removeClass('loading')
                .find('.modal-body')
                .html(data)
                .prepend('<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>');

            $(".switcher-on, .switcher-off").click(function () {
                $(".switcher-on, .switcher-off, .comment, .port-comment, .swiper-portfolio, .port-text").toggleClass("hide-comment");
            });

            var portfolioSlider = new Swiper('#portfolio-modal .swiper-portfolio', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                loop: true,
                mousewheel: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                }
            });

            var $imgs = $modal.find('.swiper-slide img'),
                i = 0;
            $imgs.each(function () {
                this.onload = function() {
                    i++;
                    if (i === $imgs.length) {
                        new Swiper('#portfolio-modal .swiper-portfolio', {
                            slidesPerView: 'auto',
                            spaceBetween: 20,
                            loop: true,
                            mousewheel: true,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev'
                            }
                        });

                        $modal.find('.modal-content').removeClass('loading');
                    }
                };
            });
        });
        e.preventDefault();
    });

    $(".navbar-collapse-toggle, .swiper-pagination-bullet, #logo-menu, .navbar-collapse-dropdown").click(function () {
        $(".menu-button").toggleClass("cross");
    });
    
    $(window).click(function(){
        $(".menu-button").removeClass("cross");
    });

    $('.checkbox-change').change(function () {
        $('.submit-mod').removeClass('submit-enable submit-able').addClass(
            $(this).prop('checked') ? 'submit-able' : 'submit-enable');
    });

    $(".event-cont").click(function () {
        $(".event-cont").toggleClass("activ-cont");
        $(".btl-cont").removeClass("activ-cont");
    });

    $(".btl-cont").click(function () {
        $(".btl-cont").toggleClass("activ-cont");
        $(".event-cont").removeClass("activ-cont");
    });
});