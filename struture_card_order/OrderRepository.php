<?php


class OrderRepository
{
    public function save(Order $order) {
        // реализация сохранения заказа в базу данных
    }

    public function load($orderId) {
        // реализация загрузки заказа из базы данных по идентификатору
    }

    public function update(Order $order) {
        // реализация обновления заказа в базе данных
    }

    public function delete(Order $order) {
        // реализация удаления заказа из базы данных
    }
}