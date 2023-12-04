<html>
  <body> 
  <?php
        $month = 5;
        $year = 2003;
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        echo "There are $days days in $month, $year";
  ?>
  </body>
</html>
