<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schnippets</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul class="navItems">
            <li><a href="#">Home</a></li>
            <li><a href="barbers.php">Our Barbers</a></li>
        </ul>
        <div class="widget">
            <button class="dropdownButton">Schedule Now</button>
            <div class="dropdownContent">
            <div id="bookingjs"></div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
                <script src="https://cdn.timekit.io/booking-js/v2/booking.min.js" defer></script>
                <script>
                window.timekitBookingConfig = {
                app_key: 'YOUR APP KEY',
                project_id: 'YOUR PROJECT ID'
                }
                </script>
            </div>
        </div>
    </nav>
    <main>
        <div class="banner">
            <div class="bannerText">
                <h1>Schnippets</h1>
                <h2>Cutting out on the Sitting Time</h2>
            </div>
        </div>
        <div class="textSection">
            <h1 class="header">Our Streamline Method</h1>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti.</p>
        </div>
        <div class="textImg">
            <h1 class="header">Our Commitment to Quality</h1>
            <div>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <img class="sideImg" src="images/textImg.jpg"> 
            </div>
        </div>
        <div class="imgText">
            <h1 class="header">Punctuality and Time Consideration</h1>
            <div>
                <img class="sideImg" src="images/imgText.jpg">
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </main>
    <footer>
        <h6 class="demoText">This website has been created for demonstration purposes</h6>
        <ul class="socialBar">
            <li class="tulip"><a href="https://tulip.com"><img src="images/tulipLogo.png"></a></li>
            <li class="timekit"><a href="https://timekit.io"><img src="images/timekitLogo.png"></a></li>
        </ul>
    </footer>
</body>
</html>