<?php

function zdobadz_email($strona)
{
   // formuła prawidłowego adresu e-mail 
   $sprawdz = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]
   {2,4}$/';

   $plik = fopen($strona,'r'); // otwarcie pliku strony
   // utworzenie naszego pliku
   $moj_plik = fopen('tymczasowy_index.txt','a');
   flock($moj_plik, 2); // blokada pliku

   // przeszukujemy plik dopóki nie znajdziemy sie na końcu
   while(!feof($plik))
   {
      $linia = fgets($plik); // pobieramy jedną linię

      // sprawdzamy, czy znajduje się tam adres e-mail
      // jeśli tak, zapisujemy do naszego pliku
      if (ereg($sprawdz, $linia, $wynik)) 
         fputs($moj_plik, $wynik);
   }
   fclose($plik); // zamykamy plik strony

   // po zapisaniu danych, wskaźnik znajduje się na końcu pliku
   // musimy go przewinąć znów na początek funkcją rewind()
   rewind($moj_plik);

   // zawartość zapisanego pliku wczytujemy do tablicy adresów
   // $adresy, z wykorzystaniem funkcji file
   $adresy = file($moj_plik);

   // procedura wysyłania maila
   $adres = "przyklad@uzycia.pl";
   $tytul = "Adresy e-mail";
   $wiadomosc = "Znalezione adresy e-mail to: $adresy";
   mail($adres, $tytul, $wiadomosc);

   // odblokowanie pliku
   flock($moj_plik, 3);

   // zamknięcie
   fclose($moj_plik);

   // usunięcie, po wysłaniu e-mailem
   unlink($moj_plik);
}

?>