<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $reservation_name = null;

    #[ORM\Column(length: 255)]
    private ?string $restaurant_name = null;

    #[ORM\Column]
    private ?int $number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getReservationName(): ?string
    {
        return $this->reservation_name;
    }

    public function setReservationName(string $reservation_name): self
    {
        $this->reservation_name = $reservation_name;

        return $this;
    }

    public function getRestaurantName(): ?string
    {
        return $this->restaurant_name;
    }

    public function setRestaurantName(string $restaurant_name): self
    {
        $this->restaurant_name = $restaurant_name;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
