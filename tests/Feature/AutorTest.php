<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use Tests\TestCase;

class AutorTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    #[TestDox('Testa se o autor é criado com sucesso')]
    public function criaAutor(): void
    {
        $autor = [
            'nome' => 'Autor Teste',
            'email' => 'autor@teste.com',
            'descricao' => 'Descrição do autor teste',
        ];

        $response = $this->postJson('/api/autores', $autor);

        $response->assertStatus(200);
        $response->assertContent('');
        $this->assertDatabaseHas('autores', [
            'nome' => $autor['nome'],
            'email' => $autor['email'],
            'descricao' => $autor['descricao'],
        ]);
    }

    public static function autorInvalidoDataProvider(): array
    {
        return [
            'Nome vazio' => [
                [
                    'nome' => '',
                    'email' => 'autor@teste.com',
                    'descricao' => 'Descrição do autor teste',
                ],
                [
                    'nome' => ['The nome field is required.'],
                ]
            ],

            'Email vazio' => [
                [
                    'nome' => 'Autor Teste',
                    'email' => '',
                    'descricao' => 'Descrição do autor teste',
                ],
                [
                    'email' => ['The email field is required.'],
                ]
            ],
            'Email inválido' => [
                [
                    'nome' => 'Autor Teste',
                    'email' => 'email-invalido',
                    'descricao' => 'Descrição do autor teste',
                ],
                [
                    'email' => ['The email field must be a valid email address.'],
                ]
            ],
            'Descricao vazia' => [
                [
                    'nome' => 'Autor Teste',
                    'email' => 'autor@teste.com',
                    'descricao' => '',
                ],
                [
                    'descricao' => ['The descricao field is required.'],
                ]
            ],
            'Descricao acima de 400 caracteres' => [
                [
                    'nome' => 'Autor Teste',
                    'email' => 'autor@teste.com',
                    'descricao' => Str::random(401),
                ],
                [
                    'descricao' => ['The descricao field must not be greater than 400 characters.'],
                ]
            ]
        ];
    }

    #[Test]
    #[TestDox('Testa se o autor não é criado com dados inválidos')]
    #[DataProvider('autorInvalidoDataProvider')]
    public function naoCriaAutorComDadosInvalidos(array $payload, array $erros): void
    {
        $response = $this->postJson('/api/autores', $payload);

        $response->assertStatus(422);
        $response->assertInvalid($erros);
    }
}
