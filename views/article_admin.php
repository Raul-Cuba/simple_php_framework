<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
     <title>Мой первый блог</title>
     <link rel="stylesheet" href="../views/bootstrap.css">
     <link rel="stylesheet"  href="../views/style.css">     
</head>
<body>
     <div class="container">
          <h1>Мой первый блог</h1>
          <div>
             <form method="post" action="index.php">
                <label>
                  Название
                  <input type="text" name="title" value="" class="form-item" autofocus required>
                </label>
                <label>
                  Дата
                  <input type="date" name="date" value="" class="form-item" required>
                 </label>
                 <label>
                  Содержимое
                  <textarea  class="form-item" name="content" required></textarea>
                </label>
                <input type="submit" value="Сохранить" class="btn btn-success btn-lg">
                             
             </form>
          </div>
          <footer>
               <p>Мой первый блог<br>Copyright &copy;2016</p>
          </footer>
     </div>
</body>
</html>
