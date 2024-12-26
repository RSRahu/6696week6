<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("conn.php");    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างform bootstrap</title>
        <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">


<style>
    body{
        font-family: "Kanit", serif;
  font-weight: 600;
  font-style: normal;
  margin-left: 100px;
  margin-right: 100px;
  margin-top: 100px;
  margin-bottom: 100px;
    }

</style>
</head>
<body>
    <h1>โปรแกรมเพิ่มข้อมูล</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">ชื่อ</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">ชื่อเล่น</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" name="nickname">
    </div>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2">อายุ</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="age" name="age">
  </div>
  <label for="age1" class="col-sm-2">ปี</label>
  </div>
  <button type="submit" class="btn btn-primary">บันทึก</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

<!-- php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $nickname = $_POST["nickname"];
    $age =$_POST["age"];

    // เพิ่มข้อมูล
    try {
        $sql = "INSERT INTO student (name, nickname, age)
        VALUES ('$name', '$nickname', '$age')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<div class='alert alert-info'>
        <strong>บันทึกเสร็จแล้ว! </strong>คุณได้บันทึกข้อมูล 1 รายการแล้ว
      </div>";
      } catch(PDOException $e) {
        echo $sql . "บันทึกข้อมูลผืดพลาด<br>" . $e->getMessage();
      }
      
      $conn = null;
    
}
?>

</body>
<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>