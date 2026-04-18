<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Moh. Agus Safii | Programmer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="logo">
                        <span class="logo-text"></span>
                        <span class="logo-dot">.</span>
                    </a>
                    <button class="nav-toggle" id="navToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="nav-menu" id="navMenu">
                        <li><a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Beranda</a></li>
                        <li><a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">Tentang</a></li>
                        <li><a href="skills.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'skills.php' ? 'active' : ''; ?>">Keahlian</a></li>
                        <li><a href="experience.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'experience.php' ? 'active' : ''; ?>">Pengalaman</a></li>
                        <li><a href="portfolio.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>">Portfolio</a></li>
                        <li><a href="contact.php" class="nav-link nav-link-cta <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>