<?php
namespace Testoop;


class User extends Model{


    // protected $table = 'dbo.users';

    public function getAllData(){
        return $this->get();
    }

    public function insertData($name,$eiei){
        $this->insert(array('name'=>$name,'eiei'=>$eiei));
    }

}
