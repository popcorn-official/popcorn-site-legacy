var heroHeight = document.getElementById('header').offsetHeight;

// Disable WOW on small screens.
try {
  if(window.innerWidth > 768) {
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  };
} catch(err) {  }

$(document).ready(function() {
	// Display correct download link
	var userAgent = navigator.platform;
	var mac = /Mac/,
		win = /Win/,
		lin = /Lin/,
		lin64 = /x86_64/;

	if(mac.test(userAgent)) {
		$('body').addClass('mac');
	} else if (win.test(userAgent)) {
		$('body').addClass('win');
	} else if (lin.test(userAgent)) {
		if(lin64.test(userAgent)) {
			$('body').addClass('lin-64');
		} else {
			$('body').addClass('lin-32');
		}
	} else {
		$('body').addClass('nope');
	}


	// Language switcher
	$('#langswitch').polyglotLanguageSwitcher({
		effect: 'slide',
		paramName: 'lang'
	});
	
	// Target blank for external links
	$('a').each(function() {
		var a = new RegExp('/' + window.location.host + '/');
		if (!a.test(this.href)) {
			$(this).attr("target", "_blank");
		}
	});
	
	// Popup on download page
	$("#modal-overlay").show();
	$("#modal-popup").show();
	$('.close, #modal-overlay').click(function(e) {
		e.preventDefault();
		$('#modal-overlay, #modal-popup').fadeOut(400);
	});
});