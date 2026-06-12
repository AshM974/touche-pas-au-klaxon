<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/LoginGet.php';


class LoginController {

    public function index() {

        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            //1 on recupere  email + password
            $email = $_POST['email'];
            $password = $_POST['password']; 

            $user = LoginGet::getLogin($pdo, $email);
            
            //2 on verifie la connexion avant la redirection
            if($user && $password == $user['mot_de_passe']) {
                $_SESSION['id_users'] = $user['id_users'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['role'] = $user['role'];
                if($user['role'] == 'user') {
                    header('Location:/users');
                    exit;
                } else {
                    header('Location:/dashboard_admin');
                    exit;
                }
                exit;
            }

        
        }
        require_once __DIR__ . '/../views/login.php';

    }

    public function logout() {
            session_destroy();

            header('Location: /');
            exit;
        
    }

}