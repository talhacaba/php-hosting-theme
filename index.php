<?php
include "./config.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title'];?></title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

      <?php include './header.php'; ?>

     <section class="talhacaba-hero">
        <div class="talhacaba-container">
            <div class="talhacaba-hero-content">
                <div class="talhacaba-hero-text">
                    <div class="talhacaba-hero-badge">
                        <i class="fas fa-check-circle"></i>
                        %99.9 Uptime Garantisi
                    </div>
                    
                    <h1 class="talhacaba-hero-title">
                        Güvenilir Web Hosting
                        <span class="talhacaba-hero-title-accent">Artık Çok Kolay</span>
                    </h1>
                    
                    <p class="talhacaba-hero-description">
                        Web sitelerinizi ışık hızında barındırma, güvenli alan adları ve ölçeklenebilir VPS çözümleri ile güçlendirin.
                        Dünya çapında 100.000'den fazla memnun müşteriye katılın.
                    </p>
                    
                    <div class="talhacaba-hero-buttons">
                        <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-primary talhacaba-btn-large">
                            Ücretsiz Denemeye Başla
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-outline talhacaba-btn-large">
                            Planları Görüntüle
                        </a>
                    </div>
                    
                    <div class="talhacaba-trust-indicators">
                        <div class="talhacaba-trust-item">
                            <i class="fas fa-check-circle"></i>
                            Ücretsiz SSL Sertifikası
                        </div>
                        <div class="talhacaba-trust-item">
                            <i class="fas fa-check-circle"></i>
                            7/24 Destek
                        </div>
                        <div class="talhacaba-trust-item">
                            <i class="fas fa-check-circle"></i>
                            30 Gün Para İadesi
                        </div>
                    </div>
                </div>
                
                <div class="talhacaba-hero-visual">
                    <div class="talhacaba-hero-card">
                        <div class="talhacaba-hero-card-content">
                            <div class="talhacaba-placeholder-line talhacaba-line-1"></div>
                            <div class="talhacaba-placeholder-line talhacaba-line-2"></div>
                            <div class="talhacaba-placeholder-line talhacaba-line-3"></div>
                            <div class="talhacaba-server-status">
                                <div class="talhacaba-status-header">
                                    <span>talha.gen.tr</span>
                                    <span class="talhacaba-status-badge">Çevrimiçi</span>
                                </div>
                                <div class="talhacaba-status-bar">
                                    <div class="talhacaba-status-progress"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="talhacaba-floating-element talhacaba-floating-1">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="talhacaba-floating-element talhacaba-floating-2">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="talhacaba-services">
        <div class="talhacaba-container">
            <div class="talhacaba-section-header">
                <h2 class="talhacaba-section-title">Eksiksiz Hosting Çözümleri</h2>
                <p class="talhacaba-section-description">
                    Alan adı kaydından kurumsal sunuculara kadar, çevrimiçi varlığınızı güçlendirmek için ihtiyacınız olan her şeyi sağlıyoruz.
                </p>
            </div>
            
            <div class="talhacaba-services-grid">
                <div class="talhacaba-service-card">
                    <div class="talhacaba-service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="talhacaba-service-title">Alan Adı Hosting</h3>
                    <p class="talhacaba-service-description">DNS kontrolü ile güvenli, güvenilir alan adı kaydı ve yönetimi.</p>
                    <div class="talhacaba-service-price">49.99₺/yıl</div>
                    <ul class="talhacaba-service-features">
                        <li><div class="talhacaba-feature-dot"></div>Ücretsiz WHOIS Gizliliği</li>
                        <li><div class="talhacaba-feature-dot"></div>DNS Yönetimi</li>
                        <li><div class="talhacaba-feature-dot"></div>Alan Adı Yönlendirme</li>
                        <li><div class="talhacaba-feature-dot"></div>E-posta Yönlendirme</li>
                    </ul>
                    <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-service">
                        Hemen Başla
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="talhacaba-service-card">
                    <div class="talhacaba-service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="talhacaba-service-title">VPS Hosting</h3>
                    <p class="talhacaba-service-description">Tam kök erişimine sahip yüksek performanslı sanal özel sunucular.</p>
                    <div class="talhacaba-service-price">149.99₺/ay</div>
                    <ul class="talhacaba-service-features">
                        <li><div class="talhacaba-feature-dot"></div>SSD Depolama</li>
                        <li><div class="talhacaba-feature-dot"></div>Tam Kök Erişimi</li>
                        <li><div class="talhacaba-feature-dot"></div>7/24 Destek</li>
                        <li><div class="talhacaba-feature-dot"></div>%99.9 Uptime</li>
                    </ul>
                    <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-service">
                        Hemen Başla
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="talhacaba-service-card">
                    <div class="talhacaba-service-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3 class="talhacaba-service-title">Paylaşımlı Hosting</h3>
                    <p class="talhacaba-service-description">Küçük ve orta ölçekli web siteleri için uygun fiyatlı web hosting.</p>
                    <div class="talhacaba-service-price">19.99₺/ay</div>
                    <ul class="talhacaba-service-features">
                        <li><div class="talhacaba-feature-dot"></div>cPanel Kontrol</li>
                        <li><div class="talhacaba-feature-dot"></div>Ücretsiz SSL</li>
                        <li><div class="talhacaba-feature-dot"></div>MySQL Veritabanları</li>
                        <li><div class="talhacaba-feature-dot"></div>E-posta Hesapları</li>
                    </ul>
                    <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-service">
                        Hemen Başla
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="talhacaba-pricing">
        <div class="talhacaba-container">
            <div class="talhacaba-section-header">
                <h2 class="talhacaba-section-title">Basit, Şeffaf Fiyatlandırma</h2>
                <p class="talhacaba-section-description">
                    İhtiyaçlarınız için en uygun planı seçin. Tüm planlar, gizli ücretler olmadan temel özelliklerimizi içerir.
                </p>
            </div>
            
            <div class="talhacaba-pricing-grid">
                <div class="talhacaba-pricing-card">
                    <div class="talhacaba-pricing-header">
                        <h3 class="talhacaba-plan-name">Başlangıç</h3>
                        <p class="talhacaba-plan-description">Kişisel web siteleri ve bloglar için mükemmel</p>
                        <div class="talhacaba-plan-price">
                            <span class="talhacaba-price">19.99₺</span>
                            <span class="talhacaba-period">/ay</span>
                        </div>
                    </div>
                    <div class="talhacaba-pricing-content">
                        <ul class="talhacaba-plan-features">
                            <li><i class="fas fa-check-circle"></i>1 Web Sitesi</li>
                            <li><i class="fas fa-check-circle"></i>10GB Depolama</li>
                            <li><i class="fas fa-check-circle"></i>100GB Trafik</li>
                            <li><i class="fas fa-check-circle"></i>Ücretsiz SSL Sertifikası</li>
                            <li><i class="fas fa-check-circle"></i>E-posta Desteği</li>
                        </ul>
                        <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-plan">Hemen Başla</a>
                    </div>
                </div>

                <div class="talhacaba-pricing-card talhacaba-pricing-card-popular">
                    <div class="talhacaba-popular-badge">
                        <i class="fas fa-star"></i>
                        En Popüler
                    </div>
                    <div class="talhacaba-pricing-header">
                        <h3 class="talhacaba-plan-name">Profesyonel</h3>
                        <p class="talhacaba-plan-description">Büyüyen işletmeler için ideal</p>
                        <div class="talhacaba-plan-price">
                            <span class="talhacaba-price">49.99₺</span>
                            <span class="talhacaba-period">/ay</span>
                        </div>
                    </div>
                    <div class="talhacaba-pricing-content">
                        <ul class="talhacaba-plan-features">
                            <li><i class="fas fa-check-circle"></i>5 Web Sitesi</li>
                            <li><i class="fas fa-check-circle"></i>50GB Depolama</li>
                            <li><i class="fas fa-check-circle"></i>500GB Trafik</li>
                            <li><i class="fas fa-check-circle"></i>Ücretsiz SSL Sertifikası</li>
                            <li><i class="fas fa-check-circle"></i>Öncelikli Destek</li>
                            <li><i class="fas fa-check-circle"></i>Günlük Yedeklemeler</li>
                        </ul>
                        <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-plan talhacaba-btn-plan-popular">Ücretsiz Denemeye Başla</a>
                    </div>
                </div>

                <div class="talhacaba-pricing-card">
                    <div class="talhacaba-pricing-header">
                        <h3 class="talhacaba-plan-name">Kurumsal</h3>
                        <p class="talhacaba-plan-description">Yüksek trafikli web siteleri için</p>
                        <div class="talhacaba-plan-price">
                            <span class="talhacaba-price">99.99₺</span>
                            <span class="talhacaba-period">/ay</span>
                        </div>
                    </div>
                    <div class="talhacaba-pricing-content">
                        <ul class="talhacaba-plan-features">
                            <li><i class="fas fa-check-circle"></i>Sınırsız Web Sitesi</li>
                            <li><i class="fas fa-check-circle"></i>200GB Depolama</li>
                            <li><i class="fas fa-check-circle"></i>Sınırsız Trafik</li>
                            <li><i class="fas fa-check-circle"></i>Ücretsiz SSL Sertifikası</li>
                            <li><i class="fas fa-check-circle"></i>7/24 Telefon Desteği</li>
                            <li><i class="fas fa-check-circle"></i>Gelişmiş Güvenlik</li>
                        </ul>
                        <a href="fiyatlar.php" class="talhacaba-btn talhacaba-btn-plan">Hemen Başla</a>
                    </div>
                </div>
            </div>
            
            <div class="talhacaba-pricing-cta">
                <p>Özel bir çözüme mi ihtiyacınız var?</p>
                <a href="iletisim.php" class="talhacaba-btn talhacaba-btn-outline">Satış Ekibiyle İletişime Geçin</a>
            </div>
        </div>
    </section>

    <section id="features" class="talhacaba-features">
        <div class="talhacaba-container">
            <div class="talhacaba-section-header">
                <h2 class="talhacaba-section-title">Neden CloudHost'u Seçmelisiniz?</h2>
                <p class="talhacaba-section-description">
                    İşletmenizin hak ettiği güvenilirlik ve desteğe sahip kurumsal düzeyde hosting çözümleri sunuyoruz.
                </p>
            </div>
            
            <div class="talhacaba-features-grid">
                <div class="talhacaba-feature-item">
                    <div class="talhacaba-feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="talhacaba-feature-title">Gelişmiş Güvenlik</h3>
                    <p class="talhacaba-feature-description">
                        DDoS koruması, SSL sertifikaları ve düzenli güvenlik güncellemeleri verilerinizi güvende tutar.
                    </p>
                </div>

                <div class="talhacaba-feature-item">
                    <div class="talhacaba-feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="talhacaba-feature-title">Işık Hızında</h3>
                    <p class="talhacaba-feature-description">
                        SSD depolama ve optimize edilmiş sunucular, web sitelerinizin milisaniyeler içinde yüklenmesini sağlar.
                    </p>
                </div>

                <div class="talhacaba-feature-item">
                    <div class="talhacaba-feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="talhacaba-feature-title">7/24 Destek</h3>
                    <p class="talhacaba-feature-description">
                        Uzman destek ekibimiz, size yardımcı olmak için günün her saati hazır.
                    </p>
                </div>

                <div class="talhacaba-feature-item">
                    <div class="talhacaba-feature-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3 class="talhacaba-feature-title">%99.9 Uptime</h3>
                    <p class="talhacaba-feature-description">
                        Garantili çalışma süresi ve performans izleme ile güvenilir altyapı.
                    </p>
                </div>
            </div>
            
            <div class="talhacaba-stats-section">
                <div class="talhacaba-stats-grid">
                    <div class="talhacaba-stat-item">
                        <div class="talhacaba-stat-number">100B+</div>
                        <div class="talhacaba-stat-label">Mutlu Müşteri</div>
                    </div>
                    <div class="talhacaba-stat-item">
                        <div class="talhacaba-stat-number">%99.9</div>
                        <div class="talhacaba-stat-label">Uptime Garantisi</div>
                    </div>
                    <div class="talhacaba-stat-item">
                        <div class="talhacaba-stat-number">7/24</div>
                        <div class="talhacaba-stat-label">Uzman Destek</div>
                    </div>
                    <div class="talhacaba-stat-item">
                        <div class="talhacaba-stat-number">15+</div>
                        <div class="talhacaba-stat-label">Yıllık Deneyim</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="talhacaba-testimonials">
        <div class="talhacaba-container">
            <div class="talhacaba-section-header">
                <h2 class="talhacaba-section-title">Binlerce Kişi Tarafından Güveniliyor</h2>
                <p class="talhacaba-section-description">
                    Müşterilerimizin CloudHost ile yaşadıkları hosting deneyimleri hakkında ne dediklerine göz atın.
                </p>
            </div>
            
            <div class="talhacaba-testimonials-grid">
                <div class="talhacaba-testimonial-card">
                    <div class="talhacaba-testimonial-header">
                        <i class="fas fa-quote-left talhacaba-testimonial-quote"></i>
                        <div class="talhacaba-testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="talhacaba-testimonial-content">
                        "CloudHost, startup'ımız için inanılmaz bir kaynak oldu. VPS performansı olağanüstü ve destek ekibi her zaman çok yardımcı."
                    </p>
                    <div class="talhacaba-testimonial-author">
                        <div class="talhacaba-author-avatar">S</div>
                        <div class="talhacaba-author-info">
                            <div class="talhacaba-author-name">Sarah Johnson</div>
                            <div class="talhacaba-author-company">TechStart A.Ş.</div>
                        </div>
                    </div>
                </div>

                <div class="talhacaba-testimonial-card">
                    <div class="talhacaba-testimonial-header">
                        <i class="fas fa-quote-left talhacaba-testimonial-quote"></i>
                        <div class="talhacaba-testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="talhacaba-testimonial-content">
                        "Burada 50'den fazla müşterimizin web sitesini barındırıyoruz. Güvenilir, hızlı ve parasının karşılığını fazlasıyla veriyor."
                    </p>
                    <div class="talhacaba-testimonial-author">
                        <div class="talhacaba-author-avatar">M</div>
                        <div class="talhacaba-author-info">
                            <div class="talhacaba-author-name">Mike Chen</div>
                            <div class="talhacaba-author-company">Dijital Ajans</div>
                        </div>
                    </div>
                </div>

                <div class="talhacaba-testimonial-card">
                    <div class="talhacaba-testimonial-header">
                        <i class="fas fa-quote-left talhacaba-testimonial-quote"></i>
                        <div class="talhacaba-testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="talhacaba-testimonial-content">
                        "Paylaşımlı hosting planı trafiğimizi mükemmel bir şekilde karşılıyor. Kullanımı kolay kontrol paneli ve mükemmel çalışma süresi."
                    </p>
                    <div class="talhacaba-testimonial-author">
                        <div class="talhacaba-author-avatar">E</div>
                        <div class="talhacaba-author-info">
                            <div class="talhacaba-author-name">Emma Rodriguez</div>
                            <div class="talhacaba-author-company">E-ticaret Mağazası</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <?php include './footer.php'; ?>
</body>
</html>
