<x-masterLayout :user=$user>
    <x-slot:mainContent>
        @foreach ($user->bank_accounts as $bank_account)
            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">{{ $bank_account->bank->name }}</h5>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-2"><strong>Account Number:</strong>
                            {{ $bank_account->accountNumber }}</p>
                        <p class="mb-2"><strong>Total Amount:</strong>
                            {{ $bank_account->totalAmount }}</p>
                        <p class="mb-0"><strong>Ifsc Code:</strong>
                            {{ $bank_account->bank_detail->ifscCode }}</p>
                    </blockquote>
                </div>
            </div>
        @endforeach
    </x-slot:mainContent>
</x-masterLayout>
