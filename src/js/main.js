/* === Popcorn Site === */
/* ---  Analytics   --- */
analytics.initialize({
    //'Sentry' : 'XXXXXXXXXX',
    'Google Analytics' : {
        trackingId              : 'UA-38440155-3',
        domain                  : 'get-popcorn.com',
        universalClient         : false
    }
});

analytics.pageview()
getCurrentStatus()

function getCurrentStatus() {
	var statusUrl = 'http://status.get-popcorn.com/index.json';
	$.get(statusUrl, function(resp) {
		$('#status').addClass(resp.status.indicator);
	}, 'json');
}

function rewriteDownloadUrls(domElements) {
	_.each(domElements, function(el) {
		el.href = "http://get-popcorn.com/download/" + el.getAttribute('data-file');
	})
}