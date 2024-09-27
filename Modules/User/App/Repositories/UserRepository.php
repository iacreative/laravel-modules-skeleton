<?php

namespace Modules\App\User\Repositories;

use App\Abstracts\RepositoryEloquentAbstract;
use App\Contracts\RepositoryInterface;
use App\Moduules\User\App\Models\User;

class UserRepository extends RepositoryEloquentAbstract implements RepositoryInterface
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Store a newly created resource
     *
     * @param array $data
     */
    public function store(array $data): User
    {
        // 
    }

    /**
     * Update the specified resource 
     *
     * @param array $data
     * @param string $key
     */
    public function edit(array $data, string $key): User
    {
        // 
    }

    /**
     * Remove the specified resource 
     *
     * @param string $key
     */
    public function destroy(string $key): bool
    {
        // 
    }
}
