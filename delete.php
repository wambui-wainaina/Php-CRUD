<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 9:51 AM
 */

    //Connect to the database
    $con = mysqli_connect("localhost", "root","", "may_syst");

    //Check if the connection was successful

    if (!$con){
        echo "Connection Failed";
    }else{
        //Proceed by deleting
        //Start by checking if delee has been clicked

        if (isset($_GET['id_yangu'])){
            $receive_id = $_GET['id_yangu'];

            //Create the delete query
            $deleteQuery = "DELETE FROM majina WHERE id=$receive_id";

            //Complete by finally deleting
            $delete = mysqli_query($con,$deleteQuery);

            //Check if deleting was successful

            if(!$delete){
                echo "Deleting Failed";
            }else{
                echo "Record deleted successfully";
                header('location:viewUsers.php');
            }
        }
    }
?>