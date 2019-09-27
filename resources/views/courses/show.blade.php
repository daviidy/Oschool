@extends('layouts.menu-course')

@section('content')


<div class="blocks-page blocks-page-course_sales_page " id="blocks-page-164508">

  <div class="course-block block hero odd-stripe" id="block-183303">
    <div class="course-top-row has-hero-image" style="background:url(&quot;/images/courses/logos/{{$course->logo}}&quot;) no-repeat center fixed;">
      <div class="black-overlay" style="opacity: 0.52;">&nbsp;</div>
      <div class="container">
        <div class="row">

          <div class="col-md-5 course-splash-media">
            <div class="img-rounded">
              <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://d2vvqscadf4c1f.cloudfront.net/0M5IR4vQQwFZONzqXdAS_The%20Foundations%20of%20Card%20Magic%20Course%20Thumbnail.png"
                alt="0m5ir4vqqwfzonzqxdas the%20foundations%20of%20card%20magic%20course%20thumbnail">
            </div>
          </div>
          <div class="col-md-6 course-header-container">
            <h1 class="course-title">
              {{$course->name}}
            </h1>
            <h2 class="course-subtitle">
              {{$course->subtitle}}
            </h2>

            <form accept-charset="UTF-8" action="/signin" class="sale_default" id="sale_default2" method="get">
              <input type="hidden" name="authenticity_token" value="pVRA1TV9i6aJ3KRPnzs+luQeNZAmaLfgTnC8167/bBu2+9ydKOjVrpatv+3GdUGcIcbLBN9bGoYhH1XLXmjKYg==">
              <input type="hidden" name="utf8" value="✓">
              <input type="hidden" name="course_id" value="7169" id="course_id">
              <input type="hidden" name="coupon_code" value="" id="coupon_code">
              <input type="hidden" name="school_domain" value="https://courses.52kards.com" id="school_domain">
              <input type="hidden" name="product_id" value="7141" id="product_id">
              <input type="hidden" name="user_src" value="teachable-examples" id="user_src">
              <button id="enroll-button-top" data-course-id="7169" class="btn btn-hg btn-primary btn-header-enroll" type="submit">
                <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;
                S'inscrire au cours
                {{-- <span class="default-product-price product_7141">$52</span> --}}
                <span class="coupon-price product_7141"></span>
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>

  </div>

  <div class="course-block block coupon_banner " id="block-183304">
    <div class="coupon-code-applied hidden">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">

            <div class="coupon-percent-text">
              <span class="coupon-percent"></span>
              off original price!<br>
            </div>
            <div class="coupon-invalid-text hidden">
              The coupon code you entered is expired or invalid, but the course is still available!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block description_with_share_icons even-stripe" id="block-183305">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs" style="">
        </div>
        <div class="col-xs-1 visible-xs"></div>
        <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-1 col-xs-10 course-description">
          <p>

          </p>
          <h2 style="text-align: center;"></h2>
          <h2 style="text-align: center;">Apropos du cours<br>
          </h2>
          <hr>
          <p style="text-align: center;">
            <span style="font-size: 18px;">
                {!!$course->description!!}
          </p>
          <p style="text-align: center;">
            <br>
          </p>
          <hr>
          <p></p>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block bio odd-stripe" id="block-183306">
    <div class="container">
      <div class="row">
        <div class="col-xs-1 visible-xs"></div>
        <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          <h2>
            L'instructeur
          </h2>
          <br>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 text-center">
            
            <img class="large-img-rounded img-responsive" src="/images/authors/{{$course->author->image}}" alt="{{$course->author->full_name}}">
              <div class="author-name">
                {{$course->author->full_name}}
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8">
              <p>
                {{$course->author->description}}
              </p>
              <p>
                <br>
              </p>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block curriculum even-stripe" id="block-183307">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <h2>
            Programme du cours
          </h2>
          <br>
          @if($course->sections)
          @foreach($course->sections->sortBy('position') as $section)
          <div class="row">
            <div class="col-sm-12 course-section">
              <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="7169">
                <span class="section-lock">
                  <i class="fa fa-lock"></i>&nbsp;
                </span>
                {{$section->title}}
                <div class="section-days-to-drip">
                  <div class="section-days-logged-in">
                    Available in
                    <span class="section-days-to-drip-number"></span>
                    days
                  </div>
                  <div class="section-days-logged-out">
                    <span class="section-days-to-drip-number"></span>
                    days
                    after you enroll
                  </div>
                </div>
              </div>
              <ul class="section-list">
                  @if($section->lessons)
                  @foreach($section->lessons->sortBy('position') as $lesson)
                <li class="section-item">
                  <a class="item" href="/courses/the-foundations-of-card-magic/lectures/124869">
                    <span class="lecture-icon">
                      <i class="fa fa-youtube-play"></i>
                    </span>
                    <div class="btn-primary btn-sm pull-right lecture-start">
                      Start
                    </div>
                    {{$lesson->title ? $lesson->title : 'Nouvelle leçon'}}
                  </a>
                </li>
                @endforeach
                @endif

              </ul>
            </div>
          </div>
          @endforeach
          @endif
          <br>
        </div>
      </div>
    </div>
  </div>


  <div class="course-block block faq odd-stripe" id="block-183309">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <h2>
            <i class="fa fa-question-circle"></i>
            Frequently Asked Questions
          </h2>
          <br>
          <div class="faq-question">
            When does the course start and finish?
          </div>
          <div class="faq-answer">
            The course starts now and never ends! It is a completely self-paced online course - you decide when you start and when you finish.
          </div>
          <div class="faq-question">
            How long do I have access to the course?
          </div>
          <div class="faq-answer">
            How does lifetime access sound? After enrolling, you have unlimited access to this course for as long as you like - across any and all devices you own.
          </div>
          <div class="faq-question">
            What's the difference between this and the 52Kards YouTube channel?
          </div>
          <div class="faq-answer">
            This course includes exclusive material that I do not teach on YouTube and provides a structured way to learn card magic most effectively and track your progress. Enrolling in the course also helps support the free content that I
            create for YouTube.
          </div>
          <div class="faq-question">
            Any more questions?
          </div>
          <div class="faq-answer">
            <p>
              Feel free to contact me at 52Kards@gmail.com if you have any other questions about this course.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block coupon_banner " id="block-183310">
    <div class="coupon-code-applied hidden">
      <div class="container">
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">

            <div class="coupon-percent-text">
              <span class="coupon-percent"></span>
              off original price!<br>
            </div>
            <div class="coupon-invalid-text hidden">
              The coupon code you entered is expired or invalid, but the course is still available!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block closing_letter even-stripe" id="block-183311">

    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <h2 style="text-align: center;">
            Testimonials
          </h2>
          <hr>
          <p>
            <i>"Hi Asad - I'm a serious magic hobbyist (and by day a director/writer/actor of movies and TV shows) and I've scoured many sources and your style of teaching is by far my favorite ... I'm wanting to put some time (and money) into
              taking my skills to the next level, and I want you to be my teacher!" </i>- David Wain
          </p>
          <p>
            <br>
          </p>
          <p>
            <i>"I'm a 44 year old family doctor who has always loved sleight of hand but have never had the time to invest in learning…only watching. Now I'm learning. It's a great and inexpensive hobby and it's even become a great way to spend
              time with my 4 children. Of all the sources I've used so far, I've enjoyed yours the most. Concise yet thorough. Keep up the great work. I really appreciate your help." - </i>Mike
          </p>
          <p>
            <br>
          </p>
          <p>
            <i>"I am such a huge fan of your content because it is so much different than every other teacher I've seen online. I've been doing card magic for about 6 or 7 years now and I felt like I hit a wall in my progression. I'm in college
              so I don't have a lot of time to study techniques shown in a book. Your videos were so instrumental in progressing my skills and expanding my arsenal in an extremely speedy fashion. Your explanations are also very clear and concise
              and I love you always focus on the nitty gritty, considering that's where a lot of card instructors lack in their explanations."</i> - Chris Wheatley<br>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="course-block block checkout odd-stripe" id="block-183312">
    <div class="checkout-cta">
      <h2>

        Get started now!
      </h2>
    </div>
    <div class="container" id="pricing-options">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
          <form action="/purchase" class="new_sale" id="new_sale" method="get">
            <input type="hidden" name="utf8" value="✓">
            <input type="hidden" name="course_id" value="7169" id="course_id">
            <input type="hidden" name="coupon_code" value="" id="coupon_code">
            <input type="hidden" name="referring_page_id" value="164508" id="referring_page_id">
            <input type="hidden" name="user_src" value="teachable-examples" id="user_src">
            <div class="col-sm-12 product-list hidden" data-toggle="buttons">
              <label class="btn checkout-button-group product_7141 active">
                <div class="col-sm-1 product-radio"><input type="radio" name="product_id" id="product_id_7141" value="7141" checked="">
                  <div class="custom-radio">
                    <div class="selected">&nbsp;</div>
                  </div>
                </div>
                <div class="col-sm-9 product-details">
                  <h3 class="product-name">
                    Basic Enrollement
                    <span class="discount product_7141 hidden">
                      <span class="coupon-percent"></span>
                      Coupon Discount
                    </span>
                  </h3>
                  <p class="description">
                    Lifetime access to The Foundations of Card Magic course
                    <br>
                  </p>
                  <div class="detailed-description">
                    <p>
                      Over 60 bite sized lessons and 4.5 hours of clear video instruction. Instantly access the course on any of your devices.
                    </p>
                  </div>
                </div>
                <div class="col-sm-2 product-price">
                  <span class="default-product-price product_7141">$52</span>&nbsp;
                  <span class="coupon-price product_7141"></span>
                  <br>
                </div>
              </label>
            </div>
            <div class="row">
              <center>
                <br>
                <button id="enroll-button" data-course-id="7169" class="btn btn-hg btn-primary btn-enroll" name="commit" type="submit" value="Enroll in Course for $52">
                  <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;
                  Enroll in Course for
                  <span class="default-product-price product_7141">$52</span>
                  <span class="coupon-price product_7141"></span>
                </button>
                <br>
              </center>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection
