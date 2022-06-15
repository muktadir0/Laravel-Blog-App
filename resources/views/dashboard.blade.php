<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <a class="mr-2 btn" type="button" href="{{route('Blog.create')}}" target="">
                        {{ __('Create Post') }}
                    </a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 style="text-align: center">Your Posts</h1>
                </div>


{{--                @foreach ($posts as $post)--}}
{{--                    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">--}}
{{--                        <div>--}}
{{--                            <h2 class="text-gray-700 font-bold text-5xl pb-4">--}}
{{--                                {{ $post->title }}--}}
{{--                            </h2>--}}

{{--                            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">--}}
{{--                                {{ $post->description }}--}}
{{--                            </p>--}}


{{--                            <a href="/dashboard/{{ $post->slug }}/edit"--}}
{{--                               class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">--}}
{{--                                Edit--}}
{{--                            </a>--}}
{{--                            </span>--}}

{{--                            <span class="float-right">--}}
{{--                     <form--}}
{{--                         action="/dashboard/{{ $post->slug }}"--}}
{{--                         method="POST">--}}
{{--                        @csrf--}}
{{--                         @method('delete')--}}

{{--                        <button--}}
{{--                            class="text-red-500 pr-3"--}}
{{--                            type="submit">--}}
{{--                            Delete--}}
{{--                        </button>--}}

{{--                    </form>--}}
{{--                 </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </div>
</x-app-layout>
