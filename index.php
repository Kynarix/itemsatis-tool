<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twixx - Anasayfa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <!-- Discord Profil Kartı -->
        <section class="discord-profile">
            <div class="container">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="banner">
                            <img src="images/banner.gif" alt="Banner">
                        </div>
                        <div class="profile-info">
                            <div class="avatar-container">
                                <img src="images/avatar.png" alt="Profil Resmi" class="avatar">
                                <div class="avatar-status">
                                    <i class="fas fa-minus-circle"></i>
                                </div>
                                <div class="service-bubble">
                                    <i class="fas fa-check-circle"></i> KYNARIX L°G Servisi
                                    <span class="server-id">.gg/Kj5PjhTxCw</span>
                                </div>
                            </div>
                            <div class="edit-button">
                                <button><i class="fas fa-pencil"></i>  Hesabım</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="profile-content">
                        <div class="user-info">
                            <h1 class="username">Kynarix</h1>
                            <div class="user-handle">
                                <span>kynarix • twix</span>
                                <div class="badges-container">
                                    <img class="badge nitro" src="https://cdn.discordapp.com/badge-icons/4f33c4a9c64ce221936bd256c356f91f.png" alt="Discord Nitro">
                                    <img class="badge boost" src="https://cdn.discordapp.com/badge-icons/51040c70d4f20a921ad6674ff86fc95c.png" alt="Discord Boost">
                                </div>
                            </div>
                        </div>

                        <div class="tabs">
                            <div class="tab active" data-tab="about">Hakkımda</div>
                            <div class="tab" data-tab="services">Hizmetler</div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="about">
                                <div class="about-content">
                                    <p>Benim balkonumda sigara şaraba komşudur</p>
                                    <p>GIF Server / discord.gg/gifserver</p>
                                    <p>~ Sadece Gerçekler İçin</p>
                                </div>
                                
                                <div class="join-date">
                                    <p>Şu Tarihten Beri Üye:</p>
                                    <p>9 Şub 2024</p>
                                </div>

                                <div class="links">
                                    <h3>Bağlantılar</h3>
                                    <div class="links-container">
                                        <a href="#" class="social-link cheatglobal">
                                            <span class="social-icon cheatglobal"><i class="fas fa-globe"></i></span>
                                            <span>CheatGlobal.com</span>
                                        </a>
                                        <a href="#" class="social-link discord">
                                            <span class="social-icon discord"><i class="fab fa-discord"></i></span>
                                            <span>Discord</span>
                                        </a>
                                        <a href="#" class="social-link spotify">
                                            <span class="social-icon spotify"><i class="fab fa-spotify"></i></span>
                                            <span>Spotify</span>
                                        </a>
                                        <a href="#" class="social-link github">
                                            <span class="social-icon github"><i class="fab fa-github"></i></span>
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="services">
                                <div class="links">
                                    <div class="links-container service-grid">
                                        <a href="pages/itemsatis/itemsatis.php" class="social-link itemsatis">
                                            <span class="social-icon itemsatis"><i class="fas fa-shopping-cart"></i></span>
                                            <span>ItemSatis.com</span>
                                        </a>
                                        <a href="pages/hesap/hesap.php" class="social-link hesapcomtr">
                                            <span class="social-icon hesapcomtr"><i class="fas fa-user"></i></span>
                                            <span>Hesap.com.tr</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="notes">
                            <h3>Not</h3>
                            <p class="note-text">while(coding) { coffee++; sleep--; }</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="js/main.js"></script>
    <script src="js/animation.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // İlk yükleme için aktif sekmeye animasyon efekti uygula
            const initialActiveTab = document.querySelector('.tab.active');
            if (initialActiveTab) {
                const initialTabId = initialActiveTab.getAttribute('data-tab');
                const initialPane = document.getElementById(initialTabId);
                if (initialPane) {
                    initialPane.style.display = 'block';
                    initialPane.style.opacity = '1';
                    initialPane.style.transform = 'translateY(0) scale(1)';
                }
            }
            
            // Sekme tıklandığında geçiş efekti
            document.querySelectorAll('.tab').forEach(tab => {
                tab.addEventListener('click', () => {
                    // Aktif tab sınıfını güncelle
                    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    
                    const tabId = tab.getAttribute('data-tab');
                    const currentPane = document.querySelector('.tab-pane.active');
                    const targetPane = document.getElementById(tabId);
                    
                    // Eğer hedef zaten aktifse işlem yapma
                    if (currentPane === targetPane) return;
                    
                    // Aktif panelin kaybolma animasyonu
                    if (currentPane) {
                        currentPane.style.opacity = '0';
                        currentPane.style.transform = 'translateY(15px) scale(0.98)';
                        
                        // Animasyon tamamlandıktan sonra paneli gizle ve yeni paneli göster
                        setTimeout(() => {
                            currentPane.classList.remove('active');
                            currentPane.style.display = 'none';
                            
                            // Yeni paneli göster ve aktifleştir
                            targetPane.style.display = 'block';
                            // Reflow için geçici olarak offsetHeight'e eriş
                            targetPane.offsetHeight;
                            targetPane.classList.add('active');
                            targetPane.style.opacity = '1';
                            targetPane.style.transform = 'translateY(0) scale(1)';
                        }, 300); // Geçiş süresi ile eşleştir
                    } else {
                        // İlk yükleme için, direkt göster
                        targetPane.style.display = 'block';
                        targetPane.classList.add('active');
                        setTimeout(() => {
                            targetPane.style.opacity = '1';
                            targetPane.style.transform = 'translateY(0) scale(1)';
                        }, 50);
                    }
                });
            });
        });
    </script>
</body>
</html>
