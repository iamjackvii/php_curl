<?php

// if (isset($_POST['search'])) {
//     // $search = 
// }
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://hamrobazaar.com/category/computers-peripherals/4cce4a7c-431b-474d-8b58-4fd2ddc191cf");
curl_exec($ch);
curl_close($ch);