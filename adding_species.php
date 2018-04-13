<?php require_once 'core/_init.php'; ?>
<?php  
if(empty($_POST) === false){
    $fields = array(
        0 => $_POST['specie_name'],
        1 => $_POST['specie_description'],
        2 => $_POST['specie_subclass_id']
    );
    if ($specie->get_empty_fields($fields) == true){
        // if($fields[0] === '__Select Classification__'){
        //     $fields[0] = '1';
        // }
        echo '<script>alert("Empty fields!"); window.location="specie_settings.php";</script>';
    }else{
        $added = $specie->add_species_specie($fields);
    }
                                             
}

?>
<form id="form_sub_class"  method="POST" action="">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Adding Specie Specie</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
           		  <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-prison"></i>Species Specie</h4>
                                   
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                       
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <fieldset>
                                                        <ul class="form-list">
                                                        	  <li class="control-group">
                                                                <label for="specie_subclass_id" class="control-label">Specie Subclass</label>
                                                                <div class="controls">
                                                                    <select id="specie_subclass_id" class="selectpicker input-block-level" data-style="btn-boo" name="specie_subclass_id">
                                                                          <?php foreach ($specie->get_specie_subclass() as $row):?>
                                                                        	<option value="<?php echo $row['subclass_id']; ?>"><?php echo $row['subclass_name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li class="control-group">
                                                                <label for="specie_name" class="control-label">Specie Name</label>
                                                                <div class="controls">
                                                                   <input name="specie_name" id="specie_name" class="input-block-level" type="text"  />
                                                                  
                                                                </div>
                                                            </li>
                                                            <li class="control-group">
                                                                <label for="specie_description" class="control-label">Specie Description</label>
                                                                <div class="controls">
                                                                    <textarea id="specie_description" class="input-block-level" rows="2" placeholder="Enter Specie Description..." name="specie_description"></textarea>
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
            <button type="button" id="close" data-dismiss="modal" class="btn btn-boo" name="close">Close</button>
            <input id="submit" type="submit" class="btn btn-green runner" data-layout="top" data-type="success" name="add_subclass" value="Submit">
        </div>
</form>
<script>

$("#submit").click(function(){
    // alert("Hello!");
    var form_data = {
        specie_name: $('#specie_name').val(),
        specie_description: $('#specie_description').val(),
        specie_subclass_id: $('#specie_subclass_id').val(),
        result_success: '1' 
    };

    $.ajax({
        url: "<?php echo $_SERVER['PHP_SELF']; ?>",
        type: 'POST',
        data: form_data,
        success: function(msg){
         
                $.gritter.add({
                    title: '<span style="color:green">Success!</span>',
                    text: 'You have successfully added new subclass specie.',
                    class_name: 'gritter-dark',
                    sticky: true,
                    before_close: function (e, x) {
                        if(x){
                           $('textarea#specie_description').val('');
                           $('input#specie_name').val('');
                        }
                    }
                        
                });

        }
    });

    return false;
});

$('#close').click(function(){
    window.location='species.php';  
});
</script>
