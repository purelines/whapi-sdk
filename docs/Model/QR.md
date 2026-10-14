# QR

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the QR code |
**type** | **string** | Login challenge type. QR means scan rowdata/base64, code means enter code on the phone, webauthn means complete the passkey assertion. | [optional]
**base64** | **string** | Base64 encoded login image | [optional]
**rowdata** | **string** | Rowdata for generating the QR code | [optional]
**code** | **string** | Passkey verification code to enter on the phone | [optional]
**request_id** | **string** | Pending passkey request id. Send the WebAuthn response back for the same request. | [optional]
**public_key** | **object** | PublicKeyCredentialRequestOptions JSON for navigator.credentials.get({ publicKey }). | [optional]
**url** | **string** | Origin that must be used for the WebAuthn ceremony. | [optional]
**console_script** | **string** | Browser console helper that runs navigator.credentials.get on the required origin and prints the response JSON. | [optional]
**expire** | **float** | Seconds until the login challenge expires | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
