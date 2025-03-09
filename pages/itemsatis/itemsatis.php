<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twixx - ItemSatis.com</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            console.log('Hata Ayıklama Kılavuzu:');
            console.log('1. Çek butonuna bastığınızda veri çekme işlemi başlar.');
            console.log('2. URL formatı şunlardan biri olabilir:');
            console.log('   - Kısa dosya adı: i-dolu-hesap-3602968.html');
            console.log('   - Tam domain ile: itemsatis.com/i-dolu-hesap-3602968.html');
            console.log('   - Tam URL: https://www.itemsatis.com/i-dolu-hesap-3602968.html');
            console.log('3. Hata alırsanız konsoldaki mesajları kontrol edin.');
            console.log('4. Örnek URL: i-dolu-hesap-3602968.html');
        });
    </script>
</head>
<body>

    <main>
        <!-- ItemSatis.com için Özel Bölüm -->
        <section class="special-section" id="itemsatis-form">
            <div class="container">
                <div class="special-content">
                    <div class="special-header">
                        <h2>İlan İşlemleri</h2>
                        <p>itemsatis.com için ilan oluşturma formu</p>
                    </div>
                    
                    <div class="special-form">
                        <div class="form-container">
                            <h3>İlan Gönderme</h3>
                            <form id="itemsatisform" action="../../output/itemsatis/itemsatis.php" method="POST">
                                <div class="form-group">
                                    <label for="ilanAdi">İlan Adı</label>
                                    <input type="text" id="ilanAdi" placeholder="İlan adı">
                                </div>
                                <div class="form-group">
                                    <label for="ilanresmi">İlan Resmi URL</label>
                                    <input type="text" id="ilanresmi" placeholder="İlan resmi URL">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="ilanalani">İlan Alanı</label>
                                        <input type="text" id="ilanalani" placeholder="İlan kategorisi">
                                    </div>
                                    <div class="form-group">
                                        <label for="ilansaati">İlan Tarihi</label>
                                        <input type="text" id="ilansaati" placeholder="İlan tarihi">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="ilandakikasi">İlan Durumu</label>
                                        <input type="text" id="ilandakikasi" placeholder="İlan durumu">
                                    </div>
                                    <div class="form-group">
                                        <label for="saticiresmi">Satıcı Resmi URL</label>
                                        <input type="text" id="saticiresmi" placeholder="Satıcı resmi URL">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="saticiseviyesi">Satıcı Seviyesi</label>
                                        <input type="text" id="saticiseviyesi" placeholder="Satıcı seviyesi">
                                    </div>
                                    <div class="form-group">
                                        <label for="saticisadi">Satıcı İsmi</label>
                                        <input type="text" id="saticisadi" placeholder="Satıcı ismi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="GÖNDER" class="btn btn-primary" id="gonder">
                                </div>
                            </form>
                        </div>
                        
                        <div class="form-info">
                            <h3>Hızlı Doldur</h3>
                            <div class="quick-fill">
                                <input type="text" id="fetchUrl" placeholder="İlan URL'si">
                            </div>
                            <button class="btn-secondary" id="fetchButton">ÇEK</button>
                            
                            <div class="info-box">
                                <h4>Nasıl Kullanılır?</h4>
                                <ul>
                                    <li><i class="fas fa-arrow-right"></i> İlan URL'sini yukarıdaki alana yapıştırın</li>
                                    <li><i class="fas fa-arrow-right"></i> Tam URL veya sadece dosya adını kullanabilirsiniz</li>
                                    <li><i class="fas fa-arrow-right"></i> Çek butonuna tıklayın</li>
                                    <li><i class="fas fa-arrow-right"></i> Bilgiler otomatik doldurulacaktır</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
    $(document).ready(function(){
        // Tarih formatını ayarlama
        const aylar = [
            "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
            "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
        ];
        
        function getTurkishDateTime() {
            const now = new Date();
            const gun = now.getDate();
            const ay = aylar[now.getMonth()];
            const yil = now.getFullYear();
            const saat = String(now.getHours()).padStart(2, '0');
            const dakika = String(now.getMinutes()).padStart(2, '0');
            
            return `${gun} ${ay} ${yil} , ${saat}:${dakika}`;
        }
        
        function updateFormFields() {
            $("#ilansaati").val(getTurkishDateTime());
            $("#ilandakikasi").val("1 dakika önce");
        }
        
        // Sayfa yüklendiğinde alanları doldur
        updateFormFields();
        
        // Gönder butonu işlemi
        $("#gonder").click(function(e){
            e.preventDefault(); // Form varsayılan davranışını engelle
            console.log("Gönder butonuna tıklandı");
            var ilanAdi = $("#ilanAdi").val();
            var ilanalani = $("#ilanalani").val();
            var ilansaati = $("#ilansaati").val();
            var ilandakikasi = $("#ilandakikasi").val();
            var saticiresmi = $("#saticiresmi").val();
            var saticiseviyesi = $("#saticiseviyesi").val();
            var saticisadi = $("#saticisadi").val();
            var ilanresmi = $("#ilanresmi").val();
            
            if(!ilanAdi || !saticisadi) {
                alert("İlan Adı ve Satıcı İsmi alanları boş bırakılamaz!");
                return false;
            }
            
            $.ajax({
                type: "POST",
                url: "verigonder.php",
                data: {
                    ilanAdi: ilanAdi,
                    ilanalani: ilanalani,
                    ilansaati: ilansaati,
                    ilandakikasi: ilandakikasi,
                    saticiresmi: saticiresmi,
                    saticiseviyesi: saticiseviyesi,
                    saticisadi: saticisadi,
                    ilanresmi: ilanresmi
                },
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                xhrFields: {
                    withCredentials: true
                },
                success: function(response) {
                    if(response.success) {
                        // Doğru yönlendirme yapılıyor
                        window.location.href = "../../output/itemsatis/itemsatis.php";
                    } else {
                        alert("Bir hata oluştu!");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Hata:", error);
                    alert("Bir hata oluştu!");
                }
            });
        });

        // Çek butonu işlemi
        $("#fetchButton").click(function(){
            const url = $("#fetchUrl").val().trim();
            
            if(!url) {
                alert("Lütfen bir URL girin!");
                return;
            }
            
            const $button = $(this);
            const originalText = $button.html();
            $button.html('<i class="fas fa-spinner fa-spin"></i> Çekiliyor...');
            $button.prop('disabled', true);
            
            $.ajax({
                url: '../../api/fetch_itemsatis_data.php',
                method: 'POST',
                data: { url: url },
                dataType: 'json',
                success: function(response) {
                    if(response.success) {
                        $("#ilanAdi").val(response.data.title || '');
                        $("#ilanresmi").val(response.data.image || '');
                        $("#ilanalani").val(response.data.area || '');
                        updateFormFields();
                        $("#saticiresmi").val(response.data.seller_image || '');
                        $("#saticiseviyesi").val(response.data.seller_level || '');
                        $("#saticisadi").val(response.data.seller || '');
                        
                        // Bildirim göster
                        showNotification('İlan bilgileri başarıyla çekildi!', 'success', 'Başarılı');
                    } else {
                        alert("Veri çekilemedi: " + response.message);
                    }
                },
                error: function() {
                    alert("Bağlantı hatası oluştu!");
                },
                complete: function() {
                    $button.html(originalText);
                    $button.prop('disabled', false);
                }
            });
        });
    });

    // Bildirim gösterme fonksiyonu
    function showNotification(message, type = 'info', title = '') {
        // Bildirim container'ı kontrol etme/oluşturma
        let container = document.querySelector('.notification-container');
        if (!container) {
            container = document.createElement('div');
            container.className = 'notification-container';
            document.body.appendChild(container);
        }
        
        // Başlık kontrolü
        if (!title) {
            switch (type) {
                case 'success': title = 'Başarılı!'; break;
                case 'error': title = 'Hata!'; break;
                case 'warning': title = 'Uyarı!'; break;
                case 'info': default: title = 'Bilgi'; break;
            }
        }
        
        // İkon belirleme
        let icon = '';
        switch (type) {
            case 'success': icon = '<i class="fas fa-check-circle"></i>'; break;
            case 'error': icon = '<i class="fas fa-times-circle"></i>'; break;
            case 'warning': icon = '<i class="fas fa-exclamation-triangle"></i>'; break;
            case 'info': default: icon = '<i class="fas fa-info-circle"></i>'; break;
        }
        
        // Bildirim HTML'i
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.innerHTML = `
            <div class="notification-icon">${icon}</div>
            <div class="notification-content">
                <div class="notification-title">${title}</div>
                <div class="notification-message">${message}</div>
            </div>
            <div class="notification-close"><i class="fas fa-times"></i></div>
        `;
        
        // Container'a ekle
        container.appendChild(notification);
        
        // Animasyon ekle
        setTimeout(() => {
            notification.style.opacity = '1';
            notification.style.transform = 'translateY(0) scale(1)';
        }, 10);
        
        // Kapatma işlevi
        const closeBtn = notification.querySelector('.notification-close');
        closeBtn.addEventListener('click', () => {
            closeNotification(notification);
        });
        
        // Otomatik kapatma (5 saniye sonra)
        if (type !== 'loading') {
            setTimeout(() => {
                closeNotification(notification);
            }, 5000);
        }
        
        return notification;
    }

    // Bildirimi kapatma fonksiyonu
    function closeNotification(notification) {
        notification.style.opacity = '0';
        notification.style.transform = 'translateY(-20px) scale(0.9)';
        
        setTimeout(() => {
            notification.remove();
        }, 300);
    }
    </script>
</body>
</html> 