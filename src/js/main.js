/* === Popcorn Site === */
/* ---  Analytics   --- */
analytics.initialize({
    //'Sentry' : 'XXXXXXXXXX',
    'Google Analytics' : {
        trackingId              : 'UA-38440155-3',
        domain                  : 'popcorntime.io',
        universalClient         : true
    }
});

analytics.pageview()
getCurrentStatus()

function getCurrentStatus() {
	var statusUrl = 'https://popcorntime.statuspage.io/api/v1/status.json';
	$.get(statusUrl, function(resp) {
		$('#status').addClass(resp.status.indicator);
	}, 'json');
}

function rewriteDownloadUrls(domElements) {
	_.each(domElements, function(el) {
		el.href = "https://cdn.popcorntime.io/build/" + el.getAttribute('data-file');
		analytics.trackLink(el, 'Download', {
			category: 'Click',
			label: $(el).data('os'),
			value: '0.3.4'
		})
	})
}