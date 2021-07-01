<?php
  function recursive($array){
    $html="";
    foreach($array as $key => $value){
      if(!is_array($value)){
        echo "<li class='list-group-item'>".$key. " : ".$value."</li>";
      }else{
        recursive($value);
      }
    }
  }
  $info=array(
    "Ewallet" => "ewallet", 
    "Transaction info" => "transaction", 
    "Payment Details" => "paymentdetails", 
    "Customer info" => "customer", 
    "Shopping cart" => "checkoutdata"
  );
  foreach ($info as $key => $value) {
    echo "<h3>".$key."</h3>";
    echo "<ul class='list-group'>";
    recursive($xml[$value]);
    echo "</ul>";
  }
?>