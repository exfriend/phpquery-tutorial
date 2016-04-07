<?php

require_once 'vendor/autoload.php';


// ---------------------------------------------------------------------
// --[ Main code ]------------------------------------------------------
// ---------------------------------------------------------------------

$html = file_get_contents( 'http://www.citrus.ua/shop/goods/mobile/189/72857' );

phpQuery::newDocument( $html );

$price = pq( '.PreOrderPrice .price' )->text();
$stock = pq( '.is_available_box' )->text();

xd( $price . ' - ' . $stock );


phpQuery::unloadDocuments();
