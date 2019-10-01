@extends('layouts.menu-course-curriculum')

@section('content')

<div class="course-sidebar">
  <!-- Image & Title -->
  <img class="course-image" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/p80Kxx3FR7medztw7Ccn">
  <h2>{{$course->name}}</h2>
  <!-- Course Progress -->
  <div class="course-progress">
    <div class="progressbar">
      <div class="progressbar-fill" style="min-width: 97%;"></div>
    </div>
    <div class="small course-progress">
      <span class="percentage">
        97%
      </span>
      COMPLETE
    </div>
  </div>
  <ul class="sidebar-nav">
    <!-- Sidebar Nav -->

    <li class="selected">
      <a href="/courses/532534" class="sidebar-nav-link">
        <span class="lecture-sidebar-icon">
          <i class="fa fa-list-alt"></i>
        </span>
        Course Curriculum
      </a>
    </li>


    <li class="">
      <a href="/courses/532534/author_bio" class="sidebar-nav-link">
        <span class="lecture-sidebar-icon">
          <i class="fa fa-user"></i>
        </span>
        Your Instructor
      </a>
    </li>

  </ul>
</div>


<div class="course-mainbar" style="display: block;">

  <!-- Meta tag for tracking lecture progress -->
  <meta id="lecture-completion-data" data-last-lecture-id="10371330" data-last-lecture-url="/courses/532534/lectures/10371330">

  <h2 class="section-title">
    Course Curriculum
  </h2>
  <div class="next-lecture-wrapper">
    <a class="btn btn-primary start-next-lecture" data-no-turbolink="true" href="/courses/532534/lectures/10371330">Start next lecture&nbsp;&nbsp;<span aria-hidden="true">›</span></a>
    <span class="next-lecture-name hidden-sm">
      Inner Circle Webinar

      (84:23)


    </span>
  </div>

  <!-- Lecture list on courses page (enrolled user) -->

  <div class="row">
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        Introduction ***Start Here***
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

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371838">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371838">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
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

        <li class="section-item completed unlocked-lecture" data-lecture-id="10385724">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10385724">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
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

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371384">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371384">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                How To Study This Course

                (3:59)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10385781">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10385781">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                What Is Trading

                (4:34)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493040">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493040">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                What Is Forex

                (6:15)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371886">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371886">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                What Are We Trading?

                (1:47)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371542">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371542">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Major Currencies

                (3:11)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371919">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371919">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Buying VS Selling

                (2:00)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493138">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493138">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                When Can You Trade Forex? (The 4 Major Markets)

                (4:20)


              </span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        Trade Set Up / Key Terms
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

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371967">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371967">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                What You Need To Trade

                (1:43)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10399129">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10399129">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-file-text"></i>
              </span>
              <span class="lecture-name">
                MetaTrader 4


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10399501">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10399501">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-file-text"></i>
              </span>
              <span class="lecture-name">
                TradingView


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493242">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493242">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                PIP

                (0:43)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493336">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493336">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Lot

                (1:19)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493532">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493532">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Bid and Ask Price

                (0:41)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493563">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493563">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Spread

                (0:47)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493634">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493634">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Demo Account

                (0:29)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493705">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493705">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Live Account

                (0:28)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493712">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493712">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Broker

                (0:46)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493755">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493755">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Commission

                (0:27)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493769">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493769">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                MT4 Full Walkthrough, Entering a Trade, How To Take Partial Profits

                (8:01)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493829">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493829">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Technical Analysis

                (1:17)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10371986">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371986">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                What The Market Is Made Of (Candlesticks)

                (3:13)


              </span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        Part 1
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

        <li class="section-item completed unlocked-lecture" data-lecture-id="10372027">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10372027">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Understanding Different Timeframes

                (2:24)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10493877">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10493877">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Different Market Phases Part 2

                (6:24)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10372053">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10372053">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Different Market Phases Part 1

                (2:21)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10494124">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10494124">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Uptrend Market Structure

                (7:09)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10494165">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10494165">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Downtrend Market Structure

                (3:55)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10494187">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10494187">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Consolidation

                (2:48)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10372068">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10372068">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Trendlines

                (5:07)


              </span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        Part 2
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

        <li class="section-item completed unlocked-lecture" data-lecture-id="10372079">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10372079">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Support &amp; Resistance

                (3:20)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="10372956">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10372956">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Combining Our Tools

                (2:51)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="9698860">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/9698860">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Learn the Wealth Building Formula

                (3:44)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="9699014">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/9699014">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Create

                (2:46)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="9699019">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/9699019">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Keep

                (2:44)


              </span>
            </div>
          </a>
        </li>

        <li class="section-item completed unlocked-lecture" data-lecture-id="9710579">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/9710579">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Multiply

                (3:26)


              </span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 course-section">
      <div class="section-title" data-release-date="" data-days-until-dripped="" data-is-dripped-by-date="" data-course-id="532534">
        <span class="section-lock">
          <i class="fa fa-lock"></i>&nbsp;
        </span>
        BONUS WEBINAR
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

        <li class="section-item incomplete next-lecture" data-lecture-id="10371330">
          <a class="item" data-no-turbolink="true" href="/courses/532534/lectures/10371330">
            <span class="status-container">
              <span class="status-icon">
                &nbsp;
              </span>
            </span>
            <div class="title-container">
              <div class="btn-primary btn-sm pull-right">
                Start
              </div>
              <span class="lecture-icon">
                <i class="fa fa-youtube-play"></i>
              </span>
              <span class="lecture-name">
                Inner Circle Webinar

                (84:23)


              </span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>

  <br>



</div>

@endsection
