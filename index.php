<!DOCTYPE html>
<html>
<body>

<?php
$response = file_get_contents('https://api-qa.trustedshops.com/rest/internal/v2/shops/X6A4AACCD2C75E430381B2E1C4CLASSIC/reviews.json');
$json = json_decode($response);
$reviews = $json->response->data->shop->reviews;

function sortByMarkDescending($a, $b) {
  return $b->mark - $a->mark;
}
usort($reviews, 'sortByMarkDescending');
?>

<table>
  <tr>
    <td>Mark</td>
    <td>Comment</td>
  </tr>
  <?php foreach ($reviews as $review) : ?>
  <tr>
    <td><?php echo $review->mark; ?></td>
    <td><?php echo $review->comment; ?></td>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>