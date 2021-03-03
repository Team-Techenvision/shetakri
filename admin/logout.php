<?php
require('../include/master.inc');
require('../include/sess.inc');
//require('../includes/master.inc');
//require('../includes/sess.inc');
session_unset();
session_destroy();
session_regenerate_id();
// CLEAR SESSIONS


header('location:'.DOMAIN_NAME.'/');
exit();
?>