<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>php</title>
 </head>
 <body>
  <?php
   /*
    belajar
    php
   */
   
   // variabel pada php
   $x = "Harizaldo";
   $nama = "Belajar php";
   
   // variabel tidak boleh di mulai dari angka harus huruf/simbol
   /*
    misal nya
    $123 <ini salah
	$x123 <ini benar
	$_123 <ini benar
   */
  
   echo "Hello World ";
   echo "Halo ". $x . $nama ."<br/>";
   print "Belajar Php ";
   
   // tipe dara -string-
   $sky = "sky";
   $yks = "yks";
   
   print $sky;
   print $sky." ".$yks;
   print "misal mau nulis \$sky";
   
   /* tanda titik untuk menggabungkan variabel
      tanda " " untuk memberi spasi pada output variabel
	  misal nya mau nulis $sky tapi bukan variabel nya kita harus gunnakan tanda \ (\$sky)
   */
  ?>
 </body>
</html>