<?php

function component($productname, $productprice, $productimg,$productid) {
    $element = "
<form method="post">
    <ul>
        <li"> 
           
          <img src=\"$productimg\" alt=\"pic1\" width=\"120\" height=\"120\">
        
                <h2 style=\"color: #333;\">$productname</h2>
                <h3 style=\"color: #333;\">$$productprice</h3>
        </li>
        <li>
            <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
        </li>
    </ul>
</form>

}

?>