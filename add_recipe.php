<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe | CookScript</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/7a43ab629f.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Add a New Recipe</h1>
        <form action="submit_recipe.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="title">Recipe Title:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit Recipe</button>
        </form>
        <br>
        <a href="index.php" class="back-link"><i class="fa-solid fa-backward"></i>&nbsp;&nbsp; Back to Home</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
