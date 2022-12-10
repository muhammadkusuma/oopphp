<?php 

// echo $_SERVER['DOCUMENT_ROOT'];

spl_autoload_register(function ($class){
    require __DIR__. '/Produk/' . $class . '.php';
    // require_once $_SERVER['DOCUMENT_ROOT'] . '/Produk/' . $class . '.php';
});

?>