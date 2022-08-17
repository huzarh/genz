<?php

@include 'con.php';

session_start();

// if(!isset($_SESSION['admin_name'])){
//     header('location:login.php');
// };
if(isset($_POST['add_product'])){
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    $title = $_POST['title'];
    $titl = $_POST['titl'];
    $text = $_POST['text'];
    $eh_text = $_POST['ehtext'];
    $eh_img = $_POST['ehimg'];
    // $udur = (date("Y-m-d",$t));
    if(empty($text)){
       $message[] = 'please fill out all';
    }elseif ($error === 0) {
      //  $insert = "INSERT INTO post_db(title,text,titl,eh_text,eh_img) VALUES('$title','$text','$titl','$eh_text','$eh_img')";
      //  if ($conn->query($insert) === TRUE) {
      //   echo "<p>amjilltei niitllee.... nitlelee user pagees vznvv</p>";
      //   header('location:index.php');
      // } else {
      //   echo "Error: " . $sql . "<br>" . $conn->error . "slkdclnslkc"
    
      if ($img_size > 129000000) {
        $em = "Sorry, your file is too large.";
        header("Location: index.php?error=$em");
      }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
  
        $allowed_exs = array("jpg", "jpeg", "png"); 
  
        if (in_array($img_ex_lc, $allowed_exs)) {
          $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = 'uploads/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);
  
          // Insert into Database
          $sql = "INSERT INTO post_db(title,text,titl,eh_text,eh_img,image_url) 
                  VALUES('$title','$text','$titl','$eh_text','$eh_img','$new_img_name')";
          mysqli_query($conn, $sql);
          header("Location: index.php");
        }else {
          $em = "You can't upload files of this type";
              header("Location: add.php?error=$em");
        }
      }
    }else {
      $em = "unknown error occurred!";
      header("Location: add.php?error=$em");
    }
 
 
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Document</title>
</head>
<style>
      *{
  font-family: "Poppins", sans-serif;
      }
</style>
<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Шинэ нийтлэл нэмэх</h3>
         <input type="text" name="titl" placeholder="first title">

         <input type="text" name="title" placeholder="title">
         
         <!-- <input type="text" placeholder="Шинэ нийтлэл" name="text" > -->
         <br>
         <br>
         <textarea placeholder="Шинэ нийтлэл" name="text"></textarea>
         <input type="file" name="my_image">
         <br>
         <br>
         <input type="text" name="ehtext" placeholder="eh_text">
         <input type="text" name="ehimg" placeholder="eh_img">
         <br>
         <br>
         <input type="submit" name="add_product" value="НИЙТЛЭХ">
    </form>


    <div>
      <a href="index.php" class="btn" style="padding-left:10px;" >НЭВТРЭХ</a>
      <!-- <a href="signup.php" class="btn" style="padding-left:10px;">БҮРТГҮҮЛЭХ</a>
      <a href="logout.php" class="btn" style="padding-left:10px;">ГАРАХ</a> -->
    </div>
      
</body>
</html>