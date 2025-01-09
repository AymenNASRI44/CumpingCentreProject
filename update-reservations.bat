@echo off
REM Chemin vers PHP dans XAMPP
set PHP_BIN="C:\xampp\php\php.exe"

REM Chemin vers le projet Symfony
set SYMFONY_PROJECT="C:\xampp\htdocs\projetC"

REM Exécuter la commande Symfony
cd %SYMFONY_PROJECT%
%PHP_BIN% bin/console app:update-expired-reservations >> C:\xampp\htdocs\projetC\var\log\cron.log 2>&1