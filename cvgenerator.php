<?php

require_once("../root/php/component.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Your Own CV!</title>



    <script src="https://kit.fontawesome.com/074a2f8dde.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!--  Custom Stylesheet -->

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="far fa-file-pdf"></i> Generate your own CV!</h1>
            <div>
                <h4>Personal Information</h4>
            </div>
            <hr>

            <div class="d-flex justify-content-center">

                <form action="pdfviewer.php" method="post" class="w-50">
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-signature'></i>", "First Name", "f_name", ""); ?>
                        <?php inputElement("<i class='fas fa-signature'></i>", "Last Name", "l_name", ""); ?>
                        <?php inputElement("<i class='fas fa-address-card'></i>", "Address", "address", ""); ?>
                        <?php inputElement("<i class='fas fa-phone-square-alt'></i>", "Phone Number", "p_number", ""); ?>
                        <?php inputElement("<i class='fas fa-envelope'></i>", "Email Address", "email", ""); ?>

                        <div>
                            <h4>Work Experience</h4>
                        </div>
                        <hr>

                        <?php inputElement("<i class='fas fa-industry'></i>", "Job Sector", "j_sector", ""); ?>
                        <?php inputElement("<i class='fas fa-user-md'></i>", "Employer", "employer", ""); ?>
                        <?php inputElement("<i class='fas fa-briefcase'></i>", "Job Title", "j_title", ""); ?>
                        <?php inputElement("<i class='fas fa-calendar'></i>", "Duration", "duration", ""); ?>

                        <div>
                            <h4>Education</h4>
                        </div>
                        <hr>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-warning" for="inputGroupSelect01"><i class='fas fa-school'></i></label>
                            </div>
                            <select class="custom-select" name="dropdown" id="inputGroupSelect01">
                                <option selected>Minimum Education Level</option>
                                <option value="O-Levels">O-Levels</option>
                                <option value="A-Levels">A-Levels</option>
                                <option value="Bachelors">Bachelors</option>
                                <option value="Masters">Masters</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </div>

                    </div>

                    <?php inputElement("<i class='fas fa-university'></i>", "Minimum GCSE Passes", "min_passes", ""); ?>

                    <div>
                        <h4>Experiences and Skill</h4>
                    </div>
                    <hr>

                    <?php inputElement("<i class='fas fa-bell'></i>", "Experiences", "experiences", ""); ?>
                    <?php inputElement("<i class='fas fa-futbol'></i>", "Skills", "skills", ""); ?>


            </div>

        
            <input type="submit" value="Generate CV" name="submit" />

            </form>



        </div>






        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>