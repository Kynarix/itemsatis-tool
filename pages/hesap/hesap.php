<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twixx - Hesap.com.tr</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <main>
        <!-- Hesap.com.tr için Özel Bölüm -->
        <section class="special-section" id="hesap-form">
            <div class="container">
                <div class="special-content">
                    <div class="special-header">
                        <h2>Hesap İşlemleri</h2>
                        <p>Hesap.com.tr için hesap işlemleri formu</p>
                    </div>
                    
                    <div class="special-form">
                        <div class="form-container">
                            <h3>Hesap Gönderme</h3>
                            <div class="form-group">
                                <label for="hesap-adi">Hesap Adı</label>
                                <input type="text" id="hesap-adi" placeholder="Premium Hesap">
                            </div>
                            <div class="form-group">
                                <label for="hesap-resmi">Hesap Resmi URL</label>
                                <input type="text" id="hesap-resmi" placeholder="https://cdn.hesap.com.tr/uploads/account_img/example.jpg">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="hesap-tipi">Hesap Tipi</label>
                                    <input type="text" id="hesap-tipi" placeholder="Premium Plus">
                                </div>
                                <div class="form-group">
                                    <label for="hesap-tarihi">Kayıt Tarihi</label>
                                    <input type="text" id="hesap-tarihi" placeholder="15 Şubat 2024">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="hesap-durumu">Hesap Durumu</label>
                                    <input type="text" id="hesap-durumu" placeholder="Aktif">
                                </div>
                                <div class="form-group">
                                    <label for="hesap-email">E-posta Adresi</label>
                                    <input type="email" id="hesap-email" placeholder="ornek@mail.com">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="hesap-seviyesi">Hesap Seviyesi</label>
                                    <input type="text" id="hesap-seviyesi" placeholder="5">
                                </div>
                                <div class="form-group">
                                    <label for="hesap-ismi">Kullanıcı İsmi</label>
                                    <input type="text" id="hesap-ismi" placeholder="premium_user">
                                </div>
                            </div>
                            <button class="btn btn-primary" id="hesap-submit">GÖNDER</button>
                        </div>
                        
                        <div class="form-info">
                            <h3>Hızlı Doldur</h3>
                            <div class="quick-fill">
                                <input type="text" id="hesap-quick-fill" placeholder="hesap-kullanici-3583913.html">
                                <button class="btn btn-secondary" id="hesap-quick-fill-btn">ÇEK</button>
                            </div>
                            <div class="info-box">
                                <h4>Nasıl Kullanılır?</h4>
                                <ul>
                                    <li><i class="fas fa-arrow-right"></i> Hesap URL'sini yukarıdaki alana yapıştırın</li>
                                    <li><i class="fas fa-arrow-right"></i> Çek butonuna tıklayın</li>
                                    <li><i class="fas fa-arrow-right"></i> Bilgiler otomatik doldurulacaktır</li>
                                </ul>
                            </div>
                            
                            <div class="info-box">
                                <h4>XPath Özelliği</h4>
                                <p>Bu özellik, Hesap.com.tr sayfalarından XPath ile veri çeker:</p>
                                <ul>
                                    <li><i class="fas fa-check"></i> Hesap Adı</li>
                                    <li><i class="fas fa-check"></i> Hesap Resmi</li>
                                    <li><i class="fas fa-check"></i> Kullanıcı İsmi</li>
                                    <li><i class="fas fa-check"></i> Hesap Seviyesi</li>
                                </ul>
                                <p class="small-text">Not: Örnek URL: hesap-kullanici-3583913.html</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script src="../../js/main.js"></script>
</body>
</html> 