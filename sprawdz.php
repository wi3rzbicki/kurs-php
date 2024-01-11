<?php

function sprawdz_email($email)
{
   $spr = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{1,}$/';
   if(preg_match($spr, $email))
      return true;
   else
      return false;
}

function sprawdz_imie($imie)
{
  $sprawdz = '/^[a-zA-ZŁŚĆŹŻĄĘÓŃąęółśżźćń]+$/';
   if(preg_match($sprawdz, $imie))
   {
      $imie = ucwords(strtolower($imie));
      return $imie;
   }    
   else
      return false;
}

function sprawdz_telefon($telefon)
{
   $sprawdz = '/^[0-9]{9}$/';
   if(preg_match($sprawdz, $telefon))
      return true;
   else
      return false;
}

function sprawdz_tresc($tresc)
{
   $tresc = trim($tresc);
   if(strlen($tresc) < 30)
      return false;
   else
      return $tresc;
}


$email = $_POST['email'];
$imie = $_POST['imie'];
$tel = $_POST['telefon'];
$tresc = $_POST['tresc'];
$blad_danych = false;
$czy = strpos($tresc, "cholera");


function sprawdz_domene($email){
   $mail = explode("@", $email);
   echo "Domena: ".$mail[1]."<br>";
}

if (!sprawdz_email($email))
   {
      echo "Adres e-mail niepoprawny<br>";
      $blad_danych = true;
   }
$imie = sprawdz_imie($imie);
if (!$imie)
   {
      echo "Imię wpisano niepoprawnie<br>";
      $blad_danych = true;
   }
if (!sprawdz_telefon($tel))
   {
      echo "Błędny format telefonu<br>";
      $blad_danych = true;
   }
if ($czy == true){
   echo "Tekst zawiera wulgarne słownictwo.<br>";
   $blad_danych = true;
}
$tresc = sprawdz_tresc($tresc);
if (!$tresc)
   {
      echo "Niepoprawna treść<br>";
      $blad_danych = true;
   }
if ($blad_danych)
   {
      echo "Wystąpił jeden lub więcej błędów podczas przetwarzania danych.<br>";
   }
else
   {
      echo "Imię klienta: $imie;<br>";
      echo "Adres e-mail: $email;<br>";
      echo "Numer telefonu: $tel;<br>";
      echo "Treść: $tresc;<br><br>";
      sprawdz_domene($email);

   }        

?>