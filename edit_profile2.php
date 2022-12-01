
   <?php
   session_start();
   $email = $_SESSION['Member_Email'];
   require "connection/connect.php"; 
   //$email = "supaporn@gmail.com";
   if (isset($_POST['edit'])) {
      $u_image = $_FILES['profile']['name'];
      $image_tmp = $_FILES['profile']['tmp_name'];

       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $gender = $_POST['gender'];
       $email = $_POST['email'];
       $Password = $_POST['password'];
       $address = $_POST['address'];      
       $tell = $_POST['tell'];
       
       if ($u_image!=="") {
        move_uploaded_file($image_tmp,"assets/images/profile_img/$u_image");  		
        $update_profile = "update ctc_member SET Member_Image='assets/images/profile_img/$u_image' where Member_Email = '$email'";
        $conn->query($update_profile);  	
			}


        $sql_select = "SELECT * FROM ctc_member WHERE Member_Email = '$email'";
        $result = mysqli_query($conn, $sql_select);
        $numrow = mysqli_num_rows($result);
        if ($row = mysqli_fetch_array($result)) {
          $Memberid = $row['Memberid'];
             $Member_Status = $row['Member_Status'];
        }

      //  if ($numrow > 0) {
      //      echo "<script>('อีเมลถูกลงชื่อเข้าใช้เเล้ว')</script>";
      //  } else {  
         

           $sql_edit = "UPDATE ctc_member SET Member_Name = '$firstname', Member_Surname ='$lastname',Gender='$gender', Member_Email='$email', Member_Password='$Password',Member_address='$address', Member_Tell='$tell', Member_date=NOW() WHERE Member_Email='$email' "; 
           $conn->query($sql_edit);        
         //  echo "<script>alert('แก้ไขข้อมูลสำเร็จ')</script>";
            // if ($Member_Status == 'admin') {
            //   echo "<script>window.location='../food_web/admin/home.php';</script>";
            //   redirect($url.'admin/home.php');
            // } if ($Member_Status == 'member') {
            //   echo "<script>window.location='../food_web/member/home.php';</script>";
            // }if ($Member_Status == 'delivery') {
            //   echo "<script>window.location='../food_web/member/home.php';</script>";
            // }if ($Member_Status == 'mfood') {
            //   echo "<script>window.location='../food_web/member/home.php';</script>";
            // }
            if ($conn->query($sql_edit) === TRUE) {
                echo "<script>alert('edit สำเร็จ')</script>";
                
            } else {
                echo "error" .$sql_edit.$conn->error;
            }
     //  }
   }


?>

