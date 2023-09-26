<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Fruit Market</title>
    <link rel="stylesheet" href="style.css">
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

        .form-container {
  min-height: 100vh;
  display: flex;
  align-items: center;
}
        form {
            
  display: flex;
  flex-direction: column;
  width: 50%;
  gap: 1rem;
  padding: 2rem;
  background-color: hsl(0, 0%, 98%);
  border-radius: 10px;
  box-shadow: 0 4px 4px hsla(0, 0%, 0%, 10%);
  transition: box-shadow 0.3s ease;
  margin: 0 auto;
}

.input-field {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
  
}

.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: #475569;
  font-size: 16px;
  pointer-events: none;
  transition: 0.15s ease;
}

.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: #fff;
}

.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
}

        select {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:0!important;
   background: #cbd5e1;
   background-image: none;
   flex: 1;
   padding: 0 .5em;
   color:#f8fafc;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
}
select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 20em;
   height: 3em;
   line-height: 3;
   background: #475569;
   overflow: hidden;
   border-radius: .25em;
}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #64748b;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #f8fafc;
}


    .btn {
        border: 0px solid #fff;
        padding: 1em 2em;
        min-width: 200px;
        min-height: 50px;
        position: relative;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        transition: background-color 0.5s linear 0.5s;
    }

.order::after {
        content: "";
        display: block;
        box-shadow: 0 0 0 1px #0ebac5;
        background: none;
        position: absolute;
        inset: 0;
        transition: scale() 100ms linear 0.3s;
    }
 
    .order:hover::after {
        opacity: 0;
    }
 
    .order:hover {
        background-color: #94a3b8;
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
        <h1 class="text-4xl font-serif">Place your orders to Veget-Store</h1>
    </header>
    <div class="container">
    <div class="form-container">
    <form action="./script.php" method="post">
      <h2 class="text-3xl text-align:center text-slate-600"><b>Fruits</b></h2>
    <div class="input-field">
      <input id="fullname" type="text" placeholder="Jane Doe" name="fullname">
      <label>
      <p class="text-xl">
        Full Name</p>
      </label>
    </div>
      
      <div class="select">
   <select name="Fruits" id="format">
      <option selected disabled>Choose your Fruits</option>
      <option>Guava</option>
          <option>Papaya</option>
          <option>Banana</option>
          <option>Mango</option>
          <option>Jack Fruit</option>
          <option>Orange</option>
          <option>Apple</option>
          <option>Avacado</option>
          <option>Pineapple</option>
          <option>Mangosteen</option>
   </select>
</div><br>
<div class="input-field">
      <input id="quantity" type="text" placeholder="Enter gram or Kilogram" name="quantity">
      <label>
      <p class="text-xl">
        Quantity</p>
      </label>
    </div>
      
<div class="select">
   <select name="district" id="format">
      <option selected disabled>Choose your District</option>
      <option>Kandy</option>
          <option>Matale</option>
          <option>Nuwara-eliya</option>
   </select>
</div><br>


<div class="select">
   <select name="area" id="format">
      <option selected disabled>Choose your Area</option>
      <optgroup label="Kandy">
        <datalist id="area">
        <option>Akurana</option>
          <option>Aladeniya</option>
          <option>Alawatugoda</option>
          <option>Aludeniya</option>
          <option>Ambatenna</option>
          <option>Ampitiya</option>
          <option>Ankubura</option>
          <option>Ankumbura</option>
          <option>Aruppola</option>
          <option>Atabage</option>
          <option>Bopana</option>
          <option>Bowala</option>
          <option>Bowalawatta</option>
</datalist>
</optgroup>
<optgroup label="Matale">
        <datalist id="area">
        <option>Akuramboda</option>
          <option>Alawatta</option>
          <option>Ambana</option>
          <option>Beligamuwa</option>
          <option>Dambulla</option>
          <option>Devagiriya</option>
          <option>Dullewa</option>
          <option>Elkaduwa</option>
          <option>Etanawala</option>
          <option>Gangala</option>
</datalist>
</optgroup>
<optgroup label="Nuwara-eliya">
        <datalist id="area">
        <option>Agarapatana</option>
          <option>Ambaliyadda</option>
          <option>Ambewala</option>
          <option>Bogahawatta</option>
          <option>Bogawantalawa</option>
          <option>Dayagama bazaar</option>
          <option>Dikoya</option>
          <option>Ginigathena</option>
          <option>Hatton</option>
</datalist>
</optgroup>
   </select>
</div><br>
<div class="input-field">
      <input name="address" type="text" placeholder="Colombo 3">
      <label>
      <p class="text-xl">
        Address</p>
      </label>
    </div>
      <div class="buttonstyle">
    <button type="submit" name="order" class="btn order object-bottom">
        Order
      </button>
    </div>
    </form>
    </div>
    </div>
    <footer>
<p>&copy; 2023 Veget-store</p>
</footer>
</body>
</html>
