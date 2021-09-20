<?php

require('modele.php');
require('templates/header.php'); 
require('templates/footer.php');
require('templates/diaporama.php');
require('scripts/script.js');
require('templates/passer-commande.php');

$art_header__title = " ";
$art_header__descrp = " ";
$art__plus = " ";
$art_1__title = " ";
$art_1__txt = " ";
$art_2__title = " ";
$art_2__txt = " ";
$art_3__title = " ";
$art_3__txt = " ";
$art_4__title = " ";
$art_4__txt = " ";




ob_start() ;


if(isset($_GET['page'])){
	$page = $_GET['page'] ;
}   
else { 
	$page = 'accueil';
}


switch($page) :

	case 'accueil' :
   		$title = "Site perso :: Accueil" ;
		include 'pages/accueil.php' ;

	break;
   
   	
	case 'nos-vins' :
		$art_page = 'nos-vins';

		include 'pages/cote-cave/nos-vins.php' ;
		include ('templates/template-art.php');

	break;

	case 'nos-bieres' :
		$art_page = 'nos-bieres';
		include 'pages/cote-cave/nos-bieres.php';
		include 'templates/template-art.php';

	break;

	case 'whiskys-spiritueux':
		$art_page = 'whiskys-spiritueux';
		include 'pages/cote-cave/whiskys-spiritueux.php';
		include 'templates/template-art.php';
	
	break;

	case 'bons-cadeaux':
		$art_page = 'bons-cadeaux';
		include 'pages/cadeaux/bons-cadeaux.php';
		include 'templates/template-art.php';

	break;

	case 'cours-oenologie':
		$art_page = 'cours-oenologie';
		include 'pages/cadeaux/cours-oenologie.php';
		include 'templates/template-art.php';

	break;

	case 'paniers-garnis':
		$art_page = 'paniers-garnis';
		include 'pages/cadeaux/paniers-garnis.php';
		include 'templates/template-art.php';

	break;

	case 'et-aussi':
		$art_page = 'et-aussi';
		include 'pages/epicerie-fine/et-aussi.php';
		include 'templates/template-art.php';
	
	break;

	case 'thes-cafes':
		$art_page = 'thes-cafes';
		include 'pages/epicerie-fine/thes-cafes.php';
		include 'templates/template-art.php';
		
	break;

	case 'commande-en-ligne':
		$art_page = 'commande-en-ligne';
		include 'pages/nos-services/commande-en-ligne.php';
		include 'templates/template-art.php';
    
	break;

	case 'location':
		$art_page = 'location';
		include 'pages/nos-services/location.php';
		include 'templates/template-art.php';

	break;

	case 'mariage-reception':
		$art_page = 'mariage-reception';
		$alert_msg = "en-cours";
		include 'pages/nos-services/mariage-reception.php';
		include 'templates/template-art.php';
	
	break;

	case 'contact':
		$art_page = 'contact';
		$alert_msg = "en-cours";
		include 'pages/contact.php';
		include 'templates/template-art.php';

	break;

	case 'qui':
		$art_page = 'qui';
		$alert_msg = "en-cours";
		include 'pages/qui.php';
		include 'templates/template-art.php';
	break;
		

	default :
   		
   		$alert_msg = "en-cours";
		include 'pages/accueil.php' ;
		 
	break;

endswitch ;


$content = ob_get_clean() ;


require('templates/template.php');
 ?>


	





