var userAgent = navigator.platform;
var mac = /Mac/,
    win = /Win/,
    lin = /Lin/,
    lin64 = /x86_64/;

rewriteDownloadUrls(document.querySelectorAll('[data-file]'));

if(mac.test(userAgent)) {
	document.getElementsByTagName('body')[0].className+=' mac';
} else if (win.test(userAgent)) {
	document.getElementsByTagName('body')[0].className+=' win';
} else if (lin.test(userAgent)) {
  if(lin64.test(userAgent)) {
    document.getElementsByTagName('body')[0].className+=' lin-64';
  } else {
    document.getElementsByTagName('body')[0].className+=' lin-32';
  }
} else {
	document.getElementsByTagName('body')[0].className+=' nope';
}