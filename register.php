<?php
include 'connection/connect.php';
?>

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 image">
                    </div>

                    <div class="col-lg-6">
                        <a href="Home.php" class="btn-close d-flex float-end">
                        </a>
                        <h1 class="text-center">
                            Register
                        </h1>

                        <form  method="post" enctype="multipart/form-data">
                            <div class="form-group  row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0" name="firstname" required>
                                    <p>First name</p>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0" name="lastname" required>
                                    <p>Last name</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span>Gender:</span>
                                    <div class="form-check-inline">
                                        <input class="form-check-input " value="ชาย" type="radio" name="gender" id="radio1">
                                        <label class="form-check-label" for="radio1" >Male</label>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" value="หญิง" name="gender" id="radio2">
                                            <lable class="form-check-lable" for="radio2" >Female</lable>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" value="อื่นๆ" name="gender" id="radio3" checked>
                                            <lable class="form-check-lable" for="radio3" >Other</lable>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <input class="form-control rounded-0" type="Email" name="Email" required>
                                    <p>Email</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input class="form-control rounded-0" type="password" name="Password" required>
                                    <p>Password</p>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control rounded-0">
                                    <p>Address</p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="tel" class="form-control rounded-0">
                                    <p>Telephone</p>
                                </div>
                                <div class="col-md-12">

                                    <select name="status" class="form-select ">
                                        <option value="mfood">ผู้ดูแลร้านอาหาร</option>
                                        <option value="member">สมาชิก</option>
                                        <option value="delivery">ผู้ส่งอาหาร</option>
                                    </select>

                                </div>
                            </div>
                            <div class="button-group m-5 d-flex justify-content-center">

                                <button class="btn btn-warning btn-block ms-1" type="submit" name="regist">
                                    Submit form
                                </button>

                            </div>
                        </form>
                        <?php

                            if (isset($_POST['regist'])) {
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $gender = $_POST['gender'];
                                $email = $_POST['Email'];
                                $Password = md5($_POST['Password']);
                                $address = $_POST['address'];
                                $status = $_POST['status'];



                                $sql_select = "SELECT * FROM ctc_member WHERE Member_Email = '$email'";
                                $result = mysqli_query($conn, $sql_select);
                                $numrow = mysqli_num_rows($result);
                                if ($row = mysqli_fetch_array($result)) {
                                }

                                if ($numrow > 0) {
                                    echo "<script>('อีเมลถูกลงชื่อเข้าใช้เเล้ว')</script>";
                                } else {
                                    echo "<script>alert('ลงทะเบียนสำเร็จ')</script>";
                                    echo "<script>window.location='index.php';</script>";
                                    $sql = "INSERT INTO ctc_member(Memberid, Member_Name, Member_Surname, Gender, Member_Email, Member_Password, Member_Image, Member_address, Member_Tell, Member_Status, Member_date, Member_level) VALUES ('','$firstname','$lastname','$gender','$email','$Password','','$address','','$status','','request')";
                                    $conn->query($sql);
                                    // if ($conn->query($sql) === TRUE) {
                                    //     echo "<script>alert('ลงทะเบียนสำเร็จ')</script>";
                                    // } else {
                                    //     echo "error" .$sql.$conn->error;
                                    // }
                                }
                            }


?>

                    </div>
                </div>
            </div>
        </div>
    </div>

