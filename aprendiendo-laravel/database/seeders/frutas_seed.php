<?php



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i<= 20; $i++){
            DB::table('frutas')->insert(array(
                'nombre'=> 'Cereza'.$i,
                'descripcion'=>'descripcion de la fruta '.$i,
                'precio'=>$i
            ));
        }
        $this->command->info('La tabla de frutas ha sido rellenada');
    }
}
