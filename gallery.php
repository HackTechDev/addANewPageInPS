<?php
require(dirname(__FILE__).'/config/config.inc.php');
Tools::displayFileAsDeprecated();
Tools::redirect('index.php?controller=gallery'.($_REQUEST ? '&'.http_build_query($_REQUEST, '', '&') : ''), __PS_BASE_URI__, null, 'HTTP/1.1 301 Moved Permanently');

