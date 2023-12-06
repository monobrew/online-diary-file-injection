# Przygotowanie środowiska
Do wykonania zadań potrzebne będzie narzędzie do konteneryzacji **docker-desktop**, które można pobrać ze strony:
```
https://www.docker.com/products/docker-desktop/
```

##  Uruchomienie serwisu strony internetowej
Należy uruchomić narzędzie docker-desktop lub na linuxie wykonać polecenie 
```sh
sudo systemctl start docker.service
```

Następnie należy otworzyć katalog główny repozytorium w powłoce powershell pod windowsem i dowolnej powłoce pod linuxem i wykonać polecenie:
```sh
docker compose up --build
```

Należy poczekać aż docker zakończy pobieranie i konfigurację obrazów.

Po zakończeniu strona powinna być dostępna pod adresem http://localhost/

# Zad 1
Celem tego zadania jest przeprowadzenie rekonesansu strony internetowej i znalezienie potencjalnych podatności typu file injection.

Należy utworzyć nowego użytkownika i zalogować się na niego.

Po udanym logowaniu w zakładce notes używając "inspect element" i wrzucając własne pliki sprawdzcie pod jakimi nazwami serwer przechowuje wrzucone obrazy i gdzie są one przetrzymywane.

- W jakim katalogu są przechowywane obrazy wyświetlone na stronie
- Opisz słownie konwencję nazewnictwa przesłanych plików

# Zad 2
Utwórz lokalnie plik .php, który wyświetli zawartość katalogu public/ serwera.
Przydatne funkcje php:
 - print_r()
 - scandir()
 - getcwd()

Korzystając z podatności file injection umieść swój plik na serwerze. Korzystając ze ścieżki znalezionej w poprzednim zadaniu wywołaj swój plik pod nazwą którą możesz sprawdzić w oparciu o poprzednie zadanie.

- Prześlij skrypt php wyświetlający listę wszystkich plików php w katalogu głównym (public/) serwera www

# Zad 3

Wyświetl zawartość pliku config.inc.php 
Przydatna funkcja php - file_get_contents()

- Prześlij skrypt php użyty do wyświetlenia zawartości pliku config.inc.php

# Zad 4
Wykorzystaj informacje znalezione w pliku config.inc.php do wyświetlenia zawartości tabeli users w bazie danych.
Do wykonania polecenia SQL możesz użyć rozszerzenia PDO załadowanego na tym serwerze:
```php
<?php
require_once __DIR__.'/../../../composer/vendor/autoload.php';

$db_host = '--';
$db_name = '--------';
$db_user = '--------';
$db_password = '------';

$dbh = new PDO('pgsql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
$sth =$dbh->prepare('---------polecenie sql---------');
$sth->execute();

while($row = $sth->fetch(PDO::FETCH_NUM)) {
    echo $row[0]. '<br>';
}
```
- Prześlij skrypt php zwracający listę loginów wszystkich użytkowników
