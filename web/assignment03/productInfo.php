<?php 
  require_once "products.php";
  $item = new Products();
  $itemArray = $item->getProducts();
  ?>
  <Form class="tablecontainer">
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
                <?php 
                   if (! empty($itemArray)) {
                      foreach ($itemArray as $key => $value) {
                      echo "<tr>";
                        echo" <td><img src=\"" . $itemArray[$key]["image"] ."\" alt=\"". $itemArray[$key]["name"]. "\" /></td>";
                        echo "<td>";
                        echo $itemArray[$key]["description"];
                        echo "</td>";
                        echo "<td>", $itemArray[$key]["price"] ."</td>";                       
                                                
                        echo"<td><button class=\"buttons\" type=\"button\" id=\"add_". $itemArray[$key]["id"]."\" onclick=\"takeAction('add', '". $itemArray[$key]["id"]."')\">Add to Cart</button>";
                        
                        echo "</td>";
                       echo "</tr>";
                      }
                                          
                   }  
                ?>              
             </tbody>      
             
           </table>
            
                <a href="cart.php" id="veiwCart" class="shoppingButtons"
>View Cart</a>
                   
        </form>
                         
                             
                  
              
               
