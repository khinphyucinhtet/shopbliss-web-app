<?php
// Start session at the beginning
session_start();

// Check if there's a contact message in session
$contact_message = isset($_SESSION['contact_message']) ? $_SESSION['contact_message'] : null;

// Clear the message after displaying
if (isset($_SESSION['contact_message'])) {
    unset($_SESSION['contact_message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>ShopBliss ✨ Admin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-tr from-[#fff3e0] via-[#ffe0b2] to-[#fffaf2] min-h-screen flex items-center justify-center p-4">
    <div class="relative max-w-[900px] w-full bg-white rounded-2xl shadow-2xl overflow-hidden" style="height: 520px;">
        <!-- Top bar -->
        <div class="flex items-center justify-between bg-[#ff5722] px-6 py-3">
            <div class="flex items-center space-x-3">
                <div class="bg-white rounded-md p-1.5"></div>
                <span class="text-[#fff3e0] font-semibold text-lg select-none">
                    ShopBliss ✨ 
                </span>
                <span class="text-[#ffe0b2] text-sm select-none">
                    Admin Page
                </span>
            </div>
            <button aria-label="Gift icon button" class="text-[#fff3e0] text-xl hover:text-[#e64a19] transition">
                <i class="fas fa-gift"></i>
            </button>
        </div>
        <!-- Main content area -->
        <div class="flex h-[calc(100%-48px)]">
            <!-- Sidebar -->
            <nav class="bg-[#ffccbc] w-48 flex flex-col text-[#bf360c] text-sm select-none" style="min-width: 192px;">
                <div class="flex items-center space-x-2 px-4 py-3 border-b border-[#ffab91]">
                    <button class="flex items-center space-x-1 text-[#d84315] hover:text-[#bf360c] transition">
                        <i class="fas fa-bars"></i>
                        <span>Dashboard</span>
                    </button>
                </div>
                <ul class="flex flex-col mt-4 space-y-1 px-2">
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md bg-[#e64a19] text-[#fff3e0] font-semibold" href="#">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-chart-line"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-file-alt"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-bell"></i>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-envelope"></i>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-folder"></i>
                            <span>Documents</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-chart-pie"></i>
                            <span>Statistics</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-cubes"></i>
                            <span>Integrations</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-life-ring"></i>
                            <span>Support</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-[#ff8a65] hover:text-[#fff3e0] transition" href="#">
                            <i class="fas fa-info-circle"></i>
                            <span>About</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Main dashboard content -->
            <main class="flex-1 p-6 space-y-6 overflow-auto">
                <!-- Top bar inside main -->
                <div class="flex items-center justify-between text-[#bf360c] text-sm select-none">
                    <div class="flex items-center space-x-3"></div>
                    <div class="flex items-center space-x-3">
                        <button class="hover:text-[#e64a19] transition">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="hover:text-[#e64a19] transition">
                            <i class="fas fa-bell"></i>
                        </button>
                        <button class="hover:text-[#e64a19] transition">
                            <i class="fas fa-cog"></i>
                        </button>
                        <button class="hover:text-[#e64a19] transition">
                            <i class="fas fa-user-circle"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Customer Message Section -->
                <div class="bg-white shadow-md rounded-lg p-6 space-y-4 border border-[#ffccbc]">
                    <h2 class="text-2xl font-bold text-[#ff5722]">Customer Message</h2>
                    <h3 class="text-md text-[#e64a19] font-semibold">Display Message</h3>

                    <?php if ($contact_message): ?>
                        <div class="space-y-3 p-4 bg-[#fff3e0] rounded-md">
                            <p class="font-semibold"><span class="text-[#e64a19]">Name:</span> <?= $contact_message['name'] ?></p>
                            <p class="font-semibold"><span class="text-[#e64a19]">Email:</span> <?= $contact_message['email'] ?></p>
                            <p class="font-semibold"><span class="text-[#e64a19]">Subject:</span> <?= $contact_message['subject'] ?></p>
                            <p class="font-semibold"><span class="text-[#e64a19]">Message:</span><br> <?= $contact_message['message'] ?></p>
                        </div>
                    <?php else: ?>
                        <p class="text-gray-500 italic">No recent messages. Messages will appear here when customers contact you.</p>
                    <?php endif; ?>
                </div>

                <!-- Welcome cards row -->
                <div class="flex flex-wrap gap-6">
                    <div class="flex-1 min-w-[220px] bg-[#fff3e0] rounded-lg p-4 flex items-center space-x-4">
                        <img alt="Illustration of a woman avatar with blue and purple colors" class="w-16 h-16 rounded-full" height="64" src="https://storage.googleapis.com/a1aa/image/cdd832d1-3e1f-4b0f-a5bd-298cbf501058.jpg" width="64"/>
                        <div>
                            <h3 class="text-[#ff5722] font-semibold text-lg">Good Morning, Admin👋</h3>
                            <p class="text-[#ff8a65] text-sm">Have a nice day at work</p>
                        </div>
                    </div>
                    <div class="flex-1 min-w-[220px] bg-[#fff3e0] rounded-lg p-4 flex items-center space-x-4">
                        <img alt="Illustration of a man avatar with brown hair and white shirt" class="w-16 h-16 rounded-full" height="64" src="https://storage.googleapis.com/a1aa/image/ab08fd3d-e1d6-4270-2de6-854eb818d9e1.jpg" width="64"/>
                        <div>
                            <h3 class="text-[#ff5722] font-semibold text-lg">24 Sales</h3>
                            <p class="text-[#ff8a65] text-sm">Last 7 days</p>
                        </div>
                    </div>
                </div>
                
                <!-- Cards grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1: Revenue -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <h4 class="text-[#bf360c] font-semibold mb-2">Revenue</h4>
                        <p class="text-2xl font-bold text-[#e64a19]">$2,345</p>
                        <div class="mt-3">
                            <img alt="Line chart showing revenue trend" class="w-full h-14 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/85d42569-de83-4018-c7b1-2550dad562da.jpg" width="150"/>
                        </div>
                    </div>
                    <!-- Card 2: Orders -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <h4 class="text-[#bf360c] font-semibold mb-2">Orders</h4>
                        <p class="text-2xl font-bold text-[#e64a19]">1,234</p>
                        <div class="mt-3">
                            <img alt="Bar chart showing orders trend" class="w-full h-14 object-contain" height="60" src="https://storage.googleapis.com/a1aa/image/9674ec6f-a259-4e48-d40b-ed1ee7c99b1e.jpg" width="150"/>
                        </div>
                    </div>
                    <!-- Card 3: Revenue Card -->
                    <div class="bg-white rounded-lg shadow p-4 flex flex-col items-center">
                        <h4 class="text-[#bf360c] font-semibold mb-2">Revenue Card</h4>
                        <div class="w-20 h-20">
                            <img alt="Pie chart showing revenue distribution" class="w-full h-full object-contain" height="80" src="https://storage.googleapis.com/a1aa/image/e83b9d98-a29d-42fd-2801-5407a66950f6.jpg" width="80"/>
                        </div>
                        <p class="mt-2 text-[#bf360c] font-semibold">56.4%</p>
                    </div>
                    <!-- Card 4: Sales -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <h4 class="text-[#bf360c] font-semibold mb-2">Sales</h4>
                        <p class="text-2xl font-bold text-[#e64a19]">$12.4k</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>