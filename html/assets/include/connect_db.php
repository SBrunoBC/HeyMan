<?php
/**
 * Author: Sal Bruno
 * Date: September - 2017
 * Copyright: Copyright 2017, Sal Bruno
 * License: MIT (For full version see LICENSE.txt)
 *
 * Connects to database with details in /config/hm_config.ini
 */

// Sets database details
$dbConfig = parse_ini_file("../config/hm_config.ini");

// Connect to database
$connection = mysqli_connect("localhost", $dbConfig["user"], $dbConfig["password"], $dbConfig["dbname"]);
