<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foydalanuvchilar ro'yxati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a class="text-light text-decoration-none" href="index.php">
                Foydalanuvchi qo'shish
            </a>    
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ism</th>
                    <th scope="col">Familiya</th>
                    <th scope="col">Telefon raqam</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tahrir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * from `user`";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)) {
                            $id=$row['id'];
                            $name=$row['name'];
                            $familyName=$row['familyName'];
                            $phone=$row['phone'];
                            $email=$row['email'];
                            echo '
                                <tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$familyName.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$email.'</td>
                                    <td>
                                        <button class="btn btn-primary"><a class="text-light text-decoration-none" href="update.php?updateid='.$id.'">Yangilash</a></button>
                                        <button class="btn btn-danger"><a class="text-light text-decoration-none" href="delete.php?deleteid='.$id.'">O\'chirish</a></button>
                                    </td>
                                </tr>
                            ';
                        }
                    }  

                ?>
                

            </tbody>
        </table>
    </div>    
</body>
</html>