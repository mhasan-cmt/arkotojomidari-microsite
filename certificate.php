<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$img = imagecreatefrompng("resources/images/certificate.png");
$size = 25; $angle = 0; $quality = 9;
$color = imagecolorallocate($img, 0, 0, 0);
$font = dirname(__FILE__) . "/arial.ttf";

// Get image dimensions
$image_width = imagesx($img);
$image_height = imagesy($img);

$text_bound = imageftbbox($size, $angle, $font, $name);

$txt_w = $text_bound[4] - $text_bound[0];
$txt_h = $text_bound[3] - $text_bound[1];
//Get the starting position for centering
$start_x_offset = ($image_width - $txt_w) / 2;
$start_y_offset = 180;

imagettftext($img, $size, $angle, $start_x_offset, $start_y_offset, $color , $font, $name);
imagepng($img, dirname(__FILE__)."/certificates/certificate ".$email.".PNG", $quality);
?>
<DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ar koto jomidari</title>
    <link rel="icon" type="image/x-icon" href="./resources/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css" integrity="sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body style="background:#F0F0F0;background-image:url(resources/images/cbg.png)">
    <div id="certificate-block" style="padding-top:200px;" class="container">

        <div class="row">
            <div class="col-md-12 mobile-screen" id="capture-mobile">
                <img src="certificates/certificate <?php echo($email)?>.png" class="w-100">
    
            </div>
    
    
            <div class="col-md-12 desktop-screen" id="capture-desktop">
    
                <img src="certificates/certificate <?php echo ($email)?>.png" class="w-100">
            </div>
    
        </div>
    
        <div class="row">
            <ul class="d-flex justify-content-end" style="text-decoration: none; list-style: none;">
                <li class="d-flex align-items-center justify-content-center flex-column me-3">Share with Friends<br> <span>
              <button id="share-btn" href="https://www.facebook.com/sharer/sharer.php?u=https://arkotojomidari.com?phone=121323" target="_blank rel="><i style="padding-left:20px;font-weight:bold; font-size:20px;" class="fa-brands fa-square-facebook"></i></button></span><br>
                </li>
                <li class="d-flex align-items-center justify-content-center flex-column">Downlaod<br><span><a href="certificates/certificate <?php echo($email)?>.png" download=""><i style="padding-left:20px; color:red; font-weight:bold; font-size:20px;" class="fa fa-download"></i></a></span><br></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
    
            <div class="text-center py-5">
                <img class="desktop-screen img-fluid w-100" src="resources/images/3rd-block.png" alt="Hero Image">
                <img class="mobile-screen img-fluid w-100" src="resources/images/mobile-common-1st.png" alt="Hero Image">
            </div>
            
        </div>
    </div>

    <div class="container-fluid">
        <div class="wrapper d-flex justify-content-center align-items-center">
            <p class="me-3"><a style="text-decoration:none; font-size:18px; color:#000; font-weight:light;" href="#">Privacy
                Policy</a></p>
                <p style="text-align: right;"><a style="text-decoration:none; font-size:18px; color:#000; font-weight:light;" href="#">Terms Of
                    Use</a></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="hero">
                    <img src="resources/images/bottom.png" class="img-fluid w-100" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.min.js" integrity="sha512-vyRAVI0IEm6LI/fVSv/Wq/d0KUfrg3hJq2Qz5FlfER69sf3ZHlOrsLriNm49FxnpUGmhx+TaJKwJ+ByTLKT+Yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function show(e){
            e.style.display = "none";
            document.getElementById('switch-off-area').style.display = "block";
        }
        function submitBtn(e){
            e.style.display = "none";
            document.getElementById('form-area').style.display = "block";
        }
        let btn = document.getElementById('share-btn');
        btn.addEventListener("click", ()=>{
            fetch("certificates/certificate <?php echo($email)?>.png").then(function (response) {
          return response.blob();
        }).then(function(blob){
            var file = new File([blob], "Certificate.png", {type:'image/jpeg'});
            var filearray = [file];

            if(navigator.canShare && navigator.canShare({files: filearray})){
                navigator.share({
                    text: "test",
                    files: filearray,
                    title: "Certificate",
                    url: "https://facebook.com/asm-cmt"
                })
            }
        })
        });
    </script>
</body>
</html>