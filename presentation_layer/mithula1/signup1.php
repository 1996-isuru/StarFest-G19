<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
  <title>starfeast</title>
  <meta charset="utf-8">
  <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
  <!-- <title>Multi Step Form | CodingNepal</title> -->
  <link rel="stylesheet" href="style.css">
  <script src="js.js"></script>
</head>
<body>
  <div class="container">
    
    <div style="text-align:center;margin-top:40px;">
      <span class="bullet bullet1">1</span>
      <span class="step"></span>
      <span class="bullet">2</span>
      <span class="step"></span>
     
    </div>

 <br>
 <br>
  <div class="form-outer">
    <form id="regForm" action="">
    <div class="page">
      <div class="title">
        <b>Choose your desired role</b>
      </div><br>
    <div class="label label1">
      <input type="radio" id="role1" name="role1" value="eventorganizer">
      <b>Event Organizer </b>  - Organize your event with Starfeast
    </div>
    <br>
    <div class="label label1">
      <input type="radio" id="role1" name="role1" value="eventorganizer">
      <b>Service Provider</b> - Register as a service provider
    </div>
    <br>
    <div class="label label1">
      <input type="radio" id="role1" name="role1" value="eventorganizer">
      <b>Event Participant</b> - Register for on event at Starfest
    </div>
    <br>                    
    <div class="field btns">
      <button class="button button1" >Help</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <div class="page">
   
    <div class="label label2" >
       First Name 
      <input type="text" size="60">
    </div><br>
   
     <div class="label label2">
      Last Name
      <input type="text" size="60" > 
    </div> <br>
    <div class="label label2">
       User  name
       <input type="text" size="60"> 
    </div> <br>
  
    <div class="label label2">
       Password
       <input type="password" size="60">
    </div>
  <br>
     
    <div class="label label2">
      Repeat Password
      <input type="password" size="60">
    </div>
  <br>
    
    <div class="label label2">
      <input type="Checkbox" id="role1" name="role1" value="accept">
      <label for="role1"><b>Accept our Terms & Conditions</label>
      <input type="checkbox" id="role2" name="role2" value="accept1">
      <label for="role3">Accept our Privacy Policy</label><br>
    </div>  
  
    <div class="field btns">
      <button class="button button3" id="prevBtn" onclick="nextPrev(-1)">Back</button>
      <button class="next-1 next">Register</button>
    </div>
</div>
</form>
</div>
</div>
<!-- Somehow I got an error, so I comment the script tag, just uncomment to use -->
<!-- <script src="script.js"></script> -->

</body>
</html>
