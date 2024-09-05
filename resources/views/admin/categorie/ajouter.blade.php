<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('ajouter.categorie')}}" method="POST" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                @csrf
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-whith" type="text" name="nomCategorie" id="nomCategorie" placeholder="Pomme">
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button class="uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">Ajouter un categorie</button>
                    </div>
                </form>
</body>
</html>