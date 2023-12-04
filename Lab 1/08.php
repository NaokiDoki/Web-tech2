<html>
  <body>
    <?php
        $num = 153;
        $temp = $num;
        $sum = 0;
        while ($temp != 0) {
            $remainder = $temp % 10;
            $sum += $remainder ** 3;
            $temp = (int)($temp / 10);
        }
        if ($sum == $num) {
            echo "$num is an Armstrong number";
        } else {
            echo "$num is not an Armstrong number";
        }
    ?>
  </body>
</html>
