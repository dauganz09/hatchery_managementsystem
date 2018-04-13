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