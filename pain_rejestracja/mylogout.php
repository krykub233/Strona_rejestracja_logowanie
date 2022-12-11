<?php
require 'myconfig.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login_p.php");