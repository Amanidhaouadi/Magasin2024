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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Settings </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Database configuration
        $servername = "localhost";
        $username_db = "root"; // Database username
        $password_db = ""; // Database password
        $dbname = "mg"; // Database name

        // Connect to database
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hash password before storing (if needed)
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    


        // Prepare and execute update query
        $sql = "UPDATE user SET username=?, email=?, password=? ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss",$username, $email, $password);

        if ($stmt->execute()) {
            echo "<p class='success'>Update successful</p>";
        } else {
            echo "<p class='error'>Error: " . $stmt->error . "</p>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
    
    <style>

   .form-row {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    /* Style for the labels */
    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    /* Style for the input fields */
    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 300px;
        padding: 10px;
        margin-left: 50px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    th{
        background:white;
    }

    /* Style for the submit button */
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    
    table {
        border: none;
        border-collapse: collapse;
        margin-top: -40px;
    }

    th, td {
        border: none;
        padding: 5px; /* Adjust this value to reduce space within cells */
        border: none;
    }
    
    </style>
    
    <h1 style="margin: 30px; margin-bottom: 40px">User Settings</h1>

    <form action="settings.php" method="post" 
          style="width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ccc;
               border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        
        <table id="tab"  >
        <div class="form-row"> 
            <tr>
                <th>  <label for="username">Username:</label></th>
                <th> <input type="text" id="username" name="username" placeholder="Enter your username" required></th>  
            </tr>
        </div>
        <div class="form-row">
            <tr>
               <th> <label for="email">Email:</label> </th>
               <th> <input type="email" id="email" name="email" placeholder="Enter your email" required> </th>  
            </tr>
        </div>
        
        <div class="form-row">
            <tr>
                <th><label for="password">Password:</label></th>
                <th><input type="password" id="password" name="password" placeholder="Enter your password" required></th> 
            </tr>
        </div> 
        </table>

        <input type="submit" value="Update"> 
    </form>
</div>

<footer class="text-center mt-5">
    <p>&copy; 2024 Yazaki IT Store. All rights reserved.</p>
</footer>
<!-- Bootstrap Bundle with Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>