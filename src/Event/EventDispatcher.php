<?php

namespace Capo\Event;

use Capo\EventAbstraction;
use Capo\Event\EventListener;
use Doctrine\Instantiator\Instantiator;

class EventDispatcher
{
	/** @var EventAbstraction */
    protected $event;

    /** @var Instantiator */
    protected $instantiator;

	/**
	 * EventDispatcher constructor.
	 *
	 * @param EventAbstraction $event
	 */
    public function __construct(EventAbstraction $event)
    {
        $this->event        = $event;
        $this->instantiator = new Instantiator();
    }

    public function dispatch()
    {
        $listeners = $this->event->getListeners();

	    /**
	     * @var EventListener $listener
	     * @var ListenerInterface $listenerObject
	     */
        foreach ($listeners as $listener) {
            $listenerClass  = $listener->getClass();
            $listenerObject = $this->instantiator->instantiate($listenerClass);

	        $listenerObject->handle($this->event);
        }
    }
}
