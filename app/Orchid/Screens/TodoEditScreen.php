<?php
namespace App\Orchid\Screens;

use App\Models\item;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class TodoEditScreen extends Screen
{
    /**
     * @var item
     */
    public $item;

    /**
     * Query data.
     *
     * @param item $item
     *
     * @return array
     */
    public function query(item $item): array
    {
        return [
            'item' => $item
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->item->exists ? 'Edit item' : 'Creating a new item';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "editing item";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create item')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->item->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->item->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->item->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Relation::make('item.author')
                    ->title('Author')
                    ->fromModel(User::class, 'name'),
            ])
        ];
    }

    /**
     * @param item    $item
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(item $item, Request $request)
    {
        $item->fill($request->get('item'))->save();

        Alert::info('You have successfully created a item.');

        return redirect()->route('platform.item.list');
    }

    /**
     * @param item $item
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(item $item)
    {
        $item->delete();

        Alert::info('You have successfully deleted the item.');

        return redirect()->route('platform.TodoList');
    }
}