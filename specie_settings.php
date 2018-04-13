<?php include 'header.php'; ?>

        <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="aweso-icon-list-alt"></i> Specie Settings <small> </small></h2>
                <p class="pagedesc">Set your specie here.</p>
                <div class="page-bar">
                    <div class="btn-toolbar">
                        <ul class="nav nav-tabs pull-right">
                            <li class="active" id="user-tab"> <a href="#TabTop1" data-toggle="tab">Specie Type</a> </li>
                          
                        </ul>
                    </div>
                </div>
            </div>
            <!-- // page head -->
            
            <div id="page-content" class="page-content tab-content overflow-y">
                <div id="TabTop1" class="tab-pane padding-bottom30 active fade in">
                    <div class="page-header">
                        <h3><i class="fontello-icon-cog-4 opaci35"></i> Specie Type Settings
                    </div>
                    <div class="row-fluid">
                        <div class="span8 grider">
                            <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-logo-db"></i> Specie Properties <small>edit or new Specie</small></h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                    	<?php
                                    		
                                            if(isset($_POST['add_specie_type'])){
                                            	$ttype_fields = array(
                                            		0 => $_POST['specie_class'],
                                            		1 => $_POST['specie_name'],
                                                    2 => $_POST['specie_description']
                                            		
                                             	);

                                             	if ($specie->get_empty_fields($ttype_fields) == true){
                                                    if($ttype_fields[0] === '__Select Classification__'){
                                                        $ttype_fields[0] = 'Agnatha';
                                                    }
                                             		echo '<script>alert("Empty fields!"); window.location="specie_settings.php";</script>';
                                             	}else{
                                             		$added = $specie->add_specie_type($ttype_fields);
                                        			if($added){
                                        				echo '<script>alert("Successfully added!")</script>';
                                        			}
                                             	}
                                             
                                            }

                                        ?>
                                        <form id="specie_type_form" class="form-horizontal" method="post" action="specie_settings.php" >
                                            
                                            <div class="row-fluid">
                                                <div class="span12 form-dark">

                                                    <fieldset>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            
                                                            <!-- // section form divider -->
                                                            
                                                            <li class="control-group">
                                                                <label for="specie_class" class="control-label">Specie Class<span class="required">*</span></label>
                                                                <div class="controls">
                                                            
                                                                    <select id="specie_class" class="selectpicker input-block-level span6" data-style="btn-boo" name="specie_class">
                                                                     <?php foreach ($specie->get_specie_class() as $sp_class):?>
                                                                        <option value="<?php echo $sp_class['specie_class_id']; ?>"><?php echo $sp_class['specie_class_name']; ?></option>
                                                                      <?php endforeach; ?>
                                                                    </select>
                                                                    <div id="selected_result"></div>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li id="lt" class="control-group">
                                                                <label for="specie_name" class="control-label">Specie Subclass Name<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="specie_name" class="span11" type="text" name="specie_name" value="">
                                                                </div>
                                                            </li>
                                                            <li id="ht" class="control-group">
                                                                <label for="specie_description" class="control-label">Description<span class="required">*</span></label>
                                                              
                                                                <div class="controls">
                                                                    <textarea id="specie_description" class="input-block-level" rows="2" placeholder="Enter Description" name="specie_description"></textarea>
                                                                </div>
                                                            </li>
                                                        
                                                            
                                                        </ul>
                                                    </fieldset>
                                                 
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input -->
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-blue" name="add_specie_type">Submit & Validate</button>
                                                     
                                                  
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                         
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget --> 
                            
                        </div>
                        <!-- // Column -->
                       
                       
                            <div class="well well-nice span4  padding-bottom5 clearfix">
                                <h4 class="simple-header"><span id="box1Counter" class="countLabel pull-right"></span>Specie Subclass List </h4>
                                <div class="input-append append-percent form-dark">
                                    <input type="text" id="box1Filter" style="width:70%" placeholder="Search filter">
                                    <button id="box1Clear" class="btn btn-yellow" type="button" style="width:30%"><i class="fontello-icon-filter hidden-tablet"></i> Clear</button>
                                </div>
                                <select id="specie_subclass" multiple="multiple" class="input-block-level" style="height:150px" name="specie_subclass">
                                  <?php foreach ($specie->get_specie_subclass() as $row): ?>
                                  	<option value="<?php echo $row['subclass_id'];?>"><?php echo $row['subclass_name'];?></option>
                                  <?php endforeach; ?>
                                </select>
                                <!-- // Select list 1 -->
                                
                                <ul class="listbox-menu inline pull-right">
                                    <li>
                                        <button id="to2" class="btn" type="button" style="width:75px"><i class="fontello-icon-to-end-1 hidden-phone"></i><span class="visible-phone"> copy</span></button>
                                    </li>
                                  
                                    <li>
                                        <button id="allTo2" class="btn" type="button"><i class="fontello-icon-to-end-alt hidden-phone"></i><span class="visible-phone"> copy All</span></button>
                                    </li>
                                    <li> <a id="adding_specie_class_info" class="btn btn-green" data-toggle="modal"><i class="fontello-icon-plus-4"></i> Add New</a>
