<?php 
include('security.php');
if(isset($_POST['Reg_btn']))
{
	//echo "Working";


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
  

	$query = "INSERT INTO register (Username,Password,Email) VALUES 
  ('$Username','$Password','$Email')";
     $query_run = mysqli_query($connection, $query);
     header('Location: login-register.html');
	}
	
	
if(isset($_POST['login_btn']))
{
  //echo "Working";


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
   


$q = "SELECT * FROM admin";
                $q_run = mysqli_query($connection, $q);
      if(mysqli_num_rows($q_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($q_run))
                            {
              if($row['Admin_Name'] === $Username && $row['Admin_Password'] === $Password)
              {
               
                $q2 = "INSERT INTO login (Username,Password) VALUES 
  ('$Username','$Password')";
     $q_run2 = mysqli_query($connection, $query2);
$_SESSION['Admin_Username'] = $Username;
$_SESSION['Admin_Password'] = $Password;

     header('Location: admin/Products.php');
   }

    }
      }
  
$query = "SELECT * FROM register";
                $query_run = mysqli_query($connection, $query);
      if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
              if($row['Username'] === $Username && $row['Password'] === $Password)
              {
               
                $query2 = "INSERT INTO login (Username,Password) VALUES 
  ('$Username','$Password')";
     $query_run2 = mysqli_query($connection, $query2);
     header('Location: index.php');
   }

    }
      }

        // header('Location: login-register.html');
     

  
  }
  


if(isset($_POST['message_btn']))
{
  //echo "Working";


    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
  

  $query = "INSERT INTO contact (Name,Email,Subject,Message) VALUES ('$Name','$Email','$Subject','$Message')";
     $query_run = mysqli_query($connection, $query);

     echo "Your message has been sent";
  }





//--------------------------------------------------------------------------------------------------------

if(isset($_POST['order_btn']))
{
  echo "Working";


    $Customer_Name = $_POST['Customer_Name'];
    // $Product_Name = $_POST['Product_Name'];
    $Product_Quantity = $_POST['Product_Quantity'];
    $Phone_No = $_POST['Phone_No'];
    $Address = $_POST['Address'];

    $Product_Name = $_SESSION['Product_Name'];
    $ProductID=$_SESSION['ProductID'] ;
    $Category=$_SESSION['Category'] ;
    $Product_Photo=$_SESSION['Product_Photo'];
  

  $query = "INSERT INTO orders (Customer_Name,ProductID,Product_Photo,Product_Name,Category,Quantity,Customer_Address,Customer_No) VALUES 
  ('$Customer_Name','$ProductID','$Product_Photo','$Product_Name','$Category','$Product_Quantity','$Address','$Phone_No')";
     $query_run = mysqli_query($connection, $query);

     if($query_run)
    {
        $_SESSION['status'] = "Your Order Has Been Successfully Placed !";
        $_SESSION['status_code'] = "success";
        //header('Location: cart.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Order Has Not Been Placed !";
        $_SESSION['status_code'] = "error";
        //header('Location: cart.php');  
    }
  }
  









    ?>

