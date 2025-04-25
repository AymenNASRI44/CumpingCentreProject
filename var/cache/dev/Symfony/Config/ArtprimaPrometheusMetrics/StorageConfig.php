<?php

namespace Symfony\Config\ArtprimaPrometheusMetrics;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StorageConfig 
{
    private $url;
    private $type;
    private $host;
    private $port;
    private $timeout;
    private $readTimeout;
    private $persistentConnections;
    private $password;
    private $database;
    private $prefix;
    private $options;
    private $_usedProperties = [];

    /**
     * DSN of the storage. All parsed values will override explicitly set parameters. Ex: redis://127.0.0.1?timeout=0.1
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): static
    {
        $this->_usedProperties['url'] = true;
        $this->url = $value;

        return $this;
    }

    /**
     * The type of storage provide by factories. Default factories are ["in_memory","apcu","apcng","redis"]
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * Use by some factory like redis. Default value should be managed by the factory at runtime.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): static
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;

        return $this;
    }

    /**
     * Use by some factory like redis. Default value should be managed by the factory at runtime.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function port($value): static
    {
        $this->_usedProperties['port'] = true;
        $this->port = $value;

        return $this;
    }

    /**
     * Connection timeout used by some factory like redis.
     * @default null
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function timeout($value): static
    {
        $this->_usedProperties['timeout'] = true;
        $this->timeout = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|float $value
     * @return $this
     */
    public function readTimeout($value): static
    {
        $this->_usedProperties['readTimeout'] = true;
        $this->readTimeout = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function persistentConnections($value): static
    {
        $this->_usedProperties['persistentConnections'] = true;
        $this->persistentConnections = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): static
    {
        $this->_usedProperties['password'] = true;
        $this->password = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function database($value): static
    {
        $this->_usedProperties['database'] = true;
        $this->database = $value;

        return $this;
    }

    /**
     * Internal prefix used by the storage. Available for redis and apcu type.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefix($value): static
    {
        $this->_usedProperties['prefix'] = true;
        $this->prefix = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function option(string $key, mixed $value): static
    {
        $this->_usedProperties['options'] = true;
        $this->options[$key] = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }

        if (array_key_exists('port', $value)) {
            $this->_usedProperties['port'] = true;
            $this->port = $value['port'];
            unset($value['port']);
        }

        if (array_key_exists('timeout', $value)) {
            $this->_usedProperties['timeout'] = true;
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }

        if (array_key_exists('read_timeout', $value)) {
            $this->_usedProperties['readTimeout'] = true;
            $this->readTimeout = $value['read_timeout'];
            unset($value['read_timeout']);
        }

        if (array_key_exists('persistent_connections', $value)) {
            $this->_usedProperties['persistentConnections'] = true;
            $this->persistentConnections = $value['persistent_connections'];
            unset($value['persistent_connections']);
        }

        if (array_key_exists('password', $value)) {
            $this->_usedProperties['password'] = true;
            $this->password = $value['password'];
            unset($value['password']);
        }

        if (array_key_exists('database', $value)) {
            $this->_usedProperties['database'] = true;
            $this->database = $value['database'];
            unset($value['database']);
        }

        if (array_key_exists('prefix', $value)) {
            $this->_usedProperties['prefix'] = true;
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['port'])) {
            $output['port'] = $this->port;
        }
        if (isset($this->_usedProperties['timeout'])) {
            $output['timeout'] = $this->timeout;
        }
        if (isset($this->_usedProperties['readTimeout'])) {
            $output['read_timeout'] = $this->readTimeout;
        }
        if (isset($this->_usedProperties['persistentConnections'])) {
            $output['persistent_connections'] = $this->persistentConnections;
        }
        if (isset($this->_usedProperties['password'])) {
            $output['password'] = $this->password;
        }
        if (isset($this->_usedProperties['database'])) {
            $output['database'] = $this->database;
        }
        if (isset($this->_usedProperties['prefix'])) {
            $output['prefix'] = $this->prefix;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }

        return $output;
    }

}
