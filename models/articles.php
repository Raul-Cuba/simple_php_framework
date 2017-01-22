<?php  


//===== ВЗЯТЬ ВСЕ СТАТЬИ ===============================
//функция вызова всего массива статей с помощью БД
function articles_all($link){

    //запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    //извлечение из БД
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}



//======= ДОСТАТЬ ЦЕЛЕВУЮ СТАТЬЮ ========================
function article_one($link, $id_article)
{
    // Запрос
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));
    $article = mysqli_fetch_assoc($result);

    return $article;
}

function articles_get($id_article){
    return ["title"=>"Заголовок",
            "content"=>"Текст",
            "date"=>"2015-01-01"
        ];
}

function articles_new($link, $title, $date, $cotent){
    //Подготовка
    $title = trim($title);
    $content = trim($content);

    //Проверка
    if ($title == '')
        return false;

    //Запрос
    $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";

    $query = sprintf($t,
  mysql_real_escape_string($link, $title),
                        mysql_real_escape_string($link, $date),
                        mysql_real_escape_string($link, $content));

    echo $query;
    $re                         
}

function articles_edit($id, $title, $date, $cotent){
    
}

function articles_delete($id){
    
}