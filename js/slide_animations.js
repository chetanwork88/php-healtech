// -------Slide slideAnimations on scroll


// ------------------up-------------------------

$(window).scroll(function () {
    $('.slideAnimUp').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("slideUp");
        }
    });
});

$(window).scroll(function () {
    $('.slideAnimExpandUp').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("slideExpandUp");
        }
    });
});


// --------------------down---------------------

$(window).scroll(function () {
    $('.slideAnimDown').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("slideDown");
        }
    });
});

// ----------------------left--------------------------

$(window).scroll(function () {
    $('.slideAnimLeft').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("slideLeft");
        }
    });
});

$(window).scroll(function () {
    $('.slideAnimStrechLeft').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("stretchLeft");
        }
    });
});

// -------------------------right-----------------------

$(window).scroll(function () {
    $('.slideAnimRight').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("slideRight");
        }
    });
});

$(window).scroll(function () {
    $('.slideAnimStrechRight').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("stretchRight");
        }
    });
});

// -----------------hatch---------------------

$(window).scroll(function () {
    $('.slideAnimHatch').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("hatch");
        }
    });
});

// ------------------fade in----------------------

$(window).scroll(function () {
    $('.slideAnimFadeIn').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("fadeIn");
        }
    });
});

// --------------------expand------------------

$(window).scroll(function () {
    $('.slideAnimExpandOpen').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("expandOpen");
        }
    });
});

// ---------------bigEntrance----------------

$(window).scroll(function () {
    $('.slideAnimBigEntrance').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("bigEntrance");
        }
    });
});

// ---------------bounce----------------

$(window).scroll(function () {
    $('.slideAnimBounce').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("bounce");
        }
    });
});

// ---------------pulse----------------

$(window).scroll(function () {
    $('.slideAnimPulse').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("pulse");
        }
    });
});

// ---------------pull----------------

$(window).scroll(function () {
    $('.slideAnimPullUp').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("pullUp");
        }
    });
});

$(window).scroll(function () {
    $('.slideAnimPullDown').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("pullDown");
        }
    });
});

// ---------------floating----------------

$(window).scroll(function () {
    $('.slideAnimFloating').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("floating");
        }
    });
});

// ---------------tossing----------------

$(window).scroll(function () {
    $('.slideAnimTossing').each(function () {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("tossing");
        }
    });
});

