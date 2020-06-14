$(document).ready(function(){
		var widthx1 = document.body.clientWidth;
		$('.t-con').click(function(){
			if(widthx1 >= 1051 ){
				$('body, html').animate({
					scrollTop: '680px'
				}, 300);
			}
			else if(widthx1 >= 1001 && widthx1 <= 1050 ){
				$('body, html').animate({
					scrollTop: '660px'
				}, 300);
			}
			else if(widthx1 >= 971 && widthx1 <= 1000 ){
				$('body, html').animate({
					scrollTop: '630px'
				}, 300);
			}
			else if(widthx1 >= 901 && widthx1 <= 970 ){
				$('body, html').animate({
					scrollTop: '610px'
				}, 300);
			}
			else if(widthx1 >= 801 && widthx1 <= 900 ){
				$('body, html').animate({
					scrollTop: '580px'
				}, 300);
			}
			else if(widthx1 >= 701 && widthx1 <= 800 ){
				$('body, html').animate({
					scrollTop: '520px'
				}, 300);
			}
			else if(widthx1 >= 601 && widthx1 <= 700 ){
				$('body, html').animate({
					scrollTop: '480px'
				}, 300);
			}
			else if(widthx1 >= 501 && widthx1 <= 600 ){
				$('body, html').animate({
					scrollTop: '480px'
				}, 300);
			}
			else if(widthx1 >= 401 && widthx1 <= 500 ){
				$('body, html').animate({
					scrollTop: '550px'
				}, 300);
			}
			else if(widthx1 >= 351 && widthx1 <= 400 ){
				$('body, html').animate({
					scrollTop: '520px'
				}, 300);
			}
			else if(widthx1 >= 301 && widthx1 <= 350 ){
				$('body, html').animate({
					scrollTop: '510px'
				}, 300);
			}
			else if(widthx1 >= 280 && widthx1 <= 300 ){
				$('body, html').animate({
					scrollTop: '500px'
				}, 300);
			}else if(widthx1 <= 279){
				$('body, html').animate({
					scrollTop: '490px'
				}, 300);
			}
		});
/*
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
	*/

}); 
/*function mostrar(xd){
my_ajax({
tipo:"POST",
dato:"tipo="+xd,
url:"mostrar_TI.php",
respuesta:"mostraraqui",
});

}*/
function mostrar(xd){
	if(xd==1){
		$(".gestiona-1").css("display","block");
		$(".informa-1").css("display","none");
		$(".conecta-1").css("display","none");
		$(".asegura-1").css("display","none");
		$(".protege-1").css("display","none");		
	}else if(xd==2){
		$(".gestiona-1").css("display","none");
		$(".informa-1").css("display","block");
		$(".conecta-1").css("display","none");
		$(".asegura-1").css("display","none");
		$(".protege-1").css("display","none");
	}else if(xd==3){
		$(".gestiona-1").css("display","none");
		$(".informa-1").css("display","none");
		$(".conecta-1").css("display","block");
		$(".asegura-1").css("display","none");
		$(".protege-1").css("display","none");
	}
	else if(xd==4){
		$(".gestiona-1").css("display","none");
		$(".informa-1").css("display","none");
		$(".conecta-1").css("display","none");
		$(".asegura-1").css("display","block");
		$(".protege-1").css("display","none");
	}
	else if(xd==5){
		$(".gestiona-1").css("display","none");
		$(".informa-1").css("display","none");
		$(".conecta-1").css("display","none");
		$(".asegura-1").css("display","none");
		$(".protege-1").css("display","block");
	}
}