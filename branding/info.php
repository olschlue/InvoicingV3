<?php

/*
	branding/info.php - Branding-Einstellungen anzeigen

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2025 Edy Corak & Schlüter & Friends
*/

require_once("../include/phprechnung.inc.php");
require_once("../include/smarty.inc.php");

CheckUser();
CheckAdminGroup1();
CheckSession();

// Titel setzen
$smarty->assign("Title", "Branding-Einstellungen");

// Aktuelle Werte aus branding.php lesen
$brandingFile = dirname(__DIR__) . '/branding.php';
$brandingContent = file_get_contents($brandingFile);

// Funktion zum Extrahieren von define-Werten
function getDefineValue($content, $constant) {
    if (preg_match("/define\('$constant',\s*'([^']*)'\)/", $content, $matches)) {
        return $matches[1];
    } elseif (preg_match("/define\('$constant',\s*\"([^\"]*)\"\)/", $content, $matches)) {
        return $matches[1];
    } elseif (preg_match("/define\('$constant',\s*(true|false)\)/i", $content, $matches)) {
        return strtolower($matches[1]) === 'true' ? 'Ja' : 'Nein';
    } elseif (preg_match("/define\('$constant',\s*([0-9]+)\)/", $content, $matches)) {
        return $matches[1];
    }
    return '';
}

// Branding-Werte für Template
$branding_info = array(
    array('label' => 'Firmenname', 'value' => getDefineValue($brandingContent, 'BRANDING_COMPANY_NAME')),
    array('label' => 'Anwendungsname', 'value' => getDefineValue($brandingContent, 'BRANDING_APP_NAME')),
    array('label' => 'Logo-Pfad', 'value' => getDefineValue($brandingContent, 'BRANDING_LOGO_PATH')),
    array('label' => 'Logo Max. Höhe', 'value' => getDefineValue($brandingContent, 'BRANDING_LOGO_MAX_HEIGHT')),
    array('label' => 'Hauptfarbe', 'value' => getDefineValue($brandingContent, 'BRANDING_COLOR_PRIMARY')),
    array('label' => 'Hauptfarbe (Hover)', 'value' => getDefineValue($brandingContent, 'BRANDING_COLOR_PRIMARY_HOVER')),
    array('label' => 'Sekundärfarbe', 'value' => getDefineValue($brandingContent, 'BRANDING_COLOR_SECONDARY')),
    array('label' => 'Menüleisten-Breite', 'value' => getDefineValue($brandingContent, 'BRANDING_MENUBAR_WIDTH')),
    array('label' => 'Version', 'value' => getDefineValue($brandingContent, 'BRANDING_VERSION')),
    array('label' => 'Web-URL', 'value' => getDefineValue($brandingContent, 'SYSTEM_WEB_URL')),
    array('label' => 'PDF-Template aktiviert', 'value' => getDefineValue($brandingContent, 'PDF_TEMPLATE_ENABLED')),
    array('label' => 'Leistungsdatum anzeigen', 'value' => getDefineValue($brandingContent, 'PDF_SHOW_ACHIEVED_DATE')),
    array('label' => 'Zahlungsfrist anzeigen', 'value' => getDefineValue($brandingContent, 'PDF_SHOW_PAYMENT_DATE')),
    array('label' => 'PDF-Dateiname Präfix', 'value' => getDefineValue($brandingContent, 'PDF_FILENAME_PREFIX')),
    array('label' => 'Rechnungs-Kürzel', 'value' => getDefineValue($brandingContent, 'INVOICE_INITIALS')),
    array('label' => 'Lieferschein-Kürzel', 'value' => getDefineValue($brandingContent, 'DELIVERY_NOTE_INITIALS')),
    array('label' => 'Angebots-Kürzel', 'value' => getDefineValue($brandingContent, 'OFFER_INITIALS')),
    array('label' => 'Bestell-Kürzel', 'value' => getDefineValue($brandingContent, 'ORDER_INITIALS')),
);

$smarty->assign("branding_info", $branding_info);
$smarty->assign("Edit", "Bearbeiten");
$smarty->assign("Back", "Zurück");

// Erfolgsmeldung
if (isset($_GET['message']) && $_GET['message'] == 'success') {
    $smarty->assign("SuccessMessage", "Branding-Einstellungen erfolgreich gespeichert!");
}

$smarty->display('branding/info.tpl');

?>
