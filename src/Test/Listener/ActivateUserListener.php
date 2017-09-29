<?php 

namespace Capo\Test\Listener;

use Capo\Test\Event\UserRegisterEvent;

class ActivateUserListener
{
	public function handle(UserRegisterEvent $event) : void
	{
		var_dump(sprintf('Activate the user listener [%s, %s]', $event->getUsername(), $event->getEmail()));
	}
}