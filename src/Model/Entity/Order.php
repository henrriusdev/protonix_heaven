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


    public function getId(): string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

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
}