<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
     <title>Мой первый блог</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
          

  <?php
   //-------- СНАЧАЛА МЫ СОЕДИНЯЕМСЯ С БАЗОЙ ДАННЫХ ------------------------
   require_once("models/database.php");
   require_once("models/articles.php");

   $link = db_connect();
    
    
   //-------- ЗАТЕМ У НАС ДВА ВАРИАНТА -----
   /* 1) ЕСЛЮ юзер открыл просто http://89.223.25.201/blog - то есть без
      GET запроса - то вывести ВСЕ статьи из базы данных  
    
       2) ЕСЛИ юзер указал в GET запросе какая его статья интересует - то
      НАЙТИ ее и вывести либо сообщить об ошибке
   */
    
    $articles = array();
    
    if (  !isset($_GET['id']) ) 
    {//***** все статьи, GET ЗАПРОСА не было ***********
       $articles = articles_all($link);  
        //ВЫВОД ИНФОРМАЦИИ О СТАТЬЕ/СТАТЬЯХ-
        include("views/articles.php"); 
    }//***** все статьи, GET ЗАПРОСА не было ***********
    else
    {//********** Вывести цевелевую статью *************
       $article = article_one($link, $_GET['id']); 
       array_push($articles, $article);
       //ВЫВОД ИНФОРМАЦИИ О СТАТЬЕ/СТАТЬЯХ-
       include("views/articles.php");        
    }//********** Вывести цевелевую статью *************
   
  ?>

  
      
     <div class="container">
        <br><br><br>
        <a href="/project4/blog">Вернуться назад на главную</a><br><br>
               <p>Мой первый блог<br>Copyright &copy;2016</p>
     </div>

</div>
</body>
</html>