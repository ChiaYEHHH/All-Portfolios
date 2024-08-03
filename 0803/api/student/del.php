<?php 
    include "../base.php";
    
   
    $id = $_POST['id'];
    

    echo $Student->del($id);
    
    // echo json_encode($result);
    


?>