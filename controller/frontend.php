<?php

require_once('model/FicheManager.php');


function creerFiche()
{
	require('views/creerFiche.php');
}

function optionConsult()
{
	require('views/optionConsulter.php');
}

function insert($agence, $client, $interlocuteur, $message, $code, $signature)
{
	$fiche = new FicheManager();

	$ligneajoutee = $fiche->addTransmission($agence, $client, $interlocuteur, $message, $code, $signature);

	if ($ligneajoutee === false)
	{
		header('Location: views/erreur.php');
		
	}

	else
	{
		$fiche = new FicheManager();

		$req = $fiche->todayFiche();

		require('views/ficheaujourdhui.php');
	}
}

function today()
{
	$fiche = new FicheManager();

	$req = $fiche->todayFiche();

	require('views/ficheaujourdhui.php');
}

function modification($id)
{
	$fiche = new FicheManager();

	$req = $fiche->lineFiche($id);

	require('views/viewModif.php');
}

function saveModif($id, $agence, $client, $interlocuteur, $message, $code, $signature)
{
	$fiche = new FicheManager();

	$lignemodifie = $fiche->lineModif($id, $agence, $client, $interlocuteur, $message, $code, $signature);

	if ($lignemodifie === false)
	{
		header('location: views/erreur.php');
	}

	else 
	{
		$req = $fiche->todayFiche();

		require('views/ficheaujourdhui.php');
	}
}

function lineDelete($id)
{
	$fiche = new FicheManager();

	$fiche->deleteLine($id);

	

	
		$req = $fiche->todayFiche();

		require('views/ficheaujourdhui.php');
	
}

function cibleFiche($agence, $date_fiche)
{
	$fiche = new FicheManager();

	$req = $fiche->searchFiche($agence, $date_fiche);

	
		require('views/ficheArchive.php');
	

	
}
