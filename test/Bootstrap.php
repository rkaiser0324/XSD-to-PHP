<?php
define("ROOT", dirname(__FILE__) . '/../');
require_once  ROOT . 'lib/PhpFig/Ps4AutoloaderClass.php';
$loader = new \PhpFig\Psr4AutoloaderClass;
$loader->register();
$loader->addNamespace('com',  ROOT . 'src/com');
$loader->addNamespace('Zend',  ROOT . 'lib/ZF/1.10.7/Zend');
$loader->addNamespace('dk',  ROOT . 'test/data/expected/ContactCompany/dk');
$loader->addNamespace('oasis',  ROOT . 'test/data/expected/ContactCompany/oasis');
$loader->addNamespace('un',  ROOT . 'test/data/expected/ContactCompany/un');
$loader->addNamespace('oasis',  ROOT . 'test/data/expected/ubl2.0/oasis');
$loader->addNamespace('dk\nordsign\application\services',  ROOT . 'test/data/expected/ContactPersonWsdl/services');

function rmdir_recursive($dir) {
    if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
         if (filetype($dir."/".$object) == "dir") rmdir_recursive($dir."/".$object); else unlink($dir."/".$object); 
       } 
     } 
     reset($objects); 
     rmdir($dir); 
   } 
}
