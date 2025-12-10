<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Day 2 - Agile & Scrum</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-50 to-blue-50 min-h-screen text-gray-800">

<!-- NAVBAR -->
<nav class="bg-white shadow fixed w-full z-50">
  <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-green-600">Day 2 — Agile & Scrum</h1>
    <a href="../index.php" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
      ← Back
    </a>
     <a href="quiz.php" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
      Quiz
    </a>
  </div>
</nav>

<!-- HERO -->
<section class="pt-32 pb-16 px-6 text-center">
  <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-green-700">
    Agile & Scrum Overview
  </h1>
  <p class="max-w-4xl mx-auto text-lg text-gray-700 leading-relaxed">
    Agile is an iterative methodology that divides work into phases for continuous delivery and improvement. Scrum is a framework under Agile that helps teams organize and prioritize work, deliver frequently, and continuously improve.
  </p>
</section>

<!-- AGILE PRINCIPLES -->
<section class="max-w-6xl mx-auto px-6 mb-16">
  <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition">
    <h2 class="text-3xl font-bold mb-4 text-green-600">What is Agile?</h2>
    <p class="text-gray-700 leading-relaxed text-lg">
      Agile emphasizes adaptive planning, rapid execution, and ongoing evaluation. It allows teams to respond quickly to changes and gather feedback efficiently.
    </p>
  </div>
</section>

<!-- SCRUM ROLES CARDS -->
<section class="max-w-7xl mx-auto px-6 mb-16">
  <h2 class="text-3xl font-bold mb-6 text-green-600 text-center">Scrum Roles</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- Product Owner -->
    <div class="group bg-white p-8 rounded-2xl shadow hover:shadow-2xl transition transform hover:-translate-y-2 cursor-pointer" onclick="toggleAccordion('po')">
      <h3 class="text-2xl font-bold mb-2 text-green-600">Product Owner</h3>
      <p class="text-gray-600">Manages product backlog, prioritizes work, gathers feedback.</p>
      <div id="po" class="mt-4 hidden text-gray-700">
        The Product Owner ensures the team is building the right features and delivers maximum value.
      </div>
    </div>

    <!-- Scrum Master -->
    <div class="group bg-white p-8 rounded-2xl shadow hover:shadow-2xl transition transform hover:-translate-y-2 cursor-pointer" onclick="toggleAccordion('sm')">
      <h3 class="text-2xl font-bold mb-2 text-green-600">Scrum Master</h3>
      <p class="text-gray-600">Supports team, removes obstacles, facilitates Scrum events.</p>
      <div id="sm" class="mt-4 hidden text-gray-700">
        The Scrum Master coaches the team, ensures smooth workflow, and maintains transparency.
      </div>
    </div>

    <!-- Development Team -->
    <div class="group bg-white p-8 rounded-2xl shadow hover:shadow-2xl transition transform hover:-translate-y-2 cursor-pointer" onclick="toggleAccordion('dev')">
      <h3 class="text-2xl font-bold mb-2 text-green-600">Development Team</h3>
      <p class="text-gray-600">Builds the product, collaborates, self-organizes.</p>
      <div id="dev" class="mt-4 hidden text-gray-700">
        Small, skilled teams work closely to deliver increments and reflect on improvements.
      </div>
    </div>

  </div>
</section>

<!-- SCRUM ARTIFACTS -->
<section class="max-w-7xl mx-auto px-6 mb-16">
  <h2 class="text-3xl font-bold mb-6 text-green-600 text-center">Scrum Artifacts</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <div class="group bg-white p-6 rounded-2xl shadow hover:shadow-2xl transition transform hover:-translate-y-2 cursor-pointer" onclick="toggleAccordion('backlog')">
      <h3 class="text-2xl font-bold mb-2 text-green-600">Product Backlog</h3>
      <div id="backlog" class="hidden text-gray-700">
        The main list of features, requirements, enhancements, and fixes. Constantly updated and prioritized by the Product Owner.
      </div>
    </div>

    <div class="group bg-white p-6 rounded-2xl shadow hover:shadow-2xl transition transform hover:-translate-y-2 cursor-pointer" onclick="toggleAccordion('sprint')">
      <h3 class="text-2xl font-bold mb-2 text-green-600">Sprint Backlog</h3>
      <div id="sprint" class="hidden text-gray-700">
        Selected items from the product backlog that the team will work on during the sprint.
      </div>
    </div>

    <div class="group bg-white p-6 rounded-2xl shadow hover:shadow-2xl transition transform hover:-translate-y-2 cursor-pointer" onclick="toggleAccordion('increment')">
      <h3 class="text-2xl font-bold mb-2 text-green-600">Increment</h3>
      <div id="increment" class="hidden text-gray-700">
        The usable product delivered at the end of the sprint, demonstrated during the sprint review.
      </div>
    </div>

  </div>
</section>

<!-- SCRUM EVENTS TIMELINE -->
<section class="max-w-6xl mx-auto px-6 mb-16">
  <h2 class="text-3xl font-bold mb-6 text-green-600 text-center">Scrum Events</h2>

  <ol class="space-y-6 text-xl text-gray-700">
    <li><b>1. Backlog Grooming:</b> Product Owner updates and prioritizes backlog items.</li>
    <li><b>2. Sprint Planning:</b> Team plans work for the sprint under guidance of Scrum Master.</li>
    <li><b>3. Sprint Execution:</b> Team works collaboratively to complete tasks.</li>
    <li><b>4. Daily Scrum:</b> Quick daily meeting to review progress and remove blockers.</li>
    <li><b>5. Sprint Review:</b> Team presents completed work to stakeholders.</li>
    <li><b>6. Sprint Retrospective:</b> Team reflects on successes and areas to improve.</li>
  </ol>
</section>

<!-- FOOTER -->
<footer class="mt-20 pb-6 text-center text-gray-500 text-sm">
  © <?= date("Y") ?> Daily Projects | Day 2 — Agile & Scrum
</footer>

<script>
// Accordion toggle function
function toggleAccordion(id){
  const el = document.getElementById(id);
  el.classList.toggle("hidden");
}
</script>

</body>
</html>
