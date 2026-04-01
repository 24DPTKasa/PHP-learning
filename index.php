<?php 
require __DIR__.'/vendor/autoload.php';

$url = 'https://www.rimi.lv/e-veikals/lv/akcijas-piedavajumi';

$client = new \GuzzleHttp\Client();
$resp = $client->get($url);
$html = $resp->getBody()->getContents();

$document = new \DiDom\Document();
$document->loadHtml($html);

$posts = $document->find('div.card__image-wrapper');
foreach($posts as $post) {
    echo($post->html('img'));
}
// $catalog = $document->find('.product-grid .card__image-wrapper');


// foreach ($catalog as $item) {
//     var_dump($item->attr('src'), $item->attr('title'));

//     echo '<br>';
// }

?>