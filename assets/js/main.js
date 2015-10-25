jQuery(document).ready(function($) {


    $(".trailerButton").click(function() {
        var href='https://www.youtube.com/watch?v=eDVjvp8im78&autoplay=1&vq=hd720&controls=1';
        href = href.replace(new RegExp("watch\\?v=", "i"), 'v/');
        $.fancybox({
            'showCloseButton': false,
            'padding'       : 0,
            'autoScale'     : false,
            'width'         : 720,
            'height'        : 440,
            'href'          : href,
            'type'          : 'swf',
            'swf'           : {
                'wmode'        : 'transparent',
                'allowfullscreen'   : 'true'
            },
        });
    });



});
