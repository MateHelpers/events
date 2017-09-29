<?php


namespace Tests;


use Capo\Event\EventDispatcher;
use Capo\Event\EventListener;
use Capo\EventAbstraction;
use Capo\Provider\EventProvider;
use Capo\Provider\Loader\EventLoader;
use Capo\Test\Event\UserLoggedInEvent;
use Capo\Test\Event\UserRegisterEvent;
use Capo\Test\Events;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase {
	public function testEvent()
	{
		$registerEvent = new UserRegisterEvent('Radhi', 'rg@mate.tn');
		$loggedInEvent = new UserLoggedInEvent(15, new \DateTime());

		/*$dispatcher = new EventDispatcher($registerEvent);

		$dispatcher->dispatch()*/;

		$registerEventProvider = new Events($registerEvent);
		$registerEventProvider->execute();

		$loggedInEventProvider = new Events($loggedInEvent);
		$loggedInEventProvider->execute();

		$this->assertNotNull( $registerEvent->getListeners());
		$this->assertCount(2, $registerEvent->getListeners());

		$this->assertNotNull($loggedInEvent->getListeners());
		$this->assertCount(1, $loggedInEvent->getListeners());

		var_dump($registerEvent->getListeners());
	}
}