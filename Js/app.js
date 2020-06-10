const sr = ScrollReveal();

sr.reveal('#logo',{
    origin: 'top',
    distance: '50px',
    scale: '0.5',
    duration: 5000, /* 1000 = 1 seconde */
    mobile: 'true', /* Pour le responsive */
});

sr.reveal('.nom',{
    delay: 1000,
});

/* Toutes les commandes de ScrollReveal => https://github.com/jlmakes/scrollreveal/wiki/Configuration-(v3.x) */