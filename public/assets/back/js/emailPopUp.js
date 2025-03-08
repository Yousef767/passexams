let showPopUpBtns = document.querySelectorAll('#show-popUp');
let raw = document.querySelectorAll('#dRa');
showPopUpBtns.forEach((e)=>{
  e.addEventListener('click',()=>{
    let list = e.closest('tr').querySelectorAll('td');
    raw.forEach((e,i)=>{
      e.innerHTML = list[i].innerText;
    })
  })
})