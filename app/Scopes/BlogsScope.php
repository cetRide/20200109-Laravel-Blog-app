<?php


namespace App\Scopes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\App;

class BlogsScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('user_id', App::id());
    }
}
