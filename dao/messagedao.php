<?php

interface MessageDao {

    public  function create($obj);

    public function update($obj);

    public function delete($obj);

    public function getByIdUserEnvoi($id);
	
    public function getByIdUserRecu($id);
	
    public function getGroupe();
}
