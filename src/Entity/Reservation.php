<?php

namespace App\Entity;

use Assert\LessThan;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReservationRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\GreaterThan('today', message: 'Vous ne pouvez pas réserver à une date antérieure.')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $reservation_name = null;

    #[ORM\Column(length: 255)]
    private ?string $restaurant_name = null;

    #[ORM\Column]
    #[LessThan(20)]
    private ?int $number = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heure = null;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    // Ceci est une fonction permettant lors du formulaire de réservation de selectionner toutes les tranches de 30 min, entre 11H et 23h30
    // Ca corresponds aux heures d'ouverture du resto
    public function generateHourOptions(): array
{
    $heureOptions = [];
    $h = 11;
    $m = 0;

    // Boucle pour ajouter toutes les heures possibles
    while ($h < 24 || ($h == 24 && $m == 0)) {
        $hour = str_pad($h, 2, '0', STR_PAD_LEFT);
        $min = str_pad($m, 2, '0', STR_PAD_LEFT);
        $heure = new \DateTime("{$hour}:{$min}");
        $heureOptions[$heure->format('H:i')] = $heure;
        $m += 30;
        if ($m == 60) {
            $m = 0;
            $h++;
        }
        // On s'arrête à 23H30
        if ($h == 24 && $m == 0) {
            break;
        }
    }

    return $heureOptions;
}
public function __toString(){

    return $this->date;
}
}

