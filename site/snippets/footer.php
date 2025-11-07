<?php if ($site->showFooter()->toBool()): ?>
  <footer class="site-footer">
    <?= $site->footerText()->or('© ' . date('Y') . ' ' . $site->title())->escape() ?>
  </footer>
<?php endif; ?>