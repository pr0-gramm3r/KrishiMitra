const p = document.querySelectorAll(".lang p");

p.forEach(btn => {
    btn.addEventListener('click', function () {
        // move globe to clicked element
        const globe = document.querySelector('.lang .fa-globe');
        this.insertBefore(globe, this.firstChild);

        // swap active class
        p.forEach((e) =>{
                e.classList.remove('active');
            }); 
        btn.classList.add('active');
    
    });
});