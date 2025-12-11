{{-- <!DOCTYPE html>
<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Trirong", serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        ชื่อ
                    </div>
                    <div class="col">
                        <input>
                    </div>
                </div>
            </form>
        </div>
        <style>
            h1 { color: red;}
        </style>
        <h1>HTML&nbsp;&nbsp;&nbsp;&nbsp;101</h1>
        <h1 style="color:blue;">&lt;HTML 101</h1>
        <h1>HTML 101</h1>
        <h3>&gt;HTML 101</h3>
        <hr />
        <hr>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <td>ชื่อ</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rujirat</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Natthaphong</td>
                </tr>
            </tbody>
        </table> 
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ฟอร์มข้อมูลส่วนตัว</title>
</head>
<body>
    <h1>แบบฟอร์มสมัครงาน บริษัท SE#14</h1>

    <form method="POST" action="/submit" enctype="multipart/form-data">
        <div style="display:flex; gap:20px;">
    <div>
        <label>ชื่อ:</label><br>
        <input type="text" name="name" />
    </div>
    <div>
        <label>สกุล:</label><br>
        <input type="text" name="surname" />
    </div>
</div><br>
        <div>
            <label>วัน/เดือน/ปีเกิด:</label><br>
            <input type="date" name="dob" />
        </div><br>

        <div>
            <span>เพศ:</span><br>
            <label><input type="radio" name="gender" value="ชาย"> ชาย</label><br>
            <label><input type="radio" name="gender" value="หญิง"> หญิง</label><br>
            <label><input type="radio" name="gender" value="ไม่ระบุ"> ไม่ระบุ</label>
        </div><br>

        <div>
            <label>อัปโหลดรูปภาพ:</label><br>
            <input type="file" name="photo" />
        </div><br>

        <div>
            <label>ที่อยู่:</label><br>
            <textarea name="address" rows="4" cols="50"></textarea>
        </div><br>

        <div>
            <label>สีที่ชอบ:</label><br>
            <select name="favorite_color">
                <option value="ไม่ระบุ">ไม่ระบุ</option>
                <option value="แดง">สีแดง</option>
                <option value="น้ำเงิน">สีน้ำเงิน</option>
                <option value="เขียว">สีเขียว</option>
                <option value="เหลือง">สีเหลือง</option>
                <option value="ฟ้า">สีฟ้า</option>
                <option value="ขาว">สีขาว</option>
                <option value="ดำ">สีดำ</option>
                <option value="ชมพู">สีชมพู</option>
            </select>
        </div><br>

        <div>
            <div>
    <label>แนวเพลงที่ชอบ:</label><br>
    <input type="text" name="music_genre"/>
</div><br>

        <div>
            <label><input type="checkbox" name="consent" value="agree"> ยินยอมให้เก็บข้อมูล</label>
        </div><br>

        <button type="reset" style="background-color:white; padding:6px 12px; border:1px solid #ccc; cursor:pointer;">reset</button>
        <button type="submit" style="background-color:green; color:white; padding:6px 12px; border:none; cursor:pointer;">submit</button>
    </form>
</body>
</html>
