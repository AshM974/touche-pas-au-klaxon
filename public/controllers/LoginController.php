<?php

require_once __DIR__ . '/../../config/database.php';

class LoginController {

    public function index() {

        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            //1 on recupere  email + password
            $email = $_POST['email'];
            $password = $_POST['password']; 
            $sql = "SELECT* from users WHERE email=?";
            $login = $pdo->prepare($sql);
            $login->execute([$email]);

            //2 on verifie la connexion avant la redirection
            $user = $login->fetch(PDO::FETCH_ASSOC);
            if($user && $password == $user['mot_de_passe']) {
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                header('Location:/users');
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