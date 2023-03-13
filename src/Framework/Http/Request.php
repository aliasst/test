<?php

namespace Framework\Http;

class Request
{

    private $qweryParams = [];
    private $parsedBody;


    public function getQueryParams (): array
    {
        return $this->qweryParams;
    }

    public function withQueryParams(array $query): self
    {
        $new = clone $this;
        $new->qweryParams = $query;
        return $new;
    }

    public function getParsedBody()
    {
        return $this->parsedBody;
    }

    public function withParsedBody($data): self
    {
        $new = clone $this;
        $new->parsedBody = $data;
        return $new;
    }
}