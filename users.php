<?php
    require_once 'app/entities/Users.php';
    // require_once 'app/Session/Login.php';

    use \App\Entities\Users;
    // use \App\Session\Login;

    $isUpdate=false;

	define('NAV', 'users');
	define('TITLE', 'Usuários Cadastrados');

    // Login::requiredLogin();

    $users = Users::getUsers();

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/menu.php';
    include __DIR__ . '/includes/navbar.php';
    include __DIR__ . '/includes/list.php';
    include __DIR__ . '/includes/footer.php';
?>