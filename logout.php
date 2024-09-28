<?php
setcookie("USERNAME", "", time()-3600);
setcookie("NAMEUSER", "", time()-3600);

header("location:./");
?>