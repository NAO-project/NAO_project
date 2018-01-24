<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\ORM\Query;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
<<<<<<< HEAD
<<<<<<< HEAD
use Doctrine\ORM\Mapping\MappingException;
use Doctrine\ORM\Utility\PersisterHelper;
=======
>>>>>>> contactmanager
=======
use Doctrine\ORM\Mapping\MappingException;
use Doctrine\ORM\Utility\PersisterHelper;
>>>>>>> donmanager

/**
 * A ResultSetMappingBuilder uses the EntityManager to automatically populate entity fields.
 *
 * @author Michael Ridgway <mcridgway@gmail.com>
 * @since 2.1
 */
class ResultSetMappingBuilder extends ResultSetMapping
{
    /**
     * Picking this rename mode will register entity columns as is,
     * as they are in the database. This can cause clashes when multiple
     * entities are fetched that have columns with the same name.
     *
     * @var int
     */
    const COLUMN_RENAMING_NONE = 1;

    /**
     * Picking custom renaming allows the user to define the renaming
     * of specific columns with a rename array that contains column names as
     * keys and result alias as values.
     *
     * @var int
     */
    const COLUMN_RENAMING_CUSTOM = 2;

    /**
     * Incremental renaming uses a result set mapping internal counter to add a
     * number to each column result, leading to uniqueness. This only works if
     * you use {@see generateSelectClause()} to generate the SELECT clause for
     * you.
     *
     * @var int
     */
    const COLUMN_RENAMING_INCREMENT = 3;

    /**
     * @var int
     */
    private $sqlCounter = 0;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * Default column renaming mode.
     *
     * @var int
     */
    private $defaultRenameMode;

    /**
     * @param EntityManagerInterface $em
     * @param integer                $defaultRenameMode
     */
    public function __construct(EntityManagerInterface $em, $defaultRenameMode = self::COLUMN_RENAMING_NONE)
    {
        $this->em                = $em;
        $this->defaultRenameMode = $defaultRenameMode;
    }

