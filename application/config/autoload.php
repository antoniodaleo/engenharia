<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array( 'database','pagination','session');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','array');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('crud_model');
