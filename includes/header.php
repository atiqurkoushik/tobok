<?php
// Define current page for active nav styling
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="header">
    <div class="container">
        <nav class="navbar">
            <!-- Logo -->
            <div class="logo">
                <a href="https://tobokfoods.com/">
                    <img src="img/logo.png" alt="Tobok Foods Logo" width="200">
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navigation Menu -->
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="index.php"
                        class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#menu" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#location" class="nav-link">Location</a>
                </li>
            </ul>

            <!-- Call to Action Button -->
            <div class="header-cta">
                <a href="tel:+8801901646764" class="cta-btn">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </nav>
    </div>
</header>