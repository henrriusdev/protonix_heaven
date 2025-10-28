<?php

namespace ProtonixHeaven\Model\Entity;

use DateTimeImmutable;

class User extends Base
{
    protected string $id = '';
    protected ?string $email = null;
    protected ?string $password = null;
    protected ?string $name = null;
    protected ?string $role = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
  }