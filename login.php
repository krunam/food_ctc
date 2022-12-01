<div class="modal fade" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="E-Mail">
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-gride">
                        <button type="submit" class="btn btn-warning">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    session_start();

    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql_login = "SELECT * FROM ctc_member WHERE Member_Email='$email' && Member_Password='$pass' ";
        $qr_login = $conn->query($sql_login);
        $login_data = $qr_login->fetch_assoc();
        if (isset($login_data)) {
            $id = $login_data['Memberid'];
            $_SESSION['Member_Email'] = $login_data['Member_Email'];
            $email = $_SESSION['Member_Email'];
            $status = $login_data['Member_Status'];
            $hash = $login_data['Member_Password'];
            $level = $login_data['Member_level'];

                if ($level == 'request'){
                    echo "<script>alert('บัญชีของคุณอยู่ระหว่ารอการอนุมัติ')</script>";
                }
                if ($level == 'cancel'){
                    echo "<script>alert('บัญชีของคุณถูกระงับการใช้งาน')</script>";
                }
                if ($level == 'ok'){
                    switch ($status) {
                        case "admin":
                            login($id, $status);
                            break;
                        case "member":
                            login($id, $status);
                            break;
                        case "mfood":
                                login($id, $status);
                                break;
                        case "delivery":
                                login($id, $status);
                                break;
                     case "test":
                                    login($id, $status);
                                    break;
                    } 
                }              
     
        } else {
            echo "<script>alert('E-Mail หรือ Password ไม่ถูกต้อง')</script>";
        }
                                
    }

    function login($id, $status) {
        $_SESSION['Memberid'] = $id;
        $_SESSION['Member_level'] = $status;
        header("Location: {$status}/home.php");
    }