<?php

namespace FormRelay\Mail;

use FormRelay\ConfirmationMail\DataDispatcher\ConfirmationMailDataDispatcher;
use FormRelay\ConfirmationMail\Route\ConfirmationMailRoute;
use FormRelay\Core\Initialization;

class ConfirmationMailInitialization extends Initialization
{
    const DATA_DISPATCHERS = [
        ConfirmationMailDataDispatcher::class,
    ];
    const ROUTES = [
        ConfirmationMailRoute::class,
    ];
}
