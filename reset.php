<?php
session_start();
session_unset();
session_destroy();
echo "Session direset. <a href='viewadd.php'>Balik ke halaman</a>";