<?php
include 'db.php';

$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

$limit = 10; // Nombre de résultats par page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM produit WHERE 
        `assets` LIKE '%$search%' OR 
        `description` LIKE '%$search%' OR 
        `inventory-meth` LIKE '%$search%' OR 
        `SN` LIKE '%$search%' OR 
        `location` LIKE '%$search%' OR 
        `user` LIKE '%$search%' OR 
        `purchase-date` LIKE '%$search%' OR 
        `warranty` LIKE '%$search%' OR 
        `category` LIKE '%$search%'
        LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

$totalResultsSql = "SELECT COUNT(*) AS total FROM produit WHERE 
        `assets` LIKE '%$search%' OR 
        `description` LIKE '%$search%' OR 
        `inventory-meth` LIKE '%$search%' OR 
        `SN` LIKE '%$search%' OR 
        `location` LIKE '%$search%' OR 
        `user` LIKE '%$search%' OR 
        `purchase-date` LIKE '%$search%' OR 
        `warranty` LIKE '%$search%' OR 
        `category` LIKE '%$search%'";
$totalResultsResult = $conn->query($totalResultsSql);
$totalResultsRow = $totalResultsResult->fetch_assoc();
$totalResults = $totalResultsRow['total'];
$totalPages = ceil($totalResults / $limit);

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Magazain Yazaki IT</title>
    <style>
        .alert-icon {
            cursor: pointer;
            width: 50px;
            height: 50px;
        }
        
        .form-control-sm {
            max-width: 250px; 
            margin: -10px 0 -10px 0;
        }
        .col-form-label {
            white-space: nowrap; /* Empêche le texte du label de se décomposer sur plusieurs lignes */
            margin: -10px 0 -10px 0;
        }

        .pagination {
            display: flex;
            justify-content: center;
            padding: 1em;
        }
        .pagination a {
            margin: 0 5px;
            padding: 8px 6px;
            border: 1px solid #ddd;
            text-decoration: none;
            color: #007bff;
        }
        .pagination a.active {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }
        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }   

    </style>
    <script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this item?");
    }

    function showAlert(productName) {
        document.getElementById('alertMessage').innerText = "Le produit " + productName + " a dépassé 4 ans de cycle de vie.";
        var alertModal = new bootstrap.Modal(document.getElementById('alertModal'));
        alertModal.show();
    }
    </script>
