<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
    </head>
    <body>
        <?php
        $name = "VESHAL A/L RAMESH";
        $matric_number = "AI220066";
        $course = "Computer Science";
        $year_of_study = "Year 3";
        $address = "NO 23, LORONG SEROJA, TAMAN SAKEH JAYA, JALAN SAKEH 84000 MUAR, JOHOR";
        ?>
        
        <table border="1">
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo $matric_number; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo $year_of_study; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </table>
    </body>
</html>
