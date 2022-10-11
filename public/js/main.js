let buttons = document.querySelectorAll('#payment-buttons a');

buttons.forEach(function(toggle) {
    toggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.target.classList.add('active:bg-[#3b9b5c]');

        let option = this.getAttribute('href');
        let buttonoptions = document.querySelector('#button-options');

        for (let i = 0; i < buttonoptions.children.length; i++){

            buttonoptions.children[i].classList.remove('hidden');

            if("#" + buttonoptions.children[i].id === option){
                continue;
            }
            buttonoptions.children[i].classList.add('hidden');
        }
    });
});

function toggleProfile() {

    const profilemenu = document.getElementById('profile-menu');

    profilemenu.classList.toggle('hidden');
}

function toggleDuration(){

    const durationmenu = document.getElementById('duration-menu');

    durationmenu.classList.toggle('hidden');
}

function toggleMenu() {

    const menu = document.getElementById('menu')

    menu.classList.toggle('hidden');
}
