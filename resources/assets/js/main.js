jQuery( document ).ready(function ($) {
    $(".js-sidebar-open").on('click', function () {
        $(this).toggleClass('active');
        $(this).closest($('.fixed-sidebar')).toggleClass('open');
        return false;
    } );

    var $popup = $('.window-popup');
    var $window = $(window),
        $document = $(document),
        $body = $('body');

    $(".js-open-popup").on('click', function (event) {
        var target_popup = $(this).data('popup-target');
        var current_popup = $popup.filter(target_popup);
        var offset = $(this).offset();
        current_popup.addClass('open');
        current_popup.css('top', (offset.top - (current_popup.innerHeight() / 2)));
        $body.addClass('overlay-enable');
        return false;
    });

    // Close on "Esc" click
    $window.keydown(function (eventObject) {
        if (eventObject.which == 27) {
            $popup.removeClass('open');
            $body.removeClass('overlay-enable');
            $('.profile-menu').removeClass('expanded-menu');
            $('.popup-chat-responsive').removeClass('open');
        }
    });

    // Close on click outside elements.
    $document.on('click', function (event) {
        if (!$(event.target).closest($popup).length) {
            $popup.removeClass('open');
            $body.removeClass('overlay-enable');
            $('.profile-menu').removeClass('expanded-menu');
            $('.popup-chat-responsive').removeClass('open');
        }
    });

    // Close on "X" click
    $(".js-close-popup").on('click', function () {
        $(this).closest($popup).removeClass('open');
        $body.removeClass('overlay-enable');
        return false
    });


    $(".js-open-choose-from-my-photo").on('click', function () {
        $('.choose-from-my-photo').addClass('open');
        $('.update-header-photo').removeClass('open');
    });

    $('.upload-photo-item').click(function () {
        $(this).find('#avatar').click();

        return false;
    })

});