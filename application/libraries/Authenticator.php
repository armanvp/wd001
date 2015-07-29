<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticator {

  /* Builds the password hash */
  public function password_hash_get($password){

    $salt          = $this->salt_generate();
    $password_hash = sha1($password . $salt);

    return (object) array (
      "hash" => $password_hash,
      "salt" => $salt
    );

  }

  /* Generates a 16 byte salt */
  public function salt_generate(){
    return openssl_random_pseudo_bytes(16);
  }

}
