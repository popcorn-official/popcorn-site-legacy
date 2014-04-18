(function ($) {
	/**
	 * jquery.timer.js
	 *
	 * Copyright (c) 2011 Jason Chavannes <jason.chavannes@gmail.com>
	 *
	 * http://jchavannes.com/jquery-timer
	 *
	 * Permission is hereby granted, free of charge, to any person
	 * obtaining a copy of this software and associated documentation
	 * files (the "Software"), to deal in the Software without
	 * restriction, including without limitation the rights to use, copy,
	 * modify, merge, publish, distribute, sublicense, and/or sell copies
	 * of the Software, and to permit persons to whom the Software is
	 * furnished to do so, subject to the following conditions:
	 *
	 * The above copyright notice and this permission notice shall be
	 * included in all copies or substantial portions of the Software.
	 *
	 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
	 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
	 * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
	 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
	 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	 * SOFTWARE.
	 */
	$.timer=function(func,time,autostart){this.set=function(func,time,autostart){this.init=true;if(typeof func=="object"){var paramList=["autostart","time"];for(var arg in paramList){if(func[paramList[arg]]!=undefined){eval(paramList[arg]+" = func[paramList[arg]]")}}func=func.action}if(typeof func=="function"){this.action=func}if(!isNaN(time)){this.intervalTime=time}if(autostart&&!this.active){this.active=true;this.setTimer()}return this};this.once=function(time){var timer=this;if(isNaN(time)){time=0}window.setTimeout(function(){timer.action()},time);return this};this.play=function(reset){if(!this.active){if(reset){this.setTimer()}else{this.setTimer(this.remaining)}this.active=true}return this};this.pause=function(){if(this.active){this.active=false;this.remaining-=new Date()-this.last;this.clearTimer()}return this};this.stop=function(){this.active=false;this.remaining=this.intervalTime;this.clearTimer();return this};this.toggle=function(reset){if(this.active){this.pause()}else{if(reset){this.play(true)}else{this.play()}}return this};this.reset=function(){this.active=false;this.play(true);return this};this.clearTimer=function(){window.clearTimeout(this.timeoutObject)};this.setTimer=function(time){var timer=this;if(typeof this.action!="function"){return}if(isNaN(time)){time=this.intervalTime}this.remaining=time;this.last=new Date();this.clearTimer();this.timeoutObject=window.setTimeout(function(){timer.go()},time)};this.go=function(){if(this.active){this.action();this.setTimer()}};if(this.init){return new $.timer(func,time,autostart)}else{this.set(func,time,autostart);return this}};

	/* ---------------------------------------------------------------------- */
	/* "Polyglot" Language Switcher
	 /* ----------------------------------------------------------------------
	 Version: 2.2
	 Author: Ixtendo
	 Author URI: http://www.ixtendo.com
	 License: MIT License
	 License URI: http://www.opensource.org/licenses/mit-license.php
	 ------------------------------------------------------------------------- */
	$.fn.polyglotLanguageSwitcher=function(h){var g=$.fn.polyglotLanguageSwitcher;var e=$(this);var n=$(this).attr("id");var p;var x=$('<ul class="dropdown">');var d=0;var m=false;var r=[];var w=$.extend({},g.defaults,h);var v;var a=w.websiteType=="static";u();q();function b(y){if(w[y.name]){w[y.name].call($(this),y)}}function k(){if(!m){b({name:"beforeOpen",element:e,instance:g});p.addClass("active");o(true);setTimeout(function(){m=true;b({name:"afterOpen",element:e,instance:g})},100)}}function l(){if(m){b({name:"beforeClose",element:e,instance:g});o(false);p.removeClass("active");m=false;if(v&&v.active){v.clearTimer()}b({name:"afterClose",element:e,instance:g})}}function c(){if(v&&v.active){v.pause()}}function f(){if(v){v.play(false)}}function o(y){if(w.effect=="fade"){if(y){x.fadeIn(w.animSpeed)}else{x.fadeOut(w.animSpeed)}}else{if(y){x.slideDown(w.animSpeed)}else{x.slideUp(w.animSpeed)}}}function j(C){l();var y=$(C).children(":first-child");var z=$(y).attr("id");var D=$(y).text();$(x).children().each(function(){$(this).detach()});for(var A=0;A<r.length;A++){if($(r[A]).children(":first-child").attr("id")!=z){x.append(r[A])}}var B=p.children(":first-child");p.attr("id",z);p.text(D);p.append(B)}function q(){$(document).click(function(){l()});$(document).keyup(function(y){if(y.which==27){l()}});if(w.openMode=="hover"){v=$.timer(function(){l()});v.set({time:w.hoverTimeout,autostart:true})}}function u(){var B;var A=$("#"+n+" > form > select > option");if(a){var y;var z=window.location.href;A.each(function(){var C=$(this).attr("id");if(z.indexOf("/"+C+"/")>=0){y=C}})}A.each(function(){var E=$(this).attr("id");var C;if(a){C=y===E}else{C=$(this).attr("selected")}var D=t($(this));if(C){B=D}r.push(D);if(d>0){x.append(D)}else{p=$('<a id="'+$(this).attr("id")+'" class="current" href="#">'+$(this).text()+' <span class="trigger">&raquo;</span></a>');if(w.openMode=="hover"){p.hover(function(){k();c()},function(){f()})}else{p.click(function(){k()})}}d++});$("#"+n+" form:first-child").remove();e.append(p);e.append(x);if(B){j(B)}}function t(C){var A=$(C).attr("id");var E=$(C).attr("value");var F=$(C).text();var G;if(a){var z=window.location.href;var D=z.substring(z.lastIndexOf("/")+1);var H="http://"+document.domain+"/"+w.pagePrefix+A+"/"+D;G=$('<li><a id="'+A+'" href="'+H+'">'+F+"</a></li>")}else{var y=document.URL.replace("#","");var B=s();B[w.paramName]=E;if(y.indexOf("?")>0){y=y.substring(0,y.indexOf("?"))}y+=i(B);G=$('<li><a id="'+A+'" href="'+y+'">'+F+"</a></li>")}G.bind("click",function(){b({name:"onChange",selectedItem:$(this).children(":first").attr("id"),element:e,instance:g});j($(this))});if(w.openMode=="hover"){G.hover(function(){c()},function(){f()})}return G}function s(){var B={};var z=window.location.search.substr(1).split("&");if(z.length>0){for(var y=0;y<z.length;++y){var A=z[y].split("=");if(A.length!=2){continue}B[A[0]]=decodeURIComponent(A[1].replace(/\+/g," "))}}return B}function i(B){if(w.testMode){return"#"}else{var C="?";var z=0;for(var A in B){var y="";if(z>0){y="&"}C+=y+A+"="+B[A];z++}return C}}g.open=function(){k()};g.close=function(){l()};b({name:"afterLoad",element:e,instance:g});return g};

    var ls = $.fn.polyglotLanguageSwitcher;
    ls.defaults = {
        openMode:'click',
        hoverTimeout:1500,
        animSpeed:200,
        effect:'slide',
        paramName:'lang',
        pagePrefix:'',
        websiteType:'dynamic',
        testMode:false,
        onChange:NaN,
        afterLoad:NaN,
        beforeOpen:NaN,
        afterOpen:NaN,
        beforeClose:NaN,
        afterClose:NaN
    };
})(jQuery);