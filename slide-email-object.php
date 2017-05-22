<?php

final class Email
{
    private $mailbox;

    private $host;

    public function __construct(string $email)
    {
        if (false === strpos($email, '@')) {
            throw new \InvalidArgumentException('This does not look like an email!');
        }

        list($this->mailbox, $this->host) = explode('@', $email);
    }

    public function __toString()
    {
        return sprintf('%s@%s', $this->mailbox, $this->host);
    }
}
