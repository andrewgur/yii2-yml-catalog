<?php
namespace pastuhov\yml;

/**
 * Interface ShopInterface
 *
 * Содержит описание магазина.
 *
 * @package pastuhov\yml
 */
interface ShopInterface
{
    /**
     * Короткое название магазина.
     *
     * Название, которое выводится в списке найденных на Яндекс.Маркете товаров. Оно не должно
     * содержать более 20 символов. В названии нельзя использовать слова, не имеющие отношения
     * к наименованию магазина (например: лучший, дешевый), указывать номер телефона и т.п.
     * Название магазина должно совпадать с фактическим названием магазина, которое публикуется на сайте.
     * При несоблюдении данного требования наименование может быть изменено Яндексом самостоятельно без
     * уведомления магазина.
     *
     * @return string
     */
    public function getName();

    /**
     * Полное наименование компании, владеющей магазином. Не публикуется, используется для внутренней идентификации.
     *
     * @return string
     */
    public function getCompany();

    /**
     * URL главной страницы магазин.
     *
     * @return string
     */
    public function getUrl();

    /**
     * Система управления контентом, на основе которой работает магазин (CMS).
     *
     * @return string
     */
    public function getPlatform();

    /**
     * Версия CMS.
     *
     * @return string
     */
    public function getVersion();

    /**
     * Наименование агентства, которое оказывает техническую поддержку магазину и отвечает за работоспособность сайта.
     *
     * @return string
     */
    public function getAgency();

    /**
     * Контактный адрес разработчиков CMS или агентства, осуществляющего техподдержку.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Элемент предназначен для управления участием товарных предложений в программе «Заказ на Маркете».
     *
     * - 0 — товар/YML-файл не участвует в программе «Заказ на Маркете»
     * - 1 — товар/YML-файл участвует в программе «Заказ на Маркете»
     *
     * @return string
     */
    public function getCpa();
}
