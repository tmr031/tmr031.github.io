<?php
   // 앞에 '//' 가 붙여진 줄은 출력없음.

   $text1 = "안녕하세요?";
   $text2 = "반갑습니다.";
?>

<html>
  <body>

    출력시작합니다.<br><br>

    text1 : <?= $text1 ?><br>
    text1 : <? echo $text1 ?><br><br>

    text2 : <?= $text2 ?> <br>
    text2 : <? echo $text2 ?> <br><br>

   <font color=#0000ff>
   <?
      echo " $text1 <br>";
      echo " $text2 <br><br>";
   ?>
   </font>

  </body>
</html>
