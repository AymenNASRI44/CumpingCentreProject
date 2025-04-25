<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ArtprimaPrometheusMetrics'.\DIRECTORY_SEPARATOR.'RedisConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ArtprimaPrometheusMetrics'.\DIRECTORY_SEPARATOR.'StorageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ArtprimaPrometheusMetricsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $namespace;
    private $type;
    private $redis;
    private $storage;
    private $ignoredRoutes;
    private $disableDefaultMetrics;
    private $disableDefaultPromphpMetrics;
    private $enableConsoleMetrics;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namespace($value): static
    {
        $this->_usedProperties['namespace'] = true;
        $this->namespace = $value;

        return $this;
    }

    /**
     * @default 'in_memory'
     * @param ParamConfigurator|mixed $value
     * @deprecated The type config parameter was deprecated in 1.14 and will be dropped in 2.0.
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    public function redis(array $value = []): \Symfony\Config\ArtprimaPrometheusMetrics\RedisConfig
    {
        if (null === $this->redis) {
            $this->_usedProperties['redis'] = true;
            $this->redis = new \Symfony\Config\ArtprimaPrometheusMetrics\RedisConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "redis()" has already been initialized. You cannot pass values the second time you call redis().');
        }

        return $this->redis;
    }

    /**
     * @return \Symfony\Config\ArtprimaPrometheusMetrics\StorageConfig|$this
     */
    public function storage(mixed $value = []): \Symfony\Config\ArtprimaPrometheusMetrics\StorageConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = $value;

            return $this;
        }

        if (!$this->storage instanceof \Symfony\Config\ArtprimaPrometheusMetrics\StorageConfig) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\ArtprimaPrometheusMetrics\StorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }

        return $this->storage;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function ignoredRoutes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['ignoredRoutes'] = true;
        $this->ignoredRoutes = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableDefaultMetrics($value): static
    {
        $this->_usedProperties['disableDefaultMetrics'] = true;
        $this->disableDefaultMetrics = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableDefaultPromphpMetrics($value): static
    {
        $this->_usedProperties['disableDefaultPromphpMetrics'] = true;
        $this->disableDefaultPromphpMetrics = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableConsoleMetrics($value): static
    {
        $this->_usedProperties['enableConsoleMetrics'] = true;
        $this->enableConsoleMetrics = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'artprima_prometheus_metrics';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('namespace', $value)) {
            $this->_usedProperties['namespace'] = true;
            $this->namespace = $value['namespace'];
            unset($value['namespace']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('redis', $value)) {
            $this->_usedProperties['redis'] = true;
            $this->redis = new \Symfony\Config\ArtprimaPrometheusMetrics\RedisConfig($value['redis']);
            unset($value['redis']);
        }

        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = \is_array($value['storage']) ? new \Symfony\Config\ArtprimaPrometheusMetrics\StorageConfig($value['storage']) : $value['storage'];
            unset($value['storage']);
        }

        if (array_key_exists('ignored_routes', $value)) {
            $this->_usedProperties['ignoredRoutes'] = true;
            $this->ignoredRoutes = $value['ignored_routes'];
            unset($value['ignored_routes']);
        }

        if (array_key_exists('disable_default_metrics', $value)) {
            $this->_usedProperties['disableDefaultMetrics'] = true;
            $this->disableDefaultMetrics = $value['disable_default_metrics'];
            unset($value['disable_default_metrics']);
        }

        if (array_key_exists('disable_default_promphp_metrics', $value)) {
            $this->_usedProperties['disableDefaultPromphpMetrics'] = true;
            $this->disableDefaultPromphpMetrics = $value['disable_default_promphp_metrics'];
            unset($value['disable_default_promphp_metrics']);
        }

        if (array_key_exists('enable_console_metrics', $value)) {
            $this->_usedProperties['enableConsoleMetrics'] = true;
            $this->enableConsoleMetrics = $value['enable_console_metrics'];
            unset($value['enable_console_metrics']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['namespace'])) {
            $output['namespace'] = $this->namespace;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['redis'])) {
            $output['redis'] = $this->redis->toArray();
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage instanceof \Symfony\Config\ArtprimaPrometheusMetrics\StorageConfig ? $this->storage->toArray() : $this->storage;
        }
        if (isset($this->_usedProperties['ignoredRoutes'])) {
            $output['ignored_routes'] = $this->ignoredRoutes;
        }
        if (isset($this->_usedProperties['disableDefaultMetrics'])) {
            $output['disable_default_metrics'] = $this->disableDefaultMetrics;
        }
        if (isset($this->_usedProperties['disableDefaultPromphpMetrics'])) {
            $output['disable_default_promphp_metrics'] = $this->disableDefaultPromphpMetrics;
        }
        if (isset($this->_usedProperties['enableConsoleMetrics'])) {
            $output['enable_console_metrics'] = $this->enableConsoleMetrics;
        }

        return $output;
    }

}
