<?php

class Order extends BaseModel {

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
                'validationRule' => 'enum:pending,processed,shipped,cancelled'
            ],
            'userId' => [
                'sortable' => false, 
                'searchable' => true, 
                'validationRule' => 'integer'
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

    public function delete(): bool {
        return true;
    }
}
