<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $loc = $_POST["loc"];
    $user = $_POST["user"];
    $cat = $_POST["cat"];

    
    if ($cat == 'scrap') {
     
        $sql = "SELECT * FROM produit WHERE assets = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $insert_sql = "INSERT INTO scrap (assets, description, SN, `Scrap-Date`, attachement)
                           VALUES ('" . $row['assets'] . "', '" . $row['description'] . "', '" . $row['SN'] . "', NOW(), '')";
            if ($conn->query($insert_sql) === TRUE) {
                // Delete the product from the product table
                $delete_sql = "DELETE FROM produit WHERE assets = '$id'";
                if ($conn->query($delete_sql) === TRUE) {
                    header("Location: products.php");
                    exit();
                } else {
                    $errorMessage = "Error deleting product: " . $conn->error;
                }
            } else {
                $errorMessage = "Error inserting product into scrap list: " . $conn->error;
            }
        } else {
            $errorMessage = "Product not found";
        }
    } else {
   
        $sql = "UPDATE produit SET location='$loc', user='$user', category='$cat' WHERE assets='$id'";
        if ($conn->query($sql) === TRUE) {
            header("Location: products.php");
            exit();
        } else {
            $errorMessage = "Error updating product: " . $conn->error;
        }
    }
} else {

   // if (isset($_GET["id"])) {
     //   $id = $_GET["id"];
       // $sql = "SELECT * FROM produit WHERE assets='$id'";
       // $result = $conn->query($sql); 

    $id = $_GET["id"];
    $sql = "SELECT * FROM produit WHERE assets='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $produit = $result->fetch_assoc();
    } else {
        echo "No products found with ID $id";
        exit();
    }
   // else {
     //   echo "Invalid request";
       // exit();
   // }

}
?>