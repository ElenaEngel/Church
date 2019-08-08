var App = {};

App.menu = {
    bindEvent: function() {
        this.toggleMenu();
        this.toggleSubmenu();
    },
    toggleMenu: function() {
        var mobileButton = $('.js-toggle-dropdown');
        var mobileDropdown = $('.js-mobile-dropdown');

        $(mobileButton).bind('click', function() {
            $(mobileDropdown).fadeToggle('fast');
        })
    },
    toggleSubmenu: function() {
        var button = $('.js-mobile-submenu-button');
        var content = $('.js-mobile-submenu');

        $(button).bind('click', function() {
            if ($(this).next(content).hasClass('active')) {
                $(this).toggleClass('active');
                $(this).next(content).toggleClass('active');
                $(this).next(content).fadeToggle('fast');
            } else {
                $(button).removeClass('active');
                $(content).fadeOut('fast');
                $(content).removeClass('active');
                $(this).toggleClass('active');
                $(this).next(content).toggleClass('active');
                $(this).next(content).fadeToggle('fast');
            }
        })
    }
};

App.bgImageMainPage = {
    bindEvent: function() {
        this.changeBg();

    },
    changeBg: function() {
        var images = ["service.jpg", "SLC_consecration0.JPG", "o.jpg", "wedding.jpg", "imag12.jpg", "communion.jpg", "church2.jpg"];
        $(function () {
            var i = 0;
            $(".header1__bg").attr("src", images[i]);
            setInterval(function () {
                i++;
                if (i === images.length) {
                    i = 0;
                }
                $(".header1__bg").fadeOut("slow", function () {
                    $(this).attr("src", images[i]);
                    $(this).fadeIn("slow");
                });
            }, 5000);
        });
    }
};

App.toTop = {
    bindEvent: function() {
        this.animateButton();
    },
    animateButton: function() {
        var offset = 220;
        var duration = 500;
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('.back-to-top').fadeIn(duration);
            } else {
                $('.back-to-top').fadeOut(duration);
            }
        });

        $('.back-to-top').click(function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    }
};

App.sendEmail = {
    bindEvent: function() {
        this.send();
    },
    send: function() {
        var buttonFormSend = $('#contact-submit');
        var formFail = $('.js-form-fail');
        $(buttonFormSend).on('click', function() {
            var beforeHeader = $('.js-beforeHeaderContactForm'),
                afterHeader = $('.js-afterHeaderContactForm'),
                name = $("#name"),
                email = $("#email"),
                number = $('#number'),
                message = $("#message"),
                page = $('#page');
            var data = {
                name: $(name).val(),
                email: $(email).val(),
                number: $(number).val(),
                message: $(message).val()
            };

            if (data.name && data.email && data.number && data.message) {
                $(formFail).hide();
                $.ajax({
                    type: "POST",
                    url: $(page).val(),
                    data: data,
                    success: function(){
                        $(beforeHeader).hide();
                        $(name).val('');
                        $(email).val('');
                        $(number).val('');
                        $(message).val('');
                        $(afterHeader).fadeIn(900);

                    }
                });
                return false;
            } else {
                $(formFail).show();
                return false;
            }
        });
    }
};

$(document).ready(function() {
    Object.keys(App).forEach(function (key) {
        if (typeof App[key].bindEvent !== 'undefined') {
            App[key].bindEvent();
        }
    });
});

