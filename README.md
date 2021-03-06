# PHP event system

Stable, flexible and elegant event system for PHP projects.

## Getting started

Firstly, you should create an Events class on your project extended from the `EventProvider` class, and put in your `$events` property, all your events and their subscribers:

``` php
class Events extends EventProvider {
    public $events = [
        'event.user.register' => [
            SendEmailListener::class,
            ActivateUserListener::class
        ],
        'event.user.logged.in' => [
            ShowReturnedMessageListener::class
        ]
    ];
}
```

Now add a helper function on your autoloaded file to be called on all your project classes:
``` php
function event(EventAbstraction $event)
{
    $eventProvider = new Capo\Test\Events($event);
    $eventProvider->execute();
}
```
Finally, simple and clean way to dispatch your events:

``` php
event(new UserRegisterEvent('Radhi', 'rg@mate.tn'));
```
