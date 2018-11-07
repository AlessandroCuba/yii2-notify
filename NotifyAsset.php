<?php
/**
 * Created by PhpStorm.
 * User: manuel.gonzalez
 * Date: 25.10.2018
 * Time: 08:02
 */

namespace magp\notify;


use yii\web\AssetBundle;

class NotifyAsset extends AssetBundle
{
	public $sourcePath = __DIR__;

	public $css = [
		'assets/notify.css',
	];

	public $js = [
		'assets/bootstrap-notify.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}