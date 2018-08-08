<?php

namespace JPry\IntelliJThrowTest\Exception;

class InvalidField extends \Exception implements Exception {

	/**
	 * Create a new instance of the exception for a field class name that is not recognized.
	 *
	 * @param string $field Class name of the service that was not recognized.
	 *
	 * @return static
	 */
	public static function from_field( $field ) {
		$message = sprintf(
			'The field class "%s" is not recognized and cannot be used.',
			is_object( $field )
				? get_class( $field )
				: (string) $field
		);

		return new static( $message );
	}

	/**
	 * Create a new instance of the exception for a field ID that is invalid.
	 *
	 * @param string $id The invalid field ID.
	 *
	 * @return static
	 */
	public static function invalid_id( $id ) {
		$message = sprintf(
			'The ID "%s" is invalid. The ID must be a simple string, or a single depth array',
			$id
		);

		return new static( $message );
	}
}
