<?php

namespace Phalcon\Di;

/**
 * Represents individually a service in the services container
 *
 * ```php
 * $service = new \Phalcon\Di\Service(
 *     "request",
 *     \Phalcon\Http\Request::class
 * );
 *
 * $request = service->resolve();
 * ```
 */
class Service implements \Phalcon\Di\ServiceInterface
{

    protected $definition;

    /**
     * @var bool
     */
    protected $resolved = false;

    /**
     * @var bool
     */
    protected $shared = false;


    protected $sharedInstance;


    /**
     * Phalcon\Di\Service
     *
     * @param mixed $definition
     * @param bool $shared
     */
    final public function __construct($definition, bool $shared = false) {}

    /**
     * Returns the service definition
     *
     * @return mixed
     */
    public function getDefinition() {}

    /**
     * Returns a parameter in a specific position
     *
     * @param int $position
     * @return array
     */
    public function getParameter(int $position) {}

    /**
     * Returns true if the service was resolved
     *
     * @return bool
     */
    public function isResolved(): bool {}

    /**
     * Check whether the service is shared or not
     *
     * @return bool
     */
    public function isShared(): bool {}

    /**
     * Resolves the service
     *
     * @param array $parameters
     * @param \Phalcon\Di\DiInterface $container
     * @return mixed
     */
    public function resolve($parameters = null, \Phalcon\Di\DiInterface $container = null) {}

    /**
     * Set the service definition
     *
     * @param mixed $definition
     */
    public function setDefinition($definition) {}

    /**
     * Changes a parameter in the definition without resolve the service
     *
     * @param int $position
     * @param array $parameter
     * @return \Phalcon\Di\ServiceInterface
     */
    public function setParameter(int $position, array $parameter): ServiceInterface {}

    /**
     * Sets if the service is shared or not
     *
     * @param bool $shared
     */
    public function setShared(bool $shared) {}

    /**
     * Sets/Resets the shared instance related to the service
     *
     * @param mixed $sharedInstance
     */
    public function setSharedInstance($sharedInstance) {}

}