if (Boolean(readCookie('hide'))) {
                $('.closing').hide();
                $('.closing').fadeOut(1000);
            }           
            $('.close-button-alert').click(function (e) {

                $('.closing').fadeOut(700);
                e.stopPropagation();

                createCookie('hide', true, 1)
                return false;
            });
            function createCookie(name, value, days) {
                if (days == 60) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    var expires = "; expires=" + date.toGMTString();
                }
                else var expires2 = "";
                document.cookie = name + "=" + value + "; expires=" + expires + "; path=/";

              //  $.cookie(name, value, { expires: days });
            }
            function readCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            function eraseCookie(name) {
                createCookie(name, "", -1);
            }
$(document).scroll(function() {
    if ($(this).scrollTop()>200)
     {
        $('.popout-banner').fadeIn();
     }
    else
     {
      $('.popout-banner').fadeOut();
     }
 });