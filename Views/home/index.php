<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="bg-white rounded-lg shadow-xl p-12 text-white mb-8">
    <h1 class="text-4xl font-bold mb-4">Welcome to Digital Village</h1>
    <p class="text-xl mb-6">Your one-stop solution for village administrative services</p>
    <a href="/letters/create" class="inline-block bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg">
        Request a Letter
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-bold mb-2 text-gray-900">Certificate Services</h3>
        <p class="text-gray-600">Request official village certificates online</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
        <div class="text-green-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
            </svg>
        </div>
        <h3 class="text-xl font-bold mb-2 text-gray-900">Track Status</h3>
        <p class="text-gray-600">Monitor your letter request progress in real-time</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
        <div class="text-purple-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-bold mb-2 text-gray-900">Fast Processing</h3>
        <p class="text-gray-600">Get your documents processed quickly and efficiently</p>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
