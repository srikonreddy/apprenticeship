<!DOCTYPE html>
<style>
<?php include 'assets/css/menu.css' ?>
</style>

<?php function is_page ($name) { return strpos ($_SERVER ['SCRIPT_NAME'], $name) !== false ? 'active' : ''; } ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/">
    <div class="logo-image">
      <img class="logo-image" src="/assets/imgs/logo.jpg">
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-items">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbars-items">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= is_page ('index') ?>">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= is_page ('pathways') ?>" href="pathways.php">Pathways</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= is_page ('modules') ?>" href="modules.php">Modules</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?= is_page ('events') ?>" href="#" id="dropdown" data-toggle="dropdown">Events</a>
        <div class="dropdown-menu">
          <a class="dropdown-item <?= is_page ('events-schools') ?>" href="events-school.php">School Events</a>
          <a class="dropdown-item <?= is_page ('events-public') ?>" href="events-puclic.php">Public Events</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
