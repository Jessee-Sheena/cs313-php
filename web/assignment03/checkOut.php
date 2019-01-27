 <?php
    include_once "header.php"

 ?>
                
     

        <form name="cart" id="personalInfo" action="confirmation.php" class="tablecontainer">
            <h2>Purchase Information</h2>
            <p>
                <label for="first_name">First Name:</label>
                <input name="forminput" class="pInfo" type="text" id="first_name" />
                <span class="error">Invalid Name</span>
                <br />
            </p>
            <p>
                <label for="last_name">Last Name:</label>
                <input name="forminput" class="pInfo" type="text" id="last_name" />
                <span class="error">Invalid Name</span><br />
            </p>
            <p id="addresslabel">
                Address:
                <label for="cityaddress">City:</label><input type="text" name="city" class="pInfo" id="cityaddress">
                <label for="stateaddress">State:</label><input type="text" name="state" class="pInfo" id="stateaddress">
                <label for="zipaddress">Zip Code:</label><input type="number" name="zipcode" class="pInfo" type="" id="zipaddress">
                <span class="error"> Invalid Address</span><br /> (street address, <br />city, state, and zip)<br />
            </p>
           <input type="submit" name="input" value="Purchase Items Now">
        </form>

        <?php 
         include_once "footer.php"
        ?>