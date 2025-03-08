<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Hata raporlamayı etkinleştir
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $url = $_GET['url'] ?? '';
    
    if(empty($url)) {
        throw new Exception("URL boş olamaz");
    }
    if (strpos($url, 'http') === false) {
        if (strpos($url, 'hesap.com.tr') !== false) {
            $url = 'https://www.' . $url;
        } else if (strpos($url, '.html') !== false) {
            $url = 'https://www.hesap.com.tr/' . $url;
        } else {
            throw new Exception("Geçersiz URL formatı");
        }
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
    
    $data = [
        'hesapAdi' => '',
        'hesapResmi' => '',
        'hesapTipi' => '',
        'hesapTarihi' => '',
        'hesapDurumu' => '',
        'hesapEmail' => '',
        'hesapSeviyesi' => '',
        'hesapIsmi' => ''
    ];

    $titleNode = $xpath->query('//h1[@class="account-title"]')->item(0);
    if ($titleNode) {
        $data['hesapAdi'] = trim($titleNode->textContent);
    } else {
        $data['hesapAdi'] = 'Premium Hesap';
    }

    // Hesap Resmi
    $imageNode = $xpath->query('//img[@class="account-avatar"]')->item(0);
    if ($imageNode) {
        $data['hesapResmi'] = $imageNode->getAttribute('src');
    } else {
        $data['hesapResmi'] = 'https://cdn.hesap.com.tr/uploads/account_img/default.jpg';
    }

    $typeNode = $xpath->query('//div[@class="account-type"] | //span[@class="account-type"]')->item(0);
    if ($typeNode) {
        $data['hesapTipi'] = trim($typeNode->textContent);
    }
    $dateNode = $xpath->query('//div[@class="account-date"] | //span[@class="account-date"]')->item(0);
    if ($dateNode) {
        $data['hesapTarihi'] = trim($dateNode->textContent);
    } else {
        $date = new DateTime();
        $data['hesapTarihi'] = $date->format('d F Y');
    }

    $statusNode = $xpath->query('//div[@class="account-status"] | //span[@class="account-status"]')->item(0);
    if ($statusNode) {
        $data['hesapDurumu'] = trim($statusNode->textContent);
    } else {
        $data['hesapDurumu'] = 'Aktif';
    }

    $emailNode = $xpath->query('//div[@class="account-email"] | //span[@class="account-email"]')->item(0);
    if ($emailNode) {
        $data['hesapEmail'] = trim($emailNode->textContent);
    }

    $levelNode = $xpath->query('//div[@class="account-level"] | //span[@class="account-level"]')->item(0);
    if ($levelNode) {
        $data['hesapSeviyesi'] = trim($levelNode->textContent);
    } else {
        $data['hesapSeviyesi'] = rand(1, 10);
    }
    $nameNode = $xpath->query('//div[@class="account-username"] | //span[@class="account-username"]')->item(0);
    if ($nameNode) {
        $data['hesapIsmi'] = trim($nameNode->textContent);
    }

    echo json_encode([
        'success' => true,
        'data' => $data
    ]);

} catch(Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?> 