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
class Bid
{
    /**
     * @id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private string $title;

    /**
     * @Column()
     */
    private string $description;

    /**
     * @Column()
     */
    private string $value;

    /**
     * @Column()
     */
    private string $date;

}