<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $url = $_POST['url'] ?? '';
    
    if(empty($url)) {
        throw new Exception("URL boş olamaz");
    }

    if (!preg_match('/^https?:\/\/(www\.)?itemsatis\.com/', $url)) {
        throw new Exception("Sadece itemsatis.com URL'leri desteklenmektedir");
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
    
    $html = curl_exec($ch);
    
    if(curl_errno($ch)) {
        throw new Exception('Curl error: ' . curl_error($ch));
    }
    
    curl_close($ch);
    $dom = new DOMDocument();
    @$dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
    $xpath = new DOMXPath($dom);
    $data = [];

    $titleNode = $xpath->query('/html/body/section[2]/div/div[2]/div[2]/div[1]/h1')->item(0);
    if ($titleNode) {
        $fullTitle = trim($titleNode->textContent);
        $data['title'] = preg_replace('/(^#\d+)|#\d+$/', '', $fullTitle);
        $data['title'] = preg_replace('/^\d+/', '', $data['title']);
    } else {
        $data['title'] = '';
    }

    $imageNode = $xpath->query('//img[@data-fancybox="gallery"]')->item(0);
    if ($imageNode) {
        $data['image'] = $imageNode->getAttribute('href');
        if (empty($data['image'])) {
            $data['image'] = $imageNode->getAttribute('src');
        }
    } else {
        $data['image'] = '';
    }

    $categoryNode = $xpath->query('/html/body/section[1]/div/ol/li[3]/a/span')->item(0);
    $data['area'] = $categoryNode ? trim($categoryNode->textContent) : '';
    $sellerNode = $xpath->query('/html/body/section[2]/div/div[2]/div[3]/div[1]/div/div[1]/div[1]/div/a/b')->item(0);
    $data['seller'] = $sellerNode ? trim($sellerNode->textContent) : '';

    $sellerImageNode = $xpath->query('//*[@id="sellerAvatarImg"]')->item(0);
    if ($sellerImageNode) {
        $data['seller_image'] = $sellerImageNode->getAttribute('src');
    } else {
        $data['seller_image'] = '';
    }
    $sellerLevelNode = $xpath->query('/html/body/section[2]/div/div[2]/div[3]/div[1]/div/div[1]/div[1]/div/div/div[1]')->item(0);
    $data['seller_level'] = $sellerLevelNode ? trim($sellerLevelNode->textContent) : '';

    $date = new DateTime();
    $data['hour'] = $date->format('H');
    $data['minute'] = $date->format('i');

    $response = [
        'success' => true,
        'data' => [
            'title' => $data['title'],
            'image' => $data['image'],
            'area' => $data['area'],
            'seller' => $data['seller'],
            'seller_image' => $data['seller_image'],
            'seller_level' => $data['seller_level'],
            'hour' => $data['hour'],
            'minute' => $data['minute']
        ]
    ];

    echo json_encode($response);

} catch(Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 