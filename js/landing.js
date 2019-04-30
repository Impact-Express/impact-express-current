(function($) {

    // Fix menu scroll issue
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
    
    // Service panel colour transition
    if ($(window).width() >= 1200) {
        $(".service-panel").mouseenter(function() {
            $(this).children('.overlay').css({"background-color":"#edbd00","opacity": 0.9});
            $(this).find('.btn').css("opacity",1);
            $(this).find('.service-icon').css("opacity",0);
        });
        $(".service-panel").mouseleave(function() {
            $(this).children('.overlay').css({"background-color":"#2d3332","opacity":0.8});
            $(this).find('.btn').css("opacity",0);
            $(this).find('.service-icon').css("opacity",1);
        });
    }
    
    // function isLoggedIn() {
    //     var isIE = /*@cc_on!@*/false || !!document.documentMode;
    //     if (isIE) {
    
    //         var decodedCookie = decodeURIComponent(document.cookie);
    //         var ca = decodedCookie.split(';');
    //         var loggedIn = false;
    //         for (var i = 0; i < ca.length; i++) {
    //             if (ca[i].indexOf('sessionid=') !== -1) {
    //                 loggedIn = true;
    //             }
    //         }
    //         var loc = location.pathname;
    //         if (!(loc === '/booking/') && !(loc === '/portal/')) {
    //             if (!loggedIn) {
    //                 document.getElementById('login-btn').innerHTML = '<a href="https://impactexpress.co.uk/portal/?method=login">Login</a>';
    //             } else if (loggedIn) {
    //                 document.getElementById('login-btn').innerHTML = '<a href="https://impactexpress.co.uk/portal/">Portal</a>';
    //             }
    //         }
    //     }
    // }
    
    function scrollTo(selector) {
        $('body').animate({
            scrollTop: $(selector).offset().top - 120
        }, '500');
    }
    
    (function () {
        "use strict";
        $(function () {
            
            function fullHeightBanner() {
                // var bannerSize = $('#main-navigation').outerHeight() - 1;
                // $('#home-banner-carousel').find('.carousel-inner').find('.item').height($(window).height() - bannerSize);
                // $('#home-banner-carousel').find('.carousel-inner').find('.item').height($(window).height()*2/3);
            }
            var cookieBar = new CookieBar();
            cookieBar.init();
            //isLoggedIn();
        });
    }());
    
    function CookieBar() {
        this.cookieName = 'showInfo';
        this.cookieText = 'By continuing to use the site, you agree to the use of cookies. <a href="/impact-express_terms-and-conditions.pdf" style="color: #fff;" target="_blank" >More information</a>';
        this.init = function () {
            if (this.getCookie(this.cookieName) == 1) {
            }
            else {
                this.createHtmlElement();
            }
        };
        this.createHtmlElement = function () {
            var self = this;
            var div = $('<div>' + this.cookieText + '</div>');
            var button = $('<button>Accept</button>');
            div.append(button);
            button.css({
                background: '#e3e3e3',
                border: '1px solid #bbb',
                borderRadius: '5px',
                boxShadow: 'inset 0 0 1px 1px #f6f6f6',
                color: '#333',
                font: 'bold 12px "helvetica neue", helvetica, arial, sans-serif',
                lineHeight: '1',
                padding: '5px 0',
                textAlign: 'center',
                textShadow: '0 1px 0 #fff',
                width: '100px',
                marginLeft: '20px'
            });
            div.css({
                color: '#FFFFFF',
                backgroundColor: 'rgba(0,0,0,0.85)',
                position: 'fixed',
                padding: '8px 21px',
                margin: '0',
                borderRadius: '5px',
                zIndex: '10000',
                textAlign: 'center',
                bottom: '30px',
                right: '30px',
                marginLeft: '5%'
            });
            button.click(function () {
                self.setCookie(self.cookieName, 1);
                div.remove();
            });
            $('body').append(div);
        };
        this.getCookie = function (cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
            }
            return null;
        };
        this.setCookie = function (name, value) {
            d = new Date();
            d.setTime(d.getTime() + 31540000);
            nmString = d.toUTCString();
            document.cookie = name + "=" + value + "; expires=" + nmString;
        }

        

    }
    })(jQuery);