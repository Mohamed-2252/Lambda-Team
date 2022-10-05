<?php
    $code = $_POST['code'];
    include('connect.php');
    $selectData = $conn->prepare('SELECT * FROM certifecates WHERE l_code=?');
    $selectData->execute([$code]);
    if ($selectData->rowCount() != 1) {
        ?>
        <h1>This Certificate not found</h1>
        <?php
    } else {
        $data = $selectData->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
</head>
<body>
  <div class="overlay"></div>
  <div class="nav">
    <p>#code_talks</p>
    <img src="./photo_2022-08-26_00-28-28.jpg" alt="">
  </div>
  <p>This certificate is verified</p>
    <img class="framed" src="images/certificates/<?=$data['l_image']?>" alt=""><br>
    <a class="submit" href="images/certificates/<?=$data['l_image']?>" download>Download Certificate</a>
    <br><br><br>
<style>
  :root {
  --red: rgb(100, 201, 100);
  --bgColor: rgb(88, 122, 90) ;
}
.overlay{
    width: 107%;
    height: 135%;
    position: absolute;
    background-color: rgba(0, 0, 0, 0.986) ;
    opacity: .7;
    z-index: -9;
}
body {
  display: grid;
  place-items: center;
  height: 100vh;
  background-color: var(--bgColor);
  font-family: 'Staatliches', sans-serif;
}

img.framed {
  box-shadow:
    -50px -50px 0 -40px var(--red),
    50px 50px 0 -40px var(--red);
  width: 600px;
  height: 400px;
}
@media screen and (max-width: 630px) {
    img.framed{
        width:85%;
        height:215px;
    }
}
.submit {
    background-color: rgb(79, 206, 79);
    border-radius: 12px;
    border: 0;
    text-decoration: none;
    box-sizing: border-box;
    color: #eee;
    cursor: pointer;
    font-size: 18px;
    height: 50px;
    outline: 0;
    text-align: center;
    align-items: center;
    width: 200px;
    padding: 13px;
    margin: 30px;
  }
  
  .submit:hover {
    background-color: rgb(44, 44, 44);
    transition: .6s;
  }
p{
  color: white;
  font-weight: bold;
}
.nav{
  width: 100%;
  background: none;
  height: 130px;
}
.nav img{
  width: 70px;
  height: 70px;
  border-radius: 50%;
  float: right;
  
}
.nav p{
  float: left;
  padding-left: 2%;
}
[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
    display:none;
}
</style>
</body>
</html>
</body>
</html>
<?php } ?>