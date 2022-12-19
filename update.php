<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="SELECT * from `user` where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $familyName=$row['familyName'];
    $phone=$row['phone'];
    $email=$row['email'];

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $familyName = $_POST['familyName'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $sql="UPDATE `user` set id=$id, name='$name', familyName='$familyName', phone='$phone', email='$email' where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:user-list.php');
        }else{
            die (mysqli_error($con));
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malumotlarni tahrirlash</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>
                            Foydalanuvchi malumotlarini tahrirlash
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group mb-3">
                                <label>Ism</label>
                                <input type="text" name="name" class="form-control" autocomplete="off" value="<?php echo $name ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Familiya</label>
                                <input type="text" name="familyName" class="form-control" autocomplete="off" value="<?php echo $familyName ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Telefon raqam</label>
                                <input type="text" name="phone" class="form-control" autocomplete="off" value="<?php echo $phone ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label>Elektron pochta</label>
                                <input type="text" name="email" class="form-control" autocomplete="off" value="<?php echo $email ?>">
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary">Yangilash</button>
                            <a href="user-list.php" class="btn btn-danger fload-end">Orqaga</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>