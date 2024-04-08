<?php
// Check if the file was uploaded without errors
if(isset($_FILES['upload']['name'])) {
    $uploadDir = 'uploads/'; // Directory to store uploaded images
    $uploadFile = $uploadDir . basename($_FILES['upload']['name']);

    // Move the uploaded file to the desired directory
    if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadFile)) {
        $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . $uploadFile;
        $response = array(
            'uploaded' => true,
            'url' => $url
        );
        echo json_encode($response);
    } else {
        $response = array(
            'uploaded' => false,
            'error' => 'Failed to upload file'
        );
        echo json_encode($response);
    }
} else {
    $response = array(
        'uploaded' => false,
        'error' => 'No file sent'
    );
    echo json_encode($response);
}
?>
