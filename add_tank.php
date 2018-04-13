<?php require_once 'core/_init.php'; ?>
<?php 

    if(isset($_POST['add_tank_info'])){
       // $message = array('info' => 'success');
        $data = array(
            'tank_name' => $_POST['tank_named'],
            'tank_type_id' => $_POST['sel_tank_type']
        );
        if($tank->get_empty_fields($data) == true){
            echo '<script>alert("Empty fields!")</script>';
        }else{
            $tank_named = $tank->add_tank_container($data);
            // if($tank_named){
            //      echo '<script>alert("Success fields!"); window.location="tank_settings.php";</script>';
            // }
        }
    } 
?>
<?php include 'header.php'; ?>
        <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-monitor"></i> Dashboard <small>Welcome, Rustom Clemente</small></h2>
                <p class="pagedesc"></p>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
            
            <div id="page-content" class="page-content">
                <section>
                  <form id="tank_adding" name="tank_adding" method="POST" action="add_tank.php">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Adding New Tank</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
                  <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-prison"></i> Tank Information</h4>
                                   
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                       
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <fieldset>
                                                        <ul class="form-list">
                                                              <li class="control-group">
                                                                <label for="sel_tank_type" class="control-label">Type of Tank</label>
                                                                <div class="controls">
                                                                    <select id="sel_tank_type" class="selectpicker input-block-level" data-style="btn-boo" name="sel_tank_type">
                                                                          <?php foreach ($tank->get_tank_type() as $row):?>
                                                                            <option value="<?php echo $row['tank_type_id']; ?>"><?php echo $row['tank_class_name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </li>

                                                            <li class="control-group">
                                                                <label for="tank_named" class="control-label">Tank Description</label>
                                                                <div class="controls">
                                                                    <textarea id="tank_named" class="input-block-level" rows="2" placeholder="Enter description..." name="tank_named"></textarea>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input --> 
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget --> 
                
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Close</button>
            <input type="submit" class="btn btn-green info" name="add_tank_info" value="Submit">
        </div>
</form>

                    
                </section>
               
            </div>
            <!-- // page content --> 
            
        </div>
        <!-- // main-content --> 
        
    </div>
    <!-- // main-container  -->

<?php include 'footer.php'; ?>