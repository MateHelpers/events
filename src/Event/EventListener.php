<?php 

namespace Capo\Event;

class EventListener
{
	/** @var string */
	protected $class;

	/**
	 * EventListener constructor.
	 *
	 * @param string $class
	 */
	public function __construct(string $class)
	{
		$this->class = $class;
	}

	/**
	 * @return string
	 */
	public function getClass() : string
	{
		return $this->class;
	}
}