<?php
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Not Submitted/Nie Gestuur nie";
  die();
}
set_error_handler("customError");

if (isset($_POST['submit'])){

if(!isset($_POST['goal'])){$goal = " ";}
else{$goal = preg_replace("/,/",";",$_POST['goal']);
     $goal = preg_replace("/\s+/", " ", $goal);}
if(!isset($_POST['bedankings'])){$bedank = " ";}else{$bedank = $_POST['bedankings'];}
if(!isset($_POST['Aanstellings'])){$aanstel = " ";}else{$aanstel = $_POST['Aanstellings'];}
if(!isset($_POST['Sosiale'])){$sosiale = " ";}else{$sosiale = $_POST['Sosiale'];}
if(!isset($_POST['Albert'])){$albert = " ";}else{$albert = $_POST['Albert'];}
if(!isset($_POST['Geboortes'])){$geboorte = " ";}else{$geboorte = $_POST['Geboortes'];}
if(!isset($_POST['Sport'])){$sport = " ";}else{$sport = $_POST['Sport'];}
if(!isset($_POST['Buitelandse'])){$buiteland = " ";}else{$buiteland = $_POST['Buitelandse'];}
if(!isset($_POST['Ander'])){$ander = " ";}
else{$ander = preg_replace("/,/",";",$_POST['Ander']);
     $ander = preg_replace("/\s+/", " ", $ander);}
if(!isset($_POST['voorstelle'])){$voorstelle = " ";}
else{$voorstelle = preg_replace("/,/",";",$_POST['voorstelle']);
     $voorstelle = preg_replace("/\s+/", " ", $voorstelle);}

$cs = ",";
$nl = "\n";

if(!file_exists("grapevine_survey.csv")){
  $createHeadings = fopen("grapevine_survey.csv", "w+") or die("Unable to open file!");
  $txt = "Plaas/Kantoor,Geslag,Ouderdom,GrapevineLees,GrapevineDoel,Bedankings,Aanstellings,SosialeGeleenthede,".
  "AlbertHeijn,Geboortes/Troues/Verlowings,Sportprestasies,BuitelandseAktiwiteite,Ander,Artikels,Voorstelle";
  fwrite($createHeadings,$txt);
  fclose($createHeadings);
}
$myfile = fopen("grapevine_survey.csv", "a+") or die("Unable to open file!");
$txt = $nl.$_POST['office'].$cs.$_POST['gender'].$cs.$_POST['age'].$cs.$_POST['grapevine'].$cs.
       $goal.$cs.$bedank.$cs.$aanstel.$cs.$sosiale.$cs.$albert.$cs.$geboorte.$cs.$sport.
       $cs.$buiteland.$cs.$ander.$cs.$_POST['ArticlesRadio'][0].$cs.$voorstelle;

fwrite($myfile,$txt);
fclose($myfile);
echo "<h2 class='message'>Gestuur Dankie/Submitted Thank You</h2>";
}

?>
