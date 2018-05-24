<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Customer;
use app\models\Rooms;

?>

<div class="bookings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->dropDownList(ArrayHelper::map(
        Rooms::find()->asArray()->all(), 'id','description')) ?>

    <?= $form->field($model, 'arrive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'people')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
<div class="alert alert-warning">
    <?= $form->errorSummary($model);?>
    </div>
    <?php ActiveForm::end(); ?>

</div>