const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');
const box = document.querySelector('section');
const nav = document.querySelector('header');
const bike = document.getElementById('jasa');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        alert('Ganti ke Light Mode?');
        body.style.background = '#ffffff';
        body.style.color = 'black';
        box.style.background = 'white';
        nav.style.background = '#ffffff';
        nav.style.color = 'black';
        jasa.style.color = 'black';
        jasa.style.background = '#ffffff';
        body.style.transition = '2s';
        box.style.transition = '2s';
        nav.style.transition = '2s';
        jasa.style.transition = '2s';
    }else{
        alert('Ganti ke Dark Mode?');
        body.style.background = '#0d0c0c';
        body.style.color = 'white';
        box.style.background = '#242323';
        nav.style.background = '#151515';
        nav.style.color = 'white';
        jasa.style.color = 'white';
        jasa.style.background = '#242323';
        body.style.transition = '2s';
        box.style.transition = '2s';
        nav.style.transition = '2s';
        jasa.style.transition = '2s';
    }
});

  // const newspaperSpinning = [
  //   { transform: 'rotate(0) scale(1)' },
  //   { transform: 'rotate(360deg) scale(0)' }
  // ];
  
  // const newspaperTiming = {
  //   duration: 2000,
  //   iterations: 1,
  // }
  
  // const newspaper = document.querySelector(".newspaper");
  
  // newspaper.addEventListener('click', () => {
  //   newspaper.animate(newspaperSpinning, newspaperTiming);
  // });
