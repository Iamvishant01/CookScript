<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookScript - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/7a43ab629f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1><i class="fa-solid fa-utensils" id="main-icon"></i> CookScript - Recipe Collection</h1>
        <a href="add_recipe.php" class="btn btn-danger"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;&nbsp;Add Recipe</a>
        <button type="button" class="btn btn-success" onclick="handledeveloper()"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;Developers</button>
        <a href="https://github.com/Iamvishant01/CookScript" target="about_blank"><button type="button" class="btn btn-warning"><i class="fa-brands fa-github"></i>&nbsp;&nbsp;Source Code</button></a>
        <a href="./about.html"><button type="button" class="btn btn-primary"><i class="fa-solid fa-building"></i>&nbsp;&nbsp;About</button>
        </a>
        <hr>
        <div id="recipes">
            <?php include 'recipes.html'; ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    function handledeveloper(){
        alert("Vishant , Vinayak");
    }
</script>
</html>