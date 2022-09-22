<html>
    <body>
    <?php
    function fizzBuzz($loopCount){
        for($i = 1; $i <= $loopCount; $i++) {
            if($i % 3 == 0 && $i % 5 == 0){
                echo nl2br("FizzBuzz\n");
            }
            elseif($i % 5 == 0){
                echo nl2br("Buzz\n");
            }
            elseif($i % 3 == 0){
                echo nl2br("Fizz\n");
            }
            else{
                continue;
            }
        }
    }

    fizzBuzz(100);

    ?>
    </body>
</html>