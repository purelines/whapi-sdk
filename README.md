# Whapi SDK

**Fixed version of PHP SDK for Whapi.Cloud API to interact with WhatsApp via HTTP.**

- Official API docs: https://whapi.cloud/docs

---

## What is this?
This SDK is auto-generated using [OpenAPI Generator](https://openapi-generator.tech), based on Whapi.Cloud's official OpenAPI [specification](https://panel.whapi.cloud/yaml/openapi.yaml).  
The spec was patched to make the PHP client work as expected.

### Fixes applied
- **Property name collision causing `Cannot redeclare` error**: removed a send-only `filename` property from content models to avoid a `getFilename()` vs `getFileName()` method conflict in the generated PHP client.
- **Boolean query parameter format**: adjusted to use string values as required by the Whapi API, since OpenAPI Generator defaults to integers.
- **OpenAPI 3.0 compatibility**: cleaned up several validator warnings (e.g., no siblings next to `$ref`, moved misplaced `example` fields).

---

## Installation
```bash
composer require purelines/whapi-sdk
```

---

## Quick start
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Purelines\WhapiSdk\Api\MessagesApi;
use Purelines\WhapiSdk\ApiException;
use Purelines\WhapiSdk\Configuration;
use Purelines\WhapiSdk\Model\SenderText;

$config = Configuration::getDefaultConfiguration()
    // Set your API token (copy it from Whapi panel, channel page):
    ->setAccessToken('YOUR_TOKEN')
    // Use string format for boolean query parameters (required by Whapi):
    ->setBooleanFormatForQueryString(Configuration::BOOLEAN_FORMAT_STRING);

$api = new MessagesApi(new GuzzleHttp\Client(), $config);

// Send a text message
$sender = new SenderText();
$sender->setTo('13016789891'); // E.164 format, no spaces
$sender->setBody('Hello from Whapi SDK!');

try {
    $result = $api->sendMessageText($sender);
    print_r($result);
} catch (ApiException|InvalidArgumentException $e) {
    echo 'API error: ', $e->getMessage();
}
```

> Tip: For receiving messages, set up a webhook in the Whapi panel for real-time delivery.

---

## Regenerate SDK from spec
Update `openapi.yaml` and then:

```bash
# Install dependencies
composer install

# Generate PHP client using OpenAPI Generator
docker run --rm \
  -v "$(pwd):/local" \
  openapitools/openapi-generator-cli generate \
  -i /local/openapi.yaml \
  -c /local/config.yaml \
  -g php \
  -o /local

# Format generated PHP code with php-cs-fixer
vendor/bin/php-cs-fixer fix
```

- The generated API docs are in [./docs/](./docs/).
- For the authoritative API reference, see https://whapi.cloud/docs.

---
