<?php
$User = $Core->GetUser($this->storage("accid"));
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <base href="<?= domain ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="<?= $assets ?>/images/favicon.png" rel="icon">
  <title><?= $title ?></title>
  <meta name="description" content="Login and Register Form Html Template">
  <meta name="author" content="harnishdesign.net">

  <!-- Web Fonts
======================= -->
  <link rel='stylesheet' href='../../css.css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

  <!-- Stylesheet
======================= -->
  <link rel="stylesheet" type="text/css" href="<?= $assets ?>/css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="<?= $assets ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $assets ?>/vendor/font-awesome/css/all.min.css">
  <link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>

<body class="oxyy-login-register">

  <!-- Preloader -->
  <div class="preloader preloader-dark">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!--Preloader End -->

  <div id="main-wrapper" class="bg-light-3">

    <!-- Header -->
    <header class="bg-white text-center pt-5 pb-5">
      <div class="logo mb-3"> <a href="index.html" title="Oxyy"><img src="<?= $assets ?>/images/logo-lg.png" alt="Oxyy"></a> </div>
      <h2 class="text-dark text-5"><?= $title ?></h2>
    </header>