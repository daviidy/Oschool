@extends('layouts.menu')
@section('title', 'Apprenez auprès des meilleures universités et entreprises d\'Afrique')
@section('image', '/images/divers/slider_home3.png')
@section('content')




  <style
    data-vue-ssr-id="a420fb9a:0 b5a21b72:0 eeb72896:0 cb77b69a:0 0fed70e4:0 25accc78:0 4e03650e:0 269bae8f:0 69c9e342:0 648d6a97:0 c7ded2d6:0 7acec069:0 3333153c:0 bc660bc4:0 d7c35808:0 4b13a7c1:0 2e49bb1a:0 396db862:0 39406464:0 c347eb9a:0 4c073f2a:0 0bf04f4c:0 7bd11284:0 bf997a78:0 b23ed56a:0 7a8b69e4:0 054f1376:0">
    :root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      :root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        :root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9:before {
      padding-top: 56.25%
    }

    .border-radius--rounded {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle {
      border-radius: 50em
    }

    .image.border-radius--rounded img {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img {
      border-radius: 50em
    }

    *,
    :after,
    :before {
      box-sizing: border-box
    }

    html {
      font-family: sans-serif;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
      -webkit-font-smoothing: antialiased
    }

    body {
      margin: 0
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section,
    summary {
      display: block
    }

    audio,
    canvas,
    progress,
    video {
      display: inline-block;
      vertical-align: baseline
    }

    audio:not([controls]) {
      display: none;
      height: 0
    }

    [hidden],
    template {
      display: none
    }

    a {
      background-color: transparent
    }

    a:active,
    a:hover {
      outline: 0
    }

    abbr[title] {
      border-bottom: 1px dotted
    }

    b,
    strong {
      font-weight: 700
    }

    dfn {
      font-style: italic
    }

    h1 {
      font-size: 2em;
      margin: .67em 0
    }

    mark {
      background: #ff0;
      color: #000
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sup {
      top: -.5em
    }

    sub {
      bottom: -.25em
    }

    img {
      border: 0
    }

    svg:not(:root) {
      overflow: hidden
    }

    figure {
      margin: 1em 40px
    }

    hr {
      box-sizing: content-box;
      height: 0
    }

    pre {
      overflow: auto
    }

    code,
    kbd,
    pre,
    samp {
      font-family: monospace, monospace;
      font-size: 1em
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      color: inherit;
      font: inherit;
      margin: 0
    }

    button {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {
      -webkit-appearance: button;
      cursor: pointer
    }

    button[disabled],
    html input[disabled] {
      cursor: default
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
      border: 0;
      padding: 0
    }

    input {
      line-height: normal
    }

    input[type=checkbox],
    input[type=radio] {
      box-sizing: border-box;
      padding: 0
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      height: auto
    }

    input[type=search] {
      -webkit-appearance: textfield;
      box-sizing: content-box
    }

    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-decoration {
      -webkit-appearance: none
    }

    fieldset {
      border: 1px solid silver;
      margin: 0 2px;
      padding: .35em .625em .75em
    }

    legend {
      border: 0;
      padding: 0
    }

    textarea {
      overflow: auto
    }

    optgroup {
      font-weight: 700
    }

    table {
      border-collapse: collapse;
      border-spacing: 0
    }

    td,
    th {
      padding: 0
    }

    :root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      :root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        :root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9:before {
      padding-top: 56.25%
    }

    .border-radius--rounded {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle {
      border-radius: 50em
    }

    .image.border-radius--rounded img {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img {
      border-radius: 50em
    }

    ::-moz-selection {
      background-color: #545b64;
      background-color: var(--gray-700);
      color: #fff;
      color: var(--white)
    }

    ::selection {
      background-color: #545b64;
      background-color: var(--gray-700);
      color: #fff;
      color: var(--white)
    }

    body,
    html {
      -webkit-overflow-scrolling: touch;
      width: 100%;
      height: 100%
    }

    body {
      -webkit-tap-highlight-color: transparent;
      font-family: Nunito Sans, sans-serif;
      font-family: var(--font-family);
      font-size: var(--ms1);
      font-weight: 400;
      font-smoothing: antialiased !important;
      -moz-osx-font-smoothing: grayscale;
      font-feature-settings: "kern", "liga", "pnum";
      text-rendering: optimizeLegibility;
      -webkit-text-size-adjust: 100%;
      -moz-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      text-size-adjust: 100%;
      color: #353a40;
      color: var(--gray-900);
      background: #fff;
      background: var(--white);
      overflow-x: hidden
    }

    blockquote,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ol,
    p,
    pre,
    table,
    ul {
      margin-top: 0;
      margin-bottom: var(--ms1)
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      line-height: 1.2
    }

    p {
      line-height: 1.4
    }

    @media (min-width:768px) {
      p {
        line-height: 1.6
      }
    }

    strong {
      font-weight: 700
    }

    small {
      font-size: var(--ms0)
    }

    a {
      outline-color: #f04e23;
      outline-color: var(--hotmart-primary);
      outline-offset: 4px
    }

    #__layout,
    #__nuxt {
      height: 100%
    }

    .__nuxt-error-page {
      z-index: 1000
    }

    .layout-enter-active,
    .layout-leave-active {
      will-change: opacity, transform;
      transition: opacity .25s cubic-bezier(.4, 0, .14, 1), transform .25s cubic-bezier(.4, 0, .14, 1);
      transition: opacity .25s var(--ease-in-out), transform .25s var(--ease-in-out)
    }

    .layout-enter,
    .layout-leave-active {
      opacity: 0;
      transform: translateY(var(--ms0))
    }

    .page {
      display: flex;
      flex-direction: column;
      height: 100%
    }

    .svg-inline--fa,
    svg:not(:root).svg-inline--fa {
      overflow: visible
    }

    .svg-inline--fa {
      display: inline-block;
      font-size: inherit;
      height: 1em;
      vertical-align: -.125em
    }

    .svg-inline--fa.fa-lg {
      vertical-align: -.225em
    }

    .svg-inline--fa.fa-w-1 {
      width: .0625em
    }

    .svg-inline--fa.fa-w-2 {
      width: .125em
    }

    .svg-inline--fa.fa-w-3 {
      width: .1875em
    }

    .svg-inline--fa.fa-w-4 {
      width: .25em
    }

    .svg-inline--fa.fa-w-5 {
      width: .3125em
    }

    .svg-inline--fa.fa-w-6 {
      width: .375em
    }

    .svg-inline--fa.fa-w-7 {
      width: .4375em
    }

    .svg-inline--fa.fa-w-8 {
      width: .5em
    }

    .svg-inline--fa.fa-w-9 {
      width: .5625em
    }

    .svg-inline--fa.fa-w-10 {
      width: .625em
    }

    .svg-inline--fa.fa-w-11 {
      width: .6875em
    }

    .svg-inline--fa.fa-w-12 {
      width: .75em
    }

    .svg-inline--fa.fa-w-13 {
      width: .8125em
    }

    .svg-inline--fa.fa-w-14 {
      width: .875em
    }

    .svg-inline--fa.fa-w-15 {
      width: .9375em
    }

    .svg-inline--fa.fa-w-16 {
      width: 1em
    }

    .svg-inline--fa.fa-w-17 {
      width: 1.0625em
    }

    .svg-inline--fa.fa-w-18 {
      width: 1.125em
    }

    .svg-inline--fa.fa-w-19 {
      width: 1.1875em
    }

    .svg-inline--fa.fa-w-20 {
      width: 1.25em
    }

    .svg-inline--fa.fa-pull-left {
      margin-right: .3em;
      width: auto
    }

    .svg-inline--fa.fa-pull-right {
      margin-left: .3em;
      width: auto
    }

    .svg-inline--fa.fa-border {
      height: 1.5em
    }

    .svg-inline--fa.fa-li {
      width: 2em
    }

    .svg-inline--fa.fa-fw {
      width: 1.25em
    }

    .fa-layers svg.svg-inline--fa {
      bottom: 0;
      left: 0;
      margin: auto;
      position: absolute;
      right: 0;
      top: 0
    }

    .fa-layers {
      display: inline-block;
      height: 1em;
      position: relative;
      text-align: center;
      vertical-align: -.125em;
      width: 1em
    }

    .fa-layers svg.svg-inline--fa {
      transform-origin: center center
    }

    .fa-layers-counter,
    .fa-layers-text {
      display: inline-block;
      position: absolute;
      text-align: center
    }

    .fa-layers-text {
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      transform-origin: center center
    }

    .fa-layers-counter {
      background-color: #ff253a;
      border-radius: 1em;
      box-sizing: border-box;
      color: #fff;
      height: 1.5em;
      line-height: 1;
      max-width: 5em;
      min-width: 1.5em;
      overflow: hidden;
      padding: .25em;
      right: 0;
      text-overflow: ellipsis;
      top: 0;
      transform: scale(.25);
      transform-origin: top right
    }

    .fa-layers-bottom-right {
      bottom: 0;
      right: 0;
      top: auto;
      transform: scale(.25);
      transform-origin: bottom right
    }

    .fa-layers-bottom-left {
      bottom: 0;
      left: 0;
      right: auto;
      top: auto;
      transform: scale(.25);
      transform-origin: bottom left
    }

    .fa-layers-top-right {
      right: 0;
      top: 0;
      transform: scale(.25);
      transform-origin: top right
    }

    .fa-layers-top-left {
      left: 0;
      right: auto;
      top: 0;
      transform: scale(.25);
      transform-origin: top left
    }

    .fa-lg {
      font-size: 1.33333em;
      line-height: .75em;
      vertical-align: -.0667em
    }

    .fa-xs {
      font-size: .75em
    }

    .fa-sm {
      font-size: .875em
    }

    .fa-1x {
      font-size: 1em
    }

    .fa-2x {
      font-size: 2em
    }

    .fa-3x {
      font-size: 3em
    }

    .fa-4x {
      font-size: 4em
    }

    .fa-5x {
      font-size: 5em
    }

    .fa-6x {
      font-size: 6em
    }

    .fa-7x {
      font-size: 7em
    }

    .fa-8x {
      font-size: 8em
    }

    .fa-9x {
      font-size: 9em
    }

    .fa-10x {
      font-size: 10em
    }

    .fa-fw {
      text-align: center;
      width: 1.25em
    }

    .fa-ul {
      list-style-type: none;
      margin-left: 2.5em;
      padding-left: 0
    }

    .fa-ul>li {
      position: relative
    }

    .fa-li {
      left: -2em;
      position: absolute;
      text-align: center;
      width: 2em;
      line-height: inherit
    }

    .fa-border {
      border: .08em solid #eee;
      border-radius: .1em;
      padding: .2em .25em .15em
    }

    .fa-pull-left {
      float: left
    }

    .fa-pull-right {
      float: right
    }

    .fa.fa-pull-left,
    .fab.fa-pull-left,
    .fal.fa-pull-left,
    .far.fa-pull-left,
    .fas.fa-pull-left {
      margin-right: .3em
    }

    .fa.fa-pull-right,
    .fab.fa-pull-right,
    .fal.fa-pull-right,
    .far.fa-pull-right,
    .fas.fa-pull-right {
      margin-left: .3em
    }

    .fa-spin {
      -webkit-animation: fa-spin 2s linear infinite;
      animation: fa-spin 2s linear infinite
    }

    .fa-pulse {
      -webkit-animation: fa-spin 1s steps(8) infinite;
      animation: fa-spin 1s steps(8) infinite
    }

    @-webkit-keyframes fa-spin {
      0% {
        transform: rotate(0deg)
      }

      to {
        transform: rotate(1turn)
      }
    }

    @keyframes fa-spin {
      0% {
        transform: rotate(0deg)
      }

      to {
        transform: rotate(1turn)
      }
    }

    .fa-rotate-90 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
      transform: rotate(90deg)
    }

    .fa-rotate-180 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
      transform: rotate(180deg)
    }

    .fa-rotate-270 {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
      transform: rotate(270deg)
    }

    .fa-flip-horizontal {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
      transform: scaleX(-1)
    }

    .fa-flip-vertical {
      transform: scaleY(-1)
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical,
    .fa-flip-vertical {
      -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical {
      transform: scale(-1)
    }

    :root .fa-flip-both,
    :root .fa-flip-horizontal,
    :root .fa-flip-vertical,
    :root .fa-rotate-90,
    :root .fa-rotate-180,
    :root .fa-rotate-270 {
      -webkit-filter: none;
      filter: none
    }

    .fa-stack {
      display: inline-block;
      height: 2em;
      position: relative;
      width: 2.5em
    }

    .fa-stack-1x,
    .fa-stack-2x {
      bottom: 0;
      left: 0;
      margin: auto;
      position: absolute;
      right: 0;
      top: 0
    }

    .svg-inline--fa.fa-stack-1x {
      height: 1em;
      width: 1.25em
    }

    .svg-inline--fa.fa-stack-2x {
      height: 2em;
      width: 2.5em
    }

    .fa-inverse {
      color: #fff
    }

    .sr-only {
      border: 0;
      clip: rect(0, 0, 0, 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
      clip: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      position: static;
      width: auto
    }

    .svg-inline--fa .fa-primary {
      fill: currentColor;
      fill: var(--fa-primary-color, currentColor);
      opacity: 1;
      opacity: var(--fa-primary-opacity, 1)
    }

    .svg-inline--fa .fa-secondary {
      fill: currentColor;
      fill: var(--fa-secondary-color, currentColor)
    }

    .svg-inline--fa .fa-secondary,
    .svg-inline--fa.fa-swap-opacity .fa-primary {
      opacity: .4;
      opacity: var(--fa-secondary-opacity, .4)
    }

    .svg-inline--fa.fa-swap-opacity .fa-secondary {
      opacity: 1;
      opacity: var(--fa-primary-opacity, 1)
    }

    .svg-inline--fa mask .fa-primary,
    .svg-inline--fa mask .fa-secondary {
      fill: #000
    }

    .fad.fa-inverse {
      color: #fff
    }

    @font-face {
      font-family: swiper-icons;
      src: url("data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA") format("woff");
      font-weight: 400;
      font-style: normal
    }

    :root {
      --swiper-theme-color: #007aff
    }

    .swiper-container {
      margin-left: auto;
      margin-right: auto;
      position: relative;
      overflow: hidden;
      list-style: none;
      padding: 0;
      z-index: 1
    }

    .swiper-container-vertical>.swiper-wrapper {
      flex-direction: column
    }

    .swiper-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
      z-index: 1;
      display: flex;
      transition-property: transform;
      box-sizing: content-box
    }

    .swiper-container-android .swiper-slide,
    .swiper-wrapper {
      transform: translateZ(0)
    }

    .swiper-container-multirow>.swiper-wrapper {
      flex-wrap: wrap
    }

    .swiper-container-multirow-column>.swiper-wrapper {
      flex-wrap: wrap;
      flex-direction: column
    }

    .swiper-container-free-mode>.swiper-wrapper {
      transition-timing-function: ease-out;
      margin: 0 auto
    }

    .swiper-slide {
      flex-shrink: 0;
      width: 100%;
      height: 100%;
      position: relative;
      transition-property: transform
    }

    .swiper-slide-invisible-blank {
      visibility: hidden
    }

    .swiper-container-autoheight,
    .swiper-container-autoheight .swiper-slide {
      height: auto
    }

    .swiper-container-autoheight .swiper-wrapper {
      align-items: flex-start;
      transition-property: transform, height
    }

    .swiper-container-3d {
      perspective: 1200px
    }

    .swiper-container-3d .swiper-cube-shadow,
    .swiper-container-3d .swiper-slide,
    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top,
    .swiper-container-3d .swiper-wrapper {
      transform-style: preserve-3d
    }

    .swiper-container-3d .swiper-slide-shadow-bottom,
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-right,
    .swiper-container-3d .swiper-slide-shadow-top {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 10
    }

    .swiper-container-3d .swiper-slide-shadow-left {
      background-image: linear-gradient(270deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-3d .swiper-slide-shadow-right {
      background-image: linear-gradient(90deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-3d .swiper-slide-shadow-top {
      background-image: linear-gradient(0deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-3d .swiper-slide-shadow-bottom {
      background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), transparent)
    }

    .swiper-container-css-mode>.swiper-wrapper {
      overflow: auto;
      scrollbar-width: none;
      -ms-overflow-style: none
    }

    .swiper-container-css-mode>.swiper-wrapper::-webkit-scrollbar {
      display: none
    }

    .swiper-container-css-mode>.swiper-wrapper>.swiper-slide {
      scroll-snap-align: start start
    }

    .swiper-container-horizontal.swiper-container-css-mode>.swiper-wrapper {
      scroll-snap-type: x mandatory
    }

    .swiper-container-vertical.swiper-container-css-mode>.swiper-wrapper {
      scroll-snap-type: y mandatory
    }

    :root {
      --swiper-navigation-size: 44px
    }

    .swiper-button-next,
    .swiper-button-prev {
      position: absolute;
      top: 50%;
      width: 27px;
      width: calc(var(--swiper-navigation-size)/44*27);
      height: 44px;
      height: var(--swiper-navigation-size);
      margin-top: -22px;
      margin-top: calc(-1*var(--swiper-navigation-size)/2);
      z-index: 10;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--swiper-theme-color);
      color: var(--swiper-navigation-color, var(--swiper-theme-color))
    }

    .swiper-button-next.swiper-button-disabled,
    .swiper-button-prev.swiper-button-disabled {
      opacity: .35;
      cursor: auto;
      pointer-events: none
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
      font-family: swiper-icons;
      font-size: 44px;
      font-size: var(--swiper-navigation-size);
      text-transform: none !important;
      letter-spacing: 0;
      text-transform: none;
      -moz-font-feature-settings: normal, ;
      font-feature-settings: normal, ;
      font-variant: normal;
      line-height: 1
    }

    .swiper-button-prev,
    .swiper-container-rtl .swiper-button-next {
      left: 10px;
      right: auto
    }

    .swiper-button-prev:after,
    .swiper-container-rtl .swiper-button-next:after {
      content: "prev"
    }

    .swiper-button-next,
    .swiper-container-rtl .swiper-button-prev {
      right: 10px;
      left: auto
    }

    .swiper-button-next:after,
    .swiper-container-rtl .swiper-button-prev:after {
      content: "next"
    }

    .swiper-button-next.swiper-button-white,
    .swiper-button-prev.swiper-button-white {
      --swiper-navigation-color: #fff
    }

    .swiper-button-next.swiper-button-black,
    .swiper-button-prev.swiper-button-black {
      --swiper-navigation-color: #000
    }

    .swiper-button-lock {
      display: none
    }

    .swiper-pagination {
      position: absolute;
      text-align: center;
      transition: opacity .3s;
      transform: translateZ(0);
      z-index: 10
    }

    .swiper-pagination.swiper-pagination-hidden {
      opacity: 0
    }

    .swiper-container-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
      bottom: 10px;
      left: 0;
      width: 100%
    }

    .swiper-pagination-bullets-dynamic {
      overflow: hidden;
      font-size: 0
    }

    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
      transform: scale(.33);
      position: relative
    }

    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active,
    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
      transform: scale(1)
    }

    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
      transform: scale(.66)
    }

    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
      transform: scale(.33)
    }

    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
      transform: scale(.66)
    }

    .swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
      transform: scale(.33)
    }

    .swiper-pagination-bullet {
      width: 8px;
      height: 8px;
      display: inline-block;
      border-radius: 100%;
      background: #000;
      opacity: .2
    }

    button.swiper-pagination-bullet {
      border: none;
      margin: 0;
      padding: 0;
      box-shadow: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }

    .swiper-pagination-clickable .swiper-pagination-bullet {
      cursor: pointer
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
      background: var(--swiper-theme-color);
      background: var(--swiper-pagination-color, var(--swiper-theme-color))
    }

    .swiper-container-vertical>.swiper-pagination-bullets {
      right: 10px;
      top: 50%;
      transform: translate3d(0, -50%, 0)
    }

    .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
      margin: 6px 0;
      display: block
    }

    .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
      top: 50%;
      transform: translateY(-50%);
      width: 8px
    }

    .swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
      display: inline-block;
      transition: transform .2s, top .2s
    }

    .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
      margin: 0 4px
    }

    .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
      left: 50%;
      transform: translateX(-50%);
      white-space: nowrap
    }

    .swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
      transition: transform .2s, left .2s
    }

    .swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
      transition: transform .2s, right .2s
    }

    .swiper-pagination-progressbar {
      background: rgba(0, 0, 0, .25);
      position: absolute
    }

    .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
      background: var(--swiper-theme-color);
      background: var(--swiper-pagination-color, var(--swiper-theme-color));
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      transform: scale(0);
      transform-origin: left top
    }

    .swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
      transform-origin: right top
    }

    .swiper-container-horizontal>.swiper-pagination-progressbar,
    .swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
      width: 100%;
      height: 4px;
      left: 0;
      top: 0
    }

    .swiper-container-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,
    .swiper-container-vertical>.swiper-pagination-progressbar {
      width: 4px;
      height: 100%;
      left: 0;
      top: 0
    }

    .swiper-pagination-white {
      --swiper-pagination-color: #fff
    }

    .swiper-pagination-black {
      --swiper-pagination-color: #000
    }

    .swiper-pagination-lock {
      display: none
    }

    .swiper-scrollbar {
      border-radius: 10px;
      position: relative;
      -ms-touch-action: none;
      background: rgba(0, 0, 0, .1)
    }

    .swiper-container-horizontal>.swiper-scrollbar {
      position: absolute;
      left: 1%;
      bottom: 3px;
      z-index: 50;
      height: 5px;
      width: 98%
    }

    .swiper-container-vertical>.swiper-scrollbar {
      position: absolute;
      right: 3px;
      top: 1%;
      z-index: 50;
      width: 5px;
      height: 98%
    }

    .swiper-scrollbar-drag {
      height: 100%;
      width: 100%;
      position: relative;
      background: rgba(0, 0, 0, .5);
      border-radius: 10px;
      left: 0;
      top: 0
    }

    .swiper-scrollbar-cursor-drag {
      cursor: move
    }

    .swiper-scrollbar-lock {
      display: none
    }

    .swiper-zoom-container {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center
    }

    .swiper-zoom-container>canvas,
    .swiper-zoom-container>img,
    .swiper-zoom-container>svg {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain
    }

    .swiper-slide-zoomed {
      cursor: move
    }

    .swiper-lazy-preloader {
      width: 42px;
      height: 42px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -21px;
      margin-top: -21px;
      z-index: 10;
      transform-origin: 50%;
      animation: swiper-preloader-spin 1s linear infinite;
      box-sizing: border-box;
      border-left: 4px solid var(--swiper-theme-color);
      border-bottom: 4px solid var(--swiper-theme-color);
      border-right: 4px solid var(--swiper-theme-color);
      border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
      border-radius: 50%;
      border-top: 4px solid transparent
    }

    .swiper-lazy-preloader-white {
      --swiper-preloader-color: #fff
    }

    .swiper-lazy-preloader-black {
      --swiper-preloader-color: #000
    }

    @keyframes swiper-preloader-spin {
      to {
        transform: rotate(1turn)
      }
    }

    .swiper-container .swiper-notification {
      position: absolute;
      left: 0;
      top: 0;
      pointer-events: none;
      opacity: 0;
      z-index: -1000
    }

    .swiper-container-fade.swiper-container-free-mode .swiper-slide {
      transition-timing-function: ease-out
    }

    .swiper-container-fade .swiper-slide {
      pointer-events: none;
      transition-property: opacity
    }

    .swiper-container-fade .swiper-slide .swiper-slide {
      pointer-events: none
    }

    .swiper-container-fade .swiper-slide-active,
    .swiper-container-fade .swiper-slide-active .swiper-slide-active {
      pointer-events: auto
    }

    .swiper-container-cube {
      overflow: visible
    }

    .swiper-container-cube .swiper-slide {
      pointer-events: none;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      z-index: 1;
      visibility: hidden;
      transform-origin: 0 0;
      width: 100%;
      height: 100%
    }

    .swiper-container-cube .swiper-slide .swiper-slide {
      pointer-events: none
    }

    .swiper-container-cube.swiper-container-rtl .swiper-slide {
      transform-origin: 100% 0
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-active .swiper-slide-active {
      pointer-events: auto
    }

    .swiper-container-cube .swiper-slide-active,
    .swiper-container-cube .swiper-slide-next,
    .swiper-container-cube .swiper-slide-next+.swiper-slide,
    .swiper-container-cube .swiper-slide-prev {
      pointer-events: auto;
      visibility: visible
    }

    .swiper-container-cube .swiper-slide-shadow-bottom,
    .swiper-container-cube .swiper-slide-shadow-left,
    .swiper-container-cube .swiper-slide-shadow-right,
    .swiper-container-cube .swiper-slide-shadow-top {
      z-index: 0;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden
    }

    .swiper-container-cube .swiper-cube-shadow {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      background: #000;
      opacity: .6;
      -webkit-filter: blur(50px);
      filter: blur(50px);
      z-index: 0
    }

    .swiper-container-flip {
      overflow: visible
    }

    .swiper-container-flip .swiper-slide {
      pointer-events: none;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      z-index: 1
    }

    .swiper-container-flip .swiper-slide .swiper-slide {
      pointer-events: none
    }

    .swiper-container-flip .swiper-slide-active,
    .swiper-container-flip .swiper-slide-active .swiper-slide-active {
      pointer-events: auto
    }

    .swiper-container-flip .swiper-slide-shadow-bottom,
    .swiper-container-flip .swiper-slide-shadow-left,
    .swiper-container-flip .swiper-slide-shadow-right,
    .swiper-container-flip .swiper-slide-shadow-top {
      z-index: 0;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden
    }

    .nuxt-progress {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 8px;
      width: 0;
      opacity: 1;
      transition: width .1s, opacity .4s;
      background-color: #f04e23;
      z-index: 999999
    }

    .nuxt-progress.nuxt-progress-notransition {
      transition: none
    }

    .nuxt-progress-failed {
      background-color: red
    }

    [data-v-ac7fe1d6]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-ac7fe1d6]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-ac7fe1d6]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-ac7fe1d6]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-ac7fe1d6]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-ac7fe1d6]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-ac7fe1d6]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-ac7fe1d6]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-ac7fe1d6]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-ac7fe1d6]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-ac7fe1d6]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-ac7fe1d6]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-ac7fe1d6]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-ac7fe1d6]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-ac7fe1d6]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-ac7fe1d6]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-ac7fe1d6]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-ac7fe1d6]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-ac7fe1d6]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-ac7fe1d6] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-ac7fe1d6] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-ac7fe1d6] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-ac7fe1d6] {
      border-radius: 50em
    }

    .knowledge-hub-container[data-v-ac7fe1d6] {
      padding-top: 32px;
      padding-bottom: 32px
    }

    .about .video[data-v-ac7fe1d6] {
      width: 100%;
      max-width: 1024px;
      max-width: var(--desktop);
      margin-left: auto;
      margin-right: auto
    }

    [data-v-5b7179a2]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-5b7179a2]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-5b7179a2]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-5b7179a2]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-5b7179a2]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-5b7179a2]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-5b7179a2]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-5b7179a2]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-5b7179a2]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-5b7179a2]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-5b7179a2]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-5b7179a2]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-5b7179a2]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-5b7179a2]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-5b7179a2]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-5b7179a2]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-5b7179a2]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-5b7179a2]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-5b7179a2]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-5b7179a2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-5b7179a2] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-5b7179a2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-5b7179a2] {
      border-radius: 50em
    }

    .header[data-v-5b7179a2] {
      z-index: 4;
      position: fixed;
      top: 0;
      right: 0;
      left: 0;
      transform: translateZ(0);
      will-change: transform;
      transition: transform .5s cubic-bezier(.4, 0, .14, 1);
      transition: transform .5s var(--ease-in-out);
      outline: 1px solid transparent;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      perspective: 1000
    }

    .header--open[data-v-5b7179a2] {
      bottom: 0
    }

    .header--unpinned[data-v-5b7179a2] {
      transform: translate3d(0, -100%, 0)
    }

    .header__overlay[data-v-5b7179a2] {
      position: fixed;
      z-index: 1;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(107, 116, 128, .5);
      background: var(--gray-500-50)
    }

    .header__overlay-enter-active[data-v-5b7179a2],
    .header__overlay-leave-active[data-v-5b7179a2] {
      will-change: opacity;
      transition: opacity .25s cubic-bezier(.4, 0, .14, 1);
      transition: opacity var(--ease-in-out) .25s
    }

    .header__overlay-enter[data-v-5b7179a2],
    .header__overlay-leave-to[data-v-5b7179a2] {
      opacity: 0
    }

    [data-v-88c7c2ee]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-88c7c2ee]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-88c7c2ee]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-88c7c2ee]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-88c7c2ee]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-88c7c2ee]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-88c7c2ee]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-88c7c2ee]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-88c7c2ee]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-88c7c2ee]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-88c7c2ee]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-88c7c2ee]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-88c7c2ee]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-88c7c2ee]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-88c7c2ee]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-88c7c2ee]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-88c7c2ee]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-88c7c2ee]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-88c7c2ee]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-88c7c2ee] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-88c7c2ee] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-88c7c2ee] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-88c7c2ee] {
      border-radius: 50em
    }

    .header__primary[data-v-88c7c2ee] {
      padding: var(--ms1)
    }

    @media (min-width:768px) {
      .header__primary[data-v-88c7c2ee] {
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    .header__primary[data-v-88c7c2ee] {
      will-change: background-color;
      transition: background-color .25s cubic-bezier(.4, 0, .14, 1);
      transition: background-color .25s var(--ease-in-out);
      position: relative;
      z-index: 3;
      background-color: transparent
    }

    .header--solid .header__primary[data-v-88c7c2ee] {
      background-color: #fff;
      background-color: var(--white)
    }

    .header--solid:not(.header--open) .header__primary[data-v-88c7c2ee] {
      box-shadow: 0 0 8px 0 rgba(0, 0, 0, .2);
      border-bottom: 1px solid #dfe2e6;
      border-bottom: 1px solid var(--gray-300)
    }

    .header--open .header__primary[data-v-88c7c2ee] {
      transition: background-color .25s cubic-bezier(.4, 0, .14, 1) .25s;
      transition: background-color .25s var(--ease-in-out) .25s
    }

    .header__primary .header__primary-container[data-v-88c7c2ee] {
      width: 100%;
      max-width: 1920px;
      max-width: var(--desktop-xl);
      margin-right: auto;
      margin-left: auto;
      display: grid;
      grid-template-areas: "header__logo header__toggle-search header__toggle-sidebar";
      grid-template-columns: auto -webkit-min-content -webkit-min-content;
      grid-template-columns: auto min-content min-content;
      grid-template-rows: 1fr;
      grid-gap: var(--ms1);
      align-items: center
    }

    @media (min-width:1280px) {
      .header__primary .header__primary-container[data-v-88c7c2ee] {
        grid-template-areas: "header__logo header__navigation header__toggle-search header__navigation-plattaform";
        grid-template-columns: -webkit-min-content auto -webkit-min-content -webkit-min-content;
        grid-template-columns: min-content auto min-content min-content;
        justify-content: normal
      }
    }

    .header__primary:not(.header__primary--available-search) .header__primary-container[data-v-88c7c2ee] {
      grid-template-areas: "header__logo header__toggle-sidebar";
      grid-template-columns: auto -webkit-min-content;
      grid-template-columns: auto min-content
    }

    @media (min-width:1280px) {
      .header__primary:not(.header__primary--available-search) .header__primary-container[data-v-88c7c2ee] {
        grid-template-areas: "header__logo header__navigation header__navigation-plattaform";
        grid-template-columns: -webkit-min-content auto -webkit-min-content;
        grid-template-columns: min-content auto min-content
      }
    }

    .header__logo[data-v-88c7c2ee] {
      grid-area: header__logo;
      width: calc(var(--ms1)*8);
      transform: translateY(-6px)
    }

    .header__navigation[data-v-88c7c2ee] {
      grid-area: header__navigation;
      display: none
    }

    @media (min-width:1280px) {
      .header__navigation[data-v-88c7c2ee] {
        display: inline;
        display: initial
      }
    }

    .header__toggle-search[data-v-88c7c2ee] {
      grid-area: header__toggle-search
    }

    @media (min-width:1280px) {
      .header__toggle-search[data-v-88c7c2ee] {
        display: flex;
        justify-content: flex-end;
        align-content: center
      }
    }

    .header--open .header__toggle-search a[data-v-88c7c2ee] {
      color: #f04e23;
      color: var(--hotmart-primary)
    }

    .header__primary:not(.header__primary--available-search) .header__toggle-search[data-v-88c7c2ee] {
      display: none
    }

    .header__navigation-plattaform[data-v-88c7c2ee] {
      grid-area: header__navigation-plattaform;
      display: none
    }

    @media (min-width:1280px) {
      .header__navigation-plattaform[data-v-88c7c2ee] {
        display: inline;
        display: initial
      }
    }

    .header__navigation-plattaform ul[data-v-88c7c2ee],
    .header__navigation ul[data-v-88c7c2ee] {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      align-items: center
    }

    @media (min-width:1280px) {

      .header__navigation-plattaform li[data-v-88c7c2ee]:not(:first-of-type),
      .header__navigation li[data-v-88c7c2ee]:not(:first-of-type) {
        margin-left: calc(var(--ms1)*2)
      }
    }

    .header__navigation-plattaform a[data-v-88c7c2ee],
    .header__navigation a[data-v-88c7c2ee] {
      white-space: nowrap
    }

    .header__toggle-sidebar[data-v-88c7c2ee] {
      grid-area: header__toggle-sidebar;
      display: flex
    }

    @media (min-width:1280px) {
      .header__toggle-sidebar[data-v-88c7c2ee] {
        display: none
      }
    }

    .header__toggle-search a[data-v-88c7c2ee],
    .header__toggle-sidebar a[data-v-88c7c2ee] {
      text-decoration: none;
      color: #353a40;
      color: var(--gray-900);
      display: flex;
      justify-content: center;
      align-items: center;
      width: 36px;
      height: 36px;
      font-size: var(--ms3)
    }

    .header__toggle-search a[data-v-88c7c2ee] {
      border-radius: 50em;
      will-change: background, padding, margin;
      transition: background .3s cubic-bezier(.4, 0, .14, 1), padding .3s cubic-bezier(.4, 0, .14, 1), margin .3s cubic-bezier(.4, 0, .14, 1);
      transition: background .3s var(--ease-in-out), padding .3s var(--ease-in-out), margin .3s var(--ease-in-out)
    }

    [data-v-958d1b38]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-958d1b38]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-958d1b38]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-958d1b38]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-958d1b38]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-958d1b38]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-958d1b38]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-958d1b38]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-958d1b38]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-958d1b38]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-958d1b38]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-958d1b38]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-958d1b38]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-958d1b38]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-958d1b38]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-958d1b38]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-958d1b38]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-958d1b38]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-958d1b38]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-958d1b38] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-958d1b38] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-958d1b38] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-958d1b38] {
      border-radius: 50em
    }

    .image[data-v-958d1b38] {
      display: block;
      position: relative;
      z-index: 1;
      background: #fafbfc;
      background: var(--gray-100)
    }

    .image--transparent[data-v-958d1b38] {
      background: transparent
    }

    .image img[data-v-958d1b38] {
      display: block;
      width: 100%
    }

    [class*=aspect-ratio--] img[data-v-958d1b38] {
      position: absolute;
      z-index: 1;
      top: 0;
      left: 0;
      -o-object-fit: cover;
      object-fit: cover;
      width: 100%;
      height: 100%
    }

    [class*=aspect-ratio--] iframe[data-v-958d1b38] {
      position: absolute;
      z-index: 1;
      top: 0;
      left: 0;
      -o-object-fit: cover;
      object-fit: cover;
      width: 100%;
      height: 100%
    }

    [data-v-6535949a]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-6535949a]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-6535949a]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-6535949a]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-6535949a]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-6535949a]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-6535949a]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-6535949a]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-6535949a]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-6535949a]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-6535949a]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-6535949a]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-6535949a]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-6535949a]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-6535949a]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-6535949a]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-6535949a]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-6535949a]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-6535949a]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-6535949a] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-6535949a] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-6535949a] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-6535949a] {
      border-radius: 50em
    }

    .link[data-v-6535949a] {
      display: inline;
      text-decoration: none;
      font-size: var(--ms1)
    }

    .link[data-v-6535949a],
    .link--primary[data-v-6535949a] {
      color: #353a40;
      color: var(--gray-900)
    }

    .link--primary span[data-v-6535949a] {
      display: inline;
      position: relative;
      z-index: 1;
      background-image: linear-gradient(180deg, transparent 0, currentColor 50%);
      background-position: 0 calc(1em + 5px);
      background-repeat: no-repeat;
      background-size: 0 1px;
      will-change: background-size, color;
      transition: background-size .5s cubic-bezier(.4, 0, .14, 1), color .25s cubic-bezier(.4, 0, .14, 1);
      transition: background-size .5s var(--ease-in-out), color var(--ease-in-out) .25s
    }

    .link--primary[disabled][data-v-6535949a] {
      cursor: not-allowed;
      opacity: .5;
      outline: 0
    }

    @media (hover:hover) and (pointer:fine) {

      .link--primary[data-v-6535949a]:not([disabled]):active,
      .link--primary[data-v-6535949a]:not([disabled]):focus,
      .link--primary[data-v-6535949a]:not([disabled]):hover {
        color: #f04e23;
        color: var(--hotmart-primary)
      }
    }

    @media (hover:hover) and (pointer:fine) {

      .link--primary:not([disabled]):active span[data-v-6535949a],
      .link--primary:not([disabled]):focus span[data-v-6535949a],
      .link--primary:not([disabled]):hover span[data-v-6535949a] {
        background-size: 100% 1px;
        transition-delay: 0s
      }
    }

    .link--secondary[data-v-6535949a] {
      color: #4D90CC!important;
      color: var(--hotmart-primary)
    }

    .link--secondary span[data-v-6535949a] {
      display: inline;
      position: relative;
      z-index: 1;
      background-image: linear-gradient(180deg, transparent 0, currentColor 50%);
      background-position: 0 calc(1em + 5px);
      background-repeat: no-repeat;
      background-size: 0 1px;
      will-change: background-size, color;
      transition: background-size .5s cubic-bezier(.4, 0, .14, 1), color .25s cubic-bezier(.4, 0, .14, 1);
      transition: background-size .5s var(--ease-in-out), color var(--ease-in-out) .25s
    }

    .link--secondary[disabled][data-v-6535949a] {
      cursor: not-allowed;
      opacity: .5;
      outline: 0
    }

    @media (hover:hover) and (pointer:fine) {

      .link--secondary[data-v-6535949a]:not([disabled]):active,
      .link--secondary[data-v-6535949a]:not([disabled]):focus,
      .link--secondary[data-v-6535949a]:not([disabled]):hover {
        color: #f04e23;
        color: var(--hotmart-primary)
      }
    }

    @media (hover:hover) and (pointer:fine) {

      .link--secondary:not([disabled]):active span[data-v-6535949a],
      .link--secondary:not([disabled]):focus span[data-v-6535949a],
      .link--secondary:not([disabled]):hover span[data-v-6535949a] {
        background-size: 100% 1px;
        transition-delay: 0s
      }
    }

    .link--secondary-lightest[data-v-6535949a] {
      color: #fdece7;
      color: var(--hotmart-primary-lightest)
    }

    .link--secondary-lightest span[data-v-6535949a] {
      display: inline;
      position: relative;
      z-index: 1;
      background-image: linear-gradient(180deg, transparent 0, currentColor 50%);
      background-position: 0 calc(1em + 5px);
      background-repeat: no-repeat;
      background-size: 0 1px;
      will-change: background-size, color;
      transition: background-size .5s cubic-bezier(.4, 0, .14, 1), color .25s cubic-bezier(.4, 0, .14, 1);
      transition: background-size .5s var(--ease-in-out), color var(--ease-in-out) .25s
    }

    .link--secondary-lightest[disabled][data-v-6535949a] {
      cursor: not-allowed;
      opacity: .5;
      outline: 0
    }

    @media (hover:hover) and (pointer:fine) {

      .link--secondary-lightest[data-v-6535949a]:not([disabled]):active,
      .link--secondary-lightest[data-v-6535949a]:not([disabled]):focus,
      .link--secondary-lightest[data-v-6535949a]:not([disabled]):hover {
        color: #fdece7;
        color: var(--hotmart-primary-lightest)
      }
    }

    @media (hover:hover) and (pointer:fine) {

      .link--secondary-lightest:not([disabled]):active span[data-v-6535949a],
      .link--secondary-lightest:not([disabled]):focus span[data-v-6535949a],
      .link--secondary-lightest:not([disabled]):hover span[data-v-6535949a] {
        background-size: 100% 1px;
        transition-delay: 0s
      }
    }

    .link--tertiary[data-v-6535949a] {
      color: #51c1c3;
      color: var(--hotmart-tertiary)
    }

    .link--tertiary span[data-v-6535949a] {
      display: inline;
      position: relative;
      z-index: 1;
      background-image: linear-gradient(180deg, transparent 0, currentColor 50%);
      background-position: 0 calc(1em + 5px);
      background-repeat: no-repeat;
      background-size: 0 1px;
      will-change: background-size, color;
      transition: background-size .5s cubic-bezier(.4, 0, .14, 1), color .25s cubic-bezier(.4, 0, .14, 1);
      transition: background-size .5s var(--ease-in-out), color var(--ease-in-out) .25s
    }

    .link--tertiary[disabled][data-v-6535949a] {
      cursor: not-allowed;
      opacity: .5;
      outline: 0
    }

    @media (hover:hover) and (pointer:fine) {

      .link--tertiary[data-v-6535949a]:not([disabled]):active,
      .link--tertiary[data-v-6535949a]:not([disabled]):focus,
      .link--tertiary[data-v-6535949a]:not([disabled]):hover {
        color: #51c1c3;
        color: var(--hotmart-tertiary)
      }
    }

    @media (hover:hover) and (pointer:fine) {

      .link--tertiary:not([disabled]):active span[data-v-6535949a],
      .link--tertiary:not([disabled]):focus span[data-v-6535949a],
      .link--tertiary:not([disabled]):hover span[data-v-6535949a] {
        background-size: 100% 1px;
        transition-delay: 0s
      }
    }

    .link__icon--left[data-v-6535949a] {
      color: #f04e23;
      color: var(--hotmart-primary);
      margin-right: calc(var(--ms-3)/2)
    }

    .link__icon--right[data-v-6535949a] {
      margin-left: calc(var(--ms-3)/2)
    }

    [data-v-ff41ee4e]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-ff41ee4e]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-ff41ee4e]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-ff41ee4e]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-ff41ee4e]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-ff41ee4e]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-ff41ee4e]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-ff41ee4e]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-ff41ee4e]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-ff41ee4e]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-ff41ee4e]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-ff41ee4e]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-ff41ee4e]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-ff41ee4e]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-ff41ee4e]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-ff41ee4e]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-ff41ee4e]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-ff41ee4e]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-ff41ee4e]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-ff41ee4e] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-ff41ee4e] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-ff41ee4e] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-ff41ee4e] {
      border-radius: 50em
    }

    .button[data-v-ff41ee4e] {
      text-decoration: none;
      will-change: color, background, border-color, box-shadow;
      transition: color .5s cubic-bezier(.4, 0, .14, 1), background .5s cubic-bezier(.4, 0, .14, 1), border-color .5s cubic-bezier(.4, 0, .14, 1), box-shadow .5s cubic-bezier(.4, 0, .14, 1);
      transition: color .5s var(--ease-in-out), background .5s var(--ease-in-out), border-color .5s var(--ease-in-out), box-shadow .5s var(--ease-in-out);
      outline: none;
      font-weight: 700;
      padding: var(--ms1);
      border-radius: 6px;
      border-radius: var(--border-radius);
      word-break: keep-all;
      display: inline-block
    }

    .button--primary[data-v-ff41ee4e] {
      color: #fff;
      color: var(--white);
      background: #4D90CC!important;
      background: var(--hotmart-primary);
      border: 1px solid #4D90CC!important;
      border: 1px solid var(--hotmart-primary)
    }

    @media (hover:hover) and (pointer:fine) {

      .button--primary[data-v-ff41ee4e]:not([disabled]):active,
      .button--primary[data-v-ff41ee4e]:not([disabled]):focus,
      .button--primary[data-v-ff41ee4e]:not([disabled]):hover {
        color: #fff;
        color: var(--white);
        background: #4D90CC!important;
        background: var(--hotmart-primary-darker);
        border-color: #4D90CC!important;
        border-color: var(--hotmart-primary-darker)
      }
    }

    @media (hover:hover) and (pointer:fine) {

      .button--primary[data-v-ff41ee4e]:not([disabled]):active,
      .button--primary[data-v-ff41ee4e]:not([disabled]):focus {
        box-shadow: 0 0 0 3px #4D90CC!important;
        box-shadow: 0 0 0 3px var(--hotmart-primary-lighter)
      }
    }

    .button--primary[disabled][data-v-ff41ee4e] {
      cursor: not-allowed;
      opacity: .5
    }

    .button--secondary[data-v-ff41ee4e] {
      color: #353a40;
      color: var(--gray-900);
      background: #fff;
      background: var(--white);
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400)
    }

    @media (hover:hover) and (pointer:fine) {

      .button--secondary[data-v-ff41ee4e]:not([disabled]):active,
      .button--secondary[data-v-ff41ee4e]:not([disabled]):focus,
      .button--secondary[data-v-ff41ee4e]:not([disabled]):hover {
        color: #f04e23;
        color: var(--hotmart-primary);
        background: #fdece7;
        background: var(--hotmart-primary-lightest);
        border-color: #ff9377;
        border-color: var(--hotmart-primary-lighter)
      }
    }

    @media (hover:hover) and (pointer:fine) {

      .button--secondary[data-v-ff41ee4e]:not([disabled]):active,
      .button--secondary[data-v-ff41ee4e]:not([disabled]):focus {
        box-shadow: 0 0 0 3px #ff9377;
        box-shadow: 0 0 0 3px var(--hotmart-primary-lighter)
      }
    }

    .button--secondary[disabled][data-v-ff41ee4e] {
      cursor: not-allowed;
      opacity: .5
    }

    .only-icon .button__icon--right[data-v-ff41ee4e] {
      margin-left: 0
    }

    [data-v-42688290]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-42688290]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-42688290]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-42688290]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-42688290]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-42688290]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-42688290]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-42688290]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-42688290]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-42688290]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-42688290]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-42688290]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-42688290]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-42688290]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-42688290]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-42688290]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-42688290]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-42688290]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-42688290]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-42688290] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-42688290] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-42688290] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-42688290] {
      border-radius: 50em
    }

    .header-primary-search[data-v-42688290] {
      position: relative;
      z-index: 2;
      background: #fff;
      background: var(--white);
      width: 100%;
      padding-right: calc(var(--ms1)*2);
      padding-bottom: calc(var(--ms1)*2);
      padding-left: calc(var(--ms1)*2)
    }

    .header-primary-search[data-v-42688290]:before {
      display: block;
      content: "";
      background: #fff;
      background: var(--white);
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      top: -100%
    }

    .header-primary-search__container[data-v-42688290] {
      width: 100%;
      max-width: 1440px;
      max-width: var(--desktop-l);
      margin-right: auto;
      margin-left: auto
    }

    .header-primary-search__marketplace[data-v-42688290] {
      position: relative;
      z-index: 1
    }

    .header-primary-search__marketplace-title[data-v-42688290] {
      margin-bottom: var(--ms1)
    }

    .header-primary-search__marketplace-search-submit[data-v-42688290] {
      position: absolute;
      z-index: 2;
      top: 50%;
      right: var(--ms1);
      transform: translateY(-50%);
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      color: #353a40;
      color: var(--gray-900);
      background: #fff;
      background: var(--white);
      height: calc(100% - 4px);
      display: flex;
      align-items: center
    }

    .header-primary-search__marketplace-search-submit[data-v-42688290] span {
      display: inline-block;
      margin-left: calc(var(--ms1)/2);
      padding: calc(var(--ms1)/4) calc(var(--ms1)/2);
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400);
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .header-primary-search__container-enter-active[data-v-42688290],
    .header-primary-search__container-leave-active[data-v-42688290] {
      will-change: transform;
      transition: transform .375s cubic-bezier(.4, 0, .14, 1);
      transition: transform var(--ease-in-out) .375s
    }

    .header-primary-search__container-leave-active[data-v-42688290] {
      transition-delay: .1875s
    }

    .header-primary-search__container-enter[data-v-42688290],
    .header-primary-search__container-leave-to[data-v-42688290] {
      transform: translateY(-200%)
    }

    .header-primary-search__container-enter-active .header-primary-search__marketplace[data-v-42688290],
    .header-primary-search__container-leave-active .header-primary-search__marketplace[data-v-42688290] {
      will-change: opacity;
      transition: opacity .1875s linear
    }

    .header-primary-search__container-enter-active .header-primary-search__marketplace[data-v-42688290] {
      transition-delay: .1875s
    }

    .header-primary-search__container-enter .header-primary-search__marketplace[data-v-42688290],
    .header-primary-search__container-leave-to .header-primary-search__marketplace[data-v-42688290] {
      opacity: 0
    }

    [data-v-42688290] .hm-mktplace-search-bar {
      z-index: 1
    }

    [data-v-42688290] .hm-mktplace-search-bar form>div {
      box-shadow: none;
      border-top-right-radius: 6px;
      border-top-right-radius: var(--border-radius);
      border-top-left-radius: 6px;
      border-top-left-radius: var(--border-radius);
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      border: 1px solid transparent;
      border-bottom: 1px solid var(--gray-400);
      will-change: border;
      transition: border 0s
    }

    [data-v-42688290] .hm-mktplace-search-bar form>div.is-focused,
    [data-v-42688290] .hm-mktplace-search-bar form>div.show-suggestion {
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400)
    }

    [data-v-42688290] .hm-mktplace-search-bar form>div.is-focused:not(.show-suggestion) {
      border-bottom-right-radius: 6px;
      border-bottom-right-radius: var(--border-radius);
      border-bottom-left-radius: 6px;
      border-bottom-left-radius: var(--border-radius)
    }

    [data-v-42688290] .hm-mktplace-search-bar form>div.is-focused.show-suggestion {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    [data-v-42688290] .hm-mktplace-search-bar form>div.is-focused,
    [data-v-42688290] .hm-mktplace-search-bar form>div.show-suggestion input[type=text] {
      background: #fff;
      background: var(--white)
    }

    [data-v-42688290] .hm-mktplace-search-bar input[type=text] {
      color: #353a40;
      color: var(--gray-900);
      padding: var(--ms1)
    }

    [data-v-42688290] .hm-mktplace-search-bar button[type=submit] svg {
      display: none
    }

    [data-v-42688290] .hm-mktplace-search-bar button[type=submit]+div {
      margin-top: 1px;
      background: #fff;
      background: var(--white)
    }

    [data-v-42688290] .hm-mktplace-search-bar button[type=submit]+div li:first-of-type {
      display: none
    }

    [data-v-42688290] .hm-mktplace-search-bar button[type=submit]+div li.hovered a {
      background: #ecf8f8;
      background: var(--hotmart-tertiary-lightest)
    }

    [data-v-42688290] .hm-mktplace-search-bar button[type=submit]+div li {
      font-weight: 700
    }

    [data-v-42688290] .hm-mktplace-search-bar button[type=submit]+div li span {
      font-weight: 400
    }

    [data-v-2c40c833]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-2c40c833]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-2c40c833]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-2c40c833]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-2c40c833]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-2c40c833]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-2c40c833]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-2c40c833]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-2c40c833]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-2c40c833]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-2c40c833]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-2c40c833]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-2c40c833]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-2c40c833]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-2c40c833]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-2c40c833]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-2c40c833]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-2c40c833]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-2c40c833]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-2c40c833] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-2c40c833] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-2c40c833] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-2c40c833] {
      border-radius: 50em
    }

    .sidebar[data-v-2c40c833] {
      position: fixed;
      z-index: 9999;
      width: 100%;
      height: 100%;
      pointer-events: none
    }

    .sidebar__container[data-v-2c40c833] {
      position: relative;
      z-index: 2;
      background: #fff;
      background: var(--white);
      width: 100%;
      max-width: 414px;
      max-width: var(--mobile-l);
      height: 100%;
      display: grid;
      grid-template-areas: "sidebar__area-1""sidebar__area-2""sidebar__area-3";
      grid-template-columns: 1fr;
      grid-template-rows: -webkit-min-content -webkit-min-content auto;
      grid-template-rows: min-content min-content auto;
      grid-gap: calc(var(--ms1)*2);
      overflow: scroll;
      margin-left: auto;
      pointer-events: all;
      padding-right: var(--ms-1);
      padding-left: var(--ms-1)
    }

    @media (min-width:768px) {
      .sidebar__container[data-v-2c40c833] {
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    .sidebar:not(.sidebar--available-search) .sidebar__container[data-v-2c40c833] {
      grid-template-areas: "sidebar__area-1""sidebar__area-3";
      grid-template-rows: -webkit-min-content auto;
      grid-template-rows: min-content auto
    }

    .sidebar__area-1[data-v-2c40c833] {
      grid-area: sidebar__area-1;
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: auto -webkit-min-content;
      grid-template-columns: auto min-content;
      align-items: center;
      margin-top: calc(var(--ms1)*2)
    }

    .sidebar__toggle-sidebar a[data-v-2c40c833] {
      text-decoration: none;
      color: #353a40;
      color: var(--gray-900);
      font-size: var(--ms3);
      display: flex;
      justify-content: center;
      align-items: center;
      width: 36px;
      height: 36px
    }

    .sidebar__area-2[data-v-2c40c833] {
      grid-area: sidebar__area-2;
      position: relative;
      z-index: 2
    }

    .sidebar:not(.sidebar--available-search) .sidebar__area-2[data-v-2c40c833] {
      display: none
    }

    .sidebar__area-3[data-v-2c40c833] {
      grid-area: sidebar__area-3;
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: auto -webkit-min-content;
      grid-template-rows: auto min-content;
      margin-bottom: calc(var(--ms1)*2)
    }

    .sidebar__title svg[data-v-2c40c833] {
      color: #f04e23;
      color: var(--hotmart-primary)
    }

    .sidebar__search[data-v-2c40c833] {
      position: relative;
      z-index: 1;
      width: 100%
    }

    .sidebar__search-title[data-v-2c40c833] {
      margin-bottom: var(--ms1)
    }

    .sidebar__navigation[data-v-2c40c833] {
      display: flex;
      flex: 1;
      flex-direction: column
    }

    .sidebar__navigation nav ul[data-v-2c40c833] {
      margin: 0;
      padding: 0;
      list-style: none
    }

    .sidebar__navigation nav[data-v-2c40c833] {
      display: block
    }

    .sidebar__navigation nav[data-v-2c40c833]:first-of-type {
      flex: 1
    }

    .sidebar__navigation nav[data-v-2c40c833]:not(:last-child) {
      margin-bottom: calc(var(--ms1)*3)
    }

    .sidebar__navigation nav ul[data-v-2c40c833] {
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: auto;
      grid-gap: var(--ms1)
    }

    .sidebar__container .button[data-v-2c40c833] {
      width: 100%;
      margin-left: auto;
      margin-right: auto;
      display: flex;
      flex-direction: row;
      justify-content: space-between
    }

    .sidebar__container .button[data-v-2c40c833]:not(:last-child) {
      margin-bottom: var(--ms0)
    }

    @media (min-width:1024px) {
      .sidebar__container .button[data-v-2c40c833]:not(:last-child) {
        margin-bottom: 0
      }
    }

    .sidebar__container-enter-active[data-v-2c40c833],
    .sidebar__container-leave-active[data-v-2c40c833] {
      will-change: transform;
      transition: transform .375s cubic-bezier(.4, 0, .14, 1);
      transition: transform var(--ease-in-out) .375s
    }

    .sidebar__container-enter[data-v-2c40c833],
    .sidebar__container-leave-to[data-v-2c40c833] {
      transform: translateX(100%)
    }

    .sidebar__overlay[data-v-2c40c833] {
      position: fixed;
      z-index: 1;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(107, 116, 128, .5);
      background: var(--gray-500-50)
    }

    .sidebar__overlay-enter-active[data-v-2c40c833],
    .sidebar__overlay-leave-active[data-v-2c40c833] {
      will-change: opacity;
      transition: opacity .25s cubic-bezier(.4, 0, .14, 1);
      transition: opacity var(--ease-in-out) .25s
    }

    .sidebar__overlay-enter[data-v-2c40c833],
    .sidebar__overlay-leave-to[data-v-2c40c833] {
      opacity: 0
    }

    [data-v-2c40c833] .hm-mktplace-search-bar {
      z-index: 1
    }

    [data-v-2c40c833] .hm-mktplace-search-bar form>div {
      box-shadow: none;
      border-top-right-radius: 6px;
      border-top-right-radius: var(--border-radius);
      border-top-left-radius: 6px;
      border-top-left-radius: var(--border-radius);
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      border: 1px solid transparent;
      border-bottom: 1px solid var(--gray-400);
      will-change: border;
      transition: border 0s
    }

    [data-v-2c40c833] .hm-mktplace-search-bar form>div.is-focused,
    [data-v-2c40c833] .hm-mktplace-search-bar form>div.show-suggestion {
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400)
    }

    [data-v-2c40c833] .hm-mktplace-search-bar form>div.is-focused:not(.show-suggestion) {
      border-bottom-right-radius: 6px;
      border-bottom-right-radius: var(--border-radius);
      border-bottom-left-radius: 6px;
      border-bottom-left-radius: var(--border-radius)
    }

    [data-v-2c40c833] .hm-mktplace-search-bar form>div.is-focused.show-suggestion {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    [data-v-2c40c833] .hm-mktplace-search-bar input[type=text] {
      color: #353a40;
      color: var(--gray-900);
      padding: var(--ms1)
    }

    [data-v-2c40c833] .hm-mktplace-search-bar button[type=submit] {
      background: #fff;
      background: var(--white)
    }

    [data-v-2c40c833] .hm-mktplace-search-bar button[type=submit]+div {
      margin-top: 1px;
      background: #fff;
      background: var(--white)
    }

    [data-v-2c40c833] .hm-mktplace-search-bar button[type=submit]+div li:first-of-type {
      display: none
    }

    [data-v-2c40c833] .hm-mktplace-search-bar button[type=submit]+div li.hovered a {
      background: #ecf8f8;
      background: var(--hotmart-tertiary-lightest)
    }

    [data-v-2c40c833] .hm-mktplace-search-bar button[type=submit]+div li {
      font-weight: 700
    }

    [data-v-2c40c833] .hm-mktplace-search-bar button[type=submit]+div li span {
      font-weight: 400
    }

    [data-v-579e12f4]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-579e12f4]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-579e12f4]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-579e12f4]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-579e12f4]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-579e12f4]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-579e12f4]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-579e12f4]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-579e12f4]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-579e12f4]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-579e12f4]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-579e12f4]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-579e12f4]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-579e12f4]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-579e12f4]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-579e12f4]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-579e12f4]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-579e12f4]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-579e12f4]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-579e12f4] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-579e12f4] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-579e12f4] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-579e12f4] {
      border-radius: 50em
    }

    .hero[data-v-579e12f4] {
      /*background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0), #fff), url(https://static.teamtreehouse.com/assets/views/marketing/home/homepage-hero-86e988fc10618a6d2b743327d67eeca3b0396f9720d94c35bbff8cd217de96d1.jpg);
      /*background-image: linear-gradient(180deg, hsla(0, 0%, 100%, 0), var(--white)), url(https://static.teamtreehouse.com/assets/views/marketing/home/homepage-hero-86e988fc10618a6d2b743327d67eeca3b0396f9720d94c35bbff8cd217de96d1.jpg);
      background-position: top;
      background-repeat: no-repeat;
      background-size: 100%;
      margin-bottom: calc(var(--ms1)*4);
      padding: calc(var(--ms1)*8)*/ var(--ms1) calc(var(--ms1)*4)
    }
    .hero[data-v-579e12f4]{background-image:linear-gradient(180deg,hsla(0,0%,100%,0),#fff),url(https://www.hotmart.com/images/gallaxy.svg);background-image:linear-gradient(180deg,hsla(0,0%,100%,0),var(--white)),url(https://www.hotmart.com/images/gallaxy.svg);background-position:top;background-repeat:no-repeat;background-size:100%;margin-bottom:calc(var(--ms1)*4);padding:calc(var(--ms1)*8) var(--ms1) calc(var(--ms1)*4);}


    @media (min-width:768px) {
      .hero[data-v-579e12f4] {
        margin-bottom: calc(var(--ms1)*4.5);
        padding-right: calc(var(--ms1)*2);
        padding-bottom: calc(var(--ms1)*4.5);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1024px) {
      .hero[data-v-579e12f4] {
        margin-bottom: calc(var(--ms1)*5);
        padding-top: calc(var(--ms1)*10);
        padding-bottom: calc(var(--ms1)*5)
      }
    }

    .hero__container[data-v-579e12f4] {
      width: 100%;
      max-width: 1440px;
      max-width: var(--desktop-l);
      margin-right: auto;
      margin-left: auto;
      display: grid
    }

    .hero:not(.hero--placeholder-image) .hero__container[data-v-579e12f4] {
      grid-template-areas: "hero__content";
      grid-template-columns: auto;
      grid-template-rows: auto
    }

    .hero.hero--placeholder-image .hero__container[data-v-579e12f4] {
      grid-template-areas: "hero__placeholder""hero__content";
      grid-template-columns: 1fr;
      grid-template-rows: auto auto;
      grid-gap: calc(var(--ms1)*2);
      align-items: center
    }

    @media (min-width:1024px) {
      .hero.hero--placeholder-image .hero__container[data-v-579e12f4] {
        grid-template-areas: "hero__content hero__placeholder";
        grid-template-columns: 1.25fr .75fr;
        grid-template-rows: auto
      }
    }

    .hero.hero--placeholder-image.hero--placeholder-image-overlap .hero__container[data-v-579e12f4] {
      overflow: hidden
    }

    .hero__content[data-v-579e12f4] {
      position: relative;
      z-index: 2;
      width: 100%;
      grid-area: hero__content
    }

    @media (min-width:1024px) {
      .hero:not(.hero--placeholder-image) .hero__content[data-v-579e12f4] {
        max-width: calc(var(--ms1)*60)
      }
    }

    .hero__placeholder[data-v-579e12f4] {
      grid-area: hero__placeholder;
      display: flex;
      flex-wrap: wrap;
      align-content: center
    }

    .hero__placeholder .image[data-v-579e12f4] {
      width: 100%;
      max-width: calc(var(--ms1)*40);
      margin-left: auto;
      margin-right: auto
    }

    @media (min-width:1024px) {
      .hero__placeholder .image[data-v-579e12f4] {
        margin-left: 0;
        margin-right: 0
      }
    }

    .hero__placeholder .image[data-v-579e12f4] img {
      -o-object-fit: cover;
      object-fit: cover;
      pointer-events: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      width: 100%;
      height: 100%
    }

    .hero.hero--placeholder-image.hero--placeholder-image-overlap .image[data-v-579e12f4] img {
      width: calc(100% + var(--ms1)*20);
      height: calc(100% + var(--ms1)*20);
      margin-top: calc(var(--ms1)*-10);
      margin-left: calc(var(--ms1)*-10)
    }

    .hero__logo[data-v-579e12f4] {
      width: 100%;
      max-width: calc(var(--ms1)*14);
      margin-bottom: calc(var(--ms1)/2*3)
    }

    .hero__logo picture[data-v-579e12f4] {
      background: transparent
    }

    .hero__title[data-v-579e12f4] {
      margin-bottom: calc(var(--ms1)/2*3)
    }

    .hero__body[data-v-579e12f4] {
      font-size: calc(var(--ms1)*3/2)
    }

    .hero__body p[data-v-579e12f4]:last-of-type {
      margin-bottom: 0
    }

    @media (min-width:1024px) {
      .hero--without-image .hero__body[data-v-579e12f4] {
        max-width: calc(var(--ms1)*50)
      }
    }

    .hero__body+.hero__buttons[data-v-579e12f4] {
      margin-top: calc(var(--ms1)*2)
    }

    .hero__buttons[data-v-579e12f4],
    .hero__links[data-v-579e12f4] {
      width: 100%
    }

    @media (min-width:768px) {
      .hero__buttons[data-v-579e12f4] {
        display: flex
      }
    }

    .hero__buttons .button[data-v-579e12f4] {
      display: flex;
      align-items: center
    }

    @media (min-width:768px) {
      .hero__buttons .button[data-v-579e12f4] {
        display: inline-block
      }
    }

    .hero__buttons .button[data-v-579e12f4]:not(:last-of-type) {
      margin-bottom: var(--ms1)
    }

    @media (min-width:768px) {
      .hero__buttons .button[data-v-579e12f4]:not(:last-of-type) {
        margin-bottom: 0;
        margin-right: var(--ms1)
      }
    }

    .hero__buttons .button[data-v-579e12f4] .button__icon--right {
      margin-left: auto
    }

    @media (min-width:768px) {
      .hero__buttons .button[data-v-579e12f4] .button__icon--right {
        margin-bottom: 0;
        margin-left: calc(var(--ms1)/2)
      }
    }

    .hero__buttons+.hero__links[data-v-579e12f4] {
      margin-top: calc(var(--ms1)/2*3)
    }

    [data-v-16261ef6]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-16261ef6]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-16261ef6]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-16261ef6]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-16261ef6]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-16261ef6]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-16261ef6]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-16261ef6]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-16261ef6]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-16261ef6]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-16261ef6]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-16261ef6]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-16261ef6]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-16261ef6]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-16261ef6]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-16261ef6]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-16261ef6]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-16261ef6]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-16261ef6]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-16261ef6] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-16261ef6] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-16261ef6] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-16261ef6] {
      border-radius: 50em
    }

    .title[data-v-16261ef6] {
      font-size: var(--ms6);
      font-weight: 400;
      line-height: 1.2;
      margin-bottom: 0
    }

    @media (min-width:768px) {
      .title[data-v-16261ef6] {
        font-size: var(--ms8)
      }
    }

    [data-v-48703ab6]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-48703ab6]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-48703ab6]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-48703ab6]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-48703ab6]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-48703ab6]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-48703ab6]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-48703ab6]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-48703ab6]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-48703ab6]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-48703ab6]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-48703ab6]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-48703ab6]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-48703ab6]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-48703ab6]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-48703ab6]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-48703ab6]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-48703ab6]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-48703ab6]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-48703ab6] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-48703ab6] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-48703ab6] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-48703ab6] {
      border-radius: 50em
    }

    .video[data-v-48703ab6] {
      margin-bottom: calc(var(--ms1)*8);
      padding-right: var(--ms1);
      padding-left: var(--ms1)
    }

    @media (min-width:768px) {
      .video[data-v-48703ab6] {
        margin-bottom: calc(var(--ms1)*9);
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1024px) {
      .video[data-v-48703ab6] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    @media (min-width:1440px) {
      .video[data-v-48703ab6] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .video__container[data-v-48703ab6] {
      position: relative;
      z-index: 1;
      width: 100%;
      max-width: 1280px;
      max-width: var(--desktop-m);
      margin-right: auto;
      margin-left: auto;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    [data-v-9a33e7bc]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-9a33e7bc]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-9a33e7bc]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-9a33e7bc]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-9a33e7bc]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-9a33e7bc]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-9a33e7bc]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-9a33e7bc]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-9a33e7bc]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-9a33e7bc]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-9a33e7bc]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-9a33e7bc]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-9a33e7bc]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-9a33e7bc]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-9a33e7bc]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-9a33e7bc]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-9a33e7bc]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-9a33e7bc]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-9a33e7bc]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-9a33e7bc] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-9a33e7bc] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-9a33e7bc] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-9a33e7bc] {
      border-radius: 50em
    }

    .video-inline[data-v-9a33e7bc] {
      display: block;
      position: relative;
      z-index: 1
    }

    .video-inline__title[data-v-9a33e7bc] {
      position: relative;
      z-index: 2;
      width: 100%;
      margin-bottom: calc(var(--ms1)/2*3)
    }

    @media (min-width:1024px) {
      .video-inline__title[data-v-9a33e7bc] {
        position: absolute;
        max-width: 768px;
        max-width: var(--tablet);
        margin-bottom: 0;
        color: #fff;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        bottom: calc(var(--ms1)*2);
        left: calc(var(--ms1)*2)
      }
    }

    .video-inline__player[data-v-9a33e7bc],
    .video-inline__player iframe[data-v-9a33e7bc] {
      position: absolute;
      z-index: 3;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .video-inline__player iframe[data-v-9a33e7bc] {
      border: 0
    }

    .video-inline__poster[data-v-9a33e7bc] {
      position: relative;
      z-index: 1
    }

    .video-inline__button[data-v-9a33e7bc] {
      position: absolute;
      z-index: 2;
      width: calc(var(--ms1)*5);
      height: calc(var(--ms1)*5);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border: 2px solid #fff;
      border: 2px solid var(--white);
      border-radius: 50em;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: var(--ms0);
      font-size: var(--ms1);
      background: rgba(0, 0, 0, .5);
      background: var(--black-50);
      will-change: background;
      transition: background .5s cubic-bezier(.4, 0, .14, 1);
      transition: background .5s var(--ease-in-out);
      color: #fff;
      color: var(--white);
      cursor: pointer
    }

    @media (min-width:768px) {
      .video-inline__button[data-v-9a33e7bc] {
        width: calc(var(--ms1)*6);
        height: calc(var(--ms1)*6)
      }
    }

    @media (hover:none) and (pointer:coarse),
    (hover:none) and (pointer:fine) {
      .video-inline__button[data-v-9a33e7bc] {
        background: #f04e23;
        background: var(--hotmart-primary)
      }
    }

    @media (hover:hover) and (pointer:fine) {
      .video-inline:hover .video-inline__button[data-v-9a33e7bc] {
        background: #f04e23;
        background: var(--hotmart-primary)
      }
    }

    .video-inline__button svg[data-v-9a33e7bc] {
      transform: translateX(4px);
      font-size: var(--ms5)
    }

    @media (min-width:768px) {
      .video-inline__button svg[data-v-9a33e7bc] {
        font-size: var(--ms6)
      }
    }

    .video-inline__image[data-v-9a33e7bc] {
      cursor: pointer;
      width: 100%;
      position: relative;
      z-index: 1
    }

    .video-inline__image[data-v-9a33e7bc]:after,
    .video-inline__image[data-v-9a33e7bc]:before {
      /*content: "";*/
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      will-change: opacity;
      transition: opacity .5s cubic-bezier(.4, 0, .14, 1);
      transition: opacity .5s var(--ease-in-out);
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .video-inline__image[data-v-9a33e7bc]:before {
      background: linear-gradient(180deg, transparent 10%, #000);
      background: linear-gradient(180deg, transparent 10%, var(--black));
      z-index: 2;
      opacity: .5
    }

    .video-inline__image[data-v-9a33e7bc]:after {
      background: linear-gradient(180deg, transparent 10%, #f04e23 80%);
      background: linear-gradient(180deg, transparent 10%, var(--hotmart-primary) 80%);
      z-index: 1;
      opacity: 0
    }

    @media (hover:hover) and (pointer:fine) {
      .video-inline:hover .video-inline__image[data-v-9a33e7bc]:before {
        opacity: 0
      }

      .video-inline:hover .video-inline__image[data-v-9a33e7bc]:after {
        opacity: .5
      }
    }

    [data-v-78f49ef0]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-78f49ef0]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-78f49ef0]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-78f49ef0]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-78f49ef0]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-78f49ef0]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-78f49ef0]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-78f49ef0]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-78f49ef0]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-78f49ef0]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-78f49ef0]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-78f49ef0]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-78f49ef0]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-78f49ef0]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-78f49ef0]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-78f49ef0]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-78f49ef0]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-78f49ef0]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-78f49ef0]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-78f49ef0] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-78f49ef0] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-78f49ef0] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-78f49ef0] {
      border-radius: 50em
    }

    .content-blocks[data-v-78f49ef0] {
      margin-bottom: calc(var(--ms1)*8);
      padding-right: var(--ms1);
      padding-left: var(--ms1)
    }

    @media (min-width:768px) {
      .content-blocks[data-v-78f49ef0] {
        margin-bottom: calc(var(--ms1)*9);
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1024px) {
      .content-blocks[data-v-78f49ef0] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    @media (min-width:1440px) {
      .content-blocks[data-v-78f49ef0] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .content-blocks__container[data-v-78f49ef0] {
      width: 100%;
      max-width: 1280px;
      max-width: var(--desktop-m);
      margin-right: auto;
      margin-left: auto
    }

    .content-blocks__body[data-v-78f49ef0],
    .content-blocks__title[data-v-78f49ef0] {
      text-align: center
    }

    .content-blocks__title[data-v-78f49ef0] {
      margin-bottom: calc(var(--ms1)/2*3)
    }

    .content-blocks__body[data-v-78f49ef0] {
      font-size: var(--ms3)
    }

    .content-block[data-v-78f49ef0]:not(:last-child),
    .content-blocks__body[data-v-78f49ef0] {
      margin-bottom: calc(var(--ms1)*8)
    }

    @media (min-width:768px) {

      .content-block[data-v-78f49ef0]:not(:last-child),
      .content-blocks__body[data-v-78f49ef0] {
        margin-bottom: calc(var(--ms1)*9)
      }
    }

    @media (min-width:1024px) {

      .content-block[data-v-78f49ef0]:not(:last-child),
      .content-blocks__body[data-v-78f49ef0] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    @media (min-width:1024px) {
      .content-block[data-v-78f49ef0]:nth-child(2n) {
        grid-template-areas: "content-block__image content-block__tag""content-block__image content-block__title""content-block__image content-block__body"
      }
    }

    @media (min-width:1024px) {
      .content-block:nth-child(2n).content-block--links[data-v-78f49ef0] {
        grid-template-areas: "content-block__image content-block__tag""content-block__image content-block__title""content-block__image content-block__body""content-block__image content-block__links"
      }
    }

    @media (min-width:1024px) {
      .content-block:nth-child(2n).content-block--social-proof[data-v-78f49ef0] {
        grid-template-areas: "content-block__image content-block__tag""content-block__image content-block__title""content-block__image content-block__body""content-block__image content-block__social-proof"
      }
    }

    @media (min-width:1024px) {
      .content-block:nth-child(2n).content-block--links.content-block--social-proof[data-v-78f49ef0] {
        grid-template-areas: "content-block__image content-block__tag""content-block__image content-block__title""content-block__image content-block__body""content-block__image content-block__links""content-block__image content-block__social-proof"
      }
    }

    @media (min-width:1024px) {

      .content-block[data-v-78f49ef0]:nth-child(2n) .content-block__body,
      .content-block[data-v-78f49ef0]:nth-child(2n) .content-block__links,
      .content-block[data-v-78f49ef0]:nth-child(2n) .content-block__social-proof,
      .content-block[data-v-78f49ef0]:nth-child(2n) .content-block__tag,
      .content-block[data-v-78f49ef0]:nth-child(2n) .content-block__title {
        margin-right: 0;
        margin-left: calc(var(--ms1)*3/2)
      }
    }

    @media (min-width:1024px) {
      .content-block:nth-child(2n) .content-block__image[data-v-78f49ef0] {
        margin-left: 0;
        margin-right: calc(var(--ms1)*3/2)
      }
    }

    [data-v-2c530488]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-2c530488]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-2c530488]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-2c530488]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-2c530488]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-2c530488]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-2c530488]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-2c530488]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-2c530488]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-2c530488]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-2c530488]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-2c530488]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-2c530488]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-2c530488]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-2c530488]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-2c530488]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-2c530488]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-2c530488]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-2c530488]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-2c530488] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-2c530488] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-2c530488] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-2c530488] {
      border-radius: 50em
    }

    .content-block[data-v-2c530488] {
      width: 100%;
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: -webkit-max-content;
      grid-template-rows: max-content;
      grid-template-areas: "content-block__tag""content-block__title""content-block__body""content-block__image"
    }

    @media (min-width:1024px) {
      .content-block[data-v-2c530488] {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: -webkit-max-content -webkit-max-content auto;
        grid-template-rows: max-content max-content auto;
        grid-template-areas: "content-block__tag content-block__image""content-block__title content-block__image""content-block__body content-block__image"
      }
    }

    .content-block--links[data-v-2c530488] {
      grid-template-columns: 1fr;
      grid-template-rows: -webkit-max-content;
      grid-template-rows: max-content;
      grid-template-areas: "content-block__tag""content-block__title""content-block__body""content-block__image""content-block__links"
    }

    @media (min-width:1024px) {
      .content-block--links[data-v-2c530488] {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: -webkit-max-content -webkit-max-content -webkit-max-content auto;
        grid-template-rows: max-content max-content max-content auto;
        grid-template-areas: "content-block__tag content-block__image""content-block__title content-block__image""content-block__body content-block__image""content-block__links content-block__image"
      }
    }

    .content-block--social-proof[data-v-2c530488] {
      grid-template-columns: 1fr;
      grid-template-rows: -webkit-max-content;
      grid-template-rows: max-content;
      grid-template-areas: "content-block__tag""content-block__title""content-block__body""content-block__image""content-block__social-proof"
    }

    @media (min-width:1024px) {
      .content-block--social-proof[data-v-2c530488] {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: -webkit-max-content -webkit-max-content auto -webkit-max-content;
        grid-template-rows: max-content max-content auto max-content;
        grid-template-areas: "content-block__tag content-block__image""content-block__title content-block__image""content-block__body content-block__image""content-block__social-proof content-block__image"
      }
    }

    .content-block--links.content-block--social-proof[data-v-2c530488] {
      grid-template-columns: 1fr;
      grid-template-rows: -webkit-max-content;
      grid-template-rows: max-content;
      grid-template-areas: "content-block__tag""content-block__title""content-block__body""content-block__image""content-block__links""content-block__social-proof"
    }

    @media (min-width:1024px) {
      .content-block--links.content-block--social-proof[data-v-2c530488] {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: -webkit-max-content -webkit-max-content -webkit-max-content auto -webkit-max-content;
        grid-template-rows: max-content max-content max-content auto max-content;
        grid-template-areas: "content-block__tag content-block__image""content-block__title content-block__image""content-block__body content-block__image""content-block__links content-block__image""content-block__social-proof content-block__image"
      }
    }

    .content-block__tag[data-v-2c530488],
    .content-block__title[data-v-2c530488] {
      margin-bottom: calc(var(--ms1)/2*3)
    }

    .content-block__body[data-v-2c530488],
    .content-block__image[data-v-2c530488],
    .content-block__links[data-v-2c530488] {
      margin-bottom: calc(var(--ms1)*3)
    }

    @media (min-width:1024px) {

      .content-block__body[data-v-2c530488],
      .content-block__links[data-v-2c530488],
      .content-block__social-proof[data-v-2c530488],
      .content-block__tag[data-v-2c530488],
      .content-block__title[data-v-2c530488] {
        margin-right: calc(var(--ms1)*3/2)
      }
    }

    .content-block__tag[data-v-2c530488] {
      margin-bottom: var(--ms1);
      grid-area: content-block__tag
    }

    .content-block__title[data-v-2c530488] {
      grid-area: content-block__title
    }

    .content-block__body[data-v-2c530488] {
      grid-area: content-block__body;
      font-size: var(--ms4)
    }

    .content-block__body[data-v-2c530488] p:last-of-type {
      margin-bottom: 0
    }

    .content-block__links[data-v-2c530488] {
      grid-area: content-block__links
    }

    .content-block--links:not(.content-block--social-proof) .content-block__links[data-v-2c530488] {
      margin-bottom: 0
    }

    .content-block__links ul[data-v-2c530488] {
      list-style: none;
      margin: 0;
      padding: 0
    }

    .content-block__links li[data-v-2c530488]:not(:last-of-type) {
      margin-bottom: calc(var(--ms1)/2*3)
    }

    .content-block__links .link[data-v-2c530488] {
      font-size: var(--ms2)
    }

    .content-block__social-proof[data-v-2c530488] {
      grid-area: content-block__social-proof
    }

    .content-block__image[data-v-2c530488] {
      grid-area: content-block__image;
      display: flex;
      align-items: center
    }

    @media (min-width:1024px) {
      .content-block__image[data-v-2c530488] {
        margin-bottom: 0;
        margin-left: calc(var(--ms1)*3/2)
      }
    }

    .content-block__image[data-v-2c530488] .image {
      width: 100%;
      max-width: calc(var(--ms1)*32);
      margin-left: auto;
      margin-right: auto
    }

    @media (min-width:1024px) {
      .content-block__image[data-v-2c530488] .image {
        max-width: none
      }
    }

    [data-v-168455c2]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-168455c2]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-168455c2]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-168455c2]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-168455c2]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-168455c2]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-168455c2]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-168455c2]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-168455c2]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-168455c2]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-168455c2]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-168455c2]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-168455c2]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-168455c2]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-168455c2]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-168455c2]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-168455c2]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-168455c2]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-168455c2]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-168455c2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-168455c2] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-168455c2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-168455c2] {
      border-radius: 50em
    }

    .tag[data-v-168455c2] {
      line-height: 1;
      white-space: nowrap;
      display: inline-block
    }

    .tag--text[data-v-168455c2] {
      font-size: var(--ms0);
      font-weight: 700;
      text-transform: uppercase
    }

    .tag--text.tag--light[data-v-168455c2] {
      color: #fff;
      color: var(--white)
    }

    .tag--text.tag--dark[data-v-168455c2] {
      color: #6b7480;
      color: var(--gray-500)
    }

    .tag--pill[data-v-168455c2] {
      white-space: nowrap;
      border-radius: 50em;
      padding: calc(var(--ms-2)/2) var(--ms-2);
      font-size: var(--ms0)
    }

    .tag--pill.tag--light[data-v-168455c2] {
      border: 1px solid #dfe2e6;
      border: 1px solid var(--gray-300);
      color: #353a40;
      color: var(--gray-900)
    }

    .tag--pill.tag--dark[data-v-168455c2] {
      background: #6b7480;
      background: var(--gray-500);
      color: #fff;
      color: var(--white)
    }

    [data-v-32d4fc32]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-32d4fc32]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-32d4fc32]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-32d4fc32]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-32d4fc32]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-32d4fc32]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-32d4fc32]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-32d4fc32]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-32d4fc32]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-32d4fc32]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-32d4fc32]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-32d4fc32]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-32d4fc32]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-32d4fc32]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-32d4fc32]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-32d4fc32]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-32d4fc32]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-32d4fc32]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-32d4fc32]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-32d4fc32] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-32d4fc32] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-32d4fc32] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-32d4fc32] {
      border-radius: 50em
    }

    .card-social-proof--text .card-social-proof__body[data-v-32d4fc32] {
      margin-bottom: var(--ms1)
    }

    .card-social-proof--text .card-social-proof__body p[data-v-32d4fc32] {
      margin-bottom: 0
    }

    .card-social-proof--text .card-social-proof__person-wrapper[data-v-32d4fc32] {
      display: grid;
      width: -webkit-fit-content;
      width: -moz-fit-content;
      width: fit-content;
      grid-template-columns: auto;
      grid-template-rows: auto;
      grid-template-areas: "card-social-proof__person-avatar card-social-proof__person-name""card-social-proof__person-avatar card-social-proof__person-company"
    }

    @media (min-width:768px) {
      .card-social-proof--text .card-social-proof__person-wrapper[data-v-32d4fc32] {
        align-items: center;
        grid-template-columns: auto auto auto;
        grid-template-areas: "card-social-proof__person-avatar card-social-proof__person-name card-social-proof__person-company"
      }
    }

    .card-social-proof__person-avatar[data-v-32d4fc32] {
      grid-area: card-social-proof__person-avatar;
      width: calc(var(--ms1)*2);
      height: calc(var(--ms1)*2);
      margin-right: calc(var(--ms1)/2)
    }

    .card-social-proof__person-avatar picture[data-v-32d4fc32] {
      display: block;
      width: 100%;
      height: 100%
    }

    .card-social-proof--text .card-social-proof__person-name[data-v-32d4fc32] {
      grid-area: card-social-proof__person-name;
      font-weight: 700
    }

    .card-social-proof--text .card-social-proof__person-company[data-v-32d4fc32] {
      grid-area: card-social-proof__person-company;
      display: flex;
      align-items: center
    }

    @media (min-width:768px) {
      .card-social-proof--text .card-social-proof__person-company[data-v-32d4fc32]:before {
        content: "—";
        margin-left: calc(var(--ms1)/2);
        margin-right: calc(var(--ms1)/2)
      }
    }

    [data-v-7717109f]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-7717109f]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-7717109f]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-7717109f]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-7717109f]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-7717109f]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-7717109f]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-7717109f]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-7717109f]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-7717109f]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-7717109f]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-7717109f]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-7717109f]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-7717109f]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-7717109f]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-7717109f]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-7717109f]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-7717109f]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-7717109f]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-7717109f] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-7717109f] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-7717109f] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-7717109f] {
      border-radius: 50em
    }

    .knowledge-hub[data-v-7717109f] {
      margin-bottom: calc(var(--ms1)*8)
    }

    @media (min-width:768px) {
      .knowledge-hub[data-v-7717109f] {
        margin-bottom: calc(var(--ms1)*9)
      }
    }

    @media (min-width:1024px) {
      .knowledge-hub[data-v-7717109f] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    @media (min-width:1280px) {
      .knowledge-hub[data-v-7717109f] {
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1440px) {
      .knowledge-hub[data-v-7717109f] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .knowledge-hub__container[data-v-7717109f] {
      width: 100%;
      max-width: 1280px;
      max-width: var(--desktop-m);
      margin-right: auto;
      margin-left: auto
    }

    .knowledge-hub__body[data-v-7717109f],
    .knowledge-hub__title[data-v-7717109f] {
      text-align: center;
      padding-right: var(--ms1);
      padding-left: var(--ms1)
    }

    .knowledge-hub__body[data-v-7717109f] {
      font-size: var(--ms3);
      margin-bottom: calc(var(--ms1)*3)
    }

    .knowledge__body p[data-v-7717109f]:last-of-type {
      margin: 0
    }

    .carousel[data-v-7717109f] {
      display: flex;
      width: 100%
    }

    .carousel__gallery-sidebar[data-v-7717109f] {
      width: 300px;
      z-index: 2;
      left: -10000px;
      top: -10000px;
      position: absolute
    }

    @media (min-width:1280px) {
      .carousel__gallery-sidebar[data-v-7717109f] {
        position: relative;
        left: 0;
        top: 0
      }
    }

    .carousel__gallery-sidebar .carousel__slide[data-v-7717109f] {
      display: flex;
      justify-content: flex-start;
      cursor: pointer;
      font-size: var(--ms0);
      height: auto;
      width: 100%;
      padding: var(--ms3)
    }

    .carousel__gallery-sidebar .carousel__slide-icon[data-v-7717109f] {
      margin-right: var(--ms-2);
      will-change: color;
      transition: color .5s cubic-bezier(.4, 0, .14, 1);
      transition: color .5s var(--ease-in-out)
    }

    .carousel__slide-content[data-v-7717109f] {
      flex: 1
    }

    .carousel__gallery-sidebar .slide-content__title[data-v-7717109f] {
      font-size: var(--ms1);
      margin-bottom: var(--ms-2);
      line-height: 1.4
    }

    .carousel__gallery-sidebar .slide-content__body[data-v-7717109f] {
      font-size: var(--ms0);
      line-height: 1.4;
      margin: 0
    }

    .carousel__gallery-sidebar .swiper-container[data-v-7717109f] {
      margin: 0;
      width: 100%;
      overflow: visible;
      overflow: initial
    }

    .carousel__gallery-sidebar .swiper-wrapper[data-v-7717109f] {
      justify-content: space-between
    }

    .carousel__gallery-sidebar .swiper-slide-thumb-active[data-v-7717109f] {
      background: #ecf8f8;
      background: var(--hotmart-tertiary-lightest)
    }

    .carousel__gallery-sidebar .swiper-slide-thumb-active .carousel__slide-icon[data-v-7717109f] {
      color: #51c1c3;
      color: var(--hotmart-tertiary)
    }

    .carousel__gallery-sidebar .swiper-slide[data-v-7717109f] {
      border-top: 1px solid #d0d3d6;
      border-top: 1px solid var(--gray-400)
    }

    .carousel__gallery-sidebar .swiper-slide[data-v-7717109f]:last-of-type {
      border-bottom: 1px solid #d0d3d6;
      border-bottom: 1px solid var(--gray-400)
    }

    .carousel__gallery-sidebar .swiper-slide.swiper-slide-thumb-active[data-v-7717109f],
    .carousel__gallery-sidebar .swiper-slide.swiper-slide-thumb-active+.swiper-slide[data-v-7717109f] {
      border-top-color: transparent
    }

    .carousel__gallery-sidebar .swiper-slide:last-of-type.swiper-slide-thumb-active[data-v-7717109f] {
      border-bottom-color: transparent
    }

    .carousel__gallery-sidebar .swiper-slide-thumb-active[data-v-7717109f]:after {
      content: "";
      position: absolute;
      z-index: 1;
      left: 100%;
      top: 0;
      display: block;
      width: calc(var(--ms0)*2);
      height: 100%;
      -webkit-clip-path: polygon(0 0, 0 100%, 60% 50%);
      clip-path: polygon(0 0, 0 100%, 60% 50%);
      background-color: #ecf8f8;
      background-color: var(--hotmart-tertiary-lightest);
      background-position: 100% 100%
    }

    .carousel__gallery-sidebar .carousel__slide:not(.swiper-slide-thumb-active):hover .carousel__slide-icon[data-v-7717109f] {
      color: #51c1c3;
      color: var(--hotmart-tertiary)
    }

    .carousel__gallery-content[data-v-7717109f] {
      width: 100%
    }

    @media (min-width:1280px) {
      .carousel__gallery-content[data-v-7717109f] {
        display: block;
        width: calc(100% - 300px);
        margin-left: 0
      }
    }

    .carousel__gallery-content .carousel__slide[data-v-7717109f] {
      width: 100%
    }

    @media (min-width:1280px) {
      .carousel__gallery-content .carousel__slide[data-v-7717109f] {
        padding-left: calc(var(--ms0)*4)
      }
    }

    .carousel__gallery-content .swiper-slide[data-v-7717109f] {
      display: flex;
      align-items: center;
      justify-content: center
    }

    .carousel__gallery-content .carousel__slide-body[data-v-7717109f],
    .carousel__gallery-content .carousel__slide-title[data-v-7717109f] {
      display: flex
    }

    @media (min-width:1280px) {

      .carousel__gallery-content .carousel__slide-body[data-v-7717109f],
      .carousel__gallery-content .carousel__slide-title[data-v-7717109f] {
        display: none
      }
    }

    .carousel__slide-title[data-v-7717109f] {
      font-size: var(--ms3);
      align-items: center;
      margin-bottom: calc(var(--ms0)*2)
    }

    .carousel__slide-title p[data-v-7717109f] {
      margin-bottom: 0
    }

    .carousel__slide-title svg[data-v-7717109f] {
      margin-right: calc(var(--ms1)/2);
      color: #51c1c3;
      color: var(--hotmart-tertiary)
    }

    .carousel__slide-body p[data-v-7717109f] {
      margin-bottom: calc(var(--ms1)/2)
    }

    .carousel__slide-content[data-v-7717109f] {
      width: 100%;
      margin-bottom: calc(var(--ms0)*2)
    }

    [data-v-a7a15686]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-a7a15686]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-a7a15686]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-a7a15686]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-a7a15686]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-a7a15686]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-a7a15686]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-a7a15686]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-a7a15686]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-a7a15686]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-a7a15686]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-a7a15686]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-a7a15686]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-a7a15686]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-a7a15686]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-a7a15686]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-a7a15686]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-a7a15686]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-a7a15686]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-a7a15686] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-a7a15686] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-a7a15686] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-a7a15686] {
      border-radius: 50em
    }

    .banner[data-v-a7a15686] {
      margin-bottom: calc(var(--ms1)*8);
      padding-right: var(--ms1);
      padding-left: var(--ms1)
    }

    @media (min-width:768px) {
      .banner[data-v-a7a15686] {
        margin-bottom: calc(var(--ms1)*9);
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1024px) {
      .banner[data-v-a7a15686] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    @media (min-width:1440px) {
      .banner[data-v-a7a15686] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .banner__container[data-v-a7a15686] {
      width: 100%;
      max-width: 1280px;
      max-width: var(--desktop-m);
      margin-right: auto;
      margin-left: auto
    }

    .banner__title[data-v-a7a15686] {
      margin-bottom: calc(var(--ms1)*2)
    }

    @media (min-width:1024px) {
      .banner__title[data-v-a7a15686] {
        max-width: 768px;
        max-width: var(--tablet)
      }
    }

    .banner__buttons .button[data-v-a7a15686] {
      display: flex;
      align-items: center
    }

    @media (min-width:768px) {
      .banner__buttons .button[data-v-a7a15686] {
        display: inline-flex
      }
    }

    .banner__buttons .button[data-v-a7a15686]:not(:last-of-type) {
      margin-bottom: var(--ms1)
    }

    @media (min-width:768px) {
      .banner__buttons .button[data-v-a7a15686]:not(:last-of-type) {
        margin-bottom: 0;
        margin-right: var(--ms1)
      }
    }

    .banner__buttons .button[data-v-a7a15686] .button__icon--right {
      margin-left: auto
    }

    @media (min-width:768px) {
      .banner__buttons .button[data-v-a7a15686] .button__icon--right {
        margin-bottom: 0;
        margin-left: var(--ms-3)
      }
    }

    [data-v-786075fc]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-786075fc]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-786075fc]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-786075fc]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-786075fc]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-786075fc]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-786075fc]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-786075fc]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-786075fc]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-786075fc]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-786075fc]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-786075fc]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-786075fc]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-786075fc]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-786075fc]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-786075fc]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-786075fc]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-786075fc]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-786075fc]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-786075fc] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-786075fc] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-786075fc] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-786075fc] {
      border-radius: 50em
    }

    .footer[data-v-786075fc] {
      padding-right: var(--ms1);
      padding-left: var(--ms1);
      padding-bottom: calc(var(--ms1)*4)
    }

    @media (min-width:768px) {
      .footer[data-v-786075fc] {
        margin-bottom: calc(var(--ms1)*3);
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1440px) {
      .footer[data-v-786075fc] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .footer__container[data-v-786075fc] {
      width: 100%;
      max-width: 1280px;
      max-width: var(--desktop-m);
      margin-right: auto;
      margin-left: auto;
      display: grid;
      grid-gap: calc(var(--ms1)*3);
      grid-template-columns: 1fr;
      grid-template-areas: "footer__area-1""footer__area-2""footer__area-3"
    }

    @media (min-width:768px) {
      .footer__container[data-v-786075fc] {
        grid-template-columns: 1fr 1fr;
        grid-template-areas: "footer__area-1 footer__area-1""footer__area-2 footer__area-2""footer__area-3 footer__area-3"
      }
    }

    .footer__area-1[data-v-786075fc] {
      grid-area: footer__area-1;
      display: grid;
      grid-gap: calc(var(--ms1)*3);
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto;
      grid-template-areas: "footer-navigation__platform footer-navigation__education""footer-navigation__company footer-navigation__support"
    }

    @media (min-width:768px) {
      .footer__area-1[data-v-786075fc] {
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-areas: "footer-navigation__platform footer-navigation__education footer-navigation__company footer-navigation__support"
      }
    }

    .footer__area-2[data-v-786075fc] {
      grid-area: footer__area-2;
      display: grid;
      grid-template-columns: 1fr;
      grid-template-rows: -webkit-max-content -webkit-max-content -webkit-max-content;
      grid-template-rows: max-content max-content max-content;
      grid-gap: calc(var(--ms1)*3);
      grid-template-areas: "footer__language-switch""footer__made-with-love ""footer__social-icons";
      margin-top: calc(var(--ms1)*5)
    }

    @media (min-width:768px) {
      .footer__area-2[data-v-786075fc] {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto;
        grid-gap: var(--ms1);
        grid-template-areas: "footer__made-with-love footer__language-switch""footer__social-icons footer__language-switch"
      }
    }

    .footer__area-3[data-v-786075fc] {
      width: 100%;
      grid-area: footer__area-3;
      border-top: 1px solid #dfe2e6;
      border-top: 1px solid var(--gray-300);
      padding-top: calc(var(--ms1)*3)
    }

    .footer__language-switch[data-v-786075fc] {
      grid-area: footer__language-switch;
      display: flex
    }

    @media (min-width:768px) {
      .footer__language-switch[data-v-786075fc] {
        justify-content: flex-end;
        align-items: center
      }
    }

    .footer__made-with-love[data-v-786075fc] {
      grid-area: footer__made-with-love
    }

    .footer__social-icons[data-v-786075fc] {
      grid-area: footer__social-icons
    }

    .footer__language-switch .language-switch[data-v-786075fc] {
      max-width: 100%
    }

    @media (min-width:768px) {
      .footer__language-switch .language-switch[data-v-786075fc] {
        max-width: 320px;
        max-width: var(--mobile)
      }
    }

    .footer-navigation__title[data-v-786075fc] {
      display: block;
      margin-bottom: calc(var(--ms1)*2)
    }

    .footer__area-1 nav ul[data-v-786075fc] {
      list-style-type: none;
      margin: 0;
      padding: 0
    }

    .footer__area-1 nav li[data-v-786075fc]:not(:last-child) {
      margin-bottom: var(--ms1)
    }

    .footer__copyright[data-v-786075fc] {
      grid-area: footer__copyright;
      color: #6b7480;
      color: var(--gray-500)
    }

    [data-v-9eea37f8]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-9eea37f8]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-9eea37f8]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-9eea37f8]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-9eea37f8]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-9eea37f8]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-9eea37f8]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-9eea37f8]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-9eea37f8]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-9eea37f8]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-9eea37f8]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-9eea37f8]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-9eea37f8]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-9eea37f8]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-9eea37f8]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-9eea37f8]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-9eea37f8]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-9eea37f8]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-9eea37f8]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-9eea37f8] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-9eea37f8] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-9eea37f8] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-9eea37f8] {
      border-radius: 50em
    }

    .language-switch[data-v-9eea37f8] {
      position: relative;
      display: flex;
      align-items: flex-start;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      max-width: 320px;
      max-width: var(--mobile);
      cursor: pointer;
      will-change: background-color;
      transition: background-color .5s cubic-bezier(.4, 0, .14, 1);
      transition: background-color var(--ease-in-out) .5s;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border-radius: 6px;
      border-radius: var(--border-radius);
      background-color: #ecf8f8;
      background-color: var(--hotmart-tertiary-lightest);
      height: -webkit-fit-content;
      height: -moz-fit-content;
      height: fit-content
    }

    @media (hover:hover) and (pointer:fine) {
      .language-switch[data-v-9eea37f8]:hover {
        background-color: #b3f0f0;
        background-color: var(--hotmart-tertiary-lighter)
      }
    }

    .language-switch__locale[data-v-9eea37f8] {
      position: relative;
      z-index: 1;
      padding: var(--ms1);
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      width: 100%;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .language-switch__label[data-v-9eea37f8] {
      font-size: var(--ms-1);
      line-height: 1;
      color: #5f6772;
      color: var(--gray-600);
      width: 100%;
      margin-bottom: calc(var(--ms1)/4)
    }

    .language-switch__locale-items[data-v-9eea37f8] {
      margin: 0;
      padding: 0;
      list-style: none;
      position: absolute;
      z-index: 100;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      width: 100%;
      background-color: #f0f3f7;
      background-color: var(--gray-200);
      border-radius: 6px;
      border-radius: var(--border-radius);
      overflow: hidden;
      pointer-events: none;
      will-change: height, opacity;
      transition: height .5s cubic-bezier(.4, 0, .14, 1), opacity .5s cubic-bezier(.4, 0, .14, 1);
      transition: height .5s var(--ease-in-out), opacity .5s var(--ease-in-out);
      opacity: 0
    }

    .language-switch--open .language-switch__locale-items[data-v-9eea37f8] {
      pointer-events: auto;
      opacity: 1
    }

    .language-switch__locale-item[data-v-9eea37f8] {
      padding: var(--ms1)
    }

    .language-switch--open .language-switch__locale-item[data-v-9eea37f8] {
      will-change: background-color;
      transition: background-color .5s cubic-bezier(.4, 0, .14, 1);
      transition: background-color .5s var(--ease-in-out)
    }

    @media (hover:hover) and (pointer:fine) {
      .language-switch--open .language-switch__locale-item[data-v-9eea37f8]:hover {
        background-color: #b3f0f0;
        background-color: var(--hotmart-tertiary-lighter)
      }
    }

    .language-switch__overlay[data-v-9eea37f8] {
      position: fixed;
      z-index: 99;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(107, 116, 128, .5);
      background: var(--gray-500-50);
      cursor: auto
    }

    .language-switch__overlay-enter-active[data-v-9eea37f8],
    .language-switch__overlay-leave-active[data-v-9eea37f8] {
      will-change: opacity;
      transition: opacity .25s cubic-bezier(.4, 0, .14, 1);
      transition: opacity var(--ease-in-out) .25s
    }

    .language-switch__overlay-enter[data-v-9eea37f8],
    .language-switch__overlay-leave-to[data-v-9eea37f8] {
      opacity: 0
    }

    [data-v-6e818664]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-6e818664]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-6e818664]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-6e818664]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-6e818664]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-6e818664]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-6e818664]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-6e818664]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-6e818664]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-6e818664]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-6e818664]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-6e818664]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-6e818664]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-6e818664]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-6e818664]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-6e818664]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-6e818664]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-6e818664]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-6e818664]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-6e818664] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-6e818664] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-6e818664] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-6e818664] {
      border-radius: 50em
    }

    .made-with-love[data-v-6e818664] {
      display: flex;
      flex-direction: row;
      white-space: nowrap
    }

    .made-with-love__icons[data-v-6e818664] {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 30px
    }

    .made-with-love__fire-icon[data-v-6e818664],
    .made-with-love__heart-icon[data-v-6e818664] {
      position: absolute;
      will-change: opacity;
      transition: opacity .5s cubic-bezier(.4, 0, .14, 1);
      transition: opacity var(--ease-in-out) .5s
    }

    .made-with-love__fire-icon[data-v-6e818664] {
      opacity: 0
    }

    .made-with-love__heart-icon[data-v-6e818664] {
      opacity: 1
    }

    @media (hover:hover) and (pointer:fine) {
      .made-with-love__icons:hover .made-with-love__fire-icon[data-v-6e818664] {
        opacity: 1
      }
    }

    @media (hover:hover) and (pointer:fine) {
      .made-with-love__icons:hover .made-with-love__heart-icon[data-v-6e818664] {
        opacity: 0
      }
    }

    .made-with-love__countries[data-v-6e818664] {
      position: relative;
      display: inline-block;
      z-index: 1;
      overflow: hidden
    }

    .made-with-love__country-underline[data-v-6e818664] {
      position: absolute;
      z-index: 1;
      left: 0;
      bottom: 0;
      width: 0;
      height: 1px;
      background: #51c1c3;
      background: var(--hotmart-tertiary);
      will-change: width;
      transition: width .375s .375s
    }

    .made-with-love__country[data-v-6e818664] {
      white-space: nowrap;
      position: absolute;
      top: 0;
      left: 0;
      transform: translate3d(0, -120%, 0)
    }

    .made-with-love__country--in[data-v-6e818664] {
      transform: translate3d(0, -120%, 0);
      -webkit-animation: country--in-data-v-6e818664 .75s .375s forwards;
      animation: country--in-data-v-6e818664 .75s .375s forwards
    }

    .made-with-love__country--out[data-v-6e818664] {
      transform: translateZ(0);
      -webkit-animation: country--out-data-v-6e818664 .75s forwards;
      animation: country--out-data-v-6e818664 .75s forwards
    }

    @-webkit-keyframes country--in-data-v-6e818664 {
      0% {
        transform: translate3d(0, -120%, 0)
      }

      to {
        transform: translateZ(0)
      }
    }

    @keyframes country--in-data-v-6e818664 {
      0% {
        transform: translate3d(0, -120%, 0)
      }

      to {
        transform: translateZ(0)
      }
    }

    @-webkit-keyframes country--out-data-v-6e818664 {
      0% {
        transform: translateZ(0)
      }

      50% {
        transform: translate3d(0, -20%, 0)
      }

      to {
        transform: translate3d(0, 120%, 0)
      }
    }

    @keyframes country--out-data-v-6e818664 {
      0% {
        transform: translateZ(0)
      }

      50% {
        transform: translate3d(0, -20%, 0)
      }

      to {
        transform: translate3d(0, 120%, 0)
      }
    }

    [data-v-2fde55b2]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-2fde55b2]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-2fde55b2]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-2fde55b2]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-2fde55b2]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-2fde55b2]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-2fde55b2]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-2fde55b2]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-2fde55b2]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-2fde55b2]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-2fde55b2]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-2fde55b2]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-2fde55b2]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-2fde55b2]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-2fde55b2]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-2fde55b2]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-2fde55b2]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-2fde55b2]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-2fde55b2]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-2fde55b2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-2fde55b2] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-2fde55b2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-2fde55b2] {
      border-radius: 50em
    }

    .social-icons__items[data-v-2fde55b2] {
      margin: 0;
      padding: 0;
      list-style: none;
      display: grid;
      grid-template-columns: repeat(auto-fill, 36px);
      width: 100%;
      align-items: center;
      grid-gap: 8px
    }

    .social-icons__icon[data-v-2fde55b2],
    .social-icons__item[data-v-2fde55b2] {
      position: relative;
      z-index: 1
    }

    .social-icons__icon[data-v-2fde55b2] {
      display: block;
      cursor: pointer;
      width: 100%;
      border-radius: 50em;
      border: 2px solid #f0f3f7;
      border: 2px solid var(--gray-200);
      padding: 2px;
      will-change: background, color;
      transition: background .25s cubic-bezier(.4, 0, .14, 1), color .25s cubic-bezier(.4, 0, .14, 1);
      transition: background var(--ease-in-out) .25s, color var(--ease-in-out) .25s
    }

    .social-icons__icon[data-v-2fde55b2]:before {
      display: block;
      content: "";
      padding-top: 100%
    }

    @media (hover:hover) and (pointer:fine) {
      .social-icons__icon[data-v-2fde55b2]:hover {
        background: #f0f3f7;
        background: var(--gray-200)
      }
    }

    .social-icons__icon svg[data-v-2fde55b2] {
      position: absolute;
      z-index: 1;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%)
    }

    .social-icon__links--open .social-icons__icon[data-v-2fde55b2] {
      background: #f0f3f7;
      background: var(--gray-200)
    }

    @media (hover:hover) and (pointer:fine) {
      .social-icons__item--facebook:hover .social-icons__icon[data-v-2fde55b2] {
        color: #2980b9
      }
    }

    .social-icon__links--open.social-icons__item--facebook .social-icons__icon[data-v-2fde55b2] {
      color: #2980b9
    }

    @media (hover:hover) and (pointer:fine) {
      .social-icons__item--instagram:hover .social-icons__icon[data-v-2fde55b2] {
        color: #9b59b6
      }
    }

    .social-icon__links--open.social-icons__item--instagram .social-icons__icon[data-v-2fde55b2] {
      color: #9b59b6
    }

    @media (hover:hover) and (pointer:fine) {
      .social-icons__item--twitter:hover .social-icons__icon[data-v-2fde55b2] {
        color: #3498db
      }
    }

    .social-icon__links--open.social-icons__item--twitter .social-icons__icon[data-v-2fde55b2] {
      color: #3498db
    }

    @media (hover:hover) and (pointer:fine) {
      .social-icons__item--youtube:hover .social-icons__icon[data-v-2fde55b2] {
        color: #e74c3c
      }
    }

    .social-icon__links--open.social-icons__item--youtube .social-icons__icon[data-v-2fde55b2] {
      color: #e74c3c
    }

    @media (hover:hover) and (pointer:fine) {
      .social-icons__item--linkedin:hover .social-icons__icon[data-v-2fde55b2] {
        color: #2980b9
      }
    }

    .social-icon__links--open.social-icons__item--linkedin .social-icons__icon[data-v-2fde55b2] {
      color: #2980b9
    }

    @media (hover:hover) and (pointer:fine) {
      .social-icons__item--sparkle:hover .social-icons__icon[data-v-2fde55b2] {
        color: #e67e22
      }
    }

    .social-icon__links--open.social-icons__item--sparkle .social-icons__icon[data-v-2fde55b2] {
      color: #e67e22
    }

    .social-icons__icon[data-v-2fde55b2] {
      text-decoration: none;
      color: #353a40;
      color: var(--gray-900)
    }

    .social-icons__icon[data-v-2fde55b2] svg,
    .social-icons__icon svg[data-v-2fde55b2] {
      pointer-events: none
    }

    .social-icons__links[data-v-2fde55b2] {
      position: absolute;
      z-index: 3;
      bottom: 100%;
      opacity: 0;
      background: #f0f3f7;
      background: var(--gray-200);
      border-radius: 6px;
      border-radius: var(--border-radius);
      display: none;
      margin-bottom: calc(var(--ms1)/2);
      white-space: nowrap
    }

    .social-icons__links .link[data-v-2fde55b2]:not(:last-of-type) {
      margin-bottom: var(--ms1)
    }

    .social-icons__links[data-v-2fde55b2] {
      -webkit-animation: close .5s;
      animation: close .5s;
      transition: all .5s cubic-bezier(.4, 0, .14, 1);
      transition: all var(--ease-in-out) .5s
    }

    .social-icon__links--open .social-icons__links[data-v-2fde55b2] {
      opacity: 1;
      display: flex;
      flex-direction: column;
      align-items: baseline;
      cursor: pointer;
      padding: var(--ms1);
      will-change: opacity;
      transition: opacity .25s cubic-bezier(.4, 0, .14, 1);
      transition: opacity var(--ease-in-out) .25s;
      -webkit-animation: social-icon__links--open-data-v-2fde55b2 .25s;
      animation: social-icon__links--open-data-v-2fde55b2 .25s
    }

    @-webkit-keyframes social-icon__links--open-data-v-2fde55b2 {
      0% {
        display: none;
        opacity: 0
      }

      1% {
        display: block;
        opacity: 0
      }

      to {
        display: block;
        opacity: 1
      }
    }

    @keyframes social-icon__links--open-data-v-2fde55b2 {
      0% {
        display: none;
        opacity: 0
      }

      1% {
        display: block;
        opacity: 0
      }

      to {
        display: block;
        opacity: 1
      }
    }

    .social-icon__links--open-left .social-icons__links[data-v-2fde55b2] {
      left: 0
    }

    .social-icon__links--open-right .social-icons__links[data-v-2fde55b2] {
      right: 0
    }
  </style>
  <style type="text/css">
    .__nuxt-error-page {
      padding: 1rem;
      background: #f7f8fb;
      color: #47494e;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-family: sans-serif;
      font-weight: 100 !important;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
      -webkit-font-smoothing: antialiased;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0
    }

    .__nuxt-error-page .error {
      max-width: 450px
    }

    .__nuxt-error-page .title {
      font-size: 1.5rem;
      margin-top: 15px;
      color: #47494e;
      margin-bottom: 8px
    }

    .__nuxt-error-page .description {
      color: #7f828b;
      line-height: 21px;
      margin-bottom: 10px
    }

    .__nuxt-error-page a {
      color: #7f828b !important;
      text-decoration: none
    }

    .__nuxt-error-page .logo {
      position: fixed;
      left: 12px;
      bottom: 12px
    }
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,900" media="all">
  <script charset="utf-8" src="/_nuxt/15.4f1b736.js"></script>
  <style type="text/css">
    [data-v-2b43e0c0]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-2b43e0c0]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-2b43e0c0]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-2b43e0c0]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-2b43e0c0]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-2b43e0c0]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-2b43e0c0]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-2b43e0c0]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-2b43e0c0]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-2b43e0c0]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-2b43e0c0]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-2b43e0c0]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-2b43e0c0]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-2b43e0c0]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-2b43e0c0]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-2b43e0c0]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-2b43e0c0]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-2b43e0c0]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-2b43e0c0]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-2b43e0c0] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-2b43e0c0] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-2b43e0c0] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-2b43e0c0] {
      border-radius: 50em
    }

    .modal[data-v-2b43e0c0] {
      position: fixed;
      z-index: 999;
      background: rgba(53, 58, 68, .9);
      background: var(--gray-900-90);
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: var(--ms1)
    }

    @media (min-width:768px) {
      .modal[data-v-2b43e0c0] {
        padding: calc(var(--ms1)*2)
      }
    }

    .modal__container[data-v-2b43e0c0] {
      width: 100%;
      height: 100%
    }
  </style>
  <style type="text/css">
    [data-v-3a23bcd1]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-3a23bcd1]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-3a23bcd1]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-3a23bcd1]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-3a23bcd1]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-3a23bcd1]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-3a23bcd1]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-3a23bcd1]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-3a23bcd1]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-3a23bcd1]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-3a23bcd1]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-3a23bcd1]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-3a23bcd1]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-3a23bcd1]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-3a23bcd1]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-3a23bcd1]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-3a23bcd1]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-3a23bcd1]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-3a23bcd1]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-3a23bcd1] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-3a23bcd1] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-3a23bcd1] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-3a23bcd1] {
      border-radius: 50em
    }

    .fade-enter-active[data-v-3a23bcd1],
    .fade-leave-active[data-v-3a23bcd1] {
      will-change: opacity;
      transition: opacity .25s cubic-bezier(.4, 0, .14, 1);
      transition: opacity .25s var(--ease-in-out)
    }

    .fade-enter[data-v-3a23bcd1],
    .fade-leave-to[data-v-3a23bcd1] {
      opacity: 0
    }
  </style>
  <style type="text/css">
    [data-v-db4dac04]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-db4dac04]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-db4dac04]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-db4dac04]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-db4dac04]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-db4dac04]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-db4dac04]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-db4dac04]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-db4dac04]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-db4dac04]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-db4dac04]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-db4dac04]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-db4dac04]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-db4dac04]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-db4dac04]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-db4dac04]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-db4dac04]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-db4dac04]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-db4dac04]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-db4dac04] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-db4dac04] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-db4dac04] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-db4dac04] {
      border-radius: 50em
    }

    .video-modal[data-v-db4dac04] {
      width: 100%;
      max-width: 1280px;
      max-width: var(--desktop-m);
      height: 100%;
      margin-left: auto;
      margin-right: auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-end;
      position: relative
    }

    .video-modal__close[data-v-db4dac04] {
      color: #fff;
      color: var(--white);
      will-change: color;
      transition: color .5s cubic-bezier(.4, 0, .14, 1);
      transition: color .5s var(--ease-in-out);
      cursor: pointer
    }

    @media (hover:hover) and (pointer:fine) {
      .video-modal__close[data-v-db4dac04]:hover {
        color: #f04e23;
        color: var(--hotmart-primary)
      }
    }

    .video-modal__close[data-v-db4dac04] svg {
      font-size: var(--ms8);
      margin-bottom: var(--ms-3)
    }

    .video-modal__player[data-v-db4dac04] {
      position: relative;
      z-index: 2;
      width: 100%;
      background: #fafbfc;
      background: var(--gray-100)
    }

    .video-modal__player iframe[data-v-db4dac04] {
      position: absolute;
      z-index: 1;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0
    }
  </style>
  <style type="text/css">
    [data-v-61d36e37]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-61d36e37]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-61d36e37]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-61d36e37]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-61d36e37]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-61d36e37]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-61d36e37]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-61d36e37]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-61d36e37]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-61d36e37]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-61d36e37]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-61d36e37]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-61d36e37]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-61d36e37]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-61d36e37]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-61d36e37]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-61d36e37]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-61d36e37]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-61d36e37]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-61d36e37] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-61d36e37] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-61d36e37] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-61d36e37] {
      border-radius: 50em
    }

    .card-social-proof--video[data-v-61d36e37] {
      position: relative;
      z-index: 1;
      text-decoration: none;
      display: flex;
      background: #f0f3f7;
      background: var(--gray-200);
      width: 100%;
      max-width: calc(var(--ms1)*33);
      overflow: hidden;
      border-radius: 6px;
      border-radius: var(--border-radius);
      color: #fff;
      color: var(--white);
      margin-right: auto;
      margin-left: auto;
      cursor: pointer
    }

    @media (min-width:1024px) {
      .card-social-proof--video[data-v-61d36e37] {
        max-width: none
      }
    }

    .card-social-proof--video .card-social-proof__wrapper[data-v-61d36e37] {
      position: absolute;
      z-index: 2;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      display: flex;
      flex-direction: column;
      margin: var(--ms1);
      overflow: hidden
    }

    @media (min-width:768px) {
      .card-social-proof--video .card-social-proof__wrapper[data-v-61d36e37] {
        margin: calc(var(--ms1)*2)
      }
    }

    .card-social-proof--video .card-social-proof__image[data-v-61d36e37] {
      width: 100%;
      position: relative;
      z-index: 1
    }

    .card-social-proof--video .card-social-proof__image[data-v-61d36e37]:after,
    .card-social-proof--video .card-social-proof__image[data-v-61d36e37]:before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      will-change: opacity;
      transition: opacity .5s cubic-bezier(.4, 0, .14, 1);
      transition: opacity .5s var(--ease-in-out)
    }

    .card-social-proof--video .card-social-proof__image[data-v-61d36e37]:before {
      background: linear-gradient(180deg, transparent 10%, #000);
      background: linear-gradient(180deg, transparent 10%, var(--black));
      z-index: 2;
      opacity: .5
    }

    .card-social-proof--video .card-social-proof__image[data-v-61d36e37]:after {
      background: linear-gradient(180deg, transparent 10%, #f04e23 80%);
      background: linear-gradient(180deg, transparent 10%, var(--hotmart-primary) 80%);
      z-index: 1;
      opacity: 0
    }

    @media (hover:hover) and (pointer:fine) {
      .card-social-proof--video:hover .card-social-proof__image[data-v-61d36e37]:before {
        opacity: 0
      }

      .card-social-proof--video:hover .card-social-proof__image[data-v-61d36e37]:after {
        opacity: .5
      }
    }

    .card-social-proof--video .card-social-proof__tag[data-v-61d36e37] {
      display: flex;
      flex: 1
    }

    .card-social-proof--video .card-social-proof__icon[data-v-61d36e37] {
      display: none
    }

    @media (min-width:375px) {
      .card-social-proof--video .card-social-proof__icon[data-v-61d36e37] {
        display: inline;
        display: initial;
        font-size: var(--ms4);
        margin-bottom: var(--ms0)
      }
    }

    .card-social-proof--video .card-social-proof__title[data-v-61d36e37] {
      font-size: var(--ms3);
      line-height: 1.2
    }

    .card-social-proof--video .card-social-proof__body[data-v-61d36e37] {
      font-size: var(--ms1)
    }

    @media (min-width:414px) {
      .card-social-proof--video .card-social-proof__body[data-v-61d36e37] {
        font-size: var(--ms3)
      }
    }

    .card-social-proof--video .card-social-proof__title[data-v-61d36e37] {
      font-weight: 700;
      margin-bottom: var(--ms1)
    }

    .card-social-proof--video .card-social-proof__footer-wrapper[data-v-61d36e37] {
      position: relative
    }

    @media (min-width:414px) {
      .card-social-proof--video .card-social-proof__footer-wrapper[data-v-61d36e37] {
        margin-bottom: 0
      }
    }

    .card-social-proof__footer[data-v-61d36e37] {
      margin-top: calc(var(--ms0)*2)
    }

    @media (hover:hover) and (pointer:fine) {
      .card-social-proof--video .card-social-proof__footer[data-v-61d36e37] {
        margin-bottom: -100%;
        transition: margin-bottom .25s cubic-bezier(.4, 0, .14, 1) .18s;
        transition: margin-bottom .25s var(--ease-in-out) .18s
      }

      .card-social-proof--video:hover .card-social-proof__footer[data-v-61d36e37] {
        margin-bottom: 0;
        transition: margin-bottom .25s cubic-bezier(.4, 0, .14, 1);
        transition: margin-bottom .25s var(--ease-in-out)
      }
    }

    .card-social-proof--video .card-social-proof__video[data-v-61d36e37] {
      display: flex;
      align-items: center
    }

    @media (hover:hover) and (pointer:fine) {
      .card-social-proof--video .card-social-proof__video[data-v-61d36e37] {
        opacity: 0;
        will-change: opacity;
        transition: opacity .25s cubic-bezier(.4, 0, .14, 1);
        transition: opacity .25s var(--ease-in-out)
      }

      .card-social-proof--video:hover .card-social-proof__video[data-v-61d36e37] {
        opacity: 1;
        transition: opacity .25s cubic-bezier(.4, 0, .14, 1) .18s;
        transition: opacity .25s var(--ease-in-out) .18s
      }
    }

    .card-social-proof--video .card-social-proof__video-button[data-v-61d36e37] {
      border: 2px solid #fff;
      border: 2px solid var(--white);
      border-radius: 50em;
      width: calc(var(--ms1)*3);
      height: calc(var(--ms1)*3);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: var(--ms0);
      font-size: var(--ms1);
      background: rgba(0, 0, 0, .5);
      background: var(--black-50);
      will-change: background;
      transition: background .5s cubic-bezier(.4, 0, .14, 1);
      transition: background .5s var(--ease-in-out)
    }

    @media (hover:none) and (pointer:coarse),
    (hover:none) and (pointer:fine) {
      .card-social-proof--video .card-social-proof__video-button[data-v-61d36e37] {
        background: #f04e23;
        background: var(--hotmart-primary)
      }
    }

    @media (hover:hover) and (pointer:fine) {
      .card-social-proof--video:hover .card-social-proof__video-button[data-v-61d36e37] {
        background: #f04e23;
        background: var(--hotmart-primary)
      }
    }

    .card-social-proof--video .card-social-proof__video-button svg[data-v-61d36e37] {
      transform: translateX(2px)
    }

    .card-social-proof--video .card-social-proof__video-length[data-v-61d36e37] {
      color: #fff;
      color: var(--white);
      font-size: var(--ms0)
    }
  </style>
  <style type="text/css">
    [data-v-c933a060]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-c933a060]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-c933a060]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-c933a060]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-c933a060]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-c933a060]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-c933a060]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-c933a060]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-c933a060]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-c933a060]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-c933a060]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-c933a060]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-c933a060]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-c933a060]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-c933a060]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-c933a060]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-c933a060]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-c933a060]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-c933a060]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-c933a060] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-c933a060] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-c933a060] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-c933a060] {
      border-radius: 50em
    }

    .card-sparkle-community[data-v-c933a060] {
      position: relative;
      z-index: 1;
      text-decoration: none;
      display: flex;
      background: #f0f3f7;
      background: var(--gray-200);
      width: 100%;
      max-width: calc(var(--ms1)*22);
      overflow: hidden;
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .card-sparkle-community__wrapper[data-v-c933a060] {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      z-index: 2;
      display: flex;
      flex-direction: column;
      margin: calc(var(--ms0)*2);
      overflow: hidden
    }

    .card-sparkle-community__image[data-v-c933a060] {
      display: block;
      width: 100%;
      position: relative;
      z-index: 1
    }

    .card-sparkle-community__image[data-v-c933a060]:after,
    .card-sparkle-community__image[data-v-c933a060]:before {
      display: block;
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      will-change: opacity;
      transition: opacity .5s cubic-bezier(.4, 0, .14, 1);
      transition: opacity .5s var(--ease-in-out)
    }

    .card-sparkle-community__image[data-v-c933a060]:before {
      background: linear-gradient(180deg, transparent 10%, #000);
      background: linear-gradient(180deg, transparent 10%, var(--black));
      z-index: 2;
      opacity: .5
    }

    .card-sparkle-community__image[data-v-c933a060]:after {
      background: linear-gradient(180deg, transparent 10%, #f04e23);
      background: linear-gradient(180deg, transparent 10%, var(--hotmart-primary));
      z-index: 1;
      opacity: 0
    }

    @media (hover:hover) and (pointer:fine) {
      .card-sparkle-community:hover .card-sparkle-community__image[data-v-c933a060]:before {
        opacity: 0
      }

      .card-sparkle-community:hover .card-sparkle-community__image[data-v-c933a060]:after {
        opacity: .5
      }
    }

    .card-sparkle-community__tag[data-v-c933a060] {
      display: flex;
      flex: 1
    }

    .card-sparkle-community__body[data-v-c933a060],
    .card-sparkle-community__title[data-v-c933a060] {
      margin-bottom: calc(var(--ms0)*2)
    }

    .card-sparkle-community__body[data-v-c933a060],
    .card-sparkle-community__button[data-v-c933a060],
    .card-sparkle-community__title[data-v-c933a060] {
      color: #fff;
      color: var(--white)
    }

    .card-sparkle-community__body[data-v-c933a060],
    .card-sparkle-community__title[data-v-c933a060] {
      -webkit-hyphens: auto;
      -ms-hyphens: auto;
      hyphens: auto
    }

    .card-sparkle-community__title[data-v-c933a060] {
      font-size: var(--ms6);
      line-height: 1.2
    }

    @media (min-width:768px) {
      .card-sparkle-community__title[data-v-c933a060] {
        font-size: var(--ms7)
      }
    }

    .card-sparkle-community__body[data-v-c933a060] {
      font-size: var(--ms3);
      line-height: 1.2
    }

    .card-sparkle-community__footer[data-v-c933a060] {
      display: inline-block
    }

    .card-sparkle-community__button[data-v-c933a060] {
      border: 2px solid #fff;
      border: 2px solid var(--white);
      width: calc(var(--ms1)*3);
      height: calc(var(--ms1)*3);
      border-radius: 50em;
      display: flex;
      align-items: center;
      justify-content: center;
      will-change: background;
      transition: background .5s cubic-bezier(.4, 0, .14, 1);
      transition: background .5s var(--ease-in-out);
      background: rgba(0, 0, 0, .5);
      background: var(--black-50)
    }

    @media (hover:hover) and (pointer:fine) {
      .card-sparkle-community:hover .card-sparkle-community__button[data-v-c933a060] {
        background: #f04e23;
        background: var(--hotmart-primary)
      }
    }
  </style>
  <style type="text/css">
    [data-v-49930c68]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-49930c68]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-49930c68]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-49930c68]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-49930c68]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-49930c68]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-49930c68]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-49930c68]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-49930c68]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-49930c68]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-49930c68]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-49930c68]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-49930c68]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-49930c68]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-49930c68]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-49930c68]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-49930c68]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-49930c68]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-49930c68]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-49930c68] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-49930c68] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-49930c68] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-49930c68] {
      border-radius: 50em
    }

    .card-community-event[data-v-49930c68] {
      position: relative;
      z-index: 1
    }

    @media (min-width:768px) {
      .card-community-event[data-v-49930c68] {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
      }
    }

    .card-community-event__image[data-v-49930c68] {
      position: relative;
      z-index: 1;
      width: 100%;
      margin-bottom: var(--ms1)
    }

    @media (min-width:768px) {
      .card-community-event__image[data-v-49930c68] {
        margin-bottom: 0
      }
    }

    .card-community-event__image[data-v-49930c68]:before {
      display: block;
      content: "";
      position: absolute;
      z-index: 2;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      opacity: .5;
      background: linear-gradient(180deg, transparent 10%, #000);
      background: linear-gradient(180deg, transparent 10%, var(--black))
    }

    .card-community-event__wrapper[data-v-49930c68] {
      position: relative;
      display: flex;
      flex-direction: column;
      top: 0;
      right: 0;
      left: 0;
      bottom: 0;
      z-index: 2
    }

    @media (min-width:768px) {
      .card-community-event__wrapper[data-v-49930c68] {
        position: absolute;
        padding: calc(var(--ms1)*2)
      }
    }

    .card-community-event__body[data-v-49930c68],
    .card-community-event__tag[data-v-49930c68],
    .card-community-event__title[data-v-49930c68] {
      margin-bottom: calc(var(--ms1)*2)
    }

    @media (min-width:768px) {
      .card-community-event__tag[data-v-49930c68] {
        display: flex;
        flex: 1;
        margin-bottom: 0
      }
    }

    .card-community-event__body[data-v-49930c68],
    .card-community-event__title[data-v-49930c68] {
      color: #fff;
      color: var(--white)
    }

    .card-community-event__title[data-v-49930c68] {
      max-width: calc(var(--ms1)*45)
    }

    .card-community-event__body[data-v-49930c68] {
      font-size: var(--ms2)
    }

    @media (min-width:768px) {
      .card-community-event__body[data-v-49930c68] {
        max-width: calc(var(--ms1)*35)
      }
    }

    @media (min-width:1024px) {
      .card-community-event__body[data-v-49930c68] {
        max-width: calc(var(--ms1)*40);
        font-size: var(--ms3)
      }
    }
  </style>
  <style type="text/css">
    [data-v-fd388032]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-fd388032]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-fd388032]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-fd388032]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-fd388032]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-fd388032]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-fd388032]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-fd388032]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-fd388032]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-fd388032]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-fd388032]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-fd388032]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-fd388032]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-fd388032]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-fd388032]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-fd388032]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-fd388032]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-fd388032]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-fd388032]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-fd388032] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-fd388032] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-fd388032] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-fd388032] {
      border-radius: 50em
    }

    .carousel-card[data-v-fd388032] {
      margin-bottom: calc(var(--ms1)*8)
    }

    @media (min-width:768px) {
      .carousel-card[data-v-fd388032] {
        margin-bottom: calc(var(--ms1)*9)
      }
    }

    @media (min-width:1024px) {
      .carousel-card[data-v-fd388032] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    .carousel-card__container[data-v-fd388032] {
      overflow: hidden
    }

    .carousel-card__block[data-v-fd388032] {
      width: 100%;
      max-width: 1440px;
      max-width: var(--desktop-l);
      margin-left: auto;
      margin-right: auto;
      padding: calc(var(--ms1)*6) var(--ms1)
    }

    @media (min-width:768px) {
      .carousel-card__block[data-v-fd388032] {
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1440px) {
      .carousel-card__block[data-v-fd388032] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .carousel-card__block-container[data-v-fd388032] {
      width: 100%;
      height: 100%;
      max-width: 1024px;
      max-width: var(--desktop);
      margin-left: auto;
      margin-right: auto
    }

    .carousel-card__title[data-v-fd388032] {
      margin-bottom: calc(var(--ms1)*6);
      max-width: calc(var(--ms1)*40)
    }

    .carousel-card__pagination[data-v-fd388032] {
      display: flex;
      justify-content: center;
      justify-content: space-between
    }

    .carousel-card__swiper[data-v-fd388032] {
      overflow: visible;
      overflow: initial
    }

    .carousel-card__pagination[data-v-fd388032] {
      margin-top: calc(var(--ms1)*4)
    }

    .carousel-card__pagination[data-v-fd388032] .swiper-pagination {
      position: relative;
      display: none
    }

    @media (min-width:768px) {
      .carousel-card__pagination[data-v-fd388032] .swiper-pagination {
        display: flex;
        align-items: center
      }
    }

    .carousel-card__pagination[data-v-fd388032] .swiper-pagination-bullet {
      display: flex;
      flex-direction: column;
      justify-content: center;
      width: var(--ms6);
      border-radius: 0;
      opacity: 1;
      height: var(--ms0);
      background: transparent;
      outline: 0
    }

    .carousel-card__pagination[data-v-fd388032] .swiper-pagination-bullet:after {
      content: "";
      display: block;
      width: 100%;
      height: var(--ms0);
      height: 2px
    }

    .carousel-card__pagination[data-v-fd388032] .swiper-pagination-bullet:not(:last-of-type) {
      margin-right: var(--ms0)
    }

    .carousel-card--light .carousel-card__block[data-v-fd388032] {
      background: #fafbfc;
      background: var(--gray-100)
    }

    .carousel-card--light .carousel-card__pagination[data-v-fd388032] .swiper-pagination-bullet:after {
      background: #d0d3d6;
      background: var(--gray-400)
    }

    .carousel-card--light .carousel-card__pagination[data-v-fd388032] .swiper-pagination-bullet-active:after {
      background: #484e56;
      background: var(--gray-800)
    }

    .carousel-card--dark .carousel-card__block[data-v-fd388032] {
      background: #000;
      background: var(--black)
    }

    .carousel-card--dark .carousel-card__pagination[data-v-fd388032] .swiper-pagination-bullet:after {
      background: #484e56;
      background: var(--gray-800)
    }

    .carousel-card--dark .carousel-card__pagination[data-v-fd388032] .swiper-pagination-bullet-active:after {
      background: #fff;
      background: var(--white)
    }

    .carousel-card--dark .carousel-card__pagination-fraction[data-v-fd388032],
    .carousel-card--dark .carousel-card__title[data-v-fd388032] {
      color: #fff;
      color: var(--white)
    }
  </style>
  <style type="text/css">
    [data-v-6600b1ac]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-6600b1ac]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-6600b1ac]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-6600b1ac]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-6600b1ac]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-6600b1ac]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-6600b1ac]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-6600b1ac]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-6600b1ac]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-6600b1ac]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-6600b1ac]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-6600b1ac]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-6600b1ac]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-6600b1ac]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-6600b1ac]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-6600b1ac]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-6600b1ac]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-6600b1ac]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-6600b1ac]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-6600b1ac] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-6600b1ac] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-6600b1ac] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-6600b1ac] {
      border-radius: 50em
    }

    .playlist-items ul[data-v-6600b1ac] {
      padding: 0;
      margin-top: calc(var(--ms1)*2);
      margin-right: 0;
      margin-bottom: 0;
      margin-left: 0;
      list-style: none;
      display: grid;
      grid-auto-rows: 1fr
    }

    @media (min-width:1024px) {
      .playlist-items ul[data-v-6600b1ac] {
        margin-top: 0
      }
    }
  </style>
  <style type="text/css">
    [data-v-2924d8ee]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-2924d8ee]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-2924d8ee]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-2924d8ee]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-2924d8ee]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-2924d8ee]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-2924d8ee]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-2924d8ee]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-2924d8ee]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-2924d8ee]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-2924d8ee]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-2924d8ee]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-2924d8ee]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-2924d8ee]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-2924d8ee]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-2924d8ee]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-2924d8ee]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-2924d8ee]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-2924d8ee]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-2924d8ee] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-2924d8ee] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-2924d8ee] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-2924d8ee] {
      border-radius: 50em
    }

    .playlist-item[data-v-2924d8ee] {
      border-top: 1px solid #dfe2e6;
      border-top: 1px solid var(--gray-300);
      transition: background .5s cubic-bezier(.4, 0, .14, 1), border .5s cubic-bezier(.4, 0, .14, 1);
      transition: background .5s var(--ease-in-out), border .5s var(--ease-in-out);
      display: flex;
      align-items: center
    }

    .playlist-item[data-v-2924d8ee]:last-of-type {
      border-bottom: 1px solid #dfe2e6;
      border-bottom: 1px solid var(--gray-300)
    }

    .playlist-item a[data-v-2924d8ee] {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      width: 100%;
      padding: var(--ms1);
      text-decoration: none;
      color: rgba(107, 116, 128, .5);
      color: var(--gray-500-50);
      font-size: var(--ms3);
      transition: color .5s cubic-bezier(.4, 0, .14, 1);
      transition: color .5s var(--ease-in-out)
    }

    @media (min-width:768px) {
      .playlist-item a[data-v-2924d8ee] {
        font-size: var(--ms2);
        padding: var(--ms0)
      }
    }

    .playlist-item__play-icon[data-v-2924d8ee] {
      margin-right: var(--ms2);
      padding-left: 2px;
      border: 2px solid #fff;
      border: 2px solid var(--white);
      border-radius: 50em;
      width: calc(var(--ms1)*2);
      height: calc(var(--ms1)*2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: var(--ms-1);
      color: #fff;
      color: var(--white);
      background: rgba(0, 0, 0, .5);
      background: var(--black-50);
      will-change: background;
      transition: background .5s cubic-bezier(.4, 0, .14, 1), height .5s cubic-bezier(.4, 0, .14, 1), width .5s cubic-bezier(.4, 0, .14, 1);
      transition: background .5s var(--ease-in-out), height .5s var(--ease-in-out), width .5s var(--ease-in-out);
      flex-shrink: 0
    }

    .playlist-item__icon[data-v-2924d8ee] {
      color: #6b7480;
      color: var(--gray-500);
      transition: color .5s cubic-bezier(.4, 0, .14, 1);
      transition: color .5s var(--ease-in-out);
      width: calc(var(--ms-1)*2);
      height: calc(var(--ms-1)*2);
      margin-left: auto
    }

    .playlist-item span[data-v-2924d8ee] {
      margin-right: var(--ms2)
    }

    @media (hover:hover) and (pointer:fine) {
      .playlist-item:hover .playlist-item__play-icon[data-v-2924d8ee] {
        background: #f04e23;
        background: var(--hotmart-primary);
        width: calc(var(--ms1)*2);
        height: calc(var(--ms1)*2)
      }

      .playlist-item:hover a[data-v-2924d8ee] {
        color: #353a40;
        color: var(--gray-900)
      }

      .playlist-item:hover .playlist-item__icon[data-v-2924d8ee] {
        color: #51c1c3;
        color: var(--hotmart-tertiary)
      }
    }

    .playlist-item:last-of-type.active[data-v-2924d8ee] {
      border-bottom: 1px solid transparent
    }

    .playlist-item.active[data-v-2924d8ee] {
      border-radius: 6px;
      border-radius: var(--border-radius);
      background: #f0f3f7;
      background: var(--gray-200)
    }

    .playlist-item.active[data-v-2924d8ee],
    .playlist-item.active+.playlist-item[data-v-2924d8ee] {
      border-top: 1px solid transparent
    }

    .playlist-item.active .playlist-item__play-icon[data-v-2924d8ee] {
      background: #f04e23;
      background: var(--hotmart-primary);
      width: calc(var(--ms1)*2);
      height: calc(var(--ms1)*2)
    }

    .playlist-item.active a[data-v-2924d8ee] {
      color: #353a40;
      color: var(--gray-900)
    }

    .playlist-item.active .playlist-item__icon[data-v-2924d8ee] {
      color: #51c1c3;
      color: var(--hotmart-tertiary)
    }
  </style>
  <style type="text/css">
    [data-v-7876f68b]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-7876f68b]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-7876f68b]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-7876f68b]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-7876f68b]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-7876f68b]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-7876f68b]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-7876f68b]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-7876f68b]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-7876f68b]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-7876f68b]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-7876f68b]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-7876f68b]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-7876f68b]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-7876f68b]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-7876f68b]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-7876f68b]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-7876f68b]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-7876f68b]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-7876f68b] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-7876f68b] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-7876f68b] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-7876f68b] {
      border-radius: 50em
    }

    .playlist-content[data-v-7876f68b] {
      grid-area: content;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start
    }

    .playlist__tag[data-v-7876f68b] {
      margin-bottom: var(--ms1)
    }

    .playlist__title[data-v-7876f68b] {
      margin-bottom: calc(var(--ms1)*2);
      display: flex;
      justify-content: center;
      align-items: flex-start
    }

    @media (min-width:1024px) {
      .playlist__title[data-v-7876f68b] {
        align-items: center
      }
    }

    .playlist__title .title-icon[data-v-7876f68b] {
      width: calc(var(--ms-1)*2);
      height: calc(var(--ms-1)*2);
      margin-right: var(--ms1);
      margin-top: calc(var(--ms1)/3)
    }

    @media (min-width:1024px) {
      .playlist__title .title-icon[data-v-7876f68b] {
        margin-top: 0
      }
    }

    .playlist__title[data-v-7876f68b] h2 {
      font-size: var(--ms5)
    }

    .playlist__video[data-v-7876f68b] {
      width: 100%;
      margin-bottom: calc(var(--ms1)*2)
    }

    .playlist__body[data-v-7876f68b] {
      margin-top: var(--ms1);
      font-size: var(--ms2)
    }

    .playlist__body .full-body[data-v-7876f68b],
    .playlist__body .short-body[data-v-7876f68b] {
      margin-bottom: var(--ms1)
    }

    .playlist__body .full-body[data-v-7876f68b] p {
      margin: 0
    }
  </style>
  <style type="text/css">
    [data-v-e886042c]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-e886042c]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-e886042c]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-e886042c]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-e886042c]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-e886042c]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-e886042c]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-e886042c]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-e886042c]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-e886042c]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-e886042c]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-e886042c]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-e886042c]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-e886042c]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-e886042c]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-e886042c]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-e886042c]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-e886042c]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-e886042c]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-e886042c] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-e886042c] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-e886042c] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-e886042c] {
      border-radius: 50em
    }

    .form-alert[data-v-e886042c] {
      color: #fff;
      color: var(--white);
      background: #000;
      background: var(--black);
      padding: var(--ms1);
      border-radius: 6px;
      border-radius: var(--border-radius);
      margin-bottom: calc(var(--ms1)*4)
    }

    .form-alert--success[data-v-e886042c] {
      background: #03873b;
      background: var(--success-dark)
    }

    .form-alert--error[data-v-e886042c] {
      background: #c92918;
      background: var(--danger-dark)
    }

    .form-alert--info[data-v-e886042c] {
      background: #0f68bd;
      background: var(--info-dark)
    }

    .form-alert p[data-v-e886042c]:last-of-type {
      margin-bottom: 0
    }

    [class*=link--][data-v-e886042c] {
      color: #fff !important;
      color: var(--white) !important
    }

    @media (hover:hover) and (pointer:fine) {

      [class*=link--][data-v-e886042c]:not([disabled]):active,
      [class*=link--][data-v-e886042c]:not([disabled]):focus,
      [class*=link--][data-v-e886042c]:not([disabled]):hover {
        color: #fff !important;
        color: var(--white) !important
      }
    }
  </style>
  <style type="text/css">
    [data-v-5420c4f0]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-5420c4f0]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-5420c4f0]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-5420c4f0]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-5420c4f0]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-5420c4f0]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-5420c4f0]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-5420c4f0]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-5420c4f0]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-5420c4f0]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-5420c4f0]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-5420c4f0]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-5420c4f0]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-5420c4f0]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-5420c4f0]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-5420c4f0]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-5420c4f0]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-5420c4f0]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-5420c4f0]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-5420c4f0] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-5420c4f0] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-5420c4f0] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-5420c4f0] {
      border-radius: 50em
    }

    .form-label[data-v-5420c4f0] {
      font-weight: 700
    }

    .form-label--primary[data-v-5420c4f0] {
      color: #353a40;
      color: var(--gray-900)
    }

    .form-label--secondary[data-v-5420c4f0] {
      color: #6b7480;
      color: var(--gray-500)
    }
  </style>
  <style type="text/css">
    [data-v-fe47b650]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-fe47b650]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-fe47b650]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-fe47b650]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-fe47b650]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-fe47b650]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-fe47b650]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-fe47b650]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-fe47b650]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-fe47b650]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-fe47b650]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-fe47b650]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-fe47b650]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-fe47b650]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-fe47b650]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-fe47b650]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-fe47b650]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-fe47b650]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-fe47b650]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-fe47b650] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-fe47b650] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-fe47b650] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-fe47b650] {
      border-radius: 50em
    }

    .form-text[data-v-fe47b650] {
      color: #545b64;
      color: var(--gray-700)
    }
  </style>
  <style type="text/css">
    [data-v-79a09c4e]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-79a09c4e]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-79a09c4e]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-79a09c4e]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-79a09c4e]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-79a09c4e]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-79a09c4e]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-79a09c4e]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-79a09c4e]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-79a09c4e]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-79a09c4e]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-79a09c4e]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-79a09c4e]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-79a09c4e]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-79a09c4e]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-79a09c4e]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-79a09c4e]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-79a09c4e]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-79a09c4e]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-79a09c4e] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-79a09c4e] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-79a09c4e] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-79a09c4e] {
      border-radius: 50em
    }

    .form-group[data-v-79a09c4e] {
      width: 100%
    }

    .form-group[data-v-79a09c4e]:not(:last-of-type) {
      margin-bottom: calc(var(--ms1)*4)
    }

    .form-group .form-label[data-v-79a09c4e] {
      width: 100%;
      display: block
    }

    .form-group .form-label[data-v-79a09c4e],
    .form-group .form-text[data-v-79a09c4e] {
      margin-bottom: calc(var(--ms1)/2)
    }

    .form-group input[type=checkbox][data-v-79a09c4e],
    .form-group input[type=password][data-v-79a09c4e],
    .form-group input[type=tel][data-v-79a09c4e],
    .form-group input[type=text][data-v-79a09c4e],
    .form-group select[data-v-79a09c4e],
    .form-group textarea[data-v-79a09c4e] {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400);
      background-color: #fff;
      background-color: var(--white);
      border-radius: 6px;
      border-radius: var(--border-radius);
      font-size: 16px
    }

    .form-group input[type=password][data-v-79a09c4e],
    .form-group input[type=tel][data-v-79a09c4e],
    .form-group input[type=text][data-v-79a09c4e],
    .form-group select[data-v-79a09c4e],
    .form-group textarea[data-v-79a09c4e] {
      width: 100%;
      padding: var(--ms1)
    }

    .form-group .select:not(.select--placeholder-selected) select[data-v-79a09c4e],
    .form-group input[type=password][data-v-79a09c4e],
    .form-group input[type=tel][data-v-79a09c4e],
    .form-group input[type=text][data-v-79a09c4e],
    .form-group textarea[data-v-79a09c4e] {
      color: #353a40;
      color: var(--gray-900)
    }

    .form-group input[type=checkbox][disabled][data-v-79a09c4e],
    .form-group input[type=password][disabled][data-v-79a09c4e],
    .form-group input[type=tel][disabled][data-v-79a09c4e],
    .form-group input[type=text][disabled][data-v-79a09c4e],
    .form-group select[disabled][data-v-79a09c4e],
    .form-group textarea[disabled][data-v-79a09c4e] {
      cursor: not-allowed;
      background-color: #f0f3f7;
      background-color: var(--gray-200);
      opacity: .5
    }

    .form-group input[type=checkbox][data-v-79a09c4e] {
      position: relative;
      z-index: 1;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: none;
      width: 22px;
      height: 22px;
      background: #fff;
      background: var(--white);
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400);
      border-radius: 6px;
      border-radius: var(--border-radius);
      overflow: hidden
    }

    .form-group input[type=checkbox][data-v-79a09c4e]:focus {
      border: 1px solid #f04e23;
      border: 1px solid var(--hotmart-primary);
      box-shadow: 0 0 0 3px #ff9377;
      box-shadow: 0 0 0 3px var(--hotmart-primary-lighter);
      outline: none
    }

    .form-group input[type=checkbox][data-v-79a09c4e]:after,
    .form-group input[type=checkbox][data-v-79a09c4e]:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .form-group input[type=checkbox][data-v-79a09c4e]:checked:before {
      z-index: 1
    }

    .form-group input[type=checkbox][data-v-79a09c4e]:checked:after {
      z-index: 2;
      left: 5px;
      top: 9px;
      width: 2px;
      height: 2px;
      background: #353a40;
      background: var(--gray-900);
      box-shadow: 2px 0 0 #353a40, 4px 0 0 #353a40, 4px -2px 0 #353a40, 4px -4px 0 #353a40, 4px -6px 0 #353a40, 4px -8px 0 #353a40;
      box-shadow: 2px 0 0 var(--gray-900), 4px 0 0 var(--gray-900), 4px -2px 0 var(--gray-900), 4px -4px 0 var(--gray-900), 4px -6px 0 var(--gray-900), 4px -8px 0 var(--gray-900);
      transform: rotate(45deg)
    }

    .form-group .switch[data-v-79a09c4e] {
      display: grid;
      grid-template-columns: -webkit-min-content -webkit-min-content;
      grid-template-columns: min-content min-content;
      grid-template-rows: auto;
      grid-gap: calc(var(--ms1)/2);
      align-items: center
    }

    .form-group .switch input[type=checkbox][data-v-79a09c4e] {
      position: relative;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: none;
      width: 50px;
      height: 30px;
      background: #f0f3f7;
      background: var(--gray-200);
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400);
      border-radius: 50em
    }

    .form-group .switch input[type=checkbox][data-v-79a09c4e]:after {
      content: "";
      position: absolute;
      top: 1px;
      left: 1px;
      background: transparent;
      width: 26px;
      height: 26px;
      border-radius: 50em;
      background-color: #fff;
      background-color: var(--white);
      box-shadow: 2px 0 2px 0 #d0d3d6;
      box-shadow: 2px 0 2px 0 var(--gray-400)
    }

    .form-group .switch input[type=checkbox][data-v-79a09c4e]:checked {
      box-shadow: inset 20px 0 0 0 #03a046;
      box-shadow: inset 20px 0 0 0 var(--success);
      border-color: #d0d3d6;
      border-color: var(--gray-400);
      background: #03a046;
      background: var(--success)
    }

    .form-group .switch input[type=checkbox][data-v-79a09c4e]:checked:after {
      left: 21px;
      box-shadow: -2px 0 2px 0 #03873b;
      box-shadow: -2px 0 2px 0 var(--success-dark)
    }

    .form-group .switch input[type=checkbox][data-v-79a09c4e]:not([disabled]):checked:focus,
    .form-group .switch input[type=checkbox][data-v-79a09c4e]:not([disabled]):focus {
      border: 1px solid #f04e23;
      border: 1px solid var(--hotmart-primary);
      box-shadow: 0 0 0 3px #ff9377;
      box-shadow: 0 0 0 3px var(--hotmart-primary-lighter)
    }

    .form-group .switch--disabled input[type=checkbox][disabled][data-v-79a09c4e],
    .form-group .switch--disabled span[data-v-79a09c4e] {
      opacity: .5;
      cursor: not-allowed
    }

    .form-group .switch input[type=checkbox][disabled][data-v-79a09c4e]:checked:after {
      box-shadow: -2px 0 2px 0 #d0d3d6;
      box-shadow: -2px 0 2px 0 var(--gray-400)
    }

    .form-group .switch input[type=checkbox][disabled][data-v-79a09c4e] {
      box-shadow: inset 20px 0 0 0 #f0f3f7;
      box-shadow: inset 20px 0 0 0 var(--gray-200);
      background: #f0f3f7;
      background: var(--gray-200)
    }

    .form-group textarea[data-v-79a09c4e] {
      resize: none;
      height: 100px
    }

    .select--placeholder-selected select[data-v-79a09c4e] {
      color: var(--gray-900-50)
    }

    .form-group select[data-v-79a09c4e] {
      background-image: linear-gradient(45deg, transparent 50%, #d0d3d6 0), linear-gradient(135deg, #d0d3d6 50%, transparent 0), linear-gradient(90deg, #d0d3d6, #d0d3d6);
      background-image: linear-gradient(45deg, transparent 50%, var(--gray-400) 0), linear-gradient(135deg, var(--gray-400) 50%, transparent 0), linear-gradient(90deg, var(--gray-400), var(--gray-400));
      background-position: calc(100% - 24px) 50%, calc(100% - 16px) 50%, calc(100% - 48px) 8px;
      background-size: 8px 8px, 8px 8px, 1px calc(100% - 16px);
      background-repeat: no-repeat
    }

    .form-group input[type=checkbox][data-v-79a09c4e]:not([disabled]):focus,
    .form-group input[type=password][data-v-79a09c4e]:not([disabled]):focus,
    .form-group input[type=tel][data-v-79a09c4e]:not([disabled]):focus,
    .form-group input[type=text][data-v-79a09c4e]:not([disabled]):focus,
    .form-group select[data-v-79a09c4e]:not([disabled]):focus,
    .form-group textarea[data-v-79a09c4e]:not([disabled]):focus {
      border: 1px solid #f04e23;
      border: 1px solid var(--hotmart-primary);
      box-shadow: 0 0 0 3px #ff9377;
      box-shadow: 0 0 0 3px var(--hotmart-primary-lighter);
      outline: none
    }

    .form-group--valid input[type=checkbox][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--valid input[type=password][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--valid input[type=tel][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--valid input[type=text][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--valid select[data-v-79a09c4e]:not([disabled]):focus,
    .form-group--valid textarea[data-v-79a09c4e]:not([disabled]):focus {
      box-shadow: 0 0 0 3px #28e277;
      box-shadow: 0 0 0 3px var(--success-lighter);
      border-color: #03a046;
      border-color: var(--success)
    }

    .form-group--invalid input[type=checkbox][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--invalid input[type=password][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--invalid input[type=tel][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--invalid input[type=text][data-v-79a09c4e]:not([disabled]):focus,
    .form-group--invalid select[data-v-79a09c4e]:not([disabled]):focus,
    .form-group--invalid textarea[data-v-79a09c4e]:not([disabled]):focus {
      box-shadow: 0 0 0 3px #df8f8b;
      box-shadow: 0 0 0 3px var(--danger-lighter);
      border-color: #d6342c;
      border-color: var(--danger)
    }

    .form-group select[data-v-79a09c4e]:not([disabled]):focus {
      background-image: linear-gradient(45deg, transparent 50%, #f04e23 0), linear-gradient(135deg, #f04e23 50%, transparent 0), linear-gradient(90deg, #f04e23, #f04e23);
      background-image: linear-gradient(45deg, transparent 50%, var(--hotmart-primary) 0), linear-gradient(135deg, var(--hotmart-primary) 50%, transparent 0), linear-gradient(90deg, var(--hotmart-primary), var(--hotmart-primary))
    }

    .form-group--valid select[data-v-79a09c4e]:not([disabled]):focus {
      background-image: linear-gradient(45deg, transparent 50%, #03a046 0), linear-gradient(135deg, #03a046 50%, transparent 0), linear-gradient(90deg, #03a046, #28e277);
      background-image: linear-gradient(45deg, transparent 50%, var(--success) 0), linear-gradient(135deg, var(--success) 50%, transparent 0), linear-gradient(90deg, var(--success), var(--success-lighter))
    }

    .form-group--invalid select[data-v-79a09c4e]:not([disabled]):focus {
      background-image: linear-gradient(45deg, transparent 50%, #d6342c 0), linear-gradient(135deg, #d6342c 50%, transparent 0), linear-gradient(90deg, #d6342c, #d6342c);
      background-image: linear-gradient(45deg, transparent 50%, var(--danger) 0), linear-gradient(135deg, var(--danger) 50%, transparent 0), linear-gradient(90deg, var(--danger), var(--danger))
    }

    .form-validation-messages[data-v-79a09c4e] {
      font-size: var(--ms0);
      font-weight: 700;
      margin-top: calc(var(--ms1)/2)
    }

    .form-validation-messages--error[data-v-79a09c4e] {
      color: #d6342c;
      color: var(--danger)
    }

    .form-group--required .form-label label[data-v-79a09c4e]:after {
      content: "*";
      font-size: var(--ms0);
      color: #d6342c;
      color: var(--danger);
      margin-left: calc(var(--ms1)/2)
    }

    .form-group--invalid input[type=password][data-v-79a09c4e],
    .form-group--invalid input[type=tel][data-v-79a09c4e],
    .form-group--invalid input[type=text][data-v-79a09c4e],
    .form-group--invalid textarea[data-v-79a09c4e],
    .form-group--valid input[type=password][data-v-79a09c4e],
    .form-group--valid input[type=tel][data-v-79a09c4e],
    .form-group--valid input[type=text][data-v-79a09c4e],
    .form-group--valid textarea[data-v-79a09c4e] {
      padding-right: calc(var(--ms1) + 20px + var(--ms1));
      background-repeat: no-repeat;
      background-position: top var(--ms1) right var(--ms1)
    }

    .form-group--valid input[type=password][data-v-79a09c4e],
    .form-group--valid input[type=tel][data-v-79a09c4e],
    .form-group--valid input[type=text][data-v-79a09c4e],
    .form-group--valid select[data-v-79a09c4e],
    .form-group--valid textarea[data-v-79a09c4e] {
      border-color: #03a046;
      border-color: var(--success)
    }

    .form-group--valid input[type=password][data-v-79a09c4e],
    .form-group--valid input[type=tel][data-v-79a09c4e],
    .form-group--valid input[type=text][data-v-79a09c4e],
    .form-group--valid textarea[data-v-79a09c4e] {
      background-size: 16px 16px;
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E")
    }

    .form-group--valid select[data-v-79a09c4e] {
      background-image: linear-gradient(45deg, transparent 50%, #03a046 0), linear-gradient(135deg, #03a046 50%, transparent 0), linear-gradient(90deg, #03a046, #03a046);
      background-image: linear-gradient(45deg, transparent 50%, var(--success) 0), linear-gradient(135deg, var(--success) 50%, transparent 0), linear-gradient(90deg, var(--success), var(--success))
    }

    .form-group--invalid input[type=password][data-v-79a09c4e],
    .form-group--invalid input[type=tel][data-v-79a09c4e],
    .form-group--invalid input[type=text][data-v-79a09c4e],
    .form-group--invalid select[data-v-79a09c4e],
    .form-group--invalid textarea[data-v-79a09c4e] {
      border-color: #d6342c;
      border-color: var(--danger)
    }

    .form-group--invalid input[type=password][data-v-79a09c4e],
    .form-group--invalid input[type=tel][data-v-79a09c4e],
    .form-group--invalid input[type=text][data-v-79a09c4e],
    .form-group--invalid textarea[data-v-79a09c4e] {
      background-size: 20px 20px;
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E")
    }

    .form-group--invalid select[data-v-79a09c4e] {
      background-image: linear-gradient(45deg, transparent 50%, #d6342c 0), linear-gradient(135deg, #d6342c 50%, transparent 0), linear-gradient(90deg, #d6342c, #d6342c);
      background-image: linear-gradient(45deg, transparent 50%, var(--danger) 0), linear-gradient(135deg, var(--danger) 50%, transparent 0), linear-gradient(90deg, var(--danger), var(--danger))
    }
  </style>
  <style type="text/css">
    [data-v-2e34952a]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-2e34952a]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-2e34952a]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-2e34952a]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-2e34952a]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-2e34952a]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-2e34952a]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-2e34952a]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-2e34952a]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-2e34952a]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-2e34952a]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-2e34952a]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-2e34952a]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-2e34952a]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-2e34952a]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-2e34952a]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-2e34952a]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-2e34952a]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-2e34952a]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-2e34952a] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-2e34952a] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-2e34952a] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-2e34952a] {
      border-radius: 50em
    }

    .form-action[data-v-2e34952a] {
      margin-top: calc(var(--ms1)*6)
    }

    .form-action .button[data-v-2e34952a] {
      width: 100%
    }

    @media (min-width:414px) {
      .form-action .button[data-v-2e34952a] {
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content
      }
    }

    .form-action .button[data-v-2e34952a]:not(:last-of-type) {
      margin-bottom: var(--ms1)
    }

    @media (min-width:768px) {
      .form-action .button[data-v-2e34952a]:not(:last-of-type) {
        margin-bottom: 0;
        margin-right: var(--ms1)
      }
    }

    .form-action__validation-required-note[data-v-2e34952a] {
      margin-top: calc(var(--ms1)*2)
    }

    .form-action__validation-required-note .form-text[data-v-2e34952a] {
      font-weight: 700
    }

    .form-action__validation-required-note .form-text[data-v-2e34952a]:before {
      content: "*";
      color: #d6342c;
      color: var(--danger);
      margin-right: calc(var(--ms1)/2)
    }
  </style>
  <style type="text/css">
    [data-v-16b4e7b2]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-16b4e7b2]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-16b4e7b2]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-16b4e7b2]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-16b4e7b2]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-16b4e7b2]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-16b4e7b2]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-16b4e7b2]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-16b4e7b2]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-16b4e7b2]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-16b4e7b2]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-16b4e7b2]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-16b4e7b2]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-16b4e7b2]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-16b4e7b2]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-16b4e7b2]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-16b4e7b2]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-16b4e7b2]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-16b4e7b2]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-16b4e7b2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-16b4e7b2] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-16b4e7b2] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-16b4e7b2] {
      border-radius: 50em
    }

    .badge[data-v-16b4e7b2] {
      display: inline-block;
      font-size: var(--ms-1);
      color: #f04e23;
      color: var(--hotmart-primary);
      transform: translateY(-6px)
    }
  </style>
  <style type="text/css">
    [data-v-fb6a0dee]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-fb6a0dee]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-fb6a0dee]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-fb6a0dee]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-fb6a0dee]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-fb6a0dee]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-fb6a0dee]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-fb6a0dee]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-fb6a0dee]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-fb6a0dee]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-fb6a0dee]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-fb6a0dee]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-fb6a0dee]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-fb6a0dee]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-fb6a0dee]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-fb6a0dee]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-fb6a0dee]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-fb6a0dee]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-fb6a0dee]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-fb6a0dee] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-fb6a0dee] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-fb6a0dee] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-fb6a0dee] {
      border-radius: 50em
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar {
      z-index: 1
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar form>div {
      box-shadow: none;
      transition: none;
      height: auto
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar form>div,
    [data-v-fb6a0dee] .hm-mktplace-search-bar form>div.is-focused,
    [data-v-fb6a0dee] .hm-mktplace-search-bar form>div.show-suggestion {
      border: 1px solid #d0d3d6;
      border: 1px solid var(--gray-400)
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar form>div.is-focused,
    [data-v-fb6a0dee] .hm-mktplace-search-bar form>div.show-suggestion input[type=text] {
      background: #fff;
      background: var(--white)
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar input[type=text] {
      color: #353a40;
      color: var(--gray-900);
      padding: var(--ms1);
      position: relative;
      z-index: 2;
      transition: none
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit] {
      transition: none
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]:not([disabled]):active,
    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]:not([disabled]):focus {
      outline: none
    }

    @media (hover:hover) and (pointer:fine) {

      [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]:not([disabled]):active,
      [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]:not([disabled]):focus {
        box-shadow: 0 0 0 3px #ff9377;
        box-shadow: 0 0 0 3px var(--hotmart-primary-lighter)
      }
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar form>div.is-focused.show-suggestion button[type=submit] {
      background: transparent
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]+div {
      margin-top: 1px;
      background: #fff;
      background: var(--white)
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]+div li:first-of-type {
      display: none
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]+div li.hovered a {
      background: #ecf8f8;
      background: var(--hotmart-tertiary-lightest)
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]+div li {
      font-weight: 700
    }

    [data-v-fb6a0dee] .hm-mktplace-search-bar button[type=submit]+div li span {
      font-weight: 400
    }

    .display-search-bar__component[data-v-fb6a0dee] {
      margin-bottom: calc(var(--ms1)*2)
    }

    .display-search-bar__suggestions[data-v-fb6a0dee] {
      display: flex;
      flex-direction: column
    }

    @media (min-width:768px) {
      .display-search-bar__suggestions[data-v-fb6a0dee] {
        flex-direction: row;
        align-items: center
      }
    }

    .display-search-bar__suggestions-title[data-v-fb6a0dee] {
      display: inline;
      margin-right: var(--ms1)
    }

    .display-search-bar__categories[data-v-fb6a0dee] {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-wrap: wrap
    }

    .display-search-bar__category[data-v-fb6a0dee] {
      margin-top: var(--ms1)
    }

    @media (min-width:768px) {
      .display-search-bar__category[data-v-fb6a0dee] {
        margin-top: 0
      }
    }

    .display-search-bar__category[data-v-fb6a0dee]:not(:last-of-type) {
      margin-right: var(--ms1)
    }

    .display-search-bar__category a[data-v-fb6a0dee] {
      display: inline-block;
      text-decoration: none;
      color: #353a40;
      color: var(--gray-900);
      background: #fff;
      background: var(--white);
      padding: calc(var(--ms1)/2) var(--ms1);
      border-radius: 50em;
      will-change: color, background-color;
      transition: color .25s cubic-bezier(.4, 0, .14, 1), background-color .25s cubic-bezier(.4, 0, .14, 1);
      transition: color .25s var(--ease-in-out), background-color .25s var(--ease-in-out);
      white-space: nowrap
    }

    .display-search-bar__category a[data-v-fb6a0dee]:hover {
      background-color: #51c1c3;
      background-color: var(--hotmart-tertiary);
      color: #fff;
      color: var(--white)
    }
  </style>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,700,900&display=swap);
  </style>
  <style>
    .hm-mktplace-search-input-autocomplete {
      position: relative;
      z-index: 100;
      background: #fff;
      border-radius: 6px;
      box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.13);
      font-family: "Nunito Sans", sans-serif;
      transition: all 0.5s;
      height: 48px
    }

    .hm-mktplace-search-input-autocomplete input.hm-mktplace-search-input {
      padding: 12px 52px 12px 12px;
      font-size: 16px;
      font-weight: normal;
      font-family: "Nunito Sans", sans-serif;
      border-radius: 6px;
      width: 100%;
      border: 0px;
      color: #898F95;
      box-sizing: border-box;
      z-index: 1;
      outline: none;
      transition: all 0.5s;
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0
    }

    .hm-mktplace-search-input-autocomplete input.hm-mktplace-search-input::placeholder {
      color: #848A91
    }

    .hm-mktplace-search-input-autocomplete.show-suggestion input.hm-mktplace-search-input {
      opacity: 1;
      background: #fafbfc
    }

    .hm-mktplace-search-input-autocomplete.show-suggestion {
      border-radius: 5px 5px 0 0
    }

    .hm-mktplace-search-input-autocomplete.show-suggestion input.hm-mktplace-search-input {
      border-radius: 5px 5px 0 0;
      border-bottom: 0px
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data {
      position: absolute;
      top: 100%;
      background: #fafbfc;
      color: #484e56;
      border: 1px solid #CDCFD1;
      border-top: 0px;
      left: -1px;
      right: -1px;
      max-height: 332px;
      overflow: auto;
      z-index: 110;
      border-radius: 0 0 5px 5px;
      margin-top: -1px
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data a {
      display: block;
      color: inherit;
      padding: 8px 12px;
      text-decoration: none;
      font-size: 16px
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data li {
      text-decoration: none;
      color: #6b7480;
      font-size: 16px
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data li.hovered a {
      background: #f0f3f7;
      color: #484e56
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul {
      margin: 0px;
      padding: 0px;
      list-style: none
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li {
      margin: 0px;
      text-align: left
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li span {
      font-weight: bold;
      pointer-events: none
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li.category,
    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li.separator {
      padding: 8px;
      padding-left: 15px
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li.category {
      color: #d0d3d6;
      font-size: 12px;
      font-weight: bold;
      text-transform: uppercase
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li.separator {
      padding: 0px 12px
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li.separator hr {
      color: #d0d3d6;
      border: 0px;
      border-top: 1px solid #d0d3d6;
      margin: 0px
    }

    .hm-mktplace-search-input-autocomplete .hm-mktplace-search-autocomplete-data ul li:empty {
      display: none
    }

    @media (max-width: 797px) {
      .hm-mktplace-search-input-autocomplete {
        height: 48px
      }
    }

    .searchSubmit {
      border: 0;
      background-color: #fff;
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 2;
      top: 0px;
      right: 1px;
      bottom: 0px;
      width: 48px;
      margin: 0px;
      transition: all cubic-bezier(0.4, 0, 0.14, 1) 500ms;
      border-radius: 0 4px 4px 0;
      cursor: pointer
    }

    .searchSubmit svg {
      width: 16px;
      height: 16px;
      position: absolute;
      z-index: 11;
      color: #ed4f2e
    }

    .searchSubmit:hover svg,
    .searchSubmit:active svg {
      color: #c33219
    }

    @media (max-width: 797px) {
      .searchSubmit {
        background-color: #fff;
        padding: 12px 25px 12px
      }
    }

    .is-focused {
      outline: none;
      opacity: 1;
      background: #fafbfc;
      box-shadow: 0 0 0 4px rgba(208, 211, 214, 0.4), 0 0 4px 0 #545b64
    }

    .is-focused input.hm-mktplace-search-input {
      color: #6b7480
    }

    .is-focused.show-suggestion .searchSubmit {
      background: #fafbfc
    }

    .is-focused.show-suggestion .searchSubmit:hover svg {
      color: #c33219
    }

    @keyframes spin {
      0% {
        transform: translate(-50%, -50%) rotate(0deg)
      }

      100% {
        transform: translate(-50%, -50%) rotate(360deg)
      }
    }
  </style>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,700,900&display=swap);
  </style>
  <style>
    .hm-mktplace-search-bar {
      position: relative;
      font-family: 'Nunito Sans', 'sans-serif';
      z-index: 10
    }
  </style>
  <style type="text/css">
    [data-v-15d3a47a]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-15d3a47a]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-15d3a47a]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-15d3a47a]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-15d3a47a]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-15d3a47a]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-15d3a47a]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-15d3a47a]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-15d3a47a]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-15d3a47a]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-15d3a47a]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-15d3a47a]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-15d3a47a]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-15d3a47a]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-15d3a47a]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-15d3a47a]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-15d3a47a]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-15d3a47a]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-15d3a47a]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-15d3a47a] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-15d3a47a] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-15d3a47a] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-15d3a47a] {
      border-radius: 50em
    }

    .display-search[data-v-15d3a47a] {
      position: relative;
      z-index: 2;
      background: #ecf8f8;
      background: var(--hotmart-tertiary-lightest);
      margin-bottom: calc(var(--ms1)*8);
      padding: calc(var(--ms1)*2) var(--ms1)
    }

    @media (min-width:768px) {
      .display-search[data-v-15d3a47a] {
        margin-bottom: calc(var(--ms1)*9);
        padding: calc(var(--ms1)*4) calc(var(--ms1)*2)
      }
    }

    @media (min-width:1024px) {
      .display-search[data-v-15d3a47a] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    @media (min-width:1440px) {
      .display-search[data-v-15d3a47a] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .display-search__container[data-v-15d3a47a] {
      width: 100%;
      max-width: 1024px;
      max-width: var(--desktop);
      margin-left: auto;
      margin-right: auto
    }

    .display-search__title[data-v-15d3a47a] {
      margin-bottom: calc(var(--ms1)*4)
    }
  </style>
  <style type="text/css">
    [data-v-27a9610b]:root {
      --hotmart-primary-lightest: #fdece7;
      --hotmart-primary-lighter: #ff9377;
      --hotmart-primary-light: #fe734f;
      --hotmart-primary: #f04e23;
      --hotmart-primary-dark: #c5310a;
      --hotmart-primary-darker: #9c2100;
      --hotmart-primary-50: rgba(240, 78, 35, 0.5);
      --hotmart-secondary-lightest: #e7f8fd;
      --hotmart-secondary-lighter: #286678;
      --hotmart-secondary-light: #155364;
      --hotmart-secondary: #053d4e;
      --hotmart-secondary-dark: #012a36;
      --hotmart-secondary-darker: #00181e;
      --hotmart-tertiary-lightest: #ecf8f8;
      --hotmart-tertiary-lighter: #b3f0f0;
      --hotmart-tertiary-light: #7cdbdb;
      --hotmart-tertiary: #51c1c3;
      --hotmart-tertiary-dark: #30a8a8;
      --hotmart-tertiary-darker: #159393;
      --white: #fff;
      --gray-100: #fafbfc;
      --gray-200: #f0f3f7;
      --gray-300: #dfe2e6;
      --gray-400: #d0d3d6;
      --gray-500: #6b7480;
      --gray-600: #5f6772;
      --gray-700: #545b64;
      --gray-800: #484e56;
      --gray-900: #353a40;
      --black: #000;
      --gray-500-50: rgba(107, 116, 128, 0.5);
      --gray-900-90: rgba(53, 58, 68, 0.9);
      --black-50: rgba(0, 0, 0, 0.5);
      --black-80: rgba(0, 0, 0, 0.8);
      --success-lightest: #d7fee8;
      --success-lighter: #28e277;
      --success-light: #0fc75e;
      --success: #03a046;
      --success-dark: #03873b;
      --success-darker: #026e30;
      --danger-lightest: #f8dedd;
      --danger-lighter: #df8f8b;
      --danger-light: #d46863;
      --danger: #d6342c;
      --danger-dark: #c92918;
      --danger-darker: #a01607;
      --warning-lightest: #fdf4d9;
      --warning-lighter: #f6d66f;
      --warning-light: #f3c83f;
      --warning: #efba0f;
      --warning-dark: #d8a80e;
      --warning-darker: #785d08;
      --info-lightest: #d9ebfc;
      --info-lighter: #6ca7e0;
      --info-light: #368ee2;
      --info: #1174d3;
      --info-dark: #0f68bd;
      --info-darker: #0d5ba5;
      --mobile: 320px;
      --mobile-m: 375px;
      --mobile-l: 414px;
      --tablet: 768px;
      --desktop: 1024px;
      --desktop-m: 1280px;
      --desktop-l: 1440px;
      --desktop-xl: 1920px;
      --font-family: "Nunito Sans", sans-serif;
      --font-size: 16px;
      --border-radius: 6px;
      --ease-in-out: cubic-bezier(0.4, 0, 0.14, 1);
      --ease-out: cubic-bezier(0.4, 0, 0, 1)
    }

    body[data-v-27a9610b]:before {
      display: none;
      content: "mobile"
    }

    @media (min-width:375px) {
      body[data-v-27a9610b]:before {
        content: "mobile-m"
      }
    }

    @media (min-width:414px) {
      body[data-v-27a9610b]:before {
        content: "mobile-l"
      }
    }

    @media (min-width:768px) {
      body[data-v-27a9610b]:before {
        content: "tablet"
      }
    }

    @media (min-width:1024px) {
      body[data-v-27a9610b]:before {
        content: "desktop"
      }
    }

    @media (min-width:1280px) {
      body[data-v-27a9610b]:before {
        content: "desktop-m"
      }
    }

    @media (min-width:1440px) {
      body[data-v-27a9610b]:before {
        content: "desktop-l"
      }
    }

    @media (min-width:1920px) {
      body[data-v-27a9610b]:before {
        content: "desktop-xl"
      }
    }

    @supports (--css:variables) {
      [data-v-27a9610b]:root {
        --ms-3: 6px;
        --ms-2: 8px;
        --ms-1: 10px;
        --ms0: 12px;
        --ms1: 14px;
        --ms2: 16px;
        --ms3: 18px;
        --ms4: 22.652px;
        --ms5: 25.888px;
        --ms6: 29.124000000000002px;
        --ms7: 36.650936px;
        --ms8: 41.886784000000006px;
        --ms9: 47.12263200000001px;
        --ms10: 59.30121444800002px;
        --ms11: 67.77281651200002px;
        --ms12: 76.24441857600002px;
        --ms13: 95.94936497686402px;
        --ms14: 109.65641711641602px;
        --ms15: 123.36346925596803px;
        --ms16: 155.24607253256602px;
        --ms17: 177.42408289436116px;
        --ms18: 199.6020932561563px;
        --ms19: 251.18814535769178px;
        --ms20: 287.07216612307633px
      }

      @media (min-width:1024px) {
        [data-v-27a9610b]:root {
          --ms-3: 8px;
          --ms-2: 10px;
          --ms-1: 12px;
          --ms0: 14px;
          --ms1: 16px;
          --ms2: 18px;
          --ms3: 20px;
          --ms4: 25.888px;
          --ms5: 29.124000000000002px;
          --ms6: 32.36px;
          --ms7: 41.886784000000006px;
          --ms8: 47.12263200000001px;
          --ms9: 52.35848000000001px;
          --ms10: 67.77281651200002px;
          --ms11: 76.24441857600002px;
          --ms12: 84.71602064000002px;
          --ms13: 109.65641711641602px;
          --ms14: 123.36346925596803px;
          --ms15: 137.07052139552002px;
          --ms16: 177.42408289436116px;
          --ms17: 199.6020932561563px;
          --ms18: 221.78010361795145px;
          --ms19: 287.07216612307633px;
          --ms20: 322.9561868884609px
        }
      }
    }

    [class*=aspect-ratio--][data-v-27a9610b]:before {
      display: block;
      content: "";
      width: 100%;
      padding-top: 100%
    }

    .aspect-ratio--1\:1[data-v-27a9610b]:before {
      padding-top: 100%
    }

    .aspect-ratio--2\.2\:1[data-v-27a9610b]:before {
      padding-top: 45.454545455%
    }

    .aspect-ratio--2\:3[data-v-27a9610b]:before {
      padding-top: 150%
    }

    .aspect-ratio--3\:2[data-v-27a9610b]:before {
      padding-top: 66.666666667%
    }

    .aspect-ratio--4\:5[data-v-27a9610b]:before {
      padding-top: 125%
    }

    .aspect-ratio--9\:16[data-v-27a9610b]:before {
      padding-top: 177.777777778%
    }

    .aspect-ratio--16\:9[data-v-27a9610b]:before {
      padding-top: 56.25%
    }

    .border-radius--rounded[data-v-27a9610b] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .border-radius--rounded-circle[data-v-27a9610b] {
      border-radius: 50em
    }

    .image.border-radius--rounded img[data-v-27a9610b] {
      border-radius: 6px;
      border-radius: var(--border-radius)
    }

    .image.border-radius--rounded-circle img[data-v-27a9610b] {
      border-radius: 50em
    }

    .carousel[data-v-27a9610b] {
      margin-bottom: calc(var(--ms1)*8);
      padding-right: var(--ms1);
      padding-left: var(--ms1)
    }

    @media (min-width:768px) {
      .carousel[data-v-27a9610b] {
        margin-bottom: calc(var(--ms1)*9);
        padding-right: calc(var(--ms1)*2);
        padding-left: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1024px) {
      .carousel[data-v-27a9610b] {
        margin-bottom: calc(var(--ms1)*10)
      }
    }

    @media (min-width:1440px) {
      .carousel[data-v-27a9610b] {
        padding-right: 0;
        padding-left: 0
      }
    }

    .carousel__container[data-v-27a9610b] {
      max-width: 1280px;
      max-width: var(--desktop-m)
    }

    .carousel__container[data-v-27a9610b],
    .carousel__person[data-v-27a9610b] {
      width: 100%;
      margin-right: auto;
      margin-left: auto
    }

    .carousel__person[data-v-27a9610b] {
      position: relative;
      z-index: 1
    }

    @media (min-width:1024px) {
      .carousel__person[data-v-27a9610b] {
        width: calc(50% - var(--ms1));
        margin-right: 0
      }
    }

    .carousel__quote[data-v-27a9610b] {
      position: absolute;
      z-index: 2;
      width: 100%;
      max-width: calc(var(--ms1)*40);
      left: 50%;
      bottom: var(--ms1);
      transform: translateX(-50%)
    }

    @media (min-width:768px) {
      .carousel__quote[data-v-27a9610b] {
        bottom: calc(var(--ms1)*2)
      }
    }

    @media (min-width:1024px) {
      .carousel__quote[data-v-27a9610b] {
        max-width: calc(100% - var(--ms1)*4)
      }
    }

    .carousel__quote p[data-v-27a9610b] {
      font-size: var(--ms3)
    }

    .carousel__quote p[data-v-27a9610b]:last-of-type {
      margin-bottom: 0
    }

    .carousel__quote mark[data-v-27a9610b] {
      padding: 2px;
      background: #b3f0f0;
      background: var(--hotmart-tertiary-lighter);
      -webkit-box-decoration-break: clone;
      box-decoration-break: clone;
      color: #353a40;
      color: var(--gray-900);
      line-height: calc(100% + 12px)
    }

    .carousel__person .image[data-v-27a9610b] {
      position: relative;
      z-index: 1;
      max-width: calc(var(--ms1)*26);
      margin-left: auto;
      margin-right: auto
    }

    .carousel__video-cards[data-v-27a9610b] {
      display: flex;
      flex-direction: column
    }

    @media (min-width:1024px) {
      .carousel__video-cards[data-v-27a9610b] {
        flex-direction: row;
        justify-content: space-between
      }
    }

    .carousel__video-cards .card-social-proof[data-v-27a9610b] {
      width: 100%;
      margin-left: auto;
      margin-right: auto
    }

    @media (min-width:1024px) {
      .carousel__video-cards .card-social-proof[data-v-27a9610b] {
        width: calc(50% - var(--ms1));
        max-width: none;
        margin-left: 0;
        margin-right: 0
      }
    }

    .carousel__video-cards .card-social-proof[data-v-27a9610b]:first-of-type {
      margin-bottom: var(--ms1)
    }

    @media (min-width:1024px) {
      .carousel__video-cards .card-social-proof[data-v-27a9610b]:first-of-type {
        margin-bottom: 0;
        margin-top: calc(var(--ms1)*10*-1);
        margin-bottom: calc(var(--ms1)*10)
      }
    }
  </style>
  <script
    src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/991176222/?random=1595350997739&amp;cv=9&amp;fst=1595350997739&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=2&amp;u_tz=0&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2wg783&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.hotmart.com%2Ffr&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Hotmart%20%3A%20apprenez%20ce%20que%20vous%20voulez%2C%20enseignez%20ce%20que%20vous%20savez&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4">
  </script>
  <script
    src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/991176222/?random=1595350998002&amp;cv=9&amp;fst=1595350998002&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635471&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=2&amp;u_tz=0&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2oa783&amp;sendb=1&amp;ig=1&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=https%3A%2F%2Fwww.hotmart.com%2Ffr&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Hotmart%20%3A%20apprenez%20ce%20que%20vous%20voulez%2C%20enseignez%20ce%20que%20vous%20savez&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4">
  </script>
  <script async="" src="https://script.hotjar.com/modules.a1fbf755044ca8f629ba.js" charset="utf-8"></script>
  <style type="text/css">
    iframe#_hjRemoteVarsFrame {
      display: none !important;
      width: 1px !important;
      height: 1px !important;
      opacity: 0 !important;
      pointer-events: none !important;
    }
  </style>
  <style>
    ._hj-mMo1P__styles__resetStyles * {
      line-height: normal;
      font-family: Arial, sans-serif, Tahoma !important;
      text-transform: initial !important;
      letter-spacing: normal !important;
    }

    ._hj-mMo1P__styles__resetStyles *::before,
    ._hj-mMo1P__styles__resetStyles *::after {
      box-sizing: initial;
    }

    ._hj-mMo1P__styles__resetStyles div {
      height: auto;
    }

    ._hj-mMo1P__styles__resetStyles div,
    ._hj-mMo1P__styles__resetStyles span,
    ._hj-mMo1P__styles__resetStyles p,
    ._hj-mMo1P__styles__resetStyles a,
    ._hj-mMo1P__styles__resetStyles button {
      font-weight: normal !important;
    }

    ._hj-mMo1P__styles__resetStyles div,
    ._hj-mMo1P__styles__resetStyles span,
    ._hj-mMo1P__styles__resetStyles p,
    ._hj-mMo1P__styles__resetStyles a,
    ._hj-mMo1P__styles__resetStyles img,
    ._hj-mMo1P__styles__resetStyles strong,
    ._hj-mMo1P__styles__resetStyles form,
    ._hj-mMo1P__styles__resetStyles label {
      border: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
      margin: 0;
      padding: 0;
      float: none !important;
    }

    ._hj-mMo1P__styles__resetStyles span {
      color: inherit;
    }

    ._hj-mMo1P__styles__resetStyles ol,
    ._hj-mMo1P__styles__resetStyles ul,
    ._hj-mMo1P__styles__resetStyles li {
      list-style: none !important;
      margin: 0 !important;
      padding: 0 !important;
    }

    ._hj-mMo1P__styles__resetStyles li:before,
    ._hj-mMo1P__styles__resetStyles li:after {
      content: none !important;
    }

    ._hj-mMo1P__styles__resetStyles hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #ccc;
      margin: 1em 0;
      padding: 0;
    }

    ._hj-mMo1P__styles__resetStyles input[type='submit'],
    ._hj-mMo1P__styles__resetStyles input[type='button'],
    ._hj-mMo1P__styles__resetStyles button {
      margin: 0;
      padding: 0;
      float: none !important;
    }

    ._hj-mMo1P__styles__resetStyles input,
    ._hj-mMo1P__styles__resetStyles select,
    ._hj-mMo1P__styles__resetStyles a img {
      vertical-align: middle;
    }

    ._hj-10MNR__styles__globalStyles *,
    ._hj-10MNR__styles__globalStyles *::before,
    ._hj-10MNR__styles__globalStyles *::after {
      box-sizing: border-box;
    }

    @font-face {
      font-family: 'hotjar';
      src: url(https://script.hotjar.com/font-hotjar_5.fdcf0e.eot);
      src: url(https://script.hotjar.com/font-hotjar_5.fdcf0e.eot#iefix) format("embedded-opentype"), url(https://script.hotjar.com/font-hotjar_5.c9fb91.woff2) format("woff2"), url(https://script.hotjar.com/font-hotjar_5.8598c5.ttf) format("truetype"), url(https://script.hotjar.com/font-hotjar_5.6da396.woff) format("woff"), url(https://script.hotjar.com/font-hotjar_5.a6049d.svg#hotjar) format("svg");
      font-weight: normal;
      font-style: normal;
    }

    @keyframes _hj-CvZ6d__styles__spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes _hj-19ojv__styles__colors {
      0% {
        border-color: #f4364c;
        border-top-color: transparent;
      }

      25% {
        border-color: #00a2f2;
        border-top-color: transparent;
      }

      50% {
        border-color: #efb60c;
        border-top-color: transparent;
      }

      75% {
        border-color: #42ca49;
        border-top-color: transparent;
      }

      100% {
        border-color: #f4364c;
        border-top-color: transparent;
      }
    }

    ._hj-10MNR__styles__globalStyles p {
      color: inherit !important;
    }

    ._hj-10MNR__styles__globalStyles a,
    ._hj-10MNR__styles__globalStyles a:link,
    ._hj-10MNR__styles__globalStyles a:hover,
    ._hj-10MNR__styles__globalStyles a:active {
      color: inherit !important;
      text-decoration: underline;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon {
      speak: none !important;
      font-style: normal !important;
      font-weight: normal !important;
      font-variant: normal !important;
      text-transform: none !important;
      overflow-wrap: normal !important;
      word-break: normal !important;
      word-wrap: normal !important;
      white-space: nowrap !important;
      line-height: normal !important;
      -webkit-font-smoothing: antialiased !important;
      -moz-osx-font-smoothing: grayscale !important;
      vertical-align: middle !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon:before,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon:after,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon *,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon *:before,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon *:after {
      font-family: 'hotjar' !important;
      display: inline-block !important;
      direction: ltr !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon:before {
      color: inherit !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-WPdPO__styles__iconX:before {
      content: '\E803';
    }

    ._hj-10MNR__styles__globalStyles ._hj-2WW4P__styles__iconOk:before {
      content: '\E804';
    }

    ._hj-10MNR__styles__globalStyles ._hj-34EZP__styles__iconError:before {
      content: '\E90C';
    }

    ._hj-10MNR__styles__globalStyles ._hj-lAAAw__styles__iconLogo:before {
      content: '\E806';
    }

    ._hj-10MNR__styles__globalStyles ._hj-FxxIA__styles__surveyIcons {
      background-repeat: no-repeat;
      width: 16px;
      height: 16px;
      display: inline-block !important;
      zoom: 1;
      vertical-align: middle;
    }

    ._hj-widget-theme-light ._hj-10MNR__styles__globalStyles ._hj-FxxIA__styles__surveyIcons {
      background-image: url(https://script.hotjar.com/widget_icons_light.ddcd59.png);
    }

    ._hj-widget-theme-dark ._hj-10MNR__styles__globalStyles ._hj-FxxIA__styles__surveyIcons {
      background-image: url(https://script.hotjar.com/widget_icons_dark.3a8118.png);
    }

    ._hj-10MNR__styles__globalStyles ._hj-1oY0c__styles__inputField {
      font-family: Arial, sans-serif, Tahoma;
      font-size: 14px;
      color: #333 !important;
      padding: 6px !important;
      text-indent: 0 !important;
      height: 30px;
      width: 100%;
      min-width: 100%;
      background: white;
      border: 1px solid !important;
      outline: none !important;
      max-width: none !important;
      float: none;
      border-radius: 3px;
    }

    ._hj-10MNR__styles__globalStyles ._hj-2xXAa__styles__textarea {
      resize: none;
      height: 100px;
    }

    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton {
      cursor: pointer;
      text-decoration: none;
      text-transform: capitalize;
      font-size: 13px;
      font-weight: bold;
      padding: 7px 10px;
      border: 0;
      outline: 0;
      display: inline-block;
      vertical-align: top;
      width: auto;
      zoom: 1;
      transition: all 0.2s ease-in-out;
      box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
      border-radius: 3px;
      color: white;
    }

    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton:active,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:active {
      background: #00a251;
    }

    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton[disabled],
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton[disabled] {
      cursor: default;
    }

    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton {
      font-size: 13px !important;
      font-weight: bold !important;
      padding: 7px 10px !important;
      border: 0 !important;
      outline: 0 !important;
      min-height: initial !important;
      width: auto !important;
      min-width: initial !important;
      background: #00c764 !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:active {
      background: #00a251 !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton {
      cursor: pointer;
      text-decoration: underline;
      font-size: 13px !important;
      padding: 7px 10px !important;
      border: 0 !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton,
    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton:active {
      background: transparent !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-29HmU__styles__answersContentWrapper {
      padding: 0 12px 12px 12px;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1KgX2__styles__spinner {
      border: 1px solid rgba(0, 0, 0, 0.6);
      border-top-color: transparent !important;
      border-radius: 50%;
      transform: rotate(0deg);
      animation: _hj-CvZ6d__styles__spin 0.4s linear infinite, _hj-19ojv__styles__colors 5.6s ease-in-out infinite;
    }

    ._hj-2xXAa__styles__textarea {}

    ._hj-WPdPO__styles__iconX,
    ._hj-2WW4P__styles__iconOk,
    ._hj-34EZP__styles__iconError,
    ._hj-lAAAw__styles__iconLogo {}

    ._hj-3v_Mp__styles__rtl,
    ._hj-3v_Mp__styles__rtl * {
      direction: rtl !important;
    }
  </style>
  <style>
    ._hj-3Qhhk__Notification__container {
      font-family: "Open Sans", Helvetica, Arial, sans-serif, Tahoma !important;
      transition-duration: 350ms;
      opacity: 0;
      transform: scale(0.9);
      display: flex;
      background: #263345;
      border-radius: 2px;
      position: fixed;
      z-index: 2147483646;
      top: 20px;
      left: 20px;
      width: 400px;
      padding: 25px;
      box-shadow: "0 2px 4px 0 rgba(0,0,0,.3)";
    }

    ._hj-3Qhhk__Notification__container * {
      font-family: "Open Sans", Helvetica, Arial, sans-serif, Tahoma !important;
    }

    ._hj-ldyOW__Notification__active {
      opacity: 1;
      transform: scale(1);
    }

    ._hj-3e98A__Notification__status {
      margin: 0 20px 0 0;
      border-radius: 50%;
      min-width: 50px;
      height: 50px;
      box-shadow: "0 2px 4px 0 rgba(0,0,0,.3)";
    }

    ._hj-2rMkS__Notification__good {
      background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGoAAABOCAYAAADIHIO3AAAAAXNSR0IArs4c6QAAB85JREFUeAHtnWmMFEUUgKcQEUFY1IBGVIhG4z9PVBQN8YpHQliEhaAGJYQYr0SNxn/4w6iJASGGoEYURcWAXIIciwZBwOgqkYQfGhPPxINTw+Gqu5Tfa7omvbM7R09Xd9dsdyVv6+g63nvfVE91V/esKuQhFg9orfvS8XXIjci5yNmIhH3Ib8gWZLNS6iBxHpL2AICGIfOQA1ofI6okupMKq5ArktYzs+PhbIU8hRyqDKccOL2ctqdl1oFJGI6DByIr6gMUBKd/op+rktA5c2PILEC+ig7JANNH6O/qzDkyToNx6Kl2IRVh7aPfi+LUPTN9+5C+tDeTDCQT652M0cc4tJgwBXlc3QM4cAi1NhUK+vLqteutoS+l5UzTWplEHtfmgQCkBJbUag9aDedaqyOfUbXx8WoBqYlEKzMpAUgypB7Gn5sklYMSL9QQApBG1VDdZpUW6SwHVYNLgTSYahv5hF9ZQ3XbVS6WDnNQVdwKpEFUEUhpXYieJyrmi4kKoAKQRleolsAh1TefUWXc7EPawExKG9JhVn2dOageQAHpFIrXA+maHg4nXXRABsxBlbg9AOnakkNpZdtk4BxUwP1AGkh2HTNpTKA47SSn33wxUYQQgHR9sTD1hGpHhZF8R/2Rzyg8AaQBRGtJOQTJ+5QsEEiSyvzy3If0IZDGeq5x5o/6E1UuBNReUSnTMwpIJ+ODNQ5C6kSvKQZSpkEFIN0gjnAsPAkk7oZkPAgkZFN8m35m86+eWD+dcTzHzQdQf6TVUUjP5JDwgA9po6OQnrUOyTf4HGK51dIQAV1PQjY4Cuk5K07EwCbkPkSe6tzf1Vh54FDO9/phRHYknQvoJZDWd9W7nu+PONro5yM7zDfwceISOOUU9qDNor7cinEi+DascxTSC5GdhIEjkF31Gah3S/vISkTsAB36IWvrs6Hch9FWuZ4d0TzvS3cUBu6JZqD+nT5Se+LTh7Qmmg22oJT2o+fYgCSLBJxc2nk9ed1OX9MjKxWyAx/SB3ZsqMfuSm303JDmdK+OgSciFp+jNgrr+dJ39xHtl/g2rHYU0jwrFmPkg/EZqLfSf6yrQh8SK1PzAXEp1i/ZgiSvjlg65ZVzkP6FMWJ5eNGHtNJRSPOjQgrePR/PMuKMqB1Wbq/l9chPceq0yvXCHaU/eQ3zPfTHBteCehmNHoqqVRBUc9TOamuv++PQRThXXp8UB0cKAUgTInUUS2P1Ct0+wJ1wHbX74sYhBrNR5T1bHbXPEO3VJ1RuCe67hGgs9+4E9BL0nhimXTJ11auMc78NSKKvBwqDeXdU70/GgNJR1M+UNGPQztIjlfI+pHfRe1KleukcU68x7kxbkMQGc+pL8S6Cllf7t+H4u0WhWgJ1T6De245CWohuViGJTwwo2fpNMciWuF4MgDk+hLK6BCBNLlsptQPqDYa2DknMMaAOpWZbl4H1o2TZ1NOndyn2Mz6kxUCd0tPxdMvUm4w/g9PdsTj0MN9RrMQKf+GAfnEMEr5P9SNt5Hvra9PWh/QWOk41Ze7EHqTpcUESO70ZxQDyoF+bO4brkeiyHTjezCEWPRc5ConvykKskOi/ELyO+Yi8K89bo4r3UOQSIF1G5kzyNS82qJ9QUO8w0L1xziRjSPA66iwKf8Ahjpz+jIquxorrt8I9QEpkIWYWEwUG/JWB+aLOQ3UPKG5XJQdJ9CnOKMlwmpHV1i5SwyWfh548oJZSOjWpmWQ0KM4oKWBwuTtxF6lEprNRonFitUz8kzQk8U8XUFKAEluIWkj9K/k8GA+o5aRkJnWYkiTjLqe+4MCcBm8mv5LToDNPFAX1SzatVjDe5LQgia1lQclBYMmLxvIG3hDJZzOoVdgtd/j/S9P+iqBEMWDJD1LwZkHcm4ppuqHc2Go1RyalDUm0qwpKKgHrAiIuiL073VKUgaDWYOSdLkASZ3dbTPREAGW/o3wMXL/t6XjvK1O8JlqY6Aok8W9NM8qAYGYNJd3KzLrElPW+WPGaaGECkJxa9dY0owwMlN9Leix8t5uy3hUrfgTEO905BUl8HAqUNAAW2yGFW0ixwOhNQW3AGtla+cdFq0KDEiMw5ijROFLvu2hUeJ28D52zkMSeukBJQ2DJ6YH9IvW65Bs3qE3oPh572l22oW5QYhTGyT3BGaRedNnI8ropLjkK41yHJPpHAiUdYKRGHiM1S/KNE9TH6NoQkMSnoZbn1SCwfH+EOnNZvlvtt9q44Y+rzbS5gw/Y3+HbptPCukOBNQ1TFgJLnr1zMHhP5wokWRA1TLAOSiwHVjORPLTv2La+t4Vze6NBEp/GAko6BpZj2yRqK2oJpCOiX6OF2ECJI4A1msiBbRK1DT1uA9Jh0asRQ6ygxCHASnmbxLvddWsjQxI/xg7Kh5XSNonawfgCyZFHtsUbjgdmlrxt/01yr27qHYw3yHG3uKkejhuK8H+Ryr3ja6tcf8Y4g930QoNohQPld5V4j9cWlNJ+9Oc5JEsfBhw5AInhl770F/TbZEnNvBvxAA6V3ylaam9m6Tb6y/DTUjF+rnBsH2RBdFgyO/OZFCOq413j5CeQo/UB07Np6+h9xdhdl/wAOHsEsgzpqA2Y/FBinP8MMnkfVBoxkQveSgqUHsP58usxLYjcKzwfGYnIbvJB5HukFVnHRexu4syE/wEDavfJf4zW9AAAAABJRU5ErkJggg==") no-repeat 52% 53% #3acc40;
      background-size: 25px 18px;
    }

    ._hj-38oE1__Notification__bad {
      background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAB4CAYAAADsduKfAAAAAXNSR0IArs4c6QAABEZJREFUaAXtWt9vDUEU7q2iQjVtpEFDECqER31AIoKQePEm4qEvnohI/waJRLz5IzzwJqVJk4YI6YsIFVGiqVaFVlDakP7g+r65O9vd7uze2d05bTR7ku/O7OyZ891z5szsr6mpWSQp2fCUy+U66B0AtgAtwGpgDPgMDJRKpVGU2QUE7cBtYAKIk7848Ri4CKxMxYYOG4A7QFrpQ4dtVmRQbAPepWUI6I+jvjGRDAqbgbFAp6zVe7FEsLgCeJjVsqHf6SBZbeDgAupHAsd5q7Tni0pv/BuWA0CbfyZ/ZRYmWpH6X2hKe3QSdZcktM1UP8oKRRMdqxw6/z2oLWqiw7rBcekT6TH6BYI1jklobhJjtJ6VWiRCPUoJEtpvgP0mVhi6ZlYEZSttk2idIAlNt/KHRH9YEZS1tE0iTixJYQ4oohlJFthWiUaPmNqSwqux8ui3JAtsK0dqMaE4RnOCZD9pm6GjTFYKkV9le1kRLU3oFKvICHnjr8doQoiEZkPJ8EOIaBrTR6080h7500YTSXn0TUdKE33XDY5LPnEokSYaX3ZEkdD5g6ZddVQuXeik0jvskXfx8yeXo7DRTGSM2Cgxl8IekQXimmgGkfIXaz1hJYh8b2i8IGIUbMXPOHYoQmcbNuoVoUsTrZBubOhcXpPKoFSvZjR1ML1dXiomvCuC5pmfR44vFaF1jmxBj3jsagUPjY8k0aJ5tGhEReiYL5mkCF2msPFxMrKcSawMkTnEv/tfE0UyzuSRfwubaXQqnaqHzrtU5CWz8oj/aSSHN+z60dR/YTJQZ9ikmKLN+GFxSYlep/j3C1V5U/JmYSOPTR71mxQt24aRUMZXciailzDKf5ZFnsd1ihB561RWrx5YE3mKvXEdqrT3xJ2PeOQpdsV1SGh/hWjwg6S98CsmMASkkcv2DAFNMFxKwfIeuurzTcCEXRUd+VnuiQXZLHSO21mN0YIBfqPrSiD7inMnYrqHmtVXy1CL4QDG2tF8FtgO8FPdB6APuIUEkP4sBJpCiggUESgiUEQgFAHb1XsXenGjCvdkNQN80OI99lOs3i9QZhdcGlYBV4C3QJKM4uRVoDE1GzodAoaANMKL4DlrMih3ANNAVrmOjslDAoUzAHcA5pVrsZ7B8l5gKi9DoP95IxkUugNKLqrcENigydSdKhq4d+uUbnRUtsBOp7alb4l5hyMhfhaq7IBHg2DZIcEEmzsxqQd5N1qHA96vScluGmboGMvkvKdmdlFbSUlEjyRF2SdR6I27AKOyzw1I3OlkfMB1RPqJdugR5VGlcP47BYvPaFUTdTunqBjsRcTmd7shxZsALvOuJbotFQydjlnuG6MEEm5avuuIjM+0m4xEbMTJeqAnJ9kI+qvVIJbII+OjfweQdt83H5pvAOmeztGhEbgJzAHVhE/v+5M8qLrGwUATDOwLYA/qfG/K90V8QdWPFB5GmSj/AFf+LeTG2bgWAAAAAElFTkSuQmCC") no-repeat center center #ea4031;
      background-size: 6px 30px;
    }

    ._hj-1Zxo9__Notification__warning {
      background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAB4CAYAAADsduKfAAAAAXNSR0IArs4c6QAABEZJREFUaAXtWt9vDUEU7q2iQjVtpEFDECqER31AIoKQePEm4qEvnohI/waJRLz5IzzwJqVJk4YI6YsIFVGiqVaFVlDakP7g+r65O9vd7uze2d05bTR7ku/O7OyZ891z5szsr6mpWSQp2fCUy+U66B0AtgAtwGpgDPgMDJRKpVGU2QUE7cBtYAKIk7848Ri4CKxMxYYOG4A7QFrpQ4dtVmRQbAPepWUI6I+jvjGRDAqbgbFAp6zVe7FEsLgCeJjVsqHf6SBZbeDgAupHAsd5q7Tni0pv/BuWA0CbfyZ/ZRYmWpH6X2hKe3QSdZcktM1UP8oKRRMdqxw6/z2oLWqiw7rBcekT6TH6BYI1jklobhJjtJ6VWiRCPUoJEtpvgP0mVhi6ZlYEZSttk2idIAlNt/KHRH9YEZS1tE0iTixJYQ4oohlJFthWiUaPmNqSwqux8ui3JAtsK0dqMaE4RnOCZD9pm6GjTFYKkV9le1kRLU3oFKvICHnjr8doQoiEZkPJ8EOIaBrTR6080h7500YTSXn0TUdKE33XDY5LPnEokSYaX3ZEkdD5g6ZddVQuXeik0jvskXfx8yeXo7DRTGSM2Cgxl8IekQXimmgGkfIXaz1hJYh8b2i8IGIUbMXPOHYoQmcbNuoVoUsTrZBubOhcXpPKoFSvZjR1ML1dXiomvCuC5pmfR44vFaF1jmxBj3jsagUPjY8k0aJ5tGhEReiYL5mkCF2msPFxMrKcSawMkTnEv/tfE0UyzuSRfwubaXQqnaqHzrtU5CWz8oj/aSSHN+z60dR/YTJQZ9ikmKLN+GFxSYlep/j3C1V5U/JmYSOPTR71mxQt24aRUMZXciailzDKf5ZFnsd1ihB561RWrx5YE3mKvXEdqrT3xJ2PeOQpdsV1SGh/hWjwg6S98CsmMASkkcv2DAFNMFxKwfIeuurzTcCEXRUd+VnuiQXZLHSO21mN0YIBfqPrSiD7inMnYrqHmtVXy1CL4QDG2tF8FtgO8FPdB6APuIUEkP4sBJpCiggUESgiUEQgFAHb1XsXenGjCvdkNQN80OI99lOs3i9QZhdcGlYBV4C3QJKM4uRVoDE1GzodAoaANMKL4DlrMih3ANNAVrmOjslDAoUzAHcA5pVrsZ7B8l5gKi9DoP95IxkUugNKLqrcENigydSdKhq4d+uUbnRUtsBOp7alb4l5hyMhfhaq7IBHg2DZIcEEmzsxqQd5N1qHA96vScluGmboGMvkvKdmdlFbSUlEjyRF2SdR6I27AKOyzw1I3OlkfMB1RPqJdugR5VGlcP47BYvPaFUTdTunqBjsRcTmd7shxZsALvOuJbotFQydjlnuG6MEEm5avuuIjM+0m4xEbMTJeqAnJ9kI+qvVIJbII+OjfweQdt83H5pvAOmeztGhEbgJzAHVhE/v+5M8qLrGwUATDOwLYA/qfG/K90V8QdWPFB5GmSj/AFf+LeTG2bgWAAAAAElFTkSuQmCC") no-repeat center center #f39c11;
      background-size: 6px 30px;
    }

    ._hj-1h3WZ__Notification__content {
      color: #dedede;
      font-size: 13px;
    }

    ._hj-2KcMV__Notification__title {
      color: white;
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 4px;
    }

    ._hj-3-rwN__Notification__close {
      position: absolute;
      top: 15px;
      right: 15px;
      font-size: 22px;
      color: white;
      cursor: pointer;
      line-height: 11px;
    }
  </style>
  <script src="https://script.hotjar.com/survey-v2.03895114a5d6031b6cac.js"></script>
  <style>
    ._hj-mMo1P__styles__resetStyles * {
      line-height: normal;
      font-family: Arial, sans-serif, Tahoma !important;
      text-transform: initial !important;
      letter-spacing: normal !important;
    }

    ._hj-mMo1P__styles__resetStyles *::before,
    ._hj-mMo1P__styles__resetStyles *::after {
      box-sizing: initial;
    }

    ._hj-mMo1P__styles__resetStyles div {
      height: auto;
    }

    ._hj-mMo1P__styles__resetStyles div,
    ._hj-mMo1P__styles__resetStyles span,
    ._hj-mMo1P__styles__resetStyles p,
    ._hj-mMo1P__styles__resetStyles a,
    ._hj-mMo1P__styles__resetStyles button {
      font-weight: normal !important;
    }

    ._hj-mMo1P__styles__resetStyles div,
    ._hj-mMo1P__styles__resetStyles span,
    ._hj-mMo1P__styles__resetStyles p,
    ._hj-mMo1P__styles__resetStyles a,
    ._hj-mMo1P__styles__resetStyles img,
    ._hj-mMo1P__styles__resetStyles strong,
    ._hj-mMo1P__styles__resetStyles form,
    ._hj-mMo1P__styles__resetStyles label {
      border: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
      margin: 0;
      padding: 0;
      float: none !important;
    }

    ._hj-mMo1P__styles__resetStyles span {
      color: inherit;
    }

    ._hj-mMo1P__styles__resetStyles ol,
    ._hj-mMo1P__styles__resetStyles ul,
    ._hj-mMo1P__styles__resetStyles li {
      list-style: none !important;
      margin: 0 !important;
      padding: 0 !important;
    }

    ._hj-mMo1P__styles__resetStyles li:before,
    ._hj-mMo1P__styles__resetStyles li:after {
      content: none !important;
    }

    ._hj-mMo1P__styles__resetStyles hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #ccc;
      margin: 1em 0;
      padding: 0;
    }

    ._hj-mMo1P__styles__resetStyles input[type='submit'],
    ._hj-mMo1P__styles__resetStyles input[type='button'],
    ._hj-mMo1P__styles__resetStyles button {
      margin: 0;
      padding: 0;
      float: none !important;
    }

    ._hj-mMo1P__styles__resetStyles input,
    ._hj-mMo1P__styles__resetStyles select,
    ._hj-mMo1P__styles__resetStyles a img {
      vertical-align: middle;
    }

    ._hj-10MNR__styles__globalStyles *,
    ._hj-10MNR__styles__globalStyles *::before,
    ._hj-10MNR__styles__globalStyles *::after {
      box-sizing: border-box;
    }

    @font-face {
      font-family: 'hotjar';
      src: url(https://script.hotjar.com/font-hotjar_5.fdcf0e.eot);
      src: url(https://script.hotjar.com/font-hotjar_5.fdcf0e.eot#iefix) format("embedded-opentype"), url(https://script.hotjar.com/font-hotjar_5.c9fb91.woff2) format("woff2"), url(https://script.hotjar.com/font-hotjar_5.8598c5.ttf) format("truetype"), url(https://script.hotjar.com/font-hotjar_5.6da396.woff) format("woff"), url(https://script.hotjar.com/font-hotjar_5.a6049d.svg#hotjar) format("svg");
      font-weight: normal;
      font-style: normal;
    }

    @keyframes _hj-CvZ6d__styles__spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes _hj-19ojv__styles__colors {
      0% {
        border-color: #f4364c;
        border-top-color: transparent;
      }

      25% {
        border-color: #00a2f2;
        border-top-color: transparent;
      }

      50% {
        border-color: #efb60c;
        border-top-color: transparent;
      }

      75% {
        border-color: #42ca49;
        border-top-color: transparent;
      }

      100% {
        border-color: #f4364c;
        border-top-color: transparent;
      }
    }

    ._hj-10MNR__styles__globalStyles p {
      color: inherit !important;
    }

    ._hj-10MNR__styles__globalStyles a,
    ._hj-10MNR__styles__globalStyles a:link,
    ._hj-10MNR__styles__globalStyles a:hover,
    ._hj-10MNR__styles__globalStyles a:active {
      color: inherit !important;
      text-decoration: underline;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon {
      speak: none !important;
      font-style: normal !important;
      font-weight: normal !important;
      font-variant: normal !important;
      text-transform: none !important;
      overflow-wrap: normal !important;
      word-break: normal !important;
      word-wrap: normal !important;
      white-space: nowrap !important;
      line-height: normal !important;
      -webkit-font-smoothing: antialiased !important;
      -moz-osx-font-smoothing: grayscale !important;
      vertical-align: middle !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon:before,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon:after,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon *,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon *:before,
    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon *:after {
      font-family: 'hotjar' !important;
      display: inline-block !important;
      direction: ltr !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1EbBs__styles__icon:before {
      color: inherit !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-WPdPO__styles__iconX:before {
      content: '\E803';
    }

    ._hj-10MNR__styles__globalStyles ._hj-2WW4P__styles__iconOk:before {
      content: '\E804';
    }

    ._hj-10MNR__styles__globalStyles ._hj-34EZP__styles__iconError:before {
      content: '\E90C';
    }

    ._hj-10MNR__styles__globalStyles ._hj-lAAAw__styles__iconLogo:before {
      content: '\E806';
    }

    ._hj-10MNR__styles__globalStyles ._hj-FxxIA__styles__surveyIcons {
      background-repeat: no-repeat;
      width: 16px;
      height: 16px;
      display: inline-block !important;
      zoom: 1;
      vertical-align: middle;
    }

    ._hj-widget-theme-light ._hj-10MNR__styles__globalStyles ._hj-FxxIA__styles__surveyIcons {
      background-image: url(https://script.hotjar.com/widget_icons_light.ddcd59.png);
    }

    ._hj-widget-theme-dark ._hj-10MNR__styles__globalStyles ._hj-FxxIA__styles__surveyIcons {
      background-image: url(https://script.hotjar.com/widget_icons_dark.3a8118.png);
    }

    ._hj-10MNR__styles__globalStyles ._hj-1oY0c__styles__inputField {
      font-family: Arial, sans-serif, Tahoma;
      font-size: 14px;
      color: #333 !important;
      padding: 6px !important;
      text-indent: 0 !important;
      height: 30px;
      width: 100%;
      min-width: 100%;
      background: white;
      border: 1px solid !important;
      outline: none !important;
      max-width: none !important;
      float: none;
      border-radius: 3px;
    }

    ._hj-10MNR__styles__globalStyles ._hj-2xXAa__styles__textarea {
      resize: none;
      height: 100px;
    }

    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton {
      cursor: pointer;
      text-decoration: none;
      text-transform: capitalize;
      font-size: 13px;
      font-weight: bold;
      padding: 7px 10px;
      border: 0;
      outline: 0;
      display: inline-block;
      vertical-align: top;
      width: auto;
      zoom: 1;
      transition: all 0.2s ease-in-out;
      box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
      border-radius: 3px;
      color: white;
    }

    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton:active,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:active {
      background: #00a251;
    }

    ._hj-10MNR__styles__globalStyles ._hj-12tLZ__styles__basicButton[disabled],
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton[disabled] {
      cursor: default;
    }

    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton {
      font-size: 13px !important;
      font-weight: bold !important;
      padding: 7px 10px !important;
      border: 0 !important;
      outline: 0 !important;
      min-height: initial !important;
      width: auto !important;
      min-width: initial !important;
      background: #00c764 !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-21tno__styles__primaryButton:active {
      background: #00a251 !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton {
      cursor: pointer;
      text-decoration: underline;
      font-size: 13px !important;
      padding: 7px 10px !important;
      border: 0 !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton,
    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton:hover,
    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton:focus,
    ._hj-10MNR__styles__globalStyles ._hj-2VnCa__styles__clearButton:active {
      background: transparent !important;
    }

    ._hj-10MNR__styles__globalStyles ._hj-29HmU__styles__answersContentWrapper {
      padding: 0 12px 12px 12px;
    }

    ._hj-10MNR__styles__globalStyles ._hj-1KgX2__styles__spinner {
      border: 1px solid rgba(0, 0, 0, 0.6);
      border-top-color: transparent !important;
      border-radius: 50%;
      transform: rotate(0deg);
      animation: _hj-CvZ6d__styles__spin 0.4s linear infinite, _hj-19ojv__styles__colors 5.6s ease-in-out infinite;
    }

    ._hj-2xXAa__styles__textarea {}

    ._hj-WPdPO__styles__iconX,
    ._hj-2WW4P__styles__iconOk,
    ._hj-34EZP__styles__iconError,
    ._hj-lAAAw__styles__iconLogo {}

    ._hj-3v_Mp__styles__rtl,
    ._hj-3v_Mp__styles__rtl * {
      direction: rtl !important;
    }
  </style>
  <style>
    ._hj-widget-container ._hj-Ctqsu__styles__closeEndedOption {
      position: relative;
      min-height: 45px;
      text-align: left !important;
      height: auto !important;
      border-bottom: 1px solid !important;
      border-top: 1px solid !important;
      cursor: pointer !important;
      display: block;
    }

    ._hj-widget-container ._hj-Ctqsu__styles__closeEndedOption:last-child {
      border-bottom: 0 !important;
    }

    ._hj-widget-container ._hj-Ctqsu__styles__closeEndedOption._hj-1GXnn__styles__selected {
      color: white !important;
    }

    ._hj-widget-container ._hj-Ctqsu__styles__closeEndedOption._hj-1GXnn__styles__selected ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      border-color: white;
      background-position: -97px 4px;
    }

    ._hj-widget-container ._hj-TM8NB__styles__closeEndedOptionInput {
      position: absolute;
      opacity: 0;
    }

    ._hj-widget-container ._hj-TM8NB__styles__closeEndedOptionInput:focus+._hj-Lx6qQ__styles__closeEndedOptionIcon {
      border-color: #ccc;
      background-color: rgba(255, 255, 255, 0.2);
    }

    ._hj-widget-container ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      border: 2px solid #aaa;
      width: 22px;
      height: 22px;
      display: block;
      position: absolute;
      left: 12px;
      top: 50%;
      margin-top: -14px;
      background-position: -64px -100px;
      box-sizing: content-box;
    }

    ._hj-widget-container ._hj-Lx6qQ__styles__closeEndedOptionIcon._hj-22c6F__styles__radio {
      border-radius: 30px;
    }

    ._hj-widget-container ._hj-Lx6qQ__styles__closeEndedOptionIcon._hj-xYL-P__styles__checkbox {
      border-radius: 4px;
    }

    ._hj-widget-container ._hj-2xRT0__styles__iconShape {
      width: 16px;
      height: 16px;
      margin: 3px;
      fill: white;
    }

    ._hj-widget-container ._hj-JWpOV__styles__closeEndedOptionText {
      text-align: left !important;
      padding: 14px 20px 14px 50px;
      position: relative;
      display: block;
      word-break: break-word;
      word-wrap: break-word;
      color: inherit !important;
    }

    ._hj-widget-container ._hj-Ctqsu__styles__closeEndedOption._hj-1UJ_v__styles__withComment ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      top: 14px !important;
      margin-top: 0 !important;
    }

    ._hj-widget-container ._hj-Ctqsu__styles__closeEndedOption._hj-1UJ_v__styles__withComment ._hj-JWpOV__styles__closeEndedOptionText {
      padding-bottom: 10px !important;
    }

    ._hj-widget-container ._hj-ZO0bi__styles__closeEndedOptionCommentBox {
      margin: 0 20px 0 50px;
    }

    ._hj-widget-container ._hj-1AC4Y__styles__closeEndedOptionTextarea {
      font-size: 13px !important;
      height: 50px !important;
      max-height: 50px !important;
      min-height: auto !important;
      margin-bottom: 8px !important;
      border: 0 !important;
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-Ctqsu__styles__closeEndedOption {
      border-bottom: 0 none !important;
      border-top: 0 none !important;
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-Ctqsu__styles__closeEndedOption:hover ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      border-color: #666666;
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-Ctqsu__styles__closeEndedOption._hj-1GXnn__styles__selected {
      color: inherit !important;
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-Ctqsu__styles__closeEndedOption._hj-1GXnn__styles__selected ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      border-color: #00c764;
      background: #00c764 !important;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-Ctqsu__styles__closeEndedOption:last-child {
        margin-bottom: 32px;
      }
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-Ctqsu__styles__closeEndedOption._hj-1UJ_v__styles__withComment ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      margin-top: -3px !important;
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      margin-top: -12 px;
      border-color: #999999;
      border-width: 1px;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3WSfd__styles__embedded ._hj-Lx6qQ__styles__closeEndedOptionIcon {
        left: 42px;
      }
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded ._hj-TM8NB__styles__closeEndedOptionInput:focus+._hj-Lx6qQ__styles__closeEndedOptionIcon {
      border-color: #00c764;
      background-color: rgba(255, 255, 255, 0.2);
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded ._hj-JWpOV__styles__closeEndedOptionText {
      font-size: 14px;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3WSfd__styles__embedded ._hj-JWpOV__styles__closeEndedOptionText {
        padding: 14px 42px 14px 80px;
        font-size: 16px;
      }
    }

    ._hj-widget-container ._hj-3WSfd__styles__embedded ._hj-ZO0bi__styles__closeEndedOptionCommentBox {
      border: 1px solid rgba(151, 151, 151, 0.4);
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3WSfd__styles__embedded ._hj-ZO0bi__styles__closeEndedOptionCommentBox {
        margin: 0 42px 0 80px;
      }
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-2mp-V__styles__closeEndedOptionRtl ._hj-JWpOV__styles__closeEndedOptionText {
        padding: 14px 80px 14px 42px;
      }

      ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-2mp-V__styles__closeEndedOptionRtl ._hj-Lx6qQ__styles__closeEndedOptionIcon {
        right: 42px;
      }

      ._hj-widget-container ._hj-3WSfd__styles__embedded._hj-2mp-V__styles__closeEndedOptionRtl ._hj-ZO0bi__styles__closeEndedOptionCommentBox {
        margin: 0 80px 0 42px !important;
      }
    }

    ._hj-Lx6qQ__styles__closeEndedOptionIcon {}

    ._hj-1AC4Y__styles__closeEndedOptionTextarea {}

    ._hj-2mp-V__styles__closeEndedOptionRtl {
      text-align: right !important;
    }

    ._hj-2mp-V__styles__closeEndedOptionRtl ._hj-JWpOV__styles__closeEndedOptionText {
      text-align: right !important;
      padding: 14px 50px 14px 20px;
    }

    ._hj-2mp-V__styles__closeEndedOptionRtl ._hj-Lx6qQ__styles__closeEndedOptionIcon {
      left: auto;
      right: 12px;
    }

    ._hj-2mp-V__styles__closeEndedOptionRtl ._hj-ZO0bi__styles__closeEndedOptionCommentBox {
      margin: 0 50px 0 20px !important;
    }
  </style>
  <style>
    ._hj-widget-container ._hj-2tTA6__styles__shortContentWrapper {
      max-height: 120px;
      overflow-y: auto;
      overflow-x: hidden;
    }
  </style>
  <style>
    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-2SI5G__styles__embedded {
        padding: 0 42px 32px;
      }
    }
  </style>
  <style>
    ._hj-widget-container ._hj-3sBzS__styles__scaleAnswerWrapper,
    ._hj-widget-container ._hj-3LKa5__styles__scaleAnswerWrapperRtl {
      margin: 0 auto;
      max-width: 300px;
    }

    ._hj-widget-container ._hj-kY5Os__styles__scaleOptionsList {
      margin: 4px 0 0 0 !important;
      height: 28px;
    }

    ._hj-widget-container ._hj-kY5Os__styles__scaleOptionsList._hj-3Akky__styles__ratingScale5 {
      height: 38px;
    }

    ._hj-widget-container ._hj-kY5Os__styles__scaleOptionsList._hj-13YX4__styles__ratingScale7 {
      height: 36px;
    }

    ._hj-widget-container ._hj-gdJY7__styles__scaleOption {
      list-style-type: none !important;
      list-style-image: none !important;
      float: left !important;
      width: 22px !important;
      padding: 4px 0 5px 0 !important;
      margin: 0 3px 0 0 !important;
      border-radius: 2px;
      text-align: center !important;
      opacity: 0.75 !important;
      clear: none !important;
      cursor: pointer;
      text-indent: 0;
      font-size: inherit;
      border-left: none;
      border-right: none;
    }

    ._hj-widget-container ._hj-gdJY7__styles__scaleOption:last-child {
      margin: 0 !important;
    }

    ._hj-widget-container ._hj-gdJY7__styles__scaleOption:hover {
      opacity: 1 !important;
    }

    ._hj-widget-container ._hj-gdJY7__styles__scaleOption._hj-jKb_1__styles__selected {
      cursor: default;
      opacity: 1 !important;
    }

    ._hj-widget-container ._hj-kY5Os__styles__scaleOptionsList._hj-3Akky__styles__ratingScale5 ._hj-gdJY7__styles__scaleOption {
      width: 48px !important;
      font-size: 15px !important;
      padding: 8px 0 9px 0 !important;
      margin: 0 9px 0 0 !important;
    }

    ._hj-widget-container ._hj-kY5Os__styles__scaleOptionsList._hj-3Akky__styles__ratingScale5 ._hj-gdJY7__styles__scaleOption:last-child {
      margin: 0 !important;
    }

    ._hj-widget-container ._hj-kY5Os__styles__scaleOptionsList._hj-13YX4__styles__ratingScale7 ._hj-gdJY7__styles__scaleOption {
      width: 35px !important;
      font-size: 15px !important;
      padding: 6px 0 7px 0 !important;
      margin: 0 5px 0 0 !important;
    }

    ._hj-widget-container ._hj-kY5Os__styles__scaleOptionsList._hj-13YX4__styles__ratingScale7 ._hj-gdJY7__styles__scaleOption:last-child {
      margin: 0 !important;
    }

    ._hj-widget-container ._hj-3tf90__styles__scaleLabels {
      padding-top: 5px;
      font-size: 12px;
    }

    ._hj-widget-container ._hj-3tf90__styles__scaleLabels::after {
      content: '';
      clear: both !important;
      display: block !important;
    }

    ._hj-widget-container ._hj-3tf90__styles__scaleLabels ._hj-2qaz5__styles__scaleLabel {
      max-width: 45%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    ._hj-widget-container ._hj-3tf90__styles__scaleLabels ._hj-2qaz5__styles__scaleLabel:first-child {
      float: left !important;
    }

    ._hj-widget-container ._hj-3tf90__styles__scaleLabels ._hj-2qaz5__styles__scaleLabel:last-child {
      float: right !important;
    }

    ._hj-widget-container ._hj-3rxJX__styles__embedded._hj-3sBzS__styles__scaleAnswerWrapper,
    ._hj-widget-container ._hj-3rxJX__styles__embedded._hj-3LKa5__styles__scaleAnswerWrapperRtl {
      padding-bottom: 28px;
      max-width: none;
    }

    @media screen and (min-width: 440px) {

      ._hj-widget-container ._hj-3rxJX__styles__embedded._hj-3sBzS__styles__scaleAnswerWrapper,
      ._hj-widget-container ._hj-3rxJX__styles__embedded._hj-3LKa5__styles__scaleAnswerWrapperRtl {
        padding: 0 42px 32px;
      }
    }

    ._hj-widget-container ._hj-3rxJX__styles__embedded ._hj-3tf90__styles__scaleLabels {
      clear: both;
    }

    ._hj-widget-container ._hj-3rxJX__styles__embedded ._hj-kY5Os__styles__scaleOptionsList {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      height: 53px;
    }

    ._hj-widget-container ._hj-3rxJX__styles__embedded ._hj-kY5Os__styles__scaleOptionsList ._hj-gdJY7__styles__scaleOption {
      width: auto !important;
      height: 53px;
      margin: 0 2px 0 0 !important;
      flex: 1;
      border-top-width: 1px;
      border-bottom-width: 1px;
    }

    ._hj-widget-container ._hj-3rxJX__styles__embedded ._hj-kY5Os__styles__scaleOptionsList ._hj-gdJY7__styles__scaleOption:last-child {
      margin: 0 !important;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3rxJX__styles__embedded ._hj-kY5Os__styles__scaleOptionsList ._hj-gdJY7__styles__scaleOption {
        margin: 0 5px 0 0 !important;
      }
    }

    ._hj-3sBzS__styles__scaleAnswerWrapper {}

    ._hj-3LKa5__styles__scaleAnswerWrapperRtl {}

    ._hj-3LKa5__styles__scaleAnswerWrapperRtl ._hj-kY5Os__styles__scaleOptionsList ._hj-gdJY7__styles__scaleOption,
    ._hj-3LKa5__styles__scaleAnswerWrapperRtl ._hj-kY5Os__styles__scaleOptionsList._hj-13YX4__styles__ratingScale7 ._hj-gdJY7__styles__scaleOption,
    ._hj-3LKa5__styles__scaleAnswerWrapperRtl ._hj-kY5Os__styles__scaleOptionsList._hj-3Akky__styles__ratingScale5 ._hj-gdJY7__styles__scaleOption {
      float: right !important;
      margin: 0 0 0 3px !important;
      border-radius: 2px;
      text-align: center !important;
      opacity: 0.75 !important;
      cursor: pointer;
    }

    ._hj-3LKa5__styles__scaleAnswerWrapperRtl ._hj-3tf90__styles__scaleLabels ._hj-2qaz5__styles__scaleLabel:first-child {
      float: right !important;
    }

    ._hj-3LKa5__styles__scaleAnswerWrapperRtl ._hj-3tf90__styles__scaleLabels ._hj-2qaz5__styles__scaleLabel:last-child {
      float: left !important;
    }
  </style>
  <style>
    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer,
    ._hj-widget-container ._hj-2qaGY__styles__openStateToggle {
      box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3) !important;
      /* theme based*/
      z-index: 2147483640;
      border-radius: 5px 5px 0 0;
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer {
      position: fixed;
      bottom: 0;
      width: 300px;
      font-size: 13px !important;
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-ygwVr__styles__positionRight {
      right: 100px;
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-3POOT__styles__positionLeft {
      left: 100px;
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-moqIm__styles__positionCenter {
      right: auto;
      left: 50%;
      transform: translateX(-50%);
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-2SATB__styles__minimized {
      transform: translateY(97%);
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-2SATB__styles__minimized ._hj-1ZR3F__styles__openStateToggleIcon {
      background-position: 0 0;
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-2SATB__styles__minimized._hj-moqIm__styles__positionCenter {
      transform: translate(-50%, 97%);
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-1BXlz__styles__closed {
      display: none;
    }

    ._hj-widget-container ._hj-2gFBC__styles__surveyContainer._hj-1pV3u__styles__openingAnimation {
      animation: _hj-2gxQ2__styles__slide-to-top 300ms linear;
    }

    @media print {
      ._hj-widget-container ._hj-2gFBC__styles__surveyContainer {
        display: none;
      }
    }

    @-webkit-keyframes _hj-2gxQ2__styles__slide-to-top {
      0% {
        bottom: -100%;
      }

      100% {
        bottom: 0;
      }
    }

    ._hj-widget-container ._hj-2qaGY__styles__openStateToggle {
      text-align: center;
      position: absolute;
      top: -18px;
      right: 20px;
      width: 40px;
      height: 18px;
      padding-top: 2px;
      cursor: pointer;
      border: none;
    }

    ._hj-widget-container ._hj-2qaGY__styles__openStateToggle::before {
      content: '';
      position: absolute;
      left: -4px;
      right: -4px;
      bottom: -8px;
      height: 8px;
      background: inherit;
    }

    ._hj-widget-container ._hj-1ZR3F__styles__openStateToggleIcon {
      background-position: -32px 0;
    }

    ._hj-widget-container ._hj-2497K__styles__collapsedReplyButton {
      margin: 0 auto 12px auto;
      display: block;
    }

    ._hj-widget-container ._hj-XnEwP__styles__surveyTitle,
    ._hj-widget-container ._hj-XnEwP__styles__surveyTitle>span {
      font-weight: bold !important;
      text-align: center;
      padding: 12px;
      margin: 0;
      line-height: 17px !important;
      min-height: 17px;
      word-break: break-word;
      word-wrap: break-word;
      cursor: pointer;
    }

    ._hj-widget-container ._hj-XnEwP__styles__surveyTitle._hj-1VIWK__styles__noBottomPadding,
    ._hj-widget-container ._hj-XnEwP__styles__surveyTitle>span._hj-1VIWK__styles__noBottomPadding {
      padding-bottom: 0;
    }

    ._hj-widget-container._hj-widget-theme-light ._hj-XnEwP__styles__surveyTitle,
    ._hj-widget-container._hj-widget-theme-light ._hj-XnEwP__styles__surveyTitle>span {
      color: #111 !important;
    }

    ._hj-widget-container._hj-widget-theme-dark ._hj-XnEwP__styles__surveyTitle,
    ._hj-widget-container._hj-widget-theme-dark ._hj-XnEwP__styles__surveyTitle>span {
      color: #fff !important;
    }

    ._hj-widget-container ._hj-2VFEu__styles__stepDescription {
      padding: 0px 12px 12px;
      text-align: center;
      word-break: break-word;
      word-wrap: break-word;
    }

    ._hj-widget-container ._hj-3xuJg__styles__embedded._hj-2gFBC__styles__surveyContainer {
      position: static;
      right: auto;
      bottom: auto;
      left: auto;
      margin: 0 auto;
      min-width: 300px;
      width: 100%;
      transform: none;
      border-radius: 5px;
      font-size: 17px !important;
    }

    ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-3hGD3__styles__surveyBody {
      min-height: 160px;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-3hGD3__styles__surveyBody {
        min-height: 234px;
      }
    }

    ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-XnEwP__styles__surveyTitle,
    ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-XnEwP__styles__surveyTitle>span {
      text-align: left;
      font-size: 16px;
      font-weight: 400 !important;
      line-height: 1.2 !important;
    }

    @media screen and (min-width: 440px) {

      ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-XnEwP__styles__surveyTitle,
      ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-XnEwP__styles__surveyTitle>span {
        padding: 34px 42px 32px;
        font-size: 26px;
      }
    }

    ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-2VFEu__styles__stepDescription {
      text-align: left;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-3xuJg__styles__embedded ._hj-2VFEu__styles__stepDescription {
        padding: 0px 42px 32px;
      }
    }

    ._hj-1ZR3F__styles__openStateToggleIcon {}

    ._hj-2EHD-__styles__surveysPrimaryButton {
      height: initial !important;
    }

    ._hj-2EHD-__styles__surveysPrimaryButton[disabled] {
      background: #e6e6e6 !important;
      box-shadow: none;
      cursor: default;
    }

    ._hj-2497K__styles__collapsedReplyButton {}
  </style>
  <style>
    ._hj-widget-container ._hj-1Wqov__styles__finalStep {
      text-align: center;
      padding: 20px;
      margin: 0;
    }

    ._hj-widget-container ._hj-3KrrI__styles__thankYouMessage {
      display: block;
    }

    ._hj-widget-container ._hj-3KrrI__styles__thankYouMessage._hj-2gxUw__styles__withConsent {
      font-weight: bold !important;
      font-size: 14px;
      margin-bottom: 16px;
    }

    ._hj-widget-container ._hj-1_D0q__styles__closeButton {
      margin-top: 12px;
      padding: 7px 20px !important;
    }

    ._hj-widget-container ._hj-2Pmn-__styles__consentMessage a {
      color: inherit !important;
    }

    ._hj-widget-container ._hj-tJCtA__styles__consentButton {
      font-size: 18px !important;
      margin: 20px 5px 0 5px;
      padding: 7px 10px !important;
      width: 50px !important;
    }

    ._hj-widget-container ._hj-3sKc3__styles__legalInfo {
      padding: 0 12px 12px 12px;
    }

    ._hj-widget-container ._hj-3sKc3__styles__legalInfo:after {
      content: '';
      clear: both !important;
      display: block !important;
    }

    ._hj-widget-container ._hj-2_C1f__styles__legalSite {
      font-size: 11px;
      text-decoration: none !important;
      float: right !important;
    }

    ._hj-widget-container ._hj-2_C1f__styles__legalSite:hover {
      text-decoration: underline !important;
    }

    ._hj-widget-container ._hj-3Z5dp__styles__legalName {
      font-size: 11px;
      float: left !important;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-2LGFp__styles__embedded {
        padding: 47px 79px;
      }
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-2LGFp__styles__embedded ._hj-1Wqov__styles__finalStep {
        padding: 0;
        font-size: 18px;
      }
    }

    ._hj-widget-container ._hj-2LGFp__styles__embedded ._hj-3sKc3__styles__legalInfo {
      text-align: center;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-2LGFp__styles__embedded ._hj-3sKc3__styles__legalInfo {
        padding: 0;
      }
    }

    ._hj-widget-container ._hj-2LGFp__styles__embedded ._hj-3Z5dp__styles__legalName,
    ._hj-widget-container ._hj-2LGFp__styles__embedded ._hj-2_C1f__styles__legalSite {
      float: none !important;
      font-size: 14px;
      line-height: 2;
    }

    ._hj-widget-container ._hj-2LGFp__styles__embedded ._hj-3Z5dp__styles__legalName {
      display: block;
      font-weight: bold !important;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-2LGFp__styles__embedded ._hj-3Z5dp__styles__legalName {
        margin-top: 24px;
      }
    }

    ._hj-1_D0q__styles__closeButton,
    ._hj-tJCtA__styles__consentButton {
      height: initial !important;
    }
  </style>
  <style>
    ._hj-widget-container ._hj-21lNd__styles__surveyHotjarUpsell {
      margin-top: 20px;
      padding: 12px;
      background: rgba(93, 255, 211, 0.2);
      font-size: 14px;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-21lNd__styles__surveyHotjarUpsell {
        margin-top: 24px;
        padding: 24px;
      }
    }

    ._hj-widget-container ._hj-fWDLn__styles__surveySignupButton {
      margin-top: 12px;
      text-decoration: none !important;
      background: #3c3c3c !important;
    }

    ._hj-widget-container ._hj-fWDLn__styles__surveySignupButton:hover,
    ._hj-widget-container ._hj-fWDLn__styles__surveySignupButton:focus,
    ._hj-widget-container ._hj-fWDLn__styles__surveySignupButton:active {
      background: black !important;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-fWDLn__styles__surveySignupButton {
        margin-top: 16px;
      }
    }

    ._hj-widget-container ._hj-9Lj_P__styles__hotjarlogoContainer {
      margin-top: 12px;
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-9Lj_P__styles__hotjarlogoContainer {
        margin-top: 16px;
      }
    }

    ._hj-fWDLn__styles__surveySignupButton {}
  </style>
  <style>
    ._hj-widget-container ._hj-QNHBM__styles__link {
      font-size: 11px;
      line-height: 16px;
      direction: ltr !important;
    }

    ._hj-widget-container ._hj-31RM1__styles__logo {
      width: 50px;
      height: 30px;
    }
  </style>
  <style>
    ._hj-widget-container ._hj-2biI-__styles__surveyFooter {
      width: 100%;
      border-top: 1px solid;
    }

    ._hj-widget-container ._hj-2biI-__styles__surveyFooter:after {
      content: '';
      clear: both !important;
      display: block !important;
    }

    ._hj-widget-container ._hj-3IN1-__styles__surveyBranding {
      padding: 12px 0 0 12px;
      float: left !important;
    }

    ._hj-widget-container ._hj-1VIRR__styles__surveyActions {
      float: right !important;
    }

    ._hj-widget-container ._hj-39yFl__styles__surveySkipButton {
      margin: 12px 12px 12px 0;
    }

    ._hj-widget-container ._hj-rnxC1__styles__surveyActionButton {
      margin: 12px 12px 12px 0;
    }

    ._hj-widget-container ._hj-rnxC1__styles__surveyActionButton[disabled] span {
      background-position: -48px 0;
    }

    ._hj-widget-container ._hj-e_zIv__styles__surveyActionButtonIcon {
      background-position: -64px 0;
      margin-left: 8px;
    }

    ._hj-widget-container ._hj-e_zIv__styles__surveyActionButtonIcon._hj-3Apb___styles__finalStep {
      background-position: -80px 0;
    }

    ._hj-widget-container ._hj-1XJ9A__styles__embedded ._hj-2biI-__styles__surveyFooter {
      background-color: rgba(203, 203, 203, 0.19);
    }

    @media screen and (min-width: 440px) {
      ._hj-widget-container ._hj-1XJ9A__styles__embedded ._hj-3IN1-__styles__surveyBranding {
        padding: 15px 0 0 36px;
      }

      ._hj-widget-container ._hj-1XJ9A__styles__embedded ._hj-39yFl__styles__surveySkipButton {
        margin-top: 15px;
      }

      ._hj-widget-container ._hj-1XJ9A__styles__embedded ._hj-rnxC1__styles__surveyActionButton {
        margin: 15px 42px 12px 0;
      }

      ._hj-widget-container ._hj-1XJ9A__styles__embedded ._hj-2Zf33__styles__surveyActionButtonRtl {
        margin-right: 12px;
      }

      ._hj-widget-container ._hj-1XJ9A__styles__embedded ._hj-1bc6-__styles__surveySkipButtonRtl {
        margin-right: 32px;
      }
    }

    ._hj-e_zIv__styles__surveyActionButtonIcon {}

    ._hj-rnxC1__styles__surveyActionButton {}

    ._hj-2Zf33__styles__surveyActionButtonRtl {
      padding-right: 10px;
    }

    ._hj-2Zf33__styles__surveyActionButtonRtl ._hj-e_zIv__styles__surveyActionButtonIcon {
      margin-left: 0;
    }

    ._hj-39yFl__styles__surveySkipButton {}

    ._hj-1bc6-__styles__surveySkipButtonRtl {
      padding-right: 10px;
    }
  </style>


<body class="" data-n-head="%7B%22class%22:%7B%22ssr%22:%22%22%7D%7D">
  <noscript data-n-head="ssr" data-hid="gtm-noscript" data-pbody="true">
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBRZ8Q8&" height="0" width="0" style="display:none;visibility:hidden" title="gtm"></iframe>
  </noscript>
  <div id="__nuxt">
    <!---->
    <div id="__layout">
      <div class="page page__home" data-v-ac7fe1d6="">
        <div class="header header--unpinned" data-v-5b7179a2="" data-v-ac7fe1d6="">
         {{-- <div class="header__primary" data-v-88c7c2ee="" data-v-5b7179a2="">
            <div class="header__primary-container" data-v-88c7c2ee="">
              <div class="header__logo" data-v-88c7c2ee=""><a href="/fr/" aria-current="page" aria-label="Page d'accueil" class="nuxt-link-exact-active nuxt-link-active" data-v-88c7c2ee="">
                  <picture class="image image--transparent" data-v-958d1b38="" data-v-88c7c2ee=""><img src="https://www.hotmart.com/images/hotmart-logo.svg" data-src="/images/hotmart-logo.svg" alt="Hotmart" class=" lazyloaded" data-v-958d1b38="">
                  </picture>
                </a>
              </div>
              <div class="header__navigation" data-v-88c7c2ee="">
                <nav data-v-88c7c2ee="">
                  <ul data-v-88c7c2ee="">
                    <li data-v-88c7c2ee=""><a href="/fr/producers" class="link link--primary" data-v-6535949a="" data-v-88c7c2ee="">
                        <!----><span data-v-6535949a="">
                          Producteurs
                        </span>
                        <!----></a></li>
                    <li data-v-88c7c2ee=""><a href="/fr/affiliates" class="link link--primary" data-v-6535949a="" data-v-88c7c2ee="">
                        <!----><span data-v-6535949a="">
                          Affiliés
                        </span>
                        <!----></a></li>
                    <li data-v-88c7c2ee=""><a href="/fr/solutions" class="link link--primary" data-v-6535949a="" data-v-88c7c2ee="">
                        <!----><span data-v-6535949a="">
                          Solutions
                        </span>
                        <!----></a></li>
                    <li data-v-88c7c2ee=""><a href="/fr/sparkle" class="link link--primary" data-v-6535949a="" data-v-88c7c2ee="">
                        <!----><span data-v-6535949a="">
                          Hotmart Sparkle
                        </span>
                        <!----></a></li>
                    <!---->
                    <!---->
                  </ul>
                </nav>
              </div>
              <!---->
              <div class="header__navigation-plattaform" data-v-88c7c2ee="">
                <nav data-v-88c7c2ee="">
                  <ul data-v-88c7c2ee="">
                    <li data-v-88c7c2ee=""><a href="https://app-vlc.hotmart.com/login" target="_blank" class="link link--primary" data-v-6535949a="" data-v-88c7c2ee="">
                        <!----><span data-v-6535949a="">
                          Enter
                        </span>
                        <!----></a></li>
                    <li data-v-88c7c2ee=""><a href="/corporate/#price_offer" target="_blank" class="button button--primary" data-v-ff41ee4e="" data-v-88c7c2ee="">
                        <!----><span data-v-ff41ee4e="">
                          S'inscrire
                        </span>
                        <!----></a></li>
                  </ul>
                </nav>
              </div>
              <div class="header__toggle-sidebar" data-v-88c7c2ee=""><a href="#" data-v-88c7c2ee=""><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                    class="svg-inline--fa fa-bars fa-w-14" data-v-88c7c2ee="">
                    <path fill="currentColor"
                      d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"
                      data-v-88c7c2ee="" class=""></path>
                  </svg></a></div>
            </div>
          </div>--}}
          <div class="header-primary-search" style="display:none;" data-v-42688290="" data-v-5b7179a2="">
            <div class="header-primary-search__container" data-v-42688290="">
              <div class="header-primary-search__marketplace" data-v-42688290="">
                <div class="header-primary-search__marketplace-title" data-v-42688290="">Que voulez-vous apprendre ?</div>
                <div class="header-primary-search__marketplace" data-v-42688290="">
                  <div id="header-primary-search__marketplace-search" class="header-primary-search__marketplace-search" data-v-42688290="">
                    <div class="hm-mktplace-search-bar">
                      <form method="get" action="https://www.hotmart.com/s">
                        <div class="hm-mktplace-search-input-autocomplete  "><input type="text" name="q" class="hm-mktplace-search-input" autocomplete="off" placeholder="Que voulez-vous apprendre ?"><button type="submit" class="searchSubmit"><svg
                              aria-hidden="true" data-prefix="far" data-icon="search" class="svg-inline--fa fa-search fa-w-16 fontawesome-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="currentColor"
                                d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z">
                              </path>
                            </svg></button></div>
                      </form>
                    </div>
                  </div>
                  <div class="header-primary-search__marketplace-search-submit" data-v-42688290="">Écrire et appuyer sur <span>enter</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="header__overlay" style="display:none;" data-v-5b7179a2=""></div>
        </div>
        <div class="sidebar" data-v-2c40c833="" data-v-ac7fe1d6="">
          <div class="sidebar__container" style="display: none;" data-v-2c40c833="">
            <div class="sidebar__area-1" data-v-2c40c833="">
              <div class="sidebar__title" data-v-2c40c833="">
                Menu
              </div>
              <div class="sidebar__toggle-sidebar" data-v-2c40c833=""><a href="#" data-v-2c40c833=""><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                    class="svg-inline--fa fa-times fa-w-10" data-v-2c40c833="">
                    <path fill="currentColor"
                      d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"
                      data-v-2c40c833="" class=""></path>
                  </svg></a></div>
            </div>
            <!---->
            <div class="sidebar__area-3" data-v-2c40c833="">
              <div class="sidebar__navigation" data-v-2c40c833="">
                <nav data-v-2c40c833="">
                  <ul data-v-2c40c833="">
                    <li data-v-2c40c833=""><a href="javascript:void(0)" class="link link--primary" data-v-6535949a="" data-v-2c40c833="">
                        <!----><span data-v-6535949a="">
                          Page d'accueil
                        </span>
                        <!----></a></li>
                    <li data-v-2c40c833=""><a href="javascript:void(0)" class="link link--primary" data-v-6535949a="" data-v-2c40c833="">
                        <!----><span data-v-6535949a="">
                          Producteurs
                        </span>
                        <!----></a></li>
                    <li data-v-2c40c833=""><a href="javascript:void(0)" class="link link--primary" data-v-6535949a="" data-v-2c40c833="">
                        <!----><span data-v-6535949a="">
                          Affiliés
                        </span>
                        <!----></a></li>
                    <li data-v-2c40c833=""><a href="javascript:void(0)" class="link link--primary" data-v-6535949a="" data-v-2c40c833="">
                        <!----><span data-v-6535949a="">
                          Solutions
                        </span>
                        <!----></a></li>
                    <li data-v-2c40c833=""><a href="javascript:void(0)" class="link link--primary" data-v-6535949a="" data-v-2c40c833="">
                        <!----><span data-v-6535949a="">
                          Hotmart Sparkle
                        </span>
                        <!----></a></li>
                    <!---->
                    <!---->
                  </ul>
                </nav>
                <nav data-v-2c40c833="">
                  <ul data-v-2c40c833="">
                    <li data-v-2c40c833=""><a href="https://app-vlc.hotmart.com/login" target="_blank" class="button button--primary" data-v-ff41ee4e="" data-v-2c40c833="">
                        <!----><span data-v-ff41ee4e="">
                          Enter
                        </span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                          class="button__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-ff41ee4e="">
                          <path fill="currentColor"
                            d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                            data-v-ff41ee4e="" class=""></path>
                        </svg></a></li>
                    <li data-v-2c40c833=""><a href="/corporate/#price_offer" target="_blank" class="button button--secondary" data-v-ff41ee4e="" data-v-2c40c833="">
                        <!----><span data-v-ff41ee4e="">
                          S'inscrire
                        </span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                          class="button__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-ff41ee4e="">
                          <path fill="currentColor"
                            d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                            data-v-ff41ee4e="" class=""></path>
                        </svg></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="sidebar__overlay" style="display: none;" data-v-2c40c833=""></div>
        </div>
        <div class="hero hero--placeholder-image" data-v-579e12f4="" data-v-ac7fe1d6="">
          <div class="hero__container" data-v-579e12f4="">
            <div class="hero__content" data-v-579e12f4="">
              <!---->
              <div class="hero__title" data-v-579e12f4="">
                <h2 class="title" data-v-16261ef6="" data-v-579e12f4="">Créez votre propre plateforme de formation.</h2>
              </div>
              <div class="hero__body" data-v-579e12f4="">En quelques minutes.</div>
              <div slot="buttons" class="hero__buttons" data-v-579e12f4=""><a href="/corporate/#price_offer" target="_blank" class="button button--primary" data-v-ff41ee4e="" data-v-579e12f4="">
                  <!----><span data-v-ff41ee4e="">Créer votre école gratuitement</span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                    class="button__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-ff41ee4e="">
                    <path fill="currentColor"
                      d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                      data-v-ff41ee4e="" class=""></path>
                  </svg></a></div>
              <div class="hero__links" data-v-579e12f4=""> </div>
            </div>
            <div class="hero__placeholder" data-v-579e12f4="">
              <picture class="image image--transparent aspect-ratio--1:1" data-v-958d1b38="" data-v-579e12f4=""><img src="https://www.hotmart.com/images/home-hero__image.png" data-src="https://www.hotmart.com/images/home-hero__image.png" class=" lazyloaded" data-v-958d1b38=""></picture>
            </div>
          </div>
        </div>
        <!---->
        <div class="about" data-v-ac7fe1d6="">
          <div id="about" class="video" data-v-48703ab6="" data-v-ac7fe1d6="">
            <div class="video__container" data-v-48703ab6="">
              <div class="video-inline" data-v-9a33e7bc="" data-v-48703ab6="">
                <!---->
                <div class="video-inline__title" data-v-9a33e7bc="">
                  <h3 class="title" data-v-16261ef6="" data-v-9a33e7bc="">
                    C'est quoi Oschool?
                  </h3>
                </div>
                <div class="video-inline__poster" data-v-9a33e7bc=""><!--span class="video-inline__button" data-v-9a33e7bc=""><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14" data-v-9a33e7bc="">
                      <path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" data-v-9a33e7bc="" class=""></path>
                    </svg></span-->
                  <div class="video-inline__image" data-v-9a33e7bc="" >
                    <picture class="image aspect-ratio--16:9 border-radius--rounded" data-v-958d1b38="" data-v-9a33e7bc="" >
                      <!--img src="https://www.hotmart.com/images/placeholders/home__about.jpg" data-src="/images/placeholders/home__about.jpg" class=" lazyloaded"
                        data-v-958d1b38=""-->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pIc2vQFDU3I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class=" lazyloaded"
                        data-v-958d1b38=""></iframe>

                      </picture>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-blocks" data-v-78f49ef0="" data-v-ac7fe1d6="">
          <div class="content-blocks__container" data-v-78f49ef0="">
            <!---->
            <!---->
            <div class="content-block content-block--links content-block--social-proof" data-v-2c530488="" data-v-78f49ef0="">
              <!--div class="content-block__tag" data-v-2c530488=""><span class="tag tag--text tag--dark" data-v-168455c2="" data-v-2c530488="">
                  Transmettez
                </span></div>
              <div class="content-block__title" data-v-2c530488=""><span class="title" data-v-16261ef6="" data-v-2c530488="">
                  Vos connaissances.
                </span></div-->
              <div class="content-block__body" data-v-2c530488="" data-v-78f49ef0="">Transformez vos connaissances en créant vos formations avec les outils de Oschool en quelques minutes. Intégrez à vos cours vos capsules vidéo, images, textes et fichiers PDF de façon flexible et intuitive et complétez la formation en incorporant des quiz puis vendez à des millions de personnes dans le monde entier.</div>
              <!--div class="content-block__links" data-v-2c530488="" data-v-78f49ef0="">
                <nav data-v-2c530488="" data-v-78f49ef0="">
                  <ul data-v-2c530488="" data-v-78f49ef0="">
                    <li data-v-2c530488="" data-v-78f49ef0=""><a href="/fr/producers" class="link link--secondary" data-v-6535949a="" data-v-78f49ef0="" data-v-2c530488="">
                        <><span data-v-6535949a="">
                          En savoir plus sur comment devenir producteur, productrice
                        </span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                          class="link__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-6535949a="">
                          <path fill="currentColor"
                            d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                            data-v-6535949a="" class=""></path>
                        </svg></a></li>
                  </ul>
                </nav>
              </div-->
              <!--div class="content-block__social-proof" data-v-2c530488="" data-v-78f49ef0="">
                <div class="card-social-proof card-social-proof--text" data-v-32d4fc32="" data-v-78f49ef0="" data-v-2c530488="">
                  <div class="card-social-proof__body" data-v-32d4fc32="">
                    <p data-v-32d4fc32="" data-v-78f49ef0="">"Avec Oschool, j'ai réalisé à quel point je pouvais aller loin dans mes affaires et combien de personnes je pouvais influencer."</p>
                  </div>
                  <div class="card-social-proof__person-wrapper" data-v-32d4fc32="">
                    <div class="card-social-proof__person-avatar" data-v-32d4fc32="">
                      <picture class="aspect-ratio--1:1 border-radius--rounded-circle image" data-v-958d1b38="" data-v-32d4fc32=""><img src="https://www.hotmart.com/images/social-proofs/ramiro-reyes.jpg" data-src="/images/social-proofs/ramiro-reyes.jpg" alt="Ramiro Reyes"
                          title="Ramiro Reyes" class=" lazyloaded" data-v-958d1b38=""></picture>
                    </div>
                    <div class="card-social-proof__person-name" data-v-32d4fc32="">
                      Ramiro Reyes
                    </div>
                    <div class="card-social-proof__person-company" data-v-32d4fc32="">
                      Ilya Digital
                    </div>
                  </div>
                </div>
              </div-->
              <div class="content-block__image" data-v-2c530488="" data-v-78f49ef0="">
                <picture class="aspect-ratio--1:1 border-radius--rounded image image--transparent" data-v-958d1b38="" data-v-78f49ef0="" data-v-2c530488=""><img src="https://oschoolelearning.com/images/courses/logos/1580161319.png"
                    data-src="/images/placeholders/home__producers.png" alt="créez" class=" lazyloaded" data-v-958d1b38=""></picture>
              </div>
            </div>
            <div class="content-block content-block--links content-block--social-proof" data-v-2c530488="" data-v-78f49ef0="">
              <!--div class="content-block__tag" data-v-2c530488=""><span class="tag tag--text tag--dark" data-v-168455c2="" data-v-2c530488="">
                  Vente
                </span></div>
              <div class="content-block__title" data-v-2c530488=""><span class="title" data-v-16261ef6="" data-v-2c530488="">
                  Choissisez votre mode de diffusion.
                </span></div-->
              <div class="content-block__body" data-v-2c530488="" data-v-78f49ef0="">Choisissez comment vous voulez diffuser vos formations. Oschool permet de diffuser votre contenu sur le web avec votre propre plateforme personnalisable, mais également de gérer les inscriptions et les paiements pour vos formations en salle ou en ligne. Choisissez le nombre de places disponibles, la période d’inscription et percevez les frais directement d’un seul endroit.</div>
              <!--div class="content-block__links" data-v-2c530488="" data-v-78f49ef0="">
                <nav data-v-2c530488="" data-v-78f49ef0="">
                  <ul data-v-2c530488="" data-v-78f49ef0="">
                    <li data-v-2c530488="" data-v-78f49ef0=""><a href="/fr/affiliates" class="link link--secondary" data-v-6535949a="" data-v-78f49ef0="" data-v-2c530488="">
                        <><span data-v-6535949a="">
                          Sachez comment devenir un affilié, une affiliée
                        </span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                          class="link__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-6535949a="">
                          <path fill="currentColor"
                            d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                            data-v-6535949a="" class=""></path>
                        </svg></a></li>
                  </ul>
                </nav>
              </div-->
              <!--div class="content-block__social-proof" data-v-2c530488="" data-v-78f49ef0="">
                <div class="card-social-proof card-social-proof--text" data-v-32d4fc32="" data-v-78f49ef0="" data-v-2c530488="">
                  <div class="card-social-proof__body" data-v-32d4fc32="">
                    <p data-v-32d4fc32="" data-v-78f49ef0="">"Le travail de tout le monde est plus facile grâce à Oschool."</p>
                  </div>
                  <div class="card-social-proof__person-wrapper" data-v-32d4fc32="">
                    <div class="card-social-proof__person-avatar" data-v-32d4fc32="">
                      <picture class="aspect-ratio--1:1 border-radius--rounded-circle image" data-v-958d1b38="" data-v-32d4fc32=""><img src="https://www.hotmart.com/images/social-proofs/victor-damasio.jpg" data-src="/images/social-proofs/victor-damasio.jpg"
                          alt="Victor Damásio" title="Victor Damásio" class=" lazyloaded" data-v-958d1b38=""></picture>
                    </div>
                    <div class="card-social-proof__person-name" data-v-32d4fc32="">
                      Victor Damásio
                    </div>
                    <>
                  </div>
                </div>
              </div-->
              <div class="content-block__image" data-v-2c530488="" data-v-78f49ef0="">
                <picture class="aspect-ratio--1:1 border-radius--rounded image image--transparent" data-v-958d1b38="" data-v-78f49ef0="" data-v-2c530488=""><img src="https://process.filestackapi.com/AtM7HNKzQZ6u2HxwJF1Jiz/compress/quality=value:90/0tTy4z3lTbCkw18ehjQ8"
                    data-src="/images/placeholders/home__affiliates.png" alt="Vente" class=" lazyloaded" data-v-958d1b38=""></picture>
              </div>
            </div>
          </div>
        </div>
        <div class="knowledge-hub" data-v-7717109f="" data-v-ac7fe1d6="">
          <div class="knowledge-hub__container" data-v-7717109f="">
            <div class="knowledge-hub__title" data-v-7717109f="">
              <h3 class="title" data-v-16261ef6="" data-v-7717109f="">
                Investissez dans le savoir de vos employés.
              </h3>
            </div>
            <div class="knowledge-hub__body" data-v-7717109f="">
              <p data-v-7717109f="">Formez le personnel. Gérez efficacement.</p>
            </div>
            <div class="carousel" data-v-7717109f="">
              <div class="carousel__gallery-sidebar" data-v-7717109f="">
                <div class="swiper-container" data-v-7717109f="">
                  <div class="swiper-container a swiper-container-initialized swiper-container-vertical swiper-container-thumbs" data-v-7717109f="">
                    <div class="swiper-wrapper" style="transition-duration: 0ms;">
                      <div class="carousel__slide swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" data-v-7717109f="" style="/*height: 121px;*/"><svg aria-hidden="true" focusable="false" data-prefix="fal"
                          data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="carousel__slide-icon svg-inline--fa fa-bookmark fa-w-12" data-v-7717109f="">
                          <path fill="currentColor" d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm16 456.287l-160-93.333-160 93.333V48c0-8.822 7.178-16 16-16h288c8.822 0 16 7.178 16 16v408.287z" data-v-7717109f=""
                            class=""></path>
                        </svg>
                        <div class="carousel__slide-content" data-v-7717109f="">
                          <p class="slide-content__title" data-v-7717109f="">
                            Oschool pour votre entreprise
                          </p>
                          <p class="slide-content__body" data-v-7717109f="">
                            Gérez la formation de vos employés, membres ou partenaires grâce à votre plateforme privée.
                          </p>
                        </div>
                      </div>
                    </div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                  </div>
                </div>
              </div>
              <div class="carousel__gallery-content" data-v-7717109f="">
                <div class="swiper-container b swiper-container-initialized swiper-container-horizontal" data-v-7717109f="">
                  <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-active" data-v-7717109f="" style="width: 980px;">
                      <div class="carousel__slide" data-v-7717109f="">
                        <div class="carousel__slide-title" data-v-7717109f=""><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                            class="carousel__slide-icon svg-inline--fa fa-bookmark fa-w-12" data-v-7717109f="">
                            <path fill="currentColor" d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm16 456.287l-160-93.333-160 93.333V48c0-8.822 7.178-16 16-16h288c8.822 0 16 7.178 16 16v408.287z" data-v-7717109f=""
                              class=""></path>
                          </svg>
                          <p data-v-7717109f="">Oschool pour votre entreprise</p>
                        </div>
                        <div class="carousel__slide-content" data-v-7717109f="">
                          <picture class="aspect-ratio--16:9 border-radius--rounded image" data-v-958d1b38="" data-v-7717109f="">
                              <img src="https://images.unsplash.com/photo-1573164574230-db1d5e960238?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" data-src="/images/knowledge-hub__blog.jpg" alt="Blog" class=" lazyloaded"
                              data-v-958d1b38=""></picture>
                        </div>
                        <div class="carousel__slide-body" data-v-7717109f="">
                          <p data-v-7717109f="">Gérez la formation de vos employés, membres ou partenaires grâce à votre plateforme privée.</p>
                        </div>
                        <div class="carousel__slide-link" data-v-7717109f="">
                            <a href="/corporate" target="_blank" class="link link--secondary" data-v-6535949a="" data-v-7717109f="">
                            <!----><span data-v-6535949a="">
                              En savoir plus
                            </span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                              class="link__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-6535949a="">
                              <path fill="currentColor"
                                d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                                data-v-6535949a="" class=""></path>
                            </svg></a></div>
                      </div>
                    </div>
                  </div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-blocks" data-v-78f49ef0="" data-v-ac7fe1d6="">
          <div class="content-blocks__container" data-v-78f49ef0="">
            <!---->
            <!---->
            <div class="content-block content-block--links content-block--social-proof" data-v-2c530488="" data-v-78f49ef0="">
              <div class="content-block__tag" data-v-2c530488=""><span class="tag tag--text tag--dark" data-v-168455c2="" data-v-2c530488="">
                  Solutions
                </span></div>
              <div class="content-block__title" data-v-2c530488=""><span class="title" data-v-16261ef6="" data-v-2c530488="">
                  La technologie dont votre entreprise a besoin pour démarrer
                </span></div>
              <div class="content-block__body" data-v-2c530488="" data-v-78f49ef0="">
                Gérez la formation de vos employés, membres ou partenaires grâce à votre plateforme privée.<br><br>
                <span style="font-weight: bold;"> Centralisez vos formateurs et invitez des ressources externes.</span><br>
                Regroupez les meilleurs formateurs sous votre bannière pour offrir le catalogue de formations le plus complet. Donnez accès à des formateurs externes pour qu’ils intègrent eux-mêmes leurs cours à votre plateforme, tout en contrôlant les permissions et accès de ceux-ci.
              </div>
              <!--div class="content-block__links" data-v-2c530488="" data-v-78f49ef0="">
                <nav data-v-2c530488="" data-v-78f49ef0="">
                  <ul data-v-2c530488="" data-v-78f49ef0="">
                    <li data-v-2c530488="" data-v-78f49ef0=""><a href="/fr/producers" class="link link--primary" data-v-6535949a="" data-v-78f49ef0="" data-v-2c530488="">
                        <-><span data-v-6535949a="">
                          En savoir plus sur comment devenir producteur, productrice
                        </span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                          class="link__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-6535949a="">
                          <path fill="currentColor"
                            d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                            data-v-6535949a="" class=""></path>
                        </svg></a></li>
                  </ul>
                </nav>
              </div-->
              <!--div class="content-block__social-proof" data-v-2c530488="" data-v-78f49ef0="">
                <div class="card-social-proof card-social-proof--text" data-v-32d4fc32="" data-v-78f49ef0="" data-v-2c530488="">
                  <div class="card-social-proof__body" data-v-32d4fc32="">
                    <p data-v-32d4fc32="" data-v-78f49ef0="">"Chaque jour, il y a un nouvel outil, une nouvelle présentation, un nouveau rapport, de nouvelles choses qui se passent."</p>
                  </div>
                  <div class="card-social-proof__person-wrapper" data-v-32d4fc32="">
                    <div class="card-social-proof__person-avatar" data-v-32d4fc32="">
                      <picture class="aspect-ratio--1:1 border-radius--rounded-circle image" data-v-958d1b38="" data-v-32d4fc32=""><img src="https://www.hotmart.com/images/social-proofs/irmaos-cancado.jpg" data-src="/images/social-proofs/irmaos-cancado.jpg"
                          alt="Gustavo Cançado" title="Gustavo Cançado" class=" lazyloaded" data-v-958d1b38=""></picture>
                    </div>
                    <div class="card-social-proof__person-name" data-v-32d4fc32="">
                      Gustavo Cançado
                    </div>
                    <div class="card-social-proof__person-company" data-v-32d4fc32="">
                      Les mères qui éduquent
                    </div>
                  </div>
                </div>
              </div-->
              <div class="content-block__image" data-v-2c530488="" data-v-78f49ef0="">
                <picture class="aspect-ratio--1:1 border-radius--rounded image image--transparent" data-v-958d1b38="" data-v-78f49ef0="" data-v-2c530488=""><img src="https://oschoolelearning.com/images/divers/courses.png"
                    data-src="/images/placeholders/home__solutions.png" alt="Solutions" class=" lazyloaded" data-v-958d1b38=""></picture>
              </div>
            </div>
          </div>
        </div>
        <!---->
        <div class="banner" data-v-a7a15686="" data-v-ac7fe1d6="">
          <div class="banner__container" data-v-a7a15686="">
            <div class="banner__title" data-v-a7a15686="">
              <h3 class="title" data-v-16261ef6="" data-v-a7a15686="">Faites le premier pas vers votre nouvel avenir !</h3>
            </div>
            <div class="banner__buttons" data-v-a7a15686=""><a href="/corporate/#price_offer" target="_blank" class="button button--primary" data-v-ff41ee4e="" data-v-a7a15686="">
                <!----><span data-v-ff41ee4e="">Créer votre école gratuitement</span><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                  class="button__icon--right svg-inline--fa fa-arrow-right fa-w-14 fa-fw" data-v-ff41ee4e="">
                  <path fill="currentColor"
                    d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z"
                    data-v-ff41ee4e="" class=""></path>
                </svg></a></div>
          </div>
        </div>

@endsection
