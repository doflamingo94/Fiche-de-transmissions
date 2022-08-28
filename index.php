<?php 

require('controller/frontend.php');

try
{
	if (isset($_GET['action']))
	{
		if ($_GET['action'] == 'creer')
		{
			creerFiche();
		}

		elseif ($_GET['action'] === 'consulter')
		{
			optionConsult();
		}

		elseif ($_GET['action'] == 'inserer')
		{

			if (empty($_POST['agence']) OR empty($_POST['message']) OR empty($_POST['code']) OR empty($_POST['signature'])) 
			{
				header('Location: index.php?action=creer&amp;erreur=empty');
				exit();
			}

			elseif ($_POST['code'] < 0 OR $_POST['code'] > 3)
			{
				header('Location: index.php?action=creer&amp;erreur=badcode');	
				exit();			
			}	

			elseif (!empty($_POST['agence']) && !empty($_POST['message']) && !empty($_POST['code']) && !empty($_POST['signature']))
			{
					
				insert($_POST['agence'], $_POST['client'], $_POST['interlocuteur'], $_POST['message'], $_POST['code'], $_POST['signature']);
					
			}
		}

		elseif ($_GET['action'] === 'now') 
		{
			today();
		}

		elseif ($_GET['action'] === 'modif' && isset($_GET['id']))
		{
			modification($_GET['id']);
		}

		elseif ($_GET['action'] === 'change' && isset($_GET['id']))
		{
			if (empty($_POST['agence']) OR empty($_POST['message']) OR empty($_POST['code']) OR empty($_POST['signature'])) 
			{
				modification($_GET['id']);
			}

			elseif ($_POST['code'] < 0 OR $_POST['code'] > 3)
			{
				modification($_GET['id']);			
			}	 

			elseif (!empty($_POST['agence']) && !empty($_POST['message']) && !empty($_POST['code']) && !empty([$_POST['signature']]))
			{
					
					
						saveModif($_GET['id'], $_POST['agence'], $_POST['client'], $_POST['interlocuteur'], $_POST['message'], $_POST['code'], $_POST['signature']);
					
			}
		}

		elseif ($_GET['action'] === 'delete' && isset($_GET['id']))
		{
			lineDelete($_GET['id']);
		}

		elseif ($_GET['action'] === 'ancienne' && isset($_POST['agence']) && isset($_POST['date_fiche']))
		{
			cibleFiche($_POST['agence'], $_POST['date_fiche']);
		}




	}

	else
	{
		require('views/accueil.php');
	}
}

Catch(Exception $e)
{
	echo "Erreur : " . $e->getMessage();
}