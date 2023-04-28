<?php

namespace App\Orchid\Layouts;

use App\Models\item;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TodoListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'items';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('name'),
            TD::make('created_at')->sort(),
            TD::make('completed'),
        ];
    }
}