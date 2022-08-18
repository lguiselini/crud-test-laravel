<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit</title>
</head>
<body>
    <div class="container max-w-2xl mx-auto pt-5">
        <a href="/posts" class="bg-green-500 tracking-wide text-white px-6 py-2 
            inline-block mb-6  shadow-lg rounded hover:shadow mt-4">Return</a> 
        <h1 class="text-2xl font-bold text-gray-800">Edit the fields below</h1> 
        <form method="POST" action="/posts/{{ $post->id }}">
            @method('PUT')
            @csrf
            <div class="mb-4 mt-4">
                <label class="font-bold text-gray-800" for="title">
                    Title:
                </label >
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 
                mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">
                    Content:
                </label>
                <textarea class="h-20 bg-white border border-gray-300 rounded py-4 px-3 
                mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                id="content" name="content">
                {{ $post->content }}
                </textarea>                
            </div>    
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 
            inline-block mb-6  shadow-lg rounded hover:shadow">Update</button>                        
            
        </form>  
        <div class="container max-w-2xl mx-auto pt-5">
        <form method="POST" action="/posts/{{ $post->id }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 tracking-wide text-white px-6 py-2 
        inline-block mb-6  shadow-lg rounded hover:shadow">Delete</button>                        
        </form>   
        </div>               
    </div>
</body>
</html>