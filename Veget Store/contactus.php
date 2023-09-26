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

        html {
  font-family: Helvetica, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

.contact {
  padding: 10px;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select, textarea {
  color:#475569;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

textarea {
  overflow: auto;
}

#container {
  border: solid 3px #475569;
  margin: 0 auto;
  max-width: 650px;
  max-height: 650px;
  position: relative;
  width: 100%;
}

form {
  padding: 45px;
}

h2 {
  color: #475569;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
}

.email {
	float: right;
	width: 45%;
}

input[type='text'], [type='email'], select, textarea {
	background: none;
  border: none;
	border-bottom: solid 2px #475569;
	color: #475569;
	font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

input[type='text']:focus, [type='email']:focus, textarea:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}

.message {
	float: none;
}

.name {
	float: left;
	width: 45%;
}

select {
  background: url('http://web.missouri.edu/~blly4b/ISLT7360/FinalProject/FINAL/icon-ios7-arrow-down-32.png') no-repeat right;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

.subject {
  width: 100%;
}

textarea {
	line-height: 150%;
	height: 150px;
	resize: none;
  width: 100%;
}

::-webkit-input-placeholder {
	color: #475569;
}

#form_button {
  background: none;
  border: solid 2px #475569;
  color:#475569;
  cursor: pointer;
  display: inline-block;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

.submit {
  text-align: center;
}

#form_button:hover {
  background: #475569;
  color: #ffffff;
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
        <h1 class="text-4xl font-serif">Stay Connected with us.</h1>
    </header>
    <div class="contact">
<div id="container">
  <h2>Contact Us</h2>
  <form action="#" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Name" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="e-mail" name="email" id="email_input" required>
    </div>
    <div class="subject">
      <label for="subject"></label>
      <select placeholder="subject line" name="subject" id="subject_input" required>
        <option disabled hidden selected>subject</option>
        <option>Just sayin' "hi"!</option>
        <option>Quick question.</option>
        <option>How about a commission?</option>
      </select>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="message" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="submit" id="form_button"/>
    </div>
  </form>
</div>
</div>
    <footer>
<p>&copy; 2023 Veget-store</p>
</footer>
</body>
</html>
