$(document).ready(function() {

    'use strict';

    var oLoginSettings = {

        /**
         * Initialize [login] settings
         */
        init : function() {
            this.submitLogin('#btn-login');
        },

        /**
         * Submit login form
         * @param {string} sElement (DOM Element)
         */
        submitLogin : function(sElement) {
            $(sElement).click(function(event) {
                event.preventDefault();
                var aRequiredFieldKeys = {
                    'email_address' : 'Kindly enter your valid email address',
                    'password' : 'Kindly enter your password'
                };

                var oFormData = $('#frm-login').serializeArray();
                var mCheckFormData = oFormModule.validateForm(oFormData, aRequiredFieldKeys);
                if (typeof mCheckFormData === 'string') {
                    swal('Oops! It appears we have a situation here', mCheckFormData, 'error');
                    return false;
                }

                var bCheckEmailAdd = oLoginSettings.validateEmailAdd(mCheckFormData['email_address']);
                if (bCheckEmailAdd !== true) {
                    swal('Oops! It appears we have a situation here', 'Enter a valid email address', 'error');
                    return false;
                }

                var oAjaxParams = {
                    'url' : '/login',
                    'data' : mCheckFormData,
                    'method' : 'POST',
                    'headers' : {
                        'Content-Type': 'application/json'
                    }
                };

                var oLoginPromiseResult = oAjaxModule.retrieveAjaxResults(oAjaxParams);
                oLoginPromiseResult.then(function(oResponse) {
                    if (oResponse.hasOwnProperty('code') === true) {
                        var iResponseCode = oResponse['code'];
                        var sAlertMessage = oResponse.hasOwnProperty('error') === true ? oResponse['error'] : 'No data provided';
                        if (iResponseCode !== 200) {
                            swal('Omg! There\'s a problem when attempting to login', sAlertMessage, 'error');
                            return false;
                        }

                        location.href = '/dashboard';

                    }
                }).catch(function(oException) {
                    console.log(oException);
                });

            });
        },

        /**
         * Validate email address
         * @param {string} sEmailAddress
         * @returns {boolean}
         */
        validateEmailAdd : function(sEmailAddress) {
            if (sEmailAddress !== '') {
                var sEmailPattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                return sEmailPattern.test(sEmailAddress);
            }

            return true;
        }

    };


    oLoginSettings.init();
});