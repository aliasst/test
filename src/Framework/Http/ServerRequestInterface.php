<?php

namespace Framework\Http;

interface ServerRequestInterface
{
    public function getQueryParams (): array;

    public function withQueryparams (array $query);

    public function getParsedBody ();

    public function withParsedBody ();
}