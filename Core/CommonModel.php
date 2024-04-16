<?php

trait CommonModel {

    public int $id;
    public DateTime $dateAdded;
    public DateTime $lastModified;
    public string $status;

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public static function metadata(): array {
        return [];
    }
}
