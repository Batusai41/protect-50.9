<!--<?php include '/templates/template.php'?>
<?php include 'logo.inc.php'?>
 <?php include 'menu.inc.php'?>-->
<!-- <link  href="./public_html/css/style.css" rel="stylesheet"/>-->
 <link  href="/public_html/css/imstyle.css" rel="stylesheet"/>
 
 <h1> Комментарии</h1>
 <div id ='comm'>
     <img src = "" id ='comment' width = "60%" >
</div>
<div class='btn'>
  <button type = 'submit' id='back' onclick = 'goBack()'>Назад </button>
</div>
<div class='btn1'>
  <button type = 'submit' id='back1' onclick = 'goData()'>Добавить комментарий</button>
</div>
<div class='tbl'>
<table class="mytbl">
    <caption><h2>Комментарии к изображению</h2></cartion>
    <tr>
      <th>Комментарий</th>
      <th>Автор </th>
      <th>Дата </th>
    </tr>
    <tr>
      <td>Здесь будет размещён комментарий</td>
      <td>Ячейка 2</td>
      <td>Ячейка 3</td>
    </tr>
</table>
</div>
<script src ='./js/comment.js'></script>