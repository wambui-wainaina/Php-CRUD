<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 9:53 AM
 */
if (isset($_GET['btn_save'])){
    $name = $_GET['x'];
    $email = $_GET['y'];
    $password = $_GET['z'];

    //To save data, connect to the DB...
    $con = mysqli_connect("localhost", "root","", "may_syst");

    //Check if connection was successful
    if (!$con){
        echo "Connection Failed";
    }else{
        //Proceed to save data to the DB
        //Start by creating the insert Query
        $insertQuery= "INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) 
                        VALUES (null,'$name','$email','$password')";
        // Check if insert query is correct

        if (!$insertQuery){
            echo "Error on the insert query";
        }else{
            //Proceed to finally write the data on your DB
            $saving = mysqli_query($con, $insertQuery);
            //Check if data was saved successfully
            if (!$saving){
                echo"Saving Failed!!!";
            }else{
                echo "Saved Successfully";
                //header('location:saveUser.php');
                echo "<a href='saveUser.php'>Add More people</a>";

            }
        }

    }
}
?>