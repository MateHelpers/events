<?php


namespace Capo\Test\Listener;


use Capo\Event\ListenerInterface;
use Capo\EventAbstraction;
use Capo\Test\Event\UserLoggedInEvent;

class ShowReturnedMessageListener implements ListenerInterface
{
	/**
	 * @param EventAbstraction|UserLoggedInEvent $event
	 */
	public function handle( EventAbstraction $event ): void
	{
		var_dump(sprintf('User with id %d logged in successfully at %s message', $event->getUserId(), $event->getDate()->format('Y/m/d')));
	}
}