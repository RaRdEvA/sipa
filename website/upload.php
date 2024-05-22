<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image']['tmp_name'];
    $fileType = mime_content_type($file);
    $fileName = $_FILES['image']['name'];

    // Initialize cURL session
    $ch = curl_init();

    // Set the URL and options
    curl_setopt($ch, CURLOPT_URL, 'http://34.228.197.184:5000/predict');
    curl_setopt($ch, CURLOPT_POST, 1);

    // Prepare file for upload
    $cfile = new CURLFile($file, $fileType, $fileName);
    $postData = array('file' => $cfile);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    // Set return transfer to true to get the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the request
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        // Decode the JSON response
        $result = json_decode($response, true);
        $label = $result['label'];

        // Redirect back to index.php with label as URL parameter
        header("Location: index.php?piece=" . urlencode($label));
    }

    // Close cURL session
    curl_close($ch);
    exit();
} else {
    // Redirect back to the form if no image was uploaded
    header("Location: index.html");
    exit();
}
?>
