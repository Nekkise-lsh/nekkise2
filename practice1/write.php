<?php
$conn = mysqli_connect('localhost', 'root', 'llllll');
mysqli_select_db($conn, 'opentutorials2');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body{
      margin: 0;
    }
    body.black{
      background-color: black;
      color:white;
    }
      header{
        border-bottom: 1px solid gray;
        padding-left: 70px;
      }
      nav {
        border-right: 1px solid gray;
        width:200px;
        height: 700px;
        float: left;
      }
      nav ol{
        margin: 0;
        padding:20px;
        list-style: none;
      }
      $content{
        padding-left: 20px;
        float: left;
        width: 400px;
      }
    </style>
  </head>
  <body id="body">
    <header>
      <h1><a href="index.php">생활코딩 JavaScript</h1>
    </header>
    <nav>
      <ol>

<?php
$sql  = "SELECT * FROM `topic`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
   echo '<li><a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
}
 ?>

      </ol>
    </nav>
    <div="content">
      <article>
        <form class="" action="process.php" method="post">
          <p>
            <label for="title"> 제목 :</label>
            <input id="title" type="text" name="title">
          </p>
          <p>
            <label for="author">저자 : </label>
            <input id="author" type="text" name="author" value="">
          </p>
          <p>
            <label for="description">본문 :</label>
            <textarea id="description" name="description" rows="8" cols="40"></textarea>
          </p>
          <p>
            <input type="submit" value="전송">
          </p>
        </form>

      </article>
      <input type="button" name="name" value="White" onclick="document.getElementById('body').className=''">
      <input type="button" name="name" value="Black" onclick="document.getElementById('body').className='black'">
      <a href="write.php">쓰기</a>
   </div>
  </body>
</html>



<?php


 ?>
