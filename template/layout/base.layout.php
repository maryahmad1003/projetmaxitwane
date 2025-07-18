<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Maxit - Dashboard</title>
</head>
<body class="m-0 p-0 box-border bg-gradient-to-br from-orange-50 to-orange-100">
    <div class="layout h-screen w-[100%] flex">
        <!-- Sidebar -->
        <div class="flex w-[18%] bg-gradient-to-b from-[#FF7900] to-[#FF6B00] flex-col shadow-2xl border-r-2 border-orange-300/30">
            <!-- Logo Container -->
            <div class="bg-white rounded-2xl mt-8 mx-auto p-6 shadow-xl ring-2 ring-orange-300">
                <h1 class="text-[#FF7900] text-3xl font-bold text-center">Max it</h1>
                <div class="text-gray-700 text-xl font-semibold text-center mt-2">SN</div>
            </div>
            
            <!-- Navigation Menu -->
            <div class="w-[90%] h-[90%] mx-auto mt-8">
                <nav>
                    <a href="#" class="flex items-center mt-8 ml-6 p-3 rounded-lg bg-orange-500/20 transition-all cursor-pointer group">
                        <i class="fa-solid fa-house text-white text-2xl"></i>
                        <p class="text-xl text-white ml-5">Accueil</p>
                    </a>
                    
                    <a href="#" class="flex items-center mt-6 ml-6 p-3 rounded-lg hover:bg-orange-500/20 transition-all cursor-pointer group">
                        <i class="fa-solid fa-arrow-right-arrow-left text-2xl text-orange-100 group-hover:text-white"></i>
                        <p class="text-xl text-orange-50 ml-5 group-hover:text-white">Transactions</p>
                    </a>
                    
                    <a href="#" class="flex items-center mt-6 ml-6 p-3 rounded-lg hover:bg-orange-500/20 transition-all cursor-pointer group">
                        <i class="fa-solid fa-credit-card text-2xl text-orange-100 group-hover:text-white"></i>
                        <p class="text-xl text-orange-50 ml-5 group-hover:text-white">Comptes</p>
                    </a>
                    
                     <form  action= '/logout' method= "POST"class="flex items-center mt-auto mb-8 ml-6 p-3 rounded-lg hover:bg-red-500/20 transition-all cursor-pointer group">
                        <i class="fa-solid fa-right-from-bracket text-2xl text-red-300 group-hover:text-red-200"></i>
                        <button type="submit" class="text-xl text-orange-50 ml-5 group-hover:text-white">Déconnexion</button>
                    </form>
                </nav>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="flex w-[82%] flex-col bg-gradient-to-br from-orange-50 to-orange-100">
            <!-- Header -->
            <div class="h-[80px] w-[96%] flex items-center mt-4 px-6 bg-white shadow-lg rounded-lg mx-auto border border-orange-200">
                <!-- Search Container -->
                <div class="w-[55%] h-12 rounded-full bg-gradient-to-r from-[#FF7900] to-[#FF8C00] flex items-center shadow-md">
                    <i class="fa-solid fa-magnifying-glass text-xl ml-4 text-white"></i>
                    <input type="text" 
                           class="flex-1 p-3 ml-3 bg-transparent outline-none border-none text-white placeholder-orange-200" 
                           placeholder="Recherche...">
                </div>
                
                <!-- User Info -->
                <div class="flex items-center ml-auto space-x-4">
                    <div class="h-[45px] px-6 rounded-full bg-gradient-to-r from-[#FF8C00] to-[#FF7900] flex items-center shadow-lg hover:shadow-xl transition-all hover:from-[#FF9500] hover:to-[#FF8C00]">
                        <p class="text-white font-semibold text-lg">Client</p>
                    </div>
                    
                    <div class="h-[50px] w-[50px] bg-gradient-to-r from-[#FF7900] to-[#FF8C00] rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors cursor-pointer shadow-md">
                        <i class="fa-solid fa-user text-xl text-white"></i>
                    </div>
                </div>
            </div>
            
            <!-- Content Area -->
            <div class="flex-1 w-full p-6">
                <div class="h-full w-full bg-gradient-to-br from-white to-orange-50 rounded-lg shadow-lg p-6 border border-orange-200">
                    <!-- Dashboard Content -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 - Solde Total -->
                        <div class="bg-white rounded-xl shadow-md p-6 border border-orange-100 hover:shadow-xl transition-shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-gray-600 text-lg font-semibold">Solde Total</h3>
                                <i class="fa-solid fa-wallet text-2xl text-[#FF7900]"></i>
                            </div>
                            <p class="text-3xl font-bold text-gray-800">125,450 FCFA</p>
                            <p class="text-sm text-green-600 mt-2">
                                <i class="fa-solid fa-arrow-up"></i> +2.5% ce mois
                            </p>
                        </div>
                        
                        <!-- Card 2 - Transactions du jour -->
                        <div class="bg-white rounded-xl shadow-md p-6 border border-orange-100 hover:shadow-xl transition-shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-gray-600 text-lg font-semibold">Transactions du jour</h3>
                                <i class="fa-solid fa-chart-line text-2xl text-[#FF7900]"></i>
                            </div>
                            <p class="text-3xl font-bold text-gray-800">47</p>
                            <p class="text-sm text-gray-500 mt-2">Total: 89,300 FCFA</p>
                        </div>
                        
                        <!-- Card 3 - Comptes Actifs -->
                        <div class="bg-white rounded-xl shadow-md p-6 border border-orange-100 hover:shadow-xl transition-shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-gray-600 text-lg font-semibold">Comptes Actifs</h3>
                                <i class="fa-solid fa-users text-2xl text-[#FF7900]"></i>
                            </div>
                            <p class="text-3xl font-bold text-gray-800">3</p>
                            <p class="text-sm text-gray-500 mt-2">2 particuliers, 1 business</p>
                        </div>
                    </div>
                    
                    <!-- Recent Transactions Table -->
                    <div class="mt-8 bg-white rounded-xl shadow-md p-6 border border-orange-100">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Transactions Récentes</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="text-left py-3 px-4 text-gray-600">Date</th>
                                        <th class="text-left py-3 px-4 text-gray-600">Type</th>
                                        <th class="text-left py-3 px-4 text-gray-600">Montant</th>
                                        <th class="text-left py-3 px-4 text-gray-600">Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-100 hover:bg-orange-50 transition-colors">
                                        <td class="py-3 px-4">16/07/2025</td>
                                        <td class="py-3 px-4">
                                            <span class="text-green-600">
                                                <i class="fa-solid fa-arrow-down"></i> Dépôt
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 font-semibold">+15,000 FCFA</td>
                                        <td class="py-3 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Complété</span>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-orange-50 transition-colors">
                                        <td class="py-3 px-4">16/07/2025</td>
                                        <td class="py-3 px-4">
                                            <span class="text-red-600">
                                                <i class="fa-solid fa-arrow-up"></i> Retrait
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 font-semibold">-5,000 FCFA</td>
                                        <td class="py-3 px-4">
                                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Complété</span>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-100 hover:bg-orange-50 transition-colors">
                                        <td class="py-3 px-4">15/07/2025</td>
                                        <td class="py-3 px-4">
                                            <span class="text-blue-600">
                                                <i class="fa-solid fa-arrow-right-arrow-left"></i> Transfert
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 font-semibold">-8,500 FCFA</td>
                                        <td class="py-3 px-4">
                                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">En cours</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu Toggle Script -->
    <script>
        // Pour la version mobile, vous pouvez ajouter un toggle menu ici
        const sidebar = document.querySelector('.sidebar');
        const menuToggle = document.querySelector('.menu-toggle');
        
        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('active');
            });
        }
    </script>
</body>
</html>