/* Start Menu */
(function ($) {
    var index = 0;
    $.fn.menumaker = function (options) {
        var nikosamenu = jQuery(this),
            settings = jQuery.extend({
                title: "",
                breakpoint: 1024,
                format: "dropdown",
                sticky: false
            }, options);
        return this.each(function () {
            nikosamenu.prepend('<div id="menu-button" class="fa fa-bars" aria-hidden="true">' + settings.title + '</div>');
            jQuery(this).find("#menu-button").on('click', function () {
                jQuery(this).toggleClass('menu-opened');
                var mainmenu = jQuery(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                } else {
                    jQuery('ul.MobileMenu').slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            nikosamenu.find('li ul').parent().addClass('has-sub');
            nikosamenu.find('li ul').addClass('sub-menu');
            multiTg = function () {
                nikosamenu.find(".has-sub").prepend('<span class="submenu-button fa fa-plus"></span>');
                nikosamenu.find('.submenu-button').on('click', function () {
                    jQuery(this).toggleClass('submenu-opened');
                    if (jQuery(this).siblings('ul').hasClass('open')) {
                        jQuery(this).siblings('ul').slideToggle().removeClass('open');
                    } else {
                        jQuery(this).siblings('ul').slideToggle().addClass('open');
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else nikosamenu.addClass('dropdown');
            if (settings.sticky === true) nikosamenu.css('position', 'fixed');
            resizeFix = function () {
                if (jQuery(window).width() > 1024) {
                    nikosamenu.find('ul').show();

                }
                if (jQuery(window).width() <= 1024) {
                    nikosamenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return jQuery(window).on('resize', resizeFix);
        });
    };
})(jQuery);
(function ($) {
    jQuery(document).ready(function () {
        jQuery(document).ready(function () {
            jQuery("#nikosamenu").menumaker({
                title: "",
                format: "multitoggle"
            });
            var foundActive = false,
                activeElement, linePosition = 0,
                width = 0,
                menuLine = jQuery("#nikosamenu #menu-line"),
                lineWidth, defaultPosition, defaultWidth;
            jQuery("#nikosamenu > ul > li").each(function () {
                if (jQuery(this).hasClass('current-menu-item')) {
                    activeElement = jQuery(this);
                    foundActive = true;
                }
            });
            if (foundActive != true) {
                activeElement = jQuery("#nikosamenu > ul > li").first();
            }
            if (foundActive == true) {
                activeElement = jQuery("#nikosamenu > ul > li").first();
            }
            defaultWidth = lineWidth = activeElement.width();
            defaultPosition = linePosition = activeElement.position().left;
            menuLine.css("width", lineWidth);
            menuLine.css("left", linePosition);
            jQuery("#nikosamenu > ul > li").hover(function () {
                    activeElement = $(this);
                    lineWidth = activeElement.width();
                    linePosition = activeElement.position().left;
                    menuLine.css("width", lineWidth);
                    menuLine.css("left", linePosition);
                },
                function () {
                    menuLine.css("left", defaultPosition);
                    menuLine.css("width", defaultWidth);
                });
        });
        /** Set Position of Sub-Menu **/
        var wapoMainWindowWidth = jQuery(window).width();
        jQuery('#nikosamenu ul ul li').mouseenter(function () {
            var subMenuExist = jQuery(this).find('.sub-menu').length;
            if (subMenuExist > 0) {
                var subMenuWidth = jQuery(this).find('.sub-menu').width();
                var subMenuOffset = jQuery(this).find('.sub-menu').parent().offset().left + subMenuWidth;
                if ((subMenuWidth + subMenuOffset) > wapoMainWindowWidth) {
                    jQuery(this).find('.sub-menu').removeClass('submenu-left');
                    jQuery(this).find('.sub-menu').addClass('submenu-right');
                } else {
                    jQuery(this).find('.sub-menu').removeClass('submenu-right');
                    jQuery(this).find('.sub-menu').addClass('submenu-left');
                }
            }
        });
    });
})(jQuery);
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > 0) {
        jQuery('.ThenikosaNav').addClass('fixedHeader');
    } else {
        jQuery('.ThenikosaNav').removeClass('fixedHeader');
    }
});

/*Mobile Nav*/
function resize() {
    if (jQuery(window).width() <= 1024) {
        jQuery('#nikosamenu > ul').addClass('MobileMenu');
    } else {
        jQuery('#nikosamenu > ul').removeClass('MobileMenu');
    }
}
jQuery(document).ready(function () {
    jQuery(window).resize(resize);
    resize();
});

/*Hide Header on on scroll down*/
var didScroll;
var lastScrollTop = 0;
var delta = 10;
var navbarHeight = jQuery('.ThenikosaNav').outerHeight();

jQuery(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 100);

function hasScrolled() {
    var st = jQuery(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    lastScrollTop = st;
}
/*Menu end*/
jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
        var window_top = jQuery(window).scrollTop() + 110;
    });
    jQuery(document).ready(function () {
        /*BlogPage start*/
        if (jQuery('div').hasClass('ThenikosaWrapper')) {
            jQuery('body').addClass('nikosaPages');
        } else {
            jQuery('body').removeClass('nikosaPages');
        }
    });

    //jQuery(document).on("scroll", onScroll);
    jQuery('a[href^="#"]').on('click', function (e,$) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 600, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});
