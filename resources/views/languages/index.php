<!DOCTYPE html>
<html>
<head>
    <title>My Dumpster of Thoughts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">🚀 My Dumpster of Thoughts</h1>

        @foreach ($languages as $language)
            <div class="bg-white shadow rounded-2xl p-4 mb-6">
                <h2 class="text-xl font-semibold text-blue-600">{{ $language->name }}</h2>
                <p class="text-gray-600 mb-4">{{ $language->description }}</p>

                @if($language->notes->count())
                    <ul class="space-y-2">
                        @foreach ($language->notes as $note)
                            <li class="border-l-4 border-blue-400 pl-3">
                                <h3 class="font-medium">{{ $note->title }}</h3>
                                <p class="text-gray-700">{{ $note->content }}</p>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 italic">No notes yet for this language.</p>
                @endif
            </div>
        @endforeach
    </div>

</body>
</html>
