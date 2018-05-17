<?php

/**
 * AppserverIo\Psr\Cli\ConsoleFactoryInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/cli
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Cli;

use AppserverIo\Psr\ApplicationServer\ApplicationServerInterface;
use AppserverIo\Psr\Cli\Configuration\ConsoleConfigurationInterface;

/**
 * Factory to create new console instances.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2018 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/cli
 * @link      http://www.appserver.io
 */
interface ConsoleFactoryInterface
{

    /**
     * Factory method to create new console instances.
     *
     * @param \AppserverIo\Psr\ApplicationServer\ApplicationServerInterface    $applicationServer The application server instance
     * @param \AppserverIo\Psr\Cli\Configuration\ConsoleConfigurationInterface $consoleNode       The console configuration
     *
     * @return \AppserverIo\Psr\Cli\ConsoleInterface The console instance
     */
    public static function factory(ApplicationServerInterface $applicationServer, ConsoleConfigurationInterface $consoleNode);
}
