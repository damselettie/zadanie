<?php
function policz($sciezka) {
    $suma = 0;
    if (!file_exists($sciezka))
      return 0;
    if (is_file($sciezka))
      return filesize($sciezka);
    $katalog = opendir($sciezka);
    while (false !== ($plik = readdir($katalog))) {
      if ($plik<>"." && $plik<>"..")
        $suma += policz("$sciezka/$plik");
    }
    closedir($katalog);
    return $suma;
}

$file = 'suma.txt';
$suma = policz("Z:\\Wspolny\\2022 A");
$content = "$suma\n";


file_put_contents($file, $content, FILE_APPEND);
?>
