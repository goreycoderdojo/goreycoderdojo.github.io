<html>
 
<head></head>

<body>


<?php

    foreach($_POST as $k=>$v){
        echo $k. " = ".filter_var($v, FILTER_SANITIZE_STRING) . "<br>";
    }

?>

</body>
</html>


