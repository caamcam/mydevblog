<!DOCTYPE html>  
<html>
<head>
<title>mini-site-routine</title>
<ul id="nav">
       <li> <a href="http://localhost:8888/ISCC-2020/MyDevBlog/mydevblog/front-office/accueil.html">Accueil</a> </li>
    </br><li> <a href="http://localhost:8888/ISCC-2020/MyDevBlog/mydevblog/front-office/articles.html">Articles</a> </li>
</br><li><a href="http://localhost:8888/ISCC-2020/MyDevBlog/mydevblog/front-office/contact.php">Contacte </a> </li>
</ul>
<?php 
if ($_GET[page]==1) {
echo "<h1> Accueil  </h1>" 
;}
if ($_GET[page]==2) {
    echo "<h1> Articles </h1>" 
    ;}
if ($_GET[page]==3) {
    echo "<h1> Contacte </h1>" 
    ;}
?>


</head>