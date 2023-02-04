let text = document.querySelector('#message');
text.style.height = text.scrollHeight + "px";
text.style.overflowY = "hidden";
text.addEventListener("input", skip);

function skip() {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + "px";
}


let menu = document.querySelector('.mobile-menu');
let exit = document.querySelector('.mobile-menu-close').onclick = function(){
    menu.classList.remove('menu-active');
}

let open = document.querySelector('.prev-buttons-open').onclick = function(){
    menu.classList.add('menu-active');
}


function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
       change.target.classList.add('recolor');
      }
    });
  }
  
  let options = {
    threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.citata');
  
  for (let elm of elements) {
    observer.observe(elm);
  }






