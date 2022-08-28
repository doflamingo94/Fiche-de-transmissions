<?php

require_once('model/Manager.php');

class FicheManager extends Manager
{
	function addTransmission($agence, $client, $interlocuteur, $message, $code, $signature)
	{
		
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO fiche(agence, client, interlocuteur, message, code, signature, date_fiche) VALUES(?, ?, ?, ?, ?, ?, NOW())');

		$insert = $req->execute(array($agence, $client, $interlocuteur, $message, $code, $signature));

		return $insert;
	}

	function todayFiche()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, agence, client, interlocuteur, message, code, signature, date_fiche FROM fiche WHERE date_fiche = CURDATE() ORDER BY agence');
		return $req;
	}

	function lineFiche($id)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT id, agence, client, interlocuteur, message, code, signature, date_fiche FROM fiche WHERE id = ?');

		$req->execute(array($id));

		$line = $req->fetch();

		return $line;
	}

	function lineModif($id, $agence, $client, $interlocuteur, $message, $code, $signature)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('UPDATE fiche SET agence = ?, client = ?, interlocuteur = ?, message = ?, code = ?, signature = ? WHERE id = ?');

		$req = $req->execute(array($agence, $client, $interlocuteur, $message, $code, $signature, $id));
	}

	function deleteLine($id)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('DELETE FROM fiche WHERE fiche . id = ?');
		$req = $req->execute(array($id));

		return $req;
	}

	function searchFiche($agence, $date_fiche)
	{
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT id, agence, client, interlocuteur, message, code, signature, date_fiche FROM fiche WHERE agence = ? AND date_fiche = ?');

		$req->execute(array($agence, $date_fiche));


		return $req;
	}

}



