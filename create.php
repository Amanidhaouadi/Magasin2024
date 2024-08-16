<?php
include 'db.php'; 

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $description = $_POST["description"];
    $inv = $_POST["inv"];
    $sn = $_POST["sn"];
    $loc = $_POST["loc"];
    $user = $_POST["user"];
    $pur = $_POST["pur"];
    $war = $_POST["war"];
    $cat = $_POST["cat"];
    $error = "";

    if (strlen($id) != 10 || !is_numeric($id)) {
        $error .= "Erreur : Asset Number doit être un nombre de 10 chiffres.<br>";
    } else {
        // Check for duplicate ID in database
        $sql_check_id = "SELECT COUNT(*) AS duplicate_count FROM produit WHERE assets = '$id'";
        $result_id = $conn->query($sql_check_id);

        if ($result_id->num_rows > 0) {
            $row_id = $result_id->fetch_assoc();
            if ($row_id["duplicate_count"] > 0) {
                $error .= "Erreur : Asset Number déjà existant. Veuillez en saisir un nouveau.<br>";
            }
        }
    }

    if (empty($error)) {
        // Check for duplicate serial number
        $sql_check_sn = "SELECT COUNT(*) AS duplicate_count FROM produit WHERE SN = '$sn'";
        $result_sn = $conn->query($sql_check_sn);

        if ($result_sn->num_rows > 0) {
            $row_sn = $result_sn->fetch_assoc();
            if ($row_sn["duplicate_count"] > 0) {
                $error .= "Erreur : Serial Number déjà existant. Veuillez en saisir un nouveau.<br>";
            }
        }
    }

    if (empty($error)) {
        $sql = "INSERT INTO produit (`assets`, `description`, `Inventory-method`, `SN`, `location`, `user`, `Purchase-Date`, `warranty`, `category`) 
                VALUES ('$id', '$description', '$inv', '$sn', '$loc', '$user', '$pur', '$war', '$cat')";

        if ($conn->query($sql) === TRUE) {
            $response["success"] = true;
            $response["message"] = "Produit ajouté avec succès.";
        } else {
            $response["success"] = false;
            $response["message"] = "Erreur : " . $sql . "<br>" . $conn->error;
        }
    } else {
        $response["success"] = false;
        $response["message"] = $error;
    }
} else {
    $response["success"] = false;
    $response["message"] = "Méthode de requête non autorisée.";
}

header('Content-Type: application/json');
echo json_encode($response);
?>
