<?php include './templates/template.php';?>
<link  href="/public_html/css/imstyle.css" rel="stylesheet"/>
<form action="#" method="GET" id ="frm">
	<label>Ввод комментария<textarea ></textarea></label><br>
	 <label>Ваше имя<textarea required></textarea></label><br>
	<label>Файл изображения<input type ='text' value = ""></label>

<script>		
const input = document.querySelector('input');
const valFrom = localStorage.getItem('pic');
input.value =valFrom;
	</script>
	<br>
	
	<input type="submit">
</form>