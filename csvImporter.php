<?php

$cards = [];

// Check if the form was submitted and the file was uploaded
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["csv_file"])) {
  if ($_FILES["csv_file"]["error"] === UPLOAD_ERR_OK) {

    //validate files MIME type
    $fileType = mime_content_type($_FILES["csv_file"]["tmp_name"]);
    if ($fileType !== "text/plain" && $fileType !== "text/csv") {
      echo "Invalid file type. Please upload a CSV file";
      exit();
    }

    $file = fopen($_FILES["csv_file"]["tmp_name"], "r");

    // Skip header row if there is one
    $header = fgetcsv($file);

    // Validate header columns
    if ($header[1] !== "card_content") {
      echo 'Invalid CSV header. Expected "card_title" and "card_content".';
      fclose($file);
      exit();
    }

    // Read each row from the CSV file
    while (($row = fgetcsv($file)) !== false) {
      if (empty($row[1])) {
        echo "Error: 'card_content is required for each card";
        fclose($file);
        exit();
      }
      // Map each row to the column names
      $cards[] = [
        "card_title" => !empty($row[0]) ? $row[0] : null, //optional title  
        "card_content" => $row[1], //required content
        "card_art" => isset($row[2]) ? $row[2] : null // optional image
      ];
    }

    fclose($file);

    // header('Location: ' . $_SERVER['PHP_SELF'] . '?success=1');
    // If file was successfully uploaded, display a success message
    echo "<p>File uploaded successfully! Happy playtesting 😎</p>";
  } else {
    echo "Error uploading file.";
  }
} else {
  // Show the form only if the file has not been uploaded
  if (!isset($_GET["success"])) {
    include "uploadForm.php";
  }
}
