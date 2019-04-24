# JW Probearbeit

## 1. Repository clonen

clone das Repository (https://github.com/raph-ael/jwtest)

## 2. Datenbankverbindung

Setze den Datenbank-Verbindungstyp auf sqlite, die sqlite Datenbank soll unter /tmp/database.sqlite gespeichert werden

## 3. Datenbank Migrationen

Wir wollen eine Restaurant Datenbank erstellen. Schreibe eine Datanbank Migration für eine neue Tabelle `restaurants` 
Wir möchten folgende Felder Speichern: **Name, Stadt, Beschreibung**

## 4. Restaurant anlegen

Der User soll mit einem Klick auf `Neues Restaurant` ein neues Restaurant anlegen können ohne das die Seite bei diesem Vorgang neu geladen wird.

## 5. Listing

Auf der Startseite soll eine Liste aller Restaurants zu sehen sein. Die nach dem anlegen eines Restaurants aktualisiert wird, natürlich auch ohne einen page reload ;)

## Zusatz: Bewertungen

Erstelle eine weitere Datanbank-Tabelle mit einer Migration die Bewertungen speichert, diese Tabelle soll 2 Felder haben **stars, comment** wobei stars eine Zahl zwischen 0 und 5 sein kann. 
Die Tabelle soll natürlich mit der Resetaurant Tabelle verknüpft sein. Ein Restaurant kann dabei viele Bewertungen bekommen.

# Viel Spaß!! :)
