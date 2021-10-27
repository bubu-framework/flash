<?php
require '../vendor/autoload.php';

use Bubu\Tests\Flash\Flash;

Flash::info('Test info');

echo Flash::generate();