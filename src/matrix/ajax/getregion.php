<?php
require_once("../includes/initialiser.php");
if (isset($_GET['id'])) {
 $id = intval($_GET['id']);
 $pays = array('74','38','104','230');
}
                                                if (in_array($id,$pays)) {
                                                 $Regions = Region::trouve_region_par_id_pays($id);
                                                 ?>

                                                        <label class="col-md-3 control-label text-left">Region</label>
                                                     <div class="col-md-9 ">
                                                        <select id='id_region' name="region"  placeholder="Région" style='font-size: small;'  class='form-control select2me input-sm'>
                                                                
                                                    <?php  foreach ($Regions as $Region) { echo "<option value = '".$Region->id."'>".$Region->name."</option>";}; ?>            
                                                        </select>
                                                       
                                                    </div>
                                        
        <script type="text/javascript">
            $(document).ready(function(){
                $('#id_region').select2();
            });
            </script> 


            <?php } ?>