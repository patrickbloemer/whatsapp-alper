// EVENTO DE CONVERSÃO - ENVIO DE E-MAIL PELO CONTACT FORMS 7
document.addEventListener( 'wpcf7mailsent', function( event ) {
  gtag('event', 'Envio', { 'event_category': 'Contato', 'event_label': 'Formulário', 'value': 1 });
  alert('Recebemos o seu e-mail! Estaremos lhe respondendo assim que possÍvel :)');
}, false );
// FIM CONVERSÃO E-MAIL
// INÍCIO MEDIA QUERY
function myFunctionAPI(x) {
  if (x.matches) { // If media query matches
    setTimeout(function(){
      fechar_api_contato();
    }, 0);
  } else {
    setTimeout(function(){
      show_api_contato();
    }, 0);
    function show_api_contato(){
      document.getElementById('floating-card').style.right = '0px';
      document.getElementById('floating-btn-close').style.right = '15px';
    }
  }
}
var x = window.matchMedia("(max-width: 599px)")
myFunctionAPI(x) // Call listener function at run time
x.addListener(myFunctionAPI) // Attach listener function on state changes
/*FIM MEDIA QUERY*/
// FECHA A API
function fechar_api_contato(){
  document.getElementById('floating-card').style.right = '-500px';
  document.getElementById('floating-btn-close').style.right = '-85px';
  document.getElementById('floating-btn-open').style.right = '15px';
  document.getElementById('floating-message').style.right = '120px';
  document.getElementById('floating-arrow').style.right = '106px';
}
// ABRIR A API
function abrir_api_contato(){
  document.getElementById('floating-card').style.right = '0px';
  document.getElementById('floating-card').style.display = 'block';
  document.getElementById('floating-btn-open').style.right = '-85px';
  document.getElementById('floating-btn-close').style.right = '15px';
  document.getElementById('floating-message').style.right = '-200px';
  document.getElementById('floating-arrow').style.right = '-45px';
}
// FECHA SIDEBAR E-MAIL
function fechar_sidebar_email(){
  document.getElementById('api_contato_sidebar_email').style.right = '-315px';
  document.getElementById('pelicula_sidebar_email').style.display = 'none';
  abrir_api_contato();
}
// ABRIR SIDEBAR E-MAIL
function abrir_sidebar_email(){
  document.getElementById('api_contato_sidebar_email').style.right = '0px';
  document.getElementById('pelicula_sidebar_email').style.display = 'block';
  fechar_api_contato();
}
// TROCA ÍCONES DO BOTÃO FLUTUANTE
function change_icons(){
  if(document.getElementById("iconID").className=="fa fa-whatsapp"){
    document.getElementById("iconID").className = "fa fa-envelope-o";
  }else if(document.getElementById("iconID").className=="fa fa-envelope-o"){
    document.getElementById("iconID").className = "fa fa-phone";
  }else if(document.getElementById("iconID").className=="fa fa-phone"){
    document.getElementById("iconID").className = "fa fa-whatsapp";
  }
}
//TROCA OS ÍCONES DO BOTÃO FLUTUANTE A CADA 1s
window.setInterval("change_icons()", 1000);
