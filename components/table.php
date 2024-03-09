<?php
    require __DIR__ . '/../api/get_standings.php';
?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Position</th>
            <th scope="col">Club</th>
            <th scope="col">Play</th>
            <th scope="col">Win</th>
            <th scope="col">Draw</th>
            <th scope="col">Lose</th>
            <th scope="col">Point</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($response as $country): ?>
            <tr>
                <td><?php echo $country['overall_league_position']; ?></td>
                <td>
                    <img src="<?php echo $country['team_badge']; ?>" alt="Logo team">
                    <?php echo $country['team_name']; ?>
                </td>
                <td><?php echo $country['overall_league_payed']; ?></td>
                <td><?php echo $country['overall_league_W']; ?></td>
                <td><?php echo $country['overall_league_D']; ?></td>
                <td><?php echo $country['overall_league_L']; ?></td>
                <td><?php echo $country['overall_league_PTS']; ?></td>
            </tr>
        <?php endforeach; ?>            
    </tbody>
    </table>