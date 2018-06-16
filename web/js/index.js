$(document).ready(function() {

    var oIndexSettings = {

        /**
         * Initialize [index] settings
         */
        init : function() {
            this.applySlideshowImages();
        },

        /**
         * Apply slideshow images
         */
        applySlideshowImages : function() {
            var iActiveSlideIndex = 0;
            var oCommonHomeSlides = $('.simple-slideshow .slide');
            oCommonHomeSlides.each(function($iIndex) {
                if ($(this).hasClass('active') === true) {
                    $(this).removeClass('active');
                    iActiveSlideIndex = $iIndex;
                }
            });

            var iNextSlideIndex = iActiveSlideIndex + 1;
            if (iNextSlideIndex >= oCommonHomeSlides.length) {
                iNextSlideIndex = 0;
            }

            oCommonHomeSlides.eq(iNextSlideIndex).addClass('active');
            setTimeout(oIndexSettings.applySlideshowImages, 8000);
        }
    };


    oIndexSettings.init();
});