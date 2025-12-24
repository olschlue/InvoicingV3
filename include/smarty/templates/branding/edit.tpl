{*
	branding/edit.tpl - Branding-Einstellungen bearbeiten
*}
{include file="header.tpl"}
<body onload="document.BrandingEdit.D_Company_Name.focus();">
{include file="htable.tpl"}
<table border="0" width="100%" cellspacing="0" cellpadding="0" summary="Tabelle 3">
<tr><td id="td1_20" width="200px" valign="top">
{* Menubar start *}
<table border="0" width="80%" cellspacing="0" cellpadding="0" summary="Tabelle 4">
{if $smarty.session.SuperUser and ( $smarty.session.SuperUser eq $Root )}
	<tr><td align="center" class="phprechnung_menu"><a accesskey="L" title="{$Logout}"
	href="../login/suend.php?{$Session}">{$Logout}</a></td></tr>
{else}
	<tr><td align="center" class="phprechnung_menu"><a accesskey="L" title="{$Logout}"
	href="../login/logout.php?{$Session}">{$Logout}</a></td></tr>
{/if}
<tr><td align="left" class="phprechnung_menu"><a accesskey="A" title="{$Addressbook}"
href="../addressbook/list.php?{$Session}">{$Addressbook}</a></td></tr>
<tr><td align="left" class="phprechnung_menu"><a accesskey="P" title="{$Position}"
href="../position/list.php?{$Session}">{$Position}</a></td></tr>
<tr><td align="left" class="phprechnung_menu"><a accesskey="I" title="{$Invoice}"
href="../invoice/list.php?{$Session}">{$Invoice}</a></td></tr>
<tr><td align="left" class="phprechnung_menu"><a accesskey="M" title="{$Payment}"
href="../payment/list.php?{$Session}">{$Payment}</a></td></tr>
<tr><td align="left" class="phprechnung_menu"><a accesskey="R" title="{$Reports}"
href="../reports/list.php?{$Session}">{$Reports}</a></td></tr>
<tr><td align="left" class="phprechnung_menu"><a accesskey="C" title="{$Configuration}"
href="../config/list.php?{$Session}">{$Configuration}</a></td></tr>
<tr><td align="left" class="phprechnung_menu"><a accesskey="U" title="{$User}"
href="../user/list.php?{$Session}">{$User}</a></td></tr>
<tr><td align="left" class="phprechnung_menu"><a accesskey="B" title="Branding"
href="info.php?{$Session}">Branding</a></td></tr>
</table>
{* Menubar end *}
</td>
<td id="td2_20" width="20px"></td>
<td id="td3_60" valign="top">

{* Hauptinhalt *}
<h2>Branding-Einstellungen bearbeiten</h2>

<form name="BrandingEdit" method="POST" action="editf.php?{$Session}">

<h3>Firmen-Branding</h3>
<table border="0" cellspacing="2" cellpadding="2" class="phprechnung_form">
<tr>
	<td class="phprechnung_form_label">{$Company_Name}:</td>
	<td><input type="text" name="D_Company_Name" value="{$D_Company_Name}" size="50" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$App_Name}:</td>
	<td><input type="text" name="D_App_Name" value="{$D_App_Name}" size="50" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Logo_Path}:</td>
	<td><input type="text" name="D_Logo_Path" value="{$D_Logo_Path}" size="50" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Logo_Max_Height}:</td>
	<td><input type="text" name="D_Logo_Max_Height" value="{$D_Logo_Max_Height}" size="10" class="phprechnung_input"></td>
</tr>
</table>

<h3>Farbschema</h3>
<table border="0" cellspacing="2" cellpadding="2" class="phprechnung_form">
<tr>
	<td class="phprechnung_form_label">{$Color_Primary}:</td>
	<td><input type="color" name="D_Color_Primary" value="{$D_Color_Primary}" class="phprechnung_input">
	    <input type="text" name="D_Color_Primary" value="{$D_Color_Primary}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Color_Primary_Hover}:</td>
	<td><input type="color" name="D_Color_Primary_Hover" value="{$D_Color_Primary_Hover}" class="phprechnung_input">
	    <input type="text" name="D_Color_Primary_Hover" value="{$D_Color_Primary_Hover}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Color_Secondary}:</td>
	<td><input type="color" name="D_Color_Secondary" value="{$D_Color_Secondary}" class="phprechnung_input">
	    <input type="text" name="D_Color_Secondary" value="{$D_Color_Secondary}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Color_Text_Dark}:</td>
	<td><input type="color" name="D_Color_Text_Dark" value="{$D_Color_Text_Dark}" class="phprechnung_input">
	    <input type="text" name="D_Color_Text_Dark" value="{$D_Color_Text_Dark}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Color_Background}:</td>
	<td><input type="color" name="D_Color_Background" value="{$D_Color_Background}" class="phprechnung_input">
	    <input type="text" name="D_Color_Background" value="{$D_Color_Background}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Color_Success}:</td>
	<td><input type="color" name="D_Color_Success" value="{$D_Color_Success}" class="phprechnung_input">
	    <input type="text" name="D_Color_Success" value="{$D_Color_Success}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Color_Error}:</td>
	<td><input type="color" name="D_Color_Error" value="{$D_Color_Error}" class="phprechnung_input">
	    <input type="text" name="D_Color_Error" value="{$D_Color_Error}" size="10" class="phprechnung_input"></td>
