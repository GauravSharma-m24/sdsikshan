<!DOCTYPE html>
<html>
<head>
    <title>School Fee Structure</title>
    <style>
        @font-face {
            font-family: 'DejaVu Sans';
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/DejaVuSans.ttf') }}") format('truetype');
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            color: #333;
            margin: 30px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 80px;
        }

        .header h2 {
            margin: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #aaa;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .note {
            margin-top: 20px;
            font-size: 13px;
            color: #444;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="{{ public_path('img/logo.png') }}" alt="Logo">
        <h2>SD Sikshan School</h2>
        <p><strong>Academic Year:</strong> 2025-26</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Class</th>
                <th>Tuition Fee (₹)</th>
                <th>Hostel Fee (₹)</th>
                <th>Mess Fee (₹)</th>
                <th>Total Annual Fee (₹)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row['class'] }}</td>
                <td>₹{{ number_format($row['tuition']) }}</td>
                <td>₹{{ number_format($row['hostel']) }}</td>
                <td>₹{{ number_format($row['mess']) }}</td>
                <td>
                    ₹{{ number_format($row['tuition'] + $row['hostel'] + $row['mess']) }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="note">
        <strong>Note:</strong>
        <ul>
            <li>All fees are annual and to be paid in 3 installments.</li>
            <li>Books and uniform charges are not included in the above fees.</li>
            <li>Late payment may attract a fine of ₹100/week.</li>
            <li>Fees once paid are non-refundable.</li>
        </ul>
    </div>

    <div class="footer">
        Printed on: {{ now()->format('d M Y') }}
    </div>

</body>
</html>
