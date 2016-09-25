<?php
require __DIR__ . '/vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
date_default_timezone_set("Asia/Bangkok");
$capsule = new Capsule;
$capsule->addConnection(array(
    'driver'    => 'sqlsrv',
    'host'      => 'PURI-PC\SQLEXPRESS01',
    'database'  => 'test',
    'username'  => 'testuser',
    'password'  => 'testtest',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
));

$capsule->setFetchMode(PDO::FETCH_ASSOC);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Capsule::table('testtable')

//insert
// Capsule::table('dbo.users')->insert(array('name'=>'hahahah','eiei'=>'1111'));

//get all (return in Illuminate\Support\Collection)
// $data = Capsule::table('dbo.users')->where('name','=','puri')->get();
// var_dump($data);

//get all (return in array)
// $data = Capsule::table('dbo.users')->where('name','=','puri')->get()->all()[0];
// var_dump($data);
