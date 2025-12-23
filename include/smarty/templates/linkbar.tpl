{*
	linkbar.tpl

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2007 Edy Corak < phprechnung at ecorak dot net >

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
{if $smarty.session.SuperUser and ( $smarty.session.SuperUser eq $Root )}
	<div id="top10" align="center" style="padding: 15px 0;">
	<a accesskey="A" class="btn nmenulink" title="{$Addressbook}" href="../addressbook/list.php?{$Session}">{$Addressbook}</a>
	<a accesskey="P" class="btn nmenulink" title="{$Position}" href="../position/list.php?{$Session}">{$Position}</a>
	{*<a accesskey="O" class="btn nmenulink" title="{$Offer}" href="../offer/list.php?{$Session}">{$Offer}</a>*}
	<a accesskey="I" class="btn nmenulink" title="{$Invoice}" href="../invoice/list.php?{$Session}">{$Invoice}</a>
	<a accesskey="M" class="btn nmenulink" title="{$Payment}" href="../payment/list.php?{$Session}">{$Payment}</a>
	<a accesskey="C" class="btn nmenulink" title="{$Cashbook}" href="../cashbook/list.php?{$Session}">{$Cashbook}</a>
	<a accesskey="R" class="btn nmenulink" title="{$Reports}" href="../reports/index.php?{$Session}">{$Reports}</a>
	<a accesskey="L" class="btn nmenulink" title="{$Logout}" href="../login/suend.php?{$Session}">{$Logout}</a>
	</div>
{else}
	<div id="top10" align="center" style="padding: 15px 0;">
	<a accesskey="A" class="btn nmenulink" title="{$Addressbook}" href="../addressbook/list.php?{$Session}">{$Addressbook}</a>
	<a accesskey="P" class="btn nmenulink" title="{$Position}" href="../position/list.php?{$Session}">{$Position}</a>
	{*<a accesskey="O" class="btn nmenulink" title="{$Offer}" href="../offer/list.php?{$Session}">{$Offer}</a>*}
	<a accesskey="I" class="btn nmenulink" title="{$Invoice}" href="../invoice/list.php?{$Session}">{$Invoice}</a>
	<a accesskey="M" class="btn nmenulink" title="{$Payment}" href="../payment/list.php?{$Session}">{$Payment}</a>
	{*<a accesskey="C" class="btn nmenulink" title="{$Cashbook}" href="../cashbook/list.php?{$Session}">{$Cashbook}</a>*}
	<a accesskey="R" class="btn nmenulink" title="{$Reports}" href="../reports/index.php?{$Session}">{$Reports}</a>
	<a accesskey="L" class="btn nmenulink" title="{$Logout}" href="../login/logout.php?{$Session}">{$Logout}</a>
	</div>
{/if}
