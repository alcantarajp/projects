<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
/
| As Factories são FUNÇÕES recebem, por padrão, 2 parâmetros: um é o apontamento do Model
/ e o outro é uma função que recebe como parâmetro o instancia da classe Faker
/ Por mim essa FUNÇÃO irá retornar um arraym sendo a chave o nome do campo
(igual ao banco de dados) e o valor a variavel faker apontamento o tipo do atributo.
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->email
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
      'name' => $faker->word
    ];
});
