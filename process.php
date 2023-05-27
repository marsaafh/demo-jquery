<?php
// // Mengambil data dari request POST
// $data['name'] = $_POST['name'];
// $data['email'] = $_POST['email'];
// $data['org'] = $_POST['org'];
// $data['adr'] = $_POST['adr'];
// // $data['message'] = $_POST['message'];

// echo json_encode($data);

// Mengambil data dari request POST
$number = $_POST['number'];
$text = $_POST['text'];

// Menyusun variabel array
$array = array();
for ($i = 0; $i < $number; $i++) {
  $array[] = $text . ' merupakan index ke-' . $i;
}

// Mengubah array menjadi JSON
$response = json_encode($array);

// Mengirimkan response JSON
header('Content-Type: application/json');
echo $response;
?>

