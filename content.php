
<?php require('logic.php'); ?>
 

 
  <div class="container">

    <div class="jumbotron-sand">
      
          
            
            <h2>XKCD Password Generator</h2>

            <h3>Your Current Password</h3><br />

            <h3>Your new password is:  <span class="label label-default"><?php echo ($password) ? $password: '' ;?> </span></h3><br />

            <h2>Generate new password</h2><br />

              <form method = "post" action="index.php">

              <label name="count">Number of Words</label>
              <input type="text" id="count" name="count" /><br />

              <label name="uppercase">Uppercase first letter?</label>
              <input type="checkbox" name="uppercase" value="checkbox" <?php echo ($uppercase)? 'checked="checked"' : ''; ?>/><br />

              <label name="symbol">Use a symbol?</label>
              <input type="checkbox" name="symbol" value="symbol" /><br />

              <label name="number">Include a number?</label>
              <input type="checkbox" name="number" value="number" /><br />


             
              <input type="submit" name="submit" value="submit"/> <br/>
             
              </form>
              

          </div>
      </div>
    

</div>
