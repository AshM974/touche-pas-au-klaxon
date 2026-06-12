<?php 

class LoginGet {
    public static function getLogin(PDO $pdo, string $email): array|false{
        $sql = "SELECT* from users WHERE email=?";
        $user = $pdo->prepare($sql);
        $user->execute([$email]);

        return $user->fetch(PDO::FETCH_ASSOC);


    }
}