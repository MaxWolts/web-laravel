<div class="max-w-4xl mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Lista de Blogs</h1>

    @forelse ($blogs as $blog)
    <div class="mb-6 p-4 border rounded-lg shadow-sm bg-white">
        <h2 class="text-xl font-semibold text-gray-900">
            <a href="*">
                {{ $blog->title }}
            </a>
        </h2>

        <p class="text-gray-600 text-sm">
            Por <span class="font-medium">{{ $blog->user->name }}</span>
            @if($blog->category)
            | Categoría: <span class="italic">{{ $blog->category->name }}</span>
            @endif
            | {{ $blog->created_at->diffForHumans() }}
        </p>

        <p class="mt-2 text-gray-700">
            {{ Str::limit($blog->content, 150) }}
        </p>

        <a href="*"
            class="text-indigo-600 text-sm font-semibold hover:underline mt-2 inline-block">
            Leer más →
        </a>
    </div>
    @empty
    <p class="text-gray-500">No hay blogs publicados aún.</p>
    @endforelse
</div>