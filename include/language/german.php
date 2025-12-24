<?php

/*
	german.php

	phpRechnung - is easy-to-use Web-based multilingual accounting software.
	Copyright (C) 2001 - 2018 Edy Corak < edy at loenshotel dot de >

	ISo-8859-15

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNu General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHouT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FoR A PARTICuLAR PuRPoSE.  See the
	GNu General Public License for more details.

	You should have received a copy of the GNu General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  uSA
*/

// Sprachdefinition - Deutsch
//

// Lade Branding-Konfiguration
require_once(__DIR__ . '/../../branding.php');

$a = array (
	"welcome" => "Willkommen bei",
	"programname" => BRANDING_COMPANY_NAME,
	"phprechnung" => "",

	"admin" => "Administrator",

	"language" => "Sprache",
	"choose_language" => "Sprache w&auml;hlen",


	// LinkLeiste
	//
	"logout" => "Abmelden",
	"startpage" => "Startseite",
	"addressbook" => "Adressbuch",
	"position" => "Position",
	"offer" => "Angebot",
	"invoice" => "Rechnung",
	"credit_note" => "Gutschrift",
	"payment" => "Zahlung",
	"cashbook" => "Kassenbuch",
	"reports" => "Berichte",
	"configuration" => "Konfiguration",
	"message" => "Mitteilung",
	"method_of_payment" => "Zahlungsweise",
	"category" => "Kategorie",
	"tax" => "Mehrwertsteuer",
	"tax_short" => "MwSt.",
	"settings" => "Einstellung",
	"user_admin" => "Benutzerverwaltung",
	"super_user" => "Super user",
	"syslog" => "Syslog",
	"license" => "Lizenz",

	"list" => "Liste",
	"new" => "Neu",
	"search" => "Suchen",
	"detail_search" => "Detail-Suche",
	"searchresult" => "Suchergebnis",
	"help" => "Hilfe",

	"info" => "Info",
	"all_info" => "Alle Informationen &uuml;ber",


	// Aktionen
	//
	"insert" => "Eintragen",
	"save" => "Speichern",
	"edit" => "Bearbeiten",
	"edit_entry" => "Eintrag bearbeiten",
	"change" => "&auml;ndern",
	"delete" => "L&ouml;schen",
	"delete_entry" => "Eintrag l&ouml;schen",
	"cancel" => "Stornieren",
	"cancel_entry" => "Eintrag stornieren",
	"copy" => "Kopieren",
	"copy_entry" => "Eintrag kopieren",

	"print" => "Drucken",
	"sort" => "Sortieren nach",
	"choose" => "W&auml;hlen",
	"close" => "Schließen",
	"close_window" => "Fenster schließen",
	"choose_message" => "Mitteilung w&auml;hlen",
	"back" => "Zur&uuml;ck",
	"next" => "Weiter",
	"accept" => "Akzeptieren",


	// Allgemein
	//
	"date_text" => "Datum",
	"number_text" => "Nummer",

	"page" => "Seite",
	"firstpage" => "Erste Seite",
	"prevpage" => "Vorherige Seite",
	"nextpage" => "N&auml;chste Seite",
	"lastpage" => "Letzte Seite",

	"canceled_entries" => "Zeige Stornierte Eintr&auml;ge",
	"not_canceled_entries" => "Zeige NICHT-Stornierte Eintr&auml;ge",
	"all_entries" => "Zeige alle Eintr&auml;ge",

	"entry" => "Eintrag",
	"no_entry" => "Es sind keine Datens&auml;tze vorhanden.",
	"entry_no" => "Datensatz Nr.",
	"entries" => "Eintr&auml;ge",

	"new_entry" => "Datensatz wurde erfolgreich hinzugef&uuml;gt.",
	"entry_exist" => "Datensatz ist bereits vorhanden.",
	"entry_changed" => "Datensatz wurde erfolgreich ge&auml;ndert.",
	"entry_deleted" => "Datensatz wurde erfolgreich gel&ouml;scht.",
	"entry_not_deleted" => "Datensatz kann nicht gel&ouml;scht werden.",
	"entry_canceled" => "Datensatz wurde storniert.",
	"entry_not_canceled" => "Datensatz kann nicht storniert werden.",

	"field_error" => "Feld wurde nicht korrekt ausgef&uuml;llt.",

	"invoice_issued" => "F&uuml;r diesen Datensatz wurde(n) bereits Rechnung(en) / Angebot(e) erstellt.",
	"payment_issued" => "F&uuml;r diesen Datensatz wurde bereits eine Zahlung vorgenommen.<br />
		um die Rechnung zu &auml;ndern, m&uuml;ssen Sie zuerst die Zahlung l&ouml;schen.",
	"position_used" => "Diese Position wird in Rechnung(en) / Angebot(en) verwendet.",
	"offer_used" => "F&uuml;r dieses Angebot wurde bereits eine Rechnung erstellt.<br />
		um das Angebot zu &auml;ndern, m&uuml;ssen Sie zuerst die Rechnung l&ouml;schen.",

	"invalid_date" => "Das Datum ist nicht korrekt. Bitte &uuml;berpr&uuml;fen Sie Ihre Eingabe. z. B. 01.01.1970",


	// Anmeldung
	//
	"login_title" => "Anmeldung",
	"login" => "Anmelden",
	"login_to" => "Anmelden bei",
	"loggedin" => "Angemeldet ist",
	"user_active" => "Benutzer aktiv",
	"fullname" => "Name und Vorname",
	"username" => "Benutzername",
	"usergroup" => "Gruppe",
	"password" => "Kennwort",
	"repeat_password" => "Kennwort wiederholen",
	"password_error" => "Das erste und das zweite Kennwort m&uuml;ssen gleich sein.",
	"login_error" => "Anmeldung fehlgeschlagen. Bitte versuchen Sie es noch einmal.",
	"login_end" => "Abmeldung erfolgreich. Vielen Dank f&uuml;r die Nutzung von",
	"session_end" => "Sitzung beendet. Sie haben zu lange keine Eingaben vorgenommen.",
	"no_permission" => "Sie haben keine Berechtigung um diese Seite anzuzeigen.",


	// Adressbuch
	//
	"print_name" => "Name drucken",
	"prefix" => "Anrede",
	"firstname" => "Vorname",
	"lastname" => "Nachname",
	"title" => "Titel",
	"company" => "Firma",
	"department" => "Abteilung",
	"postalcode" => "PLZ",
	"city" => "ort",
	"country" => "Land",
	"stateprov" => "Bundesland",
	"address" => "Straße",
	"position1" => "Position",
	"initials" => "K&uuml;rzel",
	"salutation" => "Briefanrede",
	"phonehome" => "Tel. (Privat)",
	"phoneoffi" => "Tel. (Durchwahl)",
	"phoneothe" => "Tel. (Andere)",
	"phonework" => "Tel. (Firma)",
	"mobile" => "Tel. (Mobil)",
	"pager" => "Pager",
	"fax" => "Fax",
	"email" => "E-Mail",
	"url" => "Homepage",
	"note" => "Notiz",
	"url2" => "Homepage 2",
	"email2" => "E-Mail 2",
	"altfield1" => "Benutzerfeld 1",
	"altfield2" => "Benutzerfeld 2",
	"cust_method_of_payment" => "Zahlungsweise",
	"birthday" => "Geburtstag z. B. 01.01.1970",
	"select_all" => "Alle",
	"envelope" => "umschlag",
	"issue_invoice" => "Rechnung erstellen f&uuml;r",
	"issue_offer" => "Angebot erstellen f&uuml;r",
	"issue_credit_note" => "Gutschrift erstellen f&uuml;r",
	"customer" => "Kunde",
	"customer_no" => "Kundennr.",
	"customer_no_initials" => "KD",
	"choose_customer" => "Kunde w&auml;hlen",
	"find_customer" => "Eingabe: Vorname, Nachname oder Firma nach der gesucht werden soll.",
	"basic_info" => "Info",
	"extended_info" => "Erweiterte Informationen",
	"auth_info" => "Anmeldeinformationen",


	// E-Mail
	//
	"email_priority" => "Priorit&auml;t",
	"email_from" => "Von",
	"email_to" => "An",
	"email_cc" => "Kopie (Cc)",
	"email_bcc" => "Blinde Kopie (Bcc)",
	"email_subject" => "Betreff",
	"email_text" => "Nachricht",
	"email_send" => "E-Mail senden",
	"email_ok" => "E-Mail wurde gesendet an",
	"email_error" => "Fehler: E-Mail wurde nicht gesendet.",
	"email_html" => "HTML",
	"email_text" => "Text",
	"email_pdf" => "PDF-Anhang",


	// Position Tabelle
	//
	"pos_active" => "Position aktiv",
	"pos_inactive" => "Position inaktiv",
	"pos_all" => "Alle Positionen anzeigen",
	"pos_name" => "Position / Artikel",
	"pos_text" => "Beschreibung",
	"pos_quantity" => "Stunden",
	"pos_price" => "Preis",
	"pos_amount" => "Betrag",
	"pos_choose" => "Position w&auml;hlen",
	"pos_new" => "Neue Position eintragen",
	"pos_print" => "Position drucken",
	"pos_group" => "Gruppe",
	"pos_inventory" => "Lagerbestand",
	"pos_search" => "Eingabe: Position / Artikel oder Beschreibung nach der gesucht werden soll.",


	// Mwst Tabelle
	//
	"tax_divide" => "Dividiert durch",
	"tax_multiply" => "Multipliziert mit",
	"tax_description" => "MwSt.: Beschreibung",


	// Einstellung
	//
	"basic_settings" => "Grundeinstellungen",
	"company_settings" => "Firmen-Einstellungen",
	"pdf_settings" => "PDF-Einstellungen",
	"print_company_data" => "Firmendaten drucken",
	"print_position_name" => "Positionsnamen drucken",
	"print_output" => "Druckausgabe",
	"company_logo" => "Firmenlogo",
	"company_logo_width" => "Firmenlogo Breite",
	"company_logo_height" => "Firmenlogo H&ouml;he",
	"company_name" => "Firmenname",
	"company_address" => "Adresse",
	"company_postal" => "PLZ",
	"company_city" => "Ort",
	"company_country" => "Land",
	"company_phone" => "Telefon",
	"company_fax" => "Telefax",
	"company_email" => "E-Mail",
	"company_url" => "Homepage",
	"company_wap" => "WAP",
	"company_currency" => "W&auml;hrung",
	"company_tax_free" => "Steuerfrei",
	"sales_prices" => "Verkaufspreise sind",
	"company_taxnr" => "Steuernummer",
	"business_taxnr" => "USt-ID",
	"bank_name" => "Bankverbindung",
	"bank_account" => "Konto-Nr.",
	"bank_number" => "BLZ",
	"bank_iban" => "IBAN",
	"bank_bic" => "BIC",
	"email_internal" => "E-Mail intern",
	"email_use_signature" => "Signatur verwenden",
	"email_signature" => "Signatur",
	"stock_active" => "Lagerverwaltung aktiv",
	"reminder" => "Erinnerung",
	"reminder_price" => "Mahngeb&uuml;hr",
	"reminder_days" => "Erinnerung nach Tag(e)",
	"entries_per_page" => "Eintr&auml;ge pro Seite",
	"session_sec" => "Sitzungsdauer Sek.",
	"pdf_font" => "Schriftart",
	"pdf_text1" => "Schriftgr&ouml;ße 1",
	"pdf_text2" => "Schriftgr&ouml;ße 2",
	"pdf_text3" => "Schriftgr&ouml;ße z. B. Rechnung",
	"pdf_dir" => "TMP-Verzeichnis",
	"pdf_attachment_text" => "PDF-Anhang-Text",


	// Angebot
	//
	"save_offer" => "Angebot speichern",
	"print_offer" => "Angebot drucken",
	"print_order" => "Auftrag drucken",
	"change_offer" => "Angebot &auml;ndern",
	"copy_offer" => "Angebot kopieren",
	"status" => "Status",
	"order" => "Auftrag",
	"change_status" => "Status &auml;ndern",
	"offer_initials" => "AN",
	"order_initials" => "Au",
	"offer_number" => "Angebot-Nr.",
	"order_number" => "Auftrag-Nr.",
	"offer_subtotal" => "Zwischensumme Netto",
	"offer_tax1" => "MwSt. 1",
	"offer_tax2" => "MwSt. 2",
	"offer_tax3" => "MwSt. 3",
	"offer_amount" => "Gesamt",
	"email_offer" => "Angebot per E-Mail an:",
	"email_order" => "Auftrag per E-Mail an:",
	"was_send" => "wurde per E-Mail gesendet an",


	// Rechnung
	//
	"save_invoice" => "Rechnung speichern",
	"print_invoice" => "Rechnung drucken",
	"copy_invoice" => "Rechnung kopieren",
	"change_invoice" => "Rechnung &auml;ndern",
	"open_account" => "offener Betrag",
	"invoice_initials" => "RE",
	"invoice_number" => "Rechnung-Nr.",
	"invoice_subtotal" => "Zwischensumme Netto",
	"invoice_tax1" => "USt.",
	"invoice_tax2" => "USt. 2",
	"invoice_tax3" => "USt. 3",
	"invoice_amount" => "Gesamt",
	"transaction" => "Zahlungseingang",
	"invoice_transaction" => "Zahlungseingang f&uuml;r Rechnung-Nr.",
	"open_invoice" => "offene Rechnungen",
	"email_invoice" => "Rechnung per E-Mail an:",
	"invoice_was_send" => "Rechnung wurde per E-Mail gesendet an",
	"open_since" => "offen seit Tag(e)",
	"invoice_deletion" => "Durch das L&ouml;schen dieser Rechnung, w&uuml;rde der Bestand<br />
		des Kassenbuches ins Minus rutschen!",
	"delivery_note" => "Lieferschein",
	"print_delivery_note" => "Lieferschein drucken",
	"delivery_note_initials" => "LS",
	"delivery_note_number" => "Lieferschein-Nr.",
	"email_delivery_note" => "Lieferschein per E-Mail an:",


	// Gutschrift
	//
	"credit_note_number" => "Gutschrift-Nr.",
	"credit_note_redeemed" => "Eingel&ouml;st",
	"credit_note_initials" => "Gu",


	// Zahlung
	//
	"save_payment" => "Zahlung speichern",
	"print_payment" => "Zahlung drucken",
	"change_payment" => "Zahlung &auml;ndern",
	"payment_number" => "Zahlung-Nr.",
	"payment_sum" => "Bezahlt",
	"total_payment" => "Gesamt",
	"card_number" => "Karten-Nr.",
	"valid_thru" => "G&uuml;ltig bis",
	"outstanding_payment" => "Es werden nur Kunden angezeigt deren Rechnungen noch offen sind.",
	"payment_error" => "Zahlung ist bereits vorhanden.",
	"payment_incorrect" => "Zahlung ist nicht korrekt. Zahlung muss der Rechnungssumme entsprechen.",
 	"payment_deletion" => "Durch das L&ouml;schen dieser Zahlung, w&uuml;rde der Bestand<br />
		des Kassenbuches ins Minus rutschen!",


	// Berichte
	//
	"select_report" => "Bericht w&auml;hlen",
	"customer_sales" => "Verk&auml;ufe nach Kunden",
	"position_sales" => "Verk&auml;ufe nach Position/Artikel",
	"invoice_totals" => "Rechnungsausgangsbuch",
	"booking_details" => "Buchungsdetails nach Datum",
	"individual_values" => "Einzelwerte",
	"summary" => "Zusammenfassung",
	"date_from" => "vom",
	"date_till" => "bis",


	// Kassenbuch
	//
	"cash_in_hand" => "Bestand",
	"starting_with" => "Anfangsbestand",
	"takings" => "Einnahmen",
	"expenditures" => "Ausgaben",
	"cashbook_number" => "Belegnr.",
	"cashbook_description" => "Beschreibung",
	"takings_expenditures_error" => "Einnahmen und Ausgaben k&ouml;nnen nicht gleichzeitig ausgef&uuml;llt werden.",
	"cashbook_expenditures" => "Sie k&ouml;nnen nicht mehr Geld ausgeben als in der Kasse vorhanden ist.",

	// Syslog
	//
	"syslog_description" => "Beschreibung",
	"syslog_created" => "Datum / Zeit",
);


