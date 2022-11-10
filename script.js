const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        alert('Ganti ke Light Mode?');
        body.style.background = '#ffffff';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        alert('Ganti ke Dark Mode?');
        body.style.background = 'black';
        body.style.color = 'black';
        body.style.transition = '2s';
    }
});

  const newspaperSpinning = [
    { transform: 'rotate(0) scale(1)' },
    { transform: 'rotate(360deg) scale(0)' }
  ];
  
  const newspaperTiming = {
    duration: 2000,
    iterations: 1,
  }
  
  const newspaper = document.querySelector(".newspaper");
  
  newspaper.addEventListener('click', () => {
    newspaper.animate(newspaperSpinning, newspaperTiming);
  });