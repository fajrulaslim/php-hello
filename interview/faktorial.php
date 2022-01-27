<?php 

function hitung_faktorial($bilangan){
  if($bilangan>=1)
  {
    echo "Faktorial dari $bilangan adalah: <br>";
           
    for($i=1; $i <= $bilangan; $i++)
    {
       $faktorial = 1; //set nilai awal
   
       echo $i. "! = "; 
           
       for($j=$i; $j > 0; $j--) //karena ascending, nilai awal dimulai dari $i dan tiap kali perulangan dikurang 1
       {
      if($j == 1)
      {
              echo " 1 = " .$faktorial;
          }
      else
          { 
            echo $j ." x ";
          }
      $faktorial*=$j; //menghitung hasil faktorial
      }
    }
  }
  else if($bilangan == 0)
  {
     echo "0! = 1";
  }
  else  //jika memasukkan nilai yang lebih kecil dari 0
  {
     echo "Anda salah memasukkan bilangan.";
  }
}

echo hitung_faktorial(3);


 ?>