# AComer - Backend 

Rest API  


#### Notas  

Creando migrations: Modelado de la base de datos. 

```
> php artisan make:migration create_nombre_table 
```

Creando seeders: Insertando datos de prueba en una base de datos. 

```
> php artisan make:seeder NombreSeeder 
```

Creando models: Son los modelos que manejaremos en php para realizar consultas y relaciones. 

```
> php artisan make:model Models/Nombre
```

Creando los controllers: Nos serviran para las peticiones realizadas en los servicios. 

```
> php artisan make:controller api/v1/NombreController --resource
```

Creando un resources: Estos nos funcionan para mapear en un JSON el objeto. 
```
> php artisan make:resource NombreResource 
```

Definir solo rutas para api: 

```php
Route::apiResource('', '');
```

Migrar todos los modelos a la base de datos  
```
> php artisan migrate
```