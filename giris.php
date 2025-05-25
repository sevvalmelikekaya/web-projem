<?php
$kullaniciAdi = $_POST['kullaniciAdi'] ?? '';
$sifre = $_POST['sifre'] ?? '';

$dogruKullanici = "b241210087@sakarya.edu.tr";
$dogruSifre = "12345";

if ($kullaniciAdi === $dogruKullanici && $sifre === $dogruSifre) {
    echo "
    <!DOCTYPE html>
    <html lang='tr'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>Hoş Geldiniz</title>
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
      <link rel='stylesheet' href='css/style.css'>
      <style>
        body {
          background: linear-gradient(135deg, #e0c3fc, #8ec5fc);
          min-height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          font-family: 'Segoe UI', sans-serif;
        }
        .welcome-box {
          background-color: rgba(255, 255, 255, 0.9);
          padding: 40px;
          border-radius: 15px;
          box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
          text-align: center;
        }
        .welcome-box h1 {
          color: #8e44ad;
        }
      </style>
    </head>
    <body>
      <div class='welcome-box'>
        <h1>🎉 Hoş Geldiniz!</h1>
        <p class='lead'>Merhaba <strong>$kullaniciAdi</strong>, girişiniz başarılı.</p>
        <a href='index.html' class='btn btn-primary mt-3'>Ana Sayfaya Git</a>
      </div>
    </body>
    </html>";
} else {
    header("Location: login.html");
    exit();
}
?>