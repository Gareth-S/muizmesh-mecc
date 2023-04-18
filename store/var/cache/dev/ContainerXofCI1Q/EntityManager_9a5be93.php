<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef90b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1c525 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40cca = [
        
    ];

    public function getConnection()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getConnection', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getMetadataFactory', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getExpressionBuilder', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'beginTransaction', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getCache', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'transactional', array('func' => $func), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'commit', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->commit();
    }

    public function rollback()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'rollback', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getClassMetadata', array('className' => $className), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'createQuery', array('dql' => $dql), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'createNamedQuery', array('name' => $name), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'createQueryBuilder', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'flush', array('entity' => $entity), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'clear', array('entityName' => $entityName), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->clear($entityName);
    }

    public function close()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'close', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->close();
    }

    public function persist($entity)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'persist', array('entity' => $entity), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'remove', array('entity' => $entity), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'refresh', array('entity' => $entity), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'detach', array('entity' => $entity), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'merge', array('entity' => $entity), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'contains', array('entity' => $entity), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getEventManager', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getConfiguration', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'isOpen', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getUnitOfWork', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getProxyFactory', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'initializeObject', array('obj' => $obj), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'getFilters', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'isFiltersStateClean', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'hasFilters', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return $this->valueHolderef90b->hasFilters();
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

        $instance->initializer1c525 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef90b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef90b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef90b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, '__get', ['name' => $name], $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        if (isset(self::$publicProperties40cca[$name])) {
            return $this->valueHolderef90b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef90b;

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

        $targetObject = $this->valueHolderef90b;
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
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef90b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef90b;
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
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, '__isset', array('name' => $name), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef90b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef90b;
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
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, '__unset', array('name' => $name), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef90b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef90b;
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
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, '__clone', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        $this->valueHolderef90b = clone $this->valueHolderef90b;
    }

    public function __sleep()
    {
        $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, '__sleep', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;

        return array('valueHolderef90b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1c525 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1c525;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1c525 && ($this->initializer1c525->__invoke($valueHolderef90b, $this, 'initializeProxy', array(), $this->initializer1c525) || 1) && $this->valueHolderef90b = $valueHolderef90b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef90b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef90b;
    }
}
