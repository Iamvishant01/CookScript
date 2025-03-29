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
<style>
        .container-box {
            display: flex;
            width: 97%;
            max-width: 900px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: auto; /* Centers the container horizontally */
            justify-content: center; /* Centers the content inside */
            align-items: center; /* Aligns items vertically */
            margin-top: 8%; /* Adds space from the top */
            margin-bottom: 12%;
        }
        .left-container {
            flex: 1;
            height: 300px; /* Set a fixed height */
            background: url('https://images.unsplash.com/photo-1742845918430-c6093f93f740?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMHx8fGVufDB8fHx8fA%3D%3D') 
            center/cover no-repeat;
        }
        .right-container {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .bottom-ui {
            margin-top: 20px;
            text-align: center;
        }
        @media (max-width: 768px) {
            .container-box {
                flex-direction: column;
                padding: 2%;
                margin-bottom: 90%;
                margin-top: 30%;
                width: 100%; /* Ensures full width */
            }
            .left-container {
                background: url('https://images.unsplash.com/photo-1742845918430-c6093f93f740?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMHx8fGVufDB8fHx8fA%3D%3D') 
                center/cover no-repeat !important;
                display: block !important;
                min-height: 250px; /* Ensures visibility */
                width: 100%;
                background-size: cover;
                background-position: center;
            }
        }
    </style>
    <div class="container-main">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CookScript</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
         <!-- Navbar End -->
    </div>

    <div class="container-box">
        <div class="left-container">
            
        </div>
        <div class="right-container">
            <h2>Model Text Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor arcu nec ex consectetur.</p>
            <div class="bottom-ui">
                <a href="#CookScript"><button class="btn btn-primary">Click Me</button></a>
            </div>
        </div>
    </div>

    <div class="container" id="CookScript">
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