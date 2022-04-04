<?php
$ch = curl_init();
curl_setopt(
    $ch,
    CURLOPT_URL,
    'https://hamrobazaar.com/category/computers-peripherals/4cce4a7c-431b-474d-8b58-4fd2ddc191cf'
);
curl_setopt(
    $ch,
    CURLOPT_RETURNTRANSFER,
    true
);
$result = curl_exec($ch);
// echo $result;
curl_close($ch);
preg_match_all('!hamrobazaar.obs.ap-southeast-3.myhuaweicloud.com/User/Posts/(.*).webp?x-image-process=image/resize,m_lfit,h_300,w_300!', $result, $data);

echo '<pre>';
print_r($data);
//https://hamrobazaar.obs.ap-southeast-3.myhuaweicloud.com/User/Posts/2022/3/30/b19678c3-a6da-4126-a3ad-013986cd38cd.webp?x-image-process=image/resize,m_lfit,h_300,w_300
// https://hamrobazaar.obs.ap-southeast-3.myhuaweicloud.com/User/Posts/2022/3/30/27c24a42-8e02-45c8-824e-f8b1eaf29557.webp?x-image-process=image/resize,m_lfit,h_300,w_300