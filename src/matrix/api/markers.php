<?php 
require_once("../includes/initialiser.php");
	$request_method = $_SERVER["REQUEST_METHOD"];
	$headers = apache_request_headers();
header('Access-Control-Allow-Origin: https://reseau-regional.herokuapp.com');
header('Access-Control-Allow-Origin: https://reseau-technopark.herokuapp.com');
$http_origin = $_SERVER['HTTP_ORIGIN'];

if ($http_origin == "https://reseau-regional.herokuapp.com" || $http_origin == "https://reseau-technopark.herokuapp.com"  || $http_origin == "https://technoparks.djiant.com" ||  $http_origin == "https://regional.djiant.com"||  $http_origin == "https://djiant.com"||   $http_origin == "http://localhost:4200" ||   $http_origin == "https://chambre-commerce.herokuapp.com"||   $http_origin == "https://chambers.djiant.com"||   $http_origin == "https://newspaper.djiant.com"||   $http_origin == "https://local-news-paper-network.herokuapp.com" || $http_origin == "https://technoparks.djiant.com/central"|| $http_origin == "https://cluster.djiant.com"|| $http_origin == "https://economicdevelopmentagencies.djiant.com" )
{  
    header("Access-Control-Allow-Origin: $http_origin");
}
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');
	
	function getMarkers($id)
	{

		if ($id==1) {
			$Continents = Continent::trouve_id_and_name_CCI(); 
		}else{
			$Continents = Continent::trouve_id_and_name();
		}
		
		foreach ($Continents as $Continent) { 
			$Pays = Pays::trouve_par_continent_id_display($Continent->id);
			foreach ($Pays as $Pays){
			$Server = Server::trouve_authorized_markers_par_pays_network($Pays->id,$id);
			$pays[]= array(  	  "id"=>$Pays->id,
							      "nom"=>$Pays->name,
							      "markers" => $Server
							    );
		}
			
			$Contin[] =  array(   "id"=>$Continent->id,
							      "nom"=>$Continent->name,
							      "pays" => $pays
							    );
			unset($pays);
		}

		if ($Continents) {
			$response = array(
   					"Continents" =>$Contin
			     );
	      			http_response_code(200);
 					header('Content-Type: application/json');
			    // tell the user no categories found
			   echo json_encode($response, JSON_PRETTY_PRINT);
			
		}else{
			http_response_code(400);
   				$response = array(
   					"code" => " 400 ",
			     	"message" => " not found");
 
			    // tell the user no categories found
			   echo json_encode($response, JSON_PRETTY_PRINT);
			   exit;

		}
	}
	function getAllMarkers($network)
	{

		$markers = array();
		$marker = array();
		$Servers = Server::trouve_authorized_markers_par_network($network);
		foreach ($Servers as $Server) {
			$pays = Pays::trouve_par_id($Server->pays);
			

			$marker[]=$Server->id;
			$marker[]=$Server->nom;
			$marker[]=$Server->latitude;
			$marker[]=$Server->longitude;
			$marker[]= stripslashes($Server->adr_line_1) ;
			$marker[]=$Server->adr_line_2;
			$marker[]=$Server->adr_line_3;
			$marker[]=$Server->ville;
			$marker[]=$Server->code_postal;
			if (!empty($Server->logo)) {
			$marker[]='https://matrix.djiant.com/assets/image/logo/'.$Server->logo;
			}else{
			$marker[]='assets/gris-window.png';	
			}
			
			$marker[]=$Server->url_server;
			$marker[]=$Server->is_Djiant;
			if (isset($pays->name)) {
			$marker[]=$pays->name; 
			}else { $marker[] = "";}
			$markers [] = $marker; 
			unset($marker);
		}

		if ($Servers) {
			$response = $markers;
	      			http_response_code(200);
 					header('Content-Type: application/json');
			    // tell the user no categories found
			   echo json_encode($response, JSON_PRETTY_PRINT);
			
		}else{
			http_response_code(400);
   				$response = array(
   					"code" => " 400 ",
			     	"message" => " not found");
 
			    // tell the user no categories found
			   echo json_encode($response, JSON_PRETTY_PRINT);
			   exit;

		}
	}



switch($request_method)
	{
		
		case 'GET':
			// Get Domaines
			if(!empty($_GET["marker"]))
			{
				$id=intval($_GET["marker"]);
				getMarkers($id);
			}
			if(!empty($_GET["network"]))
			{
				$network=intval($_GET["network"]);
				getAllMarkers($network);
			}

	}
 ?>