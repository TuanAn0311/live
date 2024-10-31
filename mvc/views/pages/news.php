<h2>
    <?php
    echo $data['soThich'][0];
    echo $data['Number'];
    ?>
</h2>

<?php
while ($row = mysqli_fetch_array($data["SV"])) {
    echo $row["hoten"]. "<br>";
}
?>