<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
    <style>
        h1{
            margin-left:400px;
        }
        .upload{
            background-color:lightblue;
            margin:50px 500px 0 500px ;
        }
        label{
            padding:90px;
            margin-top:1px;
        }
        .input{
            margin:1px 80px 2px 80px;
        }
        .choose{
            margin:1px 80px 2px 80px;
        }
        .submit{
            margin:1px 100px 2px 150px;
        }
    </style>
</head>
<body>
    <img src="/images/logo.png" alt="">
    <h1>WELCOME TO ADMIONISTRATIVE BOARD</h1>

    <section class="upload">
        <form method="post" enctype="multipart/form-data">
            <label>ENTER FILE NAME</label><br>
            <br><input class="input" type="text" name="title"></br>

            
            <br><input  class="choose" type="File" name="file">
            <br><br><br><input class="submit" type="SUBMIT" name="Submit"></br>
        </form>

    </section>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","upload");

if(isset($_POST["submit"]))
{
    $title = $_POST["title"];
    $pname = rand(1000,1000)."=" .$_FILES["file"]["name"];
    $tname = $_FILES["files"]["tmp_name"];
    $uploads_dir = '/images';
    move_uploaded_file($tname,$uploads_dir.'/'.$pname);

    $sql ="Insert into upload(title,image) Values('$title','$pname')";
    if(mysqli_query($conn,$sql)){
        echo"File uploaded successfully";
    }
    else{
        echo"error";
    }
}