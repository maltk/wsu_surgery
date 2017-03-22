jQuery(function () {

    jQuery('#home-hero').bxSlider({
        auto: true
    });

    jQuery('#faculty-tablist a').click(function (e) {
        e.preventDefault()
        jQuery(this).tab('show')
    })

});