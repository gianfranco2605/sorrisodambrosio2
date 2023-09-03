//*global jQuery */
( function ( $ ) {
    //hover dropdown menu
    $( function () {
        $( '.dropdown' ).hover(
            function () {
                $( this )
                    .find( '.dropdown-menu' )
                    .stop( true, true )
                    .delay( 200 )
                    .slideDown( 'slow' )
            },
            function () {
                $( this )
                    .find( '.dropdown-menu' )
                    .stop( true, true )
                    .delay( 200 )
                    .slideUp( 'slow' );
            }
        );

        //the code below makes the parent menu link clickable
        $( '.dropdown-toggle' ).click( function () {
            if( $( this ).next().is( ':visible' ) ) {
                window.location = $( this ).attr( 'href' )
            }
        } );
    } );
} )( jQuery );