<?php

// the conection of database local host  where the datas are stored
DEFINE('DB_HOSTNAME', 'localhost');
DEFINE('DB_DATABASE', 'interna5_surdb');
DEFINE('DB_USERNAME', 'interna5_ussurdb');
DEFINE('DB_PASSWORD', 'Fnm4n74%');

$connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($connection, "utf8");
