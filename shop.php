<?php

session_start();

echo ("Welcome to the shop user " . $_SESSION['userID'] );