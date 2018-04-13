<?php include 'header.php'; 
    
?>

<div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-layers"></i> Tanks <small></small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
 <nav>
    <ul class="btn-toolbar page-nav margin-btn">
        <li>
        <a href="#addTank" id="add_tank" class="btn  btn-blue" data-toggle="modal" style="width:120px"><i class=" fontello-icon-plus-circle-2 f20"></i>
        <span class="block">Add Tank</span></a>
        </li>
         
    </ul>
    <hr class="margin-0x">
</nav>
<section>
<div class="row-fluid">
    <div class="page-header">
        <h3><i class=" fontello-icon-calendar-alt-1 opaci20"></i> Tank <small> Management</small></h3>
    </div>
    <form class="form-dark">
        <div class="well well-nice">
            <table id="tankBox" class="table table-striped boo-table table-bordered table-condensed table-striped table-hover" >
                <caption> Tank List</caption>
                <thead>
                    <tr>
                    <th>Tank Name</th>
                    <th>Tank Shape</th>
                     <th>Tank Length (cm.)</th>
                     <th>Tank Width (cm.)</th>
                     <th>Tank Height (cm.)</th>
                     <th>Tank Radius (cm.)</th>
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
        

<!-- Modal Adding New tank -->

<div id="addTank" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4><i class="fontello-icon-layers" ></i>Add Tank</h4>
        </div>
        <div class="modal-body">
            <div class="page-header">
                <h4><i class="fontello-icon-cog-alt" ></i>Tank Settings</h4>
            </div>
            <div class="row-fluid">
                 <div class="span12">
                    
                                <form role="form" id="faddTank" class="form-horizontal">
                                   <ul class="form-list label-left list-bordered dotted">
                                    <li class="control-group">
                                    <label class="control-label" for="tank_name">Tank Name:</label>
                                   
                                        <input id="tank_name" name="tank_name" class="input-large margin-00" size="16" type="text">
                                        
                                    <!-- // form item -->
                                    
                                    </li>
                                    
                                    <li class="control-group">
                                    <label class="control-label" for="tank_shape">Tank Shape:</label>
                                   
                                        <select id="tank_shape" name="tank_shape">
                                        <option value="Rectangular">Rectangular</option>
                                        <option value="Square">Square</option>
                                        <option value="Circle">Circle</option>
                                        </select>
                                        
                                    <!-- // form item -->
                                    
                                    </li>
                                    <!-- // form item -->
                                    
                                    <li id="th" class="control-group">
                                    <label class="control-label" for="tank_h">Tank Height:</label>
                                   
                                        <div class="input-append">
                                                    
                                                        <input id="tank_h" class="input-small"  type="text" value="" name="tank_h">
                                                   <span class="add-on">cm.</span>
                                        </div>
                                        
                                    <!-- // form item -->
                                    
                                    </li>

                                    <li id="tl" class="control-group">
                                    <label class="control-label" for="tank_l">Tank Length:</label>
                                   
                                       <div class="input-append">
                                                    
                                                        <input id="tank_l" class="input-small"  type="text" value="" name="tank_l">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                    <!-- // form item -->
                                    
                                    </li>

                                    <li id="tw" class="control-group">
                                    <label class="control-label" for="tank_w">Tank width:</label>
                                   
                                       <div class="input-append">
                                                    
                                                        <input id="tank_w" class="input-small"  type="text" value="" name="tank_w">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                    <!-- // form item -->
                                    
                                    </li>

                                    <li id="tr" class="control-group" hidden>
                                    <label class="control-label" for="tank_r">Tank Radius:</label>
                                   
                                        <div class="input-append">
                                                    
                                                        <input id="tank_r" class="input-small"  type="text" value="" name="tank_r">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                    <!-- // form item -->
                                    
                                    </li>
                                    </ul>
                                </form>
                                <!-- // fieldset Input --> 
                            </div>
               
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Cancel</button>
            <button id="add_tank" type="button" class="btn btn-green">Add Tank</button>
        </div>
    </div>


    <!-- Edit Tank -->
</div>




<div id="edit_Tank" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Edit Tank</h4>
        </div>
        <div class="modal-body">
            <div class="page-header">
               
            </div>
            <div class="row-fluid">
                 <div class="span12">
                    
                                <form class="form-horizontal">
                                   <ul class="form-list label-left list-bordered dotted">
                                    <li class="control-group">
                                    <label class="control-label" for="tank_name">Tank Name:</label>
                                    <input type="hidden" id="etank_id" name="etank_id">
                                        <input id="etank_name" name="etank_name" class="input-medium margin-00" size="16" type="text">
                                        
                                    <!-- // form item -->
                                    
                                    </li>
                                    
                                    <li class="control-group">
                                    <label class="control-label" for="tank_shape">Tank Type:</label>
                                   
                                        <select id="etank_shape" name="etank_shape">
                                        <option value="Circular">Circular</option>
                                        <option value="Rectangular">Rectangular</option>
                                        <option value="Square">Square</option>
                                             </select>
                                        
                                    <!-- // form item -->
                                    
                                    </li>
                                    <!-- // form item -->
                                    
                                    <li class="control-group">
                                    <label class="control-label" for="etank_h">Tank Height:</label>
                                   <div class="input-append">
                                                    
                                            <input id="etank_h"   type="text" value="" name="etank_h">
                                                   <span class="add-on">cm.</span>
                                    </div>
                                        
                                    <!-- // form item -->
                                    
                                    </li>

                                    <li class="control-group">
                                    <label class="control-label" for="tank_l">Tank Length:</label>
                                   
                                        <div class="input-append">
                                                    
                                                        <input id="etank_l"   type="text" value="" name="etank_l">
                                                   <span class="add-on">cm.</span>
                                               </div>
                                        
                                    <!-- // form item -->
                                    
                                    </li>

                                    <li class="control-group">
                                    <label class="control-label" for="etank_w">Tank width:</label>
                                   
                                        <input id="etank_w" name="etank_w" class="input-medium margin-00" size="16" type="text">
                                        
                                    <!-- // form item -->
                                    
                                    </li>

                                    <li class="control-group">
                                    <label class="control-label" for="etank_r">Tank Radius:</label>
                                   
                                        <input id="etank_r" name="etank_r" class="input-medium margin-00" size="16" type="text">
                                        
                                    <!-- // form item -->
                                    
                                    </li>
                                    </ul>
                                </form>
                                <!-- // fieldset Input --> 
                            </div>
               
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Cancel</button>
            <button type="button" class="btn btn-green" id="updateTank">Update</button>
        </div>
    </div>


    <!-- Edit Tank -->
</div>
<script>

</script>          
<?php include 'footer.php'; ?>

