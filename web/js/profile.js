$(document).ready(function() {

    'use strict';

    var oProfileIndexSettings = {

        /**
         * Initialize [profile index] settings
         */
        init : function() {
            this.setInitialListHeight();
        },

        /**
         * Apply initial list height
         */
        setInitialListHeight : function() {
            var oProfileList = $('#content-profile .list');
            if (oProfileList.length <= 0) {
                return false;
            }

            var oMainParent = oProfileList.parent().parent();
            var iAssignNewHeight = 0;
            if (oMainParent.hasClass('content-wrap') === true) {
                var iInitialHeight = oMainParent.height();

                if (iInitialHeight > 500) {
                    iAssignNewHeight += iInitialHeight;
                }
            }

            iAssignNewHeight += $('#footer').height();

            if (iAssignNewHeight < 500) {
                oProfileList.css('height', iAssignNewHeight);
            }

        }
    };


    oProfileIndexSettings.init();
});