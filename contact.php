<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Yazaki IT Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        h1, h2 {
           margin: 40px 0 40px 0; 
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            font-size: 16px;
        }
        .fa {
            margin: 0 10px 0 50px ;
            color: #007BFF;
        }
        .fab {
            margin: 0 10px 0 60px ;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
        a i {
            margin-right: 5px;
        }
        .social-media a {
            font-size: 14px; 
        }

        /* Flex container for the divs */
        .contact-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: 0 auto;
        }
        .contact-box {
            width: 48%;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
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
                                <li><a class="dropdown-item" href="products.php">Product List</a></li>
                                <li><a class="dropdown-item" href="scrap.php">Scrap List</a></li>
                                <li><a class="dropdown-item" href="decharge.php">Discharge Product</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="product.php">Products Catalog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> contact</a></li>
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
    
    <h1>Contact Us</h1>
    <p style="text-align: center; margin-bottom: 40px;">If you have any questions, feel free to reach out to us through any of the methods below:</p>
    
    <div class="contact-container">
        <div class="contact-box">
            <h2 style="text-align: left;">Phone Numbers</h2>
            <ul>
                <li><i class="fa fa-phone"></i> Customer Service: (123) 456-7890</li>
                <li><i class="fa fa-phone"></i>Technical Support: (098) 765-4321</li>
            </ul>
        </div>

        <div class="contact-box">
            <h2 style="text-align: left;">Social Media</h2>
            <ul>
                <li><a href="https://www.facebook.com/yazakiitstore" target="_blank"><i class="fab fa-facebook"></i>Facebook</a></li>
                <li><a href="https://www.twitter.com/yazakiitstore" target="_blank"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="https://www.instagram.com/yazakiitstore" target="_blank"><i class="fab fa-instagram"></i>Instagram</a></li>
                <li><a href="https://www.linkedin.com/company/yazakiitstore" target="_blank"><i class="fab fa-linkedin"></i>LinkedIn</a></li>
            </ul>
        </div>
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