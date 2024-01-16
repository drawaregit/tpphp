<?php
require_once('conf/connexion.php');

$sql = "SELECT nom FROM auteur";
$result = $conn->query($sql);
$nomArray = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nomArray[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Box Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="scrolling-box">
        <table id="auteur-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nomArray as $nom) { ?>
                    <tr>
                        <td><?php echo $nom['id']; ?></td>
                        <td><?php echo $nom['nom']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>