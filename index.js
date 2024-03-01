// Get date form computer and show in interface
const data = () => {
  var date = document.getElementById("date");
  var data = new Date().toLocaleDateString();
  date.innerHTML = data;
};
data();

// Get clock form computer and show in interface

const clock = () => {
  let clock = document.getElementById("clock");
  var clo = new Date().toLocaleTimeString();
  clock.innerHTML = clo;
};
clock();
