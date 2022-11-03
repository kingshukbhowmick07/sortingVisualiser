<?php

session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'svproject');
$dataName = $_SESSION['emailaddress'];

$query = "select * from signin where email= '$dataName'";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
// echo$result['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t</title>
    <link rel="stylesheet" href="profilestyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="https://kit.fontawesome.com/a14529ee36.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<body>
    <div class="container">

        <div class="layout-left">
            <div class="circle">
                <img src="../images/7K7m.gif" alt="">
            </div>
            <div class="name">
                <h1><?php echo $result['name']; ?></h1><img src="../images/pngwing.com.png" alt="">
            </div>
            <div class="phone">
                <h2> <?php echo $result['phone']; ?></h2>
            </div>
            <div class="media">
                <a href="" class="facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="" class="github">
                    <ion-icon name="logo-github"></ion-icon>
                </a>
                <a href="" class="linkedn">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="" class="mail">
                    <ion-icon name="mail"></ion-icon>
                </a>
            </div>
            <div class="aboutme">
                <h1>About me</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro laboriosam odit at aperiam molestiae corrupti expedita, deserunt amet architecto, voluptas aliquid! In fugiat maiores aliquid, inventore cupiditate mollitia quae voluptatum laborum fuga nesciunt omnis perspiciatis, deleniti commodi. Cum, vel molestias tempore fugit ullam, aliquam modi nemo, aspernatur ipsa cupiditate eligendi.</p>
            </div>
            <div class="updatebtn">
                <div class="popup" id="popup-1">
                    <div class="overlay">
                        <div class="content">
                            <div class="close-btn" onclick="togglePopup()">&times;</div>
                            <h1 style="margin-bottom: 10px;">Update Data</h1>
                            <div class="alert1">
                                Alert : Only Choose The Elements u want to update .Not all data is mandatory
                            </div>
                            <div class="updateform">
                                <div class="updateaavtar">
                                    <h3>Choose Avtars</h3>
                                    <div class="aavtars">
                                        <img src="../images/aavtars/aged.gif" alt="" id="agedavtar">
                                        <img src="../images/aavtars/boss.gif" alt=""  id="bossavtar">
                                        <img src="../images/aavtars/chadLite.gif" alt="" id="chadavtar">
                                        <img src="../images/aavtars/harryLite.gif" alt="" id="harryavtar">
                                        <img src="../images/aavtars/hunk.gif" alt="" id="hunkavtar">
                                        <img src="../images/aavtars/lady.gif" alt="" id="ladyavtar">
                                        <img src="../images/aavtars/senior.gif" alt="" id="senioravtar">
                                        <img src="../images/aavtars/spec2 girl.gif" alt="" id="girl1avtar">
                                        <img src="../images/aavtars/winkGirl.gif" alt="" id="girl2avtar">
                                        <img src="../images/aavtars/spec girl.gif" alt="" id="girl3avtar">
                                        <img src="../images/7K7m.gif" alt="" id="boyavtar">

                                    </div>
                                </div>
                                <h4>OR</h4>
                                <div class="updateProfile">
                                    <label for="file"> PROFILE PICURE </label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>


                                <form action="/action_page.php">
                                    <div class="row1">
                                        <div class="col-25">
                                            <label for="fname">USERNAME</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                        </div>
                                    </div>
                                    <div class="row1">
                                        <div class="col-25">
                                            <label for="lname">PHONE</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                        </div>
                                    </div>
                                    <!-- <div class="row1">
                                        <div class="col-25">
                                            <label for="country">Country</label>
                                        </div>
                                        <div class="col-75">
                                            <select id="country" name="country">
                                                <option value="australia">Australia</option>
                                                <option value="canada">Canada</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div> -->
                                    <!-- </div> -->
                                    <div class="row1">
                                        <div class="col-25">
                                            <label for="subject">ABOUT YOU</label>
                                        </div>
                                        <div class="col-75">
                                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:120px"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row_save">
                                        <!-- <i class="savebtn"><ion-icon name="save-outline"></ion-icon></i> -->
                                        <div class="btnsave">
                                            <span class="material-symbols-outlined">
                                                save
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <!-- <div class="updateLables">
                                    <div class="updateName">
                                        <label for="username"> USERNAME </label>
                                    </div>
                                    <div class="updatePhone">
                                        <label for="phone"> PHONE </label>
                                    </div>
                                    <div class="updateAbout">
                                        <label for="about">ABOUT</label>
                                    </div>

                                </div>

                                <div class="updateInputs">
                                    <div class="updateProfile">
                                    </div>
                                    <div class="updateName">
                                        <input type="text" name="user" id="user" class="form-control">
                                    </div>
                                    <div class="updatePhone">
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                    <div class="updateAbout">
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                </div>        -->
                            </div>
                        </div>
                    </div>
                    <button onclick="togglePopup()"><span class="material-symbols-outlined">edit</span></button>
                </div>
            </div>

        </div>
        <div class="layout-right">
            <div class="scrollbar">
                <div class="personalInfo">
                    <div class="personar-info">
                        <h1>PERSONAL INFO </h1>
                    </div>
                    <div class="content">
                        <div class="tables">
                            <div class="left-table">
                                <div class="name2">
                                    <h2>NAME</h2>
                                </div>

                                <div class="mob">
                                    <h2>PHONE_NO.</h2>
                                </div>

                                <div class="stream">
                                    <h2>STREAM</h2>
                                </div>

                                <div class="sem">
                                    <h2>SEM</h2>
                                </div>

                                <div class="sec">
                                    <h2>SECTION</h2>
                                </div>

                                <div class="roll">
                                    <h2>ROLL</h2>
                                </div>
                                <div class="email2">
                                    <h2>E-MAIL</h2>
                                </div>

                            </div>
                            <div class="right-table">
                                <div class="name2">
                                    <h2><?php echo $result['name']; ?></h2>
                                    <div class="mob">
                                        <h2><?php echo $result['phone']; ?></h2>
                                    </div>

                                    <div class="stream">
                                        <h2>BTech. CSE (IOT + BCT + CYS)</h2>
                                    </div>

                                    <div class="sem">
                                        <h2>3rd</h2>
                                    </div>

                                    <div class="sec">
                                        <h2>SECTION</h2>
                                    </div>

                                    <div class="roll">
                                        <h2>ROLL</h2>
                                    </div>
                                    <div class="email2">
                                        <h2><?php echo $result['email']; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="updatebtn">
                            <a href="">
                                <button>
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project">
                    <div class="projectHead">
                        <h1>PROJECT </h1>
                    </div>
                    <div class="addproject">
                        <div class="cardShadow">

                            <div class="cardbody">
                                <form action="" method="POST" id="add_Form" name="sample">
                                    <h2>PROJECT :
                                        <input type="text" name="project" class="bar" id="name">
                                        <input type="button" name="add" class="btn" value="Add-Data" onclick="addStudent();"><br>
                                        <span id="response"></span>
                                    </h2>

                                    <table id="tbl" class="table">
                                        <thead>
                                            <th>
                                                PROJECTS
                                            </th>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="profile.js"></script>
</body>

</html>