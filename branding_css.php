<?php
/*
	branding_css.php - Dynamische CSS-Generierung aus Branding-Konfiguration

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2025 Edy Corak & Schlüter & Friends
*/

// Lade Branding-Konfiguration
require_once(__DIR__ . '/branding.php');

// Setze Content-Type auf CSS
header('Content-Type: text/css; charset=utf-8');

// Hole die statische CSS-Datei
$static_css = file_get_contents(__DIR__ . '/' . BRANDING_CSS_FILE);

// Ersetze die hartcodierten Farbwerte durch die Branding-Farben
$dynamic_css = str_replace(
	[
		'#f97c24',
		'#ff6a00',
		'#ff6900',
		'#2c3e50',
		'#495057',
		'#6c757d',
		'#ffffff',
		'#f8f9fa',
		'#e9ecef',
		'#28a745',
		'#dc3545'
	],
	[
		BRANDING_COLOR_PRIMARY,
		BRANDING_COLOR_PRIMARY_HOVER,
		BRANDING_COLOR_SECONDARY,
		BRANDING_COLOR_TEXT_DARK,
		BRANDING_COLOR_TEXT_LIGHT,
		BRANDING_COLOR_TEXT_MUTED,
		BRANDING_COLOR_BACKGROUND,
		BRANDING_COLOR_BACKGROUND_LIGHT,
		BRANDING_COLOR_BORDER,
		BRANDING_COLOR_SUCCESS,
		BRANDING_COLOR_ERROR
	],
	$static_css
);

// Gebe die dynamische CSS aus
echo $dynamic_css;
?>
