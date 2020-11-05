<?php

function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}

function db_conn(){
    try {
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
        return $pdo;
      } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
      }
}

function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error[2]);
}

function redirect($file_name){
    header('Location:' . $file_name);
}



function sessionCheck()
{
    if (!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()) {
        exit("LOGIN ERROR");
    } else {
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    }
}

?>