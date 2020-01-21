<?php
    session_start();



    function trim_value(&$value)
    {
        $value = trim($value);
    }

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
        
        array_filter($_POST, 'trim_value');    // the data in $_POST is trimmed

        $postFilter =    
            array(
                'firstname'  =>  array('filter' => FILTER_SANITIZE_STRING),
                'lastname'  =>  array('filter' => FILTER_SANITIZE_STRING),
                'mail'   =>  array('filter' => FILTER_SANITIZE_EMAIL),   
                'message'   =>  array('filter' => FILTER_SANITIZE_STRING)
            );

        $filterPostArray = filter_var_array($_POST, $postFilter); 
        
        var_dump($filterPostArray['firstname']);
        echo '</br>';
        var_dump($filterPostArray['lastname']);
        echo '</br>';
        var_dump($filterPostArray['message']);
        echo '</br>';
        var_dump($filterPostArray['mail']);

        if(!preg_match("/^[A-Za-z .'-]+$/", $filterPostArray['firstname']) || strlen($filterPostArray['firstname']) > 250 ){
            $_SESSION['firstnameError'] = '<p>il ne faut pas de chiffres</p>';
        }
        if(!preg_match("/^[A-Za-z .'-]+$/", $filterPostArray['lastname']) || strlen($filterPostArray['lastname']) > 250 ){
            $_SESSION['lastnameError']= '<p>il ne faut pas de chiffres</p>';
        }
        if(!filter_var($filterPostArray['mail'], FILTER_VALIDATE_EMAIL) || strlen($filterPostArray['mail']) > 200 ){
            $_SESSION['mailError']='<p>le mail invalide</p>';
        }
        if(strlen($filterPostArray['message']) === 0 || strlen($filterPostArray['message']) > 1500 ){
            $_SESSION['messageError'] = '<p>Le message ne peut pas être vide</p>';
        } 

        if(!isset($_SESSION['firstnameError'])){
            
            $_SESSION['firstname']=$filterPostArray['firstname'];
        }

        if(!isset($_SESSION['lastnameError'])){
            
            $_SESSION['lastname']=$filterPostArray['lastname'];
        }

        if(!isset($_SESSION['mailError'])){
            
            $_SESSION['mail']=$filterPostArray['mail'];
        }

        if(!isset($_SESSION['messageError'])){
            
            $_SESSION['message']=$filterPostArray['message'];
        }


        
        if(isset($_SESSION['firstnameError']) || isset($_SESSION['lastnameError']) || isset($_SESSION['mailError']) || isset($_SESSION['messageError']) ){
    
            $_SESSION['sent']=false;
            header('Location: index.php#contact');
        }else{
            $_SESSION['sent']=true;
            header('Location: index.php#contact');
        }
    }

    

?>