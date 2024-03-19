/**
 * Javascript sample.
 *
 * You can use this Javascript as start for your project.
 *
 */

(function ($) {

  "use strict";

  function openAlert() {
    alert("Hi there, the jQuery version is " + $().jquery);

    // Ajax
    $('#ajax-trusted').on('click', function () {

      // Action executed by both logged and not logged users.
      $.post(
        ajaxurl,
        { action: 'trusted' },
        function (data) {
          alert(data);
        });
    });

    // Action executed only by logged in users.
    $('#ajax-logged').on('click', function () {

      // logged
      $.post(
        ajaxurl,
        { action: 'logged' },
        function (data) {
          alert(data);
        });

    });

    // Action executed only by not logged in user, usually from frontend.
    $('#ajax-notLogged').on('click', function () {

      // notLogged
      $.post(
        ajaxurl,
        { action: 'notLogged' },
        function (data) {
          alert(data);
        });

    });
  }

  openAlert();

})(jQuery);