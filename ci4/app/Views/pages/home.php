<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://64.media.tumblr.com/7f34032a4bff4f339d57dc511988efb5/f884c7ec3a21d55c-0c/s540x810/dc5c172d20b43a9e62b6b7759dffc49289ebb4b1.jpg">
<title>My Practice Website(HTML)</title>
</head>
<style>
.topnav {
  margin: -10px;
  background-color: rgb(250,246,231);
  border: .5px solid black;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color:  rgb(221,197,105);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #ae8b0c;
  color: white;
}
.topnav a.icon {
  padding: 0px;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
body {
  background-color: rgba(225,197,100, 0.8);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
      
.divbody {
  width: auto;
  padding: 10px;
  border: 5px solid  rgb(250,246,231);
  background-color:  rgb(250,246,231);
  margin-top: 50px;
  margin-left: 100px;
  margin-right: 100px;
}
.topnav {
  margin: -10px;
  background-color: rgb(250,246,231);
  border: .5px solid black;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color:  rgb(221,197,105);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #ae8b0c;
  color: white;
}
.topnav a.icon {
  padding: 0px;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.image-list-small {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0 auto;
  text-align: center;
  max-width: auto;
  padding: 0;
}

.image-list-small li {
  display: inline-block;
  width: 300px;
  margin: 0 50px 50px;
}


/* Photo */

.image-list-small li > a {
  display: block;
  text-decoration: none;
  background-size: cover;
  background-repeat: no-repeat;
  height: 200px;
  margin: 0;
  padding: 0;
  border: 4px solid #ffffff;
  outline: 1px solid #d0d0d0;
  box-shadow: 0 2px 1px #DDD;
}

.image-list-small .details {
  margin-top: 13px;
}


/* Title */

.image-list-small .details h3 {
  display: block;
  font-size: 12px;
  margin: 0 0 3px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.image-list-small .details h3 a {
  color: #303030;
  text-decoration: none;
}

.image-list-small .details .date {
  display: block;
  color: #717171;
  font-size: 11px;
  font-weight: normal;
  margin: 0;
}
</style>
<body>
<div class="topnav">
  <a class ="icon" href="index.php"><img src="https://64.media.tumblr.com/e0b978612c68d83635151d03fa995a0c/e1089a909f72b296-c7/s540x810/640bd85b2a8cc63ab5d08ee11459fec87c3a681a.jpg" style="width:48px;height:48px; margin:0px; margin-bottom:-5px;"></a>
  <a class="active" href="index.php">Home</a>
  <a href="forms.php">Forms</a>
  <a href="guestlist.php">Chatter List</a>
  <a href="#about">About</a>
</div>
<div class = "divbody">
<h1 style="text-align:center;"> HELLO!! I AM YURI! WELCOME TO MY PERSONAL BLOG </h1>
<p style="text-align:center;">I'm 19, I study comsci in APC since grade 11 with a 50% scholarship fee, I chose this course mainly because of the high demanding job which hopefully will lead me to my goal of having fanancial stability</p>
<p style="text-align:center;"> If it wasn't clear enough my hobbies are playing games and watching films of any kind, but mainly anime </p>
<!-- Please Watch Bocchi the Rock -->
<h1 style="text-align:center;"> My Favorite Animes!</h1> 
<ul class="image-list-small">
    <li>
      <a href="#" style="background-image: url('https://pbs.twimg.com/media/FfYmRVbUcAAzwKE?format=jpg&name=large');"></a>
      <div class="details">
        <h3><a href="#">Bocchi the Rock!</a></h3>
        <p class="date">Fall 2022</p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('https://cdn.vox-cdn.com/thumbor/ccsnR0gnt4qdXvdD3IL1xlhuKsw=/0x0:1920x1080/1200x0/filters:focal(0x0:1920x1080):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/24319935/22719387.jpg');"></a>
      <div class="details">
        <h3><a href="#">Chainsaw Man</a></h3>
        <p class="date">Fall 2022</p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('https://i0.wp.com/anitrendz.net/news/wp-content/uploads/2021/10/Mob-Psycho-100-Season-3-1-scaled-e1634624616827.jpg?fit=1811%2C1017&amp;ssl=1');"></a>
      <div class="details">
        <h3><a href="#">Mob Psycho 100</a></h3>
        <p class="date">Fall 2022</p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('https://resizing.flixster.com/oiRj9p9jfMCGBa3WA0zJ8TJ8Bwk=/ems.cHJkLWVtcy1hc3NldHMvdHZzZXJpZXMvMzBiMzU5YzktOGJjOC00ODVhLTk0Y2MtYmUwZjA1Yjk5YTgwLnBuZw==');"></a>
      <div class="details">
        <h3><a href="#">Spy x Family</a></h3>
        <p class="date">Fall 2022</p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('https://pbs.twimg.com/media/Fl8DSdLacAUkMJw?format=jpg&name=large');"></a>
      <div class="details">
        <h3><a href="#">Gundam: Witch from Mercury</a></h3>
        <p class="date">Fall 2022</p>
      </div>
    </li>
    <li>
      <a href="#" style="background-image: url('https://m.media-amazon.com/images/M/MV5BMTRjYjA3NGMtOTY5Mi00ZTRiLWI5YWEtODAxZDU3ZTFmMmIzXkEyXkFqcGdeQXVyMDc5ODIzMw@@._V1_.jpg');"></a>
      <div class="details">
        <h3><a href="#">Akiba Maid War</a></h3>
        <p class="date">Fall 2022</p>
      </div>
    </li>
  </ul>
<a style="display: block; margin-left: auto; margin-right: auto;" href="https://anime.vc/watch/bocchi-the-rock-17479?ep=95894"><p style="text-align:center;">Watch Bocchi</p></a>
<img style="display: block; margin-left: auto; margin-right: auto;" src="https://media.tenor.com/vuF1B4DJMEIAAAAM/bocchi-the-rock-nijika.gif" alt="Crying Nijika">
<p style="text-align:center;">Style Lesson</p>
<h2 style="text-align:center;"><b>TRUST ME!</b></h2>
<a href="https://matias.ma/nsfw/"><p style="text-align:center;">https://matias.ma/nsfw/</p></a>
<p style="text-align:center;">THIS IS A OBLIGATORY NIJIKA</p>
<img style="display: block; margin-left: auto; margin-right: auto;" src="https://cdn.myanimelist.net/images/characters/16/491305.jpg" alt="Obligatory Nijika">
<p style="text-align:center;"><q><i>I m-miss my sister</i></q> - Nijika 2022 </p>

    <?php
$job = "developer";
echo "My dream job is to become a " . $job . ". <br>";
print "Nice to meet you! <br>";
$x = 2003;
$y = 2023;
$age = $y - $x;
echo "Again I am ". $age ." this year! ";
// 6. Conditionals
if ($age >= 18) {
  echo "I may be eternally 15 but yes I am an adult. <br>";
} else {
  echo "bro no way. <br>";
}
echo "Don't mind this random number, it's for loop";
for ($i = 0; $i < 5; $i++) {
  echo $i . " ";
}
echo "this too";
function square($num) {
  return $num * $num;
}
echo "The square of 5 is " . square(5) . ". <br>";
echo "and this...";
$colors = array("red", "not green", "blue");
echo "My favorite color is " . $colors[1] . ". <br>";
echo "especially this...";
$person = array(
  "name" => "Bocchi",
  "job" => "Rock"
);
echo $person["name"] . " is the " . $person["job"] . ". <br>";
echo "lastly this";
echo "The current PHP file is " . $_SERVER["PHP_SELF"] . ". <br>";
echo "The user's IP address is " . $_SERVER["REMOTE_ADDR"] . ". <br>";
echo "OKAY I PROMISE THIS WILL BE THE LAST RANDOM INFORMATION IN THIS WEBSITE I JUST NEED IT FOR REQUIREMENTS OKAY!";
$phone_number = "0929-817-5456";
if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone_number)) {
  echo "Valid phone number. <br>";
} else {
  echo "Invalid phone number. <br>";
}
?>

</div>
</body>
</html>
