var userAgent = navigator.platform;
var mac = /Mac/,
  win = /Win/,
  lin = /Lin/,
  lin64 = /x86_64/;

rewriteDownloadUrls(document.querySelectorAll('[data-file]'));

if (mac.test(userAgent)) {
  document.getElementsByTagName('body')[0].className += ' mac';
} else if (win.test(userAgent)) {
  document.getElementsByTagName('body')[0].className += ' win';
} else if (lin.test(userAgent)) {
  if (lin64.test(userAgent)) {
    document.getElementsByTagName('body')[0].className += ' lin-64';
  } else {
    document.getElementsByTagName('body')[0].className += ' lin-32';
  }
} else {
  document.getElementsByTagName('body')[0].className += ' nope';
}

$(function() {
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
});