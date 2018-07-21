<?php

namespace JPry\IntelliJThrowTest;

use JPry\IntelliJThrowTest\Exception\InvalidField;

class Example {

	/**
	 * @throws InvalidField When an invalid field class is provided through the filter.
	 */
	protected function throw_exception() {
		throw InvalidField::from_field( 'FakeFieldClass' );
	}
}
