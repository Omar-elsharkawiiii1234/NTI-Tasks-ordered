<?php
session_start();
session_unset();
session_destroy();
header("Location:T3.php");