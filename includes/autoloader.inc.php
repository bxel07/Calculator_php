<?php
//Autoload
spl_autoload_register('myAutoLoader'); //ketika  suatu function di registrasikan maka parameter classname akan secara otomatis berisi classname 
function myAutoLoader($className) {
    // digunakan untuk menangkap http request ketika laman di jalanakan
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; // strpos di gunakan untuk mencari spesifik kata includes pada $url
    if(strpos($url, 'includes')!== false) {
        $path = '../classes/';
    }else {
        $path = 'classes/';
    }
    $extension = '.class.php';
    require_once $path .  $className . $extension;
}
?>