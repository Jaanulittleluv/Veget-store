<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vegetable Market</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #475569;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        .product {
            display: flex;
            flex-wrap: wrap;
        }

        .product-item {
            flex: 1;
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
            margin: 10px;
            border-radius: 5px;
        }

        .product-image {
            max-width: 100%;
            height: auto;
        }

        footer {
            background-color: #475569;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
<nav>
            <div class="flex flex-row  h-fix w-fix p-2 text-2xl text-slate-800 bg-slate-100">
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 font-mono hover:bg-slate-700 cursor-progress" ><a href="./homepage.php"><b>Home</b></a></button>
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 font-mono hover:bg-slate-700  cursor-progress"><a href="./market.php"><b>Market</b></a></button>
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 font-mono hover:bg-slate-700  cursor-progress"><a href="Contactus.php"><b>Contact Us</b></a></button>
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 font-mono hover:bg-slate-700  cursor-progress"><a href="Aboutus.php"><b>About Us</b></a></button>
              </div>
        </nav>
    <header>
        <h1 class="text-4xl font-serif">Welcome to the Veget-Store</h1>
    </header>
    <div class="container">
        <h2 class="text-3xl font-serif"><b>Our Products</b></h2>
        <h3 class="text-2xl font-serif">Vegetables</h3>
        <div class="product">
            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/carrot.png" alt="Carrot">
                <h3>Carrots</h3>
               </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/tomato.png" alt="Tomato">
                <h3>Tomatoes</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/onion.png" alt="Onion">
                <h3>Onion</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/bellpepper.png" alt="bellpepper">
                <h3>Bell Pepper</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/potato.png" alt="potato">
                <h3>Potato</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/corn.png" alt="corn">
                <h3>Corn</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/pumpkin.png" alt="pumpkin">
                <h3>Pumpkin</h3>
    </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/brinjal.png" alt="brinjal">
                <h3>Brinjal</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/beetroot.png" alt="beetroot">
                <h3>Beet Root</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./vegetables.php">
                <img class="product-image" src="./images/sweetpotato.png" alt="sweetpotato">
                <h3>Sweet Potato</h3>
                </a></button>
            </div>
        </div>
    </div>


    <div class="container">
        <h3 class="text-2xl font-serif">Fruits</h3>
        <div class="product">
            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/guava.png" alt="guava">
                <h3>Guava</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/mango.png" alt="mango">
                <h3>Mango</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/apple.png" alt="apple">
                <h3>Apple</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/papaya.png" alt="papaya">
                <h3>Papaya</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/banana.png" alt="banana">
                <h3>Banana</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/jackfruit.png" alt="jackfruit">
                <h3>Jack Fruit</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/orange.png" alt="orange">
                <h3>Orange</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/avacado.png" alt="avacado">
                <h3>Avacado</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/pineapple.png" alt="pineapple">
                <h3>Pineapple</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./fruits.php">
                <img class="product-image" src="./images/mangosteen.png" alt="mangosteen">
                <h3>Mangosteen</h3>
                </a></button>
            </div>
        </div>
    </div>


    <div class="container">
        <h3 class="text-2xl font-serif">Leafy Vegetables</h3>
        <div class="product">
            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/spinach.png" alt="spinach">
                <h3>Spinach</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/broccoli.png" alt="braccoli">
                <h3>Braccoli</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/leek.png" alt="leek">
                <h3>Leek</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/asparagus.png" alt="asparagus">
                <h3>Asparagus</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/iceberg.png" alt="iceberg">
                <h3>Iceberg</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/grasspealeaf.png" alt="grasspealeaf">
                <h3>Grass pea leaves</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/curryleaf.png" alt="curryleaf">
                <h3>Curry Leaves</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/springonion.png" alt="springonion">
                <h3>Spring Onion</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/lettuce.png" alt="lettuce">
                <h3>Lettuce</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./leafvegetables.php">
                <img class="product-image" src="./images/fenugreek.png" alt="fenugreek">
                <h3>Fenugreek</h3>
                </a></button>
            </div>
        </div>
    </div>


    <div class="container">
        <h3 class="text-2xl font-serif">Herbal Plants</h3>
        <div class="product">
            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/aloevera.png" alt="aloevera">
                <h3>Aloe Vera</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/peppermint.png" alt="peppermint">
                <h3>Peppermint</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/marigold.png" alt="marigold">
                <h3>Marigold</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/lemonbalm.png" alt="lemonbalm">
                <h3>Lemon Balm</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/lavender.png" alt="lavender">
                <h3>Lavender</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/rosemary.png" alt="rosemary">
                <h3>Rosemary</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/basil.png" alt="basil">
                <h3>Basil</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/parsley.png" alt="parsley">
                <h3>Parsley</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/bayleaf.png" alt="bayleaf">
                <h3>Bayleaf</h3>
                </a></button>
            </div>

            <div class="product-item">
            <button type="button" class="text-center font-mono hover:bg-slate-200 cursor-progress" >
            <a href="./herbalplants.php">
                <img class="product-image" src="./images/tulasi.png" alt="tulasi">
                <h3>Tulasi</h3>
                </a></button>
            </div>
        </div>
    </div>
    <footer>
<p>&copy; 2023 Veget-store</p>
</footer>
</body>
</html>
