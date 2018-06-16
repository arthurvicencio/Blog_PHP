/**
 * Form Module Class
 * @type {{validateForm}}
 */
var oFormModule = (function() {

    var oSettings = {

        /**
         * Validate given form data
         * @param oFormData
         * @param aRequiredFieldKeys
         * @returns {*}
         */
        validateFormData : function(oFormData, aRequiredFieldKeys) {
            var oAssignFormData = {};

            if (Object.keys(oFormData).length > 0) {
                for (var iIndex in oFormData) {
                    if (oFormData.hasOwnProperty(iIndex) === true) {
                        var mFormKey = oFormData[iIndex].name;
                        var mFormValue = oFormData[iIndex].value;

                        oAssignFormData[mFormKey] = mFormValue;
                    }
                }
            }

            if (Object.keys(oAssignFormData).length < 1) {
                return 'Provide the necessary values for each fields';
            }

            return oSettings.checkFormKeysValues(oAssignFormData, aRequiredFieldKeys);
        },

        /**
         * Check [form keys] if there's an invalid attribute passed
         * @param {object} oAssignFormData (form data)
         * @param {object} oRequiredFieldKeys (list of required fields)
         * @returns {string|object}
         */
        checkFormKeysValues : function(oAssignFormData, oRequiredFieldKeys) {
            var mAssignCheckValue = oAssignFormData;
            var aListOfRequiredKeys = Object.getOwnPropertyNames(oRequiredFieldKeys);
            $.each(oAssignFormData, function(sKey, sValue) {
                if (typeof mAssignCheckValue === 'string') {
                    return mAssignCheckValue;
                }

                if ($.inArray(sKey, aListOfRequiredKeys) < 0) {
                    mAssignCheckValue = 'It appears that this corresponding field (e.g '+ sKey +') is not required';
                    return mAssignCheckValue;
                }

                if ($.trim(sValue) === '') {
                    mAssignCheckValue = oRequiredFieldKeys[sKey];
                    return mAssignCheckValue;
                }
            });

            return mAssignCheckValue;
        }

    };

    return {
        validateForm : function(oFormData, aRequiredFieldKeys) {
            return oSettings.validateFormData(oFormData, aRequiredFieldKeys);
        }
    };

})();