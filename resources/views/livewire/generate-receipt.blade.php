<div class="shadow-md rounded-lg p-6 max-w-2xl mx-auto mt-8">
    @if($receipt)
        <h2 class="text-2xl font-bold text-primary mb-4">Receipt #{{ $receipt->receipt_number }}</h2>
        <p class="text-gray-600 mb-4">Issue Date: {{ \Carbon\Carbon::parse($receipt->issue_date)->format('F j, Y') }}</p>
        <h3 class="text-xl font-semibold text-secondary mb-2">Donation Details:</h3>
        @php $details = json_decode($receipt->details, true) @endphp
        <ul class="list-none space-y-2 mb-6">
            @foreach($details as $key => $value)
                <li class="flex justify-between">
                    <span class="text-black">{{ ucfirst(str_replace('_', ' ', $key)) }}:</span>
                    <span class="text-gray-600">{{ $value }}</span>
                </li>
            @endforeach
        </ul>
        <button 
            wire:click="downloadPdf" 
            class="btn bg-primary hover:bg-secondary text-white transition duration-300 ease-in-out transform hover:scale-105"
        >
            Download PDF
        </button>
    @else
        <p class="text-gray-600 text-center">No receipt available.</p>
    @endif
</div>