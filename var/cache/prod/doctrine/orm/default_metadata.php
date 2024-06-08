<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Produits__CLASSMETADATA__' => 0,
'App__Entity__Category__CLASSMETADATA__' => 1,
'App__Entity__Subcategory__CLASSMETADATA__' => 2,
'App__Entity__Newletter__CLASSMETADATA__' => 3,
'App__Entity__Moto__CLASSMETADATA__' => 4,
'App__Entity__User__CLASSMETADATA__' => 5,
'App__Entity__Marque__CLASSMETADATA__' => 6,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\JoinColumnMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Produits',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ProduitsRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'produitName' => $o[2],
                        'produitDesc' => $o[3],
                        'produitCaract' => $o[4],
                        'produitPrice' => $o[5],
                        'produitPicture' => $o[6],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'produit_name' => 'produitName',
                        'produit_desc' => 'produitDesc',
                        'produit_caract' => 'produitCaract',
                        'produit_price' => 'produitPrice',
                        'produit_picture' => 'produitPicture',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'produitName' => 'produit_name',
                        'produitDesc' => 'produit_desc',
                        'produitCaract' => 'produit_caract',
                        'produitPrice' => 'produit_price',
                        'produitPicture' => 'produit_picture',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'produits',
                    ],
                ],
                'associationMappings' => [
                    [
                        'produit_relation' => $o[7],
                    ],
                ],
                'idGenerator' => [
                    $o[9],
                ],
                'name' => [
                    'App\\Entity\\Produits',
                    8 => 'produit_relation_id',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'string',
                    'string',
                    'decimal',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'produitName',
                    'produitDesc',
                    'produitCaract',
                    'produitPrice',
                    'produitPicture',
                ],
                'columnName' => [
                    1 => 'id',
                    'produit_name',
                    'produit_desc',
                    'produit_caract',
                    'produit_price',
                    'produit_picture',
                ],
                'length' => [
                    2 => 255,
                    255,
                    255,
                    6 => 255,
                ],
                'precision' => [
                    5 => 10,
                ],
                'scale' => [
                    5 => 2,
                ],
                'fetch' => [
                    7 => 2,
                ],
                'sourceEntity' => [
                    7 => 'App\\Entity\\Produits',
                ],
                'inversedBy' => [
                    7 => 'produits',
                ],
                'sourceToTargetKeyColumns' => [
                    7 => [
                        'produit_relation_id' => 'id',
                    ],
                ],
                'targetToSourceKeyColumns' => [
                    7 => [
                        'id' => 'produit_relation_id',
                    ],
                ],
                'joinColumns' => [
                    7 => [
                        $o[8],
                    ],
                ],
                'joinColumnFieldNames' => [
                    7 => [
                        'produit_relation_id' => 'produit_relation_id',
                    ],
                ],
                'referencedColumnName' => [
                    8 => 'id',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    7 => 'produit_relation',
                ],
                'targetEntity' => [
                    7 => 'App\\Entity\\Subcategory',
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Category',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\CategoryRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'catName' => $o[2],
                        'pictureName' => $o[3],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'cat_name' => 'catName',
                        'picture_name' => 'pictureName',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'catName' => 'cat_name',
                        'pictureName' => 'picture_name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'category',
                    ],
                ],
                'associationMappings' => [
                    [
                        'subCategories' => $o[4],
                    ],
                ],
                'idGenerator' => [
                    $o[5],
                ],
                'name' => [
                    'App\\Entity\\Category',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'catName',
                    'pictureName',
                ],
                'columnName' => [
                    1 => 'id',
                    'cat_name',
                    'picture_name',
                ],
                'length' => [
                    2 => 255,
                    255,
                ],
                'fetch' => [
                    4 => 2,
                ],
                'sourceEntity' => [
                    4 => 'App\\Entity\\Category',
                ],
                'mappedBy' => [
                    4 => 'lien',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    4 => 'subCategories',
                ],
                'targetEntity' => [
                    4 => 'App\\Entity\\Subcategory',
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\JoinColumnMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Subcategory',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\SubcategoryRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'subName' => $o[2],
                        'subPictureName' => $o[3],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'sub_name' => 'subName',
                        'sub_picture_name' => 'subPictureName',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'subName' => 'sub_name',
                        'subPictureName' => 'sub_picture_name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'subcategory',
                    ],
                ],
                'associationMappings' => [
                    [
                        'lien' => $o[4],
                        'produits' => $o[6],
                    ],
                ],
                'idGenerator' => [
                    $o[7],
                ],
                'name' => [
                    'App\\Entity\\Subcategory',
                    5 => 'lien_id',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'subName',
                    'subPictureName',
                ],
                'columnName' => [
                    1 => 'id',
                    'sub_name',
                    'sub_picture_name',
                ],
                'length' => [
                    2 => 255,
                    255,
                ],
                'fetch' => [
                    4 => 2,
                    6 => 2,
                ],
                'sourceEntity' => [
                    4 => 'App\\Entity\\Subcategory',
                    6 => 'App\\Entity\\Subcategory',
                ],
                'inversedBy' => [
                    4 => 'subCategories',
                ],
                'sourceToTargetKeyColumns' => [
                    4 => [
                        'lien_id' => 'id',
                    ],
                ],
                'targetToSourceKeyColumns' => [
                    4 => [
                        'id' => 'lien_id',
                    ],
                ],
                'joinColumns' => [
                    4 => [
                        $o[5],
                    ],
                ],
                'joinColumnFieldNames' => [
                    4 => [
                        'lien_id' => 'lien_id',
                    ],
                ],
                'referencedColumnName' => [
                    5 => 'id',
                ],
                'mappedBy' => [
                    6 => 'produit_relation',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    4 => 'lien',
                    6 => 'produits',
                ],
                'targetEntity' => [
                    4 => 'App\\Entity\\Category',
                    6 => 'App\\Entity\\Produits',
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Newletter',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\NewletterRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'mailList' => $o[2],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'mail_list' => 'mailList',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'mailList' => 'mail_list',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'newletter',
                    ],
                ],
                'idGenerator' => [
                    $o[3],
                ],
                'name' => [
                    'App\\Entity\\Newletter',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'mailList',
                ],
                'columnName' => [
                    1 => 'id',
                    'mail_list',
                ],
                'length' => [
                    2 => 255,
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ManyToOneAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Mapping\\JoinColumnMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\JoinColumnMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Moto',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\MotoRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'motoName' => $o[2],
                        'motoYear' => $o[3],
                        'motoDesc' => $o[4],
                        'motoPrice' => $o[5],
                        'motoOption' => $o[6],
                        'motoPicture' => $o[7],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'moto_name' => 'motoName',
                        'moto_year' => 'motoYear',
                        'moto_desc' => 'motoDesc',
                        'moto_price' => 'motoPrice',
                        'moto_option' => 'motoOption',
                        'moto_picture' => 'motoPicture',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'motoName' => 'moto_name',
                        'motoYear' => 'moto_year',
                        'motoDesc' => 'moto_desc',
                        'motoPrice' => 'moto_price',
                        'motoOption' => 'moto_option',
                        'motoPicture' => 'moto_picture',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'moto',
                    ],
                ],
                'associationMappings' => [
                    [
                        'marque' => $o[8],
                    ],
                ],
                'idGenerator' => [
                    $o[10],
                ],
                'name' => [
                    'App\\Entity\\Moto',
                    9 => 'marque_id',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'integer',
                    'string',
                    'decimal',
                    'array',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'motoName',
                    'motoYear',
                    'motoDesc',
                    'motoPrice',
                    'motoOption',
                    'motoPicture',
                ],
                'columnName' => [
                    1 => 'id',
                    'moto_name',
                    'moto_year',
                    'moto_desc',
                    'moto_price',
                    'moto_option',
                    'moto_picture',
                ],
                'length' => [
                    2 => 255,
                    4 => 255,
                    7 => 255,
                ],
                'precision' => [
                    5 => 10,
                ],
                'scale' => [
                    5 => 2,
                ],
                'fetch' => [
                    8 => 2,
                ],
                'sourceEntity' => [
                    8 => 'App\\Entity\\Moto',
                ],
                'inversedBy' => [
                    8 => 'motos',
                ],
                'sourceToTargetKeyColumns' => [
                    8 => [
                        'marque_id' => 'id',
                    ],
                ],
                'targetToSourceKeyColumns' => [
                    8 => [
                        'id' => 'marque_id',
                    ],
                ],
                'joinColumns' => [
                    8 => [
                        $o[9],
                    ],
                ],
                'joinColumnFieldNames' => [
                    8 => [
                        'marque_id' => 'marque_id',
                    ],
                ],
                'referencedColumnName' => [
                    9 => 'id',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    8 => 'marque',
                ],
                'targetEntity' => [
                    8 => 'App\\Entity\\Marque',
                ],
            ],
        ],
        $o[0],
        []
    );
},
5 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'username' => $o[2],
                        'roles' => $o[3],
                        'password' => $o[4],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'username' => 'username',
                        'roles' => 'roles',
                        'password' => 'password',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                        'quoted' => true,
                        'uniqueConstraints' => [
                            'UNIQ_IDENTIFIER_USERNAME' => [
                                'fields' => [
                                    'username',
                                ],
                            ],
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[5],
                ],
                'name' => [
                    'App\\Entity\\User',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'json',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'username',
                    'roles',
                    'password',
                ],
                'columnName' => [
                    1 => 'id',
                    'username',
                    'roles',
                    'password',
                ],
                'length' => [
                    2 => 180,
                ],
            ],
        ],
        $o[0],
        []
    );
},
6 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Mapping\\FieldMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\FieldMapping')),
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone $p['Doctrine\\ORM\\Mapping\\FieldMapping'],
            clone ($p['Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\OneToManyAssociationMapping')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Marque',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\MarqueRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => $o[1],
                        'Name' => $o[2],
                        'pictureName' => $o[3],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'Name',
                        'picture_name' => 'pictureName',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'Name' => 'name',
                        'pictureName' => 'picture_name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'marque',
                    ],
                ],
                'associationMappings' => [
                    [
                        'motos' => $o[4],
                    ],
                ],
                'idGenerator' => [
                    $o[5],
                ],
                'name' => [
                    'App\\Entity\\Marque',
                ],
                'id' => [
                    1 => true,
                ],
                'type' => [
                    1 => 'integer',
                    'string',
                    'string',
                ],
                'fieldName' => [
                    1 => 'id',
                    'Name',
                    'pictureName',
                ],
                'columnName' => [
                    1 => 'id',
                    'name',
                    'picture_name',
                ],
                'length' => [
                    2 => 255,
                    255,
                ],
                'fetch' => [
                    4 => 2,
                ],
                'sourceEntity' => [
                    4 => 'App\\Entity\\Marque',
                ],
                'mappedBy' => [
                    4 => 'marque',
                ],
            ],
            'Doctrine\\ORM\\Mapping\\AssociationMapping' => [
                'fieldName' => [
                    4 => 'motos',
                ],
                'targetEntity' => [
                    4 => 'App\\Entity\\Moto',
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
