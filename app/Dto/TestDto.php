<?php

namespace App\Dto;

use Illuminate\Http\Request;

class TestDto
{

    public function __construct()
    {}

    public static function fromRequest(Request $request): self
    {
        return new self();
    }

    public static function fromArray(array $data): self
    {
        return new self();
    }

    public function toArray(?bool $filter = false): array
    {
        return [];
    }

}
