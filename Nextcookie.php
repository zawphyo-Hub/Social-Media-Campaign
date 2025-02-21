<?php
if(isset($_COOKIE['user'])){
    echo $_COOKIE['user'];
    echo "<a href = 'Destroycookie.php'>Destroy</a>";
}
else {
    echo "It is expired.";
}
?>