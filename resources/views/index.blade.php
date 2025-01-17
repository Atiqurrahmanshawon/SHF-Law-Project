@extends('master')

@section('title')
    index
@endsection

@section('content')


<section class="bg-displaced-wrap">
        <div class="bg-displaced-body">
          <div class="container">
            <div class="inset-xl-left-70 inset-xl-right-70">
              <article class="box-cart bg-ebony-clay">
                <div class="box-cart-image">
                <img src="{{asset('Frontend')}}/assets/images/home-about1.jpg" alt="" width="342" height="338"/>
                </div>
                <div class="box-cart-body">
                  <blockquote class="blockquote-complex blockquote-complex-inverse">
                    <h3>About Us</h3>
                    <p>
                      <q>When you place your case in the hands of our lawyers and paralegals, you are placing your case in the hands of professionals who are committed to achieving the best possible outcome.</q>
                    </p>
                    <div class="quote-footer">
                      <cite>Ryan Emberson</cite><small>CEO at LawExpert</small>
                    </div>
                  </blockquote>
                  <div class="button-wrap inset-md-left-70"><a class="button button-responsive button-medium button-primary-outline-v2" href="#">Request a Free Consultation</a></div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="bg-displaced bg-image" style="background-image: url({{asset('Frontend')}}/assets/images/home-about-background.jpg);"></div>
      </section>

   
      <section class="section parallax-container bg-black" data-parallax-img="{{asset('Frontend')}}/assets/images/home-about2.jpg">
        <div class="parallax-content">
          <div class="section-50 section-md-90">
            <div class="container">
              <div class="row row-40">
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-group"></span>
                    <div class="text-large counter">1450</div>
                    <p class="box-header">Happy Clients</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-scales"></span>
                    <div class="text-large counter">23</div>
                    <p class="box-header">Years of Experience</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg-smaller icon-primary mercury-icon-partners"></span>
                    <div class="text-large counter counter-percent">98</div>
                    <p class="box-header">Successful Cases</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="box-counter box-counter-inverse"><span class="novi-icon icon icon-lg icon-primary mercury-icon-case"></span>
                    <div class="text-large counter">7500</div>
                    <p class="box-header">Personal Injury Cases</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section-66 section-md-90 section-xl-bottom-100">
        <div class="container">
          <h3 class="text-center">Testimonials</h3>
          <div class="owl-carousel owl-spacing-1 owl-nav-classic owl-style-minimal" data-autoplay="true" data-items="1" data-md-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-dots-each="1">
            <div class="item">
              <blockquote class="quote-bordered">
                <div class="quote-body">
                  <div class="quote-open">
                    <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                      <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                    </svg>
                  </div>
                  <div class="quote-body-inner">
                    <h6>One of The Most Ethical Lawyers I’ve Ever Known...</h6>
                    <p>
                      <q>I’ve never known another lawyer more prepared or focused.  John has the ability to dissect a case much like a skilled surgeon, with absolute calm.  Nothing seems to distract him from his goal on a case, which of course, makes him extremely tough to beat.</q>
                    </p>
                  </div>
                </div>
                <div class="quote-footer">
                  <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circle" src="{{asset('Frontend')}}/assets/images/lawyer-1.jpg" alt="" width="68" height="68"/>
                    </div>
                    <div class="unit-body">
                      <cite>Mark Wilson</cite>
                      <p class="text-primary">CFO, Wilson Ltd.</p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="quote-bordered">
                <div class="quote-body">
                  <div class="quote-open">
                    <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                      <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                    </svg>
                  </div>
                  <div class="quote-body-inner">
                    <h6>LawExpert is One of The Best...</h6>
                    <p>
                      <q>John Doe is one of those attorneys who has it all-talent and skill, compassion for his clients, and the ability to communicate well with anyone he meets. This is one of the best combinations for a trial attorney and he is one of the best.</q>
                    </p>
                  </div>
                </div>
                <div class="quote-footer">
                  <div class="unit unit-horizontal unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circle" src="{{asset('Frontend')}}/assets/images/lawyer-2.jpg" alt="" width="68" height="68"/>
                    </div>
                    <div class="unit-body">
                      <cite>Amanda Eberson</cite>
                      <p class="text-primary">CEO, Eberson Co.</p>
                    </div>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>


@endsection



