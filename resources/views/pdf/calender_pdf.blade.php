<!DOCTYPE html>
<html>
<head>
    <title>Academic Calendar PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 80px;
        }
        .header h2 {
            margin: 10px 0 5px;
            color: #2563eb;
        }
        .header p {
            margin: 0;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background-color: #2563eb;
            color: white;
            padding: 8px;
        }
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            color: white;
            font-size: 11px;
        }
        .holiday { background-color: #ef4444; }
        .festival { background-color: #f59e0b; }
        .exam { background-color: #3b82f6; }
        .celebration { background-color: #a3e635; color: #222; }
        .sports { background-color: #ec4899; }
        .competition { background-color: #6366f1; }
        .event { background-color: #facc15; color: #222; }
        .note {
            margin-top: 30px;
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('img/logo.png') }}" alt="School Logo">
        <h2>SDS Sikshan School</h2>
        <p>Excellence in Education Since 2005</p>
        <hr>
    </div>

    <h3 class="text-center">Academic Calendar 2024–2025</h3>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Day</th>
                <th>Event</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->event_date)->format('l') }}</td>
                    <td>{{ $event->title }}</td>
                    <td>
                        <span class="badge {{ strtolower($event->type) }}">
                            {{ ucfirst($event->type) }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p class="note">
        Note: All dates are tentative and subject to change based on official guidelines and administrative discretion. Please consult the school notice board or website for regular updates.
    </p>
</body>
</html>
