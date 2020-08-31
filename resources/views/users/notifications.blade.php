@extends('layouts.menu-school')
@section('title', 'Tableau de bord')

@section('content')
<style media="screen">
  /*! CSS Used from: https://laracasts.com/css/app.css?id=4d2e22b5eab1441d5e3a */
  h1 {
    font-size: 2em;
    margin: .67em 0;
  }

  pre {
    font-family: monospace, monospace;
    font-size: 1em;
  }

  a {
    background-color: transparent;
  }

  strong {
    font-weight: bolder;
  }

  code {
    font-family: monospace, monospace;
    font-size: 1em;
  }

  img {
    border-style: none;
  }

  button {
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
  }

  button {
    overflow: visible;
  }

  button {
    text-transform: none;
  }

  [type=submit],
  button {
    -webkit-appearance: button;
  }

  [type=submit]::-moz-focus-inner,
  button::-moz-focus-inner {
    border-style: none;
    padding: 0;
  }

  [type=submit]:-moz-focusring,
  button:-moz-focusring {
    outline: 1px dotted ButtonText;
  }

  blockquote,
  h1,
  p,
  pre {
    margin: 0;
  }

  button {
    background-color: transparent;
    background-image: none;
    padding: 0;
  }

  button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
    border: 0 solid #e5e5e5;
  }

  img {
    border-style: solid;
  }

  button {
    cursor: pointer;
  }

  h1 {
    font-size: inherit;
    font-weight: inherit;
  }

  a {
    color: inherit;
    text-decoration: inherit;
  }

  button {
    padding: 0;
    line-height: inherit;
    color: inherit;
  }

  code,
  pre {
    font-family: Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
  }

  img,
  svg {
    display: block;
    vertical-align: middle;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  blockquote,
  body div,
  code,
  form,
  h1,
  img,
  li,
  p,
  pre,
  span,
  strong {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font-weight: 500;
    vertical-align: baseline;
    background: 0 0;
  }

  *,
  :after,
  :before {
    box-sizing: inherit;
  }

  img {
    max-width: 100%;
  }

  blockquote {
    quotes: none;
  }

  blockquote:after,
  blockquote:before {
    content: "";
    content: none;
  }

  a {
    margin: 0;
    padding: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: 0 0;
  }

  pre {
    white-space: pre-wrap;
    white-space: pre-line;
    word-wrap: break-word;
  }

  code,
  pre {
    font-family: monospace, sans-serif;
  }

  button {
    cursor: pointer;
  }

  button {
    margin: 0;
  }

  button {
    width: auto;
    overflow: visible;
  }

  button {
    font-family: Open Sans, Helvetica, Arial, sans-serif;
  }

  code,
  pre {
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: auto;
    font-family: Source Code Pro, Monaco, Inconsolata, monospace;
    line-height: 1.25;
  }

  a {
    color: #3490dc;
    cursor: pointer;
    text-decoration: none;
    transition: none 86ms ease-out;
  }

  code {
    background-color: #f5f7fa;
    color: #ed6c63;
    font-size: 11px;
    font-weight: 400;
    padding: 1px 2px 2px;
  }

  img {
    max-width: 100%;
  }

  span {
    font-style: inherit;
    font-weight: inherit;
  }

  strong {
    font-weight: 700;
  }

  pre {
    white-space: pre;
    word-wrap: normal;
  }

  pre,
  pre code {
    background-color: #f5f7fa;
    color: #4d545d;
  }

  pre code {
    display: block;
    overflow-x: auto;
    padding: 16px 20px;
  }

  .content:not(:last-child) {
    margin-bottom: 20px;
  }

  .content a:not(.button) {
    border-bottom: 1px solid #d7d7d7;
    font-weight: 700;
  }

  .content a:not(.button):visited {
    --text-opacity: 1;
    color: #328af1;
    color: rgba(50, 138, 241, var(--text-opacity));
  }

  .content a:not(.button):hover {
    border-bottom-color: #3490dc;
  }

  .content p:not(:last-child) {
    margin-bottom: 1em;
  }

  .content blockquote {
    background-color: #f5f7fa;
    border-left: 5px solid #d7d7d7;
    padding: 1.5em;
  }

  h1,
  p {
    letter-spacing: 0;
  }

  .tw-btn {
    display: block;
    --text-opacity: 1;
    color: #22292f;
    color: rgba(34, 41, 47, var(--text-opacity));
    padding: 1.25rem 1.5rem;
    font-size: .875rem;
    font-weight: 700;
    line-height: 1;
    text-transform: uppercase;
    position: relative;
    max-width: 30rem;
    text-align: center;
    border: 1px solid;
    border-radius: 18px;
  }

  @media (min-width:768px) {
    .tw-btn {
      display: inline-block;
      font-size: .75rem;
      padding-top: .75rem;
      padding-bottom: .75rem;
    }
  }

  @media (min-width:992px) {
    .tw-btn {
      transition: background .3s, border-color .2s;
      max-width: 100%;
      padding: .83rem 2rem;
    }
  }

  .tw-btn:focus {
    outline: none;
  }

  .tw-btn:hover {
    --text-opacity: 1;
    color: #328af1;
    color: rgba(50, 138, 241, var(--text-opacity));
    border-color: currentColor;
  }

  .tw-btn-channel {
    border: 1px solid;
  }

  .tw-btn-channel:hover {
    background: currentColor;
  }

  #root button:focus {
    outline: none;
  }

  img {
    display: initial;
  }

  img[data-src] {
    opacity: 0;
    transition: opacity .7s;
  }

  img[data-src].lazyloaded {
    opacity: 1;
  }

  a {
    transition: background-color .3s, border .3s;
  }

  a.link:not(.no-transition) {
    transition: all .3s;
  }

  .link:hover {
    color: currentColor;
    text-decoration: underline;
  }

  .dropdown-toggle>button:focus {
    outline: 0;
  }

  .dropdown-menu.is-light {
    --bg-opacity: 1;
    background-color: #fff;
    background-color: rgba(255, 255, 255, var(--bg-opacity));
    --text-opacity: 1;
    color: #22292f;
    color: rgba(34, 41, 47, var(--text-opacity));
    box-shadow: 0 2px 20px 0 rgba(0, 0, 0, .1);
  }

  .dropdown-menu.is-light .dropdown-menu-link:hover {
    background: hsla(0, 0%, 100%, .1);
  }

  .dropdown-menu.is-light .dropdown-menu-link:hover>a:after {
    content: "";
    display: block;
    width: 94%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 3%;
    margin: auto;
    z-index: -1;
    pointer-events: none;
    --bg-opacity: 1;
    background-color: #f6f6f6;
    background-color: rgba(246, 246, 246, var(--bg-opacity));
    border-radius: .5rem;
  }

  .dropdown-menu.is-light .dropdown-menu-link>a {
    position: relative;
    --text-opacity: 1;
    color: #22292f;
    color: rgba(34, 41, 47, var(--text-opacity));
    padding: .25rem 1.25rem;
    font-size: .75rem;
    display: block;
  }

  .dropdown-menu-link {
    display: block;
    text-decoration: none;
    font-size: .875rem;
    line-height: 1.7;
    text-align: left;
    font-weight: 600;
  }

  .forum-comment {
    transition: background-color, .3s;
  }

  @media (max-width:768px) {
    .forum-comment {
      margin-left: -20px;
      margin-right: -20px;
      padding-left: 20px;
      padding-right: 20px;
      --border-opacity: 1;
      border-color: #f6f6f6;
      border-bottom: 1px;
      border-color: rgba(246, 246, 246, var(--border-opacity));
      border-style: solid;
    }
  }

  @media (min-width:768px) {
    .forum-comment {
      border-radius: .5rem;
    }
  }

  @media (min-width:768px) {
    .forum-comment:not(.is-best):not(.is-admin):hover {
      --bg-opacity: 1;
      background-color: #f6f6f6;
      background-color: rgba(246, 246, 246, var(--bg-opacity));
      border-radius: .5rem;
    }
  }

  .forum-comment .forum-comment-edit-links {
    top: 4px;
  }

  @media (min-width:992px) {
    .forum-comment .forum-comment-edit-links>div:not(.has-likes) {
      visibility: hidden;
    }
  }

  @media (min-width:992px) {
    .forum-comment:hover .forum-comment-edit-links>div {
      visibility: visible;
    }
  }

  @media (min-width:992px) {
    .forum-comment .reply-likes.has-none {
      visibility: hidden;
    }

    .forum-comment:hover .reply-likes {
      visibility: visible;
    }
  }

  @media (min-width:992px) {
    .forum-main {
      margin-right: calc(4rem - 40px);
    }
  }

  #root .user-content {
    line-height: 1.6;
    letter-spacing: 0;
    word-break: break-word;
  }

  #root .user-content blockquote {
    --bg-opacity: 1;
    background-color: #f6f6f6;
    background-color: rgba(246, 246, 246, var(--bg-opacity));
    --border-opacity: 1;
    border-color: #ccc;
    border-color: rgba(204, 204, 204, var(--border-opacity));
    border-left: 20px rgba(204, 204, 204, var(--border-opacity));
    border-style: solid;
  }

  #root .user-content a {
    border: none;
  }

  #root .user-content *+pre {
    margin-top: 1em;
  }

  #root .forum-comment.is-reply .user-content {
    margin-bottom: 0;
  }

  #root .user-content pre {
    word-wrap: normal;
    white-space: pre-wrap;
  }

  #root .user-content pre:not(:last-child) {
    margin-bottom: 1em;
  }

  #root .user-content pre>code {
    padding: 20px;
    font-size: 10px;
    border-radius: 4px;
    line-height: 1.5em;
    box-shadow: 4px 4px 15px 0 rgba(36, 37, 38, .08);
    font-family: Source Code Pro, Fira Code, menlo, monospace;
  }

  @media (min-width:1200px) {
    #root .user-content pre>code {
      font-size: 12px;
    }
  }

  .participate-button {
    bottom: 20px;
    right: 20px;
  }

  @media (min-width:768px) {
    .participate-button {
      bottom: 30px;
      right: 30px;
    }
  }

  .achievement-list .achievement:nth-child(n+4) {
    display: none;
  }

  @media (min-width:992px) {
    .achievement-list .achievement {
      display: flex !important;
    }
  }

  .achievement:not(.has-not-been-awarded).is-muted {
    color: #b8b8b8;
  }

  .content {
    line-height: 1.4em;
  }

  .content strong {
    color: #69707a;
  }

  .tw-bg-white {
    --bg-opacity: 1;
    background-color: #fff;
    background-color: rgba(255, 255, 255, var(--bg-opacity));
  }

  .tw-bg-blue {
    --bg-opacity: 1;
    background-color: #328af1;
    background-color: rgba(50, 138, 241, var(--bg-opacity));
  }

  .tw-bg-blue-lighter {
    --bg-opacity: 1;
    background-color: #ecf3fc;
    background-color: rgba(236, 243, 252, var(--bg-opacity));
  }

  .hover\:tw-bg-green:hover {
    --bg-opacity: 1;
    background-color: #92d048;
    background-color: rgba(146, 208, 72, var(--bg-opacity));
  }

  .hover\:tw-bg-blue-dark:hover {
    --bg-opacity: 1;
    background-color: #2779bd;
    background-color: rgba(39, 121, 189, var(--bg-opacity));
  }

  .tw-group:hover .group-hover\:tw-bg-grey-light {
    --bg-opacity: 1;
    background-color: #e5e5e5;
    background-color: rgba(229, 229, 229, var(--bg-opacity));
  }

  .tw-border-grey {
    --border-opacity: 1;
    border-color: #ccc;
    border-color: rgba(204, 204, 204, var(--border-opacity));
  }

  .hover\:tw-border-green:hover {
    --border-opacity: 1;
    border-color: #92d048;
    border-color: rgba(146, 208, 72, var(--border-opacity));
  }

  .tw-rounded {
    border-radius: .25rem;
  }

  .tw-rounded-lg {
    border-radius: .5rem;
  }

  .tw-rounded-full {
    border-radius: 9999px;
  }

  .tw-cursor-pointer {
    cursor: pointer;
  }

  .tw-block {
    display: block;
  }

  .tw-inline {
    display: inline;
  }

  .tw-flex {
    display: flex;
  }

  .tw-hidden {
    display: none;
  }

  .tw-items-end {
    align-items: flex-end;
  }

  .tw-items-center {
    align-items: center;
  }

  .tw-justify-end {
    justify-content: flex-end;
  }

  .tw-justify-center {
    justify-content: center;
  }

  .tw-justify-between {
    justify-content: space-between;
  }

  .tw-flex-1 {
    flex: 1 1 0%;
  }

  .tw-font-semibold {
    font-weight: 600;
  }

  .tw-font-bold {
    font-weight: 700;
  }

  .tw-h-6 {
    height: 1.5rem;
  }

  .tw-h-16 {
    height: 4rem;
  }

  .tw-text-2xs {
    font-size: .63rem;
  }

  .tw-text-xs {
    font-size: .75rem;
  }

  .tw-text-sm {
    font-size: .875rem;
  }

  .tw-text-base {
    font-size: 1rem;
  }

  .tw-leading-none {
    line-height: 1;
  }

  .tw-mr-1 {
    margin-right: .25rem;
  }

  .tw-mb-1 {
    margin-bottom: .25rem;
  }

  .tw-mt-2 {
    margin-top: .5rem;
  }

  .tw-mr-2 {
    margin-right: .5rem;
  }

  .tw-mb-2 {
    margin-bottom: .5rem;
  }

  .tw-mr-3 {
    margin-right: .75rem;
  }

  .tw-mb-3 {
    margin-bottom: .75rem;
  }

  .tw-mt-4 {
    margin-top: 1rem;
  }

  .tw-mr-4 {
    margin-right: 1rem;
  }

  .tw-mb-4 {
    margin-bottom: 1rem;
  }

  .tw-ml-4 {
    margin-left: 1rem;
  }

  .tw-mb-5 {
    margin-bottom: 1.25rem;
  }

  .tw-mb-6 {
    margin-bottom: 1.5rem;
  }

  .tw-ml-6 {
    margin-left: 1.5rem;
  }

  .tw-mt-8 {
    margin-top: 2rem;
  }

  .tw-mr-8 {
    margin-right: 2rem;
  }

  .tw-mb-8 {
    margin-bottom: 2rem;
  }

  .tw-mr-auto {
    margin-right: auto;
  }

  .tw--mt-2 {
    margin-top: -.5rem;
  }

  .tw--mt-4 {
    margin-top: -1rem;
  }

  .tw-overflow-x-hidden {
    overflow-x: hidden;
  }

  .tw-py-2 {
    padding-top: .5rem;
    padding-bottom: .5rem;
  }

  .tw-py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .tw-px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .tw-px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .tw-py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .tw-py-25 {
    padding-top: .58rem;
    padding-bottom: .58rem;
  }

  .tw-pt-1 {
    padding-top: .25rem;
  }

  .tw-pr-2 {
    padding-right: .5rem;
  }

  .tw-pt-4 {
    padding-top: 1rem;
  }

  .tw-pb-7 {
    padding-bottom: 1.75rem;
  }

  .tw-fixed {
    position: fixed;
  }

  .tw-absolute {
    position: absolute;
  }

  .tw-relative {
    position: relative;
  }

  .tw-right-0 {
    right: 0;
  }

  .tw-bottom-0 {
    bottom: 0;
  }

  .tw-left-0 {
    left: 0;
  }

  .tw-shadow {
    box-shadow: 0 5px 11px rgba(36, 37, 38, .08);
  }

  .tw-shadow-lg {
    box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
  }

  .tw-fill-current {
    fill: currentColor;
  }

  .tw-text-left {
    text-align: left;
  }

  .tw-text-center {
    text-align: center;
  }

  .tw-text-black-transparent-75 {
    color: rgba(0, 0, 0, .75);
  }

  .tw-text-black {
    --text-opacity: 1;
    color: #22292f;
    color: rgba(34, 41, 47, var(--text-opacity));
  }

  .tw-text-grey-dark {
    --text-opacity: 1;
    color: #8795a1;
    color: rgba(135, 149, 161, var(--text-opacity));
  }

  .tw-text-grey {
    --text-opacity: 1;
    color: #ccc;
    color: rgba(204, 204, 204, var(--text-opacity));
  }

  .tw-text-blue {
    --text-opacity: 1;
    color: #328af1;
    color: rgba(50, 138, 241, var(--text-opacity));
  }

  .hover\:tw-text-white:hover {
    --text-opacity: 1;
    color: #fff;
    color: rgba(255, 255, 255, var(--text-opacity));
  }

  .hover\:tw-text-blue:hover {
    --text-opacity: 1;
    color: #328af1;
    color: rgba(50, 138, 241, var(--text-opacity));
  }

  .tw-uppercase {
    text-transform: uppercase;
  }

  .tw-visible {
    visibility: visible;
  }

  .tw-w-6 {
    width: 1.5rem;
  }

  .tw-w-16 {
    width: 4rem;
  }

  .tw-w-full {
    width: 100%;
  }

  .tw-z-10 {
    z-index: 10;
  }

  .tw-z-40 {
    z-index: 40;
  }

  .tw-z-50 {
    z-index: 50;
  }

  .tw-transition-all {
    transition-property: all;
  }

  .is-muted {
    color: #919499;
  }

  .tw-transition-all {
    transition: color .3s, background-color .3s;
  }

  .is-circle {
    border-radius: 50%;
  }

  @media (max-device-width:736px) and (orientation:portrait) {
    .phone\:tw-flex {
      display: flex;
    }

    .phone\:tw-hidden {
      display: none;
    }

    .phone\:tw-items-center {
      align-items: center;
    }
  }

  @media (max-width:768px) {
    .mobile\:tw-bg-grey-panel {
      --bg-opacity: 1;
      background-color: #f6f6f6;
      background-color: rgba(246, 246, 246, var(--bg-opacity));
    }

    .mobile\:tw-rounded-full {
      border-radius: 9999px;
    }

    .mobile\:tw-flex {
      display: flex;
    }

    .mobile\:tw-hidden {
      display: none;
    }

    .mobile\:tw-items-center {
      align-items: center;
    }

    .mobile\:tw-text-sm {
      font-size: .875rem;
    }

    .mobile\:tw-mb-3 {
      margin-bottom: .75rem;
    }

    .mobile\:tw-p-2 {
      padding: .5rem;
    }

    .mobile\:tw-py-2 {
      padding-top: .5rem;
      padding-bottom: .5rem;
    }

    .mobile\:tw-px-3 {
      padding-left: .75rem;
      padding-right: .75rem;
    }
  }

  @media (min-width:768px) {
    .md\:tw-block {
      display: block;
    }

    .md\:tw-flex {
      display: flex;
    }

    .md\:tw-hidden {
      display: none;
    }

    .md\:tw-items-start {
      align-items: flex-start;
    }

    .md\:tw-text-sm {
      font-size: .875rem;
    }

    .md\:tw-leading-none {
      line-height: 1;
    }

    .md\:tw-mr-2 {
      margin-right: .5rem;
    }

    .md\:tw-mb-2 {
      margin-bottom: .5rem;
    }

    .md\:tw-mr-5 {
      margin-right: 1.25rem;
    }

    .md\:tw-mr-6 {
      margin-right: 1.5rem;
    }

    .md\:tw-mb-6 {
      margin-bottom: 1.5rem;
    }

    .md\:tw--ml-4 {
      margin-left: -1rem;
    }

    .md\:tw-py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .md\:tw-px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
    }

    .md\:tw-pt-0 {
      padding-top: 0;
    }

    .md\:tw-pl-6 {
      padding-left: 1.5rem;
    }
  }

  @media (min-width:992px) {
    .lg\:tw-flex {
      display: flex;
    }

    .lg\:tw-hidden {
      display: none;
    }

    .lg\:tw-justify-between {
      justify-content: space-between;
    }

    .lg\:tw-flex-1 {
      flex: 1 1 0%;
    }

    .lg\:tw-mr-0 {
      margin-right: 0;
    }

    .lg\:tw-invisible {
      visibility: hidden;
    }
  }

  /*! CSS Used from: https://laracasts.com/highlight/styles/laracasts.css?id=1 */
  .hljs {
    display: block;
    overflow-x: auto;
    padding: .5em;
    background: #182334;
    color: #fff;
  }

  .hljs-keyword {
    color: #328af1;
  }

  .hljs-comment {
    color: rgba(255, 255, 255, .25);
  }

  /*! CSS Used from: Embedded */
  .tw-btn-channel.is-laravel {
    color: #F56857;
  }

  .tw-btn-channel.is-laravel:hover {
    color: white;
    background: #F56857;
  }

  /*! CSS Used fontfaces */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
    unicode-range: U+0370-03FF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');
    unicode-range: U+1F00-1FFF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');
    unicode-range: U+0370-03FF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
