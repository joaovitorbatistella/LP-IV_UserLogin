<?php
    require_once 'app/entities/Users.php';
    use App\Entities\Users;

    define('NAV', 'register');
	define('TITLE', 'Cadastrar Novo Usuário');

    $isUpdate=false;

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
        $objUser = new Users();

        $objUser->username    = $_POST['username'];
        $objUser->email       = $_POST['email'];
        $objUser->first_name  = $_POST['first_name'];
        $objUser->last_name   = $_POST['last_name'];
        $objUser->address     = $_POST['address'];
        $objUser->city        = $_POST['city'];
        $objUser->country     = $_POST['country'];
        $objUser->postal_code = $_POST['postal_code'];
        $objUser->about_me    = $_POST['about_me'];

        $res = $objUser->create();

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