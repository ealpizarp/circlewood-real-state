@extends('guest_layout')

@section('content')
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class='p-14'>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-80 mr-6 mb-6 rounded-md"
                    src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('./images/no-image.png') }}"
                    alt="" />

                <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
                <div class="text-xl font-bold">{{ $listing->seller }}</div>
                <div class="text-xl font-bold mb-4">${{ $listing->price }}</div>
                <x-listing-tags :tagsCsv='$listing->tags' />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Property description
                    </h3>
                    <div class="text-lg space-y-6"> {{ $listing->description }}

                        <a href={{ $listing->email }}
                            class="block bg-cyan-700 text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Seller</a>

                        {{-- <a
                        href="https://test.com"
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                        Website</a
                    > --}}
                    </div>
                </div>
            </div>
        </x-card>

        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{ $listing->id }}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/listings/{{ $listing->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                    Delete</button>
            </form>

        </x-card>
        @auth
            <x-card>

                <div class="container">
                    <div class="row justify-content-center mt-10">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="font-medium leading-tight text-2xl mt-0 mb-2 text-gray-600">Comments</h4>
                                    @foreach ($listing->comments as $comment)
                                        <div class="display-comment">
                                            <strong class='mt-2 mb-1 text-teal-600'>{{ $comment->user->name }}</strong>
                                            <p class='mb-2 text-gray-700'>{{ $comment->body }}</p>
                                        </div>
                                    @endforeach

                                    {{-- <h4 class="font-medium leading-tight text-2xl mt-0 mb-2 text-gray-600">Add comment</h4> --}}
                                    <form method="post" action="{{ route('comment.add') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="comment_body" class="form-control" />
                                            <input type="hidden" name="listing_id" value="{{ $listing->id }}" />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit"
                                                class="bg-cyan-700 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded"
                                                value="Add Comment" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </x-card>

        </div>
    @endauth
@endsection
