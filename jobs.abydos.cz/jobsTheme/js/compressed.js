jQuery(document).ready(function(e){if(e("body").width()>736){var o=e("div.field.field-name-field-volna-mista-menu").offset().top;e(window).scroll(function(){var i=e(window).scrollTop();i>=o?e("div.field.field-name-field-volna-mista-menu").css({position:"fixed",top:"2px","z-index":"450",right:"90px","margin-top":"0px"}):i<o&&e("div.field.field-name-field-volna-mista-menu").css({position:"",top:""})})}e(".vzv_vozik").offset();var i=0;e(window).scroll(function(o){var s=e(this).scrollTop();s>=500?(s>i?(e(".vzv_vozik").addClass("move"),e(".vzv_vozik").removeClass("rotated")):e(".vzv_vozik").addClass("rotated"),i=s):e(".vzv_vozik").removeClass("move"),s>=1700?e(".vzv_vozik").css({display:"none"}):e(".vzv_vozik").css({display:""})}),e(".mMenu > ul > li > a").filter(function(){return this.href==location.href.replace(/#.*/,"")}).addClass("active")}),function(e,o,i){var s,n=e.getElementsByTagName(o)[0];e.getElementById(i)||((s=e.createElement(o)).id=i,s.src="//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.9",n.parentNode.insertBefore(s,n))}(document,"script","facebook-jssdk");