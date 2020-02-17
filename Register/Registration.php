<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet"> 
    <style>
		body 
        {
            font-family: 'Mitr', sans-serif;
		}
		h1 
        {
            font-family: 'Mitr', sans-serif;
		}
        .kku
        {
            width: 100px;
            height: 160px;
        }
        .sc
        {
            width: 170px;
            height: 150px;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
    <img src="KKU.png" class="kku rounded float-right">
    <img src="SC.png" class="sc rounded float-right">
        <h1 class="display-1">ลงทะเบียน</h1>
        <p class="lead">ระบบยืมและคืนอุปกรณ์เครื่องมือ สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น</p>
        <hr class="my-4"> 
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>เงื่อนไขการลงทะเบียน</strong> กำหนดรหัสผ่านให้ประกอบไปด้วยตัวอักษรภาษาอังกฤษตัวเล็ก ตัวใหญ่ และตัวเลขผสมกันอย่างน้อย 8 ตัว
            </div>
        <center>  
        <form action="insert.php" method="post" >

            <div class="card" style="width: 80rem;">
                <div class="card-body">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">

                                <!-- กรอก Username -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Username</span>
                                </div>
                                <input type="text" class="form-control" placeholder="กรอกชื่อผู้ใช้" name="usrname" required>
                                </div>

                            </div>
                            <div class="col-sm">

                                <!-- กรอก Password -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Password</span>
                                </div>
                                <input type="password" class="form-control" placeholder="กรอกรหัสผ่าน" data-toggle="tooltip" data-placement="top" name="psw" required>
                                </div>

                            </div>
                            <div class="col-sm">

                                <!-- กรอก Password ซ้ำ -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Repeat Password</span>
                                </div>
                                <input type="password" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง" name="re_psw" required>
                                </div>

                            </div>
                        </div>
                    </div>

                    <br>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">

                                <!-- กรอก ชื่อจริง -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Firstname</span>
                                </div>
                                <input type="text" class="form-control" placeholder="กรอกชื่อจริง" name="name" required>
                                </div>

                                <!-- เลือก เพศ -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="gender" required>
                                        <option selected>ระบุเพศ</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                        <option value="เพศทางเลือก">เพศทางเลือก</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm">
                                
                                <!-- กรอก ชื่อสกุล -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Surname</span>
                                </div>
                                <input type="text" class="form-control" placeholder="กรอกชื่อสกุล" name="sur" required>
                                </div>

                                <!-- เลือก สาขา -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Department</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="dept" required>
                                        <option selected>ระบุสาขาวิชา</option>
                                        <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                                        <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                                        <option value="ภูมิศาสตร์สารสนเทศ">ภูมิศาสตร์สารสนเทศ</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div> 

                    <br>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm">

                                <!-- เลือก Roles -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">ตำแหน่ง</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="roles" required>
                                        <option selected>ระบุตำแหน่ง</option>
                                        <option value="นักศึกษา">นักศึกษา</option>
                                        <option value="อาจารย์">อาจารย์</option>
                                        <option value="พนักงาน">พนักงาน</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm">

                                <!-- กรอก E-Mail -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">E-Mail</span>
                                </div>
                                <input type="email" class="form-control" placeholder="กรอกอีเมล" name="email" required>
                                </div>

                            </div>
                            <div class="col-sm">

                                <!-- กรอก Phone Number -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Tel</span>
                                </div>
                                <input type="text" class="form-control" placeholder="กรอกเบอร์โทรศัพท์" name="phone" required>
                                </div>

                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success" name="submit">ยืนยัน</button>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </form>
        </center>

    </div>

</body>
</html>