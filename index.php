<!DOCTYPE HTML>
<html>
<head>
	<title> Video Game Database </title>
	<link href="css/styles.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'>
  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet"> 
</head>
<body>
  <header>
    <span> VIDEO GAME DATABASE </span>
  </header>
	<div class="search">
		<i> </i>
		<div class="searching">
	   	<form action="search.php" method="GET">
		<input type="text" value="Search for your favorite game" name="query" onfocus="this.value = '';">
		<input id="buttonsearch" type="submit"  value="Search"/>
	  </form>
	</div>
	  <p>Popular searches: <a href="https://www.google.com/?gws_rd=ssl#q=Legend+Of+Zelda">Legend of Zelda</a> <a href="https://www.google.com/?gws_rd=ssl#q=Final+Fantasy+XV">Final Fantasy XV</a></p>
  </div>
  <div class="news">
    <h2> Latest News From <img id="ign-logo" src="img/ign-logo.png"/> </h2>
      <ul>
        <ul id="news-list">
        </ul>
      </ul>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script
			src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous"></script>
  <script src="js/searching.js"></script>
  </body>
</html>