<?php

namespace App\GraphQL\Queries;

use App\Models\Book;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
class SomeComplexQuery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return Book::where('author','like','%'.$args['search'].'%')->get();
    }
}
