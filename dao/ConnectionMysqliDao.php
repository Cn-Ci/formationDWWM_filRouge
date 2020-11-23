<?php 
class ConnectionMysqliDao {
    
    public static function connect (){

        $db = new PDO('mysql:host=host;port=port;dbname=dbname', 'cnciprrcnci', '2ADd67cJb');
        
        return $db;
    }
}
?>