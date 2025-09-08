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

    <section id="pricing" class="talhacaba-pricing" style="padding-top: 5rem;">
        <div class="talhacaba-container">
            <div class="talhacaba-section-header">
                <h2 class="talhacaba-section-title">En Uygun Planı Seçin</h2>
                <p class="talhacaba-section-description">
                    İhtiyaçlarınıza en uygun hosting planını bulmak için karşılaştırın.
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
                        <button class="talhacaba-btn talhacaba-btn-plan">Şimdi Satın Al</button>
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
                        <button class="talhacaba-btn talhacaba-btn-plan talhacaba-btn-plan-popular">Şimdi Satın Al</button>
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
                        <button class="talhacaba-btn talhacaba-btn-plan">Şimdi Satın Al</button>
                    </div>
                </div>
            </div>
            
            <div class="talhacaba-pricing-cta">
                <p>İhtiyaçlarınıza özel bir plan mı arıyorsunuz?</p>
                <a href="iletisim.php" class="talhacaba-btn talhacaba-btn-outline">Satış Ekibiyle İletişime Geçin</a>
            </div>
        </div>
    </section>

      <?php include './footer.php'; ?>

</body>
</html>
