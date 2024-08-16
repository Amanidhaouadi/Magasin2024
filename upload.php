<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $scrap_date = $_POST['Scrap-Date'];
    $target_dir = "uploads/";
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedTypes = array('pdf', 'doc', 'docx', 'xls', 'xlsx');

    // Check if file type is allowed
    if (!in_array($fileType, $allowedTypes)) {
        $errorMessage = "Sorry, only PDF, DOC, DOCX, XLS, and XLSX files are allowed.";
        $uploadOk = 0;
    }

    // Check file size (adjust as necessary)
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // 5 MB limit
        $errorMessage = "Sorry, your file is too large. Maximum file size is 5 MB.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errorMessage = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Update the `attachment` column in the database
            $sql = "UPDATE scrap SET attachement='$target_file' WHERE `Scrap-Date`='$scrap_date'";
            if ($conn->query($sql) === TRUE) {
                $errorMessage = "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                $errorMessage = "Error updating record: " . $conn->error;
            }
        } else {
            $errorMessage = "Sorry, there was an error uploading your file.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Modal -->
    <div class="modal" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">File Upload Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="error-message"></p>
                </div>
                <div class="modal-footer">
                    <a href="scrap.php" class="btn btn-primary">OK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to open the modal
        function openModal(message) {
            document.getElementById('error-message').textContent = message;
            $('#errorModal').modal('show');
        }

        // Check for error message from PHP
        <?php if (!empty($errorMessage)) : ?>
            openModal("<?php echo $errorMessage; ?>");
        <?php endif; ?>
    </script>
</body>
</html>
