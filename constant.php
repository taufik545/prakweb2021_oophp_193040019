<?php
// define("NAMA", "Taufik Hidayat");
// echo NAMA;

// echo '<br>';
// const UMUR = 20;
// echo UMUR;

// class Coba {
//   const NAMA = "Taufik Hidayat";
// }

// echo "<h1>" . COBA::NAMA . "</h1>";

// // Magic Constant
// echo FILE;

// function coba() {
//   return FUNCTION;
// }

// echo coba();

class Coba
{
  public $kelas = _CLASS_;
}

$obj = new Coba();
echo $obj->kelas;
