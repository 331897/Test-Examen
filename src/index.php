<?php

require __DIR__ . DIRECTORY_SEPARATOR ."..". DIRECTORY_SEPARATOR ."vendor". DIRECTORY_SEPARATOR ."autoload.php";

$aantalBezoekers = 1200;
$prijsTickets = 45;

$benefietAvond = new BenefietAvond();

echo  "Wanneer er ".$aantalBezoekers." bezoekers komen op de benefietavond die ieder ".$prijsTickets." euro hebben uitgegeven aan een ticket, kan er ". 
$benefietAvond->kostenBeneFietConcert(1200 , 45) ." euro worden uitgegeven aan de band die gaat spelen." ;
