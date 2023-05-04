<?php
session_start();
session_unset();
  echo "
                    <script>
                        window.open('https://educationverse.org/frontend/login.php','_self');
                    </script>";

?>