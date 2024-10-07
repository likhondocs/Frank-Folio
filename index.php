<?php
// Dynamic meta tags based on URL parameters
$title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : 'Exclusive $50 Crypto Reward';
$description = isset($_GET['description']) ? htmlspecialchars($_GET['description']) : 'Exclusive $50 Crypto Reward just for you! Click now to claim your prize and learn more about safe crypto browsing practices.';
$keywords = isset($_GET['keywords']) ? htmlspecialchars($_GET['keywords']) : 'crypto reward, Binance, safe crypto, $50 reward, prank, subscribe, YouTube, crypto education';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="LikhonDocs">
    <meta name="theme-color" content="#f0b90b">
    <title><?php echo $title; ?></title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Lightbox.js for image galleries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Swiper.js for sliders/carousels -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Custom CSS and CSS Variables for themes -->
    <style>
        :root {
            --primary-color: #f0b90b;
            --background-color: #0c0e12;
            --text-color: #ffffff;
            --light-background-color: #ffffff;
            --dark-background-color: #0c0e12;
            --light-text-color: #000000;
            --dark-text-color: #ffffff;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .navbar {
            background-color: #1c1f24;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: var(--text-color);
            margin-right: 20px;
        }
        .banner {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .content {
            background-color: #1c1f24;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
        }
        h1 {
            color: var(--primary-color);
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #cccccc;
        }
        #claim-button {
            background-color: var(--primary-color);
            color: var(--background-color);
            padding: 15px 32px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.3s;
        }
        #claim-button:hover {
            background-color: #d89c09;
            transform: scale(1.05);
        }
        .warning {
            font-size: 16px;
            color: #ff4444;
            margin-top: 20px;
        }
        .security-badges {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .security-badge {
            background-color: var(--light-background-color);
            color: var(--background-color);
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            background-color: #2a2d33;
            border: none;
            margin: 20px 0;
        }
        .card-body {
            padding: 20px;
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-footer {
            border-top: none;
        }
        .referral-count {
            font-size: 20px;
            color: var(--primary-color);
            margin-top: 20px;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">BinancePromo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Banner for Visual Appeal -->
        <img class="banner" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-bLI6SNPWTqFLcDpQclHtLdIbbLATEv8wNZbPpgjA00oTc2BUSBYgFUI&s=10" alt="Binance Banner" loading="lazy">

        <div class="content" data-aos="fade-up">
            <h1>Congratulations! You Received $50!</h1>
            <p>Click the button below to claim your reward and subscribe to our YouTube channel!</p>

            <!-- Interactive Subscribe Button -->
            <button id="claim-button" onclick="openSubscriptionPopup()">Claim $50</button>

            <!-- Warning for Safety -->
            <p class="warning">Warning: This is a demonstration of how phishing might look. Always verify URLs and never click on suspicious links.</p>

            <!-- Security Badges for Trust -->
            <div class="security-badges">
                <div class="security-badge"><i class="fas fa-lock"></i> Secure Site</div>
                <div class="security-badge"><i class="fas fa-check-circle"></i> Verified</div>
                <div class="security-badge"><i class="fas fa-shield-alt"></i> Trustworthy</div>
            </div>

            <!-- Fake Referral Tracking -->
            <div class="referral-count" id="referral-count">Total Referral Earnings: $0</div>
        </div>

        <!-- Cards for Additional Information -->
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <h5 class="card-title">Why Choose Us?</h5>
                <p class="card-text">We provide the best crypto deals and ensure your security and trust. Subscribe now to stay updated.</p>
            </div>
        </div>
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <h5 class="card-title">Our Services</h5>
                <p class="card-text">We offer a variety of crypto services including trading, news, and educational resources.</p>
            </div>
        </div>

        <!-- Modal for More Interactive Content -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Subscribe to BinancePromo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Subscribe to our channel and stay updated with the latest crypto news and rewards.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="openSubscriptionPopup()">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-button" onclick="openTab(event, 'tab1')">Tab 1</button>
            <button class="tab-button" onclick="openTab(event, 'tab2')">Tab 2</button>
            <div id="tab1" class="tab-content">
                <h3>Tab 1 Content</h3>
                <p>This is the content for Tab 1.</p>
            </div>
            <div id="tab2" class="tab-content">
                <h3>Tab 2 Content</h3>
                <p>This is the content for Tab 2.</p>
            </div>
        </div>

        <!-- Image Gallery -->
        <div class="gallery">
            <a href="image1.jpg" data-lightbox="gallery"><img src="image1.jpg" alt="Gallery Image 1" loading="lazy"></a>
            <a href="image2.jpg" data-lightbox="gallery"><img src="image2.jpg" alt="Gallery Image 2" loading="lazy"></a>
            <a href="image3.jpg" data-lightbox="gallery"><img src="image3.jpg" alt="Gallery Image 3" loading="lazy"></a>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Lightbox.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Swiper.js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init();

        // Function to open subscription popup and count 5 seconds
        function openSubscriptionPopup() {
            let popup = window.open('https://www.youtube.com/@LikhonDocs?sub_confirmation=1', 'SubscribePopup', 'width=600,height=600');
            setTimeout(() => {
                popup.close();
                alert('Thank you for subscribing! Remember to stay vigilant against scams.');
                localStorage.setItem('taskCompleted', 'true');
                updateReferralCount();
            }, 5000); // Close after 5 seconds
        }

        // Function to update referral count
        function updateReferralCount() {
            let referralCount = parseInt(localStorage.getItem('referralCount') || '0');
            referralCount += 50;
            localStorage.setItem('referralCount', referralCount);
            document.getElementById('referral-count').innerText = `Total Referral Earnings: $${referralCount}`;
        }

        // Check if task is already completed
        function checkTaskCompleted() {
            if (localStorage.getItem('taskCompleted') === 'true') {
                document.getElementById('claim-button').disabled = true;
                updateReferralCount();
            }
        }

        // Run check on page load
        checkTaskCompleted();

        // Function to remove page from browser history
        history.replaceState(null, document.title, location.pathname+"#!/stealth");
        history.pushState(null, document.title, location.pathname);

        window.addEventListener("popstate", function() {
            if(location.hash === "#!/stealth") {
                history.replaceState(null, document.title, location.pathname);
                setTimeout(function(){
                    location.replace("about:blank");
                }, 0);
            }
        });

        // Function to open tabs
        function openTab(evt, tabName) {
            let i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-button");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>
