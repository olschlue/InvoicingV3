# Branding & Personalisierung

## Übersicht

Alle Personalisierungs-Einstellungen für die phpRechnung-Installation sind zentral in der Datei `branding.php` im Root-Verzeichnis zusammengefasst.

## Konfigurationsdatei: branding.php

### Firmen-/Projekt-Name
```php
BRANDING_COMPANY_NAME    // Der vollständige Firmenname (z.B. "Schlüter & Friends")
BRANDING_APP_NAME        // Der Name der Anwendung im Header (z.B. "S&F Invoicing")
```

### Logo-Einstellungen
```php
BRANDING_LOGO_PATH       // Pfad zum Logo (relativ zum Web-Root, z.B. "images/logo.png")
BRANDING_LOGO_MAX_HEIGHT // Maximale Höhe des Logos (z.B. "60px")
```

### Farbschema
Die folgenden Farben können angepasst werden:

```php
BRANDING_COLOR_PRIMARY          // Hauptfarbe (Orange: #f97c24)
BRANDING_COLOR_PRIMARY_HOVER    // Hover-Farbe für Buttons (Orange dunkel: #ff6a00)
BRANDING_COLOR_SECONDARY        // Sekundäre Akzentfarbe (#ff6900)

BRANDING_COLOR_TEXT_DARK        // Dunkelgrau für Haupttext (#2c3e50)
BRANDING_COLOR_TEXT_LIGHT       // Mittelgrau für Sekundärtext (#495057)
BRANDING_COLOR_TEXT_MUTED       // Hellgrau für unwichtige Texte (#6c757d)

BRANDING_COLOR_BACKGROUND       // Hintergrundfarbe (#ffffff)
BRANDING_COLOR_BACKGROUND_LIGHT // Helle Hintergrundfarbe (#f8f9fa)
BRANDING_COLOR_BORDER           // Border-Farbe (#e9ecef)

BRANDING_COLOR_SUCCESS          // Erfolgsfarbe (#28a745)
BRANDING_COLOR_ERROR            // Fehlerfarbe (#dc3545)
```

### Layout-Einstellungen
```php
BRANDING_MENUBAR_WIDTH   // Breite der Seitenleiste (z.B. "200px")
BRANDING_SPACER_WIDTH    // Breite der Zwischenspalten (z.B. "20px")
```

### Weitere Einstellungen
```php
BRANDING_FONT_FAMILY     // Schriftart (CSS Font Stack)
BRANDING_VERSION         // Version der Anwendung
BRANDING_COPYRIGHT_YEAR  // Copyright-Jahr
```

## Anwendung der Einstellungen

### 1. Firmenname
Der Firmenname wird automatisch in allen Sprachdateien verwendet:
- Deutsch: "Willkommen bei [BRANDING_COMPANY_NAME]"
- Englisch, Französisch, Italienisch, Spanisch, etc.

### 2. Logo und App-Name
Das Logo und der App-Name werden im Header ([htable.tpl](include/smarty/templates/htable.tpl)) angezeigt.

### 3. Farben
Die Farben werden dynamisch in die CSS-Datei eingefügt. Um die Farben zu ändern:
1. Öffnen Sie `branding.php`
2. Ändern Sie die gewünschten Farbwerte (Hex-Format: #RRGGBB)
3. Speichern Sie die Datei

Die Änderungen werden sofort auf der gesamten Website sichtbar.

## Integration in bestehende Dateien

Die Branding-Konfiguration wird automatisch geladen in:
- **Sprachdateien** (`include/language/*.php`): Für den Firmennamen
- **Smarty Template Engine** (`include/smarty.inc.php`): Für Template-Variablen
- **Templates** (`include/smarty/templates/*.tpl`): Über Smarty-Variablen

## Logo austauschen

1. Platzieren Sie Ihr neues Logo im Verzeichnis `images/`
2. Öffnen Sie `branding.php`
3. Ändern Sie `BRANDING_LOGO_PATH` auf den neuen Pfad (z.B. "images/ihr-logo.png")
4. Optional: Passen Sie `BRANDING_LOGO_MAX_HEIGHT` an

## Farben ändern

### Beispiel: Farbe von Orange zu Blau ändern
```php
// Vorher (Orange)
define('BRANDING_COLOR_PRIMARY', '#f97c24');
define('BRANDING_COLOR_PRIMARY_HOVER', '#ff6a00');

// Nachher (Blau)
define('BRANDING_COLOR_PRIMARY', '#007bff');
define('BRANDING_COLOR_PRIMARY_HOVER', '#0056b3');
```

## Hinweise

- Alle Farbwerte müssen im Hex-Format (#RRGGBB) angegeben werden
- Änderungen in `branding.php` werden sofort wirksam
- Die ursprüngliche CSS-Datei (`include/phprechnung.css`) bleibt unverändert
- Für erweiterte Anpassungen können Sie zusätzliche CSS-Regeln hinzufügen

## Support

Bei Fragen zur Personalisierung wenden Sie sich bitte an den Administrator.
