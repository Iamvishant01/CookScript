<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"]);
    $description = nl2br(htmlspecialchars($_POST["description"]));

    // Generate a slug for the file name (removes spaces & special chars)
    $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($title));
    $filename = "recipes/$slug.html";

    // Ensure the recipes directory exists
    if (!is_dir("recipes")) {
        mkdir("recipes", 0777, true); // Creates the folder with full permissions
    }

    // // Handle Image Upload
    // $targetDirectory = __DIR__ . '/images/';  // Absolute path to the images folder
    // $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //     echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    // } else {
    //     echo "Error uploading image.";
    // }
    

    // Create the individual recipe page
    $recipePage = "<!DOCTYPE html>\n<html lang='en'>\n<head>\n";
    $recipePage .= "<meta charset='UTF-8'>\n<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
    $recipePage .= "<title>$title | CookScript</title>\n";
    $recipePage .= "<link rel='stylesheet' href='../styles.css'>\n</head>\n<body>\n";
    $recipePage .= "<div class='recipe-container'>\n";
    // $recipePage .= "<img src='../$imagePath' alt='Recipe Image' class='recipe-image'>\n";
    $recipePage .= "<h1>$title</h1>\n<p>$description</p>\n";
    $recipePage .= "<a href='../index.php' class='back-link'><i class='fa-solid fa-backward'></i>&nbsp;&nbsp; Back to Home</a>\n</div>\n</body>\n</html>";

    // Save the recipe file
    file_put_contents($filename, $recipePage);

    // Create a link in recipes.html
    $newRecipe = "<div class='recipe-card'>\n";
    $newRecipe .= "<h2><a href='$filename'>$title</a></h2>\n";
    $newRecipe .= "<p>" . substr(strip_tags($description), 0, 100) . "...</p>\n"; // Short preview
    // $newRecipe .= "<img src='$imagePath' alt='Recipe Image' class='recipe-thumbnail'>\n";
    $newRecipe .= "<hr>\n</div>\n";

    // Append the new recipe to recipes.html
    file_put_contents("recipes.html", $newRecipe, FILE_APPEND);

    // Redirect back to homepage
    header("Location: index.php");
    exit();
}
?>
