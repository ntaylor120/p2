
<?php require('logic.php'); ?>


 <div class="container">
   <!--
    <div class="jumbotron-sand">
     <div class="row">
      <div class="col-xs-6 pull-left"> 
            
        <h3>PROJECT 2</h3>
        <h5>CSCI E-15: Dynamic Web Applications</h5>
        <h5>Student:  Nancy Taylor</h5>
        <h3>Password Generator</h3>
       <p><a class="btn btn-default btn-lg" role="button" href="http://xkcd.com/936/" target="0">Learn more about XKCD Passords &raquo;</a></p>
        </div>
        <div class="col-xs-3 pull-right">
          <img src="images/jackieKitten.jpg" class="img-responsive" alt="Jackie Kitten">
          <h6>Jackie Kitten</h6>
         
        </div>
        </div> 
      </div>
    </div>

  <div class="container">-->

    <div class="jumbotron-sand">
      
          
            <form>
            <h3>XKCD Password Generator</h3>

            <h4>Your current password</h4><br />

            <h4>Your password is: </h4><br />

            <h4>Generate new password</h4><br />

              <form method = "POST" action="/index.php">

              <label name="count">Number of Words</label>
              <input type="text" id="count" name="count" /><br />

              <label name="uppercase">Uppercase first letter?</label>
              <input type="checkbox" name="uppercase" value="uppercase" /><br />

              <label name="symbol">Use a symbol?</label>
              <input type="checkbox" name="symbol" value="symbol" /><br />

              <label name="number">Include a number?</label>
              <input type="checkbox" name="number" value="number" /><br />



              <input type="submit" name="submit" value="submit"/> <br/>
             
              </form>
              </form>

          </div>
      </div>
    

</div>
