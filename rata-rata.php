<?php 

function nilai($mtk, $bahasaIndonesia, $bahasaInggris, $ipa){
  if(!$mtk
  || !$bahasaIndonesia
  || !$bahasaInggris
  || !$ipa) {
    echo "Tolong setiap nilai mata pelajaran di isi";
  } 

  else if(gettype($mtk) != 'integer'
  || gettype($bahasaIndonesia) != 'integer'
  || gettype($bahasaInggris) != 'integer'
  || gettype($ipa) != 'integer') {
    echo "Isi dengan angka";
  }

  else{
    $result = ($mtk + $bahasaIndonesia + $bahasaInggris + $ipa) / 4;
    if( $result >= 90 ) {
      echo "Rata-rata = ".$result;
      echo "<br>";
      echo "Grade = A";
    }
    else if( $result >= 80 ) {
      echo "Rata-rata = ".$result;
      echo "<br>";
      echo "Grade = B";
    }
    else if( $result >= 70 ) {
      echo "Rata-rata = ".$result;
      echo "<br>";
      echo "Grade = C";
    }
    else if( $result >= 60 ) {
      echo "Rata-rata = ".$result;
      echo "<br>";
      echo "Grade = D";
    }
    else if( $result >= 0 ) {
      echo "Rata-rata = ".$result;
      echo "<br>";
      echo "Grade = E";
    }
    else {
      return 0;
    }
  }
}

nilai(0, 0, 0, 0);

?>