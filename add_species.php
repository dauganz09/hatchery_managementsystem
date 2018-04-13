<?php require_once 'core/_init.php'; ?>
<?php  
if(empty($_POST) === false){
    $fields = array(
        0 => $_POST['specie_type'],
        1 => $_POST['subclass_name']
    );
    if ($specie->get_empty_fields($fields) == true){
        if($fields[0] === '__Select Classification__'){
            $fields[0] = 'Agnatha';
        }
        echo '<script>alert("Empty fields!"); window.location="specie_settings.php";</script>';
    }else{
        $added = $specie->add_specie_subclass($fields);
    }
                                             
}

?>
<form id="form_sub_class"  method="POST" action="">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fontello-icon-cancel-1"></i></button>
            <h4>Adding Specie Class</h4>
        </div>
        <div class="modal-body">
            
            <div class="row-fluid">
           		  <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-prison"></i>Specie Sub Class</h4>
                                   
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                       
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <fieldset>
                                                        <ul class="form-list">
                                                        	  <li class="control-group">
                                                                <label for="specie_type" class="control-label">Specie Type</label>
                                                                <div class="controls">
                                                                    <select id="specie_type" class="selectpicker input-block-level" data-style="btn-boo" name="specie_type">
                                                                          <?php foreach ($specie->get_specie_type() as $row):?>
                                                                        	<option value="<?php echo $row['specie_id']; ?>"><?php echo $row['specie_name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </li>

                                                            <li class="control-group">
                                                                <label for="subclass_name" class="control-label">Sub Class Name</label>
                                                                <div class="controls">
                                                                    <textarea id="subclass_name" class="input-block-level" rows="2" placeholder="Enter Subclass Name..." name="subclass_name"></textarea>
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
$('#specie_type').click(function(){
   //$('select#specie_type').change(function(){
        $(':option').each(function(){
            if($(':selected').val('__Select Subclass__')){
                $(':option').remove();
            }
        });
    //}).change();
});
$("#submit").click(function(){
    // alert("Hello!");
    var form_data = {
        specie_type: $('#specie_type').val(),
        subclass_name: $('#subclass_name').val(),
        result_success: '1' 
    };
    var notes = [];
    notes['alert'] = 'Best check yo self, you\'<strong>re not looking too good</strong>.';
    notes['error'] = '<strong>Change a few things up and try submitting again.</strong> This Error message.';
    notes['success'] = 'You <strong>successfully</strong> read this important alert message.';
    notes['information'] = 'This alert needs your attention, but it\'s not super <strong>important</strong>.';
    notes['warning'] = '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.';
    notes['confirm'] = 'Do you want to continue?';

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
                          $('textarea#subclass_name').val('');
                        }
                        
                    }
                });

        }
    });

    return false;
});

$('#close').click(function(){
    window.location='specie_settings.php';  
});
</script>
