<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $folder = 'imagini/';

  for ($i = 1; $i <= 8; $i++) {
    $inputName = 'image' . $i;
    if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
      $tmpFilePath = $_FILES[$inputName]['tmp_name'];
      $newFilePath = $folder . $_FILES[$inputName]['name'];

      // Verifică extensia și salvează doar în formatul webp
      $ext = strtolower(pathinfo($newFilePath, PATHINFO_EXTENSION));
      if ($ext === 'webp') {
        move_uploaded_file($tmpFilePath, $newFilePath);
        echo "Imaginea " . $inputName . " a fost salvată cu succes.<br>";
      } else {
        echo "Eroare: Imaginea " . $inputName . " trebuie să fie în formatul webp.<br>";
      }
    }
  }
}
?>
