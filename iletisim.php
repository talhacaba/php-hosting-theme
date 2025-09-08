<?php
include "./config.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - <?php echo $config['logo'];?></title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .talhacaba-contact-section {
            padding: 5rem 0;
        }
        .talhacaba-contact-card {
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
        }
        .talhacaba-contact-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .talhacaba-contact-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        .talhacaba-contact-description {
            font-size: 1.1rem;
            color: #6b7280;
        }
        .talhacaba-contact-form {
            display: grid;
            gap: 1.5rem;
        }
        .talhacaba-form-group {
            display: flex;
            flex-direction: column;
        }
        .talhacaba-form-label {
            font-size: 0.875rem;
            font-weight: bold;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        .talhacaba-form-input, .talhacaba-form-textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            color: #1f2937;
            transition: border-color 0.3s ease;
        }
        .talhacaba-form-input:focus, .talhacaba-form-textarea:focus {
            outline: none;
            border-color: #059669;
        }
        .talhacaba-form-textarea {
            resize: vertical;
            min-height: 120px;
        }
    </style>
</head>
<body>
     <?php include './header.php'; ?>

    <main class="talhacaba-contact-section">
        <div class="talhacaba-container">
            <div class="talhacaba-contact-card">
                <div class="talhacaba-contact-header">
                    <h2 class="talhacaba-contact-title">Bize Ulaşın</h2>
                    <p class="talhacaba-contact-description">Sorularınız, geri bildirimleriniz veya destek talepleriniz için aşağıdaki formu doldurun.</p>
                </div>
                <form class="talhacaba-contact-form">
                    <div class="talhacaba-form-group">
                        <label for="name" class="talhacaba-form-label">Ad Soyad</label>
                        <input type="text" id="name" class="talhacaba-form-input" required>
                    </div>
                    <div class="talhacaba-form-group">
                        <label for="email" class="talhacaba-form-label">E-posta Adresi</label>
                        <input type="email" id="email" class="talhacaba-form-input" required>
                    </div>
                    <div class="talhacaba-form-group">
                        <label for="subject" class="talhacaba-form-label">Konu</label>
                        <input type="text" id="subject" class="talhacaba-form-input" required>
                    </div>
                    <div class="talhacaba-form-group">
                        <label for="message" class="talhacaba-form-label">Mesajınız</label>
                        <textarea id="message" class="talhacaba-form-textarea" required></textarea>
                    </div>
                    <button type="submit" class="talhacaba-btn talhacaba-btn-primary talhacaba-btn-large">Gönder</button>
                </form>
            </div>
        </div>
    </main>

      <?php include './footer.php'; ?>

</body>
</html>
