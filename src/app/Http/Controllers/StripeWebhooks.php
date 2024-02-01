<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Laravel\Cashier\Events\WebhookReceived;


class StripeWebhooks
{

    protected OrdersController $orderController;
    protected Orders $orderModel;
    protected AdminController $adminController;

    public function __construct(OrdersController $orderController, Orders $orderModel, AdminController $adminController)
    {
        $this->orderController = $orderController;
        $this->orderModel = $orderModel;
        $this->adminController = $adminController;
    }

    public function handle(
        WebhookReceived $event,
    )
    {
        if ($event->payload['type'] === 'payment_intent.succeeded') {
            $order_id =
                $event->payload['data']['object']['metadata']['order_id'];
            $order = $this->orderModel->get_order_by_id($order_id);
            $order->mark_as_paid();
            $this->orderController->customer_order_confirmed_mail($order->customer, $order);
            $this->adminController->notify_new_order($order);
            return response('Webhook Handled', 200);
        }
    }
}
