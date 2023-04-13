<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/

include "form.php";
include "database.php";

$form = new Form("input.php", "Input Data Mobil");

$form->addField("merek", "Merek Mobil");
$form->addField("model", "Model Mobil");
$form->addField("tahun", "Tahun Produksi");

if(isset($_POST['submit'])) {
    $merek = $_POST['merek'];
    $model = $_POST['model'];
    $tahun = $_POST['tahun'];

    $mobil = new Mobil($conn);
    $mobil->insertData($merek, $model, $tahun);
    header("Location: index.php");
}

echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();

?>
