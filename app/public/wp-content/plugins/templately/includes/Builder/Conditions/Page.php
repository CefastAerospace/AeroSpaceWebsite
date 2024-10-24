<?php

namespace Templately\Builder\Conditions;

class Page extends Condition {
	public function get_priority(): int {
		return 35;
	}

	public function get_label(): string {
		return __( 'Page', 'templately' );
	}

	public function get_type(): string {
		return 'singular';
	}

	public function get_name(): string {
		return 'page';
	}

	public function check( $args = [] ): bool {
		return is_page();
	}
}