<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تست ساده PHP در StackBlitz</title>
  <style>
    body { font-family: system-ui, sans-serif; background: #f0f4f8; color: #333; padding: 40px; text-align: center; }
    h1   { color: #2c7be5; }
    .box { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); max-width: 600px; margin: 0 auto; }
  </style>
</head>
<body>

<div class="box">
  <h1>سلام! این یه پروژه PHP ساده است</h1>
  
  <p>تاریخ و ساعت سرور:</p>
  <p style="font-size: 1.4rem; font-weight: bold;">
    <?= date('Y/m/d – H:i:s'); ?>
  </p>

  <p>آی‌پی شما (تقریبی):</p>
  <p style="font-size: 1.2rem; color: #e74c3c;">
    <?= $_SERVER['REMOTE_ADDR'] ?? 'نامشخص' ?>
  </p>

  <hr style="margin: 30px 0;">
  
  <form method="GET">
    <input type="text" name="name" placeholder="اسمت رو بنویس..." style="padding: 10px; width: 220px;">
    <button type="submit" style="padding: 10px 20px; background: #2c7be5; color: white; border: none; border-radius: 6px; cursor: pointer;">
      بفرست
    </button>
  </form>

  <?php if (!empty($_GET['name'])): ?>
    <p style="margin-top: 30px; font-size: 1.3rem;">
      سلام <strong style="color: #27ae60;"><?= htmlspecialchars($_GET['name']) ?></strong>، خوش اومدی! 😊
    </p>
  <?php endif; ?>
</div>

</body>
</html>