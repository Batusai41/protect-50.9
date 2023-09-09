<?php 

$array= scandir("public_html/img/");
for ($i=0; $i< count($array); $i++){
echo $array[$i];
}
?>

<script type="text/javascript">
    alert ('here');
    let ar = <?php echo json_encode($array); ?>
    alert (ar.length);
    var body = document.getElementsByTagName('body')[0];
    for (let i=0; i< count(ar); i++){

    newdiv = document.createElement('div');   
    newdiv.id = 'i';                     
    alert("./public_html/img/". ar[i]);
    <img src="./public_html/img/". ar[i] alt="img">
    body.appendChild(newdiv);                 
    body.insertBefore(newdiv,body.firstChild) 
    } 
</script>