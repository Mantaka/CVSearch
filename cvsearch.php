<?php

require_once("../root/php/component.php");


$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'searchdb');

if (isset($_POST['search1'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where firstName = '$f_name' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search2'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where lastName = '$l_name' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search3'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where address = '$address' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search4'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where phoneNumber = '$p_number' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search5'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where emailAddress = '$email' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search6'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where jobSector = '$j_sector' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search7'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where employer = '$employer' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search8'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where jobTitle = '$j_title' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search9'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where duration = '$duration' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search10'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where minEduLevel = '$min_edu_level' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search11'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where minGCSEPasses = '$min_passes' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search12'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where experiences = '$experiences' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

    <?php

    }
} else if (isset($_POST['search13'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];
    $p_number = $_POST['p_number'];
    $email = $_POST['email'];
    $j_sector = $_POST['j_sector'];
    $employer = $_POST['employer'];
    $j_title = $_POST['j_title'];
    $duration = $_POST['duration'];
    $min_edu_level = $_POST['dropdown'];
    $min_passes = $_POST['min_passes'];
    $experiences = $_POST['experiences'];
    $skills = $_POST['skills'];

    $query = "SELECT * FROM user_info where skills = '$skills' ";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {

    ?>

        <form action="" method="POST">
            <input type="text" name="firstName" value="<?php echo $row['firstName'] ?>" /><br>
            <input type="text" name="lastName" value="<?php echo $row['lastName'] ?>" /><br>
            <input type="text" name="address" value="<?php echo $row['address'] ?>" /><br>
            <input type="text" name="phoneNumber" value="<?php echo $row['phoneNumber'] ?>" /><br>
            <input type="text" name="emailAddress" value="<?php echo $row['emailAddress'] ?>" /><br>
            <input type="text" name="jobSector" value="<?php echo $row['jobSector'] ?>" /><br>
            <input type="text" name="employer" value="<?php echo $row['employer'] ?>" /><br>
            <input type="text" name="jobTitle" value="<?php echo $row['jobTitle'] ?>" /><br>
            <input type="text" name="duration" value="<?php echo $row['duration'] ?>" /><br>
            <input type="text" name="minEduLevel" value="<?php echo $row['minEduLevel'] ?>" /><br>
            <input type="text" name="minGCSEPasses" value="<?php echo $row['minGCSEPasses'] ?>" /><br>
            <input type="text" name="experiences" value="<?php echo $row['experiences'] ?>" /><br>
            <input type="text" name="skills" value="<?php echo $row['skills'] ?>" /><br>

        </form>

<?php

    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results!</title>



    <script src="https://kit.fontawesome.com/074a2f8dde.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!--  Custom Stylesheet -->

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="far fa-file-pdf"></i> CV Search Results</h1>
            <div>
                <h4>Search by Personal Information</h4>
            </div>
            <hr>

            <div class="d-flex justify-content-center">

                <form action="" method="POST" class="w-50">
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-signature'></i>", "First Name", "f_name", ""); ?><div style="position: absolute; right:200px; top:180px"><a href="showresults.php"><input type="submit" name="search1" value="Search"></a></div>
                        <?php inputElement("<i class='fas fa-signature'></i>", "Last Name", "l_name", ""); ?><div style="position: absolute; right:200px; top:225px"><a href="showresults.php"><input type="submit" name="search2" value="Search"></a></div>
                        <?php inputElement("<i class='fas fa-address-card'></i>", "Address", "address", ""); ?><div style="position: absolute; right:200px; top:270px"><a href="showresults.php"><input type="submit" name="search3" value="Search"></a></div>
                        <?php inputElement("<i class='fas fa-phone-square-alt'></i>", "Phone Number", "p_number", ""); ?><div style="position: absolute; right:200px; top:315px"><a href="showresults.php"><input type="submit" name="search4" value="Search"></a></div>
                        <?php inputElement("<i class='fas fa-envelope'></i>", "Email Address", "email", ""); ?><div style="position: absolute; right:200px; top:365px"><a href="showresults.php"><input type="submit" name="search5" value="Search"></a></div>

                        <div>
                            <h4>Search by Work Experience</h4>
                        </div>
                        <hr>

                        <?php inputElement("<i class='fas fa-industry'></i>", "Job Sector", "j_sector", ""); ?><div style="position: absolute; right:200px; top:470px"><a href="showresults.php"><input type="submit" name="search6" value="Search"></a></div>
                        <?php inputElement("<i class='fas fa-user-md'></i>", "Employer", "employer", ""); ?><div style="position: absolute; right:200px; top:515px"><a href="showresults.php"><input type="submit" name="search7" value="Search"></a></div>
                        <?php inputElement("<i class='fas fa-briefcase'></i>", "Job Title", "j_title", ""); ?><div style="position: absolute; right:200px; top:560px"><a href="showresults.php"><input type="submit" name="search8" value="Search"></a></div>
                        <?php inputElement("<i class='fas fa-calendar'></i>", "Duration", "duration", ""); ?><div style="position: absolute; right:200px; top:605px"><a href="showresults.php"><input type="submit" name="search9" value="Search"></a></div>

                        <div>
                            <h4>Search by Education</h4>
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
                            <a href="showresults.php"><input type="submit" name="search10" value="Search"></a>
                        </div>

                    </div>

                    <?php inputElement("<i class='fas fa-university'></i>", "Minimum GCSE Passes", "min_passes", ""); ?><div style="position: absolute; right:200px; top:775px"><a href="showresults.php"><input type="submit" cname="search11" value="Search"></a></div>

                    <div>
                        <h4>Search by Experiences and Skill</h4>
                    </div>
                    <hr>

                    <?php inputElement("<i class='fas fa-bell'></i>", "Experiences", "experiences", ""); ?><div style="position: absolute; right:200px; top:880px"><a href="showresults.php"><input type="submit" name="search12" value="Search"></a></div>
                    <?php inputElement("<i class='fas fa-futbol'></i>", "Skills", "skills", ""); ?><div style="position: absolute; right:200px; top:930px"><a href="showresults.php"><input type="submit" name="search13" value="Search"></a></div>


            </div>




            </form>



        </div>






        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>