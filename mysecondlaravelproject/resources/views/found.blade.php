<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student {{ $studentData['studid'] }}</title>
    <style>
        table {
            border: 5px solid black;
        }

        th,
        td {
            padding: 15px;
            margin: 10px;
        }

        th {
            border: 5px solid black;
        }

        img {
            height: 30px;
            width: 30px;
        }

        body {
            font-family: verdana;
            font-size: 1.5em;
        }


        #nav-links {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"
    style="background-image: url(https://images5.alphacoders.com/112/1123013.jpg)">

        <center>
            <div class="m-5 card">
                <div class="p-5 card-header bg-primary text-white">
                    <h1>Student Information</h1>
                </div>
                <div class="p-5 card-body">
                    <table>
                        <tr>
                            <th>Student ID</th>
                            <td>{{ $studentData['studid'] }}</td>
                        </tr>
                        <tr>
                            <th>Student Name</th>
                            <td>{{ $studentData['studlname'] }}, {{ $studentData['studfname'] }}</td>
                        </tr>
                        <tr>
                            <th>Student Program</th>
                            <td>{{ $studentData['studprogram'] }}</td>
                        </tr>
                        <tr>
                            <th>Student Year</th>
                            <td>{{ $studentData['studyear'] }}</td>
                        </tr>
                        
                    </table><br><a class="btn btn-success" href="{{ route('students.all') }}">Return to List</a>
                </div>
            </div>
        </center>
    </div>
</body>

</html>
