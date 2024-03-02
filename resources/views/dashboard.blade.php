<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Car Sales</title>
</head>
<body>
    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
    </style>
    <h1>Car Sales Dashboards</h1>
    <table border="1">
        <tr>
            <th>Year</th>
            <th>Make</th>
            <th>Model</th>
            <th>Trim</th>
            <th>Body</th>
            <th>Transmission</th>
            <th>State</th>
            <th>Condition</th>
            <th>Odometer</th>
            <th>Color</th>
            <th>Interior</th>
            <th>MMR</th>
            <th>Selling Price</th>
            <th>Date</th>
            <th>Times</th>
        </tr>
        @foreach($car as $c)
        <tr>
            <td>{{ $c-> year}}</td>
            <td>{{ $c-> make}}</td>
            <td>{{ $c-> model}}</td>
            <td>{{ $c-> trim}}</td>
            <td>{{ $c-> body}}</td>
            <td>{{ $c-> transmission}}</td>
            <td>{{ $c-> state}}</td>
            <td>{{ $c-> condition}}</td>
            <td>{{ $c-> odometer}}</td>
            <td>{{ $c-> color}}</td>
            <td>{{ $c-> interior}}</td>
            <td>{{ $c-> mmr}}</td>
            <td>{{ $c-> sellingprice}}</td>
            <td>{{ $c-> dates}}/{{ $c-> months}}/{{ $c-> years}}</td>
            <td>{{ $c-> times}}</td>
        </tr>
        @endforeach
    </table>

    <span>{{ $car->onEachSide(1)->links() }}</span>
</body>
</html>