</tr>
</table>

<h3>Layout</h3>
<table border="0" cellspacing="2" cellpadding="2" class="phprechnung_form">
<tr>
	<td class="phprechnung_form_label">{$Menubar_Width}:</td>
	<td><input type="text" name="D_Menubar_Width" value="{$D_Menubar_Width}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Footer_Text}:</td>
	<td><input type="text" name="D_Footer_Text" value="{$D_Footer_Text}" size="50" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Version}:</td>
	<td><input type="text" name="D_Version" value="{$D_Version}" size="10" class="phprechnung_input"></td>
</tr>
</table>

<h3>System-Pfade</h3>
<table border="0" cellspacing="2" cellpadding="2" class="phprechnung_form">
<tr>
	<td class="phprechnung_form_label">{$Web_URL}:</td>
	<td><input type="text" name="D_Web_URL" value="{$D_Web_URL}" size="70" class="phprechnung_input"></td>
</tr>
</table>

<h3>PDF-Einstellungen</h3>
<table border="0" cellspacing="2" cellpadding="2" class="phprechnung_form">
<tr>
	<td class="phprechnung_form_label">{$PDF_Template_Enabled}:</td>
	<td>
		<select name="D_PDF_Template_Enabled" class="phprechnung_input">
			{html_options values=$choice_yes_no[0].0|@array_column:0 output=$choice_yes_no[0].0|@array_column:1 selected=$D_PDF_Template_Enabled}
			<option value="0" {if $D_PDF_Template_Enabled == 0}selected{/if}>Nein</option>
			<option value="1" {if $D_PDF_Template_Enabled == 1}selected{/if}>Ja</option>
		</select>
	</td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$PDF_Show_Achieved_Date}:</td>
	<td>
		<select name="D_PDF_Show_Achieved_Date" class="phprechnung_input">
			<option value="0" {if $D_PDF_Show_Achieved_Date == 0}selected{/if}>Nein</option>
			<option value="1" {if $D_PDF_Show_Achieved_Date == 1}selected{/if}>Ja</option>
		</select>
	</td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$PDF_Show_Payment_Date}:</td>
	<td>
		<select name="D_PDF_Show_Payment_Date" class="phprechnung_input">
			<option value="0" {if $D_PDF_Show_Payment_Date == 0}selected{/if}>Nein</option>
			<option value="1" {if $D_PDF_Show_Payment_Date == 1}selected{/if}>Ja</option>
		</select>
	</td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$PDF_Filename_Prefix}:</td>
	<td><input type="text" name="D_PDF_Filename_Prefix" value="{$D_PDF_Filename_Prefix}" size="10" class="phprechnung_input"></td>
</tr>
</table>

<h3>Rechnungsnummer-Kürzel</h3>
<table border="0" cellspacing="2" cellpadding="2" class="phprechnung_form">
<tr>
	<td class="phprechnung_form_label">{$Invoice_Initials}:</td>
	<td><input type="text" name="D_Invoice_Initials" value="{$D_Invoice_Initials}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Delivery_Note_Initials}:</td>
	<td><input type="text" name="D_Delivery_Note_Initials" value="{$D_Delivery_Note_Initials}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Offer_Initials}:</td>
	<td><input type="text" name="D_Offer_Initials" value="{$D_Offer_Initials}" size="10" class="phprechnung_input"></td>
</tr>
<tr>
	<td class="phprechnung_form_label">{$Order_Initials}:</td>
	<td><input type="text" name="D_Order_Initials" value="{$D_Order_Initials}" size="10" class="phprechnung_input"></td>
</tr>
</table>

<br>
<input type="submit" value="Speichern" class="phprechnung_button">
<input type="button" value="Abbrechen" onclick="location.href='info.php?{$Session}'" class="phprechnung_button">

</form>

</td></tr>
</table>
{include file="footer.tpl"}
</body>
</html>
