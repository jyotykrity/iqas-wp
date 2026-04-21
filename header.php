<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php wp_title(); ?></title>
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#0a0a0a">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/assets/favicon/favicon-16x16.png">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="manifest" href="/site.webmanifest">
<?php wp_head(); ?>
</head>
<body>
<header class="header">
<div class="container nav">
<a href="/" style="height: 40px;"><img src="<?php echo get_template_directory_uri();?>/assets/logo.png" class="logo" id="logo" alt="Logo"></a>
<!-- Desktop Menu -->
<nav class="desktop-menu">
<span class="desktop-has-sub">
  <button class="desktop-submenu-toggle">Services ▾</button>
  <ul class="desktop-submenu">
    <li><a href="#">Essay Help</a></li>
    <li><a href="#">Thesis Help</a></li>
    <li><a href="#">Dissertation Help</a></li>
    <li><a href="#">Case Study Help</a></li>
  </ul>
</span>

<a href="#branch">Branch</a>
<a href="#blog">Blog</a>
<a href="#know">Definition</a>
<a href="#guide">Guide</a>
<a href="#about">About</a>
<a href="#contact">Contact</a>
</nav>
<!-- Mobile Toggle -->
<button id="menuToggle" class="menu-btn" aria-label="Menu">
<span class="hamburger"></span>
</button>
<!-- Mobile Drawer -->
<nav id="mobileMenu" class="mobile-menu">
<ul>
<li class="has-sub">
<button class="submenu-toggle">Services ▾</button>
<ul class="submenu">
    <li><a href="#">Essay Help</a></li>
    <li><a href="#">Thesis Help</a></li>
    <li><a href="#">Dissertation Help</a></li>
    <li><a href="#">Case Study Help</a></li>
</ul>
</li>
<li><a href="#branch">Branch</a></li>
<li><a href="#blog">Blog</a></li>
<li><a href="#know">Definition</a></li>
<li><a href="#guide">Guide</a></li>
<li><a href="#about">About</a></li>
<li><a href="#contact">Contact</a></li>
</ul>
</nav>
</div>
</header>

<main>