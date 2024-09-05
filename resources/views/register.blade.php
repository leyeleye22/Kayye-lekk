<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <title>Register</title>
</head>
<body>
<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
        <div class="hidden md:block w-1/2 bg-yellow-500 py-10 px-10">
            
                <img data-name="Layer 1" src="https://img.freepik.com/premium-vector/modern-food-beverages-icons-vector_1080480-67118.jpg" width="100%" height="auto" viewBox="0 0 744.84799 747.07702">
            </div>
            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">REGISTER</h1>
                    <p>Enter your information to register</p>
                </div>
                <div class="container mx-auto p-6">
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="flex -mx-3">
            <div class="w-1/2 px-3 mb-5">
                <label for="nom" class="text-xs font-semibold px-1">Nom</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                    </div>
                    <input type="text" id="nom" name="nom" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John" required>
                </div>
            </div>
            <div class="w-1/2 px-3 mb-5">
                <label for="prenom" class="text-xs font-semibold px-1">Prenom</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                    </div>
                    <input type="text" id="prenom" name="prenom" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Smith" required>
                </div>
            </div>
        </div>
        <div class="flex -mx-3">
            <div class="w-full px-3 mb-5">
                <label for="email" class="text-xs font-semibold px-1">Email</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                    </div>
                    <input type="email" id="email" name="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="johnsmith@example.com" required>
                </div>
            </div>
        </div>
        <div class="flex -mx-3">
            <div class="w-full px-3 mb-12">
                <label for="password" class="text-xs font-semibold px-1">Password</label>
                <div class="flex">
                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                        <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                    </div>
                    <input type="password" id="password" name="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************" required>
                </div>
            </div>
        </div>
        <div class="flex -mx-3">
            <div class="w-full px-3 mb-5">
                <button type="submit" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGISTER NOW</button>
            </div>
        </div>
    </form>
</div>

            </div>
        </div>
    </div>
</div>

<!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->

</body>
</html>