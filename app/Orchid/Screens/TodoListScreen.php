<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use App\Models\item;
use App\Orchid\Layouts\TodoListLayout;

use Orchid\Screen\Actions\Link;

class TodoListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'items'  => item::paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'TodoListScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.Todo.edit')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            TodoListLayout::class
        ];
    }
}