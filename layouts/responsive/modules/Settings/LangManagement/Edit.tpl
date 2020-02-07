{*<!--
/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/
-->*}
<div class="row-fluid">
	<div>
		<button class="btn btn-primary add_translation pull-right">{vtranslate('LBL_ADD_Translate', $QUALIFIED_MODULE)}</button>
	</div>
	<div>
		<div class="pull-left pushDown2per marginLeftZero" >
			<label class="muted textOverflowEllipsis" title="Assegnato a ">
				{vtranslate('Language',$QUALIFIED_MODULE)}
			 </label>
		</div>
		<div class="pull-left" style="">
			<select multiple="multiple" class="chzn-select span4" id="langs_list" style="margin-left: 10px;margin-right: 10px;width: 180px;">
				{foreach from=$LANGS item=LANG key=ID}
					<option value="{$LANG['prefix']}" {if $MODULE_MODEL->parse_data($LANG['prefix'],$REQUEST->get('lang'))}selected{/if}>{$LANG['label']}</option>
				{/foreach}
			</select>
		</div>
	</div>
	<div>
		<div class="pull-left marginRight10px pushDown2per">{vtranslate('Module',$QUALIFIED_MODULE)}</div>
		<div class="pull-left">
			<select class="chzn-select mods_list" id="mods_list" style="width:180px">
				<optgroup label="{vtranslate('Modules',$QUALIFIED_MODULE)}">
					{foreach from=$MODS['mods'] item=MOD key=ID}
						<option value="{$ID}" {if $ID == $REQUEST->get('mod')}selected{/if}>{vtranslate($MOD,$MOD)}</option>
					{/foreach}
				</optgroup>
				<optgroup label="{vtranslate('LBL_SYSTEM_SETTINGS','Vtiger')}">
					{foreach from=$MODS['settings'] item=MOD key=ID}
						<option value="{$ID}" {if $ID == $REQUEST->get('mod')}selected{/if}>{vtranslate($MOD,$MOD)}</option>
					{/foreach}
				</optgroup>
			</select>
		</div>
	</div>
	<div>
		<input type="checkbox" class="show_differences" name="show_differences" {if $SD == 1}checked{/if} value="1" style="margin-left:10px;margin-right: 5px;">{vtranslate('LBL_SHOW_MISSING_TRANSLATIONS', $QUALIFIED_MODULE)}</input>
	</div>

</div>
{if $DATA}
<div>
	<table class="table table-bordered table-condensed listViewEntriesTable" >
		<thead>
			<tr class="blockHeader">
				<th><strong>{vtranslate('LBL_variable',$QUALIFIED_MODULE)}</strong></th>
				{foreach from=$DATA['langs'] item=item}
					<th><strong>{$item}</strong></th>
				{/foreach}
				<th></th>
			</tr>
		</thead>
		<tbody>
		{if $DATA['php']}
			{foreach from=$DATA['php'] item=langs key=lang_key}
				{assign var=TEMPDATA value = 1}
				{if $SD == 1}
					{assign var=TEMPDATA value = 0}
					{foreach from=$langs item=item key=lang}
						{if $item == NULL}
							{assign var=TEMPDATA value = 1}
						{/if}
					{/foreach}
				{/if}
				{if $TEMPDATA == 1}
					<tr data-langkey="{$lang_key}">
						<td>{$lang_key}</td>
						{foreach from=$langs item=item key=lang}
							<td><input 
								data-lang="{$lang}"
								data-type="php"
								name="{$lang_key}" 
								class="translation inputElement {if $item == NULL}empty_value{/if}" 
								{if $item == NULL} placeholder="{vtranslate('LBL_NoTranslation',$QUALIFIED_MODULE)}" {/if} 
								type="text" 
								value ="{$item}" />
							</td>
						{/foreach}
						<td>
							<a href="#" class="pull-right marginRight10px delete_translation">
								<i class="fa fa-trash alignMiddle"></i>
							</a>
						</td>
					</tr>
				{/if}
			{/foreach}
		{/if}
		{if $DATA['js']}
			{foreach from=$DATA['js'] item=langs key=lang_key}
				{assign var=TEMPDATA value = 1}
				{if $SD == 1}
					{assign var=TEMPDATA value = 0}
					{foreach from=$langs item=item key=lang}
						{if $item == NULL}
							{assign var=TEMPDATA value = 1}
						{/if}
					{/foreach}
				{/if}
				{if $TEMPDATA == 1}
					<tr data-langkey="{$lang_key}">
						<td>{$lang_key}</td>
						{foreach from=$langs item=item key=lang}
							<td><input 
								data-lang="{$lang}"
								data-type="js"
								name="{$lang_key}" 
								class="translation inputElement {if $item == NULL}empty_value{/if}" 
								{if $item == NULL} placeholder="{vtranslate('LBL_NoTranslation',$QUALIFIED_MODULE)}" {/if} 
								type="text" 
								value ="{$item}" />
							</td>
						{/foreach}
						<td>
							<a href="#" class="pull-right marginRight10px delete_translation">
								<i class="fa fa-trash alignMiddle"></i>
							</a>
						</td>
					</tr>
				{/if}
			{/foreach}
			{/if}
		</tbody>
	</table>
</div>
{/if}