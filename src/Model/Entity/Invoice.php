<?php

namespace ProtonixHeaven\Model\Entity;

use DateTimeImmutable;

class Invoice extends Base
{
  protected string $code = '';
  protected ?string $userId = null;
  protected ?float $amount = null;
  protected ?DateTimeImmutable $issuedAt = null;
  public function getCode(): string
  {
    return $this->code;
  }

  public function setCode(string $code): self
  {
    $this->code = $code;
    return $this;
  }

  public function getUserId(): ?string
  {
    return $this->userId;
  }

  public function setUserId(?string $userId): self
  {
    $this->userId = $userId;
    return $this;
  }

  public function getAmount(): ?float
  {
    return $this->amount;
  }

  public function setAmount(?float $amount): self
  {
    $this->amount = $amount;
    return $this;
  }

  public function getIssuedAt(): ?DateTimeImmutable
  {
    return $this->issuedAt;
  }
  
  public function setIssuedAt(?DateTimeImmutable $issuedAt): self
  {
    $this->issuedAt = $issuedAt;
    return $this;
  }
}
