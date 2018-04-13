<?php include 'header.php'; ?>
<?php   
   
?>
<div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="aweso-icon-list-alt"></i> Season <small></small></h2>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
 <nav>
    <ul class="btn-toolbar page-nav margin-btn">
        <li>
        <a href="#addSeason" id="add_season" class="btn  btn-green" data-toggle="modal" style="width:120px"><i class=" fontello-icon-plus-circle-2 f20"></i>
        <span class="block">Add Season</span></a>
        </li>
         
    </ul>
    <hr class="margin-0x">
</nav>
<section>
<div class="row-fluid">
    <div class="page-header">
        <h3><i class=" fontello-icon-calendar-alt-1 opaci20"></i> Season <small> Management</small></h3>
    </div>
    <form class="form-dark">
        <div class="well well-nice">
            <table id="seasonBox" class="table boo-table table-bordered table-condensed">
                <caption> Seasons List</caption>
                <thead>
                    <tr>
                    <th>Season ID</th>
                    <th>Season from</th>
                     <th>Season to</th>
                     <th>Description</th>
                     <th>Mortality Rate</th>
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

<div id="addSeason" class="modal hide fade" tabindex="-1" data-width="500">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Add Season</h4>
        </div>
        <div class="modal-body">
            <div class="page-header">
               
            </div>
            <div class="row-fluid">
                 <div class="span10">
                                <form>
                                   
                                    <label for="season_from">Season from:</label>
                                    <div class="input-append">
                                        <input id="season_from" class="input-medium margin-00" size="16" type="text">
                                       <span class="add-on"><i class="fontello-icon-calendar"></i></span> </div>
                                    <!-- // form item -->
                                    
                                    <label for="season_to"> Season to: </label>
                                    <div class="input-append">
                                    <input id="season_to" class="input-medium margin-00" size="16" type="text" >
                                    <span class="add-on"><i class="fontello-icon-calendar"></i></span> </div>
                                    
                                    <!-- // form item -->
                                    
                                    <label for="season_desc">Season Description:</label>
                                    <textarea id="season_desc" rows="4"></textarea>
                                    <!-- // form item -->
                                    <label for="mort_rate">Season Mortality Rate: </label>
                                    <div class="input-append">
                                        <input id="mort_rate" class="span3" size="16" type="text">
                                        <span class="add-on"> %</span> </div>
                                </form>
                                <!-- // fieldset Input --> 
                            </div>
               
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-boo">Cancel</button>
            <button type="button" class="btn btn-green">Add Season</button>
        </div>
    </div>
<script>

</script>          
<?php include 'footer.php'; ?>

