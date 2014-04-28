var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
try {
	var jqueryLoaded=jQuery;
	jqueryLoaded=true;
} catch(err) {
	var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];


var err_style = '';
try{
	err_style = mc_custom_error_style;
} catch(e){
	err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
	if (mce_preload_checks>40) return;
	mce_preload_checks++;
	try {
		var jqueryLoaded=jQuery;
	} catch(err) {
		setTimeout('mce_preload_check();', 250);
		return;
	}
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
	head.appendChild(script);
	try {
		var validatorLoaded=jQuery("#fake-form").validate({});
	} catch(err) {
		setTimeout('mce_preload_check();', 250);
		return;
	}
	mce_init_form();
}
function mce_init_form(){
	jQuery(document).ready( function($) {
	  var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
	  var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
	  $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
	  options = { url: 'http://get-popcorn.us8.list-manage.com/subscribe/post-json?u=afbd4b6f42dd2b6ddb4f34b9b&id=b1d0d0a4a1&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
					beforeSubmit: function(){
						$('#mce_tmp_error_msg').remove();
						$('.datefield','#mc_embed_signup').each(
							function(){
								var txt = 'filled';
								var fields = new Array();
								var i = 0;
								$(':text', this).each(
									function(){
										fields[i] = this;
										i++;
									});
								$(':hidden', this).each(
									function(){
										var bday = false;
										if (fields.length == 2){
											bday = true;
											fields[2] = {'value':1970};//trick birthdays into having years
										}
										if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
											this.value = '';
										} else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
											this.value = '';
										} else {
											if (/\[day\]/.test(fields[0].name)){
												this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
											} else {
												this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
											}
										}
									});
							});
						$('.phonefield-us','#mc_embed_signup').each(
							function(){
								var fields = new Array();
								var i = 0;
								$(':text', this).each(
									function(){
										fields[i] = this;
										i++;
									});
								$(':hidden', this).each(
									function(){
										if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
											this.value = '';
										} else {
											this.value = 'filled';
										}
									});
							});
						return mce_validator.form();
					}, 
					success: mce_success_cb
				};
	  $('#mc-embedded-subscribe-form').ajaxForm(options);
	  
	  
	});
}
function mce_success_cb(resp){
	$('#mce-success-response').hide();
	$('#mce-error-response').hide();
	if (resp.result=="success"){
		$('#mce-'+resp.result+'-response').show();
		$('#mce-'+resp.result+'-response').html(resp.msg);
		$('#mc-embedded-subscribe-form').each(function(){
			this.reset();
		});
	} else {
		var index = -1;
		var msg;
		try {
			var parts = resp.msg.split(' - ',2);
			if (parts[1]==undefined){
				msg = resp.msg;
			} else {
				i = parseInt(parts[0]);
				if (i.toString() == parts[0]){
					index = parts[0];
					msg = parts[1];
				} else {
					index = -1;
					msg = resp.msg;
				}
			}
		} catch(e){
			index = -1;
			msg = resp.msg;
		}
		try{
			if (index== -1){
				$('#mce-'+resp.result+'-response').show();
				$('#mce-'+resp.result+'-response').html(msg);            
			} else {
				err_id = 'mce_tmp_error_msg';
				html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
				
				var input_id = '#mc_embed_signup';
				var f = $(input_id);
				if (ftypes[index]=='address'){
					input_id = '#mce-'+fnames[index]+'-addr1';
					f = $(input_id).parent().parent().get(0);
				} else if (ftypes[index]=='date'){
					input_id = '#mce-'+fnames[index]+'-month';
					f = $(input_id).parent().parent().get(0);
				} else {
					input_id = '#mce-'+fnames[index];
					f = $().parent(input_id).get(0);
				}
				if (f){
					$(f).append(html);
					$(input_id).focus();
				} else {
					$('#mce-'+resp.result+'-response').show();
					$('#mce-'+resp.result+'-response').html(msg);
				}
			}
		} catch(e){
			$('#mce-'+resp.result+'-response').show();
			$('#mce-'+resp.result+'-response').html(msg);
		}
	}
}