const accordionBtns = document.querySelectorAll(".accord");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("is-open");

    let content = this.nextElementSibling;
    console.log(content);

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = content.scrollHeight + "px";
      console.log(content.style.maxHeight);
    }
  };
});


const observer = new IntersectionObserver((entries)=>{
  entries.forEach((entry)=>{
      console.log (entry)
      if(entry.isIntersecting){
          entry.target.classList.add("show");
      }else{
          entry.target.classList.remove("show");
      }
  });
});


const hiddenElenments =  document.querySelectorAll('.hidden','#hidden');
hiddenElenments.forEach((el)=>observer.observe(el));
