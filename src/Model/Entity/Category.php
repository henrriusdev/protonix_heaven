<?php

namespace ProtonixHeaven\Model\Entity;

class Category extends Base
{
  protected string $name;
  protected ?string $description = null;
  protected ?string $imageUrl = null;

  public function getName(): string
  {
    return $this->name;
  }

  public function getDescription(): ?string
  {
    return $this->description;
  }

  public function getImageUrl(): ?string
  {
    return $this->imageUrl;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function setDescription(?string $description): void
  {
    $this->description = $description;
  }

  public function setImageUrl(?string $imageUrl): void
  {
    $this->imageUrl = $imageUrl;
  }
}
