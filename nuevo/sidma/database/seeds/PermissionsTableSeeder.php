<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     

    	//Users

    	Permission::create([
    		'name' => 'navegar usuarios',
    		'slug' => 'users.index',
    		'description' => 'lista y navega todos los usuarios del sistema',
    	]);

    	Permission::create([
    		'name' => 'ver detalles de usuarios',
    		'slug' => 'users.show',
    		'description' => 'ver en detalle cada usuario',
    	]);

    	Permission::create([
    		'name' => 'edicion de  usuarios',
    		'slug' => 'users.edit',
    		'description' => 'editar cualquier dato del usuario del sistema',
    	]);

    	Permission::create([
    		'name' => 'eliminar usuarios',
    		'slug' => 'users.destroy',
    		'description' => 'eliminar usuarios del sistema',
    	]);

    	//roles

    	 Permission::create([
    		'name' => 'navegar roles',
    		'slug' => 'roles.index',
    		'description' => 'lista y navega todos los rol del sistema',
    	]);


    	 Permission::create([
    		'name' => 'creacion de roles',
    		'slug' => 'roles.create',
    		'description' => 'lista y navega todos los rol del sistema',
    	]);


    	Permission::create([
    		'name' => 'ver detalles de roles',
    		'slug' => 'roles.show',
    		'description' => 'ver en detalle cadarol',
    	]);

    	Permission::create([
    		'name' => 'edicion de  roles',
    		'slug' => 'roles.edit',
    		'description' => 'editar cualquier dato delrol del sistema',
    	]);

    	Permission::create([
    		'name' => 'eliminar roles',
    		'slug' => 'roles.destroy',
    		'description' => 'eliminar rol del sistema',
    	]);


    	//prodproductos

    	 Permission::create([
    		'name' => 'navegar productos',
    		'slug' => 'products.index',
    		'description' => 'lista y navega todos los producto del sistema',
    	]);


    	 Permission::create([
    		'name' => 'creacion de productos',
    		'slug' => 'products.create',
    		'description' => 'lista y navega todos los producto del sistema',
    	]);


    	Permission::create([
    		'name' => 'ver detalles de productos',
    		'slug' => 'products.show',
    		'description' => 'ver en detalle cada producto',
    	]);

    	Permission::create([
    		'name' => 'edicion de  productos',
    		'slug' => 'products.edit',
    		'description' => 'editar cualquier dato del producto del sistema',
    	]);

    	Permission::create([
    		'name' => 'eliminar productos',
    		'slug' => 'products.destroy',
    		'description' => 'eliminar producto del sistema',
    	]);
    }
}
