<?php
$template = "";
foreach ($hotels as $hotel) {
    $template .= "<tr><td>{$hotel['name']}</td><td>{$hotel['description']}</td><td>{$hotel['vote']}</td>
    <td>{$hotel['distance_to_center']}</td></tr>";
}
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">vote</th>
            <th scope="col">distance_to_center</th>
        </tr>
    </thead>
    <tbody>
        <?= $template ?>

    </tbody>
</table>