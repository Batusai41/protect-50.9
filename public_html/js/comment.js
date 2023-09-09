var Mywindow;
window.onload = function wind(){
var img = document.getElementById('comment');
let ims = localStorage.getItem('pic');
if (img == null){ alert('Элемент не получен');}
img.src = ims;
Mywindow=window.open("./public_html/comment.php");
}

goBack = function(){
    Mywindow =window.open("http://mygalery/index.php");
}

goData = function(){
    Mywindow = window.open('http://mygalery/formimg.php');
}