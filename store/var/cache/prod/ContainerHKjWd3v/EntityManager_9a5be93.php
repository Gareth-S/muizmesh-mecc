<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc898f = null;
    private $initializer4c92a = null;
    private static $publicProperties93d4f = [
        
    ];
    public function getConnection()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getConnection', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getMetadataFactory', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getExpressionBuilder', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'beginTransaction', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getCache', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'transactional', array('func' => $func), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'commit', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->commit();
    }
    public function rollback()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'rollback', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getClassMetadata', array('className' => $className), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'createQuery', array('dql' => $dql), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'createNamedQuery', array('name' => $name), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'createQueryBuilder', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'flush', array('entity' => $entity), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'clear', array('entityName' => $entityName), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->clear($entityName);
    }
    public function close()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'close', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->close();
    }
    public function persist($entity)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'persist', array('entity' => $entity), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'remove', array('entity' => $entity), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'refresh', array('entity' => $entity), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'detach', array('entity' => $entity), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'merge', array('entity' => $entity), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'contains', array('entity' => $entity), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getEventManager', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getConfiguration', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'isOpen', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getUnitOfWork', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getProxyFactory', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'initializeObject', array('obj' => $obj), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'getFilters', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'isFiltersStateClean', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'hasFilters', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return $this->valueHolderc898f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4c92a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc898f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc898f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc898f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, '__get', ['name' => $name], $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        if (isset(self::$publicProperties93d4f[$name])) {
            return $this->valueHolderc898f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc898f;
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
        $targetObject = $this->valueHolderc898f;
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
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc898f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc898f;
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
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, '__isset', array('name' => $name), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc898f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc898f;
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
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, '__unset', array('name' => $name), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc898f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc898f;
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
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, '__clone', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        $this->valueHolderc898f = clone $this->valueHolderc898f;
    }
    public function __sleep()
    {
        $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, '__sleep', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
        return array('valueHolderc898f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c92a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c92a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4c92a && ($this->initializer4c92a->__invoke($valueHolderc898f, $this, 'initializeProxy', array(), $this->initializer4c92a) || 1) && $this->valueHolderc898f = $valueHolderc898f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc898f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc898f;
    }
}
