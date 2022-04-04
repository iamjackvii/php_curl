<?php
$url = 'https://api.hamrobazaar.com/api/Search/Products';


$postData = array(
    'deviceId' => "d1435a3c-8a0b-4189-8578-e33306fa2b4e",
    'deviceSource' => "web",
    'filterParams' => [
        'brand' => "",
        'brandIds' => "",
        'category' => "4cce4a7c-431b-474d-8b58-4fd2ddc191cf",
        'categoryIds' => "",
        'condition' => 0,
        'isPriceNegotiable' => null,
        'priceFrom' => 50000,
        'priceTo' => 200000
    ],
    'latitude' => 0,
    'longitude' => 0,
    'pageNumber' => 1,
    'pageSize' => 200,
    'searchParams' => [
        'searchBy' => "",
        'searchValue' => ""
    ],
    'sortParam' => 0
);

$fields = json_encode($postData);

$ch = curl_init($url);
curl_setopt(
    $ch,
    CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json',
        'ApiKey: 09BECB8F84BCB7A1796AB12B98C1FB9E',
    )
);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

$result = curl_exec($ch);
curl_close($ch);

// echo '<pre>';
// print_r(json_decode($result));
$template = "<table border='1'><thead><tr><th>Product Name</th> <th>Description</th><th>Price</th><th>Contact Number</th><th>Product Condition</th><th>Product Image</th><th>Category</th></tr></thead><tbody>";
$result = json_decode($result);

if (!empty($result->data)) {
    foreach ($result->data as $key => $product) {
        $template .= "<tr>";
        $template .= "<td>$product->name</td>";
        $template .= "<td>$product->description</td>";
        $template .= "<td>$product->price</td>";
        $template .= "<td>" . $product->creatorInfo->createdBy . "</td>";
        $template .= "<td>$product->condition</td>";
        $template .= "<td>";
        foreach ($product->productMedia as $media) {
            $template .= $media->locationKey . ',';
        }
        $template .= "</td>";
        $template .= "<td>$product->categoryName</td>";
        $template .= '</tr>';
    }
}

$template .= "</tbody></table>";

header("Content-Type: application/xls utf-8");

header("Content-Disposition: attachment; filename=product_list" . date('Y_m_d_H_i') . ".xls");

header("Pragma: no-cache");

header("Expires: 0");
echo $template;