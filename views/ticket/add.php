<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'Add adv';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-add">
	<h1><?= Html::encode($this->title) ?></h1>
	<?php if (!empty($errors)): ?>
		<?php foreach ($errors as $error): ?>
			<div class="alert alert-danger">
				<?= nl2br(Html::encode($error[0])) ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
	<div class="row">
		<div class="col-md-6">
			<div class="">
				<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
					<div class="form-group">
						<label for="title">Name:</label>
						<input type="text" name="title" id="title" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="descr">Description:</label>
						<textarea class="form-control" name="descr" id="descr" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label for="price">Price:</label>
						<input type="text" name="price" id="price" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="author">Author:</label>
						<input type="text" name="author" id="author" class="form-control"/>
					</div>
					<div class="form-group">
						<?= $form->field($model, 'file')->fileInput(); ?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>
