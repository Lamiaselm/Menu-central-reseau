<?php
require_once("../includes/initialiser.php");
if (isset($_GET['id'])) {
 $id =  htmlspecialchars(intval($_GET['id'])) ;
 $detaildomaine = Detaildomaine::trouve_par_id($id);
 $domaines = Domaine::trouve_tous();
}else{
        echo 'Content not found....';
}


?>
                                    
                                    <form  id="Networkupdate"  class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <label class="control-label col-md-3">Image</label>
                                        <div class="input-group col-md-8" style=" margin-bottom: 20px;">
                                            <div class="fileinput fileinput-exists" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 300px; height: 208px; line-height: 200px;"><img src="assets/image/reseau/<?php  if(isset($detaildomaine->img)){  echo  $detaildomaine->img; } else { echo "no_image.jpg"; }?>"></div>

                                               <div >
                                                    <span class="btn btn    default btn-file"><span class="fileinput-new">Choisir Photo</span><span class="fileinput-exists">Changer</span>
                                                    <input type="file" id="file" name="file" />
                                                </span>
                                                    <a href="#" class="btn btn default fileinput-exists" data-dismiss="fileinput">Retirer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-md-3 control-label">Name :</label>
                                        
                                        <div class="input-group col-md-8" >
                                        <input  class="form-control input-sm " name="name"  value="<?php  if(isset($detaildomaine->lib_DetailDomaine)){  echo  $detaildomaine->lib_DetailDomaine; } ?>" >
                                    
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label   class="col-md-3 control-label">URL:</label>
                                        
                                        <div class="input-group col-md-8" >
                                        <input  class="form-control input-sm "  name="url"  value="<?php  if(isset($detaildomaine->url)){  echo  $detaildomaine->url; } ?>" >
                                    
                                    </div>
                                    </div>
                                     <div class="form-group">
                                        <label   class="col-md-3 control-label">Réseaux:</label>
                                        
                                        <div class="input-group col-md-8" >
                                       <select  name="reseaux" placeholder="Select Réseau" class="form-control input-sm select-network" >
                                                        
                                                        <?php
                                                       foreach ($domaines as $domaine) {?>
                                                        <option  value = " <?php echo $domaine->id ; ?> " <?php  if ($detaildomaine->id_Domaine == $domaine->id ) { echo "selected";} ?> > <?php echo $domaine->lib_Domaine; ?> </option>  <?php } ?> </select>
                                    
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label   class="col-md-3 control-label">Description:</label>
                                        
                                        <div class="input-group col-md-8" >
                                         <textarea name="desc" id="desc" class="form-control" rows="5"><?php  if(isset($detaildomaine->description)){  echo  $detaildomaine->description; } ?></textarea>
                                    
                                    </div>
                                    </div>
                                    <input type="hidden" name="id"  value="<?php if (isset($detaildomaine->id)) { echo $detaildomaine->id; }  ?>" />
                                </form>

 <script type="text/javascript">
            $(document).ready(function(){
                 $('#select-network').select2();
            });
            </script> 