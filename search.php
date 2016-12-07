<?php
    mysql_connect("localhost", "root", "") or die("Unable to connect to database: ".mysql_error());

    mysql_select_db("video_games") or die("Unable to connect find database: ".mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
    <title> Search results</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div id="search-body">
        <div id="search-contents">
        <h3 id="search-title">
            Search Results:
        </h3>
        <ul>
            
    <?php 
        $search = $_GET['query'];
        $search = htmlspecialchars($search);
        $search = mysql_real_escape_string($search);

        $return_value = mysql_query("SELECT * FROM games
                                     WHERE `name` LIKE '%".$search."%'");
        
        if(mysql_num_rows($return_value) > 0){
                $size = mysql_num_rows($return_value);
                echo "<span id='results'>".$size." result(s) found</span>";
            while($return = mysql_fetch_array($return_value)){
                echo "<li class='result-item'><div>
                        <span class='game-name'>".$return['name']."</span>
                     </div>
                     <br>";
                echo '<img class="returnImage" src="img/'.$return['picture'].'">';
                echo "<div><br>
                
                      <span class='year'> Year created: ".$return['year']."</span><br>";
                echo "<span class='system'> System: ".$return['system']. "</span><br>";
                echo "<br><br><hr>";
            }
        }
        else{ 
            echo "No results found";
        }
        $return_value
        ?>

        </ul>
        <a href="index.php"> Return to search </a>
        <br>
        <br>
        </div>
    </div>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                 integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
                 crossorigin="anonymous"></script>
         <script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
</body>
</html>