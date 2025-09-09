<?php
// In a controller or other class
namespace Drupal\api_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use GuzzleHttp\ClientInterface; // Guzzle is the underlying HTTP client
use Symfony\Component\DependencyInjection\ContainerInterface;

class ApiController extends ControllerBase {

    protected $httpClient;

    public function __construct(ClientInterface $http_client) {
        $this->httpClient = $http_client;
    }

    public function factsPage() {
        $result = $this->httpClient->get('https://dogapi.dog/api/facts?number=5');

        if($result) {
            $data = json_decode($result->getBody()->getContents(), true);
            $formatedFacts = '';
            if($data['success'] === true) {
                $facts = $data['facts'];
                $formatedFacts = '<h3>Fun facts about dogs</h3>
                                    <ul>';
                foreach($facts as $fact){
                    $formatedFacts = $formatedFacts . '<li>' . $fact . '</li>';
                }
                $formatedFacts = $formatedFacts . '</ul>';
            }
        }
        return [
            '#markup' =>$formatedFacts,
            '#cache' => [
                'tags' => ['dog_facts'],
                'max-age' => 0,
            ],
        ];
    }

    public function testRoute() {
        return [
          '#markup' => $this->t('Hello, World!'),
        ];
    }
}