<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<style>
  .bg {
    height: 50%;
}
.veget{
    position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  font-size: 30px;
  font-family: "Brush Script MT", Brush Script Std, cursive;
  }
p {
  color: #334155;       }
            .veget1{
              color: #d4d4d8;
	font-size: 30px;

            }
            figcaption {
  background-color: #1e293b;
  color: white;
  font-style: italic;
  padding: 2px;
  text-align: center;
}
footer {
            background-color: #475569;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container{
  position: relative;
  text-align: center;
}
</style>
<body class="bg-slate-100">
  <header>
          <nav>
            <div class="flex flex-row  h-fix w-fix p-2 text-2xl text-slate-800 bg-slate-100">
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 font-mono hover:bg-slate-700 cursor-progress" ><a href="./homepage.php"><b>Home</b></a></button>
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 text-center font-mono hover:bg-slate-700  cursor-progress"><a href="./market.php"><b>Market</b></a></button>
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 text-center font-mono hover:bg-slate-700  cursor-progress"><a href="Contactus.php"><b>Contact Us</b></a></button>
                <button type="button" class="basis-1/4 box-border h-25 w-40 p-1 text-center font-mono hover:bg-slate-700  cursor-progress"><a href="Aboutus.php"><b>About Us</b></a></button>
              </div>
        </nav></header>
        <div class="container">
        <main style="background-image: url('images/box.jpg'); background-repeat: no-repeat; background-attachment: fixed;
  background-size: cover;" class="h-96 w-fix bg">
        <div class="veget">
        <h1 class=" text-9xl veget1 centered"> Veget Store</h1>
</div></main></div>
<section >
<div class="flex flex-row  h-fix w-fix p-2 text-2xl text-slate-300">
                <button type="button" class="basis-1/4 box-border h-22 w-40 p-2 text-center font-mono hover:bg-slate-700 cursor-progress" ><a href="./market.php"><img src="./images/photo.jpg"><figcaption>Fresh Vegetables</figcaption></a></button>
                <button type="button" class="basis-1/4 box-border h-22 w-40 p-2 text-center font-mono hover:bg-slate-700 cursor-progress"><a href="./market.php"><img src="./images/photo.jpg"><figcaption>Fresh Tree Fruits</figcaption></a></button>
                <button type="button" class="basis-1/4 box-border h-22 w-40 p-2 text-center font-mono hover:bg-slate-700 cursor-progress"><a href="./market.php"><img src="./images/photo.jpg"><figcaption>Leafy Vegetables</figcaption></a></button>
                <button type="button" class="basis-1/4 box-border h-22 w-40 p-2 text-center font-mono hover:bg-slate-700 cursor-progress"><a href="./market.php"><img src="./images/photo.jpg"><figcaption>Fresh Herbal Plants</figcaption></a></button>
              </div>
              <div class="veget1 text-slate-300 text-justify" id="heading"><p class="font-mono"><b>Choose what the category you are expecting to get from us. We have all the varieties you need for your home fresh and 
                healthy. Please feel free to contact us by clicking above Contact us button.</b></p></div>
</div>
</section>
<footer>
<p>&copy; 2023 Veget-store</p>
</footer>
</body>
</html>