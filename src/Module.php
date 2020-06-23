<?php

/**
 * @author Kohana team
 * @copyright 2020 Kohana team
 * @license BSD-3-Clause
 */
namespace Kohana\Dummy;

use Kohana\AbstractModule;

/**
 * Dummy module manager.
 */
final class Module extends AbstractModule
{
    /**
     * @inheritdoc
     */
    public function getPath(): string
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR;
    }

    /**
     * @inheritdoc
     */
    public function getNamespace(): string
    {
        return __NAMESPACE__ . '\\';
    }

    /**
     * @inheritdoc
     */
    public function getId(): string
    {
        return 'kohana';
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'Kohana';
    }

    /**
     * @inheritdoc
     */
    public function getVersion(): string
    {
        return '1.0.0';
    }
}
