<?php

// Inialize session
session_start();

// Delete certain session
session_destroy();
// Delete all session variables
session_destroy(); 

// Jump to login page
header('Location: index.html');

?>