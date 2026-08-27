# Zarnite PHP SDK

Welcome to the official **Zarnite PHP SDK**! This library allows you to build, manage, and scale real-time conversational AI tutors and RAG services on the Zarnite platform with minimal effort.

Organized under Composer PSR-4 namespaces (`Zarnite\Client`), this SDK is fully integrated with GuzzleHttp and optimized for modern PHP applications, web services, and Laravel/WordPress platforms.

---

## 📦 Installation

Add the package to your project using **Composer**:

```bash
composer require zarnite/sdk
```

---

## 🚀 Quick Start

Initialize the unified `Zarnite\Client` with your API key to interact with your AI services cleanly.

```php
<?php

require_once __DIR__ . '/vendor/autoload.class.php';

use Zarnite\Client;
use Zarnite\ZarniteException;

$client = new Client([
    'apiKey' => 'zar_live_your_api_key_here'
]);

try {
    // 1. Fetch available tutor agents safely (Task 3.2)
    $agentsEnvelope = Client::execute(function() use ($client) {
        return $client->agents->listAgentsV1AgentsGet();
    });
    
    $agents = $agentsEnvelope->getData();
    echo "Found " . count($agents) . " active tutor agents.\n";

} catch (ZarniteException $e) {
    echo "Error [{$e->getErrorCode()}] (Status {$e->getStatus()}): {$e->getMessage()}\n";
}
```

---

## 🛠️ Common Use Cases

### 1. Programmatic Agent Customization
Create new conversational agents with specific prompts, languages, and voices programmatically:

```php
$newAgent = Client::execute(function() use ($client) {
    return $client->agents->createAgentV1AgentsPost([
        'name' => 'Spanish Tutor Maria',
        'language' => 'Spanish',
        'voice' => 'Aoede',
        'system_prompt' => 'You are Maria, a friendly Spanish tutor. Help the user practice conversational Spanish.'
    ]);
});

$agentId = $newAgent->getData()->getId();
echo "Created Maria Agent with ID: {$agentId}\n";
```

### 2. Ingesting Grounding Documents (RAG)
Upload document guidelines (PDF, TXT, MD, DOCX) to ground your agent's knowledge context:

```php
// Upload a document permanently for RAG grounding
$uploadResponse = Client::execute(function() use ($client, $agentId) {
    return $client->knowledge->uploadAgentDocumentV1AgentsAgentIdDocumentsPost(
        $agentId,
        './rulesOfGrammar.pdf'
    );
});

echo "Document uploaded and indexed successfully!\n";
```

### 3. Bootstrapping Real-Time Voice Sessions
Mint short-lived credentials to boot an interactive, low-latency WebRTC voice session:

```php
$sessionResponse = Client::execute(function() use ($client, $agentId) {
    return $client->playground->bootstrapSessionV1PlaygroundSessionsPost([
        'agent_id' => $agentId,
        'learner_id' => 'learner_user_123',
        'enable_knowledge_base' => true
    ]);
});

$data = $sessionResponse->getData();
echo "Room Session Created: {$data->getSessionId()}\n";
echo "LiveKit Server URL: {$data->getUrl()}\n";
echo "Access Token: {$data->getToken()}\n";
```

---

## 🛡️ Error Handling

When the library is unable to connect to the API, or if the API returns a non-success status code (i.e. 4xx or 5xx), a custom `ZarniteException` is raised (Task 3.2):

```php
try {
    Client::execute(function() use ($client) {
        return $client->agents->getAgentV1AgentsAgentIdGet('invalid_id');
    });
} catch (ZarniteException $e) {
    echo "Status Code: " . $e->getStatus() . "\n";       // e.g. 404
    echo "Error Code: " . $e->getErrorCode() . "\n";     // e.g. "API_ERROR"
    print_r($e->getData());                             // Raw server JSON response
}
```

---

## 📄 License
MIT © Zarnite Platform
