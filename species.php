<?php include 'header.php'; ?>
<?php   
   
?>
<div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-logo-db"></i> Species <small></small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
 
<section>
<div class="row-fluid">
    <div class="page-header">
        <h3><i class=" fontello-icon-calendar-alt-1 opaci20"></i> Specie <small> Management</small></h3>
    </div>
    <nav>
    <ul class="btn-toolbar page-nav margin-btn">
        <li>
        <a href="#addSpecie"  class="btn  btn-green" data-toggle="modal" style="width:120px"><i class=" fontello-icon-plus-circle-2 f20"></i>
        <span class="block">Add New Specie</span></a>
        </li>
       
         
    </ul>
    <hr class="margin-0x">
</nav>
    <form class="form-dark">
        <div class="well well-nice">
            <table id="specieBox" class="table boo-table table-bordered table-hover table-condensed">
                <caption> Specie List</caption>
                <thead>
                    <tr>
                    <th>Specie Name</th>
                    <th>Specie Type</th>
                    <th>Scientific Name</th>
                     <th>Specie Description</th>
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
        

<!-- Modal Adding New Season -->

<div id="addSpecie" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Add Specie</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
                 <div class="span12">
                                <form id="fspecie" class="form-horizontal">
                                  <ul class="form-list label-left list-bordered dotted">
                                <li class="control-group">
                                    <label for="s_name" class="control-label">Specie Name:</label>
                                            
                                        <input  value="Nile Tilapia" id="s_name" name="s_name" class="form-control" size="16" type="text" >
                                </li>
                                    <!-- // form item -->
                                    
                                    <li class="control-group">
                                    <label for="s_type"  class="control-label">Specie Type:</label>
                                         <input   id="s_name" name="s_type" class="form-control" size="16" type="text" >
                                
                                </li>
                                <li class="control-group">
                                    <label for="sci_name"  class="control-label">Scientific Name:</label>
                                    
                                        <input  name="sci_name" value ="Oreochromis niloticus" id="sci_name" class="form-control" size="16" type="text" >
                                                
                                </li>
                                    
                                    <!-- // form item -->
                                    <li class="control-group">
                                    <label class="control-label" for="s_desc">Specie Description:</label>
                                    <textarea id="s_desc" rows="4" name="s_desc"></textarea>
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
            <button type="button" class="btn btn-green" id="add_specie">Add Specie</button>
        </div>
    </div>

    <!--        Modal Edit Feed                   -->

<div id="editFeed" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Edit Specie</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
                 <div class="span12">
                                <form>
                                  <ul class="form-list label-left list-bordered dotted">
                                <li class="control-group">
                                    <label for="season_from" class="control-label">Specie Name:</label>
                                    
                                        <input id="feed_name" class="form-control" size="16" type="text">
                                </li>
                                    <!-- // form item -->
                                    
                                    <li class="control-group">
                                   <label for="feed_type"  class="control-label">Scientific Name:</label>
                                                <select id="feed_type">
                                        <option value="1">PHYLUM PORIFERA </option>
                                        <option value="2">PHYLUM CTENOPHORA</option>
                                        <option value="3">PHYLUM CNIDARIA</option>
                                             </select>
                                </li>
                                    
                                    <!-- // form item -->
                                    <li class="control-group">
                                    <label for="feed_desc">Specie Description:</label>
                                    <textarea id="feed_desc" rows="4"></textarea>
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
            <button type="button" class="btn btn-green">Update</button>
        </div>
    </div>



<script>

</script>          
<?php include 'footer.php'; ?>

