<?php
for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=1; $k<=$i; $k++) {
        echo "$k";
    }echo "<br>";
}
for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=$i; $k>=1; $k--) {
        echo "$k";
    }echo "<br>";
}
for ($i=1; $i<=5; $i++){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
for ($i=1; $i<=5; $i++){
    for ($j=5; $j>=$i; $j--){
        echo $j;
    }echo "<br>";
}
for ($i=5; $i>=1; $i--){
    for ($j=5; $j>=$i; $j--){
          echo $j;
     }echo "<br>";
}
for ($i=5; $i>=1; $i--){
      for ($j=$i; $j<=5; $j++){
          echo $j;
      }echo "<br>";
}
for ($i=5; $i>=1; $i--){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
for ($i=1; $i<=5; $i++){
    for ($j=$i; $j<=5; $j++){
    echo $j;
    }
    echo "<br>";
}
for( $a=5; $a>0; $a--){
    for($b=6; $b>$a; $b--){
        echo "*";
    }echo"<br>";
}
?>