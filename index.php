<?php
require_once("../CRUD/php/component.php");
require_once("../CRUD/php/operation.php")
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USERS</title>

    <script src="https://kit.fontawesome.com/39cc8f2b8a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>
<body>
<main>
   <div class="container text-center">
       <h1 class="py-4 bg-dark text-light rounded"""><i class="fas fa-address-card"></i> USERS</h1>

       <div class="d-flex justify-content-center">
   <form action="" method="post" class="w-50">
       <div class="py-2">
           <?php inputElement("<i class='fas fa-id-badge'></i>","ID", " my_id",setID()); ?>
       </div>
       <div class="py-2">
            <?php inputElement("<i class='fas fa-asterisk'></i>","Title", "title",""); ?>
        </div>
       <div class="py-2">
           <?php inputElement("<i class='fas fa-asterisk'></i>","First Name", "first_name",""); ?>
       </div>
       <div class="py-2">
           <?php inputElement("<i class='fas fa-asterisk'></i>","Surname", "surname",""); ?>
       </div>

       <div class="py-2">
           <?php inputElement("<i class='fas fa-asterisk'></i>","Mobile Number", "mobile_number",""); ?>
       </div>
       <div class="py-2">
           <?php inputElement("<i class='fas fa-asterisk'></i>","Email Address", "email_address",""); ?>
       </div>

       <div class="py-2">
           <?php inputElement("<i class='fas fa-asterisk'></i>","Address Line 1", "address_1",""); ?>
       </div>
       <div class="py-2">
           <?php inputElement("<i class=''></i>","Address Line 2", "address_2",""); ?>
       </div>
       <div class="py-2">
           <?php inputElement("<i class='fas fa-asterisk'></i>","Town", "town",""); ?>
       </div>
       <div class="py-2">
           <?php inputElement("<i class='fas fa-asterisk'></i>","County/city", "county_city",""); ?>
       </div>
       <div class="py-2">
           <?php inputElement("<i class=''></i>","Eircode", "eircode",""); ?>
       </div>
       <div class="d-flex justify-content-centre">
           <?php buttonElement("btn-create","btn btn-success","<i class= 'fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
           <?php buttonElement("btn-read","btn btn-primary","<i class= 'fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
           <?php buttonElement("btn-update","btn btn-light border","<i class= 'fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
           <?php buttonElement("btn-delete","btn btn-danger","<i class= 'fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
       </div>
   </form>
       </div>
   </form>
   </div>
    <!-- Bootstrap table -->
    <div class="d-flex table-data">
        <table class="table table-striped table-dark">
            <thread class="thread-dark">
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>First Name</th>
                  <th>Surname</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Address1</th>
                  <th>Address2</th>
                  <th>Town</th>
                  <th>City</th>
                  <th>Eircode</th>
                  <th>Edit</th>
              </tr>
            </thread>
            <tbody id="tbody">
            <?php
            if(isset($_POST['read'])){
                $result = getDATA();
                if($result){
                    while($row = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['my_id'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['title'];?></td>
                            <td data-id="<?php echo $row['my_id']?>" ><?php echo $row['first_name'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['surname'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['mobile_number'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['email'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['address_1'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['address_2'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['town'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['city'];?></td>
                            <td data-id="<?php echo $row['my_id']?>"><?php echo $row['eircode'];?></td>
                            <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['my_id']?>"></i></td>
                        </tr>


                        <?php
                    }

                }
            }
            ?>
            </tbody>
        </table>
   </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="../CRUD/php/Main.js"></script>
</body>
</html>
