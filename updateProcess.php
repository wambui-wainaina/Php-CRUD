<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 10:33 AM
 */

if (isset($_POST['btn_update '])){

    $received_id = $_POST['x'];
    $received_name = $_POST['y'];
    $received_email = $_POST['z'];
    $received_pass = $_POST['pwd'];
    //Connect to the database
    $con = mysqli_connect("localhost", "root","", "may_syst");
    //Check if connection is successful

    if (!$con){
        echo"Connection Failed";
    }else{
        //Proceed to update the database
        //Start by creating the update Query
        $updateQuery = "UPDATE majina SET jina='$received_name', arafa='$received_email',
          siri=$received_pass,WHERE id='$received_id'";
        //Check if query is correct
        if (!$updateQuery){
            echo "Error on the update query";
        }else{
            //Proceed to finally update
            $update =mysqli_query($con,$updateQuery);

            //Check if update was successful
            if(!$update){
                echo "updating failed";
            }else{
                echo "Record update successfully";
                header("location:viewUsers.php");
            }
        }
    }

}
?>