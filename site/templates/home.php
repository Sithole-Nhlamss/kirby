<?php snippet('header') ?>

<main class="page">

 <div
    id="app"
    data-enabled="<?= $site->showAnnouncementBar()->toBool() ? '1' : '0' ?>"
    data-title="<?= $site->announcementTitle()->esc() ?>"
    data-text="<?= $site->announcementText()->esc() ?>"
  > </div>
  
  <?= vite('src/main.ts') ?>
  <?php snippet('footer') ?>

  <section class="hero">
    <?php if ($image = $page->avatar()->toFile()): ?>
      <img class="hero-avatar" src="<?= $image->url() ?>" alt="<?= $site->title()->esc() ?>">
    <?php endif ?>

    <p class="hero-tagline"><?= $page->tagline()->esc() ?></p>
    <h1><?= $site->title()->esc() ?></h1>
    <p class="hero-intro"><?= $page->intro()->kirbytext() ?></p>

    <div class="hero-links">
      <?php if ($page->github()->isNotEmpty()): ?>
        <a href="<?= $page->github() ?>" target="_blank" rel="noopener">GitHub</a>
      <?php endif ?>
      <?php if ($page->linkedin()->isNotEmpty()): ?>
        <a href="<?= $page->linkedin() ?>" target="_blank" rel="noopener">LinkedIn</a>
      <?php endif ?>
      <?php if ($page->email()->isNotEmpty()): ?>
        <a href="mailto:<?= $page->email() ?>">Email</a>
      <?php endif ?>
    </div>
  </section>

  <?php $projects = $page->projects()->toStructure(); ?>
  <?php if ($projects->isNotEmpty()): ?>
    <section class="section">
      <h2>Projects</h2>
      <div class="project-list">
        <?php foreach ($projects as $project): ?>
          <article class="project">
            <h3><?= $project->name()->esc() ?></h3>
            <p><?= $project->description()->esc() ?></p>
            <div class="project-meta">
              <?php if ($project->tech()->isNotEmpty()): ?>
                <span><?= $project->tech()->esc() ?></span>
              <?php endif ?>
              <?php if ($project->link()->isNotEmpty()): ?>
                <a href="<?= $project->link() ?>" target="_blank" rel="noopener">View</a>
              <?php endif ?>
            </div>
          </article>
        <?php endforeach ?>
      </div>
    </section>
  <?php endif ?>

  <?php if ($page->skills()->isNotEmpty()): ?>
    <section class="section">
      <h2>Skills</h2>
      <ul class="tag-list">
        <?php foreach ($page->skills()->split() as $skill): ?>
          <li><?= esc($skill) ?></li>
        <?php endforeach ?>
      </ul>
    </section>
  <?php endif ?>

</main>

<?php snippet('footer') ?>