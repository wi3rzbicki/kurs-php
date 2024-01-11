<?php

function wypisz_dzien_tygodnia($data)
{
   $day = date("w", mktime (0,0,0,$data['miesiac'],
   $data['dzien'],$data['rok']));
   switch($day){
    case 0:
       echo "niedziela"."<br>";
       break;
    case 1:
        echo "poniedzialek"."<br>";
        break;
    case 2:
        echo "wtorek"."<br>";
        break;
    case 3:
        echo "sroda"."<br>";
        break;
    case 4:
        echo "czwartek"."<br>";
        break;
    case 5:
        echo "piatek"."<br>";
        break;
    case 6:
        echo "sobota"."<br>";
        break;
    default:
        echo "blad"."<br>";
   }
}

function is_adult($data)
{
  $time = (time() - mktime (0,0,0,$data['miesiac'],
  $data['dzien'],$data['rok']));
  echo ($time>60*60*24*365*18) ? "<br>"."pelnoletni" : "<br>"."niepelnoletni";
}


function oblicz_dni($data)
{
  // 60 sekund to 1 minuta, 60 minut to 1 godzina, 
  //24 godziny to 1 dzień
  $czas = (time() - mktime (0,0,0,$data['miesiac'],
  $data['dzien'],$data['rok']))/60/60/24;
  return $czas;
}

function motherday($data)
{
    for($i=0;$i<10;$i++){
        $array[$i] = date("l", mktime (0,0,0,6,26,2023+$i));
        echo "<br>".$array[$i];
    }
}

$data['dzien'] = $_GET['dzien'];
$data['miesiac'] = $_GET['miesiac'];
$data['rok'] = $_GET['rok'];

wypisz_dzien_tygodnia($data);

echo oblicz_dni($data); 
is_adult($data);
motherday($data)

?>