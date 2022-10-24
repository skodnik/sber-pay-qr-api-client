![phpunit tests](https://github.com/skodnik/sber-pay-qr-api-client/actions/workflows/php.yml/badge.svg)

# Клиент для работы с API SberPay QR/Плати QR

Оплата по QR - современный способ приёма платежей с помощью графического кода. Сервис оплаты по QR позволяет проводить
оплату по SberPay QR (в приложении СберБанк Онлайн), Плати QR (в приложениях банков-партнёров) и СБП QR (Система Быстрых
Платежей) [подробнее о сервисе](https://api.developer.sber.ru/product/PlatiQR/doc/v1/QR_API_doc1).

Данный клиент реализует сервисы платформы QR.API (QR продавца):

- **creation** - создание заказа и формирование Динамического QR-кода под создаваемый заказ (по запросу Клиента): QR код
  уже содержит сумму данного заказа.
- **status** - запрос статуса заказа: получение статуса оплаты и детализации по операциям.
- **revocation** - отмена неоплаченного заказа: Покупатель не произвел оплату в установленное время (как правило на
  сайтах до 20 минут ожидания), либо выбрал другой способ оплаты.
- **cancel** - отмена/возврат финансовой операции.
- **registry** - запрос реестра операций.

## Зависимости

Для выполнения запросов к API потребуется Sber API Registry `access_token`. Один из способов его получения - с помощью
библиотеки [vlsv/sber-api-registry-oauth-client](https://packagist.org/packages/vlsv/sber-api-registry-oauth-client).

## Установка библиотеки

```bash
composer require vlsv/sber-pay-qr-api-client
```

## Получение сертификата

### Официальная документация:

- [Выпустить сертификат](https://api.developer.sber.ru/how-to-use/create_certificate)
- [Настройки сервиса вызова API](https://api.developer.sber.ru/how-to-use/api_settings)

## Подготовка сертификата

```shell
openssl pkcs12 -in {path_to_certificate}/cert.p12 -out {path_to_certificate}/cert.pem -nodes
```

Или, как альтернатива, можно передавать сертификат в формате `.p12`, в этом случае необходимо указать и пароль для него.

## Работа с API

### Создание заказа

Пример конфигурации клиента смотри в [TestCaseBase.php](tests/TestCaseBase.php)

```php
$orderParamsType = (new \Vlsv\SberPayQrApiClient\Entity\RequestCreationOrderParamsType())
    ->setPositionName('some_position_name')
    ->setPositionCount(1)
    ->setPositionDescription('some_position_description')
    ->setPositionSum(190000);

$requestCreation = (new \Vlsv\SberPayQrApiClient\Entity\RequestCreation())
    ->setMemberId('some_member_id')
    ->setOrderCreateDate(new DateTimeImmutable())
    ->setOrderParamsType([$orderParamsType]);

try {
    /** @var \Vlsv\SberPayQrApiClient\Entity\ResponseCreation $responseCreation */
    $responseCreation = $this->apiClient->makeRequest(
        accessToken: 'personal_temporary_access_token',
        apiEndpoint: \Vlsv\SberPayQrApiClient\Entity\ApiEndpoint::CREATION,
        requestObject: $requestCreation,
    );
} catch (ApiException $exception) {
    echo $exception->getMessage();

    exit();
}

// Идентификатор заказа на стороне эквайера.
// Необходим для дальнейшей работы с API.
echo $responseCreation->getOrderId();

// Ссылка на форму оплаты - QR-код.
echo $responseCreation->getOrderFormUrl();
```

Все методы объекта ответа см. [ResponseCreation](src/Entity/ResponseCreation.php)

### Запрос статуса заказа

```php
$requestStatus = (new \Vlsv\SberPayQrApiClient\Entity\RequestStatus())
    ->setOrderId('5cf8cb8b-37e3-42e9-8f69-306fa72e106f')
    ->setTid('83457dda-332c-46f4-b928-8d4bd9ee3afe');

try {
    /** @var \Vlsv\SberPayQrApiClient\Entity\ResponseStatus $responseStatus */
    $responseStatus = $this->apiClient->makeRequest(
        accessToken: 'personal_temporary_access_token',
        apiEndpoint: \Vlsv\SberPayQrApiClient\Entity\ApiEndpoint::STATUS,
        requestObject: $requestStatus,
    );
} catch (\Vlsv\SberPayQrApiClient\Entity\ApiException $exception) {
    echo $exception->getMessage();

    exit();
}

// Состояние заказа на стороне эквайера.
echo $responseStatus->getOrderState()->value;
```

Все методы объекта ответа см. [ResponseStatus](src/Entity/ResponseStatus.php)

Работа с остальными методами производится аналогичным образом.

## Тесты

Все группы.

```bash
composer tests
```

Feature и unit.

```bash
composer tests-feature && composer tests-unit
```
