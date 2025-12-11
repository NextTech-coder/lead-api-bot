<?php

test('registration', function () {
    $name = fake()->name();
    $email = fake()->unique()->safeEmail();
    $password = 'Ddwadawa2020_';
    $user = [
        "full_name" => $name,
        "email" => $email,
        "password" => $password,
        "password_confirmation" => $password,
        "accepted" => true,
    ];

    $response = $this->post('/api/sign-up', $user);

    $response->assertStatus(201);
    $this->assertDatabaseHas('users', [
        "full_name" => $name,
        "email" => $email,
    ]);
});
