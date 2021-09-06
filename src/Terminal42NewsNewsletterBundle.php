<?php

declare(strict_types=1);

namespace Terminal42\NewsNewsletterBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class Terminal42NewsNewsletterBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
