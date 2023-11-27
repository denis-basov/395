<?php

// удаляем cookies
setcookie('firstName', '', time() - 60);
setcookie('lastName', '', time() - 60);

// перенаправить на главную
header('Location: /');