</li>
                                    

                                </ul>
                                <!-- // Action for select 1 -->
                                
                               
                            </div>
                            <!-- // Column -->
                            
                   
                        
                 

                        <div class="span4 grider">
                            
                            <!-- // Widget -->
                            
                            <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-wrench-2"></i> Next setting for Account </h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="formNextAccountSettings" class="form-condensed">
                                            <fieldset>
                                                <ul class="form-list">
                                                    <li class="control-group">
                                                        <label for="accountForce" class="control-label">Force account - select date (from - to)</label>
                                                        <div class="controls">
                                                            <input id="accountForce" class="input-block-level margin-00" type="text" name="accountForce" value="">
                                                            <span class="help-block">Bootstrap daterangepicker</span> </div>
                                                    </li>
                                                    <!-- // form item -->
                                                    
                                                    <li class="control-group">
                                                        <label for="accountWebsite_id" class="control-label">Associate to Website</label>
                                                        <div class="controls">
                                                            <select id="accountWebsite_id" class="selecttwo-full" name="account[website_id]">
                                                                <option value="">Please Select</option>
                                                                <option selected="selected" value="0">Admin</option>
                                                                <option value="1">Main Website</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <!-- // form item -->
                                                    
                                                    <li class="control-group">
                                                        <label for="accountCreated_in" class="control-label">Created From</label>
                                                        <div class="controls">
                                                            <input id="accountCreated_in" class="input-block-level" type="text" name="account[created_in]" value="Admin" disabled="disabled">
                                                        </div>
                                                    </li>
                                                    <!-- // form item -->
                                                    
                                                    <li class="control-group">
                                                        <label for="accountGroup" class="control-label">Customer Group</label>
                                                        <div class="controls">
                                                            <input id="accountGroup" class="" type="text" name="accountGroup" />
                                                            <label for="disableGroup_change" class="checkbox margin-top5">
                                                                <input id="disableGroup_change" class="checkbox" type="checkbox" value="1" name="account[disableGroup_change]">
                                                                Disable Automatic Group Change</label>
                                                        </div>
                                                    </li>
                                                    <!-- // form item -->
                                                    
                                                </ul>
                                            </fieldset>
                                            <!-- // fieldset Input -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget --> 
                            
                        </div>
                        <!-- // Column --> 
                        
                    </div>
                    <!-- // Example row --> 
                </div>
                <!-- // Example TAB 1 -->
                
               
                
            </div>
            <!-- // page content --> 
            
        </div>
        <!-- // main-content --> 
        
    </div>
    <!-- // main-container  -->

	<div id="adding_specie_class" class="modal hide fade" data-width="440" tabindex="-1"></div>



<!-- ==========# ADD NEW TANK (Modal) #=========== -->

<?php include 'footer.php'; ?>
<script>
	$("#check_valid").click(function(){
		alert("Click!");
	});

	$("#specie_class").change(function(){
		var str = "";
		$("#specie_class option:selected").each(function(){
			if($(this).val() === "Circular"){
				$("#lt").hide();
				$("#wt").hide();
				$("#rd").show();
			}else{
				$("#lt").show();
				$("#wt").show();
				$("#rd").hide();
			}
		});
		
	})
	.change();

$('#specie_subclass') 
</script>