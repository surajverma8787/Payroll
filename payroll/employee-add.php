<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-aqua w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <div class="w3-container w3-dark-grey">
    <h4>Menu</h4>
    </div>
    <img src="images/payroll.png" alt="Snow" style="width:100%;padding-top: 15px;padding-bottom: 15px">
    <div class="w3-container w3-dark-grey">
    <h4>Payroll system</h4>
    </div>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    
      
  </div>
  <div class="w3-bar-block">
      
      <dl>
          <dt><a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> </dt>
  <dt><a href="department.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Department</a> </dt>
          <dd></dd>
    <dt><a href="employee.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-red">  Employee  </a></dt>
          
          <dt><a href="employee-payment.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment Parameters</a> </dt>
          <dt><a href="employee-payslip.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pay slip</a> </dt>
          <dt><a href="employee-setsalary.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Set salary</a> </dt>
          <dt><a href="employee-payhistory.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment history</a> </dt>
          
          
          
</dl>
      
    
     
   
    
    
    
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Payroll system</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:290px;margin-right:-10px;margin-top: -5px;margin-bottom: 0px">

  <!-- Header -->
      
      <div class="w3-display-container w3-text-blue" style="font-size: 50px">
          <img src="images/employee2.jpg" alt="Lights" style="width:100%" style="height: 150px">
          <!-- <div class="w3-display-middle w3-large" > <h1 >Welcome to Payroll system</h1></div> -->
      </div>
      <div class="w3-container" style="padding: 50px 200px 20px 200px">
      
      
      <form class="w3-container" action="empinfophp.php" method="post">
          
                 <p><label>Employee id</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="empid"></p>
                 <p>
                     <label>Name</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="name">
                </p>
                <p>
                        <label>Date of Birth</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="date" name="dob">
                </p>
                <p>
                        <label>Gender</label><br>
                        <input type="radio" name="gender" value="male" checked> Male<br>
                        <input type="radio" name="gender" value="female"> Female<br>
                        
                </p>
                <p>
                        <label>Joining date</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="date" name="sdate">
                </p>
              
                 <p>
                     <label>Email</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="email" name="email"></p>
                 <p>
                     <label>Phone</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="text" name="phone"></p>
              
             
          <label>Jobtitle</label>
                 <select class="w3-input w3-light-grey w3-animate-input" name="jobtitle">
                  <option value="executive">Executive</option>
                   <option value="manager">Manager</option>
                   <option value="director">Director</option>
                    <option value="accountant">Accountant</option>
                      <option value="chief">Chief</option>
              </select>
               <p>
                     <label>Salary
                                       </label>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="salary"></p>
          <p><label>Bank Account No</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="bacc"></p>
          
                      
                 <p>
                     <label>Address</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="address">
                </p>
                 
                    <p><label>Employee Department</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="depid"></p>
          
                 
                 
                     <input type="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
                     
       
                 
               
            </form>
      
      
      
      </div>
   
      
          
  </div>

<!-- W3.CSS Container -->
<div class="w3-dark-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Reference <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3school</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>