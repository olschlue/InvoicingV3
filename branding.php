<?php

/*
	branding.php - Zentrale Personalisierungs-Konfiguration

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2025 Edy Corak & Schlüter & Friends

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
*/

/*
 * ========================================
 * FIRMEN-BRANDING EINSTELLUNGEN
 * ========================================
 * Hier können alle Personalisierungs-Einstellungen
 * zentral angepasst werden.
 */

// Firmen-/Projekt-Name
define('BRANDING_COMPANY_NAME', 'Schlüter & Friends');
define('BRANDING_APP_NAME', 'S&F Invoicing');

// Logo-Einstellungen
define('BRANDING_LOGO_PATH', 'images/logo.png');
define('BRANDING_LOGO_MAX_HEIGHT', '60px');

// Farbschema (Haupt- und Akzentfarben)
define('BRANDING_COLOR_PRIMARY', '#f97c24');      // Orange - Hauptfarbe
define('BRANDING_COLOR_PRIMARY_HOVER', '#ff6a00'); // Orange dunkel - Hover
define('BRANDING_COLOR_SECONDARY', '#ff6900');     // Orange alternativ

// Weitere UI-Farben
define('BRANDING_COLOR_TEXT_DARK', '#2c3e50');     // Dunkelgrau für Text
define('BRANDING_COLOR_TEXT_LIGHT', '#495057');    // Mittelgrau für Text
define('BRANDING_COLOR_TEXT_MUTED', '#6c757d');    // Hellgrau für Text
define('BRANDING_COLOR_BACKGROUND', '#ffffff');    // Weiß für Hintergründe
define('BRANDING_COLOR_BACKGROUND_LIGHT', '#f8f9fa'); // Hellgrau für Hintergründe
define('BRANDING_COLOR_BORDER', '#e9ecef');        // Border-Farbe

// Erfolgsmeldungen / Fehlermeldungen
define('BRANDING_COLOR_SUCCESS', '#28a745');       // Grün
define('BRANDING_COLOR_ERROR', '#dc3545');         // Rot

// CSS-Datei für individuelles Styling
define('BRANDING_CSS_FILE', 'include/phprechnung.css');

// Schriftarten (CSS Font Stack)
define('BRANDING_FONT_FAMILY', "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif");

// Layout-Einstellungen
define('BRANDING_MENUBAR_WIDTH', '200px');         // Breite der Menüleiste
define('BRANDING_SPACER_WIDTH', '20px');           // Breite der Zwischenspalten

// Footer-Text (optional)
define('BRANDING_FOOTER_TEXT', '');

// Version Info
define('BRANDING_VERSION', '3.0');
define('BRANDING_COPYRIGHT_YEAR', '2025');

?>
