<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Steffen Kamper <info@sk-typo3.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Starts all due tasks, used by the command line interface
 * This script must be included by the "CLI module dispatcher"
 *
 * @author		Steffen Kamper <info@sk-typo3.de>
 * @package		TYPO3
 * @subpackage	tx_ttnewsrssimport
 *
 */
// Not finished yet!
class tx_ttnewsrssimport_cli extends t3lib_cli {

	public function execute() {
		/*
		if($this->cli_isArg('-r')) {
			$args = $this->cli_getArgArray('-r',$argv);
			echo $this->repairReferences(intval($args[0]));
		}
		*/
	}
}

	// Call the functionality
$myObj = t3lib_div::makeInstance('tx_ttnewsrssimport_cli');
$myObj->execute();

?>