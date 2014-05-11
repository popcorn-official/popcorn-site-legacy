/* === Popcorn Site === */
/* ---  Analytics   --- */
analytics.initialize({
    'Sentry' : 'XXXXXXXXXX',
    'Google Analytics' : {
        trackingId              : 'UA-xxxxxx-x',
        domain                  : 'get-popcorn.com',
        universalClient         : false
    }
});






function rewriteDownloadUrls(domElements) {
	_.each(domElements, function(el) {
		el.href = "http://get-popcorn.com/download/" + el.getAttribute('data-file');
	})
}