# Whapi SDK

**Fixed version of PHP SDK for Whapi.Cloud API to interact with WhatsApp via HTTP.**

- Official API docs: https://whapi.cloud/docs

---

## What is this?
This SDK is auto-generated using [OpenAPI Generator](https://openapi-generator.tech), based on Whapi.Cloud's official OpenAPI [specification](https://panel.whapi.cloud/yaml/openapi.yaml).  
The spec was patched to make the PHP client work as expected.

### Fixes applied
- **Property name collision causing `Cannot redeclare` error**: removed a send-only `filename` property from content models to avoid a `getFilename()` vs `getFileName()` method conflict in the generated PHP client.
- **Boolean query parameter format**: configure the global default configuration to use string values as required by Whapi. The generated serializer reads this global setting, even when a separate configuration is passed to an API client.
- **Media placeholders**: accept `media_init` as well as normal media IDs.
- **Required fields and MIME types**: require the existing `timestamp` field on media and `application` on application requests; correct `audio/acc` to `audio/aac`.
- **OpenAPI 3.0 compatibility**: cleaned up several validator warnings (e.g., no siblings next to `$ref`, moved misplaced `example` fields).
- **Short LIDs**: allow the documented 7–15 digit `@lid` identifiers in chat IDs and message recipients, including values shorter than the generic upstream patterns accept.
- **Partial settings updates**: omit unspecified settings instead of sending server defaults that reset unrelated channel settings.
- **Outgoing-call authorization errors**: preserve both string and structured `error` values instead of losing string diagnostics during deserialization.

## Upstream snapshot

The 2.0 development line includes the full upstream specification retrieved on **2026-10-14** from <https://panel.whapi.cloud/yaml/openapi.yaml>, with the schema fixes above reapplied. The upstream `info.version` remains `1.8.7`; it does not identify a unique snapshot.

- Upstream Last-Modified: `Tue, 13 Oct 2026 09:31:48 GMT`
- Upstream SHA-256 before applying fixes: `c26a7a04f65e402d21c97f0bb2f09411650fd186884841e5576c76d74a347596`
- OpenAPI Generator: `7.26.0` (PHP generator)

## Migrating from 1.x to 2.0

The minimum PHP version is now **8.4**, with PHP **8.4 and 8.5** supported and tested. The namespace and other runtime dependency requirements are unchanged. This release follows upstream's current API, including these public interface changes:

- `WebhookPayload::getUser()` now returns `WebhookUser`, whose `name` is optional, instead of `Contact`.
- `GroupsApi::getGroup()` adds `$resync = false` before `$contentType`. Update calls passing the content type positionally.
- `StoriesApi::createStoryMedia()` and `MessagesApi::sendMessageStoryMedia()` add `$allow_reshare = true` before `$contentType`.
- `BlacklistApi::blacklistAdd()` and `blacklistRemove()` rename `$contact_id` to `$contact_id_or_lid`; update named arguments.
- The same parameter changes apply to the corresponding request builders, asynchronous and HTTP-info methods.
- Call events now require `chat_id`; interactive message properties now require `body`. Follow the updated generated models and API documentation for other upstream additions.
- `Settings` has no implicit defaults. Set each value explicitly when updating a channel, including `false` and empty strings when intended.
- `MakeCall401Response::getError()` returns the original string or a `stdClass` containing the structured error fields. This field is generated as `mixed` because the PHP generator otherwise collapses the upstream union into an object-only model.

Identity matching and migration of stored users and chats remain the consuming application's responsibility.

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

## LID identifiers

LIDs are opaque strings such as `154662208577626@lid`. Preserve the suffix and never treat their digits as a phone number. Send messages directly to a LID using `SenderText::setTo()`; no reverse lookup is required.

```php
use Purelines\WhapiSdk\Api\ContactsApi;

$contacts = new ContactsApi(new GuzzleHttp\Client(), $config);
$mapping = $contacts->getIdByLid('154662208577626@lid');
$whatsappId = $mapping->getId(); // For example: 15551234567@s.whatsapp.net
```

With Guzzle's default error handling, an unavailable mapping raises `ApiException` with status `404`; lookup service failures use `502`. The SDK preserves the error body and does not retry or manufacture a mapping. Clients configured with `http_errors => false` receive the generated `ResponseError` for documented synchronous error responses.

Messages, chats, contacts and webhook users expose optional `phone` fields. An unresolved LID remains usable when this field is absent. Existing `getLidById()` and `getLidByIds()` methods remain available for the other lookup direction.

`Settings::setDataMode()` accepts `original`, `replace` or `extend`. Setting it on a model has no remote effect until the caller explicitly submits a settings update. The SDK leaves `data_mode` unset by default. See [Whapi's identity-mode documentation](https://support.whapi.cloud/help-desk/faq/whatsapp-usernames-and-bsuid) before choosing a mode; `extend` is currently experimental.

---

## Regenerate SDK from spec
Update `openapi.yaml` and then:

```bash
# Install dependencies
composer install

# Validate the patched specification
docker run --rm \
  --user "$(id -u):$(id -g)" \
  -v "$(pwd):/local" \
  openapitools/openapi-generator-cli:v7.26.0 validate \
  -i /local/openapi.yaml

# Generate PHP client using the pinned OpenAPI Generator
docker run --rm \
  --user "$(id -u):$(id -g)" \
  -v "$(pwd):/local" \
  openapitools/openapi-generator-cli:v7.26.0 generate \
  -i /local/openapi.yaml \
  -c /local/config.yaml \
  -g php \
  -o /local

# Format generated PHP code with php-cs-fixer
composer format
composer test
```

- The generated API docs are in [./docs/](./docs/).
- For the authoritative API reference, see https://whapi.cloud/docs.
- Reapply the schema fixes listed above whenever replacing the upstream snapshot. Keep schema fixes in `openapi.yaml`; do not edit generated PHP.
- The generator ignore file protects package configuration, this README and handwritten tests. Repeating generation and formatting from the same specification must produce identical files.
- Composer resolves development dependencies against PHP 8.4 so the same local installation can be tested on PHP 8.4 and 8.5.

## Tests

Run `composer test` on PHP 8.4 and PHP 8.5. The standalone PHPUnit 12 suite uses mocked Guzzle responses and requires no API credentials. It covers lookup requests and errors, identifier validation, identity payloads, settings and the fork's existing fixes.

OpenAPI Generator 7.26 still emits a PHP deprecation when validating an incomplete `ApplicationRequest`: it passes the missing required string to `preg_match()`. The required-field regression test exposes this existing generator behavior; it does not affect valid requests.

Asynchronous API methods can raise a PHP `Error` on connection failures or request exceptions without a response. Fixing this upstream generator limitation is deferred until it causes practical inconvenience; synchronous methods wrap these transport failures in `ApiException`.

---
