<?php
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    'https://hamrobazaar.com/category/computers-peripherals/4cce4a7c-431b-474d-8b58-4fd2ddc191cf'
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
// https: //hamrobazaar.obs.ap-southeast-3.myhuaweicloud.com/User/Posts/2022/4/1/a7cd65e4-600c-4923-8179-61e3c1e782de?x-image-process=image/resize,m_lfit,h_300,w_300
preg_match_all(
    "!https://hamrobazaar.obs.ap-southeast-3.myhuaweicloud.com/User/Posts/(.*)/(.*)/(.*)/(.*).(.*)?x-image-process=image/resize,m_lfit,h_300,w_300!",
    $output,
    $data
);
// echo gettype($data);
echo count($data);
echo '<br />';
foreach ($data as $l => $list) {
    echo '<pre>';
    print_r($list);
    // echo $list;
}

echo '</body>';