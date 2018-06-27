jQuery(function($){

    /* Block for hide and show the image url field */

    if ($('#bg_theme_options_form select').val() == 2) {
        $('#bg_theme_options_form .app-upload-image').show();
    } else {
        $('#bg_theme_options_form .app-upload-image').hide();
    }

    $('#bg_theme_options_form select').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;

        if (valueSelected == 2) {
            $('#bg_theme_options_form .app-upload-image').show('slow');
        } else {
            $('#bg_theme_options_form .app-upload-image').hide('slow');
        }

    });

    /* End Block  */
    
    /* Media for favicon */
    
    var frameFavicon = wp.media({
        title: 'Select or upload favicon',
        button: {
            text: 'Use this media'
        },
        multiple: false // User can select only one image per select
    });

    $('#bg_uploadFaviconBtn').click(function(e){
        e.preventDefault();

        frameFavicon.open();
    });

    frameFavicon.on('select', function(){
        var attachment = frameFavicon.state().get('selection').first().toJSON();
        $('input[name=bg_inputFaviconImg]').val(attachment.url);
    });
    
    /* End Block  */
    
    /* Media for logo */

    var frameLogo = wp.media({
        title: 'Select or upload logo',
        button: {
            text: 'Use this media'
        },
        multiple: false // User can select only one image per select
    });

    $('#bg_uploadLogoImgBtn').click(function(e){
        e.preventDefault();

        frameLogo.open();
    });

    frameLogo.on('select', function(){
        var attachment = frameLogo.state().get('selection').first().toJSON();
        $('input[name=bg_inputLogoImg]').val(attachment.url);
    });
    
    /* End Block  */

});
