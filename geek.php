<?php
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    'https://www.geeksforgeeks.org/matlab-data-types/'
);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);

//curl_close
curl_close($ch);

//display web page
echo '<head>';
echo '<meta http-equiv="content-type" content="text/html; charset =utf-8"/>';
echo '</head>';
echo '<body>';
echo '<h1>Web Scraping using cURL </h1>';

//check for images

preg_match_all(
    "!https://media.geeksforgeeks.org/wp-content/uploads/(.*)/(.*).png!",
    $output,
    $data
);
// echo gettype($data);
echo count($data);
echo '<br />';
foreach ($data as $l => $list) {
    echo '<pre>';
    print_r($list);
}

echo '</body>';