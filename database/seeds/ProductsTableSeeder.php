<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = "Tiritas Ahumadas";
        $product->code  = "0001";
        $product->description  = "Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res, ricas en contenido natural de glucosamina, ayudan a problemas en las articulaciones de tu perro y a su prevención, además al masticarlas elimina la placa.";
        $product->price = "6850";
        $product->status = true;
        $product->image = "/tienda/tienda-tiritas.png";
        $product->save();

        $product = new Product();
        $product->name = "Lonjitas de Res";
        $product->code  = "0002";
        $product->description  = "Las lonjitas de res de Three Pets son hechas de las mejores rilas de res. Ayudan a la salud dental y mantendrán a tu perro entretenido durante horas. Por su alto contenido proteico ayuda la formación de las células y su regeneración.";
        $product->price = "6950";
        $product->status = true;
        $product->image = "/tienda/tienda-lonjitas.png";
        $product->save();

        $product = new Product();
        $product->name = "Solomito Asado";
        $product->code  = "0003";
        $product->description  = "Los Solomitos Asados de Three Pets están hechos de los mejores tendones de res, ricos en contenido natural de glucosamina, ayuda a problemas en las articulaciones de tu perro y a su prevención, además al masticarlas elimina la placa. Ideal para perros de todos los tamaños.";
        $product->price = "9200";
        $product->status = true;
        $product->image = "/tienda/tienda-solomito.png";
        $product->save();

        $product = new Product();
        $product->name = "Rollitos de Res";
        $product->code  = "0004";
        $product->description  = "El rollito de res de Three Pets está hecho de la mejor tráquea de res, ricas en contenido natural de glucosamina, ayuda a problemas en las articulaciones de tu perro y a su prevención, además al masticarlas elimina la placa. Ideal para perros de todos los tamaños.";
        $product->price = "5950";
        $product->status = true;
        $product->image = "/tienda/tienda-rollito.png";
        $product->save();

        $product = new Product();
        $product->name = "Pernil de Cerdo";
        $product->code  = "0005";
        $product->description  = "El pernil de cerdo de Three Pets está hecho del mejor humero de cerdo, horneado a la perfección, ideal para fortalecer la mandíbula de tu perro, ayudando a la prevención de sarro y su cuidado dental.";
        $product->price = "7000";
        $product->status = true;
        $product->image = "/tienda/tienda-pernil.png";
        $product->save();

        $product = new Product();
        $product->name = "Trocitos Mix";
        $product->code  = "0006";
        $product->description  = "Los Trocitos Mix de Three Pets son la mejor combinación de cola, rila, tráquea y tendones de res, horneadas lentamente a la perfección, mantendrán a tu perro entretenido durante horas. Ideal para perros de todos los tamaños.";
        $product->price = "8000";
        $product->status = true;
        $product->image = "/tienda/tienda-trocitos.png";
        $product->save();

        $product = new Product();
        $product->name = "Rollitos de Res";
        $product->code  = "0007";
        $product->description  = "El rollito de res de Three Pets está hecho de la mejor tráquea de res, ricas en contenido natural de glucosamina, ayuda a problemas en las articulaciones de tu perro y a su prevención, además al masticarlas elimina la placa. Ideal para perros de todos los tamaños.";
        $product->price = "22600";
        $product->status = true;
        $product->image = "/tienda/bombonera_rollitos.jpg";
        $product->save();

        $product = new Product();
        $product->name = "Pernil de Cerdo";
        $product->code  = "0008";
        $product->description  = "El pernil de cerdo de Three Pets está hecho del mejor humero de cerdo, horneado a la perfección, ideal para fortalecer la mandíbula de tu perro, ayudando a la prevención de sarro y su cuidado dental.";
        $product->price = "24200";
        $product->status = true;
        $product->image = "/tienda/bombonera_pernil.jpg";
        $product->save();

        $product = new Product();
        $product->name = "Trocitos Mix";
        $product->code  = "0009";
        $product->description  = "Los Trocitos Mix de Three Pets son la mejor combinación de cola, rila, tráquea y tendones de res, horneadas lentamente a la perfección, mantendrán a tu perro entretenido durante horas. Ideal para perros de todos los tamaños.";
        $product->price = "26600";
        $product->status = true;
        $product->image = "/tienda/bombonera_trocitos.jpg";
        $product->save();
    }
}
