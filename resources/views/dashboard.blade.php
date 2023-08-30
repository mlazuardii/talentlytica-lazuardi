<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form method="POST" action="{{ route('deposit') }}">
                        @csrf
                        <h5 class="text-center mb-3">Make A Deposit</h5>
                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>
                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control @error('amount') is-invalid
                                @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Deposit') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
