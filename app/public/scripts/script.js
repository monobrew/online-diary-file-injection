const createBtn = document.querySelector(".btn");
let notes = document.querySelectorAll(".input-box");
const notesContainer = document.querySelector(".notes-container");

let editingNote = false;

createBtn.addEventListener("click", () => {
    if (editingNote == false) {
        notesContainer.style.display = "block";
        editingNote = true;
    } else {
        notesContainer.style.display = "none";
        editingNote = false;
    }
});
