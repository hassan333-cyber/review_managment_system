<?php

namespace ContainerYgmuvdd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd5633 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer51a69 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesac341 = [
        
    ];

    public function getConnection()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getConnection', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getMetadataFactory', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getExpressionBuilder', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'beginTransaction', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getCache', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getCache();
    }

    public function transactional($func)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'transactional', array('func' => $func), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->transactional($func);
    }

    public function commit()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'commit', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->commit();
    }

    public function rollback()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'rollback', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getClassMetadata', array('className' => $className), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'createQuery', array('dql' => $dql), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'createNamedQuery', array('name' => $name), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'createQueryBuilder', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'flush', array('entity' => $entity), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'clear', array('entityName' => $entityName), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->clear($entityName);
    }

    public function close()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'close', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->close();
    }

    public function persist($entity)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'persist', array('entity' => $entity), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'remove', array('entity' => $entity), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'refresh', array('entity' => $entity), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'detach', array('entity' => $entity), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'merge', array('entity' => $entity), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getRepository', array('entityName' => $entityName), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'contains', array('entity' => $entity), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getEventManager', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getConfiguration', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'isOpen', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getUnitOfWork', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getProxyFactory', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'initializeObject', array('obj' => $obj), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'getFilters', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'isFiltersStateClean', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'hasFilters', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return $this->valueHolderd5633->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer51a69 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd5633) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd5633 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd5633->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, '__get', ['name' => $name], $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        if (isset(self::$publicPropertiesac341[$name])) {
            return $this->valueHolderd5633->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5633;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd5633;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5633;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd5633;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, '__isset', array('name' => $name), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5633;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd5633;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, '__unset', array('name' => $name), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5633;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd5633;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, '__clone', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        $this->valueHolderd5633 = clone $this->valueHolderd5633;
    }

    public function __sleep()
    {
        $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, '__sleep', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;

        return array('valueHolderd5633');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer51a69 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer51a69;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer51a69 && ($this->initializer51a69->__invoke($valueHolderd5633, $this, 'initializeProxy', array(), $this->initializer51a69) || 1) && $this->valueHolderd5633 = $valueHolderd5633;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd5633;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd5633;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
