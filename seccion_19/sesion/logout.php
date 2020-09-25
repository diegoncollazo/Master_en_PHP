<?php

session_start();

echo $_SESSION['persistente'];

session_destroy();