# OpenAPI\Client\LabelsApi

All URIs are relative to https://gate.whapi.cloud, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addLabelAssociation()**](LabelsApi.md#addLabelAssociation) | **POST** /labels/{LabelID}/{AssociationID} | Add label association |
| [**deleteLabelAssociation()**](LabelsApi.md#deleteLabelAssociation) | **DELETE** /labels/{LabelID}/{AssociationID} | Delete label association |
| [**getLabelAssociations()**](LabelsApi.md#getLabelAssociations) | **GET** /labels/{LabelID} | Get objects associated with label |
| [**getLabels()**](LabelsApi.md#getLabels) | **GET** /labels | Get labels |


## `addLabelAssociation()`

```php
addLabelAssociation($label_id, $association_id): \OpenAPI\Client\Model\ResponseSuccess
```

Add label association

Through this method, it is possible to assign a label to a chat in WhatsApp Business

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | Label ID
$association_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AddLabelAssociationAssociationIDParameter(); // \OpenAPI\Client\Model\AddLabelAssociationAssociationIDParameter | Chat ID or Message ID for label association

try {
    $result = $apiInstance->addLabelAssociation($label_id, $association_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->addLabelAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**| Label ID | |
| **association_id** | [**\OpenAPI\Client\Model\AddLabelAssociationAssociationIDParameter**](../Model/.md)| Chat ID or Message ID for label association | |

### Return type

[**\OpenAPI\Client\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLabelAssociation()`

```php
deleteLabelAssociation($label_id, $association_id): \OpenAPI\Client\Model\ResponseSuccess
```

Delete label association

Through this method, it is possible to remove the labels from a chat in WhatsApp Business

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | Label ID
$association_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AddLabelAssociationAssociationIDParameter(); // \OpenAPI\Client\Model\AddLabelAssociationAssociationIDParameter | Chat ID or Message ID for label association

try {
    $result = $apiInstance->deleteLabelAssociation($label_id, $association_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->deleteLabelAssociation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**| Label ID | |
| **association_id** | [**\OpenAPI\Client\Model\AddLabelAssociationAssociationIDParameter**](../Model/.md)| Chat ID or Message ID for label association | |

### Return type

[**\OpenAPI\Client\Model\ResponseSuccess**](../Model/ResponseSuccess.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLabelAssociations()`

```php
getLabelAssociations($label_id): \OpenAPI\Client\Model\LabelAssociations
```

Get objects associated with label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_id = 'label_id_example'; // string | Label ID

try {
    $result = $apiInstance->getLabelAssociations($label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getLabelAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**| Label ID | |

### Return type

[**\OpenAPI\Client\Model\LabelAssociations**](../Model/LabelAssociations.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLabels()`

```php
getLabels(): \OpenAPI\Client\Model\Label[]
```

Get labels

In this method, you retrieve all your registered labels in your WhatsApp Business

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLabels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->getLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Label[]**](../Model/Label.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
