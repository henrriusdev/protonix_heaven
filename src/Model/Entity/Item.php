<?php

namespace ProtonixHeaven\Model\Entity;

use DateTimeImmutable;

class Item extends Base
{
  protected ?string $name = null;
  protected ?string $description = null;
  protected ?float $price = null;
  protected float $stock = 0.0;

  public function getId(): string
  {
    return $this->id;
  }

  public function setId(?string $id): self
  {
    $this->id = $id;
    return $this;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function getDescription(): ?string
  {
    return $this->description;
  }
  public function getPrice(): ?float
  {
    return $this->price;
  }

  public function getStock(): float
  {
    return $this->stock;
  }
}
