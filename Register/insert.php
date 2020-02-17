<?php
    include_once('connect.php');
    
    if(isset($_POST['submit']))
    {
        // $id = $_POST['id'];
        $usrname = $_POST['usrname'];
        $password = $_POST['psw'];
        $repassword = $_POST['re_psw'];
        $firstnm = $_POST['name'];
        $lastnm = $_POST['sur'];
        $gender = $_POST['gender'];
        $dept = $_POST['dept'];
        $status = $_POST['roles'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    
        $sql = "INSERT INTO user (username, password, firstname, lastname, gender, department, roles, email, phone) 
                VALUES ('$usrname', '$password', '$firstnm', '$lastnm', '$gender', '$dept', '$status', '$email', '$phone')";
                
        // $conn->query($sql);
        // echo '<script> alert("ลงทะเบียนสำเร็จ !!!")</script>';
        // กรณีไม่ต้องการให้แจ้ง ให้นำ comment 2 ตัวด้านบนออก

        // $result = mysql_query("SELECT username FROM user WHERE username='$usrname'");
        // if(mysql_num_rows($result) == $usrname)
        // {
        //     echo "<script>if(confirm('ลงทะเบียนไม่สำเร็จ มีผู้ใช้ Username นี้แล้ว!!')){document.location.href='Registration.php'};</script>";
        // }

        // เช็คว่ารหัสเป็นไปตามที่ระบบต้องการหรือไม่
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) 
        {
            echo "<script>if(confirm('ลงทะเบียนไม่สำเร็จ รหัสไม่ตรงความต้องการของระบบ!!')){document.location.href='Registration.php'};</script>";
        }

        // เช็คว่ารหัสผ่านตรงกันหรือไม่
        if($_POST['psw']!==$_POST['re_psw']) 
        {
            echo "<script>if(confirm('ลงทะเบียนไม่สำเร็จ รหัสไม่ตรงกัน!!')){document.location.href='Registration.php'};</script>";
        } 
        else 
        {
            echo "<script>if(confirm('ลงทะเบียนสำเร็จ !!')){document.location.href='Registration.php'};</script>";  
        }

        // เช็คว่าข้อมูลถูกคิวรี่หรือไม่
        if($conn->query($sql))
        {
            echo "<script>if(confirm('ลงทะเบียนสำเร็จ !!')){document.location.href='Registration.php'};</script>";
        }
        else
        {
            echo '<script> alert("ลงทะเบียนไม่สำเร็จ กรุณากรอกใหม่ !!")</script>';
        }
        }
        else
        {
		$_SESSION['error'] = 'Fill up add form first';
    }
?>