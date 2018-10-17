<html>
    <head>
        <title>PDF Reports</title>
        <style>
            table{
                width: 70%;
                margin: 0 auto;
                border: 1px solid #000000;
            }
            table th, table td{
                border: 1px solid #000000;
                text-align: center;
            }
            .re-header{
                text-align: center
            }

            .re-header div{
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="re-header">
            <p style="word-wrap:break-word; float: left; width: 30%; ">Early Warning System For Floods</p>
            <img src="file:///C:/wamp64/www/ewsf/public/images/EWSF logo.png" width="150">
            <div style="float: right; width: 30%">
                <span><?php echo date("Y-m-d") ?></span> | <span><?php date_default_timezone_set('Asia/Kuwait'); echo date('h:i') ?></span>
                <h4 style="font-style: italic">Report by:</h4>
                <h4 style="font-style: normal">{{ auth()->user()->name }}</h4>
            </div>

            <div style="clear: both"></div>
        </div>

        <hr/>
        <div>
            <table>
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Day</td>
                    <td>Outlook</td>
                    <td>Temp</td>
                    <td>Pressure</td>
                    <td>Humidity</td>
                    <td>Temp Min</td>
                    <td>Temp Max</td>
                    <td>Sea Level</td>
                    <td>Ground Level</td>
                    <td>Wind Speed</td>
                    <td>Wind Degree</td>
                    <td>Date</td>
                </tr>
                </thead>
                <tbody>
                @foreach($allWeatherData as $w)
                    <tr>
                        <td>{{ $w->id }}</td>
                        <td>{{ $w->day }}</td>
                        <td>{{ $w->outlook }}</td>
                        <td>{{ $w->temp }}</td>
                        <td>{{ $w->pressure }}</td>
                        <td>{{ $w->humidity }}</td>
                        <td>{{ $w->temp_min }}</td>
                        <td>{{ $w->temp_max }}</td>
                        <td>{{ $w->sea_level }}</td>
                        <td>{{ $w->grnd_level }}</td>
                        <td>{{ $w->wind_speed }}</td>
                        <td>{{ $w->wind_degree }}</td>
                        <td>{{ $w->created_at }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </body>
</html>