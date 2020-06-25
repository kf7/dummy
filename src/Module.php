<?php

/**
 * Part of module of Kohana framework.
 *
 * @author Kohana team
 * @copyright 2020 Kohana team
 * @license BSD-3-Clause
 */
namespace Kohana\Dummy;

use Kohana\AbstractModule;
use function dirname;

/**
 * Dummy module.
 */
final class Module extends AbstractModule
{
    /**
     * @inheritDoc
     */
    public function getPath(): string
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR;
    }

    /**
     * @inheritDoc
     */
    public function getNamespace(): string
    {
        return __NAMESPACE__ . '\\';
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        return 'dummy';
    }

    /**
     * @inheritDoc
     */
    public function getVersion(): string
    {
        return '1.0.0';
    }
}
