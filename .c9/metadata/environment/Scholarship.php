{"filter":false,"title":"Scholarship.php","tooltip":"/Scholarship.php","undoManager":{"mark":42,"position":42,"stack":[[{"start":{"row":84,"column":29},"end":{"row":84,"column":30},"action":"remove","lines":["o"],"id":8},{"start":{"row":84,"column":28},"end":{"row":84,"column":29},"action":"remove","lines":["l"]}],[{"start":{"row":84,"column":28},"end":{"row":84,"column":29},"action":"insert","lines":["o"],"id":9},{"start":{"row":84,"column":29},"end":{"row":84,"column":30},"action":"insert","lines":["l"]}],[{"start":{"row":89,"column":0},"end":{"row":89,"column":2},"action":"insert","lines":["  "],"id":10}],[{"start":{"row":89,"column":2},"end":{"row":89,"column":4},"action":"insert","lines":["  "],"id":11}],[{"start":{"row":89,"column":4},"end":{"row":89,"column":5},"action":"insert","lines":["<"],"id":12},{"start":{"row":89,"column":5},"end":{"row":89,"column":6},"action":"insert","lines":["h"]}],[{"start":{"row":89,"column":6},"end":{"row":89,"column":7},"action":"insert","lines":["1"],"id":13},{"start":{"row":89,"column":7},"end":{"row":89,"column":8},"action":"insert","lines":["<"]}],[{"start":{"row":89,"column":7},"end":{"row":89,"column":8},"action":"remove","lines":["<"],"id":14}],[{"start":{"row":89,"column":7},"end":{"row":89,"column":13},"action":"insert","lines":["></h1>"],"id":15}],[{"start":{"row":89,"column":8},"end":{"row":89,"column":9},"action":"insert","lines":[" "],"id":16},{"start":{"row":89,"column":9},"end":{"row":89,"column":10},"action":"insert","lines":["o"]},{"start":{"row":89,"column":10},"end":{"row":89,"column":11},"action":"insert","lines":["t"]},{"start":{"row":89,"column":11},"end":{"row":89,"column":12},"action":"insert","lines":["h"]},{"start":{"row":89,"column":12},"end":{"row":89,"column":13},"action":"insert","lines":["e"]},{"start":{"row":89,"column":13},"end":{"row":89,"column":14},"action":"insert","lines":["r"]}],[{"start":{"row":89,"column":13},"end":{"row":89,"column":14},"action":"remove","lines":["r"],"id":17},{"start":{"row":89,"column":12},"end":{"row":89,"column":13},"action":"remove","lines":["e"]},{"start":{"row":89,"column":11},"end":{"row":89,"column":12},"action":"remove","lines":["h"]},{"start":{"row":89,"column":10},"end":{"row":89,"column":11},"action":"remove","lines":["t"]},{"start":{"row":89,"column":9},"end":{"row":89,"column":10},"action":"remove","lines":["o"]}],[{"start":{"row":89,"column":9},"end":{"row":89,"column":10},"action":"insert","lines":["O"],"id":18},{"start":{"row":89,"column":10},"end":{"row":89,"column":11},"action":"insert","lines":["t"]},{"start":{"row":89,"column":11},"end":{"row":89,"column":12},"action":"insert","lines":["h"]},{"start":{"row":89,"column":12},"end":{"row":89,"column":13},"action":"insert","lines":["e"]},{"start":{"row":89,"column":13},"end":{"row":89,"column":14},"action":"insert","lines":["r"]}],[{"start":{"row":89,"column":14},"end":{"row":89,"column":15},"action":"insert","lines":[" "],"id":19},{"start":{"row":89,"column":15},"end":{"row":89,"column":16},"action":"insert","lines":["S"]},{"start":{"row":89,"column":16},"end":{"row":89,"column":17},"action":"insert","lines":["c"]},{"start":{"row":89,"column":17},"end":{"row":89,"column":18},"action":"insert","lines":["h"]},{"start":{"row":89,"column":18},"end":{"row":89,"column":19},"action":"insert","lines":["o"]},{"start":{"row":89,"column":19},"end":{"row":89,"column":20},"action":"insert","lines":["l"]},{"start":{"row":89,"column":20},"end":{"row":89,"column":21},"action":"insert","lines":["a"]},{"start":{"row":89,"column":21},"end":{"row":89,"column":22},"action":"insert","lines":["r"]},{"start":{"row":89,"column":22},"end":{"row":89,"column":23},"action":"insert","lines":["s"]},{"start":{"row":89,"column":23},"end":{"row":89,"column":24},"action":"insert","lines":["h"]},{"start":{"row":89,"column":24},"end":{"row":89,"column":25},"action":"insert","lines":["i"]},{"start":{"row":89,"column":25},"end":{"row":89,"column":26},"action":"insert","lines":["p"]},{"start":{"row":89,"column":26},"end":{"row":89,"column":27},"action":"insert","lines":["s"]}],[{"start":{"row":91,"column":0},"end":{"row":91,"column":2},"action":"insert","lines":["  "],"id":20}],[{"start":{"row":91,"column":2},"end":{"row":91,"column":4},"action":"insert","lines":["  "],"id":21}],[{"start":{"row":91,"column":4},"end":{"row":159,"column":10},"action":"insert","lines":["<div class = \"card\">","      <div class = \"card-body\">","            ","      <?php","\t\t\t$dbHost = \"connect-c9.ckrgpw7vzckl.us-east-2.rds.amazonaws.com\";","\t\t\t$dbUsername = \"tbdUser\";","\t\t\t$dbPassword = \"TBD_coolRanchDoritos\";","\t\t\t$dbName = \"tbd_Database\";","\t\t\t$dbPort = 3306;","\t\t\t","\t\t\t$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);","\t\t\t","\t\t\tif ($db->connect_error) ","\t\t\t{","\t\t\t die(\"Connection failed: \" . $db->connect_error);","\t\t\t}","\t\t","            $sql = \"SELECT * FROM scholarships;\";","            $result = mysqli_query($db, $sql);","    ","            $rcheck = mysqli_num_rows($result);","                ","            echo \"<table border='1'>","            ","             <style>","             th {","                  background-color: #6F2232;","                  color: white;","                }","                ","              td {","                    text-align: left;","                    padding: 4px;","                }","            ","            tr:nth-child(even) {background-color: #f2f2f2;}","           </style>","            ","            <tr>","            <th>Name</th>","            <th>Priority</th>","            <th>Deadline</th>","            <th>Description</th>","            <th>Type</th>","            </tr>\";","                ","            if($rcheck < 0)","            {","                echo \"Error: The table was empty\";","            }","            else","            {","                ","                while($row = mysqli_fetch_assoc($result))","                {","                    echo \"<tr>\";","                    echo \"<td>\" . $row['name'] . \"</td>\";","                    echo \"<td>\" . $row['priority'] . \"</td>\";","                    echo \"<td>\" . $row['final'] . \"</td>\";","                    echo \"<td>\" . $row['description'] . \"</td>\";","                    echo \"<td>\" . $row['type'] . \"</td>\";","                    echo \"</tr>\";","                }","                echo \"</table>\";","            }","            mysqli_close($con);","            ?>","        </div>","    </div>"],"id":22}],[{"start":{"row":91,"column":4},"end":{"row":92,"column":31},"action":"remove","lines":["<div class = \"card\">","      <div class = \"card-body\">"],"id":23}],[{"start":{"row":91,"column":2},"end":{"row":91,"column":4},"action":"remove","lines":["  "],"id":24},{"start":{"row":91,"column":0},"end":{"row":91,"column":2},"action":"remove","lines":["  "]},{"start":{"row":90,"column":0},"end":{"row":91,"column":0},"action":"remove","lines":["",""]},{"start":{"row":89,"column":32},"end":{"row":90,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":44,"column":4},"end":{"row":45,"column":31},"action":"insert","lines":["<div class = \"card\">","      <div class = \"card-body\">"],"id":25}],[{"start":{"row":89,"column":0},"end":{"row":90,"column":0},"action":"insert","lines":["",""],"id":26}],[{"start":{"row":90,"column":0},"end":{"row":90,"column":2},"action":"insert","lines":["  "],"id":27}],[{"start":{"row":90,"column":2},"end":{"row":90,"column":4},"action":"insert","lines":["  "],"id":28}],[{"start":{"row":90,"column":4},"end":{"row":90,"column":5},"action":"insert","lines":["p"],"id":29},{"start":{"row":90,"column":5},"end":{"row":90,"column":6},"action":"insert","lines":["a"]},{"start":{"row":90,"column":6},"end":{"row":90,"column":7},"action":"insert","lines":["d"]},{"start":{"row":90,"column":7},"end":{"row":90,"column":8},"action":"insert","lines":["d"]},{"start":{"row":90,"column":8},"end":{"row":90,"column":9},"action":"insert","lines":["i"]},{"start":{"row":90,"column":9},"end":{"row":90,"column":10},"action":"insert","lines":["n"]},{"start":{"row":90,"column":10},"end":{"row":90,"column":11},"action":"insert","lines":["g"]}],[{"start":{"row":90,"column":4},"end":{"row":90,"column":11},"action":"remove","lines":["padding"],"id":30},{"start":{"row":90,"column":4},"end":{"row":90,"column":22},"action":"insert","lines":["padding-top: 50px;"]}],[{"start":{"row":90,"column":22},"end":{"row":91,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":91,"column":0},"end":{"row":91,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":90,"column":17},"end":{"row":90,"column":19},"action":"remove","lines":["50"],"id":32},{"start":{"row":90,"column":17},"end":{"row":90,"column":18},"action":"insert","lines":["1"]},{"start":{"row":90,"column":18},"end":{"row":90,"column":19},"action":"insert","lines":["0"]}],[{"start":{"row":90,"column":4},"end":{"row":90,"column":22},"action":"remove","lines":["padding-top: 10px;"],"id":33}],[{"start":{"row":90,"column":2},"end":{"row":90,"column":4},"action":"remove","lines":["  "],"id":34},{"start":{"row":90,"column":0},"end":{"row":90,"column":2},"action":"remove","lines":["  "]},{"start":{"row":89,"column":0},"end":{"row":90,"column":0},"action":"remove","lines":["",""]},{"start":{"row":88,"column":78},"end":{"row":89,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":90,"column":8},"end":{"row":90,"column":9},"action":"remove","lines":[" "],"id":35}],[{"start":{"row":89,"column":4},"end":{"row":90,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":90,"column":0},"end":{"row":90,"column":4},"action":"insert","lines":["    "]},{"start":{"row":90,"column":4},"end":{"row":90,"column":5},"action":"insert","lines":["<"]},{"start":{"row":90,"column":5},"end":{"row":90,"column":6},"action":"insert","lines":["b"]},{"start":{"row":90,"column":6},"end":{"row":90,"column":7},"action":"insert","lines":["r"]},{"start":{"row":90,"column":7},"end":{"row":90,"column":8},"action":"insert","lines":[">"]}],[{"start":{"row":90,"column":8},"end":{"row":90,"column":9},"action":"insert","lines":["<"],"id":39},{"start":{"row":90,"column":9},"end":{"row":90,"column":10},"action":"insert","lines":["b"]},{"start":{"row":90,"column":10},"end":{"row":90,"column":11},"action":"insert","lines":["r"]},{"start":{"row":90,"column":11},"end":{"row":90,"column":12},"action":"insert","lines":[">"]}],[{"start":{"row":16,"column":0},"end":{"row":31,"column":19},"action":"remove","lines":["      <!-- NAVBAR -->","       <nav class=\"navbar navbar-light\" id=\"mainNav\">","      <div class=\"container\">","          <a href=\"#page-top\"class=\"navbar-brand js-scroll-trigger\"><img src=\"img/navualr.png\"> UALR Scholarships </a>","          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">Menu <i class=\"fa fa-bars\"></i></button>","          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">","          <ul class=\"navbar-nav ml-auto\">","              <li class=\"nav-item\"><a href =\"index.php\" class=\"nav-link js-scroll-trigger\">Home Page</a></li>","              <li class=\"nav-item\"><a href =\"Housing.php\" class=\"nav-link js-scroll-trigger\">Housing Information</a></li>","              <li class=\"nav-item\"><a href =\"Login.php\" class=\"nav-link js-scroll-trigger\">Register/Login</a></li>","              <li class=\"nav-item\"><a href =\"Contact.php\" class=\"nav-link js-scroll-trigger\">Contact</a></li>","              </ul>","          </div><!-- END nabarResponsive -->","      </div><!-- END container -->","   </nav>","   <!-- NAVBAR --> "],"id":40},{"start":{"row":16,"column":0},"end":{"row":34,"column":23},"action":"insert","lines":["      <!-- NAVBAR -->","   <nav class=\"navbar navbar-light\" id=\"mainNav\">","      <div class=\"container\">","          <a href=\"#page-top\"class=\"navbar-brand js-scroll-trigger\"><img src=\"img/navualr.png\"> Computer Science</a>","          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">Menu <i class=\"fa fa-bars\"></i></button>","          <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">","          <ul class=\"navbar-nav ml-auto\">","              <li class=\"nav-item\"><a href =\"Scholarship.php\" class=\"nav-link js-scroll-trigger\">Scholarship Opportunities</a></li>","              <li class=\"nav-item\"><a href =\"Housing.php\" class=\"nav-link js-scroll-trigger\">Housing Information</a></li>","              <li class=\"nav-item\"><a href =\"Login.php\" class=\"nav-link js-scroll-trigger\">Register/Login</a></li>","               <li class=\"nav-item\"><a href =\"Myprofile.php\" class=\"nav-link js-scroll-trigger\">My Profile</a></li>","               <li class=\"nav-item\"><a href =\"Class List & Degree Plan.php\" class=\"nav-link js-scroll-trigger\">Degree/Classes</a></li>","                <li class=\"nav-item\"><a href =\"logout.php\" class=\"nav-link js-scroll-trigger\">Log out</a></li>","              <li class=\"nav-item\"><a href =\"Contact.php\" class=\"nav-link js-scroll-trigger\">Contact</a></li>","              </ul>","          </div><!-- END nabarResponsive -->","      </div><!-- END container -->","   </nav>","   <!-- END NAVBAR --> "]}],[{"start":{"row":19,"column":96},"end":{"row":19,"column":112},"action":"remove","lines":["Computer Science"],"id":41},{"start":{"row":19,"column":96},"end":{"row":19,"column":97},"action":"insert","lines":["S"]},{"start":{"row":19,"column":97},"end":{"row":19,"column":98},"action":"insert","lines":["c"]},{"start":{"row":19,"column":98},"end":{"row":19,"column":99},"action":"insert","lines":["h"]},{"start":{"row":19,"column":99},"end":{"row":19,"column":100},"action":"insert","lines":["o"]},{"start":{"row":19,"column":100},"end":{"row":19,"column":101},"action":"insert","lines":["l"]},{"start":{"row":19,"column":101},"end":{"row":19,"column":102},"action":"insert","lines":["a"]},{"start":{"row":19,"column":102},"end":{"row":19,"column":103},"action":"insert","lines":["r"]},{"start":{"row":19,"column":103},"end":{"row":19,"column":104},"action":"insert","lines":["s"]},{"start":{"row":19,"column":104},"end":{"row":19,"column":105},"action":"insert","lines":["h"]},{"start":{"row":19,"column":105},"end":{"row":19,"column":106},"action":"insert","lines":["i"]},{"start":{"row":19,"column":106},"end":{"row":19,"column":107},"action":"insert","lines":["p"]},{"start":{"row":19,"column":107},"end":{"row":19,"column":108},"action":"insert","lines":["s"]}],[{"start":{"row":165,"column":0},"end":{"row":212,"column":19},"action":"remove","lines":["<!-- Footer -->"," <div class=\"d-flex flex-column\">","  <div id=\"footer\">","    <div class=\"container-fluid \">","      <div class=\"row  \">","        <div class=\"col-md-3 col-sm-3 col-12\"><br>","            <img src=\"img/UAFooter.png\" class=\"img-fluid\" alt=\"Responsive image\">","        </div>","        <div class=\"col-md-4 col-sm-4 col-12\"><br><br>","            <span class=\"align-middle\"><p class=\"lead text-white\">UA Little Rock is a metropolitan research university in the South that provides accessibility to a quality education through flexible learning and unparalleled internship opportunities.</p></span>","        </div>","          ","        <div class =\"col-md-3 col-sm-3 col-6 text-center\">","          <p class=\"lead text-white\">","              <br><br>","              2801 S. University Ave.<br> Little Rock, AR 72204 <br><br> <b>501-569-3000</b></p>","        </div>       ","          <div class = \"col-md-2 col-sm-2 col-6 text-right\" id=\"links\">           ","            <div class=\"col-md-12   \">","              <h1 class=\"font-weight-light mt-4 text-white\">Links</h1>","              <ul class=\"list-unstyled\">","                <li><a href=\"index.php\">Home</a></li>","                <li><a href=\"Scholarship.php\">Scholarships</a></li>","                <li><a href=\"Housing.php\">Housing</a></li>","                <li><a href=\"Login.php\">Login</a></li>","                <li><a href=\"newuser.php\">Register</a></li>","                <li><a href=\"Contact.php\">Contact</a></li>","              </ul>","            </div>             ","          </div>          ","      </div>     ","    </div>","  </div>","  ","    <footer id=\"sticky-footer\" class=\" text-white\">","    <div class=\"container text-center\">","      <small>Copyright &copy; ToBeDeveloped</small>","        &emsp;","        &emsp;","    <a href =\"https://www.facebook.com/ualittlerock\"><i class =\"fab fa-facebook-square fa-2x\" ></i></a>","        <a href =\"https://twitter.com/UALR\"><i class =\"fab fa-twitter-square fa-2x\"></i></a>","        <a href =\"https://www.youtube.com/user/UALRVIDEO\"><i class =\"fab fa-youtube-square fa-2x\"></i></a>","        <a href =\"https://www.linkedin.com/groups/University-Arkansas-Little-Rock-UALR-65628/\"><i class =\"fab fa-linkedin fa-2x\"></i></a>","    </div>","  </footer>","</div>","","<!-- END Footer -->"],"id":42},{"start":{"row":165,"column":0},"end":{"row":215,"column":19},"action":"insert","lines":[" <!-- Footer -->"," <div class=\"d-flex flex-column\">","  <div id=\"footer\">","    <div class=\"container-fluid \">","      <div class=\"row  \">","        <div class=\"col-md-3 col-sm-3 col-12\"><br>","            <img src=\"img/UAFooter.png\" class=\"img-fluid\" alt=\"Responsive image\">","        </div>","        <div class=\"col-md-4 col-sm-4 col-12\"><br><br>","            <span class=\"align-middle\"><p class=\"lead text-white\">UA Little Rock is a metropolitan research university in the South that provides accessibility to a quality education through flexible learning and unparalleled internship opportunities.</p></span>","        </div>","          ","        <div class =\"col-md-3 col-sm-3 col-6 text-center\">","          <p class=\"lead text-white\">","              <br><br>","              2801 S. University Ave.<br> Little Rock, AR 72204 <br><br> <b>501-569-3000</b></p>","        </div>       ","          <div class = \"col-md-2 col-sm-2 col-6 text-right\" id=\"links\">           ","            <div class=\"col-md-12   \">","              <h1 class=\"font-weight-light mt-4 text-white\">Links</h1>","              <ul class=\"list-unstyled\">","                <li><a href=\"index.php\">Home</a></li>","                <li><a href=\"Scholarship.php\">Scholarships</a></li>","                <li><a href=\"Housing.php\">Housing</a></li>","                <li><a href=\"Login.php\">Login</a></li>","                <li><a href=\"newuser.php\">Register</a></li>","                <li><a href=\"Contact.php\">Contact</a></li>","                <li><a href=\"Courses.php\">Courses</a></li>","                <li><a href=\"Userhome.php\">User Home</a></li>","                <li><a href=\"Clubs.php\">Clubs</a></li>","              </ul>","            </div>             ","          </div>          ","      </div>     ","    </div>","  </div>","  ","    <footer id=\"sticky-footer\" class=\" text-white\">","    <div class=\"container text-center\">","      <small>Copyright &copy; ToBeDeveloped</small>","        &emsp;","        &emsp;","    <a href =\"https://www.facebook.com/ualittlerock\"><i class =\"fab fa-facebook-square fa-2x\" ></i></a>","        <a href =\"https://twitter.com/UALR\"><i class =\"fab fa-twitter-square fa-2x\"></i></a>","        <a href =\"https://www.youtube.com/user/UALRVIDEO\"><i class =\"fab fa-youtube-square fa-2x\"></i></a>","        <a href =\"https://www.linkedin.com/groups/University-Arkansas-Little-Rock-UALR-65628/\"><i class =\"fab fa-linkedin fa-2x\"></i></a>","    </div>","  </footer>","</div>","","<!-- END Footer -->"]}],[{"start":{"row":217,"column":0},"end":{"row":217,"column":2},"action":"remove","lines":["  "],"id":43},{"start":{"row":216,"column":2},"end":{"row":217,"column":0},"action":"remove","lines":["",""]},{"start":{"row":216,"column":0},"end":{"row":216,"column":2},"action":"remove","lines":["  "]},{"start":{"row":215,"column":19},"end":{"row":216,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":192,"column":16},"end":{"row":192,"column":58},"action":"remove","lines":["<li><a href=\"Courses.php\">Courses</a></li>"],"id":44},{"start":{"row":192,"column":16},"end":{"row":192,"column":87},"action":"insert","lines":["<li><a href=\"Class_List_&_Degree_plan.php\">Classes and Degrees</a></li>"]}],[{"start":{"row":109,"column":2},"end":{"row":110,"column":0},"action":"insert","lines":["",""],"id":45},{"start":{"row":110,"column":0},"end":{"row":110,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":110,"column":2},"end":{"row":110,"column":4},"action":"insert","lines":["  "],"id":46}],[{"start":{"row":110,"column":4},"end":{"row":110,"column":6},"action":"insert","lines":["  "],"id":47}],[{"start":{"row":110,"column":6},"end":{"row":110,"column":8},"action":"insert","lines":["  "],"id":48}],[{"start":{"row":110,"column":8},"end":{"row":110,"column":10},"action":"insert","lines":["  "],"id":49}],[{"start":{"row":110,"column":10},"end":{"row":110,"column":45},"action":"insert","lines":["\t        \t$db->set_charset(\"utf8\");"],"id":50}],[{"start":{"row":110,"column":10},"end":{"row":110,"column":20},"action":"remove","lines":["\t        \t"],"id":51}],[{"start":{"row":110,"column":35},"end":{"row":111,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":111,"column":0},"end":{"row":111,"column":10},"action":"insert","lines":["\t\t        "]}]]},"ace":{"folds":[],"scrolltop":1344,"scrollleft":0,"selection":{"start":{"row":111,"column":10},"end":{"row":111,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":44,"state":"start","mode":"ace/mode/php"}},"timestamp":1557253059312,"hash":"e0b280f5809a284aad506fe65a93a9b4cbf4e768"}