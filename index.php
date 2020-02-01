<!DOCTYPE html>
<html>
<body>

<?php
$response = file_get_contents('https://api-qa.trustedshops.com/rest/internal/v2/shops/X6A4AACCD2C75E430381B2E1C4CLASSIC/reviews.json');
$json = json_decode($response);
$reviews = $json->response->data->shop->reviews;
foreach ($reviews as $review) {
  echo ' ';
  echo $review->mark;
}
?>

</body>
</html>