// Berichte
//
$reports = array (
	"booking_details.php" => "Buchungsdetails nach - Datum",
	"invoice_ledger.php" => "Rechnungsausgangsbuch",
	"outstanding_accounts.php" => "offene Rechnungen",
	"invoice_ledger_summary.php" => "Verk&auml;ufe nach Kunden - Zusammenfassung",
	"cashbook.php" => "Kassenbuch",
	"position_sales_summary.php" => "Verk&auml;ufe nach Position/Artikel - Zusammenfassung",
	"position_sales.php" => "Verk&auml;ufe nach Position/Artikel - Einzelwerte",
	"outstanding_offers.php" => "Nicht angenommene Angebote"
);


// Kunden-Berichte
//
$customer_reports = array (
	"../reports/customer_booking_details.php" => "Buchungsdetails nach - Datum",
	"../reports/customer_invoices.php" => "Rechnungsausgangsbuch",
	"../reports/customer_outstanding_accounts.php" => "offene Rechnungen"
);


// Sprache
//
$language = array (
	1 => "Deutsch",
	2 => "English",
	3 => "Polnisch",
	4 => "Kroatisch",
	5 => "Franz&ouml;sisch",
	6 => "Italienisch",
	7 => "Spanisch - ES",
	8 => "Niederl&auml;ndisch"
);


// Gruppe
//
$group = array (
	1 => "Root",
	2 => "Manager",
	3 => "Buchhaltung",
	4 => "Angestellter",
	5 => "Benutzer"
);

// Auswahl Ja / Nein
//
$choice_yes_no = array (
	1 => "Ja",
	2 => "Nein"
);

// Druckausgabe
//
$print_output = array (
	1 => "HTML",
	2 => "PDF"
);


// Verkaufspreise
//
$sales_price = array (
	1 => "Netto",
	2 => "Brutto"
);


// E-Mail Prioritaet
//
$email_priority = array (
	3 => "Normal",
	1 => "Hoch",
	5 => "Niederig"
);


// Auftragsstatus
//
$offer_status = array(
	1 => "Nicht angenommen",
	2 => "Auftragsbest&auml;tigung",
	3 => "Rechnung"
);

?>