    /**
     * Adds a root entity and all of its fields to the result set.
     *
     * @param string   $class          The class name of the root entity.
     * @param string   $alias          The unique alias to use for the root entity.
     * @param array    $renamedColumns Columns that have been renamed (tableColumnName => queryColumnName).
     * @param int|null $renameMode     One of the COLUMN_RENAMING_* constants or array for BC reasons (CUSTOM).
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function addRootEntityFromClassMetadata($class, $alias, $renamedColumns = [], $renameMode = null)
=======
    public function addRootEntityFromClassMetadata($class, $alias, $renamedColumns = array(), $renameMode = null)
>>>>>>> contactmanager
=======
    public function addRootEntityFromClassMetadata($class, $alias, $renamedColumns = [], $renameMode = null)
>>>>>>> donmanager
    {
        $renameMode     = $renameMode ?: $this->defaultRenameMode;
        $columnAliasMap = $this->getColumnAliasMap($class, $renameMode, $renamedColumns);

        $this->addEntityResult($class, $alias);
        $this->addAllClassFields($class, $alias, $columnAliasMap);
    }

    /**
     * Adds a joined entity and all of its fields to the result set.
     *
     * @param string   $class          The class name of the joined entity.
     * @param string   $alias          The unique alias to use for the joined entity.
     * @param string   $parentAlias    The alias of the entity result that is the parent of this joined result.
     * @param string   $relation       The association field that connects the parent entity result
     *                                 with the joined entity result.
     * @param array    $renamedColumns Columns that have been renamed (tableColumnName => queryColumnName).
     * @param int|null $renameMode     One of the COLUMN_RENAMING_* constants or array for BC reasons (CUSTOM).
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function addJoinedEntityFromClassMetadata($class, $alias, $parentAlias, $relation, $renamedColumns = [], $renameMode = null)
=======
    public function addJoinedEntityFromClassMetadata($class, $alias, $parentAlias, $relation, $renamedColumns = array(), $renameMode = null)
>>>>>>> contactmanager
=======
    public function addJoinedEntityFromClassMetadata($class, $alias, $parentAlias, $relation, $renamedColumns = [], $renameMode = null)
>>>>>>> donmanager
    {
        $renameMode     = $renameMode ?: $this->defaultRenameMode;
        $columnAliasMap = $this->getColumnAliasMap($class, $renameMode, $renamedColumns);

        $this->addJoinedEntityResult($class, $alias, $parentAlias, $relation);
        $this->addAllClassFields($class, $alias, $columnAliasMap);
    }

    /**
     * Adds all fields of the given class to the result set mapping (columns and meta fields).
     *
     * @param string $class
     * @param string $alias
     * @param array  $columnAliasMap
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function addAllClassFields($class, $alias, $columnAliasMap = [])
=======
    protected function addAllClassFields($class, $alias, $columnAliasMap = array())
>>>>>>> contactmanager
=======
    protected function addAllClassFields($class, $alias, $columnAliasMap = [])
>>>>>>> donmanager
    {
        $classMetadata = $this->em->getClassMetadata($class);
        $platform      = $this->em->getConnection()->getDatabasePlatform();

        if ( ! $this->isInheritanceSupported($classMetadata)) {
            throw new \InvalidArgumentException('ResultSetMapping builder does not currently support your inheritance scheme.');
        }


        foreach ($classMetadata->getColumnNames() as $columnName) {
            $propertyName = $classMetadata->getFieldName($columnName);
            $columnAlias  = $platform->getSQLResultCasing($columnAliasMap[$columnName]);

            if (isset($this->fieldMappings[$columnAlias])) {
                throw new \InvalidArgumentException("The column '$columnName' conflicts with another column in the mapper.");
            }

            $this->addFieldResult($alias, $columnAlias, $propertyName);
        }

        foreach ($classMetadata->associationMappings as $associationMapping) {
            if ($associationMapping['isOwningSide'] && $associationMapping['type'] & ClassMetadataInfo::TO_ONE) {
<<<<<<< HEAD
<<<<<<< HEAD
                $targetClass  = $this->em->getClassMetadata($associationMapping['targetEntity']);
                $isIdentifier = isset($associationMapping['id']) && $associationMapping['id'] === true;

                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    $columnName  = $joinColumn['name'];
                    $columnAlias = $platform->getSQLResultCasing($columnAliasMap[$columnName]);
                    $columnType = PersisterHelper::getTypeOfColumn($joinColumn['referencedColumnName'], $targetClass, $this->em);
=======
                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    $columnName  = $joinColumn['name'];
                    $columnAlias = $platform->getSQLResultCasing($columnAliasMap[$columnName]);
>>>>>>> contactmanager
=======
                $targetClass  = $this->em->getClassMetadata($associationMapping['targetEntity']);
                $isIdentifier = isset($associationMapping['id']) && $associationMapping['id'] === true;

                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    $columnName  = $joinColumn['name'];
                    $columnAlias = $platform->getSQLResultCasing($columnAliasMap[$columnName]);
                    $columnType = PersisterHelper::getTypeOfColumn($joinColumn['referencedColumnName'], $targetClass, $this->em);
>>>>>>> donmanager

                    if (isset($this->metaMappings[$columnAlias])) {
                        throw new \InvalidArgumentException("The column '$columnAlias' conflicts with another column in the mapper.");
                    }

<<<<<<< HEAD
<<<<<<< HEAD
                    $this->addMetaResult($alias, $columnAlias, $columnName, $isIdentifier, $columnType);
=======
                    $this->addMetaResult(
                        $alias,
                        $columnAlias,
                        $columnName,
                        (isset($associationMapping['id']) && $associationMapping['id'] === true)
                    );
>>>>>>> contactmanager
=======
                    $this->addMetaResult($alias, $columnAlias, $columnName, $isIdentifier, $columnType);
>>>>>>> donmanager
                }
            }
        }
    }

    private function isInheritanceSupported(ClassMetadataInfo $classMetadata)
    {
        if ($classMetadata->isInheritanceTypeSingleTable()
            && in_array($classMetadata->name, $classMetadata->discriminatorMap, true)) {
            return true;
        }

        return ! ($classMetadata->isInheritanceTypeSingleTable() || $classMetadata->isInheritanceTypeJoined());
    }

    /**
     * Gets column alias for a given column.
     *
     * @param string $columnName
     * @param int    $mode
     * @param array  $customRenameColumns
     *
     * @return string
     */
    private function getColumnAlias($columnName, $mode, array $customRenameColumns)
    {
        switch ($mode) {
            case self::COLUMN_RENAMING_INCREMENT:
                return $columnName . $this->sqlCounter++;

            case self::COLUMN_RENAMING_CUSTOM:
<<<<<<< HEAD
<<<<<<< HEAD
                return $customRenameColumns[$columnName] ?? $columnName;
=======
                return isset($customRenameColumns[$columnName])
                    ? $customRenameColumns[$columnName] : $columnName;
>>>>>>> contactmanager
=======
                return $customRenameColumns[$columnName] ?? $columnName;
>>>>>>> donmanager

            case self::COLUMN_RENAMING_NONE:
                return $columnName;

        }
    }

