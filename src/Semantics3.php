<?php
namespace Semantics3;
use Semantics3\Semantics3\OAuthStore;
use Semantics3\Semantics3\OAuthRequester;

if (!function_exists('curl_init')) {
  throw new Exception('Semantics3 needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Semantics3 needs the JSON PHP extension.');
}
if (!class_exists('OAuthRequester')) {
  throw new Exception('Semantics3 needs the OAUTH-PHP extension.');
}


use Semantics3\Semantics3\Semantics3_Error;
use Semantics3\Semantics3\Semantics3_AuthenticationError;
use Semantics3\Semantics3\Semantics3_ParameterError;


use Semantics3\Semantics3\Api_Connector;
use Semantics3\Semantics3\Semantics3_Products;
