 <div id="total" name="totalprice">
                <p>
                    Total: $
                    <span id="output">0.00</span>
                </p>
            </div>
        </form>

        <form name="cart" id="personalInfo" action="" onsubmit="return validateForm()" onreset="resetFields()">
            <h2>Purchase Information</h2>
            <p>
                First Name:
                <input name="forminput" class="pInfo" type="text" id="first_name" />
                <span class="error">Invalid Name</span>
                <br />
            </p>
            <p>
                Last Name:
                <input name="forminput" class="pInfo" type="text" id="last_name" />
                <span class="error">Invalid Name</span><br />
            </p>
            <p id="addresslabel">
                Address:
                <textarea name="forminput" class="pInfo" type="" id="address" rows="6" cols="20"></textarea>
                <span class="error"> Invalid Address</span><br /> (street address, <br />city, state, and zip)<br />
            </p>
            <p>
                Phone Number:
                <input name="forminput" class="pInfo" type="text" id="phone" onchange="return phoneValidation()" />
                <span class="error" id="phoneError"> Invalid Phone Number</span><br /> (xxx-xxx-xxxx)
            </p>
            <p>Payment Options: <span id="radioerror">Invalid Payment Selection</span></p>
            <div>
                <p>
                    Visa
                    <input class="rInfo" type="radio" name="creditcards" id="card_0" /><br />
                    Mastercard
                    <input class="rInfo" type="radio" name="creditcards" id="card_1" /><br />
                    American Express
                    <input class="rInfo" type="radio" name="creditcards" id="card_2" /><br />
                </p>
            </div>
            <p>Credit Card Number: (Must be 16 digits)</p>
            <input name="forminput" type="text" id="credit_card" onchange="return cardValidation() " />
            <span class="error"> Invalid Card Number</span><br />
            <p>
                Card Expiration Date: (ie 03/2020)
                <input name="forminput" type="text" id="exp_date" size="5" onchange="return expDateValidation()" />
                <span class="error"> Invalid Expiration Date</span><br />
            </p>
            <input type="reset" id="reset" />
            <input type="submit" id="validate" />
        </form>