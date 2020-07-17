<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OffreRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OffreCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OffreCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Offre::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/offre');
        CRUD::setEntityNameStrings('offre', 'offres');
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
            'name' => 'imgPath1',
            'type' => 'image',
            'label' => 'Image',
            'prefix' => 'storage/',
            'height' => '80px'
        ];
        $f2 = [
            'name' => 'titre',
            'label' => 'Titre',
            'type' => 'text',
        ];
        $f4 = [
            'name' => 'prix',
            'label' => 'Prix',
            'type' => 'text',
        ];
        $f5 = [
            'name' => 'capacite',
            'label' => 'Capacite',
            'type' => 'text',
        ];
        $f8 = [
            'name' => 'wifi',
            'type' => 'boolean',
            'label' => 'wifi',
        ];
        $f9 = [
            'name' => 'lave_ligne',
            'type' => 'boolean',
            'label' => 'lave-ligne',
        ];

        $this->crud->addColumns([$f1, $f2,$f4, $f5, $f8,$f9]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        
        CRUD::setValidation(OffreRequest::class);
        $f1 = [
            'name' => 'imgPath1',
            'type' => 'image',
            'label' => 'Image 1',
            'prefix' => 'storage/',
            'height' => '300px'
        ];

        $f2 = [
            'name' => 'imgPath2',
            'type' => 'image',
            'label' => 'Image 2',
            'prefix' => 'storage/',
            'height' => '300px'
        ];
        $f3 = [
            'name' => 'imgPath3',
            'type' => 'image',
            'label' => 'Image 3',
            'prefix' => 'storage/',
            'height' => '300px'
        ];
        $f4 = [
            'name' => 'titre',
            'label' => 'Titre',
            'type' => 'text',
        ];
        
        $f5 = [
            'name' => 'prix',
            'label' => 'Prix',
            'type' => 'text',
        ];
        $f6 = [
            'name' => 'capacite',
            'label' => 'Capacite',
            'type' => 'text',
        ];
        $f7 = [
            'name' => 'latitude',
            'label' => 'latitude',
            'type' => 'text',
        ];
        $f8 = [
            'name' => 'langitude',
            'label' => 'langitude',
            'type' => 'text',
        ];
        $f9 = [
            'name' => 'wifi',
            'type' => 'boolean',
            'label' => 'wifi',
        ];
        $f10 = [
            'name' => 'lave_ligne',
            'type' => 'boolean',
            'label' => 'lave-ligne',
        ];
        $f11 = [
            'name' => 'description',
            'label' => 'description',
            'type' => 'text',
        ];

        $this->crud->addFields([$f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8,$f9, $f10, $f11]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(OffreRequest::class);
        $f1 = [
            'name' => 'imgPath1',
            'type' => 'image',
            'label' => 'Image 1',
            'prefix' => 'storage/',
            'height' => '300px'
        ];

        $f2 = [
            'name' => 'imgPath2',
            'type' => 'image',
            'label' => 'Image 2',
            'prefix' => 'storage/',
            'height' => '300px'
        ];
        $f3 = [
            'name' => 'imgPath3',
            'type' => 'image',
            'label' => 'Image 3',
            'prefix' => 'storage/',
            'height' => '300px'
        ];
        $f4 = [
            'name' => 'titre',
            'label' => 'Titre',
            'type' => 'text',
        ];
        
        $f5 = [
            'name' => 'prix',
            'label' => 'Prix',
            'type' => 'text',
        ];
        $f6 = [
            'name' => 'capacite',
            'label' => 'Capacite',
            'type' => 'text',
        ];
        $f7 = [
            'name' => 'latitude',
            'label' => 'latitude',
            'type' => 'text',
        ];
        $f8 = [
            'name' => 'langitude',
            'label' => 'langitude',
            'type' => 'text',
        ];
        $f9 = [
            'name' => 'wifi',
            'type' => 'boolean',
            'label' => 'wifi',
        ];
        $f10 = [
            'name' => 'lave_ligne',
            'type' => 'boolean',
            'label' => 'lave-ligne',
        ];
        $f11 = [
            'name' => 'description',
            'label' => 'description',
            'type' => 'text',
        ];


        $this->crud->addFields([$f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8,$f9, $f10,  $f11]);
    }

    protected function setupShowOperation()
    {

        $this->crud->set('show.setFromDb', false);
        $f1 = [
            'name' => 'imgPath1',
            'type' => 'image',
            'label' => 'Image 1',
            'prefix' => 'storage/',
            'height' => '80px'
        ];
        $f2 = [
            'name' => 'titre',
            'label' => 'Titre',
            'type' => 'text',
        ];
        $f4 = [
            'name' => 'prix',
            'label' => 'Prix',
            'type' => 'text',
        ];
        $f5 = [
            'name' => 'capacite',
            'label' => 'Capacite',
            'type' => 'text',
        ];
        $f8 = [
            'name' => 'wifi',
            'type' => 'boolean',
            'label' => 'wifi',
        ];
        $f9 = [
            'name' => 'lave_ligne',
            'type' => 'boolean',
            'label' => 'lave-ligne',
        ];
        $f11 = [
            'name' => 'description',
            'label' => 'description',
            'type' => 'text',
        ];
        

        $this->crud->addColumns([$f1,$f2, $f4, $f5, $f8,$f9, $f11]);

        

    }
}
