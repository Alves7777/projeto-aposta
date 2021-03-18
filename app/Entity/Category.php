<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\{
    Entity,
    Column,
    Id,
    GeneratedValue
};
/**
 * @Entity()
 */
Class Category
{
    /**
     * @id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;

    /**
     * @Column()
     */
    private  string $name;

    /**
     * @Column()
     */
    private string $description;


    /**
     * @Column(nullable=true)
     */
    private ?string $image;

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     * @return void
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;

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
     * @return void
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
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;

    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;

    }


}