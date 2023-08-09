<?php
include "../Controller/RegistrationProcess.php";

?>


<html>
    <head>
    

<link rel="stylesheet" type="text/css" href="../CSS/Registration.css">

    <?php echo '<h2 align="center"><u> Registration</u></h2>'  ?>
        <?php echo '<h4 align="center">All Values are Required(*)</h4>'?>
    </head>
    <body>
  
        <form action=""  method="post" >
        <?php echo '<table align="center">'?>
              <tr>
                  <td> <label for="fname"><p id="labels" >First Name:</p></label></td>
                  <td> <input type="text" id="fname" name="fname" placeholder="Enter your first name" ><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$fnameerr."</strong>";
                  ?></td>
                  
              </tr> 

              <tr>
                  <td> <label for="lname"><p id="labels" >Last Name:</p></label></td>
                  <td> <input type="text" id="lname" name="lname" placeholder="Enter your last name" ><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$lnameerr."</strong>";
                  ?></td>
                  
              </tr> 
              
              <tr>
                <td> <label for="age"><p id="labels" >Age:</p></label> </td>
                <td> <input type="number" id="age" name="age"  min="1" placeholder="Enter your age"> <sup><strong>*</strong></sup>
                <?php
                  echo "<strong>".$ageerr."</strong>";
                  ?></td>
            </tr>

            <tr>
                  <td> <label for="city"><p id="labels" >City:</p></label></td>
                  <td> <input type="text" id="City" name="city" placeholder="Enter your city" ><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$cityerr."</strong>";
                  ?></td>
                  
              </tr> 

              <tr>
                  <td> <label for="street"><p id="labels" >Street:</p></label></td>
                  <td> <input type="text" id="Street" name="street" placeholder="Enter your Street" ><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$streeterr."</strong>";
                  ?></td>
                  
              </tr> 
            <tr>
                <td> <label for="gender"><p id="labels" >Gender:</p></label> </td>
                <td><input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label>
                <input type="radio" id="others" name="gender" value="Others">
                    <label for="others">Others</label><sup><strong>*</strong></sup>
                    <?php
                  echo "<strong>".$gendererr."</strong>";
                  ?></td>
            </tr>

            <tr>
                <td> <label for="phnNo"><p id="labels" >Phone Number:</p></label> </td>
                <td> <input type="text" id="phnNo" name="phnNo" min="0"  placeholder="Enter your phone number" > <sup><strong>*</strong></sup>
                <?php
                  echo "<strong>".$phnNoerr."</strong>";
                  ?></td>
            </tr>
            
            <tr>
                <td> <label for="email"><p id="labels" >Email:</p></label> </td>
                <td> <input type="text" id="email" name="email" placeholder="Enter your email" > <sup><strong>*</strong></sup>
                <?php
                  echo "<strong>".$emailerr."</strong>";
                  ?></td>
            </tr> 
            
    
          <tr>
          
          <tr>
              <td> <label for="password"><p id="labels" >Password:</p></label> </td>
              <td> <input type="password" id="password" name="password" placeholder="Enter an strong password" ><sup><strong>*</strong></sup> 
              <?php
                   echo "<strong>".$passerr."</strong>";
                  ?></td>
          </tr>
          </tr>
         
         <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         
         
         <tr>
             <td></td>

            
        <td><input type="submit" name="Submit"  value="Submit" class="button submitbutton">
       <input type="reset" name="Reset" class="button resetbutton"></td>
       </tr>

       <tr>
         <td></td>
         <td>
         <?php
                  echo $dataerr;
                  ?>

         </td>


       </tr>
       <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         <tr>
             <td> </td>
         </tr>
         
         
         <tr>
             <td> </td>  
             <td>Already Have an Account?<a href="Login.php"> Login here</a>   </td></tr>
            </table>
        </form>

    </body>
</html>

