<?php

namespace App\Contracts;

use Illuminate\Http\Client\Request;

interface ServiceInterface
{
    public function listAll();
    public function findByField(Request $data);
    public function store(Request $data);
    public function edit(Request $data, string $key);
    public function destroy(string $id);
}
