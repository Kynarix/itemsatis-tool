<?php
header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
$ilanAdi = $_POST['ilanAdi'] ?? '';
$ilanalani = $_POST['ilanalani'] ?? '';
$ilansaati = $_POST['ilansaati'] ?? '';
$ilandakikasi = $_POST['ilandakikasi'] ?? '';
$saticiresmi = $_POST['saticiresmi'] ?? '';
$saticiseviyesi = $_POST['saticiseviyesi'] ?? '';
$saticisadi = $_POST['saticisadi'] ?? '';
$ilanresmi = $_POST['ilanresmi'] ?? '';
session_start();
$_SESSION['form_data'] = [
    'ilanAdi' => $ilanAdi,
    'ilanalani' => $ilanalani, 
    'ilansaati' => $ilansaati,
    'ilandakikasi' => $ilandakikasi,
    'saticiresmi' => $saticiresmi,
    'saticiseviyesi' => $saticiseviyesi,
    'saticisadi' => $saticisadi,
    'ilanresmi' => $ilanresmi
];
header('Content-Type: application/json');
echo json_encode(['success' => true]);
exit;
?>