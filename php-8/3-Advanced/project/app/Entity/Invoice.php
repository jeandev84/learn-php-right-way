<?php
declare(strict_types=1);

namespace App\Entity;

use App\Enums\InvoiceStatus;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;
use Ramsey\Collection\Collection;

#[Entity]
#[Table('invoices')]
class Invoice
{
     #[Id]
     #[Column, GeneratedValue]
     private ?int $id;

     #[Column(type: Types::DECIMAL, precision: 10, scale: 2)]
     private ?float $amount;

     #[Column(name: 'invoice_number')]
     private ?string $invoiceNumber;

     //#[Column(enumType: InvoiceStatus::class)]
     #[Column]
     private InvoiceStatus $status;

     #[Column(name: 'created_at')]
     private ?DateTime $createdAt;


     #[OneToMany(targetEntity: InvoiceItem::class, mappedBy: 'invoice')]
     private $items;


     public function __construct()
     {
         $this->items = new ArrayCollection();
     }


    /**
     * @return int|null
    */
    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return float|null
    */
    public function getAmount(): ?float
    {
        return $this->amount;
    }


    /**
     * @param float|null $amount
     *
     * @return $this
    */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }


    /**
     * @return string|null
    */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }


    /**
     * @param string|null $invoiceNumber
     *
     * @return $this
    */
    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }


    /**
     * @return InvoiceStatus
    */
    public function getStatus(): InvoiceStatus
    {
        return $this->status;
    }


    /**
     * @param InvoiceStatus $status
     *
     * @return $this
    */
    public function setStatus(InvoiceStatus $status): self
    {
        $this->status = $status;

        return $this;
    }


    /**
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }



    /**
     * @param DateTime|null $createdAt
     *
     * @return $this
    */
    public function setCreatedAt(?DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }



    public function addItem(InvoiceItem $item): self
    {
         if (! $this->items->contains($item)) {
             $item->setInvoice($this);
             $this->items->add($item);
         }

         return $this;
    }


    /**
     * @return Collection
    */
    public function getItems(): Collection
    {
        return $this->items;
    }
}