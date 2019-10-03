@extends('layouts.menu-course-lecture')

@section('content')


<style>

iframe{
  width: 100%;
  margin: 0 auto;
}
#video p {
  text-align: center;
}
</style>

<div class="course-sidebar lecture-page navbar-collapse navbar-sidebar-collapse collapse" id="courseSidebar" aria-expanded="false" style="height: 31px;">
  <h2 style="padding-bottom: 0px">Programme du cours</h2>
  <!-- Course Progress -->

  <div class="course-progress lecture-page is-at-top">
    <div class="progressbar">
      <div class="progressbar-fill" style="min-width: 97%;"></div>
    </div>
    <div class="small course-progress-percentage">
      <span class="percentage">
        97%
      </span>
      COMPLETE
    </div>
  </div>

  <!-- Lecture list on courses page (enrolled user) -->

  <div class="row lecture-sidebar">

    {{-- <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        Introduction ***Start Here***
      </div>
      <ul class="section-list">

        <li data-lecture-id="10371838" data-lecture-url="/courses/fast-start-trading-system/lectures/10371838" class="section-item completed unlocked-lecture next-lecture">
          <a class="item" data-no-turbolink="true" href="/courses/fast-start-trading-system/lectures/10371838" id="sidebar_link_10371838">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Welcome To The Course!

                (1:15)

              </span>
            </div>
          </a>
        </li>

        <li data-lecture-id="10385724" data-lecture-url="/courses/fast-start-trading-system/lectures/10385724" class="section-item completed unlocked-lecture">
          <a class="item" data-no-turbolink="true" href="/courses/fast-start-trading-system/lectures/10385724" id="sidebar_link_10385724">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Meet Your Instructor: Nikk Legend

                (5:12)

              </span>
            </div>
          </a>
        </li>
      </ul>
    </div> --}}
    @if($lesson->course->sections)
    @foreach($lesson->course->sections->sortBy('position') as $section)
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        {{$section->title}}
      </div>
      <ul class="section-list">
        @if($section->lessons)
        @foreach($section->lessons->sortBy('position') as $section_lesson)
        <li class="section-item incomplete">
          <a class="item" data-no-turbolink="true" href="/course/{{$section_lesson->course->slug}}/lessons/{{$section_lesson->slug}}" id="sidebar_link_10371330">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                {{$section_lesson->title ? $section_lesson->title : 'Nouvelle leçon'}}
              </span>
            </div>
          </a>
        </li>
        @endforeach
        @endif
      </ul>
    </div>
    @endforeach
    @endif
  </div>
</div>


<!-- Lecture Content -->
<div class="course-mainbar lecture-content">
  <!-- Meta tag for tracking lecture progress -->
  <meta id="lecture-completion-data" data-last-lecture-id="10371330" data-last-lecture-url="/courses/532534/lectures/10371330" data-is-completed="true" data-can-access-lecture="true" data-compliance-enabled="false" data-valid-for-completion="true">
  <h2 id="lecture_heading" class="section-title" data-lecture-id="10371838" data-next-lecture-id="10385724" data-lecture-url="/courses/532534/lectures/10371838" data-next-lecture-url="/courses/532534/lectures/10385724" ,=""
    data-previous-lecture-url="" data-previous-lecture-id="">
    <i class="fa fa-youtube-play"></i>
    &nbsp;
    {{$lesson->title}}
  </h2>

  <!-- Attachment Blocks -->

    <div id="video">
        {!!$lesson->video!!}
    </div>

  <div class="lecture-attachment lecture-attachment-type-text" id="lecture-attachment-21119459">
    <div class="attachment-data"></div>

    <div class="attachment-data"></div>
    {{-- <div class="lecture-text-container">
      <p></p>
      <p>Most traders have their attention on one thing. When to enter and exit a trade, which is very important.</p>
      <p>More important is each strategy individually and mastering each strategy. As you go through this course put your attention on each strategy individually and make sure you can apply it! </p>
      <p>When you have <strong style="color: rgb(37, 129, 53);">COMPLETED</strong> the course, I want to give you the opportunity to get a <strong>FREE 1-on-1 WEBINAR training</strong> with myself or one of my top coaches. This will be a screen
        sharing session where we focus directly on you and your progress. These&nbsp;visual hands on&nbsp;trainings have helped many students 10x their rate of learning and really boosted their confidence on the charts! </p>
      <p>To enter to win this webinar you <strong>MUST BE 100% completed with the course</strong> and receive your certificate of completion.&nbsp;</p>
      <p>Remember to <strong>click the blue “Complete and continue” button&nbsp;</strong>(below is a reference photo) as you complete each lecture so that when you are 100% done you get your certificate!</p>
      <p><img data-imageloader="" data-imageloader-src="https://www.filepicker.io/api/file/xiYAGEoSqSqp9P7ogYFm" style="max-width: 100%;"
          src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:1000/https://www.filepicker.io/api/file/xiYAGEoSqSqp9P7ogYFm" data-imageloader-current-size="1000" class="is-loaded"></p>
      <p><strong style="color: rgb(185, 57, 54);">Here are the rules / instructions to enter: </strong></p>
      <p>1. You have to be 100% complete with the course and receive your completion certificate!</p>
      <p>2. You will need to fill out this form:</p>
      <p><a href="https://thetradeacademy.wufoo.com/forms/win-a-free-1on1-webinar" target="_blank">https://thetradeacademy.wufoo.com/forms/win-a-free-1on1-webinar</a></p>
      <p>3. You will need a laptop. Since this is a webinar training, we need to be able to share screens with you.</p>
      <p>The winner will be notified via email or phone call weekly.</p>
      <p>Best of luck to you!</p>
      <p>Once you have read this lecture, go ahead and <strong>click the blue “Complete and continue” button </strong>and continue through the course!</p>
      <p class="ql-align-center"><strong>CUSTOMER SUPPORT INFORMATION</strong></p>
      <p>IF YOU HAVE ANY QUESTIONS ABOUT YOUR ACCOUNT PLEASE REACH OUT TO US.</p>
      <p>For technical questions relating to trading email Leo at <a href="mailto:leo@thetradeacademy.com" target="_blank">leo@thetradeacademy.com</a></p>
      <p>For account questions email our support team: happy@thetradeacademy.com</p>
      <p></p>
    </div> --}}
    <div class="lecture-text-container">
      <p></p>
      <p>{!!$lesson->full_text!!}</p>
      <p></p>
    </div>


  </div>


  <!-- Comments -->



  <div id="empty_box"></div>
  <!-- Scroll to current lecture link position in sidebar -->

</div>


@endsection
