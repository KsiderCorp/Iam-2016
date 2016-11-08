var usernamlist = [
"semenov",
"iam", 
"mkmk", 
"wtf", 
"laboratory", 
"info",
"mari",
"conference",
"volkov-bogorodskij",
"vlasov_a"];

var currentUsernames = usernamlist;

currentUsernames = currentUsernames.map(function(elem) {
  return elem.toLowerCase().trim();
});

var keyupDelay = 10;
$(document).ready(function() {
	$('#getmailinput').keyup(function() {
		delay(applyFilter, keyupDelay);
	});
});
var delay = (function() {
	var timer = 0;
	return function(callback, ms) {
		clearTimeout(timer);
		timer = setTimeout(callback, ms);
	};
})();

function applyFilter() {
	if ($('#getmailinput').val()){

if ($.inArray( $('#getmailinput').val().toLowerCase(), currentUsernames) > -1){
	$("#getmailinput").addClass('act'); 
	$(".disable").removeClass('hide'); 
}  else {
	$("#getmailinput").removeClass('act');
	$(".disable").addClass('hide'); 
	};
   };
};