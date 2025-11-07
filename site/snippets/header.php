<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $page->title()->esc() ?> | <?= $site->title()->esc() ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?= css('assets/css/site.css') ?>
</head>
<body>

<?php if ($site->showNavbar()->toBool()): ?>
  <header class="navbar">
    <nav>
      <a href="<?= $site->url() ?>">Home</a>
    </nav>
  </header>
<?php endif ?>



  <!-- //   $template = $page->template();
  // ?>
  //  vite([
  //   'assets/css/prism.css',
  //   'assets/css/lightbox.css',
  //   'assets/css/index.css',
  //   '@assets/css/templates/' . $template .'.css',
  //   'assets/js/lightbox.js',
  //   'assets/js/index.js',
  //   'assets/js/prism.js',
  // ]) -->

  