<html>
  <body>
    <?php
        $num = 45421;
        $rev = 0;
        while ($num > 0) {
            $digit = $num % 10;
            $rev = $rev * 10 + $digit;
            $num = (int)($num / 10);
        }
        echo "Reversed = $rev";
    ?>
  </body>
</html>
