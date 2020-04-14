<?php

declare(strict_types=1);

namespace MilesChou\Psr\Http\Client;

/**
 * Basic Implementation of HttpClientAwareInterface.
 */
trait HttpClientAwareTrait
{
    /**
     * @var HttpClientInterface
     */
    protected $httpClient;

    /**
     * @param HttpClientInterface $httpClient
     * @return $this
     */
    public function setHttpClient(HttpClientInterface $httpClient): self
    {
        $this->httpClient = $httpClient;
        return $this;
    }
}
