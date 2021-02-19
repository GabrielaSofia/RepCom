<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Reparacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    //-------------------------------------------------------------
    private $arrayReparaciones = array(
        array(
            'id_cliente' => '30723058',
            'serial' => 'B8E7N18313000652', 
            'marca_linea' => 'Asus VivoBook', 
            'imagen' => 'https://thumb.pccomponentes.com/w-530-530/articles/18/186338/s430-view-04-basic-1g-np.jpg', 
            'observaciones' => 'Computador Portátil, contraseña:123456', 
            'fecha_ing' => '2020/12/15',
            'fecha_sal' => '2020/12/22', 
            'estado' => 'EN', 
            'desc_problema' => 'Revisar parlantes y Wifi e instalar ubuntu en su versión mas reciente.', 
            'precio' => '100000',
            'id_empleado' => '1',
        ),
        array(
            'id_cliente' => '12981540',
            'serial' => 'G8E6N78313707652', 
            'marca_linea' => 'Dell Inspiron', 
            'imagen' => 'https://tecnoplaza.com.co/sitio/wp-content/uploads/2020/02/l_10190077_002-600x600.jpg', 
            'observaciones' => 'Computador Portátil', 
            'fecha_ing' => '2020/12/17',
            'fecha_sal' => '2020/12/24', 
            'estado' => 'EN', 
            'desc_problema' => 'Instalar Software Básico', 
            'precio' => '50000',
            'id_empleado' => '2',
        ),
        array(
            'id_cliente' => '1085123587',
            'serial' => 'AB3EN11938700652', 
            'marca_linea' => 'Dell XPS', 
            'imagen' => 'https://queportatilcomprar.net/wp-content/uploads/2020/04/Dell-XPS-15-7590-Negro.jpg', 
            'observaciones' => 'Computador Portátil, contraseña:123456', 
            'fecha_ing' => '2020/12/23',
            'fecha_sal' => '2020/12/30', 
            'estado' => 'EN', 
            'desc_problema' => 'El portátil se apaga solo.', 
            'precio' => '80000',
            'id_empleado' => '3',
        ),
        array(
            'id_cliente' => '1086543678',
            'serial' => 'H877N13313700659', 
            'marca_linea' => 'Lenovo IdeaPAD', 
            'imagen' => 'https://queportatilcomprar.net/wp-content/uploads/2020/04/Lenovo-ideapad-330-15IKB-.jpg', 
            'observaciones' => 'Computador Portátil, contraseña:987654321', 
            'fecha_ing' => '2020/12/29',
            'fecha_sal' => '2021/01/06', 
            'estado' => 'EN', 
            'desc_problema' => 'No arranca el sistema operativo.', 
            'precio' => '70000',
            'id_empleado' => '1',
        ),
        array(
            'id_cliente' => '1087234697',
            'serial' => 'U9E33283230111856', 
            'marca_linea' => 'Asus ZenBook', 
            'imagen' => 'https://queportatilcomprar.net/wp-content/uploads/2020/04/ASUS-ZenBook-Pro-14.jpg', 
            'observaciones' => 'Computador Portátil', 
            'fecha_ing' => '2021/01/07',
            'fecha_sal' => '2021/01/14', 
            'estado' => 'EN', 
            'desc_problema' => 'Aparecen líneas de colores.', 
            'precio' => '250000',
            'id_empleado' => '2',
        )
    );
    //-------------------------------------------------------------
    private $arrayClientes = array(
        array(
            'id_cliente' => '30723058',
            'nom_cliente' => 'Marleny', 
            'ape_cliente' => 'Juajinoy España', 
            'tel_cliente' => '3206692168', 
            'email_cliente' => 'marleny@gmail.com', 
            'dir_cliente' => 'Carrera 1 #9-62',
        ),
        array(
            'id_cliente' => '12981540',
            'nom_cliente' => 'Juan', 
            'ape_cliente' => 'Calpa Delgado', 
            'tel_cliente' => '3128422316', 
            'email_cliente' => 'juandelgado@gmail.com', 
            'dir_cliente' => 'Carrera 23a #5-14',
        ),
        array(
            'id_cliente' => '1085123587',
            'nom_cliente' => 'Luis', 
            'ape_cliente' => 'Martinez Agreda', 
            'tel_cliente' => '3215345123', 
            'email_cliente' => 'luis@gmail.com', 
            'dir_cliente' => 'Carrera 14d #12-3',
        ),
        array(
            'id_cliente' => '1086543678',
            'nom_cliente' => 'Fernando', 
            'ape_cliente' => 'Diaz Benavides', 
            'tel_cliente' => '3172346412', 
            'email_cliente' => 'fernandob@gmail.com', 
            'dir_cliente' => 'Calle 12a #2-11',
        ),
        array(
            'id_cliente' => '1087234697',
            'nom_cliente' => 'Salomé', 
            'ape_cliente' => 'Goyes Paredes', 
            'tel_cliente' => '3183821342', 
            'email_cliente' => 'salomeg@gmail.com', 
            'dir_cliente' => 'Carrera 16b #8-25',
        ),
    );
    //-------------------------------------------------------------
    private function seedCatalog(){
        DB::table('reparacions')->delete();

        foreach($this->arrayReparaciones as $reparacion ){
            $r = new Reparacion();
            $r->id_cliente= $reparacion['id_cliente'];
            $r->serial= $reparacion['serial'];
            $r->marca_linea= $reparacion['marca_linea'];
            $r->imagen= $reparacion['imagen'];
            $r->observaciones= $reparacion['observaciones'];
            $r->fecha_ing= $reparacion['fecha_ing'];
            $r->fecha_sal= $reparacion['fecha_sal'];
            $r->estado= $reparacion['estado'];
            $r->desc_problema= $reparacion['desc_problema'];
            $r->precio= $reparacion['precio'];
            $r->id_empleado= $reparacion['id_empleado']; 
            $r->save();
        }
    }
    private function seedClientes(){
        DB::table('clients')->delete();

        foreach($this->arrayClientes as $cliente ){
            $c = new Client();
            $c->id_cliente= $cliente['id_cliente'];
            $c->nom_cliente= $cliente['nom_cliente'];
            $c->ape_cliente= $cliente['ape_cliente'];
            $c->tel_cliente= $cliente['tel_cliente'];
            $c->email_cliente= $cliente['email_cliente'];
            $c->dir_cliente= $cliente['dir_cliente'];
            $c->save();
        }
    }
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedCatalog();
        self::seedUsers();
        self::seedClientes();
        $this->command->info('Tabla catálogo y clientes inicializada con datos!');
        
    }
    public function seedUsers()
    {
        DB::table('users')->insert([
            "name" =>"Gabriela",
            "email" => "gabrielasofia0519@gmail.com",
            "password" => bcrypt("gabriela")]);
        DB::table('users')->insert([
            "name" =>"Andrea",
            "email" => "amcj@gmail.com",
            "password" => bcrypt("andrea")]);
        DB::table('users')->insert([
            "name" =>"Juan",
            "email" => "jbcd@gmail.com",
            "password" => bcrypt("juan")]);
        DB::table('users')->insert([
            "name" =>"Cristhian",
            "email" => "cristhian@udenar.edu.co",
            "password" => bcrypt("cristhian")]);
    }
}
