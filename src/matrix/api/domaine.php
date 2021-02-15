<?php
require_once("../includes/initialiser.php");
$request_method = $_SERVER["REQUEST_METHOD"];


function getDomaines()
{
	$domaines = Domaine::trouve_tous();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}

function getNetwork($network)
{
	$reseaux = Detaildomaine::trouve_par_id($network);
		

	if ($reseaux) {
		$response = array(
			"reseaux" => $reseaux
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine($id)
{
	$domaine = Domaine::trouve_par_id($id);
	$reseaux = Detaildomaine::trouve_par_domaine($id);
	foreach ($reseaux as $reseau) {
		$Reseau[] =  array(
			"id" => $reseau->id,
			"nom" => $reseau->lib_DetailDomaine,
			"description" => $reseau->description,
			"img_path" => "https://matrix.djiant.com/assets/image/reseau/" . $reseau->img,
			"url" => $reseau->url,
			"is_popular" => $reseau->is_popular,
			"is_active" => $reseau->is_active,
			"is_new" => $reseau->is_new,
			"logo" => $reseau->logo
		);
	}
	if ($reseaux) {
		$response = array(
			"reseaux" => $Reseau
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}


function getDomaine_notpopular_notactive()
{
	$domaines = Domaine::getDomaine_notpopular_notactive();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}

function  getDomaine_notpopular_active()
{
	$domaines = Domaine::getDomaine_notpopular_active();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine_popular_notactive()
{
	$domaines = Domaine::getDomaine_popular_notactive();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine_popular_active()
{
	$domaines = Domaine::getDomaine_popular_active();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine_popular()
{
	$domaines = Domaine::getDomaine_popular();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine_notpopular()
{
	$domaines = Domaine::getDomaine_notpopular();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine_active()
{
	$domaines = Domaine::getDomaine_active();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine_notactive()
{
	$domaines = Domaine::getDomaine_notactive();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}


function getDomaine_new()
{
	$domaines = Domaine::getDomaine_new();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
function getDomaine_notnew()
{
	$domaines = Domaine::getDomaine_notnew();
	foreach ($domaines as $domaine) {
		$Domaine[] =  array(
			"id" => $domaine->id,
			"nom" => $domaine->lib_Domaine,
			"img_path" => "https://matrix.djiant.com/assets/image/" . $domaine->img,
			"is_popular" => $domaine->is_popular,
			"is_new" => $domaine->is_new,
			"is_active" => $domaine->is_active
		);
	}

	if ($domaines) {
		$response = array(
			"domaines" => $Domaine
		);
		http_response_code(200);
		header('Content-Type: application/json');
		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
	} else {
		http_response_code(400);
		$response = array(
			"code" => " 400 ",
			"message" => " not found"
		);

		// tell the user no categories found
		echo json_encode($response, JSON_PRETTY_PRINT);
		exit;
	}
}
switch ($request_method) {

	case 'GET':
		// Get Domaines
		if (!empty($_GET["id"])) {
			$id = intval($_GET["id"]);
			getDomaine($id);
		} elseif (!empty($_GET["network"])) {
			$network = intval($_GET["network"]);
			getNetwork($network);
		}elseif (isset($_GET["is_popular"]) && isset($_GET["is_active"])) {
			$is_popular = intval($_GET["is_popular"]);
			$is_active = intval($_GET["is_active"]);
			$state = array($is_popular, $is_active);
			switch ($state) {
				case array('1', '1'):
					getDomaine_popular_active();

					break;

				case array('0', '1'):
					getDomaine_notpopular_active();
					break;
				case array("1", "0"):
					getDomaine_popular_notactive();
					break;

				case array('0', '0'):

					getDomaine_notpopular_notactive();
					break;
			}
		} elseif (isset($_GET["is_popular"])) {
			$is_popular = intval($_GET["is_popular"]);
			switch ($is_popular) {
				case 1:
					getDomaine_popular();

					break;

				case 0:
					getDomaine_notpopular();
					break;
			}
		} elseif (isset($_GET["is_active"])) {
			$is_active = intval($_GET["is_active"]);
			switch ($is_active) {
				case 1:
					getDomaine_active();

					break;

				case 0:
					getDomaine_notactive();
					break;
			}
		} elseif (isset($_GET["is_new"])) {
			$is_new = intval($_GET["is_new"]);
			switch ($is_new) {
				case 1:
					getDomaine_new();

					break;

				case 0:
					getDomaine_notnew();
					break;
			}
		} else {
			getDomaines();
		}
		break;
}
