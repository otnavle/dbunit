<?php
/*
 * This file is part of DBUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

/**
 * A TestCase extension that provides functionality for testing and asserting
 * against a real database.
 */
abstract class PHPUnit_Extensions_Database_TestCase extends TestCase
{
    use PHPUnit_Extensions_Database_TestCase_Trait;
}
