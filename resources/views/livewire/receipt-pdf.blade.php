<!-- resources/views/livewire/receipt-pdf.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Receipt #{{ $receipt->receipt_number }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Receipt #{{ $receipt->receipt_number }}</h1>
    <p>Issue Date: {{ $receipt->issue_date }}</p>
    <h2>Donation Details:</h2>
    @php $details = json_decode($receipt->details, true) @endphp
    <ul>
        @foreach($details as $key => $value)
            <li>{{ ucfirst(str_replace('_', ' ', $key)) }}: {{ $value }}</li>
        @endforeach
    </ul>
</body>
</html>