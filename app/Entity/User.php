<?php

declare(strict_types=1);

namespace App\Entity;
//use Doctrine\ORM\Mapping\Entity;
//use Doctrine\ORM\Mapping\Column;
//use Doctrine\ORM\Mapping\Id;
//use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\{
    Entity,
    Column,
    Id,
    GeneratedValue
    };
/**
 * @Entity()
 */
Class User
{
    /**
     * @id()
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;

    /**
     * @Column()
     */
    private string $name;

    /**
     * @Column(unique=true)
     */
    private string $email;

    /**
     * @Column()
     */
    private string $password;

//    /**
//     * @Column(type="boolean")
//     */
//    private $status;

    /**
     * @Column()
     */
    private string $image;

    /**
     * @Column(length=11, unique=true)
     */
    private string $cpf;

    /**
     * @Column(type="boolean")
     */
    private bool $admin;

    /**
     * @Column(type="datetime")
     */
    private \DateTime $createdAt;

    /**
     * @Column(type="datetime")
     */
    private \DateTime $updateAt;

    /**
     * @Column(type="datetime",nullable=true)
     */
    private ?\DateTime $lastAccess;

    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->admin = false;
        $this->createdAt = new \DateTime();
        $this->updateAt = new \DateTime();

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

//    public function getStatus(): bool
//    {
//        return $this->status;
//    }

//    public function setStatus(bool $status): void
//    {
//        $this->status = $status;
//    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->admin;
    }

    /**
     * @param bool $admin
     */
    public function setAdmin(bool $admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateAt(): \DateTime
    {
        return $this->updateAt;
    }

    /**
     * @param \DateTime $updateAt
     */
    public function setUpdateAt(\DateTime $updateAt): void
    {
        $this->updateAt = $updateAt;
    }

    /**
     * @return ?\DateTime
     */
    public function getLastAccess(): ?\DateTime
    {
        return $this->lastAccess;
    }

    /**
     * @param \DateTime $lastAccess
     */
    public function setLastAccess(\DateTime $lastAccess): void
    {
        $this->lastAccess = $lastAccess;
    }


}
