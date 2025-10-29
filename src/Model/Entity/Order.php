<?php

namespace ProtonixHeaven\Model\Entity;
use DateTimeImmutable;

class Order extends Base
{
    protected ?string $userId = null;
    protected ?string $itemId = null;
    protected ?string $itemVariantId = null;
    protected ?string $invoiceId = null;
    protected ?string $status = null;
    protected ?int $quantity = null;
    protected ?float $totalAmount = null;
    protected ?DateTimeImmutable $orderDate = null;

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function getOrderDate(): ?DateTimeImmutable
    {
        return $this->orderDate;
    }

    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    public function getItemVariantId(): ?string
    {
        return $this->itemVariantId;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function setOrderDate(?DateTimeImmutable $orderDate): self
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    public function setTotalAmount(?float $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setInvoiceId(?string $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    public function setItemVariantId(?string $itemVariantId): self
    {
        $this->itemVariantId = $itemVariantId;
        return $this;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }
}