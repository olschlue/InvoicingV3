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

/*
 * ========================================
 * SYSTEM-PFADE
 * ========================================
 */

// Web-Root (Ihre eigene Webserver-Adresse)
define('SYSTEM_WEB_URL', 'https://oschlueter.de/bill/test');

// Dokumenten-Root Pfad
define('SYSTEM_DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/bill/test');

// Template-Verzeichnis
define('SYSTEM_TEMPLATE_DIR', SYSTEM_DOCUMENT_ROOT . '/include/smarty/templates');
define('SYSTEM_CONFIG_DIR', SYSTEM_DOCUMENT_ROOT . '/include/smarty/configs');

// Cache-Verzeichnis (benötigt Schreibrechte vom Webserver)
define('SYSTEM_CACHE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/bill/test');
define('SYSTEM_COMPILE_DIR', SYSTEM_CACHE_ROOT . '/include/smarty/templates_c');
define('SYSTEM_CACHE_DIR', SYSTEM_CACHE_ROOT . '/include/smarty/cache');

/*
 * ========================================
 * DATENBANK-VERBINDUNG
 * ========================================
 */

// Datenbank-Hostname
define('DB_HOST', 'db5004652185.hosting-data.io');

// Datenbank-Benutzername
define('DB_USER', 'dbu1361608');

// Datenbank-Passwort
define('DB_PASS', 'ee97mnee');

// Datenbank-Name
define('DB_NAME', 'dbs3895544');

// Datenbank-Typ (Standard: mysqli)
define('DB_TYPE', 'mysqli');

/*
 * ========================================
 * SICHERHEITS-EINSTELLUNGEN
 * ========================================
 */

// Verschlüsselungs-Schlüssel (NICHT ÄNDERN nach Inbetriebnahme!)
// Hinweis: Wenn Sie diesen Schlüssel ändern, ist ein Login nicht mehr möglich.
define('SECURITY_ENCRYPTION_KEY', 'e76a669e075b6e034ec5911553a86abb');

// Alter Schlüssel (für Migration nach User-Update)
define('SECURITY_ENCRYPTION_KEY_OLD', 'e76a669e075b6e034ec5911553a86abb');

/*
 * ========================================
 * SYSTEM-EINSTELLUNGEN
 * ========================================
 */

// Multi-Bar Einstellung (Linkbars nach X Zeilen umschalten)
define('SYSTEM_MULTIBAR', '25');

// PHP SendMail verwenden (1 = PEAR Mail Interface, 0 = PHP mail() Funktion)
define('SYSTEM_USE_PEAR_MAIL', '1');

// Admin-Gruppen (NICHT ÄNDERN!)
define('SYSTEM_ADMIN_ROOT', 'admin');
define('SYSTEM_ADMIN_GROUP_1', '1');  // Root
define('SYSTEM_ADMIN_GROUP_2', '2');  // Manager
define('SYSTEM_ADMIN_GROUP_3', '3');  // Bookkeeping

/*
 * ========================================
 * PDF-TEMPLATE EINSTELLUNGEN
 * ========================================
 */

// PDF-Template (Hintergrundbild für PDFs)
// Pfad relativ zur Web-Root oder absolute URL
define('PDF_TEMPLATE_IMAGE', '/template.png');

// PDF-Template unten (optional, z.B. für Footer-Grafik)
define('PDF_TEMPLATE_BOTTOM', '/vorlage_unten.png');

// PDF-Template aktivieren (true) oder deaktivieren (false)
define('PDF_TEMPLATE_ENABLED', true);

// PDF-Template Position und Größe
define('PDF_TEMPLATE_X', 0);           // X-Position
define('PDF_TEMPLATE_Y', 0);           // Y-Position
define('PDF_TEMPLATE_SCALE', -200);    // Skalierung (-200 = automatische Skalierung)

// PDF-Template Bottom Position (für zweites Bild)
define('PDF_TEMPLATE_BOTTOM_Y', 270);  // Y-Position für unteres Template

/*
 * ========================================
 * PDF-ANZEIGE EINSTELLUNGEN
 * ========================================
 */

// Leistungsdatum auf PDF anzeigen (true = anzeigen, false = ausblenden)
define('PDF_SHOW_ACHIEVED_DATE', true);

// Zahlungsfrist ("Zahlung bis") auf PDF anzeigen (true = anzeigen, false = ausblenden)
define('PDF_SHOW_PAYMENT_DATE', true);

/*
 * ========================================
 * PDF-DATEINAME EINSTELLUNGEN
 * ========================================
 */

// PDF-Dateiname-Präfix (wird allen generierten PDFs vorangestellt)
// Beispiel: Mit Präfix 'SF-' wird aus 'rechnung-123.pdf' -> 'SF-rechnung-123.pdf'
define('PDF_FILENAME_PREFIX', 'SF-');

?>
