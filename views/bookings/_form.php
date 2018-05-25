<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Customer;
use dosamigos\datetimepicker\DateTimePicker;

?>

<div class="bookings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->dropDownList(ArrayHelper::map(
        Customer::find()->all(), 'id','name')) ?>

    <div class="form-group">
        <label for="arrive">Arrival</label>
        <?= DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'arrive',
            'language' => 'en',
            'size' => 'ms',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd hh:ii:s',
                'todayBtn' => false
            ]
        ]);?>
    </div>

    <div class="form-group">
        <label for="arrive">Departure</label>
        <?= DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'leave',
            'language' => 'en',
            'size' => 'ms',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd hh:ii:s',
                'todayBtn' => false
            ]
        ]);?>
    </div>

    <?= $form->field($model, 'people')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
<div class="alert alert-warning">
    <?= $form->errorSummary($model);?>
    </div>
    <?php ActiveForm::end(); ?>

</div>