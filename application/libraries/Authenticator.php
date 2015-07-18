<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticator {

  /* Builds the password hash */
  public function password_hash_get($password){
    return sha1($password . $this->salt_generate());
  }

  /* Generates a 16 byte salt */
  public function salt_generate(){
    return openssl_random_pseudo_bytes(16);
  }

}
