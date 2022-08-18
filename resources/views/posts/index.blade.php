<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CRUD Test</title>
</head>
<body>
    <div class="container max-w-2xl mx-auto pt-5">
        <h1 class="text-5xl font-bold text-blue-900 mt-2">Crud Test in Laravel</h1>
        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 
            inline-block mb-6  shadow-lg rounded hover:shadow mt-4">Add Post</a>  
        @foreach ($posts as $post)       
            <article class="mb-4">
                <a href="/posts/{{ $post->id }}/edit" class="text-4xl font-bold text-blue-900">{{ $post->title }}</a>
                <p class="text-xl text-gray-600">{{ $post->content }}</p>
                
                <hr class="mt-2">
            </article>
        @endforeach
    </div>
</body>
</html>