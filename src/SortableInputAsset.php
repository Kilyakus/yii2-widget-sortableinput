<?php
namespace kilyakus\widget\sortinput;

use kilyakus\widgets\AssetBundle;

class SortableInputAsset extends AssetBundle
{
	public function init()
	{
		$this->setSourcePath(__DIR__ . '/assets');
		$this->setupAssets('js', ['js/kv-sortable-input']);
		parent::init();
	}
}