</style>
<div class="tw-flex-1">
  <div class="forum-main lg:tw-flex">
    <div class="lg:tw-flex-1">
      <!---->
      <div class="forum-comment is-question tw-group md:tw-flex md:tw-pl-6 md:tw-px-6 md:tw--ml-4 tw-py-8 md:tw-py-4 tw--mt-4">
        <div class="mobile:tw-mb-3 md:tw-mr-6 mobile:tw-flex mobile:tw-items-center md:tw-items-start">
          <a href="/@mu92" class="tw-block">
            <img src="//www.gravatar.com/avatar/54ee1c636635bc93d0aecb974eb39d17?s=100&amp;d=https%3A%2F%2Fs3.amazonaws.com%2Flaracasts%2Fimages%2Fforum%2Favatars%2Favatar-18.png" alt="mu92's avatar" width="40" height="40" class="is-circle"></a>
            <a href="/@mu92" class="tw-text-black link tw-font-bold md:tw-hidden tw-ml-4 tw-text-sm tw-flex-1 tw-leading-none">mu92</a>
          <!--div class="md:tw-hidden tw-flex tw-items-center"><a href="https://laracasts.com/discuss/channels/laravel" class="tw-btn tw-btn-channel is-laravel tw-py-2 tw-px-4 tw-text-2xs tw-block tw-text-center">
              Laravel
            </a></div-->
        </div>
        <div class="tw-flex-1 tw-relative">
          <div class="mobile:tw-hidden tw-flex tw-mb-5 lg:tw-justify-between tw-items-center"><a href="/@mu92" class="tw-font-bold tw-font-lg tw-mr-2 tw-text-black">mu92</a> <span class="tw-text-grey-dark tw-pr-2">•</span>
            <div class="tw-hidden md:tw-flex tw-items-end tw-leading-none tw-mr-4"><span class="tw-text-xs tw-text-grey-dark tw-flex-1"><strong class="tw-text-grey-dark">3 years ago</strong></span></div>
            <div class="tw-hidden lg:tw-flex tw-mr-auto">
              <div class="achievement-list tw-flex tw-flex-1"></div>
            </div>
            <!--div class="tw-flex tw-items-center">
              <div class="tw-flex tw-items-center tw-mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" class="tw-mr-1">
                  <g fill="none" fill-rule="evenodd">
                    <path d="M0-3h19v19H0z"></path>
                    <path fill="#78909C"
                      d="M9.5.562C5.542.562 2.161 3.025.792 6.5c1.37 3.475 4.75 5.937 8.708 5.937s7.339-2.462 8.708-5.937C16.838 3.025 13.458.562 9.5.562zm0 9.896A3.96 3.96 0 0 1 5.542 6.5 3.96 3.96 0 0 1 9.5 2.542 3.96 3.96 0 0 1 13.458 6.5 3.96 3.96 0 0 1 9.5 10.458zm0-6.333A2.372 2.372 0 0 0 7.125 6.5 2.372 2.372 0 0 0 9.5 8.875 2.372 2.372 0 0 0 11.875 6.5 2.372 2.372 0 0 0 9.5 4.125z"
                      opacity=".5"></path>
                  </g>
                </svg> <span class="tw-text-xs tw-text-grey-dark tw-font-semibold">
                  9423
                </span></div>
              <div class="tw-flex tw-items-center tw-mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 15 14" class="tw-mr-1">
                  <path fill="#78909C" fill-rule="evenodd" d="M7.5 0C3.344 0 0 2.818 0 6.286c0 1.987 1.094 3.757 2.781 4.914l.117 2.35c.022.438.338.58.704.32l2.023-1.442c.594.144 1.219.18 1.875.18 4.156 0 7.5-2.817 7.5-6.285C15 2.854 11.656 0 7.5 0z"
                    opacity=".5"></path>
                </svg> <span class="tw-text-xs tw-text-grey-dark tw-font-semibold">2</span></div> <a href="https://laracasts.com/discuss/channels/laravel" class="tw-btn tw-btn-channel is-laravel tw-py-2 tw-px-6 tw-text-2xs tw-block tw-text-center">
                Laravel
              </a>
            </div-->
          </div>
          <h1 id="conversation-title" class="tw-bg-blue-lighter group-hover:tw-bg-grey-light tw-font-bold tw-text-black-transparent-75 tw-px-6 tw-py-4 tw-rounded tw-mb-2 md:tw-mb-6 tw-rounded-lg" style="word-break: break-word;">
            how i undo php artisan storage:link
          </h1>
          <div class="md:tw-hidden tw-leading-none tw-mb-4"><span class="tw-text-xs tw-text-grey-dark tw-flex-1">Posted <strong class="tw-text-grey-dark">3 years ago</strong> by <a href="/@mu92" class="tw-font-bold tw-text-blue link">mu92</a></span>
          </div>
          <div id="conversation-body" class="content tw-text-black user-content tw-text-base md:tw-text-sm" style="">
            <p>i run this command now i want to remove this, how i can undo this.</p>
          </div>
          <div class="forum-comment-edit-links tw-mt-4">
            <div class="dropdown tw-relative">
              <div aria-haspopup="true" class="dropdown-toggle"><button class="tw-font-bold hover:tw-text-blue">
                  ...
                </button></div>
              <div class="dropdown-menu tw-absolute tw-z-10 tw-py-2 tw-rounded-lg tw-shadow tw-mt-2 tw-left-0 is-light" style="width: 200px; display: none;">
                <li class="dropdown-menu-link"><a>
                    Report Spam
                  </a></li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
