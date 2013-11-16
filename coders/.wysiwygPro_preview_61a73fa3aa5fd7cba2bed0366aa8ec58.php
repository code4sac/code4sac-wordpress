<?php
if ($_GET['randomId'] != "IdEiaFN8KT3vCU8OUKblgLbvPNs94vAwoUd_Zt1qGXUH8onJzEhf7_KqqokqzCWO") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
