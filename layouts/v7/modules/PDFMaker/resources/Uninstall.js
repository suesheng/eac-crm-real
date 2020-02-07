/********************************************************************************
 * The content of this file is subject to the PDF Maker Free license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ******************************************************************************/

if (typeof(PDFMaker_Uninstall_Func_Js) == 'undefined') {
    
    var PDFMaker_Uninstall_Func_Js = {
        
        uninstallPDFMaker: function() {

            var message = app.vtranslate('LBL_UNINSTALL_CONFIRM','PDFMaker');
            app.helper.showConfirmationBox({'message': message}).then(function(data) {

                    app.helper.showProgress();

                    var params = {
                        module: 'PDFMaker',
                        action : 'UninstallPDFMaker'
                    };

                    app.request.post({'data' : params}).then(
                    function(err,response) {

                        if (response.success == true) {
                            var params = {
                                text:  app.vtranslate('JS_ITEMS_DELETED_SUCCESSFULLY'),
                                type: 'info'
                            };
                            window.location.href = "index.php";
                        } else {
                            var params = {
                                title : app.vtranslate('JS_ERROR'),
                                type: 'error'
                            };
                        }
                        app.helper.hideProgress();

                        params.animation = "show";

                        Vtiger_Helper_Js.showPnotify(params);
                    });
                }
            );                                   
                           
	},
        
        registerEvents: function() {
		this.registerActions();
	},        
        
        registerActions : function() {
		
            var thisInstance = this;
		var container = jQuery('#UninstallPDFMakerContainer');

                jQuery('#uninstall_pdfmaker_btn').click(function(e) {
			thisInstance.uninstallPDFMaker();
  		});
	}
    }

}

jQuery(document).ready(function() {
	PDFMaker_Uninstall_Func_Js.registerEvents();
});