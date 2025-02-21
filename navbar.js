const optionMenu = document.querySelector(".select-menu"),
  selectBtn = optionMenu.querySelector(".select-btn"),
  options = optionMenu.querySelectorAll(".option"),
  sBtnText = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

options.forEach(option => {
  option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text").innerText;
    sBtnText.innerText = selectedOption;
    console.log(selectedOption);
  });
});

//--------------------------Search box--------------------------------//
let searchBTN = document.querySelector('.searchBTN');
let closeBTN = document.querySelector('.closeBTN');
let userSearchBox = document.querySelector('.userSearchBox');

searchBTN.onclick = function(){
  userSearchBox.style.display = "flex";
  userSearchBox.classList.add('active');
  
}
closeBTN.onclick = function(){
  
  userSearchBox.classList.remove('active');
  userSearchBox.style.display = "none";
  
  
  
}