<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "USERS";
    //create connection
    $con = mysqli_connect($servername,$username,$password);

    //check connection
if(!$con){
    die("Connection Failed:" .mysqli_connect_error());
}


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if(mysqli_query($con,$sql)) {
    $con = mysqli_connect($servername,$username,$password,$dbname);

    $sql ="
            CREATE TABLE IF NOT EXISTS USERS(
                my_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(5) NOT NULL,
                first_name VARCHAR(15) NOT NULL,
                surname VARCHAR(15) NOT NULL,
                mobile_number INT(10) NOT NULL,
                email_address VARCHAR(20) NOT NULL, 
                address_1 VARCHAR(25) NOT NULL,
                address_2 VARCHAR(25),
                town VARCHAR(25) NOT NULL,
                county_city VARCHAR(25) NOT NULL,
                eircode INT(25)
            );
    ";
    if(mysqli_query($con, $sql)){
        return $con;
    }else{
        echo "Cannot Create table...!";
    }

}else{
    echo "Error while creating database ". mysqli_error($con);
}

}


