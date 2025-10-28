<?php

namespace ProtonixHeaven\Model\Entity;
use DateTimeImmutable;

class ItemVariant extends Base
{
    protected ?string $itemId = null;
    protected ?string $variantName = null;
    protected ?float $price = null;
    protected ?float $stock = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function getVariantName(): ?string
    {
        return $this->variantName;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function getStock(): ?float
    {
        return $this->stock;
    }
}