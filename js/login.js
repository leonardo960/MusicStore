$(document).ready(function(){
	if( getUrlParameter("error") == "usertaken" ){
		$('.login-form').animate({height: "toggle", opacity: "toggle"}, "slow");
		$('.register-form').animate({height: "toggle", opacity: "toggle"}, "slow");
	}
});

$('.message a').click(function(){
   $('.login-form').animate({height: "toggle", opacity: "toggle"}, "slow");
   $('.register-form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};