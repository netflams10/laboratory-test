<?php

namespace App\Interface;

interface RepositoryInterface
{
    public function index();
    public function show($id);
    public function store(array $data);
    public function update(array $data);
    public function delete($id);
}
