<?php

/*
	branding/editf.php - Branding-Einstellungen speichern

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2025 Edy Corak & Schlüter & Friends
*/

require_once("../include/phprechnung.inc.php");

CheckUser();
CheckAdminGroup1();
CheckSession();

$ArrayValue = CheckArrayValue($_REQUEST);

foreach($ArrayValue as $key => $val)
{
	$$key = $val;
}

// Branding-Datei Pfad
$brandingFile = dirname(__DIR__) . '/branding.php';

// Funktion zum Aktualisieren eines define-Wertes
function updateDefine($content, $constant, $value, $isBoolean = false, $isNumeric = false) {
    if ($isBoolean) {
        $newValue = ($value == '1') ? 'true' : 'false';
        $pattern = "/define\('$constant',\s*(true|false)\)/i";
        $replacement = "define('$constant', $newValue)";
    } elseif ($isNumeric) {
        $pattern = "/define\('$constant',\s*'?[^']*'?\)/";
        $replacement = "define('$constant', '$value')";
    } else {
        $value = str_replace("'", "\\'", $value);
        $pattern = "/define\('$constant',\s*'[^']*'\)/";
        $replacement = "define('$constant', '$value')";
    }
    return preg_replace($pattern, $replacement, $content);
}

// Aktuelle Datei lesen
$brandingContent = file_get_contents($brandingFile);

// Firmen-Branding aktualisieren
if (isset($D_Company_Name)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COMPANY_NAME', $D_Company_Name);
}
if (isset($D_App_Name)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_APP_NAME', $D_App_Name);
}
if (isset($D_Logo_Path)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_LOGO_PATH', $D_Logo_Path);
}
if (isset($D_Logo_Max_Height)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_LOGO_MAX_HEIGHT', $D_Logo_Max_Height);
}

// Farbschema aktualisieren
if (isset($D_Color_Primary)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COLOR_PRIMARY', $D_Color_Primary);
}
if (isset($D_Color_Primary_Hover)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COLOR_PRIMARY_HOVER', $D_Color_Primary_Hover);
}
if (isset($D_Color_Secondary)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COLOR_SECONDARY', $D_Color_Secondary);
}

// UI-Farben aktualisieren
if (isset($D_Color_Text_Dark)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COLOR_TEXT_DARK', $D_Color_Text_Dark);
}
if (isset($D_Color_Background)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COLOR_BACKGROUND', $D_Color_Background);
}
if (isset($D_Color_Success)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COLOR_SUCCESS', $D_Color_Success);
}
if (isset($D_Color_Error)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_COLOR_ERROR', $D_Color_Error);
}

// Layout aktualisieren
if (isset($D_Menubar_Width)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_MENUBAR_WIDTH', $D_Menubar_Width);
}
if (isset($D_Footer_Text)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_FOOTER_TEXT', $D_Footer_Text);
}
if (isset($D_Version)) {
    $brandingContent = updateDefine($brandingContent, 'BRANDING_VERSION', $D_Version);
}

// System-Pfade aktualisieren
if (isset($D_Web_URL)) {
    $brandingContent = updateDefine($brandingContent, 'SYSTEM_WEB_URL', $D_Web_URL);
}

// PDF-Einstellungen aktualisieren
if (isset($D_PDF_Template_Enabled)) {
    $brandingContent = updateDefine($brandingContent, 'PDF_TEMPLATE_ENABLED', $D_PDF_Template_Enabled, true);
}
if (isset($D_PDF_Show_Achieved_Date)) {
    $brandingContent = updateDefine($brandingContent, 'PDF_SHOW_ACHIEVED_DATE', $D_PDF_Show_Achieved_Date, true);
}
if (isset($D_PDF_Show_Payment_Date)) {
    $brandingContent = updateDefine($brandingContent, 'PDF_SHOW_PAYMENT_DATE', $D_PDF_Show_Payment_Date, true);
}
if (isset($D_PDF_Filename_Prefix)) {
    $brandingContent = updateDefine($brandingContent, 'PDF_FILENAME_PREFIX', $D_PDF_Filename_Prefix);
}

// Rechnungsnummer-Kürzel aktualisieren
if (isset($D_Invoice_Initials)) {
    $brandingContent = updateDefine($brandingContent, 'INVOICE_INITIALS', $D_Invoice_Initials);
}
if (isset($D_Delivery_Note_Initials)) {
    $brandingContent = updateDefine($brandingContent, 'DELIVERY_NOTE_INITIALS', $D_Delivery_Note_Initials);
}
if (isset($D_Offer_Initials)) {
    $brandingContent = updateDefine($brandingContent, 'OFFER_INITIALS', $D_Offer_Initials);
}
if (isset($D_Order_Initials)) {
    $brandingContent = updateDefine($brandingContent, 'ORDER_INITIALS', $D_Order_Initials);
}

// Backup erstellen
$backupFile = $brandingFile . '.backup.' . date('Y-m-d_H-i-s');
copy($brandingFile, $backupFile);

// Datei speichern
if (file_put_contents($brandingFile, $brandingContent)) {
    // Erfolgreich gespeichert
    header("Location: info.php?$session&message=success");
} else {
    // Fehler beim Speichern
    header("Location: edit.php?$session&error=1");
}

?>
