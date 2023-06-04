<?php
    require_once 'app/entities/Users.php';
    // require_once 'app/Session/Login.php';

    use \App\Entities\Users;
    // use \App\Session\Login;

    define('NAV', 'register');
	define('TITLE', 'Atualizar Usuário');

    $isUpdate=true;

    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    $objUser = Users::getUser($_GET['id']);
    
    if(!$objUser instanceof Users){
        header('location: index.php?status=error');
        exit;
    }

    if(isset(
        $_POST['username'],
        $_POST['email'],
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['address'],
        $_POST['city'],
        $_POST['country'],
        $_POST['postal_code'],
        $_POST['about_me']
    )){
        $objUser->username    = $_POST['username'];
        $objUser->email       = $_POST['email'];
        $objUser->first_name  = $_POST['first_name'];
        $objUser->last_name   = $_POST['last_name'];
        $objUser->address     = $_POST['address'];
        $objUser->city        = $_POST['city'];
        $objUser->country     = $_POST['country'];
        $objUser->postal_code = $_POST['postal_code'];
        $objUser->about_me    = $_POST['about_me'];

        $res = $objUser->update();

        if($res) {
            header('location: index.php?status=success');
        } else {
            header('location: index.php?status=error');
        }        
    }


    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/menu.php';
    include __DIR__ . '/includes/navbar.php';
    include __DIR__ . '/includes/form.php';
    include __DIR__ . '/includes/footer.php';
?>