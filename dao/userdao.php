<?php

interface UserDao {

    public  function create($obj);

    public function update($obj);

    public function delete($obj);

    public function getById($id);
	
    public function getByLogin($login);

    public function getAll();
	
    public function getUsersOnline();
}
