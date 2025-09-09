<?php
// // In your custom module's .services.yml file (if creating a service):
// // my_custom_module.api_client:
// //   class: Drupal\my_custom_module\ApiClient
// //   arguments: ['@http_client_factory']

// // In your custom class (e.g., ApiClient.php):
// namespace Drupal\api_test;

// use GuzzleHttp\ClientInterface; // Guzzle is the underlying HTTP client

// class ApiClient {

//   protected $httpClient;
//   protected $logger;

//   public function __construct(ClientInterface $http_client) {
//     $this->httpClient = $http_client;
//   }

//   public function fetchDataFromApi($endpoint) {
//     try {
//       $response = $this->httpClient->get($endpoint);
//       $data = json_decode($response->getBody()->getContents(), true);
//       return $data;
//     } catch (\Exception $e) {
//       Drupal::logger->error('Error connecting to API: @message', ['@message' => $e->getMessage()]);
//       return FALSE;
//     }
//   }
// }