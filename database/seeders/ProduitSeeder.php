<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'nomProduit' => 'Huiller',
            'quantite' => 10,
            'prix' => 10000,
            'categorie_id' => 1,
            
        ]);
    }
}
