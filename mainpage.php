<?php
    if (isset($_GET['access'])):
        $user_level = $_GET['access'];
        
    endif;

?>
<?php include 'header.php';

  ?>

        <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-monitor"></i> Dashboard </h2>
                <p class="pagedesc"></p>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->

            <div id="page-content" class="page-content">
                <section>
                    <div class="row-fluid margin-top20">
                        <div class="span12 well well-nice">
                            <div class="page-header ">
                        <h3>Tank Monitoring</h3>
                    </div>
                            <div class="row-fluid">



                               <!--   start widget -->
                               
                                <?php   foreach($events->displayAllParameters() as $row){

                                ?>                    
                                <div class="widget widget-simple widget-collapsible">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-window"></i><?php echo $tank->getTankName($row['events_id']); ?> <small><?php echo $row['event_type']; ?> Tank</small></h4>
                                            
                                        
                                        
                                        
                                    <div class="widget-tool">

                                        <a class="btn btn-glyph btn-link widget-toggle fontello-icon-publish"  data-toggle="collapse" data-target="#demo1" href="javascript:void(0);"></a></div>

                                </div>
                                <div id="demo1" class="widget-content collapse in">
                                    <div class="widget-bar">
                                    <div class="btn-toolbar">
                                        
                                    <div class="span4 well well-black">
                                        <h4 class="simple-header">Feeder Status: </h4>
                                        <div class="progress  progress-success progress-striped active filled4">
                                            <div id="feederStats" class="bar progress-bar-striped text-centered-15" data-percentage=0></div>
                                        </div>

                                        <!-- // progress 3 --> 
                                    </div><div class="span3 well well-black">
                            <h1 class="simple-header"> <small><?php echo floor(((strtotime(date('Y-m-d')) - strtotime($row['events_date']))/3600)/24); ?></small></h1>
                            <p><h5>Day Counter:</h5></p>
                        </div>
                                     
                                </div>
                                
                                    <div class="widget-body">
                                        <h4>Water parameters</h4>
                                        <hr>

                                <ul class="mediagrid mediagrid-center media-item-160">
                                    <li class="media-item">
                                        <div class="statistic-box well well-black">
                                            <div class="section-title">
                                                <h6 class="upper">Ph Level</h6>
                                            </div>
                                            <div class="section-content">
                                                <div class="circle-content">
                                                    <div class="circle circle-shadow padding5">
                                                        <?php foreach ($tank->getParameters($row['events_id']) as $row2){ ?>
                                                        <input class="phv" data-readonly=false type="text" data-width="100" data-height="100" data-fgcolor="<?php if($row2['ph'] < 5){echo 'red';}else{echo '#48a438';} ?>"  data-bgcolor="#43474a" data-thickness=".32" class="dial-1 " value="<?php echo $row2['ph']; ?>"  >
                                                    </div>
                                                </div>
                                                
                                                <h2 class="statistic-values"><?php echo $row2['ph']; ?> <small>Ph.</small> </h2>
                                                <span class="help-block">Normal Value: 5 ph. </span> </div>
                                            <!-- // content --> 
                                            
                                        </div>
                                        <!-- // Statistic Box  --> 
                                    </li>
                                    <!-- // item -->
                                    
                                    <li class="media-item">
                                        <div class="statistic-box well well-black">
                                            <div class="section-title">
                                               <p> <h6 class="upper">Dissolved Oxygen</h6></p>
                                            </div>
                                            <div class="section-content">
                                                <div class="circle-content">
                                                    <div class="circle circle-shadow padding5">
                                                        <input data-readonly=false type="text" class="doxyv" data-width="100" data-height="100" value="<?php echo $row2['doxy']; ?>" data-fgcolor="#48a438" data-bgcolor="#43474a" data-thickness=".32" class="dial-1" rel="75" value="59">
                                                    </div>
                                                </div>
                                                <h2 class="statistic-values"><?php echo $row2['doxy']; ?><small> ppm.</small>  </h2>
                                                <span class="help-block">Normal Value: 5 ppm.</span> </div>
                                            <!-- // content --> 
                                            
                                        </div>
                                        <!-- // Statistic Box  --> 
                                    </li>
                                    <!-- // item -->
                                    
                                    <li class="media-item">
                                        <div class="statistic-box well well-black">
                                            <div class="section-title">
                                                <h6 class="upper">Temperature</h6>
                                            </div>
                                            <div class="section-content">
                                                <div class="circle-content">
                                                    <div class="circle circle-shadow padding5">
                                                        <input data-readonly=false class="temperaturev" type="text" value="<?php echo $row2['temperature']; ?>" data-width="100" data-height="100" data-fgcolor="<?php if($row2['temperature'] > 45){echo 'red';}else{echo '#48a438';} ?>" data-bgcolor="#43474a" data-thickness=".32" class="dial-1" rel="75" value="0">
                                                    </div>
                                                </div>
                                                <h2 class="statistic-values"><?php echo $row2['temperature']; ?> <small>&#8451;</small> </h2>
                                                <span class="help-block">Normal Value: 30 &#8451;</span> </div>
                                            <!-- // content --> 
                                            
                                        </div>
                                        <!-- // Statistic Box  --> 
                                    </li>
                                    <!-- // item -->
                                    
                                    <li class="media-item">
                                        <div class="statistic-box well well-black">
                                            <div class="section-title">
                                                <h6 class="upper">Turbidity</h6>
                                            </div>
                                            <div class="section-content">
                                                <div class="circle-content">
                                                    <div class="circle circle-shadow padding5">
                                                        <input data-readonly=false type="text" class="turbidityv" value="<?php echo $row2['turbidity']; ?>" data-width="100" data-height="100" data-fgcolor="#48a438" data-bgcolor="#43474a" data-thickness=".32" class="dial-1" rel="100" value="0">
                                                    </div>
                                                </div>
                                                <h2 class="statistic-values"><?php echo $row2['turbidity']; ?> <small>cm.</small> </h2>
                                                <span class="help-block">Normal Value: 35 cm.</span> </div>
                                            <!-- // content --> 
                                            
                                        </div>
                                        <!-- // Statistic Box  --> 
                                    </li>
                                    <!-- // item -->
                                    
                                    <li class="media-item">
                                        <div class="statistic-box well well-black">
                                            <div class="section-title">
                                                <h6 class="upper">Depth</h6>
                                            </div>
                                            <div class="section-content">
                                                <div class="circle-content">
                                                    <div class="circle circle-shadow padding5">
                                                        <input data-readonly=false class="depthv" type="text" value="<?php echo $row2['depth']; ?>" data-width="100" data-height="100" data-fgcolor="<?php if($row2['depth'] < 100){echo 'red';}else{echo '#48a438';} ?>" data-bgcolor="#43474a" data-thickness=".32" class="dial-1" rel="200" value="0">
                                                    </div>
                                                </div>
                                                <h2 class="statistic-values"><?php echo $row2['depth']; }?> <small>cm.</small> </h2>
                                                <span class="help-block">Normal Value: 100 cm.</span> </div>
                                                <!-- // content --> 
                                            
                                        </div>
                                        <!-- // Statistic Box  --> 
                                    </li>
                                    <!-- // item -->
                                    
                                </ul>
                                <!-- // mediagrid --> 
                                
                                            </div>
                                    <div class="widget-footer">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- // end Widget --> 
                            <?php }?>
                            
                        </div>
                                
                    </div>
                    <!-- // Example row -->

                </section>

            </div>
            <!-- // page content -->

        </div>
        <!-- // main-content -->

    </div>
    <!-- // main-container  -->





    <?php include 'footer.php'; ?>

    
