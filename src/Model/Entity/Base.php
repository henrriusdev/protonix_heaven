<?php

namespace ProtonixHeaven\Model\Entity;

use DateTimeImmutable;

class Base {
    protected string $id;
    protected DateTimeImmutable $createdAt;
    protected DateTimeImmutable $updatedAt;
    protected ?DateTimeImmutable $deletedAt = null;

    public function __construct(string $id, DateTimeImmutable $createdAt, DateTimeImmutable $updatedAt) {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId(): string {
        return $this->id;
    }

    public function getCreatedAt(): DateTimeImmutable {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTimeImmutable {
        return $this->updatedAt;
    }
}