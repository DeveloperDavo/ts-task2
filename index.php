<!DOCTYPE html>
<html>
<body>

<?php
$response = file_get_contents('https://api-qa.trustedshops.com/rest/internal/v2/shops/X6A4AACCD2C75E430381B2E1C4CLASSIC/reviews.json');
$json = json_decode($response);
print_r($json->response->data->shop->reviews['0']->changeDate);
?>

</body>
</html>