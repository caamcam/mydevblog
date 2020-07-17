+<?php
function connect_to_database()
{
    $servername ="localhost";
    $username = "root";
    $password = "root";
    $databasename = "insert.sql";

try 
{
    $pdo = new PDO("musql :host=$servername;dbname=$databasename",$username,$password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    echo 'connecter successfully';
    return $pdo;
    
} 
 catch (PDOExeption $e){
     echo "connection failed : ". $e ->getMAssage();
    } 
} 
?> 
<?php
connect_to_database();
?>