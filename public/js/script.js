function toggleLoading(){
    document.querySelector('.loader').classList.toggle('d-none');
    document.querySelector('.overlay').classList.toggle('d-none');
}

document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.sidebar-control').forEach(function(element){
        element.addEventListener('click', function () {
            console.log(1)
            document.querySelector('.sidebar').classList.toggle('collapsed');
            document.querySelector('.content').classList.toggle('collapsed');
        })
    });
    
    // Animasi 
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        });
    });
    
    const hidden = document.querySelectorAll('.hidden');
    hidden.forEach(element => {
        observer.observe(element);
    });

    document.querySelectorAll('form').forEach(function(form) {
        form.addEventListener('submit', function(){
            toggleLoading();
        })
    })
})
