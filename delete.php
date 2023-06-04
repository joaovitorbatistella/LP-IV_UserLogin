<?php
    require_once 'app/entities/Users.php';
    // require_once 'app/Session/Login.php';

    use \App\Entities\Users; 
    // use \App\Session\Login;
  
    // Login::requiredLogin();

    //validação da requisição
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    $objUser = Users::getUser($_GET['id']);

    if(!$objUser instanceof Users){
        header('location: index.php?status=error');
        exit;
    }

    if( isset($_POST['delete']) ){   
        $objUser->delete();
        
        header('location: index.php?status=success');
    }


    include __DIR__ . '/includes/confirm-delete.php';
?>
    