<?php


namespace Capo\Test;


use Capo\Test\Listener\ActivateUserListener;
use Capo\Test\Listener\SendEmailListener;
use Capo\Test\Listener\ShowReturnedMessageListener;
use Capo\Provider\EventProvider;

class Events extends EventProvider {

	public $events = [
		'event.user.register' => [
			SendEmailListener::class,
			ActivateUserListener::class
		],

		'event.user.logged.in' => [
			ShowReturnedMessageListener::class
		]
	];

}