/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/
var Settings_Index_Js = {
	initEvants: function() {
		$('.LangManagement .add_lang').click(Settings_Index_Js.ShowLangMondal);
		$('.LangManagement .edit_lang a').click(function(e){jQuery('#edit_lang').html('');document.showDiff=false; Settings_Index_Js.LoadEditLang(this)});
		$('.LangManagement .editHelpIcon a').click(function(e){ jQuery('#editHelpIcon').html('');document.showDiff=false; Settings_Index_Js.LoadEditLang(this)});
		$('#AddNewLangMondal .btn-primary').click(function(e){$('#AddNewLangMondal .btn-primary').disable(false);Settings_Index_Js.AddLangMondal(e);});
		$('#AddNewTranslationMondal .btn-primary').click(function(e){Settings_Index_Js.AddTranslationMondal(e),$('#AddNewTranslationMondal .btn-primary').disable(false);});
		$('#lang_list tr').each(function(index,element){
			element = $(element);
			Settings_Index_Js.initEvant(element);
		})
	},
	LoadEditLang : function(e) {
		element = jQuery(e);
		position = element.attr('href');
		var tpl = element.data('mode');
		if(typeof position == 'undefined'){
			position = '#'+element.attr('id');
		}

		var url = '';
		if($(".LangManagement "+position+" #langs_list").val() != undefined){
			url += '&lang='+$(".LangManagement "+position+" #langs_list").val();
		}
		if($(".LangManagement #mods_list").val() != undefined){
			url += '&mod='+$(".LangManagement "+position+" #mods_list").val();
		}
		if(document.showDiff == true){
			url += '&sd=1';
		}
		if(typeof tpl != 'undefined'){
			url += '&tpl='+tpl;
		}
		var progressIndicatorElement = jQuery.progressIndicator({
            'position' : 'html',
            'blockInfo' : {
                'enabled' : true
            }
        });
		$.get("index.php?module=LangManagement&parent=Settings&view=Edit"+url, function (data) {
			progressIndicatorElement.progressIndicator({'mode': 'hide'});
			jQuery(position).html(data);
			Settings_Index_Js.initEditLang(tpl,position);
		});
	},
	initEditLang: function(tpl,position) {
		var thisInstance = this;
		if($(".LangManagement .active select.chzn-select").val()==null){
			$('button.add_translation').disable(true);
		}else{
			$('button.add_translation').enable();
		}
		app.showSelect2ElementView($(".LangManagement .active select.chzn-select"));
		$(".LangManagement .active #langs_list").select2().on("change", function(e) {
			e = jQuery(this).closest('.active');
			Settings_Index_Js.LoadEditLang(e);
        });
		thisInstance.registerHoverCkEditor();
		thisInstance.registerHelpInfo();
		
		$(".LangManagement .active #helpInfoView").on('change',function(e){Settings_Index_Js.saveView(e,position)})
		$(".LangManagement .active #mods_list").select2().on("change", function(e) {
			e = jQuery(this).closest('.active');
			Settings_Index_Js.LoadEditLang(e);
        });
		if(tpl != 'editHelpIcon'){
			$('#edit_lang .translation').change(function(e){Settings_Index_Js.changeTranslation(e,position)});
			$('#edit_lang .add_translation').click(function(e){$('#AddNewTranslationMondal .btn-primary').enable();Settings_Index_Js.ShowTranslationMondal(e)});
			$('#edit_lang .delete_translation').click(function(e){Settings_Index_Js.deleteTranslation(e,position)});
		}
		$('.LangManagement '+position+' .show_differences').click(Settings_Index_Js.ShowDifferences);
		$.extend( $.fn.dataTable.defaults, {
			"searching": true,
			"ordering": false,
			"bFilter" : false,               
			"bLengthChange": false,
			"bPaginate": false,
			"bInfo": false,
			"pageLength": -1,
			"language": {
				"sZeroRecords":   app.vtranslate('No matching records found'),
				"sSearch":        app.vtranslate('Search'),
				"sEmptyTable":    app.vtranslate('No data available in table'),
			}
		} );
		$(''+position+' .listViewEntriesTable').dataTable();
	},
	registerHoverCkEditor : function(){
		var thisInstance = this;
		jQuery('tr td button.editButton').on('click',function(e){
			elementTd = jQuery(this).closest('td');
			thisInstance.registerEventForCkEditor(this);
			thisInstance.addClickOutSideEvent(elementTd);
		});
	},
	addClickOutSideEvent : function(element) {
		var thisInstance = this;
		element.one('clickoutside',function(){
			thisInstance.destroyEventForCkEditor(element);
		});
	},
	registerHelpInfo : function(){
		var form = jQuery('.LangManagement');
		form.find('.HelpInfoPopover').popover()
	},
	/**
	 * Function to register event for ckeditor
	 */
	registerEventForCkEditor : function(e){
		var thisInstance = this;
		var element = jQuery(e);
		var elementTd = element.closest('td');
		var textarea = elementTd.find('textarea.ckEditorSource');
		element.addClass('hide');
		textarea.removeClass('hide');
		thisInstance.loadCkEditorElement( textarea );
	},
	/**
	 * Function to destroy ckeditor element
	 */
	destroyEventForCkEditor : function(element){
		var thisInstance = this;
		var textarea = element.find('textarea.ckEditorSource');
		var elementId = textarea.attr('id');
		if(typeof elementId != 'undefined' && textarea.css('display') == 'none'){
			ckeditor = CKEDITOR.instances[elementId];
			var target = ckeditor.getData();
			if(textarea.val() != target){
				textarea.val(target);
				if(target){
					Settings_Index_Js.changeTranslation(textarea,'#editHelpIcon');
					element.find('.HelpInfoPopover').attr('data-content',target);
				}else{
					Settings_Index_Js.deleteTranslation(textarea,'#editHelpIcon');
					textarea.addClass('empty_value');
					element.find('.HelpInfoPopover').attr('data-content','');
				}
			}
			ckeditor.destroy();
			textarea.addClass('hide');
			element.find('button.editButton').removeClass('hide');
		}
	},
	loadCkEditorElement : function( noteContentElement ){
		var thisInstance = this;
		var customConfig = {};
		if( noteContentElement.css('display') != 'none'){
			customConfig = {
				disableNativeSpellChecker: true,
				scayt_autoStartup: false,
				removePlugins: 'scayt',
				height: '5em',
				toolbar: null, 
				toolbarGroups: [                 
					{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
					{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
					{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] }
				]}
			var ckEditorInstance = new Vtiger_CkEditor_Js();
			ckEditorInstance.loadCkEditor(noteContentElement,customConfig);
		}
	},
	saveView: function(e, position) {
		var target = $(e.currentTarget);
		if(typeof e.currentTarget == 'undefined')
			target = jQuery(e);
		var closestTrElement = target.closest('tr');
		var SaveEvent = Settings_Index_Js.registerSaveEvent('saveView',{
			'fieldid':target.data('fieldid'),
			'mod':$(".LangManagement #mods_list").data('target')?$(".LangManagement #mods_list").data('target'):$(".LangManagement #mods_list").val(),
			'value':target.val(),
		});
	},
	ShowDifferences: function(e) {
		var target = $(e.currentTarget);
		if ($(this).is(':checked')) {
			document.showDiff = true;
		}else{
			document.showDiff = false;
		}
		e = $(this).closest('.active');
		Settings_Index_Js.LoadEditLang(e);
	},
	changeTranslation: function(e, position) {

		var target = $(e.currentTarget);
		if(typeof e.currentTarget == 'undefined')
			target = jQuery(e);
		var closestTrElement = target.closest('tr');
		Settings_Index_Js.registerSaveEvent('SaveTranslation',{
			'lang':target.data('lang'),
			'mod':jQuery(".LangManagement "+position+" #mods_list").data('target')?jQuery(".LangManagement "+position+" #mods_list").data('target'):jQuery(".LangManagement "+position+" #mods_list").val(),
			'type':target.data('type'),
			'langkey':closestTrElement.data('langkey'),
			'val':target.val(),
			'is_new':target.hasClass( "empty_value" ),
		});
		target.removeClass( "empty_value" );
	},
	deleteTranslation: function(e,position) {

		var message = app.vtranslate('JS_LBL_ARE_YOU_SURE_YOU_WANT_TO_DELETE');
		app.helper.showConfirmationBox({'message' : message}).then(function(data) {
			var target = $(e.currentTarget);
			if(typeof e.currentTarget == 'undefined'){
				target = e;
			}
			var closestTrElement = target.closest('tr');
			Settings_Index_Js.registerSaveEvent('DeleteTranslation',{
				'lang':$(".LangManagement #langs_list").val(),
				'mod':$(".LangManagement "+position+" #mods_list").data('target')?$(".LangManagement "+position+" #mods_list").data('target'):$(".LangManagement "+position+" #mods_list").val(),
				'langkey':closestTrElement.data('langkey'),
			});
			e = target.closest('.active');
			Settings_Index_Js.LoadEditLang(e);
		},
		function(error,err) {
		});
	},
	initEvant: function(element) {
		element.find('input[type=checkbox]').change(Settings_Index_Js.CheckboxChange);
		var options = {
			title : app.vtranslate('LBL_AreYouSure'),
			trigger : 'manual',
			placement: 'left',
			content: '<div class="popover_block"><button class="btn btn-danger deleteItem">'+app.vtranslate('Delete')+'</button>   <button class="btn btn-success pull-right cancel">'+app.vtranslate('Cancel')+'</button></div>'
		}
		var makeSureOptions = {
			title : app.vtranslate('JS_ARE_YOU_SURE_TO_SET_AS_DEFAULT'),
			trigger : 'manual',
			placement: 'left',
			content: '<div class="popover_block"><button class="btn btn-danger setDefaultItem">'+app.vtranslate('LBL_YES')+'</button>   <button class="btn btn-success pull-right cancel">'+app.vtranslate('Cancel')+'</button></div>'
		}
		element.find('#deleteItemC').click(function(e) {
			var message = app.vtranslate('JS_LBL_ARE_YOU_SURE_YOU_WANT_TO_DELETE');
			app.helper.showConfirmationBox({'message' : message}).then(function(data) {
				Settings_Index_Js.DeleteLang(element,e);
			},
			function(error,err) {
			});
		});
		
		element.find('#ImportToDatabase').click(function(e) {
				Settings_Index_Js.ImportToDb(element,e);
		});

		element.find('#setAsDefault').click(function(e) {
			var message = app.vtranslate('JS_ARE_YOU_SURE_TO_SET_AS_DEFAULT');
			app.helper.showConfirmationBox({'message' : message}).then(function(data) {
				Settings_Index_Js.setAsDefaultLang(element,e);
			},
			function(error,err) {
			});
		});
	},
	CheckboxChange: function(e) {
		var target = $(e.currentTarget);
		var closestTrElement = target.closest('tr');
		Settings_Index_Js.registerSaveEvent('save',{'type':'Checkbox','name':target.data('name'),'prefix':closestTrElement.data('prefix'),'val':target.is(':checked')});
	},
	ShowLangMondal: function(e) {
		var target = $(e.currentTarget);
		$('#AddNewLangMondal').modal('show');
		$("#AddNewLangMondal").css("z-index", "9999999");
	},
	ShowTranslationMondal: function(e) {
		var langs_list = $(".LangManagement #langs_list").val();
		var langs_fields = '';
		$('#AddNewTranslationMondal input[name="langs"]').val(JSON.stringify(langs_list));
		$.each(langs_list, function(key) {
			langs_fields += '<div class="form-group"><label class="col-sm-4 control-label">'+langs_list[key]+' &nbsp;</label><div class="col-sm-8"><input name="'+langs_list[key]+'" class="form-control" type="text" /></div></div><br />';
			//langs_fields += '<div class="span5 marginLeftZero"><label class="">'+langs_list[key]+' &nbsp;</label></div><div class="span7"><input name="'+langs_list[key]+'" class="span3" type="text" /></div>';
		});
			
		$('#AddNewTranslationMondal .add_translation_block').html(langs_fields);
		var target = $(e.currentTarget);
		$('#AddNewTranslationMondal').modal('show');
		$("#AddNewTranslationMondal").css("z-index", "9999999");
	},
	AddLangMondal: function(e) {
		var SaveEvent = Settings_Index_Js.registerSaveEvent('add',{
			'type':'Add',
			'mod':'add',
			'label':$("#AddNewLangMondal input[name='label']").val(),
			'name':$("#AddNewLangMondal input[name='name']").val(),
			'prefix':$("#AddNewLangMondal input[name='prefix']").val()
		});
	},
	AddTranslationMondal: function(e) {
		var target = $(e.currentTarget);
		var SaveEvent = Settings_Index_Js.registerSaveEvent('AddTranslation',{
			'mod': $(".LangManagement #mods_list").val(),
			'form_data': $("#AddTranslationForm").serializeFormData()
		});
		
		e.preventDefault();
	},
	ImportToDb: function(closestTrElement,e) {
		Settings_Index_Js.registerSaveEvent('ImportToDatabase',{'prefix':closestTrElement.data('prefix')});
		e.preventDefault()
	},
	DeleteLang: function(closestTrElement,e) {
		Settings_Index_Js.registerSaveEvent('delete',{'prefix':closestTrElement.data('prefix')});
		closestTrElement.hide();
	},
	setAsDefaultLang: function(closestTrElement,e) {
		var SaveEvent = Settings_Index_Js.registerSaveEvent('setAsDefault',{'prefix':closestTrElement.data('prefix')});
		$(e.currentTarget).closest('td').find('#deleteItemC').remove();
		$(e.currentTarget).remove();
		var prefix = SaveEvent.result['prefixOld'];
		var tbodyElement = closestTrElement.closest('tbody');
		OldTrDefaultLang = tbodyElement.find('tr[data-prefix="'+prefix+'"]')
		OldTrDefaultLang.find('td:last').prepend('<button class="btn btn-danger marginLeftZero" data-toggle="confirmation" data-original-title="" id="deleteItemC">'+app.vtranslate('Delete')+'</button> <button class="btn btn-primary marginLeftZero" data-toggle="confirmation" id="setAsDefault">'+app.vtranslate('JS_DEFAULT')+'</button>');
		Settings_Index_Js.initEvant(OldTrDefaultLang);
	},
		
	registerSaveEvent: function(mode, data) {

		var progressIndicatorElement = jQuery.progressIndicator({
            'position' : 'html',
            'blockInfo' : {
                'enabled' : true
            }
        });

		var response = '';
		var resp = '';
		var params = {}
		params.data = {
			module: app.getModuleName(), 
			parent: app.getParentModuleName(), 
			action: 'SaveAjax', 
			mode: mode,
			params: data
		}
		params.async = false;
		params.dataType = 'json';
        AppConnector.request(params.data).then(
			function(data) {
				response = data['result'];
				var params = {
					text: response['message'],
					title: response['message'],
					animation: 'show'
				};
				if(response.success == true){
					params.type = 'info';
				}
				progressIndicatorElement.progressIndicator({'mode': 'hide'});
				Vtiger_Helper_Js.showPnotify(params);
				resp = response.success;
				if(mode=='AddTranslation'){
					$('#AddNewTranslationMondal').modal('hide');
					$("#AddNewTranslationMondal input[name='variable']").val('');
					Settings_Index_Js.LoadEditLang(jQuery('#edit_lang'));
				}
			/*	if(mode=='add'){
					$('#lang_list table tbody').append('<tr data-prefix="'+SaveEvent.params.prefix+'"><td>'+SaveEvent.params.label+'</td><td>'+SaveEvent.params.name+'</td><td>'+SaveEvent.params.prefix+'</td><td class="textAlignCenter"><input type="checkbox" data-name="ac_user"></td><td class="textAlignCenter"><input type="checkbox" data-name="ac_admin"></td><td><button class="btn btn-danger marginLeftZero" data-toggle="confirmation" data-original-title="" id="deleteItemC">'+app.vtranslate('Delete')+'</button></td></tr>');
					var element = $('#lang_list tr[data-prefix='+SaveEvent.params.prefix+']')
					Settings_Index_Js.initEvant(element);
					$('#AddNewLangMondal').modal('hide');
					$("#AddNewLangMondal input[name='label']").val('');
					$("#AddNewLangMondal input[name='name']").val('');
					$("#AddNewLangMondal input[name='prefix']").val('');
				}*/
				$('#AddNewTranslationMondal .btn-primary').disable(false);
			},
			function(data, err) {

			}
        );
		return {resp:resp,params:params.data.params,result:response};
	},
		
	registerDeactivateLicense : function(){
		$('#deactivate_license_btn').on('click',function(){
			var deactivateActionUrl = 'module='+app.getModuleName()+'&action=LicenseRemove';
			var message = app.vtranslate('JS_DEACTIVATE_QUESTION');
            app.helper.showConfirmationBox({'message': message}).then(function(data) {

            var progressIndicatorElement = jQuery.progressIndicator({
                'position' : 'html',
                'blockInfo' : {
                        'enabled' : true
                }
            });
 			
                AppConnector.request(deactivateActionUrl).then(
                function(data) {

                    if (data.result) {
                        var params = {
                        title: app.vtranslate('JS_DEACTIVATION_CONFIRMED'),
                        type: 'info'
                        };
                    } else {
                        var params = {
                        title : app.vtranslate('JS_DEACTIVATION_ERROR'),
                        type: 'error'
                        };
                    }
                    
                    window.location.reload();
                    Vtiger_Helper_Js.showMessage(params);
					progressIndicatorElement.progressIndicator({'mode':'hide'});
					return;
                });
            });
		});
	},		

	registerEvents : function() {
		Settings_Index_Js.initEvants();
		Settings_Index_Js.registerDeactivateLicense();
	}
	
}
$(document).ready(function(){
	document.showDiff = false;
	Settings_Index_Js.registerEvents();
	jQuery('.UpdateCheckModule').on('click', function(e) {
        var module = jQuery(e.currentTarget).data('module');
        jQuery.post('index.php', { 'module':module, 'parent':'Settings', 'view':'Upgrade', 'step' : 1}, function(response) {
            app.helper.showModal(response, { cb: function (data) {
                jQuery('.StartUpdate').on('click', function() {
                    jQuery('#RUNNING_UPDATE').show();

                    jQuery.post('index.php', { 'module':module, 'parent':'Settings', 'view':'Upgrade', 'step' : 3}, function(response) {
                        window.location.reload();
                    });
                });
            } });
        });
    });
})