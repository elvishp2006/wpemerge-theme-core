<?php

namespace WPEmergeTheme\Facades;

use WPEmerge\Support\Facade;

/**
 * Provide access to the avatar service
 *
 * @codeCoverageIgnore
 */
class Avatar extends Facade {
	protected static function getFacadeAccessor() {
		return 'wpemerge_theme.avatar.avatar';
	}
}
