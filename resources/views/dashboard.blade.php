<x-app-layout>
    <style>
        .dashboard-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            height: 200px; /* Set a fixed height to make cards square */
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            border: 1px solid #ddd; /* Add a border for clarity */
            background-color: #fff; /* Set a white background */
        }

        .dashboard-card:hover {
            transform: scale(1.05);
        }

        .total-posts {
            background: linear-gradient(45deg, #FF6B6B, #FFD166);
            color: #fff;
        }

        .unpublished-posts {
            background: linear-gradient(45deg, #FFD166, #06D6A0);
            color: #fff;
        }

        .published-posts {
            background: linear-gradient(45deg, #118AB2, #EF476F);
            color: #fff;
        }

        .posts-card {
            background: linear-gradient(45deg, #06D6A0, #118AB2);
            color: #fff;
        }

        .font-bold {
            font-weight: bold; /* Make the text bold */
        }

        .text-lg {
            font-size: 1.5rem; /* Make the text larger */
        }

        .text-xl {
            font-size: 2rem; /* Make the heading text even larger */
        }
    </style>

    <section class="section dashboard">
        <x-slot name="header">
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Total Posts Card -->
            <div class="total-posts dashboard-card p-6">
                <div>
                    <div class="text-lg font-semibold font-bold">Total Posts</div>
                    <div class="text-xl font-bold">{{ $totalPosts }}</div>
                </div>
            </div>

            <div class="unpublished-posts dashboard-card p-6">
                <div>
                    <div class="text-lg font-semibold font-bold">Unpublished Posts</div>
                    <div class="text-xl font-bold">{{ $unpublishedPosts }}</div>
                </div>
            </div>
            <div class="published-posts dashboard-card p-6">
                <div>
                    <div class="text-lg font-semibold font-bold">Published Posts</div>
                    <div class="text-xl font-bold">{{ $publishedPosts }}</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section dashboard">
        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    @isset($posts)
                        @foreach($posts as $post)
                            <div class="posts-card dashboard-card p-6">
                                <div>
                                    <h3 class="text-xl font-semibold font-bold">{{ $post->subject }}</h3>
                                    <p class="text-lg font-bold">{{ $post->post }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
