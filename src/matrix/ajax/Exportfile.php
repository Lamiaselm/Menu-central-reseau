<?php 
require_once("../includes/initialiser.php");
if (isset($_GET['network'])) {
 $network = intval($_GET['network']);
}
if (isset($_GET['pays'])) {
 $pays = intval($_GET['pays']);
}

$datas = Server::trouve_markers_par_pays_network($pays,$network);
$pays = Pays::trouve_par_id($pays);
$detaildomaine = Detaildomaine::trouve_par_id($network);

?>

<table id="export" style="display: none;" >
                <thead>
                <tr>
                  <th>
                     Nom
                  </th>
                  <th>
                     URL
                  </th>
                  <th>
                     Pays
                  </th>
                  <th>
                     Ville
                  </th>
                  <th>
                     Network
                  </th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($datas as $data) { ?>
                <tr>
                  <td>
                     <?php if (isset($data->nom)) { echo $data->nom;} ?>
                  </td>
                  <td>
                    <?php if (isset($data->url_server)) { echo $data->url_server;} ?>
                  </td>
                  <td>
                     <?php if (isset($pays->name)) { echo $pays->name;} ?>
                  </td>
                  <td>
                     <?php if (isset($data->ville)) { echo $data->ville;} ?>
                  </td>
                  <td>

                    <?php if (isset($detaildomaine->lib_DetailDomaine)) { echo $detaildomaine->lib_DetailDomaine;} ?>
                  </td>
                </tr>

                <?php } ?>
                </tbody>
                </table>

 <a style="display: none;" href="javascript:;" id="myLink" onclick="exportTableToExcel('export', 'Liste detail Visite Developpeur')" class="btn red-flamingo">
                <i class="fa fa-file-excel-o"></i> Export Excel </a>

<script type="text/javascript">
     $(document).ready(function(){
          $('#myLink').click();
     });
 </script>

 <script type="text/javascript">
      toastr.success(" Fichier excel télécharger avec succes","Félicitation !");
      </script>


