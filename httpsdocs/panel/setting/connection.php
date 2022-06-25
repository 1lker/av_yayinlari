<?php
try {
    $db=new
PDO("mysql:host=localhost;dbname=islerdatabase;charset=utf8",'isleradmin','Isler@1234');
}

catch (PDOExeception $e) {
    echo $e->getMessage();
}

?>