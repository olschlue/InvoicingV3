# Branding & Personalisierung

## Übersicht

Alle Personalisierungs-Einstellungen, System-Pfade und Datenbank-Verbindungen für die phpRechnung-Installation sind zentral in der Datei `branding.php` im Root-Verzeichnis zusammengefasst.

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

### System-Pfade
```php
SYSTEM_WEB_URL          // Web-Root URL (z.B. "https://oschlueter.de/bill/test")
SYSTEM_DOCUMENT_ROOT    // Dokumenten-Root Pfad auf dem Server
SYSTEM_TEMPLATE_DIR     // Smarty Template-Verzeichnis
SYSTEM_CONFIG_DIR       // Smarty Konfigurations-Verzeichnis
SYSTEM_CACHE_ROOT       // Cache-Root Verzeichnis
SYSTEM_COMPILE_DIR      // Smarty Compile-Verzeichnis
SYSTEM_CACHE_DIR        // Smarty Cache-Verzeichnis
```

### Datenbank-Verbindung
```php
DB_HOST                 // Datenbank-Hostname
DB_USER                 // Datenbank-Benutzername
DB_PASS                 // Datenbank-Passwort
DB_NAME                 // Datenbank-Name
DB_TYPE                 // Datenbank-Typ (Standard: mysqli)
```

### Sicherheits-Einstellungen
```php
SECURITY_ENCRYPTION_KEY     // Verschlüsselungs-Schlüssel (NICHT nach Inbetriebnahme ändern!)
SECURITY_ENCRYPTION_KEY_OLD // Alter Schlüssel für Migration
```

### System-Einstellungen
```php
SYSTEM_MULTIBAR            // Linkbars nach X Zeilen umschalten (Standard: "25")
SYSTEM_USE_PEAR_MAIL       // PEAR Mail verwenden (1) oder PHP mail() (0)
SYSTEM_ADMIN_ROOT          // Root-Admin-Name (Standard: "admin")
SYSTEM_ADMIN_GROUP_1       // Root-Gruppe ID
SYSTEM_ADMIN_GROUP_2       // Manager-Gruppe ID
SYSTEM_ADMIN_GROUP_3       // Bookkeeping-Gruppe ID
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
- **Smarty Template Engine** (`include/smarty.inc.php`): Für Template-Variablen und Pfade
- **Templates** (`include/smarty/templates/*.tpl`): Über Smarty-Variablen
- **Datenbank-Konfiguration** (`include/dbconf.php`): Für DB-Verbindung
- **Hauptkonfiguration** (`include/phprechnung.inc.php`): Für System-Einstellungen

## Datenbank-Verbindung ändern

1. Öffnen Sie `branding.php`
2. Ändern Sie die Werte unter "DATENBANK-VERBINDUNG":
   ```php
   define('DB_HOST', 'ihr-db-server.com');
   define('DB_USER', 'ihr-benutzername');
   define('DB_PASS', 'ihr-passwort');
   define('DB_NAME', 'ihre-datenbank');
   ```
3. Speichern Sie die Datei

## Web-URL ändern

Wenn Sie die Installation auf einen anderen Server oder Pfad verschieben:

1. Öffnen Sie `branding.php`
2. Ändern Sie `SYSTEM_WEB_URL`:
   ```php
   define('SYSTEM_WEB_URL', 'https://ihre-domain.de/pfad/zur/installation');
   ```
3. Passen Sie bei Bedarf `SYSTEM_DOCUMENT_ROOT` an

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
- **WICHTIG**: Den `SECURITY_ENCRYPTION_KEY` NICHT ändern nach der Inbetriebnahme - sonst ist kein Login mehr möglich!
- **SICHERHEIT**: Stellen Sie sicher, dass `branding.php` nicht öffentlich zugänglich ist (enthält sensible Daten wie DB-Passwort)

## Zentrale Konfiguration - Vorteile

1. **Eine Datei für alle Einstellungen**: Branding, Pfade, Datenbank - alles an einem Ort
2. **Einfache Migration**: Bei Serverumzug nur eine Datei anpassen
3. **Versionskontrolle**: Sensible Daten können über .gitignore ausgeschlossen werden
4. **Übersichtlich**: Alle Konstanten sind dokumentiert und gruppiert

## Support

Bei Fragen zur Personalisierung wenden Sie sich bitte an den Administrator.
