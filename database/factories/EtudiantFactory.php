<?php

namespace Database\Factories;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
   // protected $mode1 = Etudiant ::class;
    public function index(){
        $liste = Etudiant::orederby('nom','asc')->get();
        return view('etudiant',compact('liste'));
    }
}

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastname(),
            'prenom' => $this->faker->firstname(),
            'classe_id'=> rand(1,6),
        ];
    }
}