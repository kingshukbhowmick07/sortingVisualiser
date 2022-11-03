<?php

session_start();
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'svproject');
$dataName = $_SESSION['emailaddress'];

$query = "select * from signin where email= '$dataName'";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        

        <div class="popup-screen">
            <div id="first">
                <div class="popup-box">
                    <i class="fas fa-times close-btn1"><ion-icon name="close-circle"></ion-icon></i>
                    <h2>Sorting_Visualiser</h2>
                    <p>Hey <?php echo $result['name']?> !</p>
                    <p>Hope You are doing well , Now lets make a short tour of our website</p>
                    <div class="btn">
                        <div class="skip">
                            <input type="button" value="SKIP" id="skip">
                        </div>
                        <div class="next">
                            <input type="button" value="NEXT" id="next">
                        </div>
                    </div>
                    <div class="dlg"></div>
                </div>
                <img src="images/sundar-pichai-removebg-preview.png" alt="" class="pichai">
            </div>


            <div id="second">
                <div class="popup-box2">
                    <div class="lefty">
                        <img src="images/Screenshot 2022-11-01 143128.png" alt="" class="sdb">
                    </div>
                    <!-- <div class="dlg"></div> -->
                </div>
                <div class="musk">
                    <img src="images/Elon-Musk-PNG-Isolated-File.png" alt="">
                </div>
                <div class="baksho">
                    <i class="fas fa-times close-btn2"><ion-icon name="close-circle"></ion-icon></i>
                        <h2>Side navbar</h2>
                        <p>Hey <?php echo $result['name']?> !</p>
                        <p>Hope You are doing well , Now lets make a short tour of our website</p>
                    <div class="btn">
                        <div class="skip">
                            <input type="button" value="SKIP" id="skip2">
                        </div>
                        <div class="next">
                            <input type="button" value="NEXT" id="next2">
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="third" id="third">
                <div class="popup-box3">
                    <div class="righty">
                        <img src="images/Screenshot 2022-11-01 232919.png" alt="">
                    </div>
                    <div class="righty2">
                        <div class="dialg">
                            <i class="fas fa-times close-btn3"><ion-icon name="close-circle"></ion-icon></i>
                            <h2>User Profile</h2>
                            <p>Hey <?php echo $result['name']?> !</p>
                            <p>Hope You are doing well , Now lets make a short tour of our website</p>
                            <div class="btn">
                                <div class="skip">
                                    <input type="button" value="SKIP" id="skip3">
                                </div>
                                <div class="next">
                                    <input type="button" value="NEXT" id="next3">
                                </div>
                            </div>   
                        </div>
                        <div class="img">
                            <img src="images/pngegg.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div id="fourth">
                <div class="fourthUp">
                    <img src="images/Team-Free-Download-PNG.png" alt="">
                </div>
                <div class="fourthDown">
                    <h4>Group -59 Welcomes You </h4>
                    <p>Easiest Way to understand Sorting Algorithms</p>
                    <div class="finalbutton">
                        <i class="closefinalbtn" id="closefinalbtn">
                            <ion-icon name="enter-outline"></ion-icon>
                        </i>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container">
            <!-- <h2> </h2> -->
            <div class="navigation">
                <ul>
                    <li>
                        <a href="">
                            
                            <span class="icon"><ion-icon name="happy"></ion-icon></span>
                            <span class="title">
                                <h2>Dashboard</h2>
                        
                            </span>
                            
                        </a>
                    </li>
                <li>
                    <a href="" class="activate">
                        <span class="icon"><ion-icon name="home"></ion-icon></span>
                        <span class="title">Dashboard</p></span>
                    </a>
                </li>
                <li>
                    <a href="/members/members.html">
                        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                        <span class="title">Documentation</span>
                    </a>
                    
                </li>
                <li>
                    <a href="about/about.html">
                        <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
                        <span class="title">About</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="/members/members.html" class="active" >
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Members</span>
                    </a>
                </li>
                <li>
                    <a href="regards/regards.html">
                        <span class="icon"><ion-icon name="medal-outline"></ion-icon></span>
                        <span class="title">
                            Regards
                        </span>
                    </a>
                </li>
                <img src="images/kTMKaG9Tj.gif" alt="">
                
                
            </ul>
        </div>
    </div>
    
    <!-- main -->
    <div class="main">
        
        <!-- topbar_Start -->
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu"></ion-icon>
            </div>
            
            
            <div class="pageHeading">
                <!-- <img src="images/f88acab7ffd127b4465659500aa0538f.gif" alt="" class="gif"> -->
                <h2>
                    Sorting
                    <span>
                        -Visualiser
                    </span>
                </h2>
            </div>
        </div>   
            <!-- topbar_End -->
            <div class="ContainerTwo"> 
                   
                <div class="DropBox">
                    <div class="DropDown">
                        <span>
                            <h4>
                                SELECT SORT
                            </h4>
                        </span>
                        <div class="dropdownContent">
                            
                            <button>Bubble</button>
                            <button>Selection</button>
                            <button>Insertion</button>
                            <button>Merge</button>
                            <button>Quick</button>
                            <button style="margin-right: 0px">Heap</button>
                        </div>
                    </div>
                </div>
                <div class="bars">
                    <button class="generate"id="a_generate">Generate New Array!</button>
                    
                    <div id="array_container"></div>
                </div>
                
                <div class="array-inputs">
                    <p>Size of the array:</p>
                    <input
                    id="a_size"
                            type="range"
                            min="20"
                            max="50"
                            step="1"
                            value="80"
                            />
                            <p>Speed of the algorithm:</p>
                            <input id="a_speed" type="range" min="1" max="5" step="1" value="4" /><br>
                        </div>
                        
                
                        <div class="section">
                            <div id="Info_Cont1" class="infoContainer">
                                <h3>TIME COMPLEXITY</h3>
                                <div class="Complexity_Containers" id="Time_Complexity_Types_Container">
                                    <div class="Pair_Definitions">
                                      <p class="Sub_Heading">Worst case:</p>
                                      <p id="Time_Worst"></p>
                                    </div>
                    
                                    <div class="Pair_Definitions">
                                        <p class="Sub_Heading">Average case:</p>
                                        <p id="Time_Average"></p>
                                    </div>
                        
                                    <div class="Pair_Definitions">
                                        <p class="Sub_Heading">Best case:</p>
                                        <p id="Time_Best"></p>
                                    </div>
                                </div>
                            </div>
                        
                                <div class="arrayContainer">
                                    <div class="ArrayHeader">
                                    <div class="Head">
                                        <!-- <h3>TITLE</h3> -->
                                    </div>
                                    </div>
                                </div>
                            
                                <div id="Info_Cont2">
                                    <h3>SPACE COMPLEXITY</h3>
                            
                                    <div
                                    class="Complexity_Containers"
                                    id="Space_Complexity_Types_Container"
                                    >
                                        <div class="Pair_Definitions">
                                            <p class="Sub_Heading">Worst case:</p>
                                            <p id="Space_Worst"></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="user">
                                    <img src="images/mee6-wii-chicken.gif" alt="">
                                </div>  -->
                        </div>
                <div class="user">
                    <a href="profile/Layout.php">
                        <img src="images/7K7m.gif" alt="">
                    </a>
                </div>         
            </div>

    

    <!-- SCRIPTS -->


    <script src="scripts/main.js"></script>
    <!--This should be at the end of body and should be loaded before sorts.js-->
    <script src="scripts/visualizations.js"></script>
    <!--This should be loaded after main.js-->

    <script src="scripts/bubble_sort.js"></script>
    <script src="scripts/selection_sort.js"></script>
    <script src="scripts/insertion_sort.js"></script>
    <script src="scripts/merge_sort.js"></script>
    <script src="scripts/quick_sort.js"></script>
    <script src="scripts/heap_sort.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="scripts/indexScript.js"></script>
    <script src="popup.js"></script>
</body>
</html>