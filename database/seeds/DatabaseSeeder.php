<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductDetail;
use App\ProductPrice;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $product = new Product();
        $product->name = 'Cuchuflis Manjar';
        $product->description = 'Sendos cuchuflis';
        $product->image = 'cuchufli';
        $product->extension = 'jpeg';
        $product->save();

        $productD = new ProductDetail();
        $productD->quantity = 90;
        $productD->image = 'bañado 1';
        $productD->extension = 'jpeg';
        $productD->products_id = 1;
        $productD->save();

        $productD1 = new ProductDetail();
        $productD1->quantity = 50;
        $productD1->image = 'bañado 2';
        $productD1->extension = 'jpeg';
        $productD1->products_id = 1;
        $productD1->save();

        $productD2 = new ProductDetail();
        $productD2->quantity = 20;
        $productD2->image = '';
        $productD2->extension = '';
        $productD2->products_id = 1;
        $productD2->save();

        $productPrice = new ProductPrice();
        $productPrice->tray = 1;
        $productPrice->price = 3000;
        $productPrice->product_details_id = 1;
        $productPrice->save();

        $productPrice1 = new ProductPrice();
        $productPrice1->tray = 3;
        $productPrice1->price = 2700;
        $productPrice1->product_details_id = 1;
        $productPrice1->save();

        $productPrice2 = new ProductPrice();
        $productPrice2->tray = 5;
        $productPrice2->price = 2500;
        $productPrice2->product_details_id = 1;
        $productPrice2->save();

        $productPrice3 = new ProductPrice();
        $productPrice3->tray = 1;
        $productPrice3->price = 1600;
        $productPrice3->product_details_id = 2;
        $productPrice3->save();

        $productPrice4 = new ProductPrice();
        $productPrice4->tray = 3;
        $productPrice4->price = 1500;
        $productPrice4->product_details_id = 2;
        $productPrice4->save();

        $productPrice5 = new ProductPrice();
        $productPrice5->tray = 5;
        $productPrice5->price = 1400;
        $productPrice5->product_details_id = 2;
        $productPrice5->save();

        $productPrice6 = new ProductPrice();
        $productPrice6->tray = 1;
        $productPrice6->price = 800;
        $productPrice6->product_details_id = 3;
        $productPrice6->save();
        
        $productPrice7 = new ProductPrice();
        $productPrice7->tray = 3;
        $productPrice7->price = 750;
        $productPrice7->product_details_id = 3;
        $productPrice7->save();

        $productPrice8 = new ProductPrice();
        $productPrice8->tray = 5;
        $productPrice8->price = 650;
        $productPrice8->product_details_id = 3;
        $productPrice8->save();
    }
}
