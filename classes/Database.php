<?php
class Database {
    private static $db = Null;
	
    public static function handler(){
      if(self::$db === Null){
        $mysqli = new mysqli('localhost', 'root', '', 'currency');
        if ($mysqli->connect_error) {
          die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
        }
        $mysqli->query ("SET NAMES UTF8");
        self::$db = $mysqli;
      }
      return self::$db;
    }

    public function query($query){
      return self::handler()->query($query);
    }

    public static function arrayQuery($query){
      $result = self::handler()->query($query);
      $array = array();
      while($row = $result->fetch_assoc()){
        $array[] = $row;
      }
      return $array;
    }
}
