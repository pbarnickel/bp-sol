<?php

use BPS\RobustDashboard\Main;

require_once('httpdocs/php/Constants.php');
require_once('httpdocs/php/Model/Entry.php');
require_once('httpdocs/php/Model/EntryRBT.php');
require_once('httpdocs/php/Model/EntryRBS.php');
require_once('httpdocs/php/Model/History.php');
require_once('httpdocs/php/Model/HistoryRBT.php');
require_once('httpdocs/php/Model/HistoryRBS.php');
require_once('httpdocs/php/API/API.php');
require_once('httpdocs/php/API/DatabaseAPI.php');
require_once('httpdocs/php/API/RobustAPI.php');
require_once('httpdocs/php/Main.php');

$main = new Main();
$main->updateDataRBT();
$main->updateDataRBS();