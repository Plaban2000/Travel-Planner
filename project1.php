<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="project1.css">
</head>
<body>
    <div class="box12">
        <div class="box">
            <p id="n6">TRIVA</p>
            <div class="dropdown">
            <button class="button1 button1" >Booking<span id="dropicon" onclick="dropdown()">🔽</span></button> 
            <div class="dropdown-content" id="drop">
              <button id="hotel"><a href="http://localhost/Hacktonix1/BookingForm/index1.php">Hotel Book</a></button>
              <button id="trek"><a href="http://localhost/Hacktonix1/JoinTrekGrp/index.php">Join Trek Group</a></button>

          </div>
          </div>
            <button class="button2"><a href="Reviews1.html" style="color: white;">About</a></button>
            <button class="button3"><a href="Reviews1.html" style="color: white; font-size: 30px;">contacts</a></button>
            <button class="button4"><a href="Blog.html" style="color: white;font-size: 30px;">Reviews</a></button>
            <button onclick="window.location.href='index.php';" style="width: 100px; margin: -32px 1150px; height: 50px;
            border: none; 
             font-family: Baskerville Old Face; font-size: 25px; 
            background-color: rgba(245, 245, 245, 0);
            color: white; font-weight: bold; cursor: pointer;
            ">Log in</button>
            <script>
            var modal = document.getElementById('id01');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
            <button onclick="window.location.href='register.php';" style="width: 100px; margin: -32px 1250px; height: 50px;
            border: none; 
             font-family: Baskerville Old Face; font-size: 25px; 
            background-color: rgba(245, 245, 245, 0);
            color: rgba(254, 254, 254, 0.957); font-weight: bold; cursor: pointer;
            ">Sign&nbspUp</button>
            <div id="id011" class="modal1">
                <form class="modal-content1 animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id011').style.display='none'" class="close1"
                            title="Close Modal">&times;</span>
                    </div>
                    <label for="uname1" style="font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
                font-size: 25px;
                margin: 0px 310px;
                color: rgb(251, 248, 248);
                ">Username</label>
                    <input type="text1" style="color: whitesmoke;" placeholder="Enter Username" name="uname1" required>


                    <label for="psw1" style="font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
                font-size: 25px;
                color: rgb(251, 248, 248);
                margin: 0px 310px; 
                ">Password</label>
                    <input type="password1" style="color: whitesmoke;
                " placeholder="Enter Password" name="psw1" required>


                    <label for="psw-repeat" style="font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
                font-size: 25px;
                color: rgb(251, 248, 248);
                margin: 0px 270px;">Repeat&nbspPassword</label>
                    <input type="password1" style="color: whitesmoke" placeholder="Repeat Password" name="psw1-repeat"
                        required>


                    <button type="submit" style="font-size: 30px; 
                font-family: 'Times New Roman', Times, serif;
                font-weight: bold;
                color: white;
                background-color: rgba(245, 245, 220, 0);
                margin: 0px 300px;">Sign&nbspUp</button>




                    <input type="checkbox" checked="checked" name="remember" style="margin-left: 285px;
                margin-top: 3%;">
                    <p style="margin-left: 310px;
                margin-top: -3%;
                color: #ffffff;
                font-family: 'Times New Roman', Times, serif;
                font-size: 20px;">Remember me</p>

                </form>
            </div>
            <script>
            var modal1 = document.getElementById('id011');
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal.style.display = "none";
                }
            }
            </script>
        </div>
        <p style="font-size: 350%;font-family: Monotype Corsiva;
            font-weight: bold;text-align: center;margin-top: 180px;color: rgb(255, 255, 255);">
            Some Beutiful Paths Can't Be<br> 
            Discovered Without Getting Lost</p> 
            
          
            <form class="example" action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            

    </div>
    <div class="b2">
                <p style="font-size: 350%; 
                font-family: Monotype Corsiva; color: black;text-align: center;font-weight: bold;margin-top: 10%;">
                    Explore More With Us
                </p>
            </div>
    </div>
    <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    
                  <p style="font-family: 'Times New Roman', Times, serif;
                  font-size: 26px; color: white;">
                  India is a country that is steeped in rich cultural heritage, and its numerous heritage sites are a testament to its glorious past. From the magnificent Taj Mahal in Agra to the ancient ruins of Hampi in Karnataka, India's heritage sites are a treasure trove of historical and cultural significance.

                  Some of the most popular heritage sites in India include the Red Fort in Delhi, the ancient city of Varanasi, the Khajuraho Temples in Madhya Pradesh, the Ajanta and Ellora Caves in Maharashtra, and the Konark Sun Temple in Odisha.
                  
                  These sites are not only significant for their architectural beauty but also for the stories and legends associated with them. They offer visitors a glimpse into India's rich history, culture, and traditions.
                  
                  India has a total of 38 UNESCO World Heritage Sites, making it one of the most culturally diverse countries in the world. Each of these sites has its own unique story to tell and is a reflection of the country's rich heritage and diversity.</p>
                  <button type="button" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;
                  color: rgb(255, 255, 255); background-color: transparent;
                  font-weight: bold;padding: 10px10px;"><a href="Heritage.html" style="color: white;">Explore More</a></button>
                </div>
              </div>
              <button class="b3" onclick="openNav()"><p style="font-family: 'Times New Roman', Times, serif; cursor: pointer; 
              font-size: 650%; color: rgba(218, 65, 65, 0.765); font-weight: bold;
              margin-top: -390px; border: rgba(198, 45, 45, 0) solid 10px;">Heritage</p></button>
              <script>
                let drop=1;
              function openNav() {
                document.getElementById("myNav").style.width = "100%";
              }
              function closeNav() {
                document.getElementById("myNav").style.width = "0%";
              }

              function dropdown()
              {
                if(drop==1){
                document.getElementById("drop").style.display = "block";
                  // document.getElementById("drop").innerHTML="DROP\nDown";
                  drop=0;
                }
                else{
                  document.getElementById("drop").style.display = "none";
                  drop=1;
                }
              }
              </script>


            <div id="myNav1" class="overlay1">
                <a href="javascript:void(0)" class="closebtn1" onclick="closeNav1()">&times;</a>
                <div class="overlay-content1">
                  <p style="font-family: 'Times New Roman', Times, serif;
                   font-size: 30px; color: white;">
                 Indian pilgrims travel to various pilgrimage sites throughout the country that hold immense religious and spiritual significance. The Char Dham Yatra, Vaishno Devi Temple, Golden Temple, Kumbh Mela, Jagannath Temple, Somnath Temple, and Shirdi Sai Baba Temple are some of the popular pilgrimage sites in India. Pilgrimage in India is not just limited to Hindus but also attracts people from other religions such as Buddhism, Jainism, and Islam. Pilgrims seek spiritual solace and experience the rich cultural and historical heritage of India.</p>
                 <button type="button" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;
                  color: white; background-color: transparent;
                  font-weight: bold;padding: 10px 10px;"><a href="Pilgrims.html" style="color: white;">Explore More</a></button>
                </div>
              </div>
              <button class="b4" onclick="openNav1()"><p style="font-family: 'Times New Roman', Times, serif; cursor: pointer; 
              font-size: 650%; color: rgba(218, 65, 65, 0.765); font-weight: bold;margin-top: -28%;
             border: rgba(198, 45, 45, 0) solid 10px;">Pilgrims</p></button>
              <script>
              function openNav1() {
                document.getElementById("myNav1").style.width = "100%";
              }
              function closeNav1() {
                document.getElementById("myNav1").style.width = "0%";
              }
              </script>
              <div id="myNav2" class="overlay2">
                <a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">&times;</a>
                <div class="overlay-content2">
                  <p style="font-family: 'Times New Roman', Times, serif;
                   font-size: 30px; color: white;">
                Trekking is a popular adventure activity that involves hiking or walking in the wilderness or mountains. It is an excellent way to explore the natural beauty of a place, test one's physical limits, and immerse oneself in the great outdoors. India is blessed with an abundance of stunning trekking destinations, such as the Himalayan range, the Western Ghats, and the Nilgiris. These regions offer a variety of trekking routes with varying degrees of difficulty, ranging from easy to challenging. Some of the most popular trekking routes in India include the Roopkund Trek in Uttarakhand, the Chadar Trek in Ladakh, the Valley of Flowers Trek in Uttarakhand, and the Kheerganga Trek in Himachal Pradesh. Trekking in India is an excellent way to experience the country's diverse natural beauty and is a must-do activity for adventure enthusiasts.</p>
                <button type="button" style="font-size: 25px; font-family: 'Times New Roman', Times, serif;
                color: whitesmoke; background-color: transparent;
                font-weight: bold;padding: 10px 10px;"><a href="Trecking.html" style= "color: white;">Explore More</a></button>
                </div>
              </div>
              <button class="b5" onclick="openNav2()"><p style="font-family: 'Times New Roman', Times, serif; cursor: pointer; 
              font-size: 650%; color: rgba(218, 65, 65, 0.765); font-weight: bold;margin-top: -28%;
              border: rgba(198, 45, 45, 0) solid 10px;">Treaking</p></button>
              <script>
              function openNav2() {
                document.getElementById("myNav2").style.width = "100%";
              }
              function closeNav2() {
                document.getElementById("myNav2").style.width = "0%";
              }
              </script>
            <div class="b7">
                <div class="box25">
                  <p id="n6">
                  </p>
                  <button class="button10" >Contacts</button>
                  <div class="b61"></div>
                  <p id="c">+91 9800282049
                  </p>
                  <div class="b62"></div>
                  <p id="c1">Webname1234@gmail.in
                  </p>
                  <button class="button11" >Follow Us</button>
                  <a href="https://www.facebook.com/">
                  <div class="b01"></a>
                    
                      <div class="b02">
                          <div class="b03">
                              <div class="b04"></div>
                          </div>
                      </div>
                  </div>
                  <p style="margin-top: -355px; color: whitesmoke; margin-left: 875px; font-size: 30px;
                  font-family: 'Times New Roman', Times, serif;">About</p>
                  <p style="margin-top: -10px; color: whitesmoke; margin-left: 500px; font-size: 20px;
                  font-family: 'Times New Roman', Times, serif; padding: 30px 230px;">Our travel planer will help that people who are basically  belonging from India and not belonging from India also.
                                                                  That  website will provide the current updates and how to reach that  
                                                                  particular place have been selected by traveler and in which  caravansary they will take rest they can do the full planning by  this web site.
</p>
                  </div>
                  <div class="b06"></div>
            </div>
</body>
</html>