<?php
require 'Boot.php';
\dthtoolkit\Session::initSession();
$sessionParams = ['custom_params' =>  ['key' => 'value','key1' => 'value1','key2' => 'value2']];
\dthtoolkit\Session::sendTheseToSession($sessionParams);
\dthtoolkit\Debugger::var_dump(Requests::getArguments());