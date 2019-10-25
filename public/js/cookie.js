/////////////////////////////////////////////////
// Standard Cookie Functions
// Create
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}
// Read
function readCookie(name) {
    var nameEQ = escape(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return unescape(c.substring(nameEQ.length, c.length));
    }
    return null;
}
// Erase
function eraseCookie(name) {
    createCookie(name, "", -1);
}
//
/////////////////////////////////////////////////
// Check to see if the cookie has been set, if not switch on the consent bar
if( readCookie('cookieConsent') != 'true' ){
  $("#cookie-consent").addClass("show");
}
// On click set the cookie and remove class to hide consent bar
$("#cookie-consent a").click(function(e){
  e.preventDefault();
  createCookie('cookieConsent','true',1000);
  $("#cookie-consent").removeClass("show");
});
//
/////////////////////////////////////////////////
