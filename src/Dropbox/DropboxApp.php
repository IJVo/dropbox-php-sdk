<?php

namespace Kunnu\Dropbox;

class DropboxApp
{

	/**
	 * The Client ID of the App
	 *
	 * @link https://www.dropbox.com/developers/apps
	 *
	 * @var string
	 */
	protected $clientId;

	/**
	 * The Client Secret of the App
	 *
	 * @link https://www.dropbox.com/developers/apps
	 *
	 * @var string
	 */
	protected $clientSecret;

	/**
	 * The Access Token
	 *
	 * @var string
	 */
	protected $accessToken;


	/**
	 * Create a new Dropbox instance
	 * Edited: IJVo
	 *
	 * @param string $clientId     Application Client ID
	 * @param string $clientSecret Application Client Secret
	 * @param string $accessToken  Access Token
	 */
	public function __construct($clientId = null, $clientSecret = null, $accessToken = null)
	{
		$this->clientId = $clientId;
		$this->clientSecret = $clientSecret;
		$this->accessToken = $accessToken;
	}


	/**
	 * Set the OAuth 2.0 Client ID.
	 * 
	 * @param string $clientId
	 */
	public function setClientId($clientId)
	{
		$this->clientId = $clientId;
	}


	/**
	 * Get the App Client ID
	 *
	 * @return string
	 */
	public function getClientId()
	{
		return $this->clientId;
	}


	/**
	 * Set the OAuth 2.0 Client Secret.
	 * 
	 * @param string $clientSecret
	 */
	public function setClientSecret($clientSecret)
	{
		$this->clientSecret = $clientSecret;
	}


	/**
	 * Get the App Client Secret
	 *
	 * @return string
	 */
	public function getClientSecret()
	{
		return $this->clientSecret;
	}


	/**
	 * Set the OAuth 2.0 Client Secret.
	 * 
	 * @param string $accessToken
	 */
	public function setAccessToken($accessToken)
	{
		$this->accessToken = $accessToken;
	}


	/**
	 * Get the Access Token
	 *
	 * @return string
	 */
	public function getAccessToken()
	{
		return $this->accessToken;
	}
}
