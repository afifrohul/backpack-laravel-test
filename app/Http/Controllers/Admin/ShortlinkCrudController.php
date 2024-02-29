<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShortlinkRequest;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ShortlinkCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ShortlinkCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Shortlink::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/shortlink');
        CRUD::setEntityNameStrings('shortlink', 'shortlinks');

        
        if ((\Auth::user()->hasRole('superadmin'))) {
            $this->crud->denyAccess(['update']);
        }
        
        if ((\Auth::user()->hasRole('adminhmif'))) {
            CRUD::addClause('where', 'user_id', '<=', 7);
        }

        if ((\Auth::user()->hasRole('divisi')) || (\Auth::user()->hasRole('mahaiswa')) ) {
            CRUD::addClause('where', 'user_id', '=', Auth::guard('web')->user()->id);
        }
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // set columns from db columns.
        CRUD::column([
            'name' => 'code',
            'label' => 'Alias',
            'prefix' => env('APP_URL').'/',
            'type'=> 'url'

        ]);

        CRUD::column([
            'name' => 'link',
            'label' => 'Link',
            'type' => 'url'
        ]);

        CRUD::column([
            'name' => 'user_id',
            'label' => 'User',
        ]);

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ShortlinkRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        CRUD::field([
            'name' => 'code',
            'label' => 'Alias'
        ]);
        CRUD::field([
            'name' => 'link',
            'label' => 'Link',
            'type' => 'url'
        ]);

        CRUD::field([
            'name' => 'user_id',
            'label' => 'User',
            'type' => 'hidden',
            'value' => Auth::guard('web')->user()->id
            // 'type' => 'select',
            // 'options'   => (function ($query) {
            //     return $query->orderBy('name', 'ASC')->where('id', Auth::guard('backpack')->user()->id)->get();
            // }),
        ]);

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
