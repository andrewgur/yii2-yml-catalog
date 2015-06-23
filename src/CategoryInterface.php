<?php
namespace pastuhov\yml;

use yii\db\ActiveRecordInterface;

interface CategoryInterface extends ActiveRecordInterface
{
    /**
     * Название категории.
     *
     * @return string
     */
    public function getName();

    /**
     * Идентификатор категории товаров.
     *
     * Идентификатор категории должен быть уникальным положительным целым числом. Ни у одной категории параметр id не
     * может быть равен «0»
     *
     * @return int
     */
    public function getId();

    /**
     * Идентификатор более высокой по иерархии (родительской) категории товаров.
     *
     * Если элемент <parentId> не указан, то категория считается корневой.
     *
     * @return int
     */
    public function getParentId();
}
