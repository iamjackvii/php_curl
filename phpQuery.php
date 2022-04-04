<?php
include 'phpQuery/phpQuery.php';

$html = PhpQuery::newDocumentFile('head-hamro.html');
$artlist = $html->find(".lists");
// print_r($artlist);
foreach ($artlist as $li) {
    echo pq($li)->find('.product-redirect a')->html();
    echo '<br/>';
}