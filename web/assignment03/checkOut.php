 <?php
    include_once "header.php"

 ?>
                
     

        <form name="cart" id="personalInfo" method="post" action="confirmation.php" class="tablecontainer">
            <h2>Purchase Information</h2>
            <p>
                <label for="first_name">First Name:</label>
                <input name="name" class="pInfo" type="text" id="first_name" required/>
                
                <br />
            </p>
            <p>
                <label for="last_name">Last Name:</label>
                <input name="lname" class="pInfo" type="text" id="last_name" required />
                
            </p>
            <p id="addresslabel">
                Address:<br/>
                <label for="cityaddress">City:</label><input type="text" name="city" class="pInfo" id="cityaddress" required/><br/><br/>
                <label for="stateaddress">State:</label><input type="text" name="state" class="pInfo" id="stateaddress" required pattern= "[A-Z]{2}"/><br/><br/>
                <label for="zipaddress">Zip Code:</label><input type="number" name="zip" class="pInfo" type="" id="zipaddress" required pattern="[0-9]{6}"/>
                
            </p>
           <input type="submit" name="input" value="Purchase Items Now">
        </form>

        <?php 
         include_once "footer.php"
        ?>