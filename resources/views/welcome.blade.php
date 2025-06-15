<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Delawa App Links</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Cairo', sans-serif;
    }

    body {
      background-color: #7d4651;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 700px;
      margin: 20px auto;
      padding: 15px;
      text-align: center;
    }

    .logo img {
      width: 120px;
      margin-bottom: 20px;
      border-radius: 50%;
    }

    .grid-links {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 15px;
      margin-top: 20px;
      min-width: 100px;
    }

    .link-card {
      background-color: #fff;
      border-radius: 16px;
      padding: 15px 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      text-align: center;
      transition: all 0.3s ease;
      text-decoration: none;
      color: #000;
    }

    .link-card:hover {
      transform: translateY(-5px);
      background-color: #f1f1f1;
    }

    .link-card i {
      font-size: 30px;
      margin-bottom: 12px;
      color: #000;
    }

    .link-text {
      font-size: 12px;
      font-weight: 500;
    }

    footer {
      margin-top: auto;
      padding: 30px 0;
      background-color: #000;
      width: 100%;
      text-align: center;
    }

    .social-icons a {
      color: #fff;
      margin: 0 10px;
      font-size: 18px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #1da1f2;
    }
    .footer-text {
      color: #aaa;
      font-size: 13px;
      margin-top: 10px;
    }
    .feedback-btn:hover {
      background-color: #444;
      color: #ffd700;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <!-- IMPORTANT: To properly load Font Awesome icons, please open this file using a local server such as Live Server in VS Code. -->

  <div class="container">
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 200px; border: 4px solid #fff;" />
    </div>
    {{-- <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 35px;">هتلاقوني في</h2> --}}

    <div class="grid-links">
      <a href="https://hungerstation.com/sa-en/restaurant/riyadh/wazarat/147049" class="link-card" style="background-image: url('{{ asset('images/hunger.webp') }}'); background-size: cover; background-position: center; height: 160px;"></a>
      <a href="https://jahez.app.link/3HBYJSdqdUb?_p=c51429c4981c65f2e60386fb" class="link-card" style="background-image: url('{{ asset('images/jahiz.png') }}'); background-size: cover; background-position: center; height: 160px;"></a>
      <a href="https://thechefzco.app.link/sXRjUP4PVTb" class="link-card" style="background-image: url('{{ asset('images/chifz.png') }}'); background-size: cover; background-position: center; height: 160px;"></a>
    </div>
    <div style="margin-top: 30px;">
      <a href="https://qrcode1.adv-line.sa/form" target="_blank" class="feedback-btn" style="display: inline-block; background-color: #000; color: #fff; padding: 12px 20px; border-radius: 8px; text-decoration: none; font-weight: bold; transition: all 0.3s ease;">
        قيم تجربتك معنا من هنا
      </a>
    </div>
  </div>

  <footer>
    {{-- <div class="social-icons">
      <a href="https://www.facebook.com/share/196jd28E9d/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/tunt_bakiza?igsh=MnFzNm4xZDEycXI4" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@tunt_bakiza?_t=ZS-8wJu8PZ86wU&_r=1" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
    </div> --}}
    <div class="footer-text">
      &copy; 2025 Delawa | All rights reserved.
    </div>
  </footer>

</body>
</html>
