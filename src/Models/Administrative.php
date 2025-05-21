<?php

namespace AtendiaSdk\Models;

class Administrative
{
    private ?string $id = null;

    public function __construct(
        private string $name,
        private string $lastName,
        private string $email,
    ) {}

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name' => $this->lastName,
            'email' => $this->email,
        ];
    }
}
