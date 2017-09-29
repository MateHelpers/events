<?php 

namespace Capo;

use Capo\Event\EventListener;
use Capo\Event\EventDispatcher;

abstract class EventAbstraction
{
	/** @var array */
	private $listeners;

	/**
	 * @return void
	 */
	public function fire() : void
	{
		$dispatcher = new EventDispatcher($this);
		$dispatcher->dispatch();
	}

	/**
	 * @param EventListener $listener
	 *
	 * @return EventAbstraction
	 */
	public function addListener(EventListener $listener) : self
	{
		$this->listeners[] = $listener;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getListeners() : array
	{
		return $this->listeners;
	}

	public abstract function getName() : string;
}