<?php

namespace Zarnite;

use Zarnite\Configuration;
use Zarnite\ApiException;

// Import generated APIs
use Zarnite\Api\AgentsApi;
use Zarnite\Api\BehaviorsApi;
use Zarnite\Api\LearnersApi;
use Zarnite\Api\KnowledgeApi;
use Zarnite\Api\MemoryApi;
use Zarnite\Api\UsageBillingApi;
use Zarnite\Api\APIKeysApi;
use Zarnite\Api\DeploymentsApi;
use Zarnite\Api\PlaygroundApi;
use Zarnite\Api\AnalyticsApi;
use Zarnite\Api\DashboardApi;
use Zarnite\Api\RoutingApi;
use Zarnite\Api\VoiceRuntimeApi;

/**
 * Custom Exception Class for Zarnite SDK (Task 3.2)
 */
class ZarniteException extends \Exception {
    protected $status;
    protected $code;
    protected $data;

    public function __construct($message = "", $status = null, $code = "API_ERROR", $data = null, ?\Throwable $previous = null) {
        parent::__construct($message, $status ?? 0, $previous);
        $this->status = $status;
        $this->code = $code;
        $this->data = $data;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getErrorCode() {
        return $this->code;
    }

    public function getData() {
        return $this->data;
    }
}

/**
 * High-Level Premium PHP SDK Client (Task 3.1)
 */
class Client {
    public $agents;
    public $behaviors;
    public $learners;
    public $knowledge;
    public $memory;
    public $usage;
    public $apiKeys;
    public $deployments;
    public $playground;
    public $analytics;
    public $dashboard;
    public $routing;
    public $voiceRuntime;

    protected $config;
    protected $httpClient;

    public function __construct(array $options) {
        if (empty($options['apiKey'])) {
            throw new ZarniteException("API Key is required to initialize the Zarnite Client.", 400, "CONFIG_ERROR");
        }

        $basePath = $options['basePath'] ?? "https://api.zarnite.com";

        // 1. Set up Guzzle HTTP client with default Authorization headers
        $this->httpClient = new \GuzzleHttp\Client([
            'base_uri' => $basePath,
            'headers' => [
                'Authorization' => 'Bearer ' . $options['apiKey']
            ]
        ]);

        // 2. Configure standard OpenAPI configuration
        $this->config = new Configuration();
        $this->config->setAccessToken($options['apiKey']);
        $this->config->setHost($basePath);

        // 3. Instantiate sub-service APIs cleanly (Task 3.1)
        $this->agents = new AgentsApi($this->httpClient, $this->config);
        $this->behaviors = new BehaviorsApi($this->httpClient, $this->config);
        $this->learners = new LearnersApi($this->httpClient, $this->config);
        $this->knowledge = new KnowledgeApi($this->httpClient, $this->config);
        $this->memory = new MemoryApi($this->httpClient, $this->config);
        $this->usage = new UsageBillingApi($this->httpClient, $this->config);
        $this->apiKeys = new APIKeysApi($this->httpClient, $this->config);
        $this->deployments = new DeploymentsApi($this->httpClient, $this->config);
        $this->playground = new PlaygroundApi($this->httpClient, $this->config);
        $this->analytics = new AnalyticsApi($this->httpClient, $this->config);
        $this->dashboard = new DashboardApi($this->httpClient, $this->config);
        $this->routing = new RoutingApi($this->httpClient, $this->config);
        $this->voiceRuntime = new VoiceRuntimeApi($this->httpClient, $this->config);
    }

    /**
     * Helper to wrap API calls with friendly error handling (Task 3.2)
     */
    public static function execute(callable $callback) {
        try {
            return $callback();
        } catch (ApiException $e) {
            $status = $e->getCode();
            $message = $e->getMessage();
            $code = "API_ERROR";
            $data = null;

            $body = $e->getResponseBody();
            if (!empty($body)) {
                $decoded = json_decode($body, true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                    $data = $decoded;
                    if (isset($decoded['message'])) {
                        $message = $decoded['message'];
                    } elseif (isset($decoded['detail'])) {
                        $detail = $decoded['detail'];
                        $message = is_string($detail) ? $detail : json_encode($detail);
                    }
                    if (isset($decoded['code'])) {
                        $code = $decoded['code'];
                    }
                }
            }
            throw new ZarniteException($message, $status, $code, $data, $e);
        }
    }
}
