<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use Faker\Generator as Faker;


$factory->define(Proyecto::class, function (Faker $faker, $sexo) {
    return [

        'nombres'=>$faker->name,
        'apellidos'=>$faker->lastName,
        'fnacimiento'=>$faker->dateTimeBetween('-25 years', 'now'),
        'edad'=>$faker->numberBetween(0,25),
       'sexo'=>$faker->randomElement(['Femenino', 'Masculino']),

        //'sexo'=>$sexo,
        'cabello'=>$faker->randomElement(['Negro', 'Pelirojo', 'Castaño', 'Ceniso', 'Blanco']),
        'ojos'=>$faker->randomElement(['Negros', 'Azules','Verdes', 'Grises', 'Cafes']),
        'piel'=>$faker->randomElement(['Blanco', 'Trigueña', 'Morena', 'Negra']),
        'identidad'=>$faker->unique()->regexify('[0-9][0-9]'),
        'nacionalidad'=>$faker->text(50),
        'pasaporte'=>$faker->numberBetween(15),
        'nacimiento'=>$faker->text(50),
        'direccion'=>$faker->text(50),
        'signosFisicos'=>$faker->text(50),
        'enfermedad'=>$faker->text(50),
        'tratamiento'=>$faker->text(50),


        'nombresMadre'=>$faker->name,
        'apellidosMadre'=>$faker->lastName,
        'fnacimientoMadre'=>$faker->dateTimeBetween('-100 years'),
        'direccionMadre'=>$faker->text(50),
        'trabajaMadre'=>$faker->randomElement(['Si', 'No']),
        'profesionOficio'=>$faker->text(50),
        'identidadMadre'=>$faker->unique()->regexify('[0-9][0-9]'),
        'pasaporteMadre'=>$faker->numberBetween('15'),
        'civil'=>$faker->randomElement(['Soltero/a', 'Casado/a', 'Union Libre', 'Separado/a', 'Divorciado/a', 'Viudo/a']),
        'telefono'=>$faker->phoneNumber,


        'vulneracion'=>$faker->text(100),
        'proteccion'=>$faker->text(100),

        'nombretecnico'=>$faker->name,
        'apellidotecnico'=>$faker->lastName,
        'fecha'=>$faker->date('Y-m-d'),
        'hora'=>$faker->time('H:i:s')

    ];


});
