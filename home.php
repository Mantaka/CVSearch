<?php

require_once("../root/php/component.php");


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CV Generator and Search Engine</title>


    <script src="https://kit.fontawesome.com/074a2f8dde.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!--  Custom Stylesheet -->

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="far fa-file-pdf"></i> CV Generator and Search Engine</h1>
            <div class="container">
                <div class="center">
                    <a href="cvgenerator.php"><?php buttonElement("btn-generate", "btn btn-success", "Generate CV", "generate", "data-toggle='tooltip' data-placement='bottom' title='Generate CV'"); ?></a>
                    <a href="insert.php"><?php buttonElement("btn-search", "btn btn-success", "Insert Data", "insert", "data-toggle='tooltip' data-placement='bottom' title='Insert Data'"); ?></a>
                    <a href="cvsearch.php"><?php buttonElement("btn-search", "btn btn-success", "Search CV", "search", "data-toggle='tooltip' data-placement='bottom' title='Search CV'"); ?></a>
                    
                </div>
            </div>

        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>