<?php

namespace Kunnu\Dropbox\Http\Clients;

use Psr\Http\Message\StreamInterface;
use resource;

/**
 * DropboxHttpClientInterface
 */
interface DropboxHttpClientInterface
{


	/**
	 * Send request to the server and fetch the raw response
	 *
	 * @param  string $url     URL/Endpoint to send the request to
	 * @param  string $method  Request Method
	 * @param  string|resource|\Psr\Http\Message\StreamInterface|null $body Request Body
	 * @param  array  $headers Request Headers
	 * @param  array  $options Additional Options
	 *
	 * @return \Kunnu\Dropbox\Http\DropboxRawResponse Raw response from the server
	 *
	 * @throws \Kunnu\Dropbox\Exceptions\DropboxClientException
	 */
	public function send(string $url, string $method, string|resource|StreamInterface $body, array $headers = [], array $options = []);
}
