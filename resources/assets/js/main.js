/**
 * Javascript sample.
 *
 * You can use this Javascript as start for your project.
 *
 */

(function( $ )
{

  "use strict";

  function openAlert()
  {
    alert( "Hi there, the jQuery version is " + $().jquery );

    // Ajax
    $( '#ajax-trusted' ).on( 'click', function()
    {

      // notLoggedIn
      $.post(
        ajaxurl,
        { action : 'trusted' },
        function( data )
        {
          alert( data );
        } );
    } );

    // Ajax
    $( '#ajax-logged' ).on( 'click', function()
    {

      // loggedin
      $.post(
        ajaxurl,
        { action : 'logged' },
        function( data )
        {
          alert( data );
        } );

    } );

    // Ajax
    $( '#ajax-notLogged' ).on( 'click', function()
    {

      // loggedin
      $.post(
        ajaxurl,
        { action : 'notLogged' },
        function( data )
        {
          alert( data );
        } );

    } );
  }

  openAlert();

})( jQuery );