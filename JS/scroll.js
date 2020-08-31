$(function(){
    var header = $('header');
    var a = $('.service1'); //헤더를 변수에 넣기 
    var img = $('.alogo');
    var page = $('.section2, .terms_section, .inputinner'); //색상이 변할 부분
    var pageOffsetTop = page.offset().top; //색상 변할 부분의 top값 구하기
    $(window).resize(function(){ //반응형을 대비하여 리사이즈시 top값을 다시 계산
      pageOffsetTop = page.offset().top;
    });
      
    $(window).on('scroll', function(){
      if($(window).scrollTop() >= pageOffsetTop) { // 스크롤이 page보다 밑에 내려가면
        header.addClass('down');
        a.addClass('adown');
        img.addClass('logo'); // 로고 클래스 히든css 추가
        
         //클래스 추가
      } else { // 스크롤 올릴 때
        header.removeClass('down');
        a.removeClass('adown'); //클래스 제거
        img.removeClass('logo'); // 로고 클래스 css 제거

      }
    });
  });
  