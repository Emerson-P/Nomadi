<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('destinos_turisticos')->insert([
            [
                'nome' => 'Rio de Janeiro',
                'localizacao' => 'Rio de Janeiro, Brasil',
                'descricao' => 'Famosa por suas praias, paisagens naturais e o Cristo Redentor.',
                'atracoes_turisticas' => 'Cristo Redentor, Pão de Açúcar, Copacabana, Maracanã',
                'caminho_fotos' => '/imagens/rio.jpg',
                'precos' => 1200.00,
                'hoteis' => 'Copacabana Palace, Hotel Fasano, Hilton Rio',
                'pacotes_promocionais' => 'Pacote de 5 dias com passeio guiado e hotel incluso',
                'dia_horario_ida' => Carbon::create(2025, 7, 15, 10, 0),
                'dia_horario_volta' => Carbon::create(2025, 7, 20, 16, 0),
            ],
            [
                'nome' => 'Paris',
                'localizacao' => 'França',
                'descricao' => 'Cidade romântica conhecida pela Torre Eiffel e sua cultura.',
                'atracoes_turisticas' => 'Torre Eiffel, Museu do Louvre, Catedral de Notre-Dame',
                'caminho_fotos' => '/imagens/paris.jpg',
                'precos' => 3500.00,
                'hoteis' => 'Hotel Le Meurice, Ritz Paris, Pullman Eiffel',
                'pacotes_promocionais' => 'Pacote de 7 dias com translado e guia incluso',
                'dia_horario_ida' => Carbon::create(2025, 9, 10, 13, 0),
                'dia_horario_volta' => Carbon::create(2025, 9, 17, 21, 30),
            ],
            [
                'nome' => 'Foz do Iguaçu',
                'localizacao' => 'Paraná, Brasil',
                'descricao' => 'Conhecida pelas Cataratas do Iguaçu, uma das 7 maravilhas naturais.',
                'atracoes_turisticas' => 'Cataratas, Parque das Aves, Itaipu',
                'caminho_fotos' => '/imagens/iguacu.jpg',
                'precos' => 950.00,
                'hoteis' => 'Belmond Hotel das Cataratas, Recanto Cataratas',
                'pacotes_promocionais' => 'Pacote ecológico de 4 dias com guia e entrada no parque',
                'dia_horario_ida' => Carbon::create(2025, 6, 1, 9, 0),
                'dia_horario_volta' => Carbon::create(2025, 6, 5, 17, 0),
            ],
            [
                'nome' => 'Tóquio',
                'localizacao' => 'Japão',
                'descricao' => 'Cidade futurista com rica cultura e tecnologia.',
                'atracoes_turisticas' => 'Shibuya, Templo Senso-ji, Torre de Tóquio, Akihabara',
                'caminho_fotos' => '/imagens/toquio.jpg',
                'precos' => 5000.00,
                'hoteis' => 'Park Hyatt Tokyo, The Ritz-Carlton Tokyo',
                'pacotes_promocionais' => 'Pacote de 10 dias com guia bilíngue e ingressos de trem bala',
                'dia_horario_ida' => Carbon::create(2025, 8, 20, 8, 0),
                'dia_horario_volta' => Carbon::create(2025, 8, 30, 22, 0),
            ],
            [
                'nome' => 'Chapada Diamantina',
                'localizacao' => 'Bahia, Brasil',
                'descricao' => 'Parque nacional com trilhas, cachoeiras e paisagens deslumbrantes.',
                'atracoes_turisticas' => 'Cachoeira da Fumaça, Morro do Pai Inácio, Gruta da Lapa Doce',
                'caminho_fotos' => '/imagens/chapada.jpg',
                'precos' => 700.00,
                'hoteis' => 'Pousada Alto do Cajueiro, Hotel Canto das Águas',
                'pacotes_promocionais' => 'Pacote de 6 dias com trilhas e alimentação incluída',
                'dia_horario_ida' => Carbon::create(2025, 10, 3, 7, 30),
                'dia_horario_volta' => Carbon::create(2025, 10, 9, 19, 45),
            ]
        ]);

        
    }
}
