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






function rewriteDownloadUrls(domElements) {
	_.each(domElements, function(el) {
		el.href = "http://get-popcorn.com/download/" + el.getAttribute('data-file');
	})
}