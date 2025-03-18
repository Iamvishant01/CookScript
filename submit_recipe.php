<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST["title"]);
    $description = nl2br(htmlspecialchars($_POST["description"]));

    $slug = preg_replace('/[^a-z0-9]+/', '-', strtolower($title));
    $filename = "recipes/$slug.html";

    if (!is_dir("recipes")) {
        mkdir("recipes", 0777, true); 
    }
    
    $recipePage = "<!DOCTYPE html>\n<html lang='en'>\n<head>\n";
    $recipePage .= "<meta charset='UTF-8'>\n<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
    $recipePage .= "<title>$title | CookScript</title>\n";
    $recipePage .= "<link rel='stylesheet' href='../styles.css'>\n</head>\n<body>\n";
    $recipePage .= "<div class='recipe-container'>\n";
    $recipePage .= "<h1>$title</h1>\n<p>$description</p>\n";
    $recipePage .= "<a href='../index.php' class='back-link'><i class='fa-solid fa-backward'></i>&nbsp;&nbsp; Back to Home</a>\n</div>\n</body>\n</html>";

    file_put_contents($filename, $recipePage);

    $newRecipe = "<div class='recipe-card'>\n";
    $newRecipe .= "<h2><a href='$filename'>$title</a></h2>\n";
    $newRecipe .= "<p>" . substr(strip_tags($description), 0, 100) . "...</p>\n"; // Short preview
    $newRecipe .= "<hr>\n</div>\n";

    file_put_contents("recipes.html", $newRecipe, FILE_APPEND);

    header("Location: index.php");
    exit();
}
?>
