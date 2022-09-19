<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ar koto jomidari</title>
    <link rel="icon" type="image/x-icon" href="./resources/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css" integrity="sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./resources/css/style.css"></
</head>
<body style="background:#F0F0F0;">
    <div class="container-fluid desktop-screen" id="home-section">
        <div class="row">
            <div class="col">
                <div class="hero">
                    <a href="news.php">
                        <img src="resources/images/home-section.png" class="img-fluid w-100" alt="Hero Image"> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="switch-on-area" onclick="show(this)" style="display: block;cursor: pointer;">
            <div class="col-md-12 text-center">
                <img class="desktop-screen img-fluid w-100" style="padding-left:px;" src="resources/images/switch-on.png" alt="switch on" onclick="doSwitchOff()">

                <img class="mobile-screen img-fluid w-100" src="resources/images/mobile-switch-on.png" alt="switch on" onclick="doSwitchOff()">

            </div>
        </div>
        <div id="switch-off-area" style="display: none;cursor: pointer;">
            <div class="text-center w-100">
                <img class="desktop-screen img-fluid w-100" src="resources/images/switch-off.png" alt="switch on">
                <img style="padding-top:30px;" class="mobile-screen img-fluid w-100" src="resources/images/mobile-switch-off.png" alt="switch on">
                <br>
                <button style="border:none;" onclick="submitBtn(this)">
                    <div class="row">
                        <div class="text-center">
                            <input class="desktop-screen img-fluid w-100"  style="border:none;" type="image" src="resources/images/submit-button.png" name="submit" alt="submit">

                            <input class="mobile-screen img-fluid w-100" style="border:none;" type="image" src="resources/images/submit-button.png" name="submit" alt="submit">
                        </div>
                    </div>
                </button>


            </div>
        </div>
        <div id="form-area" style="display: none;">
            <div class="container">

                <form style="padding-top:30px;" class="desktop-screen" autocomplete="off" method="post" action="certificate.php">

                    <div style="padding-left:230px; display: inline-flex;" class="row mx-auto flex-column flex-md-row">
                        <p style="font-size:30px; color:#1E4399; font-weight:bold;">আপনার তথ্য দিয়ে সহায়তা করুন</p>
                        <div class="col">
                            <label style="font-size:18px; color:#1E4399; font-weight:regulae;">নাম</label>
                            <input type="text" class="form-control" placeholder="নাম লিখুন" name="name" required="">
                        </div>
                        <div class="col">
                            <label style="font-size:18px; color:#1E4399; font-weight:regulae;">ই-মেইল আইডি</label>
                            <input type="email" class="form-control" name="email" required="" placeholder="ই-মেইল আইডি লিখুন ">
                        </div>
                        <div class="col">
                            <label style="font-size:18px; color:#1E4399; font-weight:regulae;">মোবাইল নাম্বার</label>
                            <input type="tel" class="form-control" name="phone" required="" placeholder="মোবাইল নাম্বার লিখুন
                    ">
                        </div>
                        <div class="col hide">
                            <label>মোবাইল নাম্বার</label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center py-5">
                            <input class="" type="image" name="submit" alt="submit"  src="resources/images/submit-button.png">
                        </div>
                    </div>
                </form>


                <form style="padding-top:30px;" class="mobile-screen" autocomplete="off" method="post" action="certificate.php">

                    <div style="padding:0px 30px 0px 30px;;" class="row mx-auto flex-column flex-md-row">
                        <p style="font-size:16px; color:#1E4399; font-weight:bold;">আপনার তথ্য দিয়ে সহায়তা করুন</p>
                        <div class="col">
                            <label style="font-size:14px; color:#1E4399; font-weight:regulae;">নাম</label>
                            <input type="text" class="form-control" placeholder="নাম লিখুন" name="name" required="">
                        </div>
                        <div class="col">
                            <label style="font-size:14px; color:#1E4399; font-weight:regulae;">ই-মেইল আইডি</label>
                            <input type="email" class="form-control" name="email" required="" placeholder="ই-মেইল আইডি লিখুন ">
                        </div>
                        <div class="col">
                            <label style="font-size:14px; color:#1E4399; font-weight:regulae;">মোবাইল নাম্বার</label>
                            <input type="tel" class="form-control" name="phone" required="" placeholder="মোবাইল নাম্বার লিখুন
                    ">
                        </div>
                        <div class="col hide">
                            <label>মোবাইল নাম্বার</label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center">
                            <input class="img-fluid w-100 desktop-screen py-5" type="image" name="submit" alt="submit" src="resources/images/file-down.png">
							<input class="img-fluid w-100 mobile-screen" type="image" name="submit" alt="submit" src="resources/images/file-down.png">
                        </div>
                    </div>
                </form>
            </div>
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
        function submitForm(){
            document.getElementById('certificate-block').style.display= "block";
            document.getElementById('home-section').style.display = 'none';
            document.getElementsByTagName('body').backgroundImage = "url('resources/image/cbg.png')";
        }
    </script>
</body>
</html>