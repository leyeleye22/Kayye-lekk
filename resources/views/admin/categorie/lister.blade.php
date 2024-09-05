<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lister les catégories</title>
</head>
<body>
    <!-- component -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

    <!-- ====== Pricing Section Start -->
    <section class="bg-white pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
        @if(session('success'))
            <div class="bg-green-500 text-white font-bold rounded-lg px-4 py-2 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="container mx-auto">
            <!-- Bouton Ajouter en haut -->
            <div class="flex justify-end mb-6">
                <a href="{{ route('ajouter.categorie') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                    Ajouter une catégorie
                </a>
            </div>

            <div class="flex flex-wrap justify-center -mx-4">
                @foreach ($categories as $categorie)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-10">
                            <span class="text-primary font-semibold text-lg block mb-4">
                                {{ $categorie->nomCategorie }}
                            </span>

                            <!-- Boutons Modifier et Supprimer -->
                            <div class="flex justify-between">
                                <a href="{{ route('editer.categorie',$categorie->id) }}" class="text-base font-semibold text-white bg-blue-500 border border-blue-500 rounded-md text-center py-2 px-4 hover:bg-opacity-90 transition">
                                    Modifier
                                </a>
                                
                                <form action="{{ route('supprimer.categorie', $categorie->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?');">
                                    @csrf
                                    <button type="submit" class="text-base font-semibold text-white bg-red-500 border border-red-500 rounded-md text-center py-2 px-4 hover:bg-opacity-90 transition">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== Pricing Section End -->
</body>
</html>
