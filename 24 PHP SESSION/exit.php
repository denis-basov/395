<?php

session_unset();
setcookie('PHPSESSID', '', time() - 60);

// перенаправить на главную
header('Location: /');