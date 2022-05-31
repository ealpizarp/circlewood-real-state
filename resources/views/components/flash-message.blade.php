@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="fixed top-0 left-1/2 transform -translate-x-1/2 
         bg-cyan-800 text-white rounded p-4">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