    /**
     * Retrieves a class columns and join columns aliases that are used in the SELECT clause.
     *
     * This depends on the renaming mode selected by the user.
     *
     * @param string $className
     * @param int    $mode
     * @param array  $customRenameColumns
     *
     * @return array
     */
    private function getColumnAliasMap($className, $mode, array $customRenameColumns)
    {
        if ($customRenameColumns) { // for BC with 2.2-2.3 API
            $mode = self::COLUMN_RENAMING_CUSTOM;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $columnAlias = [];
=======
        $columnAlias = array();
>>>>>>> contactmanager
=======
        $columnAlias = [];
>>>>>>> donmanager
        $class       = $this->em->getClassMetadata($className);

        foreach ($class->getColumnNames() as $columnName) {
            $columnAlias[$columnName] = $this->getColumnAlias($columnName, $mode, $customRenameColumns);
        }

        foreach ($class->associationMappings as $associationMapping) {
            if ($associationMapping['isOwningSide'] && $associationMapping['type'] & ClassMetadataInfo::TO_ONE) {
                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    $columnName = $joinColumn['name'];
                    $columnAlias[$columnName] = $this->getColumnAlias($columnName, $mode, $customRenameColumns);
                }
            }
        }

        return $columnAlias;
    }

    /**
     * Adds the mappings of the results of native SQL queries to the result set.
     *
     * @param ClassMetadataInfo $class
     * @param array             $queryMapping
     *
     * @return ResultSetMappingBuilder
     */
    public function addNamedNativeQueryMapping(ClassMetadataInfo $class, array $queryMapping)
    {
        if (isset($queryMapping['resultClass'])) {
            return $this->addNamedNativeQueryResultClassMapping($class, $queryMapping['resultClass']);
        }

        return $this->addNamedNativeQueryResultSetMapping($class, $queryMapping['resultSetMapping']);
    }

    /**
     * Adds the class mapping of the results of native SQL queries to the result set.
     *
     * @param ClassMetadataInfo $class
     * @param string            $resultClassName
     *
     * @return  ResultSetMappingBuilder
     */
    public function addNamedNativeQueryResultClassMapping(ClassMetadataInfo $class, $resultClassName)
    {
        $classMetadata  = $this->em->getClassMetadata($resultClassName);
        $shortName      = $classMetadata->reflClass->getShortName();
        $alias          = strtolower($shortName[0]).'0';

        $this->addEntityResult($class->name, $alias);

        if ($classMetadata->discriminatorColumn) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
            $discrColumn = $classMetadata->discriminatorColumn;

            $this->setDiscriminatorColumn($alias, $discrColumn['name']);
            $this->addMetaResult($alias, $discrColumn['name'], $discrColumn['fieldName'], false, $discrColumn['type']);
<<<<<<< HEAD
        }

