<?php
$hashed_password = password_hash('1234', PASSWORD_DEFAULT);
echo "Hashed Password: " . $hashed_password;
?>
