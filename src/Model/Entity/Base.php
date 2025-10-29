<?php

namespace ProtonixHeaven\Model\Entity;

use DateTimeImmutable;

class Base {
    protected string $id;
    protected DateTimeImmutable $createdAt;
    protected DateTimeImmutable $updatedAt;
    protected ?DateTimeImmutable $deletedAt = null;

    public function __construct() {
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

    public function getDeletedAt(): ?DateTimeImmutable {
        return $this->deletedAt;
    }

    public function setId(string $id): self {
        $this->id = $id;
        return $this;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): self {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(DateTimeImmutable $updatedAt): self {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function setDeletedAt(?DateTimeImmutable $deletedAt): self { 
        $this->deletedAt = $deletedAt;
        return $this;
    }

    public static function fromArray(array $data): static
    {
        $instance = new static();
        foreach ($data as $key => $value) {
            // Convert snake_case to camelCase (e.g., 'user_name' -> 'setUserName')
            $camelKey = str_replace('_', '', ucwords($key, '_'));
            $setter = 'set' . $camelKey;
            if (method_exists($instance, $setter)) {
                // Special handling for timestamp fields (ending in '_at')
                if (str_ends_with($key, '_at')) {
                    if (is_string($value)) {
                        $value = new DateTimeImmutable($value);
                    } elseif ($value === null) {
                        // Keep null for optional dates like deleted_at
                        $value = null;
                    }
                }
                $instance->$setter($value);
            }
        }
        return $instance;
    }
}