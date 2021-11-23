<?php
require '../vendor/autoload.php';

use Bubu\Flash\Flash;

Flash::info('Test info');
/*Flash::info('Test info');

Flash::alert('Test alert');

Flash::valid('Test info');

Flash::error('Test info');
*/
Flash::other('Autre', '#00AAFF', '#FFFFFF', '&#x20AC');


echo Flash::rawGenerate();