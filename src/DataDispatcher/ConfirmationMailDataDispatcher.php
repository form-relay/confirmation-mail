<?php

namespace FormRelay\ConfirmationMail\DataDispatcher;

use FormRelay\Mail\DataDispatcher\AbstractMailDataDispatcher;

class ConfirmationMailDataDispatcher extends AbstractMailDataDispatcher
{
    protected $plainBody = '';
    protected $htmlBody = '';

    public function getPlainBody(array $data): string
    {
        return $this->templateEngine->render($this->plainBody, $data);
    }

    public function setPlainBody($plainBody)
    {
        $this->plainBody = $plainBody;
    }

    public function getHtmlBody(array $data): string
    {
        return $this->templateEngine->render($this->htmlBody, $data);
    }

    public function setHtmlBody($htmlBody)
    {
        $this->htmlBody = $htmlBody;
    }
}
