<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ob_start();



$loader = require __DIR__ . '/vendor/autoload.php';

use Capo\Test\Event\UserRegisterEvent;
use Capo\Test\Event\UserLoggedInEvent;



registerAction();



function registerAction()
{
	// registration
	echo 'Registration process';
	event(new UserRegisterEvent('Radhi', 'rg@mate.tn'));

}



echo nl2br(ob_get_clean());

use Capo\EventAbstraction;

function event(EventAbstraction $event)
{
	$eventProvider = new Capo\Test\Events($event);

	$eventProvider->execute();
}
