<htlm>
  <body> 
  <?php
        $month = 2;
        $year = 2023;
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        echo "There are $days days in month $month of year $year";
  ?>
  </body>
</htlm>