</head>
<body>
<div class="container">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <img src="image/logo.png" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php"><i class="fas fa-home"></i> Home</a>
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
                    <form method="GET" action="" class="d-flex mt-3">
                        <input type="search" name="search" class="form-control me-2" placeholder="Search..." value="<?php echo $search; ?>" required>
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <span class='result-count'><?php echo $totalResults; ?> product(s) found</span>
    <h1>Products List</h1>
    
       <!-- Fenêtre modale pour l'ajout de produit  25/07/2024-->
    <!--<a href="create.php" class="button button-add">Add a product</a>  -->
    <button type="button" class="button button-add" data-bs-toggle="modal" data-bs-target="#addProductModal">
        Add Product
    </button>
   
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="create.php" method="post" onsubmit="return validateForm() && confirmSubmit()">
                    <img src="image/logo.png" alt="Logo" class="logo" style="max-width: 200px">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-4 col-form-label">Asset Number:</label>
                        <div class="col-sm-8">
                            <input type="text" id="id" name="id" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-4 col-form-label">Description:</label>
                        <div class="col-sm-8">
                            <input type="text" id="description" name="description" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inv" class="col-sm-4 col-form-label">Inventory Method:</label>
                        <div class="col-sm-8">
                            <input type="text" id="inv" name="inv" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sn" class="col-sm-4 col-form-label">Serial Number:</label>
                        <div class="col-sm-8">
                            <input type="text" id="sn" name="sn" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="loc" class="col-sm-4 col-form-label">Location:</label>
                        <div class="col-sm-8">
                            <input type="text" id="loc" name="loc" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="user" class="col-sm-4 col-form-label">User:</label>
                        <div class="col-sm-8">
                            <input type="text" id="user" name="user" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pur" class="col-sm-4 col-form-label">Purchase Date:</label>
                        <div class="col-sm-8">
                            <input type="date" id="pur" name="pur" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="war" class="col-sm-4 col-form-label">Warranty:</label>
                        <div class="col-sm-8">
                            <input type="text" id="war" name="war" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="cat" class="col-sm-4 col-form-label">Category:</label>
                        <div class="col-sm-8">
                            <input type="text" id="cat" name="cat" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" style="background-color:green;" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


      <!-- Fenêtre modale pour la supression 25/07/2024 -->
    <button type="button" class="button button-delete" data-bs-toggle="modal" data-bs-target="#uploadModal">
        Delete product
    </button>
   
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Delete Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="image/logo.png" alt="Logo" class="logo" style="max-width: 200px>
                    <form action="delete.php" method="get">
                        <div class="mb-3 row" >
                            <label for="asset_number" class="col-sm-4 col-form-label">Asset Number:</label>
                            <div class="col-sm-7">
                                <input type="text" id="id" name="id" class="form-control" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>


    <table>
        <tr>
            <th>Asset Number</th>
            <th>Description</th>
            <th>Inventory Method</th>
            <th>Serial Number</th>
            <th>Location</th>
            <th>User</th>
            <th>Purchase Date</th>
            <th>Warranty</th>
            <th>Category</th>
            <th>Alert</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $purchaseDate = new DateTime($row["purchase-date"]);
                $currentDate = new DateTime();
                $interval = $purchaseDate->diff($currentDate);
                $years = $interval->y;

                $alertIcon = "";
                if ($years >= 4) {
                    $alertIcon = "<img src='image/alert.png' class='alert-icon' onclick=\"showAlert('" . $row["description"] . "')\" />";
                }

                echo "<tr>";
                echo "<td>" . $row["assets"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["inventory-meth"] . "</td>";
                echo "<td>" . $row["SN"] . "</td>";
                echo "<td>" . $row["location"] . "</td>";
                echo "<td>" . $row["user"] . "</td>";
                echo "<td>" . $row["purchase-date"] . "</td>";
                echo "<td>" . $row["warranty"] . "</td>";
                echo "<td>" . $row["category"] . "</td>";
                echo "<td>$alertIcon</td>";
                echo "<td><button class='btn btn-primary' onclick=\"openEditModal('" . $row["assets"] . "', '" . addslashes($row["location"]) . "', '" . addslashes($row["user"]) . "', '" . addslashes($row["category"]) . "')\">Edit</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11'>No products found</td></tr>";
        }
        ?>
    </table>

       <!-- Fenêtre modale pour la modification de produit  25/07/2024-->
    <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editProductForm" method="post" action="update.php" onsubmit="return confirmSubmit()">
                    <img src="image/logo.png" alt="Logo" class="logo" style="max-width: 200px">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="mb-3 row">
                        <label for="edit-loc" class="col-sm-3 col-form-label">Location:</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit-loc" name="loc" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="edit-user" class="col-sm-3 col-form-label">User:</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit-user" name="user" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="edit-cat" class="col-sm-3 col-form-label">Status:</label>
                        <div class="col-sm-9">
                            <input type="text" id="edit-cat" name="cat" class="form-control form-control-sm" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>&search=<?php echo $search; ?>">&laquo; Previous</a>
        <?php endif; ?>
        
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>&search=<?php echo $search; ?>" class="<?php echo $i == $page ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
        
        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>&search=<?php echo $search; ?>">Next &raquo;</a>
        <?php endif; ?>
    </div>
</div>

<!-- Modal for Alert -->
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alertModalLabel">Alerte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="alertMessage">
                <!-- Message will be inserted here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>

<footer class="text-center mt-5">
    <p>&copy; 2024 Yazaki IT Store. All rights reserved.</p>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <!-- add product 25/07/2024  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function validateForm() {
            var id = document.getElementById("id").value;
            if (id.length != 10 || isNaN(id)) {
                alert("Asset Number doit être un nombre de 10 chiffres.");
                return false;
            }
            return true;
        }

        function confirmSubmit() {
            return confirm("Are you sure you want to add this product?");
        }
    </script>

    <!-- edit product 25/07/2024  -->
    <script>
        function openEditModal(id, loc, user, cat) {
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-loc').value = loc;
            document.getElementById('edit-user').value = user;
            document.getElementById('edit-cat').value = cat;
            var editProductModal = new bootstrap.Modal(document.getElementById('editProductModal'));
            editProductModal.show();
        }

        function confirmSubmit() {
            return confirm("Are you sure you want to edit this product?");
        }
    </script>

    <!--  ...  25/07/2024  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        var myBtn = document.getElementById("myBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            myBtn.style.display = "block";
        } else {
            myBtn.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</body>
</html>
