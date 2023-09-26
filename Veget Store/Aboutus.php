<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>About Us</title>
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

        .container{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: #ddd;
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;
}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
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
    <div class="about">
      <img src="./images/happyfamily.jpg" class="pic">
      <div class="text">
        <h2>About Us</h2>
        <h5>We Are a Happy Family from Hatton,Srilanka</h5>
          <p>Welcome to our family's online plant nursery! We're a close-knit and passionate group of garden enthusiasts dedicated to making 
            gardening accessible to all. Our journey began in our backyard, where our love for nurturing plants united us. With smiles on our 
            faces and hands in the dirt, we decided to share our garden's beauty with the world. Our hand-picked, lovingly cared-for plant 
            collection reflects our family's heart and soul. Each plant is a testament to our dedication, and we're excited to share our plants.
             We believe in the happiness nature brings, and we can't wait to be part of your healthy adventure. Thank you for joining us on this
              journey, and let's grow together!"
          </p>
      </div>
    </div>
    </div>
    <footer>
<p>&copy; 2023 Veget-store</p>
</footer>
</body>
</html>
