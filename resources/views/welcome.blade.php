<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Delawa App Links</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    :root {
      --primary: #7d4651;
      --secondary: #fff;
      --accent: #ffd700;
      --dark: #222;
      --muted: #f5f5f7;
      --shadow: 0 4px 24px rgba(0,0,0,0.08);
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', 'Cairo', sans-serif;
    }
    body {
      background: linear-gradient(135deg, var(--primary) 0%, #4e2e36 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
    }
    .container {
      width: 100%;
      max-width: 480px;
      margin: 40px auto 0 auto;
      padding: 32px 18px 24px 18px;
      background: transparent;
      border-radius: 0;
      box-shadow: none;
      text-align: center;
      position: relative;
      z-index: 2;
    }
    .logo img {
      width: 180px;
      max-width: 60vw;
      margin-bottom: 24px;
      border-radius: 50%;
      border: 4px solid var(--secondary);
      box-shadow: 0 2px 16px rgba(0,0,0,0.07);
      background: var(--muted);
    }
    .grid-links {
      display: grid;
      grid-template-columns: 1fr;
      gap: 18px;
      margin-top: 24px;
      justify-content: center;
    }
    @media (min-width: 600px) {
      .grid-links {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (min-width: 900px) {
      .container {
        max-width: 700px;
        padding: 40px 32px 32px 32px;
      }
      .grid-links {
        grid-template-columns: repeat(3, 1fr);
      }
    }
    .link-card {
      background-color: var(--muted);
      border-radius: 18px;
      min-height: 160px;
      width: 200px;
      margin: 0 auto;
      box-shadow: 0 2px 12px rgba(0,0,0,0.06);
      text-align: center;
      transition: transform 0.25s cubic-bezier(.4,2,.6,1), box-shadow 0.25s;
      text-decoration: none;
      color: var(--dark);
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: flex-end;
      justify-content: center;
      background-size: cover;
      background-position: center;
      cursor: pointer;
      border: 2px solid transparent;
    }
    .link-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(0deg, rgba(34,34,34,0.45) 60%, rgba(255,255,255,0.05) 100%);
      z-index: 1;
      pointer-events: none;
      transition: background 0.3s;
    }
    .link-card:hover, .link-card:focus {
      transform: translateY(-7px) scale(1.03);
      box-shadow: 0 8px 32px rgba(0,0,0,0.13);
      border-color: var(--accent);
      outline: none;
    }
    .link-card:active {
      transform: scale(0.98);
    }
    .link-text {
      position: relative;
      z-index: 2;
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--secondary);
      margin-bottom: 18px;
      text-shadow: 0 2px 8px rgba(0,0,0,0.18);
      letter-spacing: 0.5px;
    }
    .feedback-btn {
      display: inline-block;
      background: var(--primary);
      color: var(--secondary);
      padding: 14px 32px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 700;
      font-size: 1.1rem;
      margin-top: 36px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: background 0.2s, color 0.2s, transform 0.2s;
      border: none;
    }
    .feedback-btn:hover, .feedback-btn:focus {
      background: var(--accent);
      color: var(--dark);
      transform: scale(1.04);
      outline: none;
    }
    footer {
      margin-top: auto;
      padding: 32px 0 18px 0;
      background: transparent;
      width: 100%;
      text-align: center;
      z-index: 1;
    }
    .footer-text {
      color: #eee;
      font-size: 15px;
      letter-spacing: 0.5px;
      margin-top: 10px;
      text-shadow: 0 1px 4px rgba(0,0,0,0.18);
    }
    @media (max-width: 480px) {
      .container {
        padding: 16px 4vw 18px 4vw;
      }
      .logo img {
        width: 140px;
        max-width: 80vw;
      }
      .feedback-btn {
        padding: 10px 12vw;
        font-size: 1rem;
      }
      .grid-links {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        margin-top: 24px;
      }
      .grid-links .link-card:nth-child(3) {
        grid-column: 1 / span 2;
        width: 60%;
        margin: 0 auto;
        min-width: 120px;
      }
      .link-card {
        min-height: 120px;
      }
    }
  </style>
</head>
<body>
  <!-- IMPORTANT: To properly load Font Awesome icons, please open this file using a local server such as Live Server in VS Code. -->

  <div class="container">
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Delawa Logo" />
    </div>

    <div style="display: flex; justify-content: center; margin-top: 18px;">
      <a href="https://thechefzco.app.link/sXRjUP4PVTb" class="link-card" style="background-image: url('{{ asset('images/the-chefz.png') }}'); width: 200px; min-height: 160px; margin: 0 auto;" aria-label="Chefz"></a>
    </div>
    {{-- <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 35px;">هتلاقوني في</h2> --}}

    <div style="margin-top: 30px;">
      <a href="https://qrcode1.adv-line.sa/form" target="_blank" class="feedback-btn" style="display: inline-block; background-color: #000; color: #fff; padding: 12px 20px; border-radius: 8px; text-decoration: none; font-weight: bold; transition: all 0.3s ease;">
        قيم تجربتك معنا من هنا
      </a>
    </div>
    <div style="display: flex; justify-content: center; margin-top: 48px;">
      <a href="https://thechefzco.app.link/sXRjUP4PVTb" class="link-card" style="background-image: url('{{ asset('images/the-chefz.png') }}'); width: 200px; min-height: 160px; margin: 0 auto;" aria-label="Chefz"></a>
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
