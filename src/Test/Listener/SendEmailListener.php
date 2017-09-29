<?php 

namespace Capo\Test\Listener;

class SendEmailListener
{
	public function handle() : void
	{
		var_dump('Send Email Listener Handled');
	}
}