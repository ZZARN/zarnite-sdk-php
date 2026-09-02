<?php

namespace Zarnite\Test\Api;

use PHPUnit\Framework\TestCase;
use Zarnite\ApiException;
use Zarnite\Client;
use Zarnite\ZarniteException;

class ClientSmokeTest extends TestCase
{
    public function testClientInitializesCoreServices(): void
    {
        $client = new Client([
            'apiKey' => 'zar_test_smoke',
        ]);

        $this->assertInstanceOf(\Zarnite\Api\AgentsApi::class, $client->agents);
        $this->assertInstanceOf(\Zarnite\Api\KnowledgeApi::class, $client->knowledge);
        $this->assertInstanceOf(\Zarnite\Api\VoiceRuntimeApi::class, $client->voiceRuntime);
    }

    public function testClientRequiresApiKey(): void
    {
        $this->expectException(ZarniteException::class);
        $this->expectExceptionMessage('API Key is required to initialize the Zarnite Client.');

        new Client([]);
    }

    public function testExecuteWrapsApiExceptionDetails(): void
    {
        try {
            Client::execute(function () {
                throw new ApiException(
                    'Bad request',
                    422,
                    ['Content-Type' => ['application/json']],
                    '{"message":"Validation failed","code":"BAD_REQUEST","detail":{"field":"org_id"}}'
                );
            });
            self::fail('Expected ZarniteException to be thrown');
        } catch (ZarniteException $e) {
            self::assertSame(422, $e->getStatus());
            self::assertSame('BAD_REQUEST', $e->getErrorCode());
            self::assertSame('Validation failed', $e->getMessage());
            self::assertIsArray($e->getData());
            self::assertSame('org_id', $e->getData()['detail']['field']);
        }
    }
}
