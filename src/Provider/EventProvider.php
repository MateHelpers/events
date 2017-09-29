<?php


namespace Capo\Provider;


use Capo\EventAbstraction;
use Capo\Provider\Loader\EventLoader;

class EventProvider extends Provider
{
	public $events = null;
	protected $currentEvent = null;

	/**
	 * EventProvider constructor.
	 */
	public function __construct(EventAbstraction $event)
	{
		$this->loader       = new EventLoader();
		$this->currentEvent = $event;
	}

	protected function buildData(): array
	{
		return [
			'events'       => $this->events,
			'currentEvent' => $this->currentEvent
		];
	}

	public function setEvents($events)
	{
		$this->events = $events;
	}
}