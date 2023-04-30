<?php

namespace FieldPress;

class Main {
	public function init() {
		// $this->assets->init();
		$this->roles->init();
		$this->dynamic_data->init();
	}

	public function __construct(
		public Assets $assets,
		public Roles $roles,
		public DynamicData $dynamic_data
	) {}
}
