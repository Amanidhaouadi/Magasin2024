<?php
session_start(); // Start session to access user information

// Check if user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to login page if user is not logged in
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<style>
    
    h1 {
       margin: 20px 0;
       margin-bottom: 40px;
       font-family:Jazz LET, fantasy
    }

    h2{
        margin:20px 0 10px 0;
        font-family:Palatino,Serif;
    }

    p{
        text-align: center;
        margin-bottom: 30px;
    }

    /* Flex container for the about section */
    .home-container {
        display: flex;
        flex-direction: column; /* pour aligner*/
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px; /* Optional: Adds padding around the container */
    }

    .home-section{
        border: 1px solid #ccc;
        border-radius: 20px;
        margin: 0 20px 0 20px;
    }


</style>


<body>
<div class="container">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
           <img src="image/logo.png" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-box"></i> Products</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="products.php"><i class="fa-regular fa-file" style="color: #4caf50" ></i> Product List</a></li>
                                <li><a class="dropdown-item" href="scrap.php"><i class="fa-regular fa-file" style="color: #e41d24" ></i> Scrap List</a></li>
                                <li><a class="dropdown-item" href="decharge.php"><i class="fa-regular fa-file" style="color: #1f1f1f" ></i> Discharge Product</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="product.php"><i class="fa-solid fa-file-lines" style="color: #1f1f1f" ></i> Products Catalog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="settings.php"><i class="fas fa-cog"></i> User Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>     
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="home-container">
        <h1>Welcome to Yazaki Inc.</h1>
        <p class="lead">Your trusted partner in automotive technology and innovation.</p> 
        
        <section class="home-section">
            <h2>About Us</h2>
            <p>Yazaki Inc. is a global leader in automotive parts and systems, dedicated to providing innovative solutions to our customers worldwide. With over 80 years of experience, we are committed to enhancing the quality, safety, and performance of vehicles through our cutting-edge technology and superior products.</p>
        </section>
        <br> 
        <section class="home-section">
            <h2>Innovation</h2>
            <p>At Yazaki, innovation is at the heart of everything we do. Our dedicated research and development teams are constantly working to develop new technologies that drive the future of the automotive industry.</p>
            <a href="about.php" class="btn btn-primary">Learn More</a>
        </section>  
        <br>
        <section class="home-section">
            <h2>Contact Us</h2>
            <p>Have questions or need support? Our team is here to help. Reach out to us through our contact page and we will get back to you as soon as possible.</p>
            <a href="contact.php" class="btn btn-primary">Contact Us</a>
        </section> 
    </div>
</div>

<footer class="text-center mt-5">
    <p>&copy; 2024 Yazaki IT Store. All rights reserved.</p>
</footer>

<!-- Bootstrap Bundle with Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
