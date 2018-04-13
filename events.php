<?php include 'header.php'; ?>
<?php   
   
?>
<div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="aweso-icon-list-alt"></i> Events <small></small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
 
<section>
<div class="row-fluid">
    <div class="page-header">
        <h3><i class=" fontello-icon-calendar-alt-1 opaci20"></i> Events <small> Management</small></h3>
    </div>
    <nav>
    <ul class="btn-toolbar page-nav margin-btn">
        <li>
        <a href="#addEvent" id="add_season" class="btn  btn-turgu" data-toggle="modal" style="width:120px"><i class=" fontello-icon-plus-circle-2 f20"></i>
        <span class="block">NEW EVENT</span></a>
        </li>turgu
        <li>
        <a href="#eventHistory" id="add_season" class="btn  btn-turgu" data-toggle="modal" style="width:120px"><i class="  fontello-icon-list-alt f20"></i>
        <span class="block">EVENTS HISTORY</span></a>
        </li>
        
         
    </ul>
    <hr class="margin-0x">
</nav>
    <form class="form-dark">
        <div class="well well-nice">
            <table id="eventsBox" class="table boo-table table-bordered table-condensed">
                <caption> Events List</caption>
                <thead>
                    <tr>
                    <th>Event Type</th>
                    <th>Tank</th>
                     <th>Specie</th>
                     <th>Last Update</th>
                     <th>Day Count</th>
                     <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                   
                </tbody>
            </table>
        </div>
    </form>
</div>
</section>
    </div>
            <!-- // page content --> 
            
        </div>
        <!-- // main-content --> 
