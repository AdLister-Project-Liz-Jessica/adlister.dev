<?php 

require_once __DIR__ . '/../../models/Product.php';
$_ENV = include __DIR__ . '/../../.env.php';
require __DIR__ . '/../db_connect.php';



//truncate table before seeding

$dbc->exec('TRUNCATE TABLE products');
	


$product = new Product;
$product->user_id = 2;
$product->product_name = "pineapple peeler/corer";
$product->price = 7.49;
$product->image_url = "/img/pineapple_peeler.jpg";
$product->description = "Pen pineapple apple pen! Any lover of pineapple surely has experienced the pain of having to peel and core a pineapple. This handy dandy tool does both tasks in one quick and easy step so you can get to enjoying your pineapple sooner.";
$product->save();

$product = new Product;
$product->user_id = 4;
$product->product_name = "blood splash cutting board";
$product->price = 12.50;
$product->image_url = '/img/blood-cutting_board.jpg';
$product->description = "Horror movie lovers unite. Scare guests in your kitchen with this blood splash cutting board. It sits on the edge of your counter and gives the illusion of blood pooling and dripping over. It'll keep guests on their toes looking for bloodless food.";
$product->save();

$product = new Product;
$product->user_id = 5;
$product->product_name = "breakfast sandwich maker";
$product->price = 40.00;
$product->image_url = '/img/breakfast-sandwich-maker.jpg';
$product->description = "Who doesn't love breakfast sammies? With this amazing gadget, you can cook your eggs, toast your favorite outsides and assemble a breakfast sandwich with your favorite ingredients in a snap.";
$product->save();

$product = new Product;
$product->user_id = 6;
$product->product_name = "keyboard waffle iron";
$product->price = 75.00;
$product->image_url = '/img/keyboard_waffle.jpg';
$product->description = "Calling all computer geeks! Made from heavy duty iron (DUH!), this amazing contraption heats up on your stove burner (or over the fire, for when you decide to disconnect and get in touch with nature) for perfect keyboard shaped waffles. Breakfast is served!";
$product->save();

$product = new Product;
$product->user_id = 7;
$product->product_name = "ice cream maker ball";
$product->price = 32.49;
$product->image_url = '/img/ice-cream-ball.jpg';
$product->description = "Who doesn't love ice cream? If you don't, we can't be friends (#sorryNotSorry). This ball allows you to get a workout in while your favorite flavor ice cream is in the making. Fill the inner portion of the ball with your chosen ice cream base and the outer portion with ice and rock salt - then kick, toss, and roll your way to fresh, homemade ice-cream.";
$product->save();

$product = new Product;
$product->user_id = 8;
$product->product_name = "magnetic cake form";
$product->price = 20.01;
$product->image_url = '/img/mag_cake_form.jpg';
$product->description = "Cakes in different shapes. Tired of having all your cake pans fall out of the cupboard whenever you open it? This magnetic cake form will be the last cake pan you buy. The magnets adhere to a cookie sheet and then shape the ribbon to whatever shape cake your heart desires.";
$product->save();

$product = new Product;
$product->user_id = 9;
$product->product_name = "Mr. T-Rex tea strainer";
$product->price = 5.00;
$product->image_url = '/img/mr_tea_rex.jpg';
$product->description = "For the tea lover in your life. Just fill Mr. T-Rex with your favorite tea and let him soak in hot water until your t(ea)-rex is steeped to perfection.";
$product->save();

$product = new Product;
$product->user_id = 1;
$product->product_name = "retro hostess apron";
$product->price = 75.00;
$product->image_url = '/img/retro_apron.jpg';
$product->description = "Get fancy in the kitchen. It's never good to have your guests showing up when you are covered in flour, so fix that with this retro style hostess apron. Take a page out of the book of a 50's housewife and protect your clothes but still look fabulous!";
$product->save();

$product = new Product;
$product->user_id = 2;
$product->product_name = "chemists spice rack";
$product->price = 49.95;
$product->image_url = '/img/spice_rack.jpg';
$product->description = "Because SCIENCE! Take your spice rack from boring to bold with this set of Erlenmeyer flasks with cork stoppers and elemental designations for your spices.";
$product->save();
