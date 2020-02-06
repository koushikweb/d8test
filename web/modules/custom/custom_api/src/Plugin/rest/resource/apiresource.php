<?php

namespace Drupal\custom_api\Plugin\rest\resource;

use Drupal\Core\Annotation\Translation;
use Drupal\rest\Annotation\RestResource;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a resource to get content
 *
 * @package Drupal\custom_api\Plugin\rest\resources
 * @RestResource(
 *  id = "content_resource",
 *  label = @Translation("Content Resource"),
 *  uri_paths = {
      "canonical" = "/content_resource/get_content"
 *   }
 * )
 */


/**
 * Class ApiResource
 * @package Drupal\custom_api\Plugin\rest\resource
 * @RestResource(
 *  id = "getall_content",
 *  label= @Translation("Get all content"),
 *   uri_paths={
      "canonical" = "/getall_content/{type}"
 *   }
 *
 * )
 */
class ApiResource extends ResourceBase {
  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
 public function get ($type = null)
 {
   $response = ['message' => 'My first API in D8'];
   return new ResourceResponse($response);
 }
 function post (){

 }

}





