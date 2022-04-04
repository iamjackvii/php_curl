 <?php
   // $ch = curl_init();
   // curl_setopt($ch, CURLOPT_URL, 'https://hamrobazaar.com/category/computers-peripherals/4cce4a7c-431b-474d-8b58-4fd2ddc191cf');
   // curl_setopt($ch, CURLOPT_HEADER, 0);
   // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   // $output = curl_exec($ch);

   // //curl_close
   // curl_close($ch);

   // echo $output;

   // //display web page
   // echo '<head>';
   // echo '<meta http-equiv="content-type" content="text/html; charset =utf-8"/>';
   // echo '</head>';
   // echo '<body>';
   // echo '<h1>Web Scraping using cURL </h1>';


   // preg_match_all('!card__title!', $output, $data);
   // echo count($data);
   // echo '<br />';

   // foreach ($data[0] as $l => $list) {
   //     echo $list;
   // }

   // echo '</body>';


   $url = "https://hamrobazaar.com/category/computers-peripherals/4cce4a7c-431b-474d-8b58-4fd2ddc191cf/";
   // create a new cURL resource
   $ch = curl_init();

   // // set URL and other appropriate options
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   // //  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)");
   // //  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

   // // grab URL and pass it to the browser
   $v = curl_exec($ch);

   // // close cURL resource, and free up system resources
   curl_close($ch);




   // echo $v;
   echo "<pre>";
   print_r($v);