<?php

namespace AtendiaSdk\Models;

class Tenant
{
    public function __construct(
        private string $subdomain,
        private string $name,
        private string $createdAt,
    ) {}

    public function getSubdomain(): string
    {
        return $this->subdomain;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function toArray(): array
    {
        return [
            'subdomain' => $this->subdomain,
            'name' => $this->name,
            'created_at' => $this->createdAt,
        ];
    }
}
