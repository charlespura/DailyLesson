<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daily Lessons Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">

<!-- ✅ NAVBAR -->
<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">🚀 Daily Lessons</h1>
        <div class="flex items-center gap-6">
            <span id="clock" class="text-gray-700 font-semibold text-lg"></span>
            <span id="date" class="text-gray-500 text-sm"></span>
        </div>
    </div>
</nav>

<!-- ✅ MAIN CONTENT -->
<main class="pt-28 max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">
        Your Learning Journey
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

        <!-- Day 1 -->
        <a href="day1/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-blue-600">Day 1</h3>
            <p class="text-gray-500 mt-3">December 09, 2025</p>
            <p class="text-gray-500 mt-1">LESSON 1: SDLC</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Active</span>
        </a>

        <!-- Day 2 -->
        <a href="day2/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-green-600 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-green-600">Day 2</h3>
            <p class="text-gray-500 mt-3">December 10, 2025</p>
            <p class="text-gray-500 mt-1">LESSON 2: Agile & Scrum</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-green-100 text-green-600 rounded-full">Active</span>
        </a>

        <!-- Day 3 -->
        <a href="day3/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-purple-600 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-purple-600">Day 3</h3>
               <p class="text-gray-500 mt-3">December 11, 2025</p>
            <p class="text-gray-500 mt-3">LESSON 3: Git & GitHub</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-purple-100 text-purple-600 rounded-full">Active</span>
        </a>

        <!-- Day 4 -->
        <a href="day4/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-orange-600 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-orange-600">Day 4</h3>
            <p class="text-gray-500 mt-3">Requirements Analysis</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-orange-100 text-orange-600 rounded-full">Active</span>
        </a>

        <!-- Day 5 -->
        <a href="day5/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-pink-600 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-pink-600">Day 5</h3>
            <p class="text-gray-500 mt-3">Documentation</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-pink-100 text-pink-600 rounded-full">Active</span>
        </a>

        <!-- Day 6 -->
        <a href="day6/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-indigo-600 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-indigo-600">Day 6</h3>
            <p class="text-gray-500 mt-3">HTML5</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-indigo-100 text-indigo-600 rounded-full">Active</span>
        </a>

        <!-- Day 7 -->
        <a href="day7/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-teal-600 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-teal-600">Day 7</h3>
            <p class="text-gray-500 mt-3">CSS3</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-teal-100 text-teal-600 rounded-full">Active</span>
        </a>

        <!-- Day 8 -->
        <a href="day8/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-orange-700 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-orange-700">Day 8</h3>
            <p class="text-gray-500 mt-3">Responsive Design</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-orange-100 text-orange-700 rounded-full">Active</span>
        </a>

        <!-- Day 9 -->
        <a href="day9/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-pink-700 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-pink-700">Day 9</h3>
            <p class="text-gray-500 mt-3">Bootstrap/Tailwind</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-pink-100 text-pink-700 rounded-full">Active</span>
        </a>

        <!-- Day 10 -->
        <a href="day10/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-blue-700 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-blue-700">Day 10</h3>
            <p class="text-gray-500 mt-3">Responsive Project</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-blue-100 text-blue-700 rounded-full">Active</span>
        </a>

        <!-- Day 11 -->
        <a href="day11/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-green-700 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-green-700">Day 11</h3>
            <p class="text-gray-500 mt-3">JavaScript Basics</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-green-100 text-green-700 rounded-full">Active</span>
        </a>

        <!-- Day 12 -->
        <a href="day12/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-purple-700 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-purple-700">Day 12</h3>
            <p class="text-gray-500 mt-3">Events & Validation</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-purple-100 text-purple-700 rounded-full">Active</span>
        </a>

        <!-- Day 13 -->
        <a href="day13/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-indigo-700 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-indigo-700">Day 13</h3>
            <p class="text-gray-500 mt-3">API & JSON</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-indigo-100 text-indigo-700 rounded-full">Active</span>
        </a>

        <!-- Day 14 -->
        <a href="day14/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-teal-700 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-teal-700">Day 14</h3>
            <p class="text-gray-500 mt-3">Framework Intro</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-teal-100 text-teal-700 rounded-full">Active</span>
        </a>

        <!-- Day 15 -->
        <a href="day15/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-orange-800 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-orange-800">Day 15</h3>
            <p class="text-gray-500 mt-3">Interactive Website</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-orange-100 text-orange-800 rounded-full">Active</span>
        </a>

        <!-- Day 16 -->
        <a href="day16/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-pink-800 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-pink-800">Day 16</h3>
            <p class="text-gray-500 mt-3">Backend Basics</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-pink-100 text-pink-800 rounded-full">Active</span>
        </a>

        <!-- Day 17 -->
        <a href="day17/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-blue-800 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-blue-800">Day 17</h3>
            <p class="text-gray-500 mt-3">Database CRUD</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-blue-100 text-blue-800 rounded-full">Active</span>
        </a>

        <!-- Day 18 -->
        <a href="day18/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-green-800 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-green-800">Day 18</h3>
            <p class="text-gray-500 mt-3">Authentication</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-green-100 text-green-800 rounded-full">Active</span>
        </a>

        <!-- Day 19 -->
        <a href="day19/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-purple-800 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-purple-800">Day 19</h3>
            <p class="text-gray-500 mt-3">Final Project Dev</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-purple-100 text-purple-800 rounded-full">Active</span>
        </a>

        <!-- Day 20 -->
        <a href="day20/index.php"
           class="group bg-white p-8 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-orange-900 opacity-0 group-hover:opacity-10 transition"></div>
            <h3 class="text-3xl font-bold text-orange-900">Day 20</h3>
            <p class="text-gray-500 mt-3">Final Presentation</p>
            <span class="mt-6 inline-block px-4 py-1 text-sm bg-orange-100 text-orange-900 rounded-full">Active</span>
        </a>

    </div>
</main>

<!-- ✅ FOOTER -->
<footer class="mt-20 text-center text-gray-500 text-sm pb-6">
    © <?= date("Y") ?> Daily Projects | Built with Tailwind CSS
</footer>

<!-- ✅ LIVE CLOCK SCRIPT -->
<script>
function updateTime() {
    const now = new Date();
    const time = now.toLocaleTimeString();
    const date = now.toLocaleDateString(undefined, {
        weekday: 'long',
        year: 'numeric',
        month: 'short',
        day: 'numeric'
    });
    document.getElementById('clock').textContent = time;
    document.getElementById('date').textContent = date;
}
setInterval(updateTime, 1000);
updateTime();
</script>

</body>
</html>
