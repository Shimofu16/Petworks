window.onscroll = () => {


    if (window.scrollY > 0) {
        document.getElementById('header').classList.add('active');
    } else {
        document.getElementById('header').classList.remove('active');
    }
}