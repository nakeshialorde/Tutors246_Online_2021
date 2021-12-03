
@extends('layouts.app')
@include('inc.navbar')
@section('content')
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Custom Theme files --><meta name="viewport" content="width=device-width, initial-scale=1"><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script><!--webfont-->
  <style type="text/css">
.button {
            background-color: #024457;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

            .button:hover {
                opacity: 1
            }
	</style>
	<style type="text/css">* {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
  box-sizing: border-box;
}

.accordion {
  margin: 0 0 30px;
  border: 1px solid #b8d7e0;
  border-bottom-color: #ababab;
  background-color: #fff;
  border-radius: 4px;
}

.accordion-header {
  background-color: #F6F1C2; 
  border-bottom: 1px solid #F6F1C2;  
  font-size: 1.5em;
}

.img responsive{
height: auto;
width: auto;
}
.accordion-active {
  background-color: #F9F2AC; 
}

.accordion dd {
  overflow: hidden;
  max-height: 0;
  padding-left: 1em;
  transition: max-height 1s ease-in-out;
  font-size: 1.125em;
  max-width: 40em;
}

.accordion .slide-up {
  transition: max-height 0.1s;
}

.accordion .active {
  display: block;
  max-height: 800px;
  padding: 1em;
}

.accordion dt {
  cursor: pointer;
  padding: .5em .75em;
}

.accordion dt:before {
  content: " \25B6";
  padding-right: .25em;
}

.accordion .accordion-active:before {
  content: " \25BE";
  padding-right: .5em;
}

.accordion .accordion-active:hover {
  cursor: default;
}

/* end accordion */
/* basic style */
.defin {
  font: 100%/1.5 AvenirNextCondensed-Regular, "Lucida Grande", Corbel, "Trebuchet Ms", sans-serif;
  margin: 0;
  padding: 2em 5% 0;
  color: #101718;
  background-color: #fff;
}

dt {
  font-family: AvenirNextCondensed-DemiBold, "Lucida Grande", Corbel, "Trebuchet Ms", sans-serif;
  color: #1f2a2e;
}
        .container{
            float: center;
            align-content: center;
        }

.progress
{
  margin-left: 100px;
  margin-right: 100px;
  color: white;
}
        .button {
            background-color: #024457;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

            .button:hover {
                opacity: 1
            }
  
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);

        ::-webkit-scrollbar {
            display: none;
        }

        ::-moz-scrollbar {
            display: none;
        }

        pagination{
            float: center;
        }  

.panel{
  background: white;
    opacity: 0.9;

}

        ol{
            padding-left: 50px;
        }
.set
{
   padding-right: 100px;
   padding-left: 100px;
font-size: 20px;
}

@keyframes implode {
  100% {
    transform: scale(0);
  }
}
    </style>
    
    <script>(function() {
  var button, contentCtr;

  button = document.querySelector(".cta");

  contentCtr = document.querySelector(".content-ctr");

  button.addEventListener("click", function() {
    var header;
    header = this.parentElement.parentElement;
    header.classList.toggle("active");
    return contentCtr.classList.toggle("active");
  });

  balapaCop("Material Scroll Animation", "#999");

}).call(this);
</script>

 <!--<script>alert("Welcome to our online mathematics course, if you require additional assistance feel free to schedule a home or on-line tutor!") </script>-->
<html lang="en" class="js-focus-visible">
<div align="center">
<div class="panel"><br /><br /> 
    <p class="set">
    <h1>3 - Four Basic Operations on Numbers</h1>
    <p style="font-size=20px">   There are four basic operations that can be performed on real numbers, these are addition, substraction, division and multiplication.</p>
    <h4>Order of Operation</h4>
    
    <img src="https://i.pinimg.com/originals/22/fa/f6/22faf60f2897f5e0742deb39f8cf96a8.png">
<br /><br /></div>
</div>

<section class="defin">
<dl class="accordion" id="accordion">
	<dt class="accordion-header"><b>Addition(&#43;)</b></dt>
	<dd> <h5>Finding the sum, increased by, more than, plus, added to, total (&#43;):</h5><br /> 1. When two positive numbers are added the result is positive. For example: 4 &#43; 4 = 8. <br />2. When two negative numbers are added the result is negative. For example:(&#8722;4) &#43; (&#8722;7) = (&#8722;11). <br/ >3. When a positive and a negative number is added the result is negative, and the addition turns to substraction. For exxample: (&#8722;9) &#43; (&#43;3) = &#8722;6. <br /> 4. Adding two numbers with different signs. Add: 27 &#43; (&#8722;13), that is 27 &#8722; 13 = 14.

<h5>Properties of Addition</h5>
        <ol>
            <li>Additive Identity Property: a &#43; 0 = 0 &#43; a = a. 0 is called the additive identity.</li>
            <li>Additive Inverse Property: a &#43; (&#8722;a) = (&#8722;a) &#43; a = 0</li>
            <li>Associative Property: (a &#43; b) &#43; c = a &#43; (b &#43; c)</li>
            <li>Commutative Property: a &#43; b = b &#43; a</li>
        </ol>          

    </dd>
    
	<dt class="accordion-header"><b>Subtraction (&#8722;)</b></dt>
	<dd><h5>Finding the difference, decreased by, subtracted from, less, minus (&#8722;):</h5> 
        <br />1. When we subtract a smaller number from a bigger number, the answer is positive, 19 &#8722; 17 = 2.
        <br />2. When we subtract a larger number from a smaller number, the answer is negative. 7 &#8722; 19 = − 2
        <br />3. Now let us subtract a negative number from a positive number: 23 &#8722; (&#8722;7): we add the absolute value of both numbers, so we get 23 &#43; 7 = 30
        <br />4. Subtract a negative number from a negative number: (&#8722;6) &#8722; (&#8722;9): this becomes &#8722;6 &#43; 9 = 3.
        <br /><h5>Properties of Subtraction</h5>
        <ol>
            <li>Identity Property: 7 &#43; 0 = 7.</li>
            <li>Inverse Property: a &#8722; b = b &#8722; a</li>
        </ol>  
    </dd>
	<dt class="accordion-header"><b>Divison (&#247;)</b></dt>
	<dd><h5>Finding the quotient (&#247;):</h5>
        1. Division is a short cut to subtraction, 12 &#247; 4 = 3 , the quotient is 3 because we can subtract 4 from 12 exactly 3 times. <br />
        2. We call the number being divided the dividend and the number dividing it the divisor. In this case, the dividend is 12 and the divisor is 4.<br />
        3. Division notation: <br />  <img src="https://raw.githubusercontent.com/nakeshialorde/Online-Courses/cf0b95c0f91d80ed61e75e313803ca3c65637c4e/Screen%20Shot%202020-06-14%20at%208.47.09%20PM.png"><br />
        <h5>Properties of Division</h5>
        <ol>
            <li>Divisive Identity Property: 20 &#247; 1 = 20. Any number divided by 1 remains the same. </li>
            <li>Zero Property: Any number divided by zero cannot be solved. a/0, 0 is undefined. In other words, we cannot divide by 0.Similarly, if zero is divided by any number the result or quotient will always be 0.</li>
        </dd>
	<dt class="accordion-header"><b>Multiplication (&#215;)</b></dt>
    <dd><h5>Finding the product (&#215;):</h5> 
        1. Multiplication is a short cut to adding, for example: 5 &#215; 2 = 5 &#43; 5 = 10.<br />
        2. The result of multiplying two negative numbers is positive. (&#8722;3) &#215; (&#8722;6) = &#43;18. <br /><br>
        <h5>Properties of Multiplication</h5>
        <ol>
        <li>Zero Factor Property: a &#215; 0 = 0 &#215; a = 0. </li>
            <li>Multiplicative Indentity Property: a &#215; 1 = 1 &#215; a = a. 1 is called the multiplicative identity.</li>
            <li>Associative Property: (a &#215; b)&#215;c = a&#215;(b &#215; c). </li>
            <li>Commutative Property: a &#215; b = b &#215; a.</li>
            
            
        </ol>
    </dd> 
	
</dl>


  <div align="center"><h2>Chapter Progress</h2></div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width:15%">
      15%
    </div>
  </div>
<br /><br />

    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination pg-blue">
    <li class="page-item">
      <a class="page-link" href="/powers" tabindex="-1">Previous</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="/setsofnumbers">1 </a>
    </li>
                <li class="page-item"><a class="page-link" href="/powers">2</a></li>
                <li class="page-item active"><a href="/basicoperations"class="page-link">3<span class="sr-only">(current)</span></a></li>
                <li class="page-item"><a class="page-link"  href="/fractions">4</a></li>
                <li class="page-item"><a class="page-link">5</a></li>
                <li class="page-item"><a class="page-link">6</a></li>
                <li class="page-item"><a class="page-link">7</a></li>
                <li class="page-item"><a class="page-link">8</a></li>
                <li class="page-item"><a class="page-link">9</a></li>
                <li class="page-item"><a class="page-link">10</a></li>
                <li class="page-item"><a class="page-link">11</a></li>
                <li class="page-item"><a class="page-link">12</a></li>
                <li class="page-item"><a class="page-link">13</a></li>
                <li class="page-item"><a class="page-link">14</a></li>
                <li class="page-item"><a class="page-link">15</a></li>
                <li class="page-item"><a class="page-link">16</a></li> 
                <li class="page-item"><a class="page-link">17</a></li> 
                <li class="page-item"><a class="page-link">18</a></li> 
                <li class="page-item"><a class="page-link">19</a></li> 
                <li class="page-item"><a class="page-link">20</a></li> 
                <li class="page-item"><a class="page-link">21</a></li>
                <li class="page-item"><a class="page-link">22</a></li>
                <li class="page-item"><a class="page-link">23</a></li>

    <li class="page-item ">
      <a class="page-link">Next</a>
    </li>
    </ul>
    </nav>
        </div>
            <br /><br />
    <p class="contin"><a class="btn btn-primary btn-lg" style="float:right" href="/fractions" role="button">Continue</a>
    </p><br /><br /><br />
        </section>



                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="/home">
                                        Home
                                    </a>
                                
                                <li>
                                    <a href="http://tutors246.com/">
                                        Tutors246
                                    </a>
                                
                                <li>
                                    <a href="http://tutors246.com/ourtutors.html">
                                        Our Tutors
                                    </a>
                                
                                <li>
                                    <a href="https://tutors246.wordpress.com/">
                                        Blog
                                    </a>
                                
                            </ul>
                        </nav>
                        <p class="copyright pull-right">
                            &copy;
                            <script>document.write(new Date().getFullYear())</script> <a href="https://tutors246.wordpress.com/">Tutors246</a>, Achieve Academic Success!
                        </p>
                    </div>
                </footer>



    
    <script type="text/javascript" >
/* fork of this thing: 
* http://jsfiddle.net/devinwalker/drpKm/3096/light/
* which is inspired by: https://css-tricks.com/snippets/jquery/simple-jquery-accordion/
*/
(function($) {
  //Show first panel
  $(".accordion > dd:first-of-type").addClass("active");
  //Add active class to first panel
  $(".accordion > dt:first-of-type").addClass("accordion-active");
  //Handle click function
  jQuery(".accordion > dt").on("click", function() {
    //this clicked panel
    $this = $(this);
    //the target panel content
    $target = $this.next();

    //Only toggle non-displayed
    if(!$this.hasClass("accordion-active")){
      //slide up any open panels and remove active class
      $this.parent().children("dd").addClass("slide-up");
      $this.parent().children("dd").removeClass("active");

      //remove any active class
      jQuery(".accordion > dt").removeClass("accordion-active");

      //add active class
      $this.addClass("accordion-active");
      //slide down target panel
      $target.addClass("active");
      $target.removeClass("slide-up");
    }

    return false;
  });

})(jQuery);
</script> 

<script>
$('.com-expand-holder').click(function(e){
  e.preventDefault();
  $(this).parent().toggleClass('active');
  $('.card-stuff').toggleClass('active');
}); 
 
$('.com1-expand-holder').click(function(e){
  e.preventDefault();
  $(this).parent().toggleClass('active');
  $('.card1-stuff').toggleClass('active');
}); 

$('.com2-expand-holder').click(function(e){
  e.preventDefault();
  $(this).parent().toggleClass('active');
  $('.card2-stuff').toggleClass('active');
}); 

$('.com3-expand-holder').click(function(e){
  e.preventDefault();
  $(this).parent().toggleClass('active');
  $('.card3-stuff').toggleClass('active');
}); 

function myFunction() {
    document.getElementById("panel").style.display = "block";
}
</script>

<script>
function exam() {
    document.getElementById("panel1").style.display = "block";
}
    $('li').click(function() {
  $(this).addClass('active').siblings().removeClass('active');
});
</script>
@endsection

