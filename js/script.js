function displogin() {
    document.querySelector('.login-form').style.visibility = 'visible';
    document.querySelector('header').style.cssText = 'background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("../code/css/imgs/header/header.jpg");';
    document.querySelector('.features').style.display = 'none';
    document.querySelector('.query-form1').style.display = 'none';
}
function closelogin() { 
    document.querySelector('.login-form').style.visibility = 'hidden';
    document.querySelector('header').style.cssText = 'background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("../code/css/imgs/header/header.jpg");';
    document.querySelector('.features').style.display = 'block';
    document.querySelector('.query-form1').style.display = 'block';
}
