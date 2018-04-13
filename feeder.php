<?php include 'header.php'; ?>
<?php   
   
?>
<div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-magic"></i> Feeder <small></small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
 
<section>
<div class="row-fluid">
    <div class="page-header">
        <h3><i class=" fontello-icon-calendar-alt-1 opaci20"></i> Feeder <small> Management</small></h3>
    </div>
    <!-- <nav>
    <ul class="btn-toolbar page-nav margin-btn">
        <li>
        <a href="#addFeed" id="add_feed" class="btn  btn-blue" data-toggle="modal" style="width:120px"><i class=" fontello-icon-plus-circle-2 f20"></i>
        <span class="block"></span></a>
        </li>
       
         
    </ul>
    <hr class="margin-0x">
</nav> -->
    <form class="form-dark">
        <div class="well well-nice">
            
            
            
                

</div>
</section>
    </div>
            <!-- // page content --> 
            
        </div>
        <!-- // main-content --> 
        

<!-- Modal Adding New Season -->

<div id="addFeed" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Add Feeds</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
                 <div class="span12">
                                <form>
                                  <ul class="form-list label-left list-bordered dotted">
                                <li class="control-group">
                                    <label for="season_from" class="control-label">Feed Name:</label>
                                    
                                        <input id="feed_name" class="form-control" size="16" type="text">
                                </li>
                                    <!-- // form item -->
                                    
                                    <li class="control-group">
                                    <label for="feed_type"  class="control-label">Select Feed Type:</label>
                                                <select id="feed_type">
                                        <option value="1">Pellets</option>
                                        <option value="2">Granules</option>
                                        <option value="3">3</option>
                                             </select>
                                </li>
                                    
                                    <!-- // form item -->
                                    <li class="control-group">
                                    <label for="feed_desc">Feed Description:</label>
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
            <button type="button" class="btn btn-green">Add Feed</button>
        </div>
    </div>

    <!--        Modal Edit Feed                   -->

<div id="editFeed" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Edit Feed</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
                 <div class="span12">
                                <form>
                                  <ul class="form-list label-left list-bordered dotted">
                                <li class="control-group">
                                    <label for="season_from" class="control-label">Feed Name:</label>
                                    
                                        <input id="feed_name" class="form-control" size="16" type="text">
                                </li>
                                    <!-- // form item -->
                                    
                                    <li class="control-group">
                                    <label for="feed_type"  class="control-label">Select Feed Type:</label>
                                                <select id="feed_type">
                                        <option value="1">Pellets</option>
                                        <option value="2">Granules</option>
                                        <option value="3">3</option>
                                             </select>
                                </li>
                                    
                                    <!-- // form item -->
                                    <li class="control-group">
                                    <label for="feed_desc">Feed Description:</label>
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
            <button type="button" class="btn btn-yellow">Update</button>
        </div>
    </div>



<script>

</script>          
<?php include 'footer.php'; ?>

