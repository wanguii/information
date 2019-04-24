




<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>FORM</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        
   <?php
   
   $firstname= "";
    $lastname= "";
    $email= "";
    $phone= "";
    $address= "";
  
   $connect = mysqli_connect("localhost", "root", "", "semester2");
   //include "MySql.php";  
//include "core.php";


//$db=new MySql();
//error_reporting(E_ERROR | E_PARSE);

//if (loggedin()) {
   // header('Location:index.php');
//}
//else{
    //$message='';
  //  $user="";
//}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    if(isset($_POST['firstname'])) $firstname=$_POST['firstname'];
    if(isset($_POST['lastname'])) $lastname=$_POST['lastname'];
    if(isset($_POST['email'])) $email=$_POST['email'];
    if(isset($_POST['phone'])) $phone=$_POST['phone'];
    if(isset($_POST['address'])) $address=$_POST['address'];
    
   
    
    
}


 $query = "INSERT INTO 'information' ('id', 'firstname', 'lastname', 'email', 'phone', 'address')"
            ."VALUES (NULL, $firstname, $lastname, $email, $phone, $address)";
    
    mysqli_query($connect, $query);
?>

     <div class='container'>
        
         <div class="jumbotron text-center">
             
            <h1>School Forms</h1>
             </div>
            
            
            
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="text">First Name:</label>
                    <input type="text" class="form-control" id="firstname"
                           placeholder="Enter First Name" name="firstname">
                
                     <label for="text">Last Name:</label>
                    <input type="text" class="form-control" id="lastname"
                           placeholder="Enter last Name" name="lastname">
                
                     <label for="text">Email:</label>
                    <input type="email" class="form-control" id="email"
                           placeholder="Enter Email" name="email">
                    
                    <label for="text">Phone:</label>
                    <input type="number" class="form-control" id="Phone"
                           placeholder="Enter Phone number" name="phone">
                    
                           <label for="text">Address:</label>
                    <input type="text" class="form-control" id="Address"
                           placeholder="Enter Address" name="address">
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                
                
                </div>
            
            </form>
                 
                       </div>      
    </body>
</html>
