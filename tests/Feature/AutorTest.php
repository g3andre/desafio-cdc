<?php

namespace Tests\Feature;

use App\Models\Autor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

        $response = $this->postJson('/api/autor', $autor);

        $response->assertStatus(200);
        $response->assertContent('');
        $this->assertDatabaseHas('autores', [
            'nome' => $autor['nome'],
            'email' => $autor['email'],
            'descricao' => $autor['descricao'],
        ]);
    }
}
