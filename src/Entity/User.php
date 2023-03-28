<?php
// Entité créée à partir de la commande make:user, il faudra l'update pour rajouter tous les champs que l'on souhaite pour l'utilisateur
namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Il y a déjà un compte qui utilise cet email.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\Email(
        message: '{{ value }} n\'est pas un email valide.',
    )]
    #[Assert\NotBlank(message: 'Veuillez renseigner votre email')]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Assert\NotBlank(message: 'Veuillez renseigner mot de passe')]
    #[Assert\Length(
        min: 6,
        max: 50,
        minMessage: 'Votre mot de passe doit faire au moins 6 caractères',
        maxMessage: 'Votre mot de passe doit faire au plus 50 caractères',
    )]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    
    #[Assert\NotBlank(message: 'Veuillez renseigner prénom')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Votre prénom doit faire au moins 2 caractères',
        maxMessage: 'Votre prénom doit faire au plus 50 caractères',
    )]
    private ?string $firstname = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez renseigner nom')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Votre nom doit faire au moins 2 caractères',
        maxMessage: 'Votre nom doit faire au plus 50 caractères',
    )]
    private ?string $lastname = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner votre genre')]
    private ?string $gender = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez renseigner numéro de téléphone')]
    #[Assert\Length(
        min: 7,
        max: 13,
        minMessage: 'Vérifiez que votre numéro est correct',
        maxMessage: 'Vérifiez que votre numéro est correct',
    )]
    private ?string $phone = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez renseigner votre ville')]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: 'Votre ville doit faire au moins 2 caractères',
        maxMessage: 'Votre ville doit faire au plus 50 caractères',
    )]

    private ?string $city = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Veuillez renseigner votre code postal')]
    #[Assert\Regex(pattern: '/^(?:0[1-9]|[1-8]\d|9[0-8])\d{3}$/', message: 'Votre code postal doit être composé de 5 chiffres')]
    private ?int $zipcode = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez renseigner votre adresse')]
    #[Assert\Length(
        min: 10,
        max: 50,
        minMessage: 'Votre adresse doit faire au moins 10 caractères',
        maxMessage: 'Votre adresse doit faire au plus 50 caractères',
    )]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_url = null;
    
    #[ORM\Column(type: "binary", nullable: true)]
 
    private $imageData;


    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true, type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated_at = null;
    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipcode(): ?int
    {
        return $this->zipcode;
    }

    public function setZipcode(int $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): self
    {
        $this->image_url = $image_url;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of imageData
     */ 
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * Set the value of imageData
     *
     * @return  self
     */ 
    public function setImageData($imageData)
    {
        $this->imageData = $imageData;

        return $this;
    }
}
