<?php

//session_start();
//unset($_SESSION["user_id"]);
//unset($_SESSION["nameinfull"]);
//unset($_SESSION["emailz"]);
//unset($_SESSION["city"]);
//unset($_SESSION["use_type"]);

session_start();
session_unset();
session_destroy();
echo "ok";
