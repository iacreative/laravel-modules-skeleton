<?php

namespace App\Contracts;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function listAll(array $collums = ['*']): Collection;
    public function findByField(string $field, string $value): Collection|Model;
    public function store(array $data): Model;
    public function edit(array $data, string $key): Model;
    public function destroy(string $key): bool;
}
