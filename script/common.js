/* 화면 스크롤 동작시 상단헤더에 .h_act적용하기 */




//1. 자바스크립트로 구현하기

// const h = document.getElementById('header');

// //2. 화면 스크롤 이벤트 = window scroll
// window.addEventListener('scroll',function(){
//   let sPos = window.scrollY;
//   if(sPos >= 1){
//     h.classList.add('h_act');
//   }else{
//     h.classList.remove('h_act');
//   }

// });

//2. 제이쿼리로 구현하기
//메뉴변수
let nav = $('#m_nav > ul > li');

//메뉴 클릭시 해당 아이디값을 찾아서 해당 section영역을 상단으로 scroll한다
nav.click(function(e){
  e.preventDefault(); //페이지 새로고침 방지
  
  let i = $(this).index();

  console.log(i);
  //$('html,body').animate({scrollTop:'0px'},500);
  //두번째 방법
  let id_name = $(this).find('a').attr('href');
  console.log(id_name);

  //해당 id section을 선택하여 화면 위로 올리기
  let offTop = $(id_name).offset().top;

  $('html, body').animate({scrollTop:offTop}, 500);

});

$(document).ready(function(){
  const h = $('header');

  //헤더에 마우스 오버시 h_act적용하기
  $('header').mouseenter(function(){
    $('header').addClass('h_act');
    $('header h1 img').attr('src','./images/logo-casper_black.png');
  });

  //헤더에 마우스 아웃시 h_act제거
  $('header').mouseleave(function(){ //마우스를 빼는 경우
    if($(window).scrollTop()<=1){
      $('header').removeClass('h_act'); 
      $('header h1 img').attr('src','./images/logo-casper-white.png');
    }


  });




  $(window).scroll(function(){
    let sPos = $(this).scrollTop(); //스크롤값이 1이상이 ㄹ경우 아래내용 실행
    if(sPos>=1){
      h.addClass('h_act');
      $('header h1 img').attr('src','./images/logo-casper_black.png');
    }else{
      h.removeClass('h_act');
      $('header h1 img').attr('src','./images/logo-casper-white.png');
    }

  
  });


});



