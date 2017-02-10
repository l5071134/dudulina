<?php
/******************************************************************************
 * Copyright (c) 2017 Constantin Galbenu <gica.galbenu@gmail.com>             *
 ******************************************************************************/

namespace Gica\Cqrs\Command\CommandDispatcher;


use Gica\Types\Guid;

interface AuthenticatedIdentityReaderService
{

    /**
     * @return Guid|null
     */
    public function getAuthenticatedIdentityId();
}