<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
require_once "../protected/config/config.php";

if (isset($_GET['uid'])) {
  // Get request using random string instead of id to prevent user data leak
  $uid = $_GET['uid'];

  $request = R::findOne( 'request', ' unique_marker = ? ', [$uid]);

  if (!$request) {
    echo 'Wrong parameters provided';
    exit;
  }

  // Load template
  $html= file_get_contents('download-pdf-assets/template/result.html');
  if (isset($_GET['lang']) && $_GET['lang'] === 'la') {
    $html= file_get_contents('download-pdf-assets/template/result_la.html');
  }

  $DOM = new DOMDocument;
  $DOM->loadHTML($html);
  // Modify template

  $name = $request->name;
  $age = $request->age;
  $marital = $request->marital_status;
  $residence = $request->residence;
  $children = $request->children;
  $dependents = $request->dependents;
  $salary = $request->salary;
  $savings = $request->savings;
  $loans = $request->loans;
  $total = $request->total;

  $item = $DOM->getElementById('result_name')->nodeValue = $name;
  $item = $DOM->getElementById('result_age')->nodeValue = $age;
  $item = $DOM->getElementById('result_marital')->nodeValue = $marital;
  $item = $DOM->getElementById('result_residence')->nodeValue = $residence;
  $item = $DOM->getElementById('result_child')->nodeValue = $children;
  $item = $DOM->getElementById('result_dependents')->nodeValue = $dependents;
  $item = $DOM->getElementById('result_salary')->nodeValue = $salary;
  $item = $DOM->getElementById('result_savings')->nodeValue = $savings;
  $item = $DOM->getElementById('result_loans')->nodeValue = $loans;
  $item = $DOM->getElementById('result_total')->nodeValue = $total;

  // Output template to tmp folder
  // Create folder if doesn't exists
  if (!file_exists('tmp')) {
    mkdir('tmp', 0755, true);
  }
  $DOM->saveHTMLFile("tmp/result.html");

  // Execute node js script to generate pdf and save to tmp
  exec(escapeshellarg($node_path) . " " . escapeshellarg($script_path), $result);

  // Copy assets folder to keep images, fonts, etc
  recurseCopy('download-pdf-assets/template/assets', 'tmp/assets');

  // Debug
  if ($debug_mode_on) {
    var_dump($result);
    exit;
  }

  // Send file
  $file = 'tmp/result.pdf';
  header('Content-Disposition: attachment; filename="'. basename($file) . '"');
  header('Content-Length: ' . filesize($file));
  readfile($file);

  // Delete tmp folder
  array_map('unlink', glob("tmp/*.*"));
  rmdir('tmp');
}

function recurseCopy(
  string $sourceDirectory,
  string $destinationDirectory,
  string $childFolder = ''
): void {
  $directory = opendir($sourceDirectory);

  if (is_dir($destinationDirectory) === false) {
      mkdir($destinationDirectory);
  }

  if ($childFolder !== '') {
      if (is_dir("$destinationDirectory/$childFolder") === false) {
          mkdir("$destinationDirectory/$childFolder");
      }

      while (($file = readdir($directory)) !== false) {
          if ($file === '.' || $file === '..') {
              continue;
          }

          if (is_dir("$sourceDirectory/$file") === true) {
              recurseCopy("$sourceDirectory/$file", "$destinationDirectory/$childFolder/$file");
          } else {
              copy("$sourceDirectory/$file", "$destinationDirectory/$childFolder/$file");
          }
      }

      closedir($directory);

      return;
  }

  while (($file = readdir($directory)) !== false) {
      if ($file === '.' || $file === '..') {
          continue;
      }

      if (is_dir("$sourceDirectory/$file") === true) {
          recurseCopy("$sourceDirectory/$file", "$destinationDirectory/$file");
      }
      else {
          copy("$sourceDirectory/$file", "$destinationDirectory/$file");
      }
  }

  closedir($directory);
}