<?php

namespace service;

use library\mvc\ServiceBase;
use library\utils\RsaUtils;
class RsaService extends ServiceBase{
	
	/**
	 * @var RsaKeys
	 */
	private $rsaKeys;
	
	/**
	 * @return void
	 */
	public function init(){
		$this->rsaKeys = $this->di->get('RsaKeys');
	}
	
	/**
	 * 需要解密的数据，解密的数据应该是进过rsa加密之后，又经过了base64_encode
	 * @param string $data
	 * @param string $privatekey
	 * @return Ambigous <boolean, string>
	 * @author zhouwei17
	 */
	public function decrypt($data,$privatekey = null){
		if (!isset($privatekey)){
			$privatekey = $this->rsaKeys->getPrivateKey();
		}
		return RsaUtils::opensslPrivateDecrypt($data, $privatekey);
	}
	
	/**
	 * 需要加密的数据，加密的数据先通过publickey进行加密，随后通过base64_encode
	 * @param string $data
	 * @param string $publickey
	 * @return Ambigous <boolean, string>
	 * @author zhouwei17
	 */
	public function encrypt($data,$publickey = null){
		if (!isset($publickey)){
			$publickey = $this->rsaKeys->getPublicKey();
		}
		return RsaUtils::opensslPublicEncrypt($data, $publickey);
	}
}