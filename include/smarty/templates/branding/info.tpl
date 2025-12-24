{*
	branding/info.tpl - Branding-Einstellungen anzeigen
*}
{include file="header.tpl"}
<body>
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
<h2>Branding-Einstellungen</h2>

{if $SuccessMessage}
<div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border: 1px solid #c3e6cb; border-radius: 4px;">
	{$SuccessMessage}
</div>
{/if}

<table border="0" cellspacing="2" cellpadding="5" class="phprechnung_info" width="100%">
<thead>
<tr>
	<th width="30%">Einstellung</th>
	<th width="70%">Wert</th>
</tr>
</thead>
<tbody>
{foreach from=$branding_info item=info}
<tr>
	<td class="phprechnung_info_label"><strong>{$info.label}:</strong></td>
	<td class="phprechnung_info_value">{$info.value}</td>
</tr>
{/foreach}
</tbody>
</table>

<br>
<div>
	<a href="edit.php?{$Session}" class="phprechnung_button" style="display: inline-block; padding: 8px 16px; text-decoration: none; background-color: #007bff; color: white; border-radius: 4px;">
		{$Edit}
	</a>
	<a href="../config/list.php?{$Session}" class="phprechnung_button" style="display: inline-block; padding: 8px 16px; text-decoration: none; background-color: #6c757d; color: white; border-radius: 4px; margin-left: 10px;">
		{$Back}
	</a>
</div>

</td></tr>
</table>
{include file="footer.tpl"}
</body>
</html>
