<?php
 $db = mysqli_connect('10.0.0.49', 'admin', '@Admin123_') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'erp3' ) or die(mysqli_error($db));
?>