<x-forum.layouts.app>
    <div class="max-w-4xl mx-auto py-8">
        {{-- Encabezado del blog --}}
        <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>

        <p class="text-gray-600 text-sm mb-6">
            Por <span class="font-medium">{{ $blog->user->name }}</span>
            @if($blog->category)
            | Categoría: <span class="italic">{{ $blog->category->name }}</span>
            @endif
            | {{ $blog->created_at->diffForHumans() }}
        </p>

        {{-- Contenido completo --}}
        <div class="prose max-w-none mb-8">
            {!! nl2br(e($blog->content)) !!}
        </div>

        {{-- Sección de comentarios --}}
        <div class="mt-10">
            <h2 class="text-2xl font-semibold mb-4">Comentarios</h2>

            {{-- Formulario para agregar comentario --}}


            {{-- Listado de comentarios --}}
            @forelse ($blog->comments as $comment)
            <div class="mb-6 p-4 border rounded-lg bg-gray-50">
                <p class="font-semibold text-gray-800">{{ $comment->user->name }}</p>
                <p class="text-gray-700">{{ $comment->content }}</p>
                <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
            @empty
            <p class="text-gray-500">No hay comentarios aún. ¡Sé el primero en comentar!</p>
            @endforelse
        </div>
    </div>
</x-forum.layouts.app>