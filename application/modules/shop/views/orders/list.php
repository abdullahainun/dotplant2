<?php
/**
 * @var \yii\web\View $this
 * @var \app\modules\shop\models\Order[] $orders
 * @var string $currentOrder
 */

    echo \yii\helpers\Html::tag('p', 'Current order: '.$currentOrder);
    foreach ($orders as $order) {
        echo \yii\helpers\Html::tag(
            'p',
            \yii\helpers\Html::a(
                'Order: '.$order->id,
                \yii\helpers\Url::to(['/shop/orders/show', 'hash' => $order->hash])
            )
        );
    }
?>