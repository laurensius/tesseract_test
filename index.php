<?php
namespace thiagoalessio\TesseractOCR;
require_once 'vendor/autoload.php';
require_once 'vendor/thiagoalessio/tesseract_ocr/src/TesseractOCR.php';
try{
   $filepath = 'tests/images/1.jpg';
   $tesseractInstance = new TesseractOCR($filepath);
   $tesseractInstance->psm(1);
   //$tesseractInstance->whitelist(range('a','z'));
   //$tesseractInstance->lang('eng', 'jpn', 'spa');
   $result = $tesseractInstance->run();
   echo $result;
}catch(exception $e){
echo $e;
}
?>