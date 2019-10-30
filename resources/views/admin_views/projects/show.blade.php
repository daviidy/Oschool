@extends('layouts.menu-project')

@section('content')

<main class="container">
  <div class="xl:px-3">
    <div class="xl:px-5">
      <div>
        <div class="overlay"></div>
        <div class="modalWrapper" style="left: 453px;">
          <div id="modal" class="modal rounded-t-lg ">
            <div class="modal-cover rounded-t-lg ">
              <div class="coverWrapper rounded-t-lg rounded-b-none">
                <div class="cover rounded-t-lg rounded-b-none" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/82215914-053d-4123-ad79-ab8d36589712.jpg&quot;);"></div>
              </div>
              <div class="modal-coverButton">
                <div class="button button--round"><i class="icon icon-window-close" aria-hidden="true"></i></div>
              </div>
            </div>
            <div class="modal-contents">
              <div class="modal-headline">
                <div class="logo" style="background-image: url(&quot;http://platform.mindvalley.com/images/facebook-logo-fcffd6148ae561d4eaba1bf6dfb9430a.png?vsn=d&quot;);"></div>
                <h3 class="text-2xl ml-2 mt-1">Supercerveau</h3>
              </div>
              <div class="modal-input"><span class="mb-2">Passphrase for first time login.</span>
                <div class="relative"><input type="text" class="input input--withButton text-center">
                  <div class="button button--input"><i class="icon icon-copy" aria-hidden="true"></i></div>
                </div>
              </div>
              <div class="modal-button"><a href="https://www.facebook.com/groups/mindvalley.supercerveau/" class="button button--primary w-full">Go To Community</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar">
        <div class="navbar-container">
          <div class="navbar-leftNavigation"><a href="http://platform.mindvalley.com/quests/supercerveau" class="navbar-link"><i class="icon icon-long-arrow-left" aria-hidden="true"></i> <span class="navbar-linkText">Back To days</span></a>
          </div>
          <div class="navbar-title">
            day 22
          </div>
          <div class="navbar-rightNavigation"><button class="navbar-button"><i class="icon icon-users" aria-hidden="true"></i> <span>Go To Community</span></button></div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="p-0 md:px-5">
      <div class="bg-white md:rounded-lg p-3 pt-16 md:p-8 md:pt-24 min-h-screen">
        <div class="sectionWrapper sectionWrapper--noTopPadding">
          <section class="section section--header">
            <h2 class="section-header">{{$project->title}}</h2>
          </section>
        </div>
        <div>
          <section class="sectionWrapper sectionWrapper--video has-markers is-first">
            <div class="coverContainer coverContainer--video overflow-x-hidden">
              <div id="video_section_10865" data-quest-id="81" data-content-id="2972" data-asset-id="19909" data-asset-overmind-id="" class="video">
                <div class="video-js videoJs vjs-big-play-centered w-3/5 rounded-tl-lg vjs-paused vjs-fluid video_10865-dimensions vjs-controls-enabled vjs-workinghover vjs-v7 vjs-user-active"
                  poster="https://assets.mindvalley.com/api/v1/assets/41bb5927-7382-41e3-9158-7daa77e12957.jpg" id="video_10865"
                  data-setup="{ &quot;preload&quot;: &quot;auto&quot;, &quot;playbackRates&quot;: [0.5, 1, 1.25, 1.5, 2], &quot;fluid&quot;: true }" crossorigin="anonymous" lang="en" role="region" aria-label="Video Player"><video
                    crossorigin="anonymous" data-setup="{ &quot;preload&quot;: &quot;auto&quot;, &quot;playbackRates&quot;: [0.5, 1, 1.25, 1.5, 2], &quot;fluid&quot;: true }" id="video_10865_html5_api"
                    poster="https://assets.mindvalley.com/api/v1/assets/41bb5927-7382-41e3-9158-7daa77e12957.jpg" class="vjs-tech" tabindex="-1" preload="auto" src="blob:https://platform.mindvalley.com/15995660-2481-4012-880e-a86179eb215b"
                    __idm_id__="885493761">
                    <source src="https://assets.mindvalley.com/api/v1/assets/633f3610-dd8f-4cb5-b7c9-ad58086b8e07.m3u8" type="application/x-mpegURL">
                    <source src="https://assets.mindvalley.com/api/v1/assets/d807ade2-2d9f-46d4-b163-ad08bcb8fd6a.mp4" type="video/mp4"></video>
                  <div class="vjs-poster" tabindex="-1" aria-disabled="false" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/41bb5927-7382-41e3-9158-7daa77e12957.jpg&quot;);"></div>
                  <div class="vjs-text-track-display" aria-live="off" aria-atomic="true"></div>
                  <div class="vjs-loading-spinner" dir="ltr"><span class="vjs-control-text">Video Player is loading.</span></div><button class="vjs-big-play-button" type="button" title="Play Video" aria-disabled="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Play Video</span></button>
                  <div class="vjs-control-bar" dir="ltr"><button class="vjs-play-control vjs-control vjs-button" type="button" title="Play" aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                        class="vjs-control-text" aria-live="polite">Play</span></button>
                    <div class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal"><button class="vjs-mute-control vjs-control vjs-button vjs-vol-3" type="button" title="Mute" aria-disabled="false"><span aria-hidden="true"
                          class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Mute</span></button>
                      <div class="vjs-volume-control vjs-control vjs-volume-horizontal">
                        <div tabindex="0" class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal" role="slider" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-label="Volume Level" aria-live="polite"
                          aria-valuetext="100%">
                          <div class="vjs-volume-level"><span class="vjs-control-text"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="vjs-current-time vjs-time-control vjs-control"><span class="vjs-control-text">Current Time&nbsp;</span><span class="vjs-current-time-display" aria-live="off">0:00</span></div>
                    <div class="vjs-time-control vjs-time-divider">
                      <div><span>/</span></div>
                    </div>
                    <div class="vjs-duration vjs-time-control vjs-control"><span class="vjs-control-text">Duration&nbsp;</span><span class="vjs-duration-display" aria-live="off">20:21</span></div>
                    <div class="vjs-progress-control vjs-control">
                      <div tabindex="0" class="vjs-progress-holder vjs-slider vjs-slider-horizontal" role="slider" aria-valuenow="0.00" aria-valuemin="0" aria-valuemax="100" aria-label="Progress Bar" aria-valuetext="0:00 of -:-">
                        <div class="vjs-load-progress" style="width: 0.328474%;"><span class="vjs-control-text"><span>Loaded</span>: 0%</span>
                          <div style="left: 1.99468%; width: 98.0053%;"></div>
                        </div>
                        <div class="vjs-mouse-display">
                          <div class="vjs-time-tooltip"></div>
                        </div>
                        <div class="vjs-play-progress vjs-slider-bar" style="width: 0%;">
                          <div class="vjs-time-tooltip">0:00</div><span class="vjs-control-text"><span>Progress</span>: 0%</span>
                        </div>
                      </div>
                    </div>
                    <div class="vjs-live-control vjs-control vjs-hidden">
                      <div class="vjs-live-display" aria-live="off"><span class="vjs-control-text">Stream Type&nbsp;</span>LIVE</div>
                    </div>
                    <div class="vjs-remaining-time vjs-time-control vjs-control"><span class="vjs-control-text">Remaining Time&nbsp;</span><span class="vjs-remaining-time-display" aria-live="off">-20:21</span></div>
                    <div class="vjs-custom-control-spacer vjs-spacer ">&nbsp;</div>
                    <div class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button"><button class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button" type="button" aria-disabled="false"
                        title="Playback Rate" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Playback Rate</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">2x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">1.5x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">1.25x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">1x</span><span class="vjs-control-text" aria-live="polite">,
                              selected</span></li>
                          <li class="vjs-menu-item" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="false"><span class="vjs-menu-item-text">0.5x</span><span class="vjs-control-text" aria-live="polite"></span></li>
                        </ul>
                      </div>
                      <div class="vjs-playback-rate-value">1x</div>
                    </div>
                    <div class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                        aria-disabled="false" title="Chapters" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Chapters</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                        </ul>
                      </div>
                    </div>
                    <div class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                        aria-disabled="false" title="Descriptions" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                          aria-live="polite">Descriptions</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">descriptions off</span><span class="vjs-control-text"
                              aria-live="polite">, selected</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                        aria-disabled="false" title="Captions" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Captions</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item vjs-texttrack-settings" tabindex="-1" role="menuitem" aria-disabled="false"><span class="vjs-menu-item-text">captions settings</span><span class="vjs-control-text" aria-live="polite">, opens
                              captions settings dialog</span></li>
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">captions off</span><span class="vjs-control-text"
                              aria-live="polite">, selected</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden"><button class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button" aria-disabled="false"
                        title="Audio Track" aria-haspopup="true" aria-expanded="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text" aria-live="polite">Audio Track</span></button>
                      <div class="vjs-menu">
                        <ul class="vjs-menu-content" role="menu">
                          <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemcheckbox" aria-disabled="false" aria-checked="true"><span class="vjs-menu-item-text">aac_160</span><span class="vjs-control-text"
                              aria-live="polite">, selected</span></li>
                        </ul>
                      </div>
                    </div><button class="vjs-fullscreen-control vjs-control vjs-button" type="button" title="Fullscreen" aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                        aria-live="polite">Fullscreen</span></button><button class="vjs-control vjs-button vjs-markers-button" type="button" aria-disabled="false"><span class="vjs-markers-label">Jump To</span></button>
                  </div>
                  <div class="vjs-error-display vjs-modal-dialog vjs-hidden " tabindex="-1" aria-describedby="video_10865_component_405_description" aria-hidden="true" aria-label="Modal Window" role="dialog">
                    <p class="vjs-modal-dialog-description vjs-control-text" id="video_10865_component_405_description">This is a modal window.</p>
                    <div class="vjs-modal-dialog-content" role="document"></div>
                  </div>
                  <div class="vjs-modal-dialog vjs-hidden  vjs-text-track-settings" tabindex="-1" aria-describedby="video_10865_component_411_description" aria-hidden="true" aria-label="Caption Settings Dialog" role="dialog">
                    <p class="vjs-modal-dialog-description vjs-control-text" id="video_10865_component_411_description">Beginning of dialog window. Escape will cancel and close the window.</p>
                    <div class="vjs-modal-dialog-content" role="document">
                      <div class="vjs-track-settings-colors">
                        <fieldset class="vjs-fg-color vjs-track-setting">
                          <legend id="captions-text-legend-video_10865_component_411">Text</legend><label id="captions-foreground-color-video_10865_component_411" class="vjs-label">Color</label><select
                            aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411">
                            <option id="captions-foreground-color-video_10865_component_411-White" value="#FFF"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-White">White</option>
                            <option id="captions-foreground-color-video_10865_component_411-Black" value="#000"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Black">Black</option>
                            <option id="captions-foreground-color-video_10865_component_411-Red" value="#F00"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Red">Red</option>
                            <option id="captions-foreground-color-video_10865_component_411-Green" value="#0F0"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Green">Green</option>
                            <option id="captions-foreground-color-video_10865_component_411-Blue" value="#00F"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Blue">Blue</option>
                            <option id="captions-foreground-color-video_10865_component_411-Yellow" value="#FF0"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Yellow">Yellow</option>
                            <option id="captions-foreground-color-video_10865_component_411-Magenta" value="#F0F"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Magenta">Magenta</option>
                            <option id="captions-foreground-color-video_10865_component_411-Cyan" value="#0FF"
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-color-video_10865_component_411 captions-foreground-color-video_10865_component_411-Cyan">Cyan</option>
                          </select><span class="vjs-text-opacity vjs-opacity"><label id="captions-foreground-opacity-video_10865_component_411" class="vjs-label">Transparency</label><select
                              aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-opacity-video_10865_component_411">
                              <option id="captions-foreground-opacity-video_10865_component_411-Opaque" value="1"
                                aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-opacity-video_10865_component_411 captions-foreground-opacity-video_10865_component_411-Opaque">Opaque</option>
                              <option id="captions-foreground-opacity-video_10865_component_411-SemiTransparent" value="0.5"
                                aria-labelledby="captions-text-legend-video_10865_component_411 captions-foreground-opacity-video_10865_component_411 captions-foreground-opacity-video_10865_component_411-SemiTransparent">Semi-Transparent
                              </option>
                            </select></span>
                        </fieldset>
                        <fieldset class="vjs-bg-color vjs-track-setting">
                          <legend id="captions-background-video_10865_component_411">Background</legend><label id="captions-background-color-video_10865_component_411" class="vjs-label">Color</label><select
                            aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411">
                            <option id="captions-background-color-video_10865_component_411-Black" value="#000"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Black">Black</option>
                            <option id="captions-background-color-video_10865_component_411-White" value="#FFF"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-White">White</option>
                            <option id="captions-background-color-video_10865_component_411-Red" value="#F00"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Red">Red</option>
                            <option id="captions-background-color-video_10865_component_411-Green" value="#0F0"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Green">Green</option>
                            <option id="captions-background-color-video_10865_component_411-Blue" value="#00F"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Blue">Blue</option>
                            <option id="captions-background-color-video_10865_component_411-Yellow" value="#FF0"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Yellow">Yellow</option>
                            <option id="captions-background-color-video_10865_component_411-Magenta" value="#F0F"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Magenta">Magenta</option>
                            <option id="captions-background-color-video_10865_component_411-Cyan" value="#0FF"
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-color-video_10865_component_411 captions-background-color-video_10865_component_411-Cyan">Cyan</option>
                          </select><span class="vjs-bg-opacity vjs-opacity"><label id="captions-background-opacity-video_10865_component_411" class="vjs-label">Transparency</label><select
                              aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411">
                              <option id="captions-background-opacity-video_10865_component_411-Opaque" value="1"
                                aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411 captions-background-opacity-video_10865_component_411-Opaque">Opaque</option>
                              <option id="captions-background-opacity-video_10865_component_411-SemiTransparent" value="0.5"
                                aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411 captions-background-opacity-video_10865_component_411-SemiTransparent">Semi-Transparent
                              </option>
                              <option id="captions-background-opacity-video_10865_component_411-Transparent" value="0"
                                aria-labelledby="captions-background-video_10865_component_411 captions-background-opacity-video_10865_component_411 captions-background-opacity-video_10865_component_411-Transparent">Transparent</option>
                            </select></span>
                        </fieldset>
                        <fieldset class="vjs-window-color vjs-track-setting">
                          <legend id="captions-window-video_10865_component_411">Window</legend><label id="captions-window-color-video_10865_component_411" class="vjs-label">Color</label><select
                            aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411">
                            <option id="captions-window-color-video_10865_component_411-Black" value="#000"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Black">Black</option>
                            <option id="captions-window-color-video_10865_component_411-White" value="#FFF"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-White">White</option>
                            <option id="captions-window-color-video_10865_component_411-Red" value="#F00"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Red">Red</option>
                            <option id="captions-window-color-video_10865_component_411-Green" value="#0F0"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Green">Green</option>
                            <option id="captions-window-color-video_10865_component_411-Blue" value="#00F"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Blue">Blue</option>
                            <option id="captions-window-color-video_10865_component_411-Yellow" value="#FF0"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Yellow">Yellow</option>
                            <option id="captions-window-color-video_10865_component_411-Magenta" value="#F0F"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Magenta">Magenta</option>
                            <option id="captions-window-color-video_10865_component_411-Cyan" value="#0FF"
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-color-video_10865_component_411 captions-window-color-video_10865_component_411-Cyan">Cyan</option>
                          </select><span class="vjs-window-opacity vjs-opacity"><label id="captions-window-opacity-video_10865_component_411" class="vjs-label">Transparency</label><select
                              aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411">
                              <option id="captions-window-opacity-video_10865_component_411-Transparent" value="0"
                                aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411 captions-window-opacity-video_10865_component_411-Transparent">Transparent</option>
                              <option id="captions-window-opacity-video_10865_component_411-SemiTransparent" value="0.5"
                                aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411 captions-window-opacity-video_10865_component_411-SemiTransparent">Semi-Transparent</option>
                              <option id="captions-window-opacity-video_10865_component_411-Opaque" value="1"
                                aria-labelledby="captions-window-video_10865_component_411 captions-window-opacity-video_10865_component_411 captions-window-opacity-video_10865_component_411-Opaque">Opaque</option>
                            </select></span>
                        </fieldset>
                      </div>
                      <div class="vjs-track-settings-font">
                        <fieldset class="vjs-font-percent vjs-track-setting">
                          <legend id="captions-font-size-video_10865_component_411" class="">Font Size</legend><select aria-labelledby="captions-font-size-video_10865_component_411">
                            <option id="captions-font-size-video_10865_component_411-50" value="0.50" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-50">50%</option>
                            <option id="captions-font-size-video_10865_component_411-75" value="0.75" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-75">75%</option>
                            <option id="captions-font-size-video_10865_component_411-100" value="1.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-100">100%</option>
                            <option id="captions-font-size-video_10865_component_411-125" value="1.25" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-125">125%</option>
                            <option id="captions-font-size-video_10865_component_411-150" value="1.50" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-150">150%</option>
                            <option id="captions-font-size-video_10865_component_411-175" value="1.75" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-175">175%</option>
                            <option id="captions-font-size-video_10865_component_411-200" value="2.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-200">200%</option>
                            <option id="captions-font-size-video_10865_component_411-300" value="3.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-300">300%</option>
                            <option id="captions-font-size-video_10865_component_411-400" value="4.00" aria-labelledby="captions-font-size-video_10865_component_411 captions-font-size-video_10865_component_411-400">400%</option>
                          </select>
                        </fieldset>
                        <fieldset class="vjs-edge-style vjs-track-setting">
                          <legend id="video_10865_component_411" class="">Text Edge Style</legend><select aria-labelledby="video_10865_component_411">
                            <option id="video_10865_component_411-None" value="none" aria-labelledby="video_10865_component_411 video_10865_component_411-None">None</option>
                            <option id="video_10865_component_411-Raised" value="raised" aria-labelledby="video_10865_component_411 video_10865_component_411-Raised">Raised</option>
                            <option id="video_10865_component_411-Depressed" value="depressed" aria-labelledby="video_10865_component_411 video_10865_component_411-Depressed">Depressed</option>
                            <option id="video_10865_component_411-Uniform" value="uniform" aria-labelledby="video_10865_component_411 video_10865_component_411-Uniform">Uniform</option>
                            <option id="video_10865_component_411-Dropshadow" value="dropshadow" aria-labelledby="video_10865_component_411 video_10865_component_411-Dropshadow">Dropshadow</option>
                          </select>
                        </fieldset>
                        <fieldset class="vjs-font-family vjs-track-setting">
                          <legend id="captions-font-family-video_10865_component_411" class="">Font Family</legend><select aria-labelledby="captions-font-family-video_10865_component_411">
                            <option id="captions-font-family-video_10865_component_411-ProportionalSansSerif" value="proportionalSansSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-ProportionalSansSerif">Proportional Sans-Serif</option>
                            <option id="captions-font-family-video_10865_component_411-MonospaceSansSerif" value="monospaceSansSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-MonospaceSansSerif">Monospace Sans-Serif</option>
                            <option id="captions-font-family-video_10865_component_411-ProportionalSerif" value="proportionalSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-ProportionalSerif">Proportional Serif</option>
                            <option id="captions-font-family-video_10865_component_411-MonospaceSerif" value="monospaceSerif"
                              aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-MonospaceSerif">Monospace Serif</option>
                            <option id="captions-font-family-video_10865_component_411-Casual" value="casual" aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-Casual">Casual
                            </option>
                            <option id="captions-font-family-video_10865_component_411-Script" value="script" aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-Script">Script
                            </option>
                            <option id="captions-font-family-video_10865_component_411-SmallCaps" value="small-caps" aria-labelledby="captions-font-family-video_10865_component_411 captions-font-family-video_10865_component_411-SmallCaps">
                              Small Caps</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="vjs-track-settings-controls"><button class="vjs-default-button" title="restore all settings to the default values">Reset<span class="vjs-control-text"> restore all settings to the default
                            values</span></button><button class="vjs-done-button">Done</button></div>
                    </div><button class="vjs-close-button vjs-control vjs-button" type="button" aria-disabled="false" title="Close Modal Dialog"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                        aria-live="polite">Close Modal Dialog</span></button>
                    <p class="vjs-control-text">End of dialog window.</p>
                  </div>
                </div>
                <div id="videoMarkers_10865_html5_api" class="js-videoMarkersContainer videoMarkersContainer">
                  <ul class="js-markersMenu videoMarkers">
                    <li class="videoMarkers-item"><span class="videoMarkers-itemHeader">Jump to</span> <button href="#" class="js-closeMarkersButton videoMarkers-closeButton"><i class="icon icon-times-btm" aria-hidden="true"></i></button>
                    </li>
                    <li data-duration="70" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        01:10
                      </span> <span title="La méthode d’emplacement" class="videoMarkers-itemText">
                        La méthode d’emplacement
                      </span></li>
                    <li data-duration="382" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        06:22
                      </span> <span title="Système de classement " class="videoMarkers-itemText">
                        Système de classement
                      </span></li>
                    <li data-duration="472" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        07:52
                      </span> <span title="Mise en pratique de la méthode d’emplacement" class="videoMarkers-itemText">
                        Mise en pratique de la méthode d’emplacement
                      </span></li>
                    <li data-duration="945" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        15:45
                      </span> <span title="Révision de la méthode d’emplacement" class="videoMarkers-itemText">
                        Révision de la méthode d’emplacement
                      </span></li>
                    <li data-duration="1055" class="js-markersMenuItem videoMarkers-item"><span class="videoMarkers-itemTimestamp p-2 bg-grey-dark rounded ml-6">
                        17:35
                      </span> <span title="  Étapes d’action et points d’apprentissage" class="videoMarkers-itemText">
                        Étapes d’action et points d’apprentissage
                      </span></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <div>
          <!---->
          <div class="sectionWrapper">
            <div class="section section--text">
              <p>Bonjour cher super cerveau, veuillez garder un stylo et un bout de papier à portée de main avant le début de la session. Hier, nous avons appris la méthode d’emplacement [également connue sous le nom de Méthode Loci] en
                utilisant mon bureau. Faisons-le à présent avec l’endroit que vous connaissez le mieux, à savoir votre maison. À la fin de la session, vous aurez une décomposition étape par étape de cette méthode qui est très facile à
                utiliser. </p>
              <p>La méthode d’emplacement utilise la visualisation où les éléments que vous voulez mémoriser sont mentalement associés à des endroits physiques familiers spécifiques. Elle repose sur des relations spatiales mémorisées pour
                encoder, stocker et récupérer le contenu de vos dossiers de mémoire. </p>
              <p>Pour cet exercice, nous utiliserons les points clés de la routine du matin comme exemple. Souvenez-vous, si la première heure de votre journée est réussie, il est possible que toute votre journée également soit réussie.
                Commençons tout de suite !</p>
              <p>Utilisez les repères de la barre de progression vidéo pour passer à un sujet spécifique de la session.</p>
              <ol>
                <li>La méthode d’emplacement. [01:10]</li>
                <li>Système de classement. [06:22]</li>
                <li>Mise en pratique de la méthode d’emplacement. [07:52]</li>
                <li>Révision de la méthode d’emplacement. [15:45]</li>
                <li>Étapes d’action et points d’apprentissage. [17:35]</li>
              </ol>
              <p>Les petites notions du cerveau pour cette leçon : </p>
              <ul>
                <li>La mémoire est composée de 3 parties : Encoder, stocker, récupérer. </li>
                <li>P.I.E. - Placer, Imaginer, Entremêler.</li>
              </ul>
              <p>La méthode d’emplacement </p>
              <ol>
                <li>Choisissez 5 endroits</li>
                <li>Allez dans le sens des aiguilles d’une montre </li>
                <li>Choisissez des éléments uniques</li>
                <li>Choisissez de grands éléments</li>
                <li>Pas d’espaces vides</li>
              </ol>
              <p>La routine matinale de Jim </p>
              <ol>
                <li>Se remémorer tous les rêves.</li>
                <li>Dresser le lit</li>
                <li>Boire de l’eau.</li>
                <li>Faire des exercices physiques</li>
                <li>Les techniques de respiration </li>
                <li>Prendre une douche froide.</li>
                <li>Se brosser les dents avec la main opposée</li>
                <li>Boire du smoothie pour le super cerveau</li>
                <li>Tenir un journal </li>
                <li>De nouveaux apprentissages&nbsp;</li>
              </ol>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
        </div>
        <div>
          <!---->
          <!---->
          <section class="sectionWrapper sectionWrapper--audio">
            <div class="section section--audio">
              <div class="audioPlayer">
                <div class="audioPlayer-cover">
                  <div class="audioPlayer-coverContents">
                    <div class="coverWrapper coverWrapper--audio">
                      <div class="cover cover--consumptionAudio" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/c84794a2-7b54-4975-8c2b-0f278b66c363.jpg&quot;);"></div>
                    </div>
                  </div>
                </div>
                <div data-id="audio_10872" data-asset-url="https://assets.mindvalley.com/api/v1/assets/3000b772-d091-4f31-bfe0-fdaa58351f78.wav" data-quest-id="81" data-content-id="2972" data-asset-id="20001"
                  class="audioPlayer-controls js-audioPlayer-10872">
                  <div class="audioPlayer-title">
                    [Audio] La méthode de localisation
                  </div>
                  <div class="audioPlayer-wrapper">
                    <div class="audioPlayer-seeker">
                      <div class="w-1/2 text-left"><small class="js-audioPlayerTimeElapsed">00:00</small></div>
                      <div class="w-1/2 text-right"><small class="js-audioPlayerTimeTotal">19:17</small></div>
                      <div class="w-full mt-1">
                        <div class="js-seeker seeker">
                          <div class="js-seekerProgress seeker-progressBar"></div>
                        </div>
                      </div>
                    </div>
                    <div class="audioPlayer-buttons"><button class="js-audioPlayerRewindButton audioPlayer-rewindButton"><i class="icon icon-rewind" aria-hidden="true"></i></button> <button
                        class="js-audioPlayerPlayButton audioPlayer-playButton"><i class="icon icon-play" aria-hidden="true"></i></button> <button class="js-audioPlayerToggleSpeedButton audioPlayer-speedButton">1x</button></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!---->
          <!---->
        </div>
        <section class="sectionWrapper sectionWrapper--tasks">
          <div class="section section--tasks">
            <div class="tasks">
              <header class="tasks-header">
                2/2 Tasks Completed
              </header>
              <div class="tasks-body">
                <div class="taskWrapper">
                  <div class="task">
                    <div class="task-content">
                      <div class="task-cover">
                        <div class="coverWrapper--tasks">
                          <div class="cover cover--tasks" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/84331628-af90-47df-9a46-eacdc460fc85.jpg&quot;);"></div>
                        </div>
                      </div>
                      <div class="task-description task-description--completed">
                        <div class="sign sign--completed"><i class="icon icon-check" aria-hidden="true"></i></div>
                        <div class="task-name">Enseignez cette technique à une autre personne.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="taskWrapper">
                  <div class="task">
                    <div class="task-content">
                      <div class="task-cover">
                        <div class="coverWrapper--tasks">
                          <div class="cover cover--tasks" style="background-image: url(&quot;https://assets.mindvalley.com/api/v1/assets/617e2397-97ec-45ed-a7aa-b7a29399dd76.jpg&quot;);"></div>
                        </div>
                      </div>
                      <div class="task-description task-description--completed">
                        <div class="sign sign--completed"><i class="icon icon-check" aria-hidden="true"></i></div>
                        <div class="task-name">Créez les pièces 3 et 4 pour les numéros de 11 à 20.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>


@endsection
