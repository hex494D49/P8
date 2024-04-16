<?php 

interface CRUD {

    public static function select(int $id): mixed;
    public function insert(): bool;
    public function update(): bool;
    public function delete(): bool;
}