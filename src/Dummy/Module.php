<?php

declare(strict_types=1);

/**
 * @package KF7\Dummy
 * @author Kohana team
 * @copyright 2006-2019 Kohana team
 * @license https://kf7.github.io/license/
 */
namespace KF7\Dummy;

use const DIRECTORY_SEPARATOR;

use function dirname;

use KF7\System\PackageInterface;
use KF7\System\ApplicationInterface;

/**
 * Dummy module manager.
 */
class Module implements PackageInterface
{
    /**
     * @var string Module identifier.
     */
    protected $id = 'dummy';

    /**
     * @var string Module version.
     */
    protected $version = '0.0.1';

    /**
     * @var string Path to root directory of module.
     */
    protected $rootPath;

    /**
     * @var KF7\System\Routing\RouteInterface[]
     */
    protected $routes = [];

    /**
     * @var ApplicationInterface
     */
    protected $application;

    /**
     * Creates new module.
     */
    public function __construct(ApplicationInterface $application)
    {
        $this->rootPath = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR;
        $this->application = $application;
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @inheritDoc
     */
    public function getRootPath(): string
    {
        return $this->rootPath;
    }

    /**
     * @inheritDoc
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}
