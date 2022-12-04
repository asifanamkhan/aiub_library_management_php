<?php

    unset($_COOKIE['loggedInName']);
    unset($_COOKIE['loggedInPassword']);
	header('location: ../index.php');
?>