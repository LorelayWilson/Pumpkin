<?php

session_start();
session_unset();
session_destroy();

header("Location:../../app/login.php?logoutsuccess");