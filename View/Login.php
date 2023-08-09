<?php
include "../Controller/LoginCheck.php";
?>


<html>
    <head>
    
    

    <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
    <?php echo '<h2 align="center"><u>Login</u></h2>'  ?> 
        <?php echo '<h4 align="center">All Values are Required(*)</h4>'?>
    </head>
    <body>
    
        <form action=""  method="post" >
        <div id="logindiv">
        <?php echo '<table align="center" width="350" >'?>
              <tr>
                  <td> <label class="user" for="email"><p id="labels" >Email:</p></label> </td>
                  <td> <input type="text" id="email" name="email"><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$emailerr."</strong>";
                  ?></td>
                  
              </tr> 

              <tr>
                  <td> <label class="Password" for="pass"><p id="labels" >Password:</p></label></td>
                  <td> <input type="password" id="pass" name="pass"><sup><strong>*</strong></sup>
                  <?php
                  echo "<strong>".$passerr."</strong>";
                  ?></td>
                  
              </tr> 
              <tr>
             <td> </td>
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

            
        <td><input type="submit" name="Login"  value="Login"  class="submit">
       
       </tr>
       <tr>  
           <td> </td>
</tr>

       <tr>
         <td></td>
         <td>
         <?php 
         echo "<strong>".$loginerr."</strong>"
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
             <td> <a href="Registration.php">Want to Resigter?</a>  </td></tr>
            </table>
            </div>
        </form>
        

    </body>
</html>

