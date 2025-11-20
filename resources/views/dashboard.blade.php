<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin BioQuali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .stats-card { background: white; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
        .sidebar { background: linear-gradient(135deg, #1e293b 0%, #334155 100%); }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar w-64 min-h-screen text-white p-6">
            <h1 class="text-2xl font-bold mb-8">BioQuali Admin</h1>
            <nav class="space-y-2">
                <a href="/admin/dashboard" class="block py-2 px-4 bg-blue-600 rounded">📊 Dashboard</a>
                <a href="#" class="block py-2 px-4 hover:bg-blue-600 rounded">🛍️ Produits</a>
                <a href="#" class="block py-2 px-4 hover:bg-blue-600 rounded">📦 Commandes</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <header class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Tableau de bord</h2>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Déconnexion</button>
            </header>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="stats-card p-6">
                    <h3 class="text-lg font-semibold mb-2">Ventes totales</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ number_format($totalSales, 0, ',', ' ') }} €</p>
                    <p class="text-green-500">↑ 4.9%</p>
                </div>

                <div class="stats-card p-6">
                    <h3 class="text-lg font-semibold mb-2">Nouveaux clients</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $newCustomers }}</p>
                    <p class="text-green-500">↑ 7.5%</p>
                </div>

                <div class="stats-card p-6">
                    <h3 class="text-lg font-semibold mb-2">Commandes en attente</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $pendingOrders }}</p>
                    <p class="text-red-500">Attention</p>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="stats-card p-6">
                <h3 class="text-lg font-semibold mb-4">Commandes récentes</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">ID Commande</th>
                                <th class="text-left py-2">Date</th>
                                <th class="text-left py-2">Client</th>
                                <th class="text-left py-2">Statut</th>
                                <th class="text-left py-2">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentOrders as $order)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3">#{{ $order['order_id'] }}</td>
                                <td class="py-3">{{ $order['created_at'] }}</td>
                                <td class="py-3">{{ $order['customer_name'] }}</td>
                                <td class="py-3">
                                    <span class="px-3 py-1 rounded-full text-sm 
                                        {{ $order['status'] == 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ $order['status'] }}
                                    </span>
                                </td>
                                <td class="py-3">{{ number_format($order['total_amount'], 2, ',', ' ') }} €</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>