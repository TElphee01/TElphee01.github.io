<!--
TElphee.com
This website is used as my personal showcase for coding experience by virtue of show rather than tell. 
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tanner Elphee - IT Professional">
    <meta name="author" content="Tanner Elphee">

    <title>Skills Search Tool!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

  <body id="page-top">
      
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Tanner Elphee - IT Professional</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="https://www.linkedin.com/in/tannerelphee/" target="_blank">Skill Search Tool</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="https://www.github.com/" target="_blank">Github Showcase</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#section5">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            
           <?php
        $SKILL_NAME = stripslashes($_POST['selectSkill']);
        $query= "select SKILL_ID, SKILL_NAME, SKILL_LEVEL, DESCRIPTION from skills WHERE SKILL_NAME = '" . $SKILL_NAME . " '";
        $mysqli = new mysqli("localhost", "admin", "admin", "telphee");
        
        if ($mysqli->connect_errno){
            printf("connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
            if ($result = $mysqli->query($query)){
                $row_cnt = $result->num_rows;
                if ($row_cnt > 0) {
                    print "<table border=0>";
                    while ($row = $result->fetch_row()) {
                        print"<br><tr>";
                        print"<td><h1>Skill ID: " . $row[0] . "</h1></td>";
                        print"</tr>";
                        print"<tr>";
                        print"<td><h2>Skill: " 
                        . $row[1] . "</h1></td>";
                        print"</tr>";
                        print"<tr>";
                        print"<td><h2>Level of expertise: " 
                        . $row[2] . "</h2></td>";
                        print"</tr>";
                        print"<tr>";
                        print"<td>Skill Description: " . $row[3] . "</td>";
                        print"</tr>";
                        print"<tr>";
                        print"<td> </td>";
                        print"<tr>";
                        }
                    print "</table>";
                    $result->close();
                }
                else {
                    print "<p>Please try again! There are no record for this skill" . $SKILL_NAME . "</p>";
                }
            }
        $mysqli->close(); 
        ?>
        <!--end PHP code --> 
    
    <button name="return">
        <a href="Lab7_Pg1.html"> Return to <strong> Tanner Elphee's Agent Search</strong></a>
    </button>

                 
    <footer class="text1"><br>Created by: Tanner Elphee&trade; July 8th, 2020
    </footer>
    <!-- end of footer--> 
      
          <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
      
  
    </body> <!-- End BODY --> 
</html> <!-- End HTML -->