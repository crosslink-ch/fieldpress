<?php

namespace FieldPress;

class Main {
	public function init() {
		$this->assets->init();
		$this->roles->init();
	}

	public function __construct(
		public Assets $assets,
		public Roles $roles
	) {}
}
