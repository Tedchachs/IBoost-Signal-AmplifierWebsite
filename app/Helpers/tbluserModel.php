<?php

// Create a new class manually.
$tblusersModel = new \App\Models\TblusersModel();

// Create a new class with the model() function.
$tblusersModel = model('App\Models\TblusersModel', false);

// Create a shared instance of the model.
$tblusersModel = model('App\Models\TblusersModel');

// Create shared instance with a supplied database connection.
// When no namespace is given, it will search through all namespaces
// the system knows about and attempts to locate the UserModel class.
$db        = db_connect('custom');
$tblusersModel = model('TbluserModel', true, $db);