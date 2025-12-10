<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Agile & Scrum Quiz</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 to-blue-100 min-h-screen flex flex-col items-center justify-start p-6">

<!-- NAVBAR -->
<nav class="bg-white shadow w-full fixed top-0 left-0 z-50">
  <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-green-600">Day 2 — Agile & Scrum Quiz</h1>
    <div class="flex items-center space-x-4">
      <a href="../index.php" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">← Back</a>
      <span id="currentTime" class="text-gray-600 font-semibold"></span>
    </div>
  </div>
</nav>

<!-- SPACER so content isn't hidden behind navbar -->
<div class="h-24"></div>

<!-- QUIZ CONTAINER -->
<div class="bg-white w-full max-w-4xl rounded-2xl shadow-xl p-10">

  <h1 class="text-4xl font-extrabold text-center text-green-700 mb-10">
    Agile & Scrum Quiz (1–10)
  </h1>

  <!-- QUIZ BOX -->
  <div id="quizBox" class="text-center">
    <h2 id="question" class="text-3xl font-bold mb-8"></h2>
    <div id="options" class="space-y-5 text-2xl"></div>

    <button onclick="nextQuestion()"
      class="mt-10 px-10 py-4 bg-green-600 text-white text-2xl rounded-xl hover:bg-green-700 transition">
      Next →
    </button>
  </div>

  <!-- PASSWORD BOX -->
  <div id="passwordBox" class="hidden text-center mt-10">
    <h2 class="text-3xl font-bold mb-6 text-green-700">Enter Password to Show Answers</h2>
    <input id="password" type="password" placeholder="Enter password"
      class="border-2 border-green-400 p-4 text-2xl rounded-lg text-center">
    <br><br>
    <button onclick="checkPassword()"
      class="px-10 py-4 bg-green-600 text-white text-2xl rounded-xl hover:bg-green-700 transition">
      Show Answers
    </button>
    <p id="error" class="text-red-600 mt-4 text-xl"></p>
  </div>

  <!-- ANSWER KEY -->
  <div id="answerKey" class="hidden mt-10 text-left">
    <h2 class="text-4xl font-bold mb-8 text-center text-green-700">✅ Answer Key</h2>
    <ul class="text-2xl space-y-4">
      <li>1. What is Agile? → <b>B. Iterative methodology for continuous improvement</b></li>
      <li>2. Scrum is part of Agile? → <b>A. Yes</b></li>
      <li>3. Who manages the product backlog? → <b>B. Product Owner</b></li>
      <li>4. Who facilitates Scrum events? → <b>C. Scrum Master</b></li>
      <li>5. What does the Development Team do? → <b>D. Builds the product collaboratively</b></li>
      <li>6. What is the Sprint Backlog? → <b>B. Selected items for the current sprint</b></li>
      <li>7. What is the Increment? → <b>C. Usable product delivered at sprint end</b></li>
      <li>8. What is the purpose of Daily Scrum? → <b>A. Review progress and remove blockers</b></li>
      <li>9. When is the Sprint Review held? → <b>B. End of sprint</b></li>
      <li>10. What happens in Sprint Retrospective? → <b>D. Reflect and improve team process</b></li>
    </ul>
  </div>

</div>

<script>
// NAVBAR TIME
function updateTime() {
  const now = new Date();
  const timeString = now.toLocaleTimeString();
  document.getElementById("currentTime").innerText = timeString;
}
setInterval(updateTime, 1000);
updateTime();

// QUIZ LOGIC
let current = 0;
const questions = [
  {q:"1. What is Agile?", o:["A. Waterfall methodology","B. Iterative methodology for continuous improvement","C. Coding standard","D. Testing tool"]},
  {q:"2. Scrum is part of Agile?", o:["A. Yes","B. No","C. Optional","D. Only for coding"]},
  {q:"3. Who manages the product backlog?", o:["A. Scrum Master","B. Product Owner","C. Development Team","D. Stakeholders"]},
  {q:"4. Who facilitates Scrum events?", o:["A. Product Owner","B. Development Team","C. Scrum Master","D. Stakeholder"]},
  {q:"5. What does the Development Team do?", o:["A. Plan sprints","B. Manage backlog","C. Facilitate meetings","D. Builds the product collaboratively"]},
  {q:"6. What is the Sprint Backlog?", o:["A. Completed tasks","B. Selected items for the current sprint","C. Product backlog","D. Daily tasks"]},
  {q:"7. What is the Increment?", o:["A. Backlog items","B. Sprint plan","C. Usable product delivered at sprint end","D. Team report"]},
  {q:"8. What is the purpose of Daily Scrum?", o:["A. Review progress and remove blockers","B. Deliver product","C. Update backlog","D. Sprint retrospective"]},
  {q:"9. When is the Sprint Review held?", o:["A. During sprint","B. End of sprint","C. Planning","D. Daily"]},
  {q:"10. What happens in Sprint Retrospective?", o:["A. Product planning","B. Sprint execution","C. Backlog grooming","D. Reflect and improve team process"]}
];

function loadQuestion(){
  document.getElementById("question").innerText = questions[current].q;
  let optionsHTML = "";
  questions[current].o.forEach(option => { optionsHTML += `<div class="bg-green-100 p-4 rounded-xl">${option}</div>`; });
  document.getElementById("options").innerHTML = optionsHTML;
}

function nextQuestion(){
  current++;
  if(current < questions.length){ 
    loadQuestion(); 
  } else {
    // Hide quiz, show password box
    document.getElementById("quizBox").classList.add("hidden");
    document.getElementById("passwordBox").classList.remove("hidden");
  }
}

// CHECK PASSWORD FUNCTION
function checkPassword() {
  const pass = document.getElementById("password").value;
  if(pass === "AGILEANDSCRUM") {
    document.getElementById("passwordBox").classList.add("hidden");
    document.getElementById("answerKey").classList.remove("hidden");
  } else {
    document.getElementById("error").innerText = "❌ Incorrect Password!";
  }
}

loadQuestion();
</script>

</body>
</html>
