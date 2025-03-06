<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolean Buuilders</title>
    <link rel="stylesheet" href="/portfolio/bolean builders/css/styles.css">
</head>
<body>

    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
    </div>  
    <nav>
        <ul class="sidebar">
            <li onclick="closeToggle()"><a href="#"><img src="images/close.svg" height="45px" width="45px" alt=""></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Our Projects</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">FAQs</a></li>
        </ul>
        <ul>
            <li><a href="#">Bolean Builders</a></li>
            <li class="hideOnMobile"><a href="#">About</a></li>
            <li class="hideOnMobile"><a href="#">Services</a></li>
            <li class="hideOnMobile"><a href="#">Contact Us</a></li>
            <li class="hideOnMobile"><a href="#">Our Projects</a></li>
            <li class="hideOnMobile"><a href="#">Blog</a></li>
            <li class="hideOnMobile"><a href="#">Testimonials</a></li>
            <li class="hideOnMobile"><a href="#">FAQs</a></li>
            <li class="toggle" onclick="showToggle()"><a href="#"><img src="images/toggle.svg" height="45px" width="45px" alt=""></a></li>
        </ul>
    </nav>

    <section class="hero">
        <h3>Welcome To Bolean Builders</h3>
        <p>
            We are a team of talented developers making websites, Mobile Apps, Software Development,
            IT Support and
            Digital Marketing</p>
            <button><a href="#">Contact Us</a></button>
    </section>

    <script src="/portfolio/bolean builders/Javasript/main.js"></script>
</body>
</html>
