@extends('layouts.main_layout')

@section('title', 'Academic Calendar')

@push('styles')
<style>
    .planner-container {
        background: #f8fafc;
        border-radius: 1rem;
        box-shadow: 0 2px 16px rgba(0,0,0,0.07);
        padding: 2rem 2.5rem;
        overflow-x: auto;
    }
    .planner-table th, .planner-table td {
        vertical-align: middle;
        text-align: center;
    }
    .planner-table th {
        background-color: #2563eb;
        color: white;
        border: none;
    }
    .planner-table tr:hover {
        background: #e0e7ff;
    }
    .badge {
        font-size: 0.85rem;
        padding: 0.35rem 0.7rem;
        border-radius: 0.5rem;
        display: inline-block;
    }
    .badge-holiday { background: #ef4444; color: #fff; }
    .badge-festival { background: #f59e0b; color: #fff; }
    .badge-exam { background: #3b82f6; color: #fff; }
    .badge-celebration { background: #a3e635; color: #222; }
    .badge-sports { background: #ec4899; color: #fff; }
    .badge-competition { background: #6366f1; color: #fff; }
    .badge-event { background: #facc15; color: #222; }
    .legend-box span {
        display: inline-block;
        margin: 0.4rem 0.7rem;
    }
    @media print {
        .download-button,
        .legend-box {
            display: none !important;
        }
    }
</style>
@endpush

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center text-primary">📅 Academic Calendar 2024–2025</h2>

    <!-- Legend -->
    <div class="legend-box mb-4 text-center">
        <strong class="me-2">Legend:</strong>
        <span class="badge badge-holiday">Holiday</span>
        <span class="badge badge-festival">Festival</span>
        <span class="badge badge-exam">Exam</span>
        <span class="badge badge-celebration">Celebration</span>
        <span class="badge badge-sports">Sports</span>
        <span class="badge badge-competition">Competition</span>
        <span class="badge badge-event">Event</span>
    </div>

    <!-- Calendar Table -->
    <div class="planner-container" id="calendar">
        <table class="table planner-table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Day</th>
                    <th>Event</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($event->event_date)->format('l') }}</td>
                        <td>{{ $event->title }}</td>
                        <td>
                            <span class="badge badge-{{ strtolower($event->type) }}">
                                {{ ucfirst($event->type) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Download Button -->
    <div class="text-end mb-3">
        <a href="{{ route('calendar_pdf') }}" class="btn btn-outline-primary">
            📥 Download Calendar PDF
        </a>
    </div>

    <p class="mt-4 fst-italic text-muted text-center">
        <strong>Note:</strong> All dates are tentative and subject to change. Please check the official notice board or school announcements for final updates.
    </p>
</div>
@endsection
