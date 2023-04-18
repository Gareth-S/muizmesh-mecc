<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6cf20 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer046f9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties65e08 = [
        
    ];

    public function getConnection()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getConnection', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getMetadataFactory', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getExpressionBuilder', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'beginTransaction', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getCache', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getCache();
    }

    public function transactional($func)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'transactional', array('func' => $func), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'wrapInTransaction', array('func' => $func), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'commit', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->commit();
    }

    public function rollback()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'rollback', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getClassMetadata', array('className' => $className), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'createQuery', array('dql' => $dql), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'createNamedQuery', array('name' => $name), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'createQueryBuilder', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'flush', array('entity' => $entity), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'clear', array('entityName' => $entityName), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->clear($entityName);
    }

    public function close()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'close', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->close();
    }

    public function persist($entity)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'persist', array('entity' => $entity), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'remove', array('entity' => $entity), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'refresh', array('entity' => $entity), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'detach', array('entity' => $entity), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'merge', array('entity' => $entity), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getRepository', array('entityName' => $entityName), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'contains', array('entity' => $entity), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getEventManager', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getConfiguration', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'isOpen', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getUnitOfWork', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getProxyFactory', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'initializeObject', array('obj' => $obj), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'getFilters', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'isFiltersStateClean', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'hasFilters', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return $this->valueHolder6cf20->hasFilters();
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

        $instance->initializer046f9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6cf20) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6cf20 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6cf20->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, '__get', ['name' => $name], $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        if (isset(self::$publicProperties65e08[$name])) {
            return $this->valueHolder6cf20->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf20;

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

        $targetObject = $this->valueHolder6cf20;
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
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf20;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6cf20;
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
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, '__isset', array('name' => $name), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf20;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6cf20;
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
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, '__unset', array('name' => $name), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6cf20;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6cf20;
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
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, '__clone', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        $this->valueHolder6cf20 = clone $this->valueHolder6cf20;
    }

    public function __sleep()
    {
        $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, '__sleep', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;

        return array('valueHolder6cf20');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer046f9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer046f9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer046f9 && ($this->initializer046f9->__invoke($valueHolder6cf20, $this, 'initializeProxy', array(), $this->initializer046f9) || 1) && $this->valueHolder6cf20 = $valueHolder6cf20;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6cf20;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6cf20;
    }
}
