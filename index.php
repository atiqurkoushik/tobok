<?php
// Start session for cart functionality
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tobok - Trusted Name of Arabic Sweets</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Tobok - Trusted Name of Arabic Sweets. Experience the finest desserts, cakes, and pastries in Dhaka with three convenient locations.">
    <meta name="keywords"
        content="Tobok , Dhaka restaurants, desserts, cakes, pastries, bakery, sweets, celebration cakes, wedding cakes, birthday cakes">
    <meta name="author" content="Tobok Restaurant">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Tobok  - Trusted Name of Arabic Sweets">
    <meta property="og:description" content="Experience the finest desserts in Dhaka with three convenient locations.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://tobokfoods.com">

    <!-- Canonical URL for SEO -->
    <link rel="canonical" href="http://tobokfoods.com">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Preload important images -->
    <link rel="preload" href="img/slide1.jpg" as="image">
    <link rel="preload" href="img/logo.png" as="image">
</head>

<body>
    <!-- Include Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section with Slider -->
    <section class="hero">
        <div class="slider-container">
            <div class="slider">
                <div class="slide active">
                    <div class="slide-content">
                        <h1>Every Occasion is Sweeter</h1>
                        <p>Experience the finest desserts and pastries crafted with passion and precision</p>
                        <a href="#menu" class="btn">View Our Menu</a>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <h1>Celebrate With Tobok Foods</h1>
                        <p>The perfect choice for occasions, gifting, milad and family gatherings.</p>
                        <a href="#featured" class="btn">Featured Items</a>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <h1>Three Locations in Dhaka</h1>
                        <p>Visit us at Raybazar, Harirpool and Badda for your favorite treats</p>
                        <a href="#location" class="btn">Find a Location</a>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="slider-btn prev"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button class="slider-btn next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2>About Tobok Foods</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Premium Saudi-Style Bakery & Sweets in Dhaka
                        We specialize in authentic Saudi Arabian sweets, fresh bakery items, and creamy doi that melt in
                        your mouth.
                    </p>
                    <p>From occasions, get-togethers, milad mahfils to gifting — Tobok Foods is the perfect choice. Our
                        products are fresh, premium and unforgettable in taste. Experience Middle-Eastern sweetness
                        right here in Dhaka.</p>
                </div>
                <div class="hours">
                    <h3><i class="far fa-clock"></i> Opening Hours</h3>
                    <p>We're open 7 days a week to satisfy your sweet cravings:</p>
                    <div class="hours-grid">
                        <div class="day">Monday - Sunday</div>
                        <div class="time">7:00 AM - 11:00 PM</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="full-menu" id="menu">
        <div class="container">
            <h2>Our Menu</h2>
            <p class="section-subtitle">Explore our complete selection of sweets, dohi, cookies, cakes, bread, and
                savories
            </p>
            <div class="menu-categories">
                <!-- Sweets Category -->
                <div class="menu-category">
                    <h3>Sweets</h3>
                    <div class="menu-items">
                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Adi Roshogolla</h4>
                                <p>Classic Bengali sweet cheese balls in syrup</p>
                            </div>
                            <div class="item-price">৳ 390</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Adi Kalojam</h4>
                                <p>Traditional dark sweet in sugar syrup</p>
                            </div>
                            <div class="item-price">৳ 390</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Adi Golapjam</h4>
                                <p>Rose-flavored sweet delicacy</p>
                            </div>
                            <div class="item-price">৳ 390</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Lalmohon</h4>
                                <p>Rich, reddish-brown sweet</p>
                            </div>
                            <div class="item-price">৳ 390</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Roshmalai (500gm)</h4>
                                <p>Soft cheese patties in sweetened milk</p>
                            </div>
                            <div class="item-price">৳ 310</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Adi Chamcham</h4>
                                <p>Classic elongated sweet with creamy filling</p>
                            </div>
                            <div class="item-price">৳ 520</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Malai Chamcham</h4>
                                <p>Cream-filled chamcham with malai coating</p>
                            </div>
                            <div class="item-price">৳ 540</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Malai Sorai</h4>
                                <p>Premium cream-based layered sweet</p>
                            </div>
                            <div class="item-price">৳ 780</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Sponge Sweet (12pcs)</h4>
                                <p>Light and fluffy sponge-based sweet</p>
                            </div>
                            <div class="item-price">৳ 520</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Jafran Bhog</h4>
                                <p>Saffron-infused premium sweet</p>
                            </div>
                            <div class="item-price">৳ 690</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Kheer Toast</h4>
                                <p>Sweetened milk pudding toast</p>
                            </div>
                            <div class="item-price">৳ 520</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Motichur Laddu</h4>
                                <p>Fine boondi sweet balls</p>
                            </div>
                            <div class="item-price">৳ 440</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Bundiya Laddu</h4>
                                <p>Sweet balls made from tiny pearls</p>
                            </div>
                            <div class="item-price">৳ 420</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Kashmiri Laddu</h4>
                                <p>Special laddu with dry fruits</p>
                            </div>
                            <div class="item-price">৳ 480</div>
                        </div>

                        <div class="menu-item">
                            <div class="item-info">
                                <h4>Dodhiya Sondesh</h4>
                                <p>Creamy milk sweet with rich texture</p>
                            </div>
                            <div class="item-price">৳ 650</div>
                        </div>

                        <div class="menu-items">
                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Sada Chamcham</h4>
                                    <p>Plain white chamcham</p>
                                </div>
                                <div class="item-price">৳ 480</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Katari Bhog</h4>
                                    <p>Scissor-cut sweet delicacy</p>
                                </div>
                                <div class="item-price">৳ 570</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Shor Bhog</h4>
                                    <p>Premium aromatic sweet</p>
                                </div>
                                <div class="item-price">৳ 620</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Cake Sondesh</h4>
                                    <p>Cake-like milk sweet</p>
                                </div>
                                <div class="item-price">৳ 750</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Pera Sondesh</h4>
                                    <p>Round-shaped milk sweet</p>
                                </div>
                                <div class="item-price">৳ 650</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Baby Sweets</h4>
                                    <p>Miniature sweet balls</p>
                                </div>
                                <div class="item-price">৳ 440</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Malai Sandwich</h4>
                                    <p>Cream-filled sandwich sweet</p>
                                </div>
                                <div class="item-price">৳ 580</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Malaikari</h4>
                                    <p>Rich cream-based sweet</p>
                                </div>
                                <div class="item-price">৳ 580</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Kacha Chana</h4>
                                    <p>Chickpea-based sweet</p>
                                </div>
                                <div class="item-price">৳ 680</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Gurer Kacha Chana</h4>
                                    <p>Chickpea sweet with date palm jaggery</p>
                                </div>
                                <div class="item-price">৳ 680</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Black Toast</h4>
                                    <p>Dark sweet toast</p>
                                </div>
                                <div class="item-price">৳ 480</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Habsi Sondesh</h4>
                                    <p>Special aromatic milk sweet</p>
                                </div>
                                <div class="item-price">৳ 490</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Jorda Laddu</h4>
                                    <p>Vermicelli-based sweet balls</p>
                                </div>
                                <div class="item-price">৳ 440</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Harivanga</h4>
                                    <p>Premium layered sweet</p>
                                </div>
                                <div class="item-price">৳ 780</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Jilapi</h4>
                                    <p>Traditional spiral-shaped sweet</p>
                                </div>
                                <div class="item-price">৳ 420</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Malai Chop (10pcs)</h4>
                                    <p>Cream-filled fried sweets</p>
                                </div>
                                <div class="item-price">৳ 620</div>
                            </div>
                        </div>
                    </div>

                    <!-- Dohi Category -->
                    <div class="menu-category">
                        <h3>Dohi</h3>
                        <div class="menu-items">
                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Sweet Dohi (900gm)</h4>
                                    <p>Traditional sweet yogurt</p>
                                </div>
                                <div class="item-price">৳ 380</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Special Dohi (900gm)</h4>
                                    <p>Premium quality sweet yogurt</p>
                                </div>
                                <div class="item-price">৳ 400</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Shor Dohi (500gm)</h4>
                                    <p>Aromatic sweet yogurt</p>
                                </div>
                                <div class="item-price">৳ 100</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Cup Dohi (90gm)</h4>
                                    <p>Single serving sweet yogurt</p>
                                </div>
                                <div class="item-price">৳ 45</div>
                            </div>
                        </div>
                    </div>

                    <!-- Cookies Category -->
                    <div class="menu-category">
                        <h3>Cookies</h3>
                        <div class="menu-items">
                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Horlics Cookies (220gm)</h4>
                                    <p>Malted milk flavor cookies</p>
                                </div>
                                <div class="item-price">৳ 190</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Ovaltine Cookies (220gm)</h4>
                                    <p>Chocolate malt flavor cookies</p>
                                </div>
                                <div class="item-price">৳ 190</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Butter Salt Cookies (220gm)</h4>
                                    <p>Buttery cookies with hint of salt</p>
                                </div>
                                <div class="item-price">৳ 185</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Butter Cookies (220gm)</h4>
                                    <p>Classic butter cookies</p>
                                </div>
                                <div class="item-price">৳ 185</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Dry Cake (180gm)</h4>
                                    <p>Light and dry cake slices</p>
                                </div>
                                <div class="item-price">৳ 180</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Ghee Toast (250gm)</h4>
                                    <p>Toast made with pure ghee</p>
                                </div>
                                <div class="item-price">৳ 95</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Plain Toast (250gm)</h4>
                                    <p>Simple crispy toast</p>
                                </div>
                                <div class="item-price">৳ 80</div>
                            </div>
                        </div>
                    </div>

                    <!-- Bread & Bun Category -->
                    <div class="menu-category">
                        <h3>Bread & Bun</h3>
                        <div class="menu-items">
                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Sandwich Bread (400gm)</h4>
                                    <p>Soft white bread for sandwiches</p>
                                </div>
                                <div class="item-price">৳ 90</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Milk Bread (400gm)</h4>
                                    <p>Rich milk-based bread</p>
                                </div>
                                <div class="item-price">৳ 90</div>
                            </div>
                        </div>
                    </div>

                    <!-- Pound Cake Category -->
                    <div class="menu-category">
                        <h3>Pound Cake</h3>
                        <div class="menu-items">
                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Plain Cake (400gm)</h4>
                                    <p>Classic pound cake</p>
                                </div>
                                <div class="item-price">৳ 260</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Fruit Cake (400gm)</h4>
                                    <p>Pound cake with mixed fruits</p>
                                </div>
                                <div class="item-price">৳ 280</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chocolate Cake (400gm)</h4>
                                    <p>Rich chocolate pound cake</p>
                                </div>
                                <div class="item-price">৳ 290</div>
                            </div>
                        </div>
                    </div>

                    <!-- Savories Category -->
                    <div class="menu-category">
                        <h3>Savories</h3>
                        <div class="menu-items">
                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Cheese Burger</h4>
                                    <p>Chicken patty with cheese</p>
                                </div>
                                <div class="item-price">৳ 80</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Shawarma</h4>
                                    <p>Spiced chicken wrap</p>
                                </div>
                                <div class="item-price">৳ 85</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Meatloaf</h4>
                                    <p>Seasoned chicken loaf</p>
                                </div>
                                <div class="item-price">৳ 75</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Vegetable Bread Roll</h4>
                                    <p>Vegetable-filled bread roll</p>
                                </div>
                                <div class="item-price">৳ 35</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Bread Roll</h4>
                                    <p>Chicken-filled bread roll</p>
                                </div>
                                <div class="item-price">৳ 55</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Fry Roll</h4>
                                    <p>Fried chicken roll</p>
                                </div>
                                <div class="item-price">৳ 40</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Burger</h4>
                                    <p>Classic chicken burger</p>
                                </div>
                                <div class="item-price">৳ 60</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Patties</h4>
                                    <p>Chicken-filled pastry</p>
                                </div>
                                <div class="item-price">৳ 55</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Spring Roll</h4>
                                    <p>Crispy chicken spring roll</p>
                                </div>
                                <div class="item-price">৳ 35</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Chicken Samosa</h4>
                                    <p>Triangular chicken pastry</p>
                                </div>
                                <div class="item-price">৳ 30</div>
                            </div>

                            <div class="menu-item">
                                <div class="item-info">
                                    <h4>Vegetable Singara</h4>
                                    <p>Traditional vegetable samosa</p>
                                </div>
                                <div class="item-price">৳ 25</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Packages Section -->
    <section class="featured" id="featured">
        <div class="container">
            <h2>Our Packages</h2>
            <p class="section-subtitle">Our most popular treats, always fresh and delicious</p>

            <div class="items-container">
                <div class="items-track">
                    <!-- Item 1 -->
                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 450</div>
                        </div>
                        <h3>Package 1</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <!-- Item 2 -->
                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 380</div>
                        </div>
                        <h3>Package 2</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <!-- Item 3 -->
                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 550</div>
                        </div>
                        <h3>Package 3</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <!-- Item 4 -->
                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 320</div>
                        </div>
                        <h3>Package 4</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <!-- Item 5 -->
                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 480</div>
                        </div>
                        <h3>Package 5</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <!-- Item 6 -->
                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 400</div>
                        </div>
                        <h3>Package 6</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <!-- Duplicate items for seamless scrolling -->
                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 450</div>
                        </div>
                        <h3>Package 7</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 380</div>
                        </div>
                        <h3>Package 8</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>

                    <div class="item">
                        <div class="item-img">
                            <div class="price">৳ 550</div>
                        </div>
                        <h3>Package 9</h3>
                        <p>Made with Garlick, Butter, Onion</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location" id="location">
        <div class="container">
            <h2>Our Locations</h2>
            <p class="section-subtitle">Visit us at any of our three Dhaka locations</p>

            <div class="locations-grid">
                <!-- Location 1 -->
                <div class="location-card">
                    <div class="location-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Rayer Bazar</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 3/6/B/1, Sultanganj-1209</p>
                    <p><i class="fas fa-phone"></i> +880 1901-646764</p>
                    <p><i class="far fa-clock"></i> 7:00 AM - 11:00 PM</p>
                    <a href="https://maps.google.com/?q=Gulshan-2,Dhaka" target="_blank" class="location-btn">
                        <i class="fas fa-directions"></i> Get Directions
                    </a>
                </div>

                <!-- Location 2 -->
                <div class="location-card">
                    <div class="location-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Hatirpool</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Dr. Kudrot E Khuda Sharak-1205</p>
                    <p><i class="fas fa-phone"></i> +880 1886-990188</p>
                    <p><i class="far fa-clock"></i> 7:00 AM - 11:00 PM</p>
                    <a href="https://maps.google.com/?q=Dhanmondi,Dhaka" target="_blank" class="location-btn">
                        <i class="fas fa-directions"></i> Get Directions
                    </a>
                </div>

                <!-- Location 3 -->
                <div class="location-card">
                    <div class="location-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Badda</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Highway Homes KA 32/6-1205</p>
                    <p><i class="fas fa-phone"></i> +880 1901-646765</p>
                    <p><i class="far fa-clock"></i> 7:00 AM - 11:00 PM</p>
                    <a href="https://maps.google.com/?q=Uttara,Dhaka" target="_blank" class="location-btn">
                        <i class="fas fa-directions"></i> Get Directions
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript -->
    <script src="assets/java.js"></script>
</body>

</html>