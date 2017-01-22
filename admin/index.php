<?php
     require_once("../models/database.php");
     require_once("../models/articles.php");

     $link = db_connect();

     if (isset($_GET['action'])) 
         $action = $_GET['action'];
     else 
         $action = "";

     if ($action === "add") {
         
         include("../views/article_admin.php");
     }else{
     $articles = articles_all($link);

     include("../views/articles_admin.php");
     }
 ?>    

