<?php

namespace FormRelay\ConfirmationMail\Route;

use FormRelay\ConfirmationMail\DataDispatcher\ConfirmationMailDataDispatcher;
use FormRelay\Mail\Route\AbstractMailRoute;

class ConfirmationMailRoute extends AbstractMailRoute
{
    const DATA_DISPATCHER_KEYWORD = 'confirmationMail';

    const KEY_PLAIN_BODY = 'plainBody';
    const DEFAULT_PLAIN_BODY = '';

    const KEY_HTML_BODY = 'htmlBody';
    const DEFAULT_HTML_BODY = '';

    protected function getDispatcher()
    {
        /** @var ConfirmationMailDataDispatcher $dispatcher */
        $dispatcher = parent::getDispatcher();
        $dispatcher->setPlainBody($this->getConfig(static::KEY_PLAIN_BODY));
        $dispatcher->setHtmlBody($this->getConfig(static::KEY_HTML_BODY));
        return $dispatcher;
    }

    public static function getDefaultConfiguration(): array
    {
        return parent::getDefaultConfiguration() + [
            static::KEY_PLAIN_BODY => static::DEFAULT_PLAIN_BODY,
            static::KEY_HTML_BODY => static::DEFAULT_HTML_BODY,
        ];
    }
}
