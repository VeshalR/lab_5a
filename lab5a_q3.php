<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Multiplication Table</title>
    </head>
    
    <body>
        <?php
        function multiplication($multiplier) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    'number' => $i,
                    'multiplier' => $multiplier,
                    'answer' => $i * $multiplier
                ];
            }
            return $results;
        }

// Call the function with a specific multiplier (E.g : 5)

$multiplier = 2;
$results = multiplication($multiplier);

?>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $result): ?>
        <tr>
            <td><?php echo $result['number']; ?></td>
            <td><?php echo $result['multiplier']; ?></td>
            <td><?php echo $result['answer']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
