<?php

/**
 * @copyright  Frederic G. Østby
 * @license    http://www.makoframework.com/license
 */

namespace mako\http\exceptions;

use Exception;

use mako\http\exceptions\RequestException;

/**
 * Forbidden exception.
 *
 * @author  Frederic G. Østby
 */

class ForbiddenException extends RequestException
{
	/**
	 * Constructor.
	 *
	 * @access  public
	 * @param   string  $message      Exception message
	 * @param   \Exception $previous  Previous exception
	 */

	public function __construct($message = null, Exception $previous = null)
	{
		parent::__construct(403, $message, $previous);
	}
}