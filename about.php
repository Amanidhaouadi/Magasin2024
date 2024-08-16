<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>

    h1 {
       margin: 20px 0;
       margin-bottom: 40px;
       font-family:Jazz LET, fantasy
    }
    h2{font-family:Palatino,Serif}
    /* Flex container for the about section */
    .about-container {
        display: flex;
        flex-direction: column; /* pour aligner*/
        max-width: 1100px;
        margin: 0 auto;
        padding: 20px; /* Optional: Adds padding around the container */
    }

    /* Main content section with history and mission */
    .about-main-content {
        display: flex;
        gap: 20px; /* Adds space between history and mission boxes */
        margin-bottom: 20px; /* Space below the main content section */
    }

    /* Styling for each box within the about section */
    .about-box {
        flex: 1 1 calc(50% - 20px); /* Adjust width considering the gap */
        box-sizing: border-box; /* Includes padding and border in element's total width and height */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff; /* Optional: Adds a background color to distinguish the boxes */
    }

    /* Styling for images between paragraphs */
    .about-img {
        width:1020px;
        height:400px;
        
        border-radius: 15px;
        margin: 20px 0; /* Space around the images */
    }
    video{width:1030px;
        height:400px;
        
        border-radius: 15px;}
        
        .about-section{border: 1px solid #ccc;
            border-radius: 20px;}
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
    <div class="about-container">
            <section class="about-section">
                <h1>Welcome to Yazaki IT Store</h1>
                <p style="text-align: center; margin: 0 100px 30px 100px;">At Yazaki, we are dedicated to providing top-quality tech products to our customers. Our store offers a wide range of electronic gadgets, from switches and hubs to high-performance laptops and accessories. We believe in innovation, quality, and customer satisfaction.</p>
                <video src="image/intro.mp4" controls autoplay loop muted class="about-media"></video>
   
            </section>
         
            <div class="about-box"> 
            <section class="history-section">
                <h2> Our History</h2>
                <p>Yazaki was founded with the vision of bringing the best technology to the market. Over the years, we have grown to become a trusted name in the tech industry, known for our commitment to excellence and our extensive product range. Our journey has been fueled by a passion for technology and a desire to make cutting-edge products accessible to everyone.</p>
                <img src="image/infra.png" alt="Image 2" class="about-img" title="Yazaki Infrastructure">
            </section>
            </div>
            <br>
            <div class="about-box">
            <section class="mission-section">
                <h2>Our Mission</h2>
                <p>Our mission is to enhance the lives of our customers by providing innovative and reliable tech products. We strive to be at the forefront of technology, offering products that meet the highest standards of quality and performance. Customer satisfaction is our top priority, and we are committed to delivering exceptional service and support.</p>
                <img src="image/trav.jpg" alt="Image 3" class="about-img" title="Employees working at Yazaki">
            </section>
            </div>
            <br>
        <div class="about-box">
            <section class="values-section">
                <h2>Our Values</h2>
                <ul>
                    <li><strong>Innovation:</strong> We embrace innovation and are always on the lookout for the latest advancements in technology.</li>
                    <li><strong>Quality:</strong> We are committed to providing products that meet the highest standards of quality and reliability.</li>
                    <li><strong>Customer Satisfaction:</strong> Our customers are at the heart of everything we do. We strive to exceed their expectations with every interaction.</li>
                    <li><strong>Integrity:</strong> We conduct our business with the utmost integrity, honesty, and transparency.</li>
                </ul>
                <img src="image/values.jpg" alt="Image 4" class="about-img" title="We thrive for success">
            </section>
        </div>
    </div>
</div>
<footer class="text-center mt-5">
    <p>&copy; 2024 Yazaki IT Store. All rights reserved.</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
