
 <!DOCTYPE html>
<html>
<title>Smart Bus Tracker</title>

<link rel="stylesheet" href="CSS/A.css">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" href="CSS/A.css">

  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
input {
    width: 100%;
    height: 50px;

}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 20%;
    text-align: center;
}

td, th {
    
    text-align:center;
    padding: 10px;
    height: 10px;
}
a {
    color: black;
}

</style> 
<body class="w3-text-grey w3-grey" >


	<!-- <form action="B.php#available" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

 -->
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block   w3-teal w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="B.png" size="30px">
  <a href="" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-home w3-xxlarge "></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
 
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-dark-grey">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
 
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-white w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
  <div class="w3-container w3-padding-64" id="main">
    <header class="w3-display-container w3-padding-64 w3-center w3-light-grey" style="height:650px"; id="home">
    - 
<h1 class="w3-jumbo">Smart Bus Tracker</h1>

 <div class="w3-container">

    <form action="B.php#available"  method="POST">
        <div class="table-responsive " >  
    <table class="w3-table" >

          <tr>
            <td colspan="2">
              <div class="col-sm-12">
            <div class="w3-container w3-large">
                  <label for="ex1">From</label>
                  <input class="form-control" name="from" id="ex1" type="text" placeholder="Type Departure Place">
                </div>
              </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <div class="w3-container w3-large">         
                  <div class="col-xs-12">
                  <label for="ex1">To</label>
                  <input class="form-control" name="to" id="inputdefault" type="text" placeholder="Type Destination Place">
               </div>
             </div>
            </td>
           
        </tr>
          <tr>
          <td>  
            <div class="w3-container ">          
          <button type="submit" class="w3-button w3-teal w3-padding-large w3-round-large" role="button"><i class="fa fa-bus" style="font-size:15px"></i> Search a Bus</button>

        
          </div>        
          </td>

          <td>
            <div class="w3-container">
                <div class="w3-dropdown-hover w3-round-large">
                  <button onclick="myFunction()" class="w3-button w3-teal w3-round-large w3-padding-large">
                    <i class="fa fa-clone" style="font-size:15px"></i> More Details
                  </button>
                  <div id="Demo" class="w3-dropdown-content w3-bar-block w3-round-large">
                <a href="#" class="w3-bar-item w3-button w3-round-large">Add Date
                <input type="date" id="myDate" value=""></a>
<!-- <button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myDate").value;
    document.getElementById("demo").innerHTML = x;
}
</script>
 -->

      <a href="#" class="w3-bar-item w3-button w3-round-large">Add Time<input id="time" type="time"></a>
    </div>
  </div>
</div>

<script>
function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
                </div>
              </div>
            </td>
        </tr>
      </div>
</table> 
</div>
</form>
</div>
</div>


</header>
</div>

    <!-- Footer -->
  <!-- About Section -->
  <div class="w3-container  w3-padding-32" id="main">
  <header class="w3-display-container w3-padding-32 w3-center w3-grey" style="height:800px;" id="about">

    <br/><br> <div class="w3-container w3-text-teal "><h1 class="w3-jumbo"><span class="w3-hide-small"><b>Find available bus. Plan journey.  Reach Destination</b></span></h1></div>
	
      


   <h4  class="w3-text-black"> <p>We provide full-fledged online bus searching platform. The passenger can easily get to know about available buses as their necessity within a minute.Normally most of the passengers are unable to make their plans to go somewhere because of the un-shedule time of buses. Sometimes they have to wait more than hours, 
	their valuable time is wasted, they got bored and feddup with the waiting time, afterall they have to go in a crowded bus. Using the system we have made, you can 
easily get the details of the exact bus, route in the specific time you entered. The vision of the Smart Bus Tracker is to provide the easy and convinient way of getting the bus details.	
	You can also enjoy the more facitilies with our mobile app. </p></h4>
	
    <h3 class="w3-padding-16 w3-text-black"><b>With the efficient bus tracking system from Smart Bus Tracker, plan your journey early, save your valuable time,
	avoid waiting in long queue, find to your destination easily and enjoy your journey.</b></h3>
	
<div class="container">  
<table>
	<tr>
		<td>
			          
  <img src="images/3.jpg" class="img-circle" alt="Cinque Ter" width="304" height="236"> 

		</td>

		<td>
		            
  <img src="images/5.jpg" class="img-circle" alt="Cinque Ter" width="304" height="236"> 

		</td>

		<td>
	            
  <img src="images/6.jpg" class="img-circle" alt="Cinque Trre" width="304" height="236"> 
		</td>
	</tr>
</table>
</div>
    </header>
   </div>
  <!-- Contact Section -->

  <div class="w3-container w3-padding-4" id="main">
  <header class="w3-display-container w3-padding-64 w3-center w3-grey" style="height:650px;" id="contact">

 <br><br> <h2 class="w3-xxlarge">Do you have any questions in using Smart Bus Tracker?<br>
  Please do not hesitate to contact us. We are happy to help you.</h2>
	
  <h4><p></p>
  <br></h4>
  <br><br>
  <div class="w3-padding-2">
 <h6 class="w3-large"> <b>Say hello to Us</b><br>
 (+94)71-5657333<br>
   <br><b>
   Email</b><br>
 smarttrack@gmail.com<br>
   <br><b>
 Review</b> us at Facebook
    <br><br><b>
	Address</b><br>
Smart bus Travker Pvt.Ltd,<br>No 33,<br>Pambahinna
	</h6>
</div>
   
  <div class="w3-content w3-padding-32 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-instagram w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-snapchat w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-twitter w3-hover-opacity" style="font-size:36px"></i>
    <i class="fa fa-linkedin w3-hover-opacity" style="font-size:36px"></i>
    <p class="w3-medium">Powered by <a href="#" target="_blank" class="w3-hover-text-green">Smart Bus Tracker</a></p>
  <!-- End footer -->
  <div class="hr"></div>
</div>
</header>
</div>
 

<div class="w3-container">
<footer class="w3-content w3-grey w3-large">

<div class="container">
  <h2 class="w3-xxlarge text-align-center w3-padding-4" >Important Contacts</h2>
  <br>           
  <table class="table">
    <thead>
      <tr>
        <th>Depot</th>
        <th>Telephone</th>
        <th>Depot</th>
        <th>Telephone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Rathnapura</td>
        <td>045-2222281</td>
        <td>Balangoda </td>
        <td>045-2287281</td>
      </tr>
      <tr>
        <td>Bandarawela </td>
        <td>057-2222276</td>
        <td>Central Bus stand</td>
        <td>011-2329606</td>
      </tr>
      <tr>
        <td>Batticaloa </td>
        <td>065-2222724</td>
        <td>Kegalle </td>
        <td>035-2230070</td>
      </tr>
       <tr>
        <td>Kandy North</td>
        <td>081-2499148</td>
        <td>Kalutara </td>
        <td>034-2222281</td>
      </tr>
      <tr>
        <td>Badulla</td>
        <td>055-2222281</td>
        <td>Bibila  </td>
        <td>055-2265481</td>
      </tr>
      <tr>
        <td>Maharagama</td>
        <td>011-7706380</td>
        <td>Panadura</td>
        <td>038-2232082</td>
      </tr>
    </tbody>
  </table>

</div>


</footer>
</div>

   
  
<!-- END PAGE CONTENT -->
</div>

</body>
</html>


 