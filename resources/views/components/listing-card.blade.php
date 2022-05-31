@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 rounded-lg md:block"
            src={{ $listing->image ? asset('storage/' . $listing->image) : asset('./images/no-image.png') }}
            alt="" />
        <div>
            <h3 class="text-2xl text-gray-600 font-bold">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl text-zinc-500 mt-4">Seller: {{ $listing->seller }}</div>
            <div class="text-xl text-zinc-500 mb-4">Price: ${{ $listing->price }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4 text-amber-800">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
