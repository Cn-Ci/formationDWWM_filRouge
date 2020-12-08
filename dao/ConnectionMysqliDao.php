<?php 
class ConnectionMysqliDao {
    public static function connect () {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cnciprrcnci;charset=utf8', 'root', '');
            return $bdd;
        } catch(PDOException $e) {
            echo "Error :" . $e->getMessage(), $e->getCode();
        }
    }
}
?>