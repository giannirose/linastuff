/* The div has style="display: none" to begin with the form not visible, made visible on button click */
function showForm() {
  var x = document.getElementById("comment-form");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
