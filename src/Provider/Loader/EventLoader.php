<?php


namespace Capo\Provider\Loader;


use Capo\Event\EventListener;
use Capo\EventAbstraction;
use Capo\Provider\Loader\LoaderInterface;

class EventLoader implements LoaderInterface {
	public function load( $data = null ): void
	{
		/** @var EventAbstraction $event */
		$event     = $data['currentEvent'];
		$events    = $data['events'];

		$eventName = $event->getName();

		if (! $events || !array_key_exists($eventName, $events)) {
			throw new \ErrorException("Event $eventName not found on your events register");
		}

		$listeners = $this->getEvent($events, $eventName);

		/**
		 * @var string $listener
		 * @var string[][][] $listeners
		 */
		foreach ($listeners as $listener) {
			$event->addListener(new EventListener($listener));
		}

		// FIRE THE EVENT
		$event->fire();
	}

	private function getEvent($events, $eventName)
	{
		return $events[$eventName];
	}
}