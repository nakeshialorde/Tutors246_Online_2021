
@extends('layouts.app')
@include('inc.navbar')
@section('content')
<style>
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
  col-sm-3,
{
position:relative;
width:100%;
padding-right:15px;
padding-left:15px
}


.main-title {
   position: absolute;
   margin: 0;
   padding: 0;
   color: #000;
   text-align: center;
   top: 50%;
   left: 50%;
   -webkit-transform: translate3d(-50%, -50%, 0);
   transform: translate3d(-50%, -50%, 0);
}

.demo .main-title {
   text-transform: uppercase;
   font-size: 4.2em;
   letter-spacing: 0.1em;
   
}

.main-title .thin {
   font-weight: 200;
}

@media only screen and (max-width: 768px) {
   .demo .main-title {
      font-size: 3em;
   }
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans);
 

.jumbotron{
  background-color: beige;
    height: auto;
    opacity: 0.8;
}

       body{
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('https://images.pexels.com/photos/3787308/pexels-photo-3787308.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }
    
    .panel2
    {
        background-color: white;
        width: 100% auto !important;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 50px;
    }
    li{
        list-style-type: none;
        font-weight: 400;
        font-size: 15px;
    }
    </style>
    

 <!--<script>alert("Welcome to our online mathematics course, if you require additional assistance feel free to schedule a home or on-line tutor!") </script>-->

<div class="jumbotron">
  <p class="main-title"><span class="thin">
  <p class="main-title"><center><span class="thin">
  <font size="32"><b>Course</span> Index</b></font></p>
  <img src="https://static.thenounproject.com/png/30441-200.png" height="50px" width="50px" />
      <p><b> General Objectives</b> </p> 
    <ul> 
        <li>On completion of this Section, students should:</li>
        <li>Be aware of the importance of accuracy in computation; </li>
        <li>Appreciate the need for numeracy in everyday life; </li>
        <li>Demonstrate the ability to make estimates fit for purpose; </li>
        <li>Understand and appreciate the decimal numeration system; </li>
        <li>Appreciate the development of different numeration systems; </li>
        <li>Demonstrate the ability to use rational approximations of real numbers;</li> 
        <li>Demonstrate the ability to use number properties to solve problems; and, </li>
        <li>Develop the ability to use patterns, trends and investigative skills. </li>
      </ul>
</div>
      
<br clear="all"><br clear="all">
<div class="container">
<div class="panel2">
<div class="row">
						<div class="col-sm-3">
							<a href="/setsofnumbers" title="name" rel="title2">
						    <div class="view view-first">
                         <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/33.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="/setsofnumbers">1 - Sets of numbers</a></h3>
							<p class="service_desc">Natural numbers, whole numbers, integers , rational numbers, irrational numbers, real numbers, inclusion relations, sequences of numbers, factors and multiples, square numbers, even numbers, odd numbers, prime numbers and composite numbers. </p>
						</div>

						<div class="col-sm-3">
							<a href="/powers" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/16.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="/powers">2 - Powers of real numbers </a></h3>
							<p class="service_desc">Squares, square roots, cubes and cube roots.</p>
						</div>
                          
						<div class="col-sm-3">
                           <a href="/basicoperations" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/17.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="/basicoperations">3 - Four basic operations </a></h3>
							<p class="service_desc">Addition, multiplication, subtraction and division of whole numbers; order of operations.</p>
						</div>

						<div class="col-sm-3">
                                                    <div class="view view-first">
                        <a href="/fractions"><img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/23.jpg?raw=true" class="img-responsive" alt=""/></a>                                                                        
                                                      <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="/fractions">4 - Fractions, percents and decimals</a></h3>
							<p class="service_desc">Conversion of fractions to decimals and percents, conversion of decimal to fractions and percents, conversion of percents to decimals and fractions. </p>
						</div>
				        <div class="clearfix"> </div>
	           </div>

                        <div class="row">

						<div class="col-sm-3">
							<a href="images/s7.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/15.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="#">5 - Factors and multiples  </a></h3>
							<p class="service_desc">Positive and negative factors of an integer. </p>
						</div>
						
						<div class="col-sm-3">
							<a href="img/15.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/27.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="#">6 - H.C.F. or L.C.M.</a></h3>
							<p class="service_desc">Highest common factors and lowest common multiples.</p>
						</div>
						
						<div class="col-sm-3">
							<a href="img/10.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/31.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="#">7 - Value of a digit of a numeral in a given base</a></h3>
							<p class="service_desc">Place value and face value of numbers in bases 2, 4, 8, and 10. </p>
						</div>
						
						<div class="col-sm-3">
							<a href="images/s11.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/02.jpg?raw=true" class="img-responsive" alt=""/>
                            <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="#">8 - Convert from one set of units to another</a></h3>
							<p class="service_desc">Conversion using conversion scales, converting within the metric scales, 12-hour and 24-hour clock. </p>
						</div>
				        <div class="clearfix"> </div>
	         
      
						<div class="col-sm-3">
							<a href="images/s2.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/01.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="#">9 - Significant figures and decimal places</a></h3>
							<p class="service_desc">1, 2 or 3 significant figures and 0, 1, 2 or 3 decimal places. </p>
						</div>
					
                    	<div class="col-sm-3">
							<a href="images/s3.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/30.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="#">10 - Properties of numbers and operations</a></h3>
							<p class="service_desc">Properties of operations such as closure, associativity, additive and multiplicative identities and inverses,  commutativity and distributivity. </p>
						</div>
					
                    	<div class="col-sm-3">
							<a href="img/03.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/06.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
		                      </div>
                             </div>
							</a>
							<h3><a href="#">11 - Rational number in scientific notation </a></h3>
							<p class="service_desc">Scientific notation.  For example 759000 = 7.59 × 10<sup>5</sup> </p>
						</div>
                       
                        <div class="col-sm-3">
                            <a href="images/s12.jpg" title="name" rel="title2">
                            <div class="view view-first">
                                <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/12.jpg?raw=true" class="img-responsive" alt=""/>                              <div class="mask">
                              </div>
                             </div>
                            </a>
                            <h3><a href="#">12 - Fractions and percentages</a></h3>
                            <p class="service_desc">Fractions and percentages of a whole. The whole given a fraction or percentage. Comparing two quantities using fractions and percentages. </p>
                        </div>
                        
                       <div class="clearfix"> </div>
           
                        <div class="col-sm-3">
                            <a href="images/s12.jpg" title="name" rel="title2">
                            <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/05.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
                              </div>
                             </div>
                            </a>
                            <h3><a href="#">13 - Sequences </a></h3>
                            <p class="service_desc">Derive an appropriate rule given the terms of a sequenc  </p>
                        </div>

                        <div class="col-sm-3 about-grid">
                            <a href="images/s12.jpg" title="name" rel="title2">
                            <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/18.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
                              </div>
                             </div>
                            </a>
                            <h3><a href="#">14 - Ratios </a></h3>
                            <p class="service_desc">Divide a quantity in a given ratio. Ratio, proportion of no more than three parts. Compare quantities.  </p>
                        </div>

                   <div class="col-sm-3">
                            <a href="images/s6.jpg" title="name" rel="title2">
                            <div class="view view-first">
                              <img src="https://github.com/nakeshialorde/Online_Course/blob/master/cxc_courses/CXC_MATHEMATICS/chapter1/img/25.jpg?raw=true" class="img-responsive" alt=""/>
                              <div class="mask">
                              </div>
                             </div>
                            </a>
                            <h3><a href="#">15 - Real numbers </a></h3>
                            <p class="service_desc">Rearranging a set of real numbers in ascending or descending order. For example 1.1, <sup>7</sup>/<sub> 2 </sub>,√2,1.45,𝜋  in ascending order is  1.1,√2,1.45,𝜋, <sup>7</sup>/<sub> 2 </sub>. </p>
                        </div>
                                             <div class="clearfix"> </div>

    </div>
    </div>

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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection