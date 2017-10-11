

( function( $ ) {

    //Setup hero sliders
    $('#home-hero').bxSlider({
        auto: true
    });

    $('#faculty-tablist a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })


	
} )( jQuery );