<?php
//echo'<div w3-include-html="menu.html"></div>';

session_start();
//$_SESSION["favcolor"] = "green";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include 'menu.php';

?>
<!DOCTYPE html>
<html lang="en">
    <title>HighEd</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <style>
        body {font-family: "Arial", sans-serif}
        .mySlides {display: none}
    </style>
    <body>

        <!-- Navbar -->

        <div w3-include-html="menu.html"></div>
        <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT</a>
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PROGRAMMES</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
        </div>

        <!-- Page content -->
        <div class="w3-content" style="max-width:2000px;margin-top:46px">

            <!-- Automatic Slideshow Images -->

            <div class="w3-display-container w3-center">

                <img src="graduate.png" style="width:100%;height:700px">
                <div class="w3-text-black w3-hide-small w3-display-middle " style='font-size:160px; font-family: "Amatic SC", sans-serif;'>

                    <strong>HighEd</strong><br>
                    <img src="logo.png" alt="Logo" style="width:205px; height:225px"><br>
                    <div class="w3-cyan w3-text-white w3-hide-small " style="font-size:60px">
                        Pursue Your Dreams
                        <!--
                        <p><b>We had the best time playing at Venice Beach!</b></p>
                        -->
                    </div>

                    <!--
                    <p><b>We had the best time playing at Venice Beach!</b></p>
                    -->
                </div>


            </div>

            <!--
            <div class="mySlides w3-display-container w3-center">
              <img src="/graduates2.jpg" style="width:100%">
              <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>New York</h3>
                <p><b>The atmosphere in New York is lorem ipsum.</b></p>
              </div>
            </div>
            <div class="mySlides w3-display-container w3-center">
              <img src="graduates3.jpg" style="width:100%">
              <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>Chicago</h3>
                <p><b>Thank you, Chicago - A night we won't forget.</b></p>
              </div>
            </div>
            -->
            <!-- The About Section -->
            <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
                <h2 class="w3-wide">ABOUT</h2>
                <p class="w3-opacity"><i>Your No. 1 Higher Education System</i></p>
                <p class="w3-justify">Now students no need to browse on university websites one by one. We are here as a centralised platform to ease the process of
                    choosing a suitable programmes for you.
                    We have collaborated with a wide range of well known and high ranked universities across Malaysia. Thus we have lots variety of programmes to offer to you!</p>
                <div class="mySlides w3-display-container w3-center">
                    <div class="w3-row w3-padding-32">
                        <div class="w3-third">
                            <!--
                            <p><b>The University of Nottingham</b></p>
                            -->
                            <img src="notty.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                        <div class="w3-third">
                            <!--
                          <p><b>Help University</b></p>
                            -->
                            <img src="help.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                        <div class="w3-third">
                            <!--
                          <p><b>Monash University</b></p>
                            -->
                            <img src="monash.png" class="w3-round" alt="Random Name" style="width:60%">
                        </div>
                    </div>
                </div>
                <div class="mySlides w3-display-container w3-center">
                    <div class="w3-row w3-padding-32">
                        <div class="w3-third">
                            <!--
                            <p><b>The University of Nottingham</b></p>
                            -->
                            <img src="oum.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                        <div class="w3-third">
                            <!--
                          <p><b>Help University</b></p>
                            -->
                            <img src="um.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                        <div class="w3-third">
                            <!--
                          <p><b>Monash University</b></p>
                            -->
                            <img src="uum.png" class="w3-round" alt="Random Name" style="height:30%;width:30%">
                        </div>
                    </div>
                </div>
                <div class="mySlides w3-display-container w3-center">
                    <div class="w3-row w3-padding-32">
                        <div class="w3-third">
                            <!--
                            <p><b>The University of Nottingham</b></p>
                            -->
                            <img src="uthm.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                        <div class="w3-third">
                            <!--
                          <p><b>Help University</b></p>
                            -->
                            <img src="usm.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                        </div>
                        <div class="w3-third">
                            <!--
                          <p><b>Monash University</b></p>
                            -->
                            <img src="ytm.png" class="w3-round" alt="Random Name" style="width:60%">
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Tour Section -->
            <div class="w3-cyan" id="tour">
                <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                    <h2 class="w3-wide w3-center">PROGRAMMES & DATELINES</h2>
                    <p class="w3-opacity w3-center"><i>Remember to sign up first!</i></p><br>

                    <ul class="w3-ul w3-border w3-white w3-text-grey">
                        <li class="w3-padding">2019 May intake<span class="w3-tag w3-red w3-margin-left">Close soon</span><a href="#" class="w3-badge w3-black w3-right w3-margin-right">></a></li>
                        <li class="w3-padding">2019 September intake<span class="w3-tag w3-red w3-margin-left">Open</span><a href="#" class="w3-badge w3-black w3-right w3-margin-right">></a></li>
                        <li class="w3-padding">2020 January intake <span class="w3-tag w3-red w3-margin-left" >Open</span><a href="#" class="w3-badge w3-black w3-right w3-margin-right">></a></li>
                        <li class="w3-padding">2020 May intake <span class="w3-tag w3-black w3-right w3-margin-right">Open soon</span></li>
                    </ul>
                    <br>
                    <p class="w3-red w3-center w3-large">Featured Programmes</p><br>
                    <div class="w3-row-padding w3-padding-2" style="">
                        <div class="w3-third w3-margin-bottom">
                            <!--
                            <img src=".png" alt="New York" style="width:100%" class="w3-hover-opacity">
                            -->
                            <div class="w3-container w3-white">
                                <p><b>Bachelor of Art</b><br>University of Nottingham</p>
                                <p class="w3-opacity">Close Date: Fri 27 Nov 2016</p>
                                <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display = 'block'">Apply</button>
                            </div>
                        </div>
                        <div class="w3-third w3-margin-bottom">
                            <!--
                            <img src=".jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
                            -->
                            <div class="w3-container w3-white">
                                <p><b>Bachelor of Business</b><br>Open University</p>
                                <p class="w3-opacity">Close Date: Sat 28 Nov 2016</p>
                                <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display = 'block'">Apply</button>
                            </div>
                        </div>
                        <div class="w3-third w3-margin-bottom">
                            <!--
                            <img src=".png" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
                            -->
                            <div class="w3-container w3-white">
                                <p><b>Bachelor of Psychology</b><br>Help University</p>
                                <p class="w3-opacity">Close Date: Sun 29 Nov 2016</p>
                                <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display = 'block'">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <!--   Ticket Modal -->
            <div id="ticketModal" class="w3-modal">
                <div class="w3-modal-content w3-animate-top w3-card-4">
                    <header class="w3-container w3-teal w3-center w3-padding-32">
                        <span onclick="document.getElementById('ticketModal').style.display = 'none'"
                              class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
                    </header>
                    <div class="w3-container">
                        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
                        <input class="w3-input w3-border" type="text" placeholder="How many?">
                        <p><label><i class="fa fa-user"></i> Send To</label></p>
                        <input class="w3-input w3-border" type="text" placeholder="Enter email">
                        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
                        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display = 'none'">Close <i class="fa fa-remove"></i></button>
                        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
                    </div>
                </div>
            </div>


            <!-- The Contact Section -->
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
                <h2 class="w3-wide w3-center">CONTACT</h2>
                <p class="w3-opacity w3-center"><i>Got inquiries? Drop a note!</i></p>
                <div class="w3-row w3-padding-32">
                    <div class="w3-col m6 w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker" style="width:30px"></i> Kuala Lumpur, 50100<br>
                        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
                        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
                    </div>
                    <div class="w3-col m6">
                        <form action="/action_page.php" target="_blank">
                            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                                </div>
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                                </div>
                            </div>
                            <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                            <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- End Page Content -->
        </div>

        <!-- Image of location/map -->
        <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

        <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
            <p class="w3-medium">Powered by <a href="layout3.html" target="_blank">HighEd</a></p>
        </footer>

        <script>

            // Automatic Slideshow - change image every 4 seconds
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 4000);
            }

            // Used to toggle the menu on small screens when clicking on the menu button
            function myFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }

            // When the user clicks anywhere outside of the modal, close it
            var modal = document.getElementById('ticketModal');
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            function includeHTML() {
                var z, i, elmnt, file, xhttp;
                /* Loop through a collection of all HTML elements: */
                z = document.getElementsByTagName("*");
                for (i = 0; i < z.length; i++) {
                    elmnt = z[i];
                    /*search for elements with a certain atrribute:*/
                    file = elmnt.getAttribute("w3-include-html");
                    if (file) {
                        /* Make an HTTP request using the attribute value as the file name: */
                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4) {
                                if (this.status == 200) {
                                    elmnt.innerHTML = this.responseText;
                                }
                                if (this.status == 404) {
                                    elmnt.innerHTML = "Page not found.";
                                }
                                /* Remove the attribute, and call this function once more: */
                                elmnt.removeAttribute("w3-include-html");
                                includeHTML();
                            }
                        }
                        xhttp.open("GET", file, true);
                        xhttp.send();
                        /* Exit the function: */
                        return;
                    }
                }
            }
            includeHTML();
        </script>
    </body>
</html>
