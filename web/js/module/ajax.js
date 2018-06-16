var oAjaxModule = (function() {

    var oSettings = {

        /**
         * Assign Promise result
         * @param {object} oAjaxParams
         * @returns {Promise}
         */
        retrieveAjaxResults : function(oAjaxParams) {
            var oAssignAjax = {
                'url' : '',
                'data' : {},
                'method' : 'GET'
            };

            if (oAjaxParams.hasOwnProperty('url') === true) {
                oAssignAjax['url'] = oAjaxParams['url']
            }
            if (oAjaxParams.hasOwnProperty('data') === true) {
                oAssignAjax['data'] = oAjaxParams['data']
            }
            if (oAjaxParams.hasOwnProperty('method') === true) {
                oAssignAjax['method'] = oAjaxParams['method']
            }

            return new Promise(function(resolve) {
                $.ajax({
                    'url' : oAssignAjax['url'],
                    'method' : oAssignAjax['method'],
                    'data' : oAssignAjax['data'],
                    success : function(oResponse) {
                        resolve(oResponse);
                    }
                });

            });
        }

    };

    return {
        retrieveAjaxResults : function(oAjaxParams) {
            return oSettings.retrieveAjaxResults(oAjaxParams);
        }
    };

})();