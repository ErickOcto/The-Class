const box = document.querySelector(".draggable-box");
let isDragging  =false;
let offsetX, offsetY;
document.addEventListener("mousedown", (e) => {
    isDragging = true;
    offsetX = e.clientX - box.getBoundingClientRect().left;
    offsetY = e.clientY - box.getBoundingClientRect().top;
    box.style.cursor = "grabbing"
});
document.addEventListener("mousemove", (e) => {
    if(!isDragging) return;
    const x = e.clientX - offsetX;
    const y = e.clientY - offsetY;
    box.style.left = x + "px";
    box.style.top = y + "px";
});
document.addEventListener("mouseup", () => {
  isDragging = false;
  box.style.cursor = "grab";
});