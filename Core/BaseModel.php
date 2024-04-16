<?php

require_once('Core/CRUD.php');
require_once('Core/CommonModel.php');

abstract class BaseModel implements CRUD {

    use CommonModel;

    abstract public static function select(int $id): mixed;
    abstract public function insert(): bool;
    abstract public function update(): bool;
    public function delete(): bool {
        return true;
    }
}