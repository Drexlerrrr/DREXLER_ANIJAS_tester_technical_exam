<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sociablekit";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM youtube_videos";
$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>
<head>
    <title>PART 2: YOUTUBE VIDEOS</title>
</head>
<body>

    <table align="center" border="1">
        <tr>
            <TH colspan="11">YOUTUBE VIDEOS</TH>
        </tr>

        <tr>
            <th>VIDEO</th>
            <th>CHANNEL</th>
            <th>PLAYLIST</th>
            <th>POSITION</th>
            <th>DURATION</th>
            <th>PUBLISHED AT</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>THUMBNAIL</th>
            <th>CREATED DATE</th>
            <th>MODIFIED DATE</th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()) 
            { 
        ?>
            <tr>
        
                <td><?php echo $row['video_id']; ?> </td>
                <td><?php echo  $row['channel_id']; ?> </td>
                <td><?php echo $row['playlist_id']; ?> </td>
                <td><?php echo $row['position']; ?> </td>
                <td><?php echo $row['duration']; ?> </td>
                <td><?php echo $row['published_at']; ?> </td>
                <td><?php echo $row['title']; ?> </td> 
                <td><?php echo $row['description']; ?> </td>
                <td><?php echo $row['thumbnail']; ?> </td>
                <td><?php echo $row['created']; ?> </td>
                <td><?php echo $row['modified']; ?> </td>

            </tr>
        <?php

            }
        ?>
    </table>


</body>
</html>