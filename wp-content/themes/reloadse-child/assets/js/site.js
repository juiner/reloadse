/* Reloadse — interações do site institucional */
(function(){
  var rm=window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var header=document.getElementById('header'),prog=document.getElementById('progress');
  function onScroll(){var y=window.scrollY||document.documentElement.scrollTop;
    header.classList.toggle('solid',y>40);
    var h=document.documentElement.scrollHeight-window.innerHeight;prog.style.width=(h>0?(y/h*100):0)+'%';}
  window.addEventListener('scroll',onScroll,{passive:true});onScroll();

  var mb=document.getElementById('menuBtn'),mn=document.getElementById('mobileNav');
  mb.addEventListener('click',function(){var o=mn.classList.toggle('open');mb.setAttribute('aria-expanded',o);document.body.style.overflow=o?'hidden':'';});
  mn.querySelectorAll('a').forEach(function(a){a.addEventListener('click',function(){mn.classList.remove('open');mb.setAttribute('aria-expanded',false);document.body.style.overflow='';});});

  var revs=document.querySelectorAll('.reveal');
  if(rm){revs.forEach(function(e){e.classList.add('in');});}
  else{var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target);}});},{threshold:.14,rootMargin:'0px 0px -8% 0px'});
    revs.forEach(function(e){io.observe(e);});}
  document.querySelectorAll('.hero .reveal').forEach(function(e){setTimeout(function(){e.classList.add('in');},60);});

  function fmt(n){return Math.round(n).toLocaleString('pt-BR');}
  function countUp(el){var target=parseFloat(el.getAttribute('data-count'));
    if(rm){el.textContent=fmt(target);return;}
    var start=null,dur=1400;
    function step(ts){if(!start)start=ts;var p=Math.min((ts-start)/dur,1),e=1-Math.pow(1-p,3);
      el.textContent=fmt(target*e);if(p<1)requestAnimationFrame(step);else el.textContent=fmt(target);}
    requestAnimationFrame(step);}
  var cio=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){countUp(e.target);cio.unobserve(e.target);}});},{threshold:.6});
  document.querySelectorAll('[data-count]').forEach(function(c){cio.observe(c);});

  var navLinks=Array.prototype.slice.call(document.querySelectorAll('nav.main a')),map={};
  navLinks.forEach(function(a){map[a.getAttribute('href').slice(1)]=a;});
  ['manifesto','quem-somos','o-que-fazemos','resultados','contato'].map(function(id){return document.getElementById(id);}).filter(Boolean).forEach(function(s){
    new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){navLinks.forEach(function(a){a.classList.remove('active');});if(map[e.target.id])map[e.target.id].classList.add('active');}});},{rootMargin:'-45% 0px -50% 0px'}).observe(s);});

  var form=document.getElementById('contactForm');
  form.addEventListener('submit',function(ev){ev.preventDefault();
    if(!form.checkValidity()){form.reportValidity();return;}
    var g=function(id){return (document.getElementById(id)||{}).value||'';};
    var body='Nome: '+g('nome')+'%0D%0ACartório: '+g('org')+'%0D%0AE-mail: '+g('email')+'%0D%0AWhatsApp: '+g('tel')+'%0D%0A%0D%0A'+encodeURIComponent(g('msg'));
    window.location.href='mailto:contato@reloadse.com.br?subject='+encodeURIComponent('Contato pelo site — '+g('nome'))+'&body='+body;
    document.getElementById('formOk').classList.add('show');});
})();
