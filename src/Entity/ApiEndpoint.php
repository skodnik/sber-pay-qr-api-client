<?php

declare(strict_types=1);

namespace Vlsv\SberPayQrApiClient\Entity;

enum ApiEndpoint: string
{
    /**
     * Создание заказа.
     * Клиент направляет запрос на формирование заказа в АС Сбербанка.
     * В ответ получает присвоенный Идентификатор заказа в АС Сбербанк (впоследствии используется в качестве ключа для
     * инициации других операций с заказом), ссылку для генерации QR кода.
     *
     * @see https://api.developer.sber.ru/product/PlatiQR/doc/v1/8024874223
     */
    case CREATION = 'creation';

    /**
     * Запрос статуса заказа.
     * Клиент запрашивает информацию по ранее созданному заказу по Уникальному идентификатору запроса (ранее
     * сформированному в АС Сбербанка) и по номеру заказа в CRM Клиента.
     * В ответ получает данные по заказу с детализацией по финансовым операциям.
     *
     * @see https://api.developer.sber.ru/product/PlatiQR/doc/v1/8024874228
     */
    case STATUS = 'status';

    /**
     * Отмена неоплаченного заказа.
     * Клиент направляет запрос на отмену заказа, по которому еще не была проведена финансовая операция.
     * В ответ получает обновленный статус заказа.
     *
     * @see https://api.developer.sber.ru/product/PlatiQR/doc/v1/8024874232
     */
    case REVOCATION = 'revocation';

    /**
     * Отмена/возврат финансовой операции.
     * Клиент направляет запрос на отмену/возврат финансовой операции, направляя параметры операции и сумму,
     * на которую необходимо выполнить отмену.
     * В ответ получает обновленный статус заказа и информацию по выполненной отмене/возврату операции.
     *
     * @see https://api.developer.sber.ru/product/PlatiQR/doc/v1/8024874247
     */
    case CANCEL = 'cancel';

    /**
     * Запрос реестра операций.
     * Клиент направляет запрос на получение сверки итогов за период или детальный реестр по всем проведенным операциям.
     *
     * @see https://api.developer.sber.ru/product/PlatiQR/doc/v1/8024874253
     */
    case REGISTRY = 'registry';

    public function getResponseClassName(): string
    {
        return match ($this->value) {
            'creation' => ResponseCreation::class,
            'status' => ResponseStatus::class,
            'revocation' => ResponseRevoke::class,
            'cancel' => ResponseCancel::class,
            'registry' => ResponseRegistry::class,
        };
    }

    public function getScope(): string
    {
        return match ($this->value) {
            'creation' => 'order.create',
            'status' => 'order.status',
            'revocation' => 'order.revoke',
            'cancel' => 'order.cancel',
            'registry' => 'order.registry',
        };
    }

    public function getResourcePath(): string
    {
        return '/' . $this->value;
    }
}
