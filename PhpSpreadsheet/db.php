<?php
class DB
{
    public static function connect()
    {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=datamining;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    public static function query($query, $param = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($param);
        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
    public static function loginUser($user_id)
    {
        $cstrong = true;
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        DB::query('INSERT INTO login_token VALUES (\'\', :token, :idUser )', array(':token' => sha1($token), ':idUser' => $user_id));
        setcookie("PRPL", $token, time() + 60 * 60 * 17, '/', null, null, true);
        setcookie("PRPL1", '1', time() + 60 * 60 * 17, '/', null, null, true);
    }
}
