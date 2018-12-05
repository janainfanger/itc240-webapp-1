<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php get_header()?>
<?php
$sql = "select * from SchittsCreek";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'CharacterName: <b>' . $row['CharacterName'] . '</b> ';
        echo 'Playedby: <b>' . $row['Playedby'] . '</b> ';
        echo 'Seasons: <b>' . $row['Seasons'] . '</b> ';
        echo 'Description: <b>' . $row['Description'] . '</b> ';
        
        
        echo '<a href="character_view.php?id=' . $row['CharacterID'] . '">' . $row['CharacterName'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no characters</p>';
}

//release web server resources


@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>