        foreach ($classMetadata->getColumnNames() as $key => $columnName) {
            $propertyName = $classMetadata->getFieldName($columnName);

=======
            $discriminatorColumn = $classMetadata->discriminatorColumn;
            $this->setDiscriminatorColumn($alias, $discriminatorColumn['name']);
            $this->addMetaResult($alias, $discriminatorColumn['name'], $discriminatorColumn['fieldName']);
        }

        foreach ($classMetadata->getColumnNames() as $key => $columnName) {
            $propertyName   = $classMetadata->getFieldName($columnName);
>>>>>>> contactmanager
=======
        }

        foreach ($classMetadata->getColumnNames() as $key => $columnName) {
            $propertyName = $classMetadata->getFieldName($columnName);

>>>>>>> donmanager
            $this->addFieldResult($alias, $columnName, $propertyName);
        }

        foreach ($classMetadata->associationMappings as $associationMapping) {
            if ($associationMapping['isOwningSide'] && $associationMapping['type'] & ClassMetadataInfo::TO_ONE) {
<<<<<<< HEAD
<<<<<<< HEAD
                $targetClass = $this->em->getClassMetadata($associationMapping['targetEntity']);

                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    $columnName  = $joinColumn['name'];
                    $columnType  = PersisterHelper::getTypeOfColumn($joinColumn['referencedColumnName'], $targetClass, $this->em);

                    $this->addMetaResult($alias, $columnName, $columnName, $classMetadata->isIdentifier($columnName), $columnType);
=======
                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    $columnName = $joinColumn['name'];
                    $this->addMetaResult($alias, $columnName, $columnName, $classMetadata->isIdentifier($columnName));
>>>>>>> contactmanager
=======
                $targetClass = $this->em->getClassMetadata($associationMapping['targetEntity']);

                foreach ($associationMapping['joinColumns'] as $joinColumn) {
                    $columnName  = $joinColumn['name'];
                    $columnType  = PersisterHelper::getTypeOfColumn($joinColumn['referencedColumnName'], $targetClass, $this->em);

                    $this->addMetaResult($alias, $columnName, $columnName, $classMetadata->isIdentifier($columnName), $columnType);
>>>>>>> donmanager
                }
            }
        }

