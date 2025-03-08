// ItemSatis Form İşlevleri
document.addEventListener('DOMContentLoaded', function() {
    console.log("ItemSatis form işlevleri yükleniyor...");
    
    // Çek butonu için event listener ekle
    const fetchButton = document.getElementById('fetchButton');
    
    if (fetchButton) {
        console.log("Çek butonu bulundu, event listener ekleniyor");
        
        fetchButton.addEventListener('click', function() {
            console.log("Çek butonuna tıklandı");
            
            // URL'yi al
            const urlInput = document.getElementById('ilan-quick-fill');
            if (!urlInput) {
                console.error("URL giriş alanı bulunamadı!");
                alert("URL giriş alanı bulunamadı!");
                return;
            }
            
            const url = urlInput.value.trim();
            if (!url) {
                alert("Lütfen bir URL girin!");
                return;
            }
            
            // Düğmeyi devre dışı bırak ve yükleniyor simgesi göster
            const originalText = fetchButton.textContent;
            fetchButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Çekiliyor...';
            fetchButton.disabled = true;
            
            // Veri çekme işlemini başlat
            fetchItemSatisData(url)
                .then(() => {
                    // İşlem tamamlandığında butonu eski haline getir
                    fetchButton.innerHTML = originalText;
                    fetchButton.disabled = false;
                })
                .catch(error => {
                    console.error("Veri çekme hatası:", error);
                    fetchButton.innerHTML = originalText;
                    fetchButton.disabled = false;
                    alert("Veri çekme hatası: " + error.message);
                });
        });
    } else {
        console.error("Çek butonu (ID: fetchButton) bulunamadı!");
    }
    
    // Form submit olayını dinle
    const itemSatisForm = document.getElementById('itemsatisform');
    if (itemSatisForm) {
        console.log("Form bulundu, submit event listener ekleniyor");
        
        itemSatisForm.addEventListener('submit', function(e) {
            e.preventDefault();
            console.log("Form gönderilmek istendi");
            
            // Form işlemi...
        });
    } else {
        console.error("Form (ID: itemsatisform) bulunamadı!");
    }
});

// ItemSatis verilerini çekme fonksiyonu
async function fetchItemSatisData(url) {
    console.log("Veri çekme başlatılıyor. URL:", url);
    
    // URL'yi temizleme
    const cleanUrl = url.split(' ')[0];
    console.log("Temizlenmiş URL:", cleanUrl);
    
    // API endpoint'i
    const apiUrl = "../../api/fetch_itemsatis_data.php";
    console.log("API URL:", apiUrl);
    
    try {
        // API'ye istek gönderme
        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ url: cleanUrl }),
        });
        
        const data = await response.json();
        console.log("API yanıtı:", data);
        
        if (!data.success) {
            throw new Error(data.message || "Veri çekilemedi");
        }
        
        // Form verilerini hazırlama
        const formData = {
            title: data.data.title,
            image: data.data.image,
            area: data.data.area,
            seller: data.data.seller,
            seller_image: data.data.seller_image,
            seller_level: data.data.seller_level,
            hour: data.data.hour,
            minute: data.data.minute
        };
        
        console.log("Form doldurulacak veriler:", formData);
        
        // Form elemanlarını bul ve doldur
        const formElements = {
            'ilanAdi': formData.title ? formData.title.trim() : '',
            'ilanresmi': formData.image || '',
            'ilanalani': formData.area || '',
            'saticisadi': formData.seller || '',
            'saticiresmi': formData.seller_image || '',
            'saticiseviyesi': formData.seller_level || ''
        };
        
        // Her form elementi için ayrı ayrı dene
        Object.keys(formElements).forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.value = formElements[id];
                console.log(`${id} bulundu ve dolduruldu:`, formElements[id]);
            } else {
                console.warn(`${id} bulunamadı`);
            }
        });
        
        // Durum ve tarih alanlarını doldur
        const ilanDurumu = document.getElementById('ilandakikasi');
        if (ilanDurumu) ilanDurumu.value = 'Aktif';
        
        const ilanTarihi = document.getElementById('ilansaati');
        if (ilanTarihi) {
            const today = new Date();
            const formattedDate = `${today.getDate()}.${today.getMonth() + 1}.${today.getFullYear()}`;
            ilanTarihi.value = formattedDate;
        }
        
        // Başarı mesajı göster
        if (typeof showNotification === 'function') {
            showNotification('İlan bilgileri başarıyla çekildi!', 'success', 'Başarılı');
        } else {
            alert('İlan bilgileri başarıyla çekildi!');
        }
        
        return true;
    } catch (error) {
        console.error("Veri çekme hatası:", error);
        if (typeof showNotification === 'function') {
            showNotification('Veri çekilemedi: ' + error.message, 'error', 'Hata');
        } else {
            alert('Veri çekilemedi: ' + error.message);
        }
        throw error;
    }
}

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