<?php
/**
 *
 * Orcid - based on user_orcid from Lars Naesbye Christensen
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Lars Naesbye Christensen, DeIC
 * @author Maxence Lange <maxence@pontapreta.net>
 * @copyright 2017
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Orcid\Service;

use OCP\ILogger;

class MiscService {

	/** @var ILogger */
	private $logger;

	/** @var string */
	private $appName;

	/**
	 * MiscService constructor.
	 *
	 * @param ILogger $logger
	 * @param string $appName
	 */
	public function __construct(ILogger $logger, $appName) {
		$this->logger = $logger;
		$this->appName = $appName;
	}

	/**
	 * @param string $message
	 * @param int $level
	 */
	public function log($message, $level = 2) {
		$data = array(
			'app'   => $this->appName,
			'level' => $level
		);

		$this->logger->log($level, $message, $data);
	}
}