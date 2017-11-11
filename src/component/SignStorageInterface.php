<?php

namespace Phersek\SignStorage\component;

use Pherserk\Sign\model\SignInterface;

interface SignStorageInterface
{
    public function store(SignInterface $sign) : SignInterface;
}
