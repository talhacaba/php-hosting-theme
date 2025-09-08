<?php
include "./config.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol - <?php echo $config['logo'];?></title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .talhacaba-auth-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9fafb;
            padding: 2rem 1rem;
        }
        .talhacaba-auth-card {
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .talhacaba-auth-title {
            font-size: 2rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 1rem;
        }
        .talhacaba-auth-subtitle {
            font-size: 1rem;
            color: #6b7280;
            margin-bottom: 2rem;
        }
        .talhacaba-auth-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .talhacaba-auth-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            color: #1f2937;
            transition: border-color 0.3s ease;
        }
        .talhacaba-auth-input:focus {
            outline: none;
            border-color: #059669;
        }
        .talhacaba-auth-link {
            font-size: 0.875rem;
            color: #059669;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .talhacaba-auth-link:hover {
            color: #047857;
        }
    </style>
</head>
<body>
    <div class="talhacaba-auth-container">
        <div class="talhacaba-auth-card">
            <h2 class="talhacaba-auth-title">Kayıt Ol</h2>
            <p class="talhacaba-auth-subtitle">Yeni bir hesap oluşturmak için bilgilerinizi girin.</p>
            <form class="talhacaba-auth-form">
                <input type="text" class="talhacaba-auth-input" placeholder="Kullanıcı Adınız" required>
                <input type="email" class="talhacaba-auth-input" placeholder="E-posta Adresiniz" required>
                <input type="password" class="talhacaba-auth-input" placeholder="Şifreniz" required>
                <button type="submit" class="talhacaba-btn talhacaba-btn-primary talhacaba-btn-large">Kayıt Ol</button>
            </form>
            <p style="margin-top: 1.5rem; color: #6b7280;">Zaten bir hesabınız var mı? <a href="giris-yap.php" class="talhacaba-auth-link">Giriş Yapın</a></p>
        </div>
    </div>
</body>
</html>
