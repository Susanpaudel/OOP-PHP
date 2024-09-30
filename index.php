<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP   IN PHP</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Full page gradient background */
        body {
            background: linear-gradient(135deg, #00b4db, #0083b0);
            font-family: 'Arial', sans-serif;
            color: white;
        }

        /* Center the content */
        .centered-list {
            display: flex;
            justify-content: center;
            align-items: center;
           
        }

        /* Style the heading */
        h1 {
            text-align: center;
            font-weight: bold;
            font-size: 3rem;
            margin-bottom: 2rem;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Style the list container */
        .list-group {
            width: 100%;
            max-width: 500px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        /* Style each list item */
        .list-group-item {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: none;
            padding: 15px;
            transition: background-color 0.3s ease;
        }

        /* Add hover effect to list items */
        .list-group-item:hover {
            background-color: rgba(255, 255, 255, 0.3);
            color: #fff;
            cursor: pointer;
        }

        /* Style the links */
        .list-group-item a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            display: block; /* Ensures full width clickable */
            padding: 10px 0;
        }

       
        /* Style <a> tags outside the list group */
        .external-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            background-color: #00b4db;
            border-radius: 25px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

      

    </style>
</head>
<body>

<div class="container">
    <!-- Title section -->
    <div class="text-center mb-3">
    <h1>Object Oriented Programming (OOP) IN PHP</h1>
    </div>
    
    <!-- Centered list section -->
    <div class="centered-list">
        <ul class="list-group">
            <li class="list-group-item">
                <a href="oop/introduction.php">Introduction to OOP</a>
            </li>
            <li class="list-group-item">
                <a href="oop/class_and_object.php">Classes and Objects</a>
            </li>
            <li class="list-group-item">
                <a href="oop/constructor.php">Constructor</a>
            </li>
            <li class="list-group-item">
                <a href="oop/destructor.php">Destructor</a>
            </li>
            <li class="list-group-item">
                <a href="oop/inheritance.php">Inheritance</a>
            </li>
            <li class="list-group-item">
                <a href="oop/overriding.php">Overriding</a>
            </li>
            <li class="list-group-item">
                <a href="oop/access_modifier.php">Access Modifier</a>
            </li>
            <li class="list-group-item">
                <a href="oop/abstract.php">Abstract</a>
            </li>
            <li class="list-group-item">
                <a href="oop/interface.php">Interface</a>
            </li>
            <li class="list-group-item">
                <a href="oop/static_method.php">Static Method</a>
            </li>
            <li class="list-group-item">
                <a href="oop/traits.php">Traits</a>
            </li>
            <li class="list-group-item">
                <a href="oop/type_hiniting.php">Type Hinting</a>
            </li>
            <li class="list-group-item">
                <a href="oop/namespace.php">Namespace</a>
            </li>
        </ul>
    </div>

    <!-- External link outside the list group -->
    <div class="text-center mb-3">
        <a href="https://www.w3schools.com/php/php_oop_what_is.asp" target="_blank" class="external-link">External OOP Resource</a>
    </div>
</div>

<!-- Bootstrap 5 JS and Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
