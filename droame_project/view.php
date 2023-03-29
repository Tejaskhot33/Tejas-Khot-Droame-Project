<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Droame database</title>
    <style>
        
        h2{
            text-align:center ;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        margin: 20px 0;
        }

        
        td, th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        
        th {
        background-color: #f2f2f2;
        color: black;
        }

        
        table, td, th {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        }

        
        tbody tr:nth-child(even) {
        background-color: #f2f2f2;
        }

        
        tbody tr:hover {
        background-color: #3F8685;
        }

        
        #id {
        width: 50px;
    
        }

        
        #dsn {
        width: 100px;
        }

        
        #name, #email {
        text-align: center;
        }

        
        #booking_date, #booking_time {
        text-align: center;
        }


        thead {
        background-color: #4CAF50;
        color: white;
        }

    </style>
</head>
<body>
    
    <h2>View Details of Customer</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Booking Date</th>
                <th>Booking Time</th>
                <th>DSN</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "droame";
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                
                $sql = "SELECT * FROM bookings";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['booking_date'] . "</td>";
                    echo "<td>" . $row['booking_time'] . "</td>";
                    echo "<td>" . $row['dsn'] . "</td>";
                    echo "</tr>";
                }

                
                mysqli_close($conn);
            ?>
        </tbody>
    </table>
</body>
</html>
