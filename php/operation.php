<?php

require_once("Database.php");
require_once("component.php");

$con = Createdb();

if(isset($_POST['create'])) {
    createData();
}
if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}


function createData(){
    $title = textboxValue("title");
    $first_name = textboxValue("first_name");
    $surname = textboxValue("surname");
    $mobile_number = textboxValue("mobile_number");
    $email_address = textboxValue("email_address");
    $address_1 = textboxValue("address_1");
    $address_2 = textboxValue("address_2");
    $town = textboxValue("town");
    $county_city = textboxValue("county_city");
    $eircode = textboxValue("eircode");

    if($title && $first_name && $surname && $mobile_number && $email_address && $address_1 && $town && $county_city){
        $sql ="INSERT INTO users(title,first_name,surname,mobile_number,email_address,address_1,address_2,town,county_city,eircode)
        VALUES('$title','$first_name',  '$surname',  '$mobile_number',  '$email_address',  '$address_1',  '$address_2' , '$town',  '$county_city',  '$eircode')";

        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success","Record successfully inserted");
        }else{
            echo "error";
        }
    }else{
        TextNode("error","Provide Data in Text box");
    }



}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}



function TextNode($classname,$msg){
    $element="<h6 class='$classname'>$msg</h6>";
    echo $element;
}



//get data from sql
function getData()
{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($GLOBALS['con'], $sql);

    if (mysqli_num_rows($result) > 0) {

            return $result;
        }

}

function UpdateData(){
    $my_id = textboxValue("my_id");
    $title = textboxValue("title");
    $first_name = textboxValue("first_name");
    $surname = textboxValue("surname");
    $mobile = textboxValue("mobile_number");
    $email_address = textboxValue("email_address");
    $Address1 = textboxValue("address_1");
    $Address2 = textboxValue("address_2");
    $town= textboxValue("town");
    $county_city = textboxValue("county_city");
    $eircode = textboxValue("eircode");

    if($title && $first_name && $surname && $mobile && $email_addres && $Address1 && $Address2 && $town && $county_city && $eircode){
        $sql = "
               UPDATE users SET title='$title',first_name='$first_name',surname='$surname',mobile_number='$mobile',email_address='$email_address',
                                address_1='$Address1',address_2='$Address2',town='$town',county_city='$county_city',eircode='$eircode'WHERE my_id = '$my_id';
        ";
        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success","Data successfully updated");
        }else{
            TextNode("error","Data not successfully updated");
        }
    }else{
        TextNode("error","edit icon");
    }
}

function deleteRecord(){
    $my_id = (int)textboxValue("bid");

    $sql = "DELETE FROM users WHERE my_id=$my_id";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","Record Deleted Successfully");
    }else{
        TextNode("error","Enable to Delete Record");
    }

}


function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}


function deleteAll(){
    $sql = "DROP TABLE users";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","Record deleted Successfully");
        Createdb();
    }else{
        TextNode("error","Record cannot deleted");
    }
}


// set id to textbox
function setID(){
    $getid = getData();
    $my_id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $my_id = $row['my_id'];
        }
    }
    return ($my_id + 1);
}




