var assignment = document.getElementById("assignment_container");
var exams  = document.getElementById("exams_container");
var toggle_assignment = document.getElementById("assignments_opener");
var toggle_exam = document.getElementById("exams_opener");
var left_card = document.getElementById("left_card");

toggle_assignment.onclick = ()=>{
    left_card.innerHTML = assignment;
}
toggle_exam.onclick = ()=>{
    left_card.innerHTML = exams;
}
