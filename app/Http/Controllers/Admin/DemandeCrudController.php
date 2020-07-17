<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DemandeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DemandeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DemandeCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Demande::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/demande');
        CRUD::setEntityNameStrings('demande', 'demandes');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $f1 = [
            'name' => 'nom',
            'label' => 'Nom',
            'type' => 'text',
        ];
        $f2 = [
            'name' => 'prenom',
            'label' => 'Prenom',
            'type' => 'text',
        ];
        $f3 = [
            'name' => 'telephone',
            'label' => 'Telephone',
            'type' => 'text',
        ];
        $f4 = [
            'name' => 'prix',
            'label' => 'Prix',
            'type' => 'text',
        ];

        $this->crud->addColumns([$f1, $f2, $f3,$f4]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(DemandeRequest::class);

        $f1 = [
            'name' => 'nom',
            'label' => 'Nom',
            'type' => 'text',
        ];
        $f2 = [
            'name' => 'prenom',
            'label' => 'Prenom',
            'type' => 'text',
        ];
        $f3 = [
            'name' => 'telephone',
            'label' => 'Telephone',
            'type' => 'text',
        ];
        $f4 = [
            'name' => 'prix',
            'label' => 'Prix',
            'type' => 'text',
        ];
        $f5 = [
            'name' => 'commentaire',
            'label' => 'Commentaire',
            'type' => 'text',
        ];

        $this->crud->addFields([$f1, $f2, $f3, $f4, $f5]);
        //CRUD::setFromDb(); // fields

        
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(DemandeRequest::class);
        $f1 = [
            'name' => 'nom',
            'label' => 'Nom',
            'type' => 'text',
        ];
        $f2 = [
            'name' => 'prenom',
            'label' => 'Prenom',
            'type' => 'text',
        ];
        $f3 = [
            'name' => 'telephone',
            'label' => 'Telephone',
            'type' => 'text',
        ];
        $f4 = [
            'name' => 'prix',
            'label' => 'Prix',
            'type' => 'text',
        ];
        $f5 = [
            'name' => 'commentaire',
            'label' => 'Commentaire',
            'type' => 'text',
        ];
        $this->crud->addFields([$f1, $f2, $f3, $f4, $f5]);
    }
}
