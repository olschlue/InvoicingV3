{*
	htable.tpl

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2008 Edy Corak < phprechnung at ecorak dot net >

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*}
<div class="modern-header phprechnung_sp_oben">
<table border="0" width="100%" cellspacing="0" cellpadding="0" summary="Header Tabelle">
<tbody>
<tr>
<td align="left" width="30%" style="padding: 10px;">
<div style="display: flex; align-items: center;">
<img border="0" src="{$Web}/{$BrandingLogoPath}" alt="Logo" style="max-height: {$BrandingLogoMaxHeight}; margin-right: 15px;">
<span style="font-size: 1.2em; font-weight: 600; color: {$BrandingColorTextDark};">{$BrandingAppName}</span>
</div>
</td>
<td align="right" width="70%" style="padding: 10px;">
{if $smarty.session.Username}
	<span style="color: #495057; margin-right: 15px;">
	{$Loggedin}: <a title="{$Loggedin}: {$smarty.session.FullName} ({$smarty.session.Username}) - {$Hostname} ({$IPAddress})" class="user-info-link" href="{$Web}/user/info.php?userID={$smarty.session.UserID}&amp;{$Session}" style="color: #2c3e50; text-decoration: none; padding: 6px 12px; background: #f8f9fa; border-radius: 6px; display: inline-block; transition: all 0.3s ease;"><strong>{$smarty.session.Username}</strong></a>
	</span>
{/if}
<span style="color: #6c757d;">{$Strftime}</span>
</td>
</tr>
</tbody>
</table>
</div>
<br />
