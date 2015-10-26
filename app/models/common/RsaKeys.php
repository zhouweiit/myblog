<?php

namespace models\common;

class RsaKeys {
	
	private $publicKey;
	
	private $privateKey;
	
	/**
	 * @param string $privateKey
	 * @param string $publicKey
	 * @return void
	 * @author zhouwei17
	 */
	public function __construct($privateKey,$publicKey){
		$this->privateKey = $privateKey;
		$this->publicKey  = $publicKey;
	}
	
	/**
	 * @return the $publicKey
	 */
	public function getPublicKey() {
		return $this->publicKey;
	}

	/**
	 * @return the $privateKey
	 */
	public function getPrivateKey() {
		return $this->privateKey;
	}

	/**
	 * @param field_type $publicKey
	 */
	public function setPublicKey($publicKey) {
		$this->publicKey = $publicKey;
	}

	/**
	 * @param field_type $privateKey
	 */
	public function setPrivateKey($privateKey) {
		$this->privateKey = $privateKey;
	}
}
