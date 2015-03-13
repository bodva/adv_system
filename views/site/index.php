<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $this yii\Helpers\Html */
$this->title = 'ADV APP';
?>
<div class="site-index">
	<h1>ADV sytem</h1>
	<span>we have some drugs for u, Neo</span>
	<br/><br/>
	<div class="row">
		<div class="col-md-1">
			<a href="/ticket/add" class="btn btn-primary">Add adv</a>
		</div>
	</div>

	<br/>

	<div class="row">
		<div class="col-md-12 col-lg-offset-0">
			<table class="table table-bordered table-condensed table-striped table-hover">
				<tr>
					<th style="max-width: 100px;">name</th>
					<th>description</th>
					<th style="max-width: 50px">price</th>
					<th style="max-width: 50px">date</th>
					<th style="max-width: 50px">author</th>
				</tr>
				<?php foreach($list as $model): ?>
				<tr>
					<td style="max-width: 100px"><?= Html::a($model->title,['ticket/','id'=>$model->id]);?></td>
					<td>
						<?php if ($model->pic) {?>
							<img src="/uploads/<?= $model->pic; ?>" class="img-thumbnail img-p img-small-preview">
						<?php } ?>
						<?= nl2br($model->descr) ?>
					</td>
					<td style="max-width: 50px"><?= $model->price; ?></td>
					<td style="max-width: 50px"><?= \app\helpers\Setup::convert($model->dateadd,'datetime'); ?></td>
					<td style="max-width: 50px"><?= $model->author; ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>

</div>
