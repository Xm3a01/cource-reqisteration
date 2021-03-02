<?php
// Start the session
    $customerRef  = $_POST ['customerRef'];
  
    $result = $link->query();
    
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      // uf it saved as un payed
      if ($row['payed'] ==0 ){
          
        //   header ("Location:  ")
          ?>
                
                <script type="text/javascript">
                    // alert("English Course Reservation had been added Succisfully , Now upload Documents..");
                    setTimeout("location.href = 'payment.php?trans=1';",10)
                </script>
  <?php

      }else{
          // if it saved as payed 
          if ($row['payed'] == 1 ){
              ?>
                <script type="text/javascript">
                    // alert("you paym");
                    
                    setTimeout("location.href = #;",10)
                </script>
            <?php
          }
      }
    echo "payed: " . $row["payed"]."<br>";
  }
} else {
  echo "0 results";
}
    // echo "  --- > " .query($link, $sql);