        return $this;
    }

    /**
     * Adds the result set mapping of the results of native SQL queries to the result set.
     *
     * @param ClassMetadataInfo $class
     * @param string            $resultSetMappingName
     *
     * @return ResultSetMappingBuilder
     */
    public function addNamedNativeQueryResultSetMapping(ClassMetadataInfo $class, $resultSetMappingName)
    {
        $counter        = 0;
        $resultMapping  = $class->getSqlResultSetMapping($resultSetMappingName);
<<<<<<< HEAD
<<<<<<< HEAD
        $rootShortName  = $class->reflClass->getShortName();
        $rootAlias      = strtolower($rootShortName[0]) . $counter;
=======
        $rooShortName   = $class->reflClass->getShortName();
        $rootAlias      = strtolower($rooShortName[0]) . $counter;
>>>>>>> contactmanager
=======
        $rootShortName  = $class->reflClass->getShortName();
        $rootAlias      = strtolower($rootShortName[0]) . $counter;
>>>>>>> donmanager


        if (isset($resultMapping['entities'])) {
            foreach ($resultMapping['entities'] as $key => $entityMapping) {
                $classMetadata  = $this->em->getClassMetadata($entityMapping['entityClass']);

                if ($class->reflClass->name == $classMetadata->reflClass->name) {
                    $this->addEntityResult($classMetadata->name, $rootAlias);
                    $this->addNamedNativeQueryEntityResultMapping($classMetadata, $entityMapping, $rootAlias);
                } else {
                    $shortName      = $classMetadata->reflClass->getShortName();
                    $joinAlias      = strtolower($shortName[0]) . ++ $counter;
                    $associations   = $class->getAssociationsByTargetClass($classMetadata->name);

<<<<<<< HEAD
<<<<<<< HEAD
                    $this->addNamedNativeQueryEntityResultMapping($classMetadata, $entityMapping, $joinAlias);

                    foreach ($associations as $relation => $mapping) {
                        $this->addJoinedEntityResult($mapping['targetEntity'], $joinAlias, $rootAlias, $relation);
=======
                    foreach ($associations as $relation => $mapping) {
                        $this->addJoinedEntityResult($mapping['targetEntity'], $joinAlias, $rootAlias, $relation);
                        $this->addNamedNativeQueryEntityResultMapping($classMetadata, $entityMapping, $joinAlias);
>>>>>>> contactmanager
=======
                    $this->addNamedNativeQueryEntityResultMapping($classMetadata, $entityMapping, $joinAlias);

                    foreach ($associations as $relation => $mapping) {
                        $this->addJoinedEntityResult($mapping['targetEntity'], $joinAlias, $rootAlias, $relation);
>>>>>>> donmanager
                    }
                }

            }
        }

        if (isset($resultMapping['columns'])) {
            foreach ($resultMapping['columns'] as $entityMapping) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $type = isset($class->fieldNames[$entityMapping['name']])
                    ? PersisterHelper::getTypeOfColumn($entityMapping['name'], $class, $this->em)
                    : 'string';

                $this->addScalarResult($entityMapping['name'], $entityMapping['name'], $type);
<<<<<<< HEAD
=======
                $this->addScalarResult($entityMapping['name'], $entityMapping['name']);
>>>>>>> contactmanager
=======
>>>>>>> donmanager
            }
        }

        return $this;
    }

    /**
     * Adds the entity result mapping of the results of native SQL queries to the result set.
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> contactmanager
=======
     *
>>>>>>> donmanager
     * @param ClassMetadataInfo $classMetadata
     * @param array             $entityMapping
     * @param string            $alias
     *
     * @return ResultSetMappingBuilder
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws MappingException
=======
>>>>>>> contactmanager
=======
     * @throws MappingException
>>>>>>> donmanager
     * @throws \InvalidArgumentException
     */
    public function addNamedNativeQueryEntityResultMapping(ClassMetadataInfo $classMetadata, array $entityMapping, $alias)
    {
        if (isset($entityMapping['discriminatorColumn']) && $entityMapping['discriminatorColumn']) {
            $discriminatorColumn = $entityMapping['discriminatorColumn'];
<<<<<<< HEAD
<<<<<<< HEAD
            $discriminatorType   = $classMetadata->discriminatorColumn['type'];

            $this->setDiscriminatorColumn($alias, $discriminatorColumn);
            $this->addMetaResult($alias, $discriminatorColumn, $discriminatorColumn, false, $discriminatorType);
=======
            $this->setDiscriminatorColumn($alias, $discriminatorColumn);
            $this->addMetaResult($alias, $discriminatorColumn, $discriminatorColumn);
>>>>>>> contactmanager
=======
            $discriminatorType   = $classMetadata->discriminatorColumn['type'];

            $this->setDiscriminatorColumn($alias, $discriminatorColumn);
            $this->addMetaResult($alias, $discriminatorColumn, $discriminatorColumn, false, $discriminatorType);
>>>>>>> donmanager
        }

        if (isset($entityMapping['fields']) && !empty($entityMapping['fields'])) {
            foreach ($entityMapping['fields'] as $field) {
                $fieldName = $field['name'];
                $relation  = null;

<<<<<<< HEAD
<<<<<<< HEAD
                if (strpos($fieldName, '.') !== false) {
=======
                if(strpos($fieldName, '.')){
>>>>>>> contactmanager
=======
                if (strpos($fieldName, '.') !== false) {
>>>>>>> donmanager
                    list($relation, $fieldName) = explode('.', $fieldName);
                }

                if (isset($classMetadata->associationMappings[$relation])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    if ($relation) {
=======
                    if($relation) {
>>>>>>> contactmanager
=======
                    if ($relation) {
>>>>>>> donmanager
                        $associationMapping = $classMetadata->associationMappings[$relation];
                        $joinAlias          = $alias.$relation;
                        $parentAlias        = $alias;

                        $this->addJoinedEntityResult($associationMapping['targetEntity'], $joinAlias, $parentAlias, $relation);
                        $this->addFieldResult($joinAlias, $field['column'], $fieldName);
<<<<<<< HEAD
<<<<<<< HEAD
                    } else {
                        $this->addFieldResult($alias, $field['column'], $fieldName, $classMetadata->name);
                    }
                } else {
                    if ( ! isset($classMetadata->fieldMappings[$fieldName])) {
                        throw new \InvalidArgumentException("Entity '".$classMetadata->name."' has no field '".$fieldName."'. ");
                    }

=======
                    }else {
=======
                    } else {
>>>>>>> donmanager
                        $this->addFieldResult($alias, $field['column'], $fieldName, $classMetadata->name);
                    }
                } else {
                    if ( ! isset($classMetadata->fieldMappings[$fieldName])) {
                        throw new \InvalidArgumentException("Entity '".$classMetadata->name."' has no field '".$fieldName."'. ");
                    }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

>>>>>>> donmanager
                    $this->addFieldResult($alias, $field['column'], $fieldName, $classMetadata->name);
                }
            }

        } else {
            foreach ($classMetadata->getColumnNames() as $columnName) {
<<<<<<< HEAD
<<<<<<< HEAD
                $propertyName = $classMetadata->getFieldName($columnName);

=======
                $propertyName   = $classMetadata->getFieldName($columnName);
>>>>>>> contactmanager
=======
                $propertyName = $classMetadata->getFieldName($columnName);

>>>>>>> donmanager
                $this->addFieldResult($alias, $columnName, $propertyName);
            }
        }

        return $this;
    }

    /**
     * Generates the Select clause from this ResultSetMappingBuilder.
     *
     * Works only for all the entity results. The select parts for scalar
     * expressions have to be written manually.
     *
     * @param array $tableAliases
     *
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function generateSelectClause($tableAliases = [])
=======
    public function generateSelectClause($tableAliases = array())
>>>>>>> contactmanager
=======
    public function generateSelectClause($tableAliases = [])
>>>>>>> donmanager
    {
        $sql = "";

        foreach ($this->columnOwnerMap as $columnName => $dqlAlias) {
<<<<<<< HEAD
<<<<<<< HEAD
            $tableAlias = $tableAliases[$dqlAlias] ?? $dqlAlias;
=======
            $tableAlias = isset($tableAliases[$dqlAlias])
                ? $tableAliases[$dqlAlias] : $dqlAlias;
>>>>>>> contactmanager
=======
            $tableAlias = $tableAliases[$dqlAlias] ?? $dqlAlias;
>>>>>>> donmanager

            if ($sql) {
                $sql .= ", ";
            }

            $sql .= $tableAlias . ".";

            if (isset($this->fieldMappings[$columnName])) {
                $class = $this->em->getClassMetadata($this->declaringClasses[$columnName]);
                $sql  .= $class->fieldMappings[$this->fieldMappings[$columnName]]['columnName'];
            } else if (isset($this->metaMappings[$columnName])) {
                $sql .= $this->metaMappings[$columnName];
            } else if (isset($this->discriminatorColumns[$dqlAlias])) {
                $sql .= $this->discriminatorColumns[$dqlAlias];
            }

            $sql .= " AS " . $columnName;
        }

        return $sql;
    }

    /**
     * @return string
     */
    public function __toString()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->generateSelectClause([]);
=======
        return $this->generateSelectClause(array());
>>>>>>> contactmanager
=======
        return $this->generateSelectClause([]);
>>>>>>> donmanager
    }
}
