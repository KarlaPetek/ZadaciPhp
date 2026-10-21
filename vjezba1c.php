<?php
$naslov = "PHP dokument — vježba 1c";
$autor = "Karla Petek";
$opis = "Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
$linkInfo = "https://www.php.net";
$linkNatrag = "vjezba1b.php";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP dokument - vježba 1c</title>

  <style>
    :root {
      --bg: #000;
      --card: #fff;
      --text: #202938;
      --muted: #666666;
      --accent: #007a52;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
      font-size: 16px;
      line-height: 1.6;
      margin: 0;
      background: var(--bg);
      color: var(--text);
      padding: 0 16px;
    }

    .wrap {
      width: 100%;
      max-width: 720px;
      margin: 48px auto;
      background: var(--card);
      padding: 32px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
    }

    h1 {
      font-size: 2rem;
      margin-top: 0;
      margin-bottom: 14px;
    }

    p {
      margin-bottom: 14px;
      line-height: 1.6;
    }

    footer {
      font-size: 0.9rem;
      color: var(--muted);
    }

    a {
      color: var(--text);
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    a:focus-visible {
      outline: 3px solid var(--accent);
      outline-offset: 3px;
    }

    .btn {
      display: inline-block;
      padding: 10px 16px;
      border: 1px solid var(--accent);
      border-radius: 10px;
      color: var(--accent);
      text-decoration: none;
      transition: background-color 0.2s, color 0.2s;
    }

    .btn:hover {
      background: var(--accent);
      color: #fff;
      text-decoration: none;
    }

    .btn:focus-visible {
      outline: 3px solid var(--accent);
      outline-offset: 3px;
    }

    .btn:active {
      opacity: 0.75;
    }

    @media (max-width: 480px) {
      .wrap {
        margin: 24px auto;
        padding: 20px;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .btn {
        transition: none;
      }
    }
  </style>
</head>

<body>
  <main class="wrap">
    <h1><?php echo $naslov ?></h1>

    <p>Ovu stranicu izradio/la je <?php echo $autor ?></p>

    <p><?php echo $opis ?></p>

    <div class="row">
      <a class="btn" href="<?php echo $linkInfo ?>" target="_blank">Saznaj više o PHP-u</a>
      <a class="btn" href="<?php echo $linkNatrag ?>">Natrag na vježba 1b</a>
    </div>

    <footer>© <?php echo date('Y') ?> — Demo za PHP</footer>
   
  </main>
<!--vjezba1c-->
</body>
</html>
