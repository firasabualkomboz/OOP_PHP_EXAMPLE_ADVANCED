<?php
    $rateFrom = ['Euro' => 25.62, 'USD' => 22.74, 'GBP' => 28.50, 'AUS' => 15.90, 'CHN' => 3.30];
    ?>


     <form action="" method='POST'>
     <input type="number" name='from'  step=any  min='1' placeholder='How many euros are you exchanging?' required>  
    <!-- create a input hidden field call currency_name-->
     <input type="hidden" id="currency_name" name="currency_name">

     <!-- create a input hidden field. on change the value, get the select option currency name and add into 'currency_name' field.-->
    <select name="rate" onChange="document.getElementById('currency_name').value = this.options[this.options.selectedIndex].text;">
    <?php
    foreach($rateFrom as $key => $value):
    //use  value attr
    echo '<option value='. $value.'>'. $key.'</option>'; 
    endforeach;
    ?>
    </select>          
    <input type="submit" name='submit'>
    </form>

    <?php
    if(isset($_POST['submit'])){

    $rate = $_POST['rate'];
    $from = $_POST['from'];

    //get the currency name by key 'currency_name'
    $curency = $_POST['currency_name'];
    echo 'Your amount'.$from . ' ' .$curency;
    $to = $from * $rate;
    }
    ?>