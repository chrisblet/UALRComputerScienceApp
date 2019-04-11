<?php
$username = $_COOKIE["Username"];
$password = $_COOKIE["Password"];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="gridstyle.css">
     <link rel="stylesheet" href="gridstyle.js">
    
    <title>UALR-Housing Information</title>
  </head>
  
   <body>
  
  <h1>Campus Living Options</h1>
    <p>Living on campus at UA Little Rock is an opportunity to be in the middle of it all. Being a part of a residential community has many perks, from a greater chance at academic success to a built-in social setting that is brimming with possibility.</p>
    <p>Each of the four halls and the new University Village are equipped with such amenities as furnished rooms, internet access, cable connections, and reserved student parking. And let’s not forget about laundry, fitness and recreation areas, and the UA Little Rock Dining Experience! So find out what’s in store for you at UA Little Rock – Discover UA Little Rock housing!</p>
    
    <h2>Diffrent Types of Housing</h2>
  
        <!-- The grid: three columns -->
      <div class="row">
        <div class="column" onclick="openTab('b1');" style="background:green;">North/South Hall</div>
        <div class="column" onclick="openTab('b2');" style="background:blue;">West/East Hall</div>
        <div class="column" onclick="openTab('b3');" style="background:red;">University Village</div>
      </div>
      
      <!-- The expanding grid (hidden by default) -->
      <div id="b1" class="containerTab" style="display:none;background:green">
        <!-- If you want the ability to close the container, add a close button -->
        <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
        <h2>North/South Hall</h2>
        <p>North and South Halls are apartment-style communities offering a more independent experience for upperclassmen who want first-class amenities plus the convenience of the campus location. Two- and four-bedroom units feature full kitchens, private bedrooms with a full-size bed, and washer/dryer appliances in each apartment.
            <h2>Commons Apartments Room Costs, Fall 2017:</h2>
            <p>The four bedroom apartments are $2,734 per semester including utilities. The two bedroom apartments are $2,999 per semester including utilities. There is a $16 activity fee per semester. Charges are billed to the student account and subject to the payment terms of the university.</p>
            
            <p>While UA Little Rock is closed during Thanksgiving, Christmas, and Spring Break, University Commons remains open at no additional charge to the resident. Restrictions apply. Refer to your lease for details.</p>
      </div>
      
      <div id="b2" class="containerTab" style="display:none;background:blue">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
        <h2>West/East Hall</h2>
        <p>West Hall is our new state-of-the-art residence hall. West Hall is composed of two 6-story buildings (one men’s and one women’s) connected by a central lobby. Both buildings have restricted card access, security systems, Ethernet/wireless internet, emergency phones, and dedicated public safety patrols.</p>
        <h3>Pod Style Communities</h3>
        <ul>Private hall baths</ul>
        <ul>Vanity & sink in every room</ul>
        <ul>Furnished double bedrooms</ul>
        <ul>Study room and coin-free washers & dryers</ul>
        <ul>Kitchen, living room, and dining room in each pod</ul>
      </div>
      
      <div id="b3" class="containerTab" style="display:none;background:red">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">x</span>
        <h2>University Vilage</h2>
        <p>This is some stuff about the vilage.</p>
      </div>





 <!-- Footer -->
 <div class="d-flex flex-column">
  <div id="footer">
    <div class="container-fluid ">
      <div class="row  ">
        <div class="col-md-3 col-sm-3 col-12"><br>
            <img src="img/UAFooter.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-4 col-sm-4 col-12"><br><br>
            <span class="align-middle"><p class="lead text-white">UA Little Rock is a metropolitan research university in the South that provides accessibility to a quality education through flexible learning and unparalleled internship opportunities.</p></span>
        </div>
          
        <div class ="col-md-3 col-sm-3 col-6 text-center">
          <p class="lead text-white">
              <br><br>
              2801 S. University Ave.<br> Little Rock, AR 72204 <br><br> <b>501-569-3000</b></p>
        </div>       
          <div class = "col-md-2 col-sm-2 col-6 text-right" id="links">           
            <div class="col-md-12   ">
              <h1 class="font-weight-light mt-4 text-white">Links</h1>
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="Scholarship.php">Scholarships</a></li>
                <li><a href="Housing.php">Housing</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="newuser.php">Register</a></li>
                <li><a href="Contact.php">Contact</a></li>
              </ul>
            </div>             
          </div>          
      </div>     
    </div>
  </div>
  
    <footer id="sticky-footer" class=" text-white">
    <div class="container text-center">
      <small>Copyright &copy; ToBeDeveloped</small>
        &emsp;
        &emsp;
    <a href ="https://www.facebook.com/ualittlerock"><i class ="fab fa-facebook-square fa-2x" ></i></a>
        <a href ="https://twitter.com/UALR"><i class ="fab fa-twitter-square fa-2x"></i></a>
        <a href ="https://www.youtube.com/user/UALRVIDEO"><i class ="fab fa-youtube-square fa-2x"></i></a>
        <a href ="https://www.linkedin.com/groups/University-Arkansas-Little-Rock-UALR-65628/"><i class ="fab fa-linkedin fa-2x"></i></a>
    </div>
  </footer>
</div>

<!-- END Footer -->









 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>