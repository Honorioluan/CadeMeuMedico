<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=cade_meu_medico',
    'username' => 'root',
    'password' => 'P@ssw0rd',
    'charset' => 'utf8',

   
    // Schema cache options (for production environment)
     'enableSchemaCache' => true,
     'schemaCacheDuration' => 60,
     'schemaCache' => 'cache',
];
