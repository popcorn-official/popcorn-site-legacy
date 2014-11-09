var popcorn = {
    initialize: function() {
        analytics.initialize({
            'Google Analytics' : {
                trackingId              : 'UA-38440155-3',
                domain                  : 'popcorntime.io',
                universalClient         :  true
            }
        });
        analytics.pageview();
    },
    detectUA: function(ua) {
        if (/Mac/.test(ua)) {
            return 'mac';
        } else if (/Win/.test(ua)) {
            return 'win';
        } else if (/Lin/.test(ua)) {
            if (/x86_64/.test(ua)) {
                return 'lin-64';
            } else {
                return 'lin-32';
            }
        } else {
            return;
        }
    },
    updateDownloads: function(ua) {
        document.body.className += ' ' + (this.detectUA(ua) || 'nope');
    },
    updateStatus: function(el, url) {
        $.get(url, function(resp) {
            $(el).addClass(resp.status.indicator);
        }, 'json');
    },
    smoothScroll: function() {
        $('a[data-scroll][href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 800);
                    return false;
                }
            }
        });
    }
};

popcorn.initialize();
popcorn.updateDownloads(navigator.platform);
popcorn.updateStatus('#status', 'https://popcorntime.statuspage.io/api/v1/status.json');
popcorn.smoothScroll();