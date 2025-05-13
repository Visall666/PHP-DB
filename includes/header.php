<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location: '. BURL . 'login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?> | <?=APP_NAME;?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark bg-body-tertiary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">PHP & DB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topnav" aria-controls="topnav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="topnav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?=BURL;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BURL;?>employees/index.php">Employees</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=BURL;?>companies/index.php">Companies Info</a></li>
            <li><a class="dropdown-item" href="<?=BURL;?>products/index.php">Products</a></li>
            <li><a class="dropdown-item" href="<?=BURL;?>categories/index.php">Categories</a></li>
            <li><a class="dropdown-item" href="<?=BURL;?>roles/index.php">Roles</a></li>
            <li><a class="dropdown-item" href="<?=BURL;?>users/index.php">Users</a></li>
          </ul>
        </li>
      </ul>
     
    </div>
  </div>
</nav>