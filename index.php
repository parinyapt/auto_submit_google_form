<?php
//demolink//https://docs.google.com/forms/d/e/1FAIpQLSegobn_NuY3Fu-wGr-mUjfPpgfymUBvakZiZup_W24aAjKaqg/formResponse?usp=pp_url&entry.366340186=test&entry.120165218=%E0%B8%94%E0%B8%A3%E0%B8%B5%E0%B8%A1+%23%E0%B8%81%E0%B8%B9%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%B5&entry.120165218=%E0%B8%99%E0%B8%B4%E0%B8%99+%23%E0%B8%81%E0%B8%B9%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%B5&entry.120165218=%E0%B8%97%E0%B8%B5+%23%E0%B8%81%E0%B8%B9%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%B5&submit=Submit
//finallink//https://docs.google.com/forms/d/e/1FAIpQLSf0TYz4Dp77EfF4k_lEedWxJyxLu6tLVzKSvBVjaZ-YSyAYKA/formResponse?usp=pp_url&entry.47376061=%40pccxxy&entry.578075691=%E0%B8%9E%E0%B8%A3%E0%B8%B5%E0%B8%A1+%23%E0%B8%81%E0%B8%B9%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%B5&submit=Submit
//use//https://docs.google.com/forms/d/e/1FAIpQLSf0TYz4Dp77EfF4k_lEedWxJyxLu6tLVzKSvBVjaZ-YSyAYKA/formResponse?usp=pp_url&entry.47376061={{Twitter หรือ Email}}&entry.578075691={{Vote here(url encode)}}&entry.578075691={{Vote here(url encode)}}&submit=Submit
$page = file_get_contents("https://docs.google.com/forms/d/e/1FAIpQLSf0TYz4Dp77EfF4k_lEedWxJyxLu6tLVzKSvBVjaZ-YSyAYKA/formResponse?usp=pp_url&entry.47376061=%40p&entry.578075691=%E0%B8%9E%E0%B8%A3%E0%B8%B5%E0%B8%A1+%23%E0%B8%81%E0%B8%B9%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%B5&submit=Submit");
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<p id="demo"></p>
<p id="seconds"></p>
<p id="milliseconds"></p>
<?php echo $page ?>

<script>
var num = Math.floor(Math.random() * 300000) + 5000;
document.getElementById("demo").innerHTML = num;
jQuery(function($){
 
 var seconds = $('#seconds');
 var milliseconds = $('#milliseconds');

 var s = num/1000;
 var ms = num;
 var i = 1;

 setDate();

 function setDate(){

     is_int(i);
     seconds.html('<strong>' + Math.floor(s) +'</strong> Seconde' + (s>1 ?'s' : ''));

     isZero(ms);
     milliseconds.html('<strong>' + ms +'</strong> Milliseconde' + (ms>1 ?'s' : ''));

     setTimeout(setDate,10);
 }

 function is_int(value){
     if((parseFloat(value/100) == parseInt(value/100)) && !isNaN(value)){
         i++;
         s-= 1;
     } else {
         i++;
     }
 };

 function isZero(value){
     if(value == 0){
         ms = 1000;
     }
     else{
         ms -= 10;
     }
 };
});
setTimeout(function() {  location.reload();}, num);


</script>
</body>
</hmtl>
