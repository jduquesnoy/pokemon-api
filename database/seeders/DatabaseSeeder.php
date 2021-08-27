<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $pokemons = [
            ['#001','Bulbizarre','Pokémon de départ de type Plante et Poison de la première génération offert par le Professeur Chen dans la région de Kanto. Il est le premier Pokémon du Pokédex National et du Pokédex de Kanto.','Bulbasaur','フシギダネ','#001'],
            ['#002','Herbizarre','Pokémon de type Plante et Poison de la première génération.','Ivysaur','フシギソウ','#002'],
            ['#003','Florizarre','Pokémon de type Plante et Poison de la première génération. On retrouve Florizarre sur les jaquettes des jeux Pokémon Vert et Pokémon Vert Feuille.','Venusaur','フシギバナ','#003'],
            ['#004','Salamèche','Pokémon de départ de type Feu offert par le Professeur Chen dans la région de Kanto et par le Professeur Platane dans la région de Kalos.','Charmander','ヒトカゲ','#004'],
            ['#005','Reptincel','Pokémon de type Feu de la première génération.','Charmeleon','リザード','#005'],
            ['#006','Dracaufeu','Pokémon de type Feu et Vol de la première génération. On retrouve Dracaufeu sur les jaquettes des jeux Pokémon Rouge et Pokémon Rouge Feu.','Charizard','リザードン','#006'],
            ['#007','Carapuce','Pokémon de départ de type Eau offert par le Professeur Chen dans la région de Kanto.','Squirtle','ゼニガメ','#007'],
            ['#008','Carabaffe','Pokémon de type Eau de la première génération.','Wartortle','カメール','#008'],
            ['#009','Tortank','Pokémon de type Eau de la première génération. On retrouve Tortank sur la jaquette de Pokémon Bleu.','Blastoise','カメックス','#009'],
            ['#010','Chenipan','Pokémon de type Insecte de la première génération. Il est le Pokémon qui évolue le plus rapidement, avec Aspicot et Chenipotte. C est d ailleurs le premier Pokémon qui évolue dans la série animée.','Caterpie','キャタピ','#010'],
            ['#011','Chrysacier','Pokémon de type Insecte de la première génération.','Metapod','トランセル','#011'],['#012','Papilusion','Pokémon Insecte et Vol de la première génération.','Butterfree','バタフリ','#012'],
            ['#013','Aspicot','Pokémon Insecte et Poison de la première génération. Il est le Pokémon qui évolue le plus vite avec Chenipan et Chenipotte.','Weedle','ビードル','#013'],
            ['#014','Coconfort','Pokémon Insecte et Poison de la première génération.','Kakuna','コクーン','#014'],
            ['#015','Dardargnan','Pokémon Insecte et Poison de la première génération.','Beedrill','スピアー','#015'],
            ['#016','Roucool','Pokémon de type Normal et Vol de la première génération.','Pidgey','ポッポ','#016'],
            ['#017','Roucoups','Pokémon de type Normal et Vol de la première génération.','Pidgeotto','ピジョン','#017'],
            ['#018','Roucarnage','Pokémon Normal et Vol de la première génération.','Pidgeot','ピジョット','#018'],
            ['#019','Rattata','Pokémon de la première génération et de type Normal. Il a contribué à entraîner de nombreux dresseurs débutants dans les hautes herbes de la Route 1.','Rattata','コラッタ','#019'],
            ['#020','Rattatac','Pokémon de type Normal de la première génération.','Raticate','ラッタ','#020'],
            ['#021','Piafabec','Pokémon de type Normal et Vol de la première génération.','Spearow','オニスズメ','#021'],
            ['#022','Rapasdepic','Pokémon de type Normal et Vol de la première génération.','Fearow','オニドリル','#022'],
            ['#023','Abo','un Pokémon de type Poison de la première génération.','Ekans','アーボ','#023'],['#024','Arbok','Pokémon de type Poison de la première génération.','Arbok','アーボック','#024'],
            ['#025','Pikachu','Pokémon Souris de type Électrik apparu dès la première génération. En tant que partenaire de Sacha, héros du dessin animé tiré du jeu, il est le plus célèbre des Pokémon et la mascotte officielle de la licence.','Pikachu','ピカチュウ','#025'],
            ['#026','Raichu','Pokémon de type Électrik de la première génération. C est l évolution de Pikachu, lorsque ce dernier est exposé à une Pierre Foudre.','Raichu','ライチュウ','#026']
        ];

        foreach($pokemons as $value){
            $pokemon = New \App\Models\Pokemon();
            $pokemon->pokedex_number = $value[0];
            $pokemon->french_name = $value[1];
            $pokemon->description = $value[2];
            $pokemon->english_name = $value[3];
            $pokemon->japanese_name = $value[4];
            $pokemon->photo = $value[5];
            $pokemon->save();
        }
    }
}
