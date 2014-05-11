

function writeCookie(){
	alert("writing cookie");
	document.cookie ="hasAccessedBefore=Yes";
}

$('#cookieAgreed').click(function(){ 
	document.cookie ="hasAccessedBefore=Yes";
	alert("clicked");
	}
);



