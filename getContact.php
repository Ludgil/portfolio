<?php
    
    function trim_value(&$value)
    {
        $value = trim($value);
    }

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
        
        array_filter($_POST, 'trim_value');    // the data in $_POST is trimmed

        $postFilter =    
            array(
                'firstname'  =>  array('filter' => FILTER_SANITIZE_STRING),  
                'mail'   =>  array('filter' => FILTER_SANITIZE_EMAIL),   
                'message'   =>  array('filter' => FILTER_SANITIZE_STRING)
            );

        $filterPostArray = filter_var_array($_POST, $postfilter); 
        
       echo var_dump($filterPostArray['firstname']);
       
    }else{

        echo "there is a problem";
    }

    

?>