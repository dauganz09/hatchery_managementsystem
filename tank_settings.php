  <?php include 'header.php'; ?>

        <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="aweso-icon-list-alt"></i> Tank Settings <small> </small></h2>
                <p class="pagedesc">Set your tanks for here.</p>
                <div class="page-bar">
                    <div class="btn-toolbar">
                        <ul class="nav nav-tabs pull-right">
                            <li class="active" id="user-tab"> <a href="#TabTop1" data-toggle="tab">Tank Type</a> </li>
                            <li id="articles-tab"> <a href="#TabTop2" data-toggle="tab">Tank Containers</a> </li>
                            <!--<li id="wizard-tab"> <a href="#TabTop3" data-toggle="tab">Wizard</a> </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- // page head -->

            <div id="page-content" class="page-content tab-content overflow-y">
                <div id="TabTop1" class="tab-pane padding-bottom30 active fade in">
                    <div class="page-header">
                        <h3><i class="fontello-icon-cog-4 opaci35"></i> Tank Type Settings
                    </div>
                    <div class="row-fluid">
                        <div class="span12 grider">
                            <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-layers"></i> Tank Properties <small>edit or new Tank</small></h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                    	<?php

                                            if(isset($_POST['add_tank_type'])){
                                            	$ttype_fields = array(
                                            		0 => $_POST['tank_name'],
                                            		1 => $_POST['tank_shape'],
                                            		2 => $_POST['tank_length'],
                                            		3 => $_POST['tank_height'],
                                            		4 => $_POST['tank_width'],
                                            		5 => $_POST['tank_radius']
                                             	);

                                             	if ($tank->get_empty_fields($ttype_fields) == false){
                                             		echo '<script>alert("Empty fields!")</script>';
                                             	}else{
                                             		$added = $tank->add_tank_type($ttype_fields);
                                        			if($added){
                                        				echo '<script>alert("Successfully added!")</script>';
                                        			}
                                             	}

                                            }

                                        ?>
                                        <form id="tanktypeinfo" class="form-horizontal" method="post" action="tank_settings.php" >

                                            <div class="row-fluid">
                                                <div class="span12 form-dark">

                                                    <fieldset>
                                                        <ul class="form-list label-left list-bordered dotted">

                                                            <!-- // section form divider -->

                                                            <li class="control-group">
                                                                <label for="tank_name" class="control-label">Tank Class Name<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="tank_name" class="span6" type="text" value="" name="tank_name">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="tank_shape" class="control-label">Tank Shape <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <select id="tank_shape" class="selectpicker input-block-level span6" data-style="btn-boo" name="tank_shape">
                                                                        <option value="">--</option>
                                                                        <option value="Square">Square</option>
                                                                        <option value="Circular">Circle</option>
                                                                        <option value="Rectangular">Rectangle</option>
                                                                        <option value="Triangular">Triangular</option>
                                                                    </select>
                                                                    <div id="selected_result"></div>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li id="lt" class="control-group">
                                                                <label for="tank_length" class="control-label">Tank Length (cm)<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="tank_length" class="span2" type="text" name="tank_length" value="">
                                                                </div>
                                                            </li>
                                                            <li id="ht" class="control-group">
                                                                <label for="tank_height" class="control-label">Tank Height (cm)<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="tank_height" class="span2" type="text" name="tank_height" value="">
                                                                </div>
                                                            </li>
                                                            <li id="wt" class="control-group">
                                                                <label for="tank_width" class="control-label">Tank Width (cm)<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="tank_width" class="span2" type="text" name="tank_width" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li id="rd" class="control-group">
                                                                <label for="tank_radius" class="control-label"> Tank Diameter </label>
                                                                <div class="controls">
                                                                    <input id="tank_radius" class="span2" type="text" name="tank_radius" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                        </ul>
                                                    </fieldset>

                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input -->
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-blue" name="add_tank_type">Submit & Validate</button>
                                                        <button type="submit" class="btn btn-yellow">Edit Tank Type</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- // Widget -->

                        </div>
                        <!-- // Column 2 -->



                            <!-- // Column -->





                        <div class="span4 grider">



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

	<div id="adding_tank" class="modal hide fade" data-width="340" tabindex="-1"></div>



<!-- ==========# ADD NEW TANK (Modal) #=========== -->

<?php include 'footer.php'; ?>
<script>
	$("#check_valid").click(function(){
		alert("Click!");
	});

	$("#tank_shape").change(function(){
		var str = "";
		$("#tank_shape option:selected").each(function(){
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
</script>
