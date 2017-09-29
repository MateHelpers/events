<?php 

namespace Capo;

use Capo\Event\EventListener;

class Event
{
	/** @var string */
	protected $name;

	/** @var array */
	protected $listeners = array();


	/**
	 * Event constructor.
	 *
	 * @param string $name
	 */
	public function __construct(string $name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}

	/**
	 * @param EventListener $listener
	 *
	 * @return Event
	 */
	public function addListener(EventListener $listener) : self
	{
		$this->listeners = $listener;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getListeners() : array
	{
		return $this->listeners;
	}
}