<!-- Modal Water Parameter -->
<div id="updateParam" class="modal hide fade" tabindex="-1" data-width="800">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4><i class=" fontello-icon-droplet" ></i>Update Water Parameter</h4>
        </div>
        <div class="modal-body">

            <table id="param_table" class="table boo-table table-bordered table-striped table-condensed">
                <caption>List of Parameters </caption>
                <thead>
                    <th>Dissolved Oxygen (ppm.)</th>
                     <th>Ph Level (Ph)</th>
                      <th>Temperature (&#8451;)</th>
                       <th>Depth (cm.)</th>
                        <th>Turbidity (cm.)</th>
                         <th>Last Updated</th>
                </thead>
                <tbody>

                </tbody>
                <!-- <tfooter>
                <tr><td colspan='6'>Legends: 


<span style="" class="label label-info">Normal</span>
<span class="label label-warning">Warning</span>
</td>
                </tr>
                </tfooter> -->
             </table> 
             <fieldset>
                <legend><i class="  fontello-icon-chart-bar-2" > </i>Parameter Values</legend>
             <form id="new_param" class="form-horizontal">
                <ul class="form-list label-left list-bordered dotted">
                                                
                                               
                                               <li class="control-group">
                                                    <label for="do" class="control-label">Dissolved Oxygen:</label>
                                                    
                                               <div class="input-append col-sm-3">
                                                    
                                                        <input id="doxy2"   type="text" value="" name="doxy">
                                                   <span class="add-on">ppm.</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="ph" class="control-label">Acidity:</label>
                                               <div class="input-append col-sm-3">
                                                    
                                                        <input id="ph2"  type="text" value="" name="ph">
                                                   <span class="add-on">Ph</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="temp" class="control-label">Temperature:</label>
                                                 <div class="input-append">
                                                    
                                                        <input id="temp2"  type="text" value="" name="temp">
                                                   <span class="add-on">&#8451;</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="turbidity" class="control-label">Turbidity:</label>
                                                    
                                                <div class="input-append">
                                                    
                                                        <input id="turbidity2" class="input-small"  type="text" value="" name="turbidity">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="depth" class="control-label">Depth:</label>
                                                    
                                                <div class="input-append">
                                                    
                                                        <input id="depth2" class="input-small"  type="text" value="" name="depth">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    
                                                    
                                                        
                                                    
                                                        <button  type="button" class="btn btn-blue col-offset-2" id="add_new"><i class="fontello-icon-gauge-1"></i>Add Parameter</button>
                                           
                                              
                                                </li>
                                                  </ul>
            </form>
        </fieldset>
        </div>
        <div class="modal-footer">
               <button type="button" data-dismiss="modal" class="btn btn-green btn-lg" id="done">Done</button>
        </div>
    </div>
<!-- history -->

             
<!-- end modal -->
<div id="endEvent" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4><i class="  fontello-icon-to-end-1" ></i>End Event</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" id="end_id">
             <h3>Are you sure to End the Event?</h3>
             <h6>Cannot be undone once submitted</h6>

        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Cancel</button>
            <button type="button" class="btn btn-green" id="endEvents">End Event</button>
        </div>
    </div>



<!-- end modal -->
<div id="endEventN" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4><i class="  fontello-icon-to-end-1" ></i>End Event</h4>
        </div>
        <div class="modal-body">
            <input type="hidden" id="end_id">
             <h3>Are you sure to End the Event?</h3>
             <h6>Cannot be undone once submitted</h6>

        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Cancel</button>
            <button type="button" class="btn btn-green" id="endEventsN">End Event</button>
        </div>
    </div>

<!-- Modal Adding New Season -->

<div id="addEvent" class="modal hide fade" tabindex="-1" data-width="900">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Add Event</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
                 <div class="span12">
                                <form id="wizard-idicator" class="form-horizontal" method="" action="" >
                                    <div class="navbar navbar-inverse">
                                        <div class="navbar-inner">
                                            <div class="container">
                                                <ul>
                                                    <li><a href="#tab1f" data-toggle="tab">Set Event</a></li>
                                                    <li><a href="#tab2f" data-toggle="tab">Set-up Feeding Module</a></li>
                                                    <li><a href="#tab3f" data-toggle="tab">Input Water Parameters</a></li>
                                                </ul>
                                                <!-- use progress, progress-small or progress-mini  -->
                                                <div class="wizard-indicator">
                                                    <div id="bar" class="progress progress-info progress-striped active filled3">
                                                        <div class="filler">
                                                            <div class="bar" ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1f">
                                            <ul class="form-list label-left list-bordered dotted">
                                                <li class="control-group">
                                                    <label for="event_type" class="control-label">Event Type:</label>
                                                <select id="event_type"  class="selecttwo span4" name="event_type">
                                        <option></option>
                                        <option value="Conditioning">Conditioning</option>
                                        <option value="Breeding/Spawning">Breeding/Spawning</option>
                                        <option value="Nursing/Rearing">Nursing/Rearing</option>
                                             </select>
                                                </li>
                                                <!-- // form item -->
                                                 <li class="control-group">
                                                          <label for="season_from" class="control-label">Date Started:</label>
                                    <div class="input-append">
                                        <input  id="date_start" size="16" type="text" name="date_start">
                                       <span class="add-on"><i class="fontello-icon-calendar"></i></span> </div>
                                
                                                <li class="control-group">
                                                    <label for="tank"  class="control-label">Add Tank:</label>
                                                <select id="tank" name="tank" class="selecttwo span4">
                                                    <option></option>
                                                    <?php 
                                                         if($tank->getAllTanks() == false){
                                                                echo "<option disabled>No Available Tanks!</option>";}else{
                                                    foreach($tank->getAllTanks() as $tank_row): 
                                                       
                                                        ?> 
                                                        <option value="<?php echo $tank_row['tank_id'];  ?>"><?php echo $tank_row['tank_name']; ?></option>

                                                    <?php endforeach; }?>        
                                             </select>
                                                </li>
                                                <!-- // form item -->

                                                <li class="control-group">
                                                    <label for="specie"  class="control-label">Add Specie:</label>
                                                    <input type="hidden" id="specie_id">
                                                    <input disabled id="specie" class="span4" type="text" class="input-small" name="specie">
                                          
                                                </li>
                                                     <!-- // form item -->

                                                <li id="" class="control-group c">
                                                    <label for="specie"  class="control-label">Sex:</label>
                                                        <select id="sex" name="sex" class="input-small" class="selecttwo span4" >
                                                                <option value="Male">Male</option>
                                                                 <option value="Female">Female</option>
                                                        </select>
                                                </li>

                                                <li id="" class="control-group c">
                                                    <label for="no_specie"  class="control-label">No. of Specie:</label>
                                                        <input id="no_specie" type="number" class="input-small" name="no_specie" value="0">
                                                </li>

                                                 <li id="" class="control-group br">
                                                    <label for="ratio"  class="control-label">Ratio:</label>
                                                        <select id="ratio" name="ratio" class="input-small" class="selecttwo span4" >
                                                                <option></option>
                                                                <option value="4">1:3</option>
                                                                 <option value="6">1:5</option>
                                                        </select>
                                                </li>
                                                    <li id="" class="control-group br">
                                                    <label for="sd"  class="control-label">Stocking Density:</label>
                                                        <input id="sd" type="text" class="input-small" name="sd" class="form-control" disabled> stocks
                                                </li>

                                                 <li id="" class="control-group n">
                                                    <label for="nf"  class="control-label">No. of Stocks:</label>
                                                        <input id='nf' type="number" class="input-small" name="nf" class="form-control">
                                                </li>

                                            </ul>
                                        </div>

                                        <!-- // tab1 -->
                                        
                                        <div class="tab-pane" id="tab2f">
                                            <ul class="form-list label-left list-bordered dotted">
                                                <li class="control-group">
                                                    <label for="feed"  class="control-label">Select Feed:</label>
                                                <select id="feed" class="selecttwo span4" name="feed">
                                                    <option></option>
                                                     <?php foreach($feeds->getAllFeeds() as $feeds_row): ?> 

                                                        <option value="<?php echo $feeds_row['feeds_id'];  ?>"><?php echo $feeds_row['feeds_name']; ?></option>

                                                    <?php endforeach; ?>  
                                             </select>
                                                </li>
                                                <!-- // form item -->

                                                <li class="control-group">
                                                 <label for="freq" class="control-label">Feeding Frequency: </label>
                                                
                                                              
                                                    <select id="freq" class="selecttwo span1" name="freq">
                                                     <option></option>
                                                        <option value="2">2</option>
                                                         <option value="3">3</option>
                                                          <option value="4">4</option>
                                                           <option value="5">5</option>
                                                            <option value="6">6</option>
                                                             <option value="7">7</option>
                                                                <option value="8">8</option>

                                                     
                                             </select> <b>x a Day</b>
                                              
                                                    </li>
                                                

                                                <li class="control-group">
                                            <label for="feed_sched" class="control-label">Schedule:</label>
                                            <div class="input-append" id="fs">
                                                 

                                               
                                            </div>

                                           
                                            </li>


                                                <!-- // form item -->
                                                <li class="control-group">
                                                 <label for="fish_weight" class="control-label">Average Fish Weight: </label>
                                                 <div class="input-append">
                                                    
                                                        <input id="fish_weight"   type="text"  name="fish_weight" >
                                                   <span class="add-on">grams</span>
                                               </div>
                                                    </li>
                                                 <li class="control-group">
                                                 <label for="rate" class="control-label">Feeding Rate: </label>
                                                
                                                              
                                                    <select id="rate" class="selecttwo span2" name="rate">
                                                        <option></option>
                                                        <option value="10">10</option>
                                                         <option value="9">9</option>
                                                          <option value="8">8</option>
                                                           <option value="7">7</option>
                                                            <option value="6">6</option>
                                                             <option value="5">5</option>
                                                                

                                                     
                                                            </select>
                                                                <b>%</b>
                                                    </li>

                                                    <li class="control-group">
                                                 <label for="dfr" class="control-label">Daily Food Ration: </label>
                                                 <div class="input-append">
                                                    
                                                        <input  class="span4" disabled id="dfr" type="text" value="" name="dfr">
                                                   <span class="add-on"><b>kg./day</b></span>
                                               </div>
                                                    </li>

                                                        

                                                    <li class="control-group">
                                                    <label for="biomass" class="control-label"></label>
                                                    
                                                </li>


                                            </ul>
                                        </div>
                                
                                        <!-- // tab1 -->
                                        
                                        <div class="tab-pane" id="tab3f">
                                            <ul class="form-list label-left list-bordered dotted">
                                                
                                               
                                               <li class="control-group">
                                                    <label for="do" class="control-label">Dissolved Oxygen:</label>
                                                    
                                               <div class="input-append col-sm-3">
                                                    
                                                        <input id="e_doxy"   type="text" value="" name="do">
                                                   <span class="add-on">ppm.</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="ph" class="control-label">Acidity:</label>
                                               <div class="input-append col-sm-3">
                                                    
                                                        <input id="e_ph"  type="text" value="" name="ph">
                                                   <span class="add-on">Ph</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="e_temp" class="control-label">Temperature:</label>
                                                 <div class="input-append">
                                                    
                                                        <input id="e_temp"  type="text" value="" name="temp">
                                                   <span class="add-on">&#8451;</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="e_turbidity" class="control-label">Turbidity:</label>
                                                    
                                                <div class="input-append">
                                                    
                                                        <input id="e_turbidity" class="input-small"  type="text" value="" name="turbidity">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                                </li>

                                                <li class="control-group">
                                                    <label for="e_depth" class="control-label">Depth:</label>
                                                    
                                                <div class="input-append">
                                                    
                                                        <input id="e_depth" class="input-small"  type="text" value="" name="depth">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <!-- // tab1 -->
                                        
                                        <ul class="wizard-action center">
                                            <li><a class="previous first btn btn-inverse pull-left" href="javascript:void(0);">First</a></li>
                                            <li><a class="previous btn" href="javascript:void(0);"><i class="fontello-icon-left-circle2"></i> Previous</a> </li>
                                            <li><a class="next btn" href="javascript:void(0);">Next <i class="fontello-icon-right-circle2"></i></a></li>
                                            <li><a class="next last btn btn-inverse pull-right" href="javascript:void(0);">Last</a> </li>
                                             <li>
                                                <div class="number-page pull-right"></div>
                                            </li>
                                        </ul>
                                        <!-- // Action --> 
                                    </div>
                                </form>
                                <!-- // fieldset Input --> 
                            </div>
               
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Cancel</button>
            <button type="button" class="btn btn-green" id="addevent">Add Event</button>
        </div>
    </div>
<script>

</script>          
<?php include 'footer.php'; ?>

