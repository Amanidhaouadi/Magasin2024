<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // Check if the file exists
    if (file_exists($file)) {
        // Set headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    } else {
        // File not found
        echo "File not found.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>
