<?php

require_once('Core/BaseModel.php');

class User extends BaseModel {

    public static function metadata(): array {
        return [
            'id' => [
                'sortable' => true, 
                'searchable' => true, 
                'validationRule' => 'integer'
            ],
            'dateAdded' => [
                'sortable' => true, 
                'searchable' => false, 
                'validationRule' => 'datetime'
            ],
            'lastModified' => [
                'sortable' => true, 
                'searchable' => false, 
                'validationRule' => 'datetime'
            ],
            'status' => [
                'sortable' => false, 
                'searchable' => true, 
                'validationRule' => 'string'
            ],
        ];
    }

    public static function select(int $id): mixed {
        return new self();
    }

    public function insert(): bool {
        return true;
    }

    public function update(): bool {
        return true;
    }
}
