<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pampered Princess Shop</title>
    <meta content="this is a shop that sells digital scrapbooking elements, papers, backgrounds, flowers, buttons, frames and other objects" />
    <link rel="stylesheet" href="home.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <header>
        <img src="images/logo2.png" alt=" pampered princess logo" />
        <div>
            <h1>Pampered Princess Shop</h1>
            <h2> digital scrapbooking site</h2>
        </div>
    </header>
    <main>
        <form "class="tablecontainer" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table>
                <thead>
                    <tr>
                        <th>Products</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th id="purchase">Click to Purchase</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="images/glimmerofhopes.jpg" alt="glimmer of Hope kit" /></td>
                        <td>
                            Glimmer of Hope digital scrap-booking kit is designed for breast cancer survivors and people who are currently fighting this
                            devistating illness. Preserve your memories of this time with these beautiful designs.
                        </td>
                        <td>$4.00</td>
                        <td><button class="buttons" type="submit" name="glimmer" value="4.00">Add to Cart</button></td>
                    </tr>
                    <tr>
                        <td><img src="images/Fall_Dolls.jpg" alt="fall doll kit" /></td>
                        <td>This fun fall digital scrap-booking kit is perfect for preserving your favorite fall memories!</td>
                        <td>$3.50</td>
                        <td><button class="buttons" type="button" id="fallDoll" value="3.50">Add to Cart</button></td>
                    </tr>
                    <tr>
                        <td><img src="images/frightfuls.jpg" alt="Frightful kit" /></td>
                        <td>
                            Full of spooky but cute designs, frightful is the perfect addition to your holiday digital scrap-booking kits
                            your kids costumes will be forever memorialized with these spooktacular pages!
                        </td>
                        <td>$2.25</td>
                        <td><button class="buttons" type="button" id="Frightful" value="2.25">Add to Cart</button></td>
                    </tr>
                    <tr>
                        <td><img src="images/psandqs.jpg" alt="p's and q's kit" /></td>
                        <td>
                            This is a great kit to scrap your back to schoold pics of the kids! or if you are a teacher this is full of fun
                            school designs that can be used for many of your school themed prints.
                        </td>
                        <td>$3.75</td>
                        <td><button class="buttons" type="button" id="PQ" value="3.75">Add to Cart</button></td>
                    </tr>
                    <tr>
                        <td><img src="images/shabbystnick.jpg" alt="shabby st. nick kit" /></td>
                        <td>
                            This fun Christmas kit has all the bells and whistles. It is full of cute cartoons and fun elements that are sure
                            to make your holiday scrap-book pages merry and bright!
                        </td>
                        <td>$2.50</td>
                        <td><button class="buttons" type="button" id="Shabby" value="2.50">Add to Cart</button></td>
                    </tr>
                </tbody>
            </table>
            </form>
            <form>
            <button type="button" id="veiwCart">View Cart</button>
           </form>
        <?php $name = $_Post['name']; echo $name;?>
        <footer>

            <nav id="footerNav">
                <ul>
                    <li>&copy;  Sheena Jessee | 2018</li>
                    <li><a href="#">Terms of Use</a></li>
                    <li id="date"></li>
                </ul>
            </nav>
        </footer>
    </main>
    
</body>
</html> 