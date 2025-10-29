<?php

namespace ProtonixHeaven\Model\Entity;

use DateTimeImmutable;

class Item extends Base
{
  protected ?string $name = null;
  protected ?string $description = null;
  protected ?float $price = null;
  protected float $stock = 0.0;


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

  public function setName(?string $name): self
  {
    $this->name = $name;
    return $this;
  }

  public function setDescription(?string $description): self
  {
    $this->description = $description;
    return $this;
  }

  public function setPrice(?float $price): self
  {
    $this->price = $price;
    return $this;
  }
  public function setStock(float $stock): self
  {
    $this->stock = $stock;
    return $this;
  }
}
