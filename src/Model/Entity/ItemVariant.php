<?php

namespace ProtonixHeaven\Model\Entity;
use DateTimeImmutable;

class ItemVariant extends Base
{
    protected ?string $itemId = null;
    protected ?string $variantName = null;
    protected ?float $price = null;
    protected ?float $stock = null;

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

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function setVariantName(?string $variantName): self
    {
        $this->variantName = $variantName;
        return $this;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setStock(?float $stock): self
    {
        $this->stock = $stock;
        return $this;
    }
}