<html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin/menu-school.css">
    <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/nProgress/nprogress.css">

    <link rel="stylesheet" type="text/css" href="/notifs/amaran/amaran.min.css" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
​


    <style type="text/css">
        .Button-module_button__3Rp1B {
            color: green;
        }

        .Button-module_blue__2DKsN {
            color: blue;
        }

        .Button-module_light-gray__2YQYw {
            color: lightgrey;
        }
    </style>
    <style type="text/css">
        .FocusFixer-module_usingMouse__1zr_y :focus {
            outline: none;
        }
    </style>
    <style type="text/css">
        /* Single source of truth for variables to be used by JS if needed */
    </style>

    <!-- add initial data for bootstrapping admin app inline to minimize http requests -->
    <style id="ace_editor.css">
        .ace_editor {
            position: relative;
            overflow: hidden;
            font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;
            direction: ltr;
            text-align: left;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .ace_scroller {
            position: absolute;
            overflow: hidden;
            top: 0;
            bottom: 0;
            background-color: inherit;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
            cursor: text;
        }

        .ace_content {
            position: absolute;
            box-sizing: border-box;
            min-width: 100%;
        }

        .ace_dragging .ace_scroller:before {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            background: rgba(250, 250, 250, 0.01);
            z-index: 1000;
        }

        .ace_dragging.ace_dark .ace_scroller:before {
            background: rgba(0, 0, 0, 0.01);
        }

        .ace_selecting,
        .ace_selecting * {
            cursor: text !important;
        }

        .ace_gutter {
            position: absolute;
            overflow: hidden;
            width: auto;
            top: 0;
            bottom: 0;
            left: 0;
            cursor: default;
            z-index: 4;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none;
        }

        .ace_gutter-active-line {
            position: absolute;
            left: 0;
            right: 0;
        }

        .ace_scroller.ace_scroll-left {
            box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;
        }

        .ace_gutter-cell {
            padding-left: 19px;
            padding-right: 6px;
            background-repeat: no-repeat;
        }

        .ace_gutter-cell.ace_error {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");
            background-repeat: no-repeat;
            background-position: 2px center;
        }

        .ace_gutter-cell.ace_warning {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");
            background-position: 2px center;
        }

        .ace_gutter-cell.ace_info {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");
            background-position: 2px center;
        }

        .ace_dark .ace_gutter-cell.ace_info {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");
        }

        .ace_scrollbar {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 6;
        }

        .ace_scrollbar-inner {
            position: absolute;
            cursor: text;
            left: 0;
            top: 0;
        }

        .ace_scrollbar-v {
            overflow-x: hidden;
            overflow-y: scroll;
            top: 0;
        }

        .ace_scrollbar-h {
            overflow-x: scroll;
            overflow-y: hidden;
            left: 0;
        }

        .ace_print-margin {
            position: absolute;
            height: 100%;
        }

        .ace_text-input {
            position: absolute;
            z-index: 0;
            width: 0.5em;
            height: 1em;
            opacity: 0;
            background: transparent;
            -moz-appearance: none;
            appearance: none;
            border: none;
            resize: none;
            outline: none;
            overflow: hidden;
            font: inherit;
            padding: 0 1px;
            margin: 0 -1px;
            text-indent: -1em;
            -ms-user-select: text;
            -moz-user-select: text;
            -webkit-user-select: text;
            user-select: text;
            white-space: pre !important;
        }

        .ace_text-input.ace_composition {
            background: inherit;
            color: inherit;
            z-index: 1000;
            opacity: 1;
            text-indent: 0;
        }

        [ace_nocontext=true] {
            transform: none !important;
            filter: none !important;
            perspective: none !important;
            clip-path: none !important;
            mask: none !important;
            contain: none !important;
            perspective: none !important;
            mix-blend-mode: initial !important;
            z-index: auto;
        }

        .ace_layer {
            z-index: 1;
            position: absolute;
            overflow: hidden;
            word-wrap: normal;
            white-space: pre;
            height: 100%;
            width: 100%;
            box-sizing: border-box;
            pointer-events: none;
        }

        .ace_gutter-layer {
            position: relative;
            width: auto;
            text-align: right;
            pointer-events: auto;
        }

        .ace_text-layer {
            font: inherit !important;
        }

        .ace_cjk {
            display: inline-block;
            text-align: center;
        }

        .ace_cursor-layer {
            z-index: 4;
        }

        .ace_cursor {
            z-index: 4;
            position: absolute;
            box-sizing: border-box;
            border-left: 2px solid;
            transform: translatez(0);
        }

        .ace_multiselect .ace_cursor {
            border-left-width: 1px;
        }

        .ace_slim-cursors .ace_cursor {
            border-left-width: 1px;
        }

        .ace_overwrite-cursors .ace_cursor {
            border-left-width: 0;
            border-bottom: 1px solid;
        }

        .ace_hidden-cursors .ace_cursor {
            opacity: 0.2;
        }

        .ace_smooth-blinking .ace_cursor {
            transition: opacity 0.18s;
        }

        .ace_animate-blinking .ace_cursor {
            animation-duration: 1000ms;
            animation-timing-function: step-end;
            animation-name: blink-ace-animate;
            animation-iteration-count: infinite;
        }

        .ace_animate-blinking.ace_smooth-blinking .ace_cursor {
            animation-duration: 1000ms;
            animation-timing-function: ease-in-out;
            animation-name: blink-ace-animate-smooth;
        }

        @keyframes blink-ace-animate {

            from,
            to {
                opacity: 1;
            }

            60% {
                opacity: 0;
            }
        }

        @keyframes blink-ace-animate-smooth {

            from,
            to {
                opacity: 1;
            }

            45% {
                opacity: 1;
            }

            60% {
                opacity: 0;
            }

            85% {
                opacity: 0;
            }
        }

        .ace_marker-layer .ace_step,
        .ace_marker-layer .ace_stack {
            position: absolute;
            z-index: 3;
        }

        .ace_marker-layer .ace_selection {
            position: absolute;
            z-index: 5;
        }

        .ace_marker-layer .ace_bracket {
            position: absolute;
            z-index: 6;
        }

        .ace_marker-layer .ace_active-line {
            position: absolute;
            z-index: 2;
        }

        .ace_marker-layer .ace_selected-word {
            position: absolute;
            z-index: 4;
            box-sizing: border-box;
        }

        .ace_line .ace_fold {
            box-sizing: border-box;
            display: inline-block;
            height: 11px;
            margin-top: -2px;
            vertical-align: middle;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="), url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");
            background-repeat: no-repeat, repeat-x;
            background-position: center center, top left;
            color: transparent;
            border: 1px solid black;
            border-radius: 2px;
            cursor: pointer;
            pointer-events: auto;
        }

        .ace_dark .ace_fold {}

        .ace_fold:hover {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="), url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");
        }

        .ace_tooltip {
            background-color: #FFF;
            background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));
            border: 1px solid gray;
            border-radius: 1px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            color: black;
            max-width: 100%;
            padding: 3px 4px;
            position: fixed;
            z-index: 999999;
            box-sizing: border-box;
            cursor: default;
            white-space: pre;
            word-wrap: break-word;
            line-height: normal;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            pointer-events: none;
        }

        .ace_folding-enabled>.ace_gutter-cell {
            padding-right: 13px;
        }

        .ace_fold-widget {
            box-sizing: border-box;
            margin: 0 -12px 0 1px;
            display: none;
            width: 11px;
            vertical-align: top;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 3px;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .ace_folding-enabled .ace_fold-widget {
            display: inline-block;
        }

        .ace_fold-widget.ace_end {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");
        }

        .ace_fold-widget.ace_closed {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");
        }

        .ace_fold-widget:hover {
            border: 1px solid rgba(0, 0, 0, 0.3);
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);
        }

        .ace_fold-widget:active {
            border: 1px solid rgba(0, 0, 0, 0.4);
            background-color: rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);
        }

        .ace_dark .ace_fold-widget {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");
        }

        .ace_dark .ace_fold-widget.ace_end {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");
        }

        .ace_dark .ace_fold-widget.ace_closed {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");
        }

        .ace_dark .ace_fold-widget:hover {
            box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);
            background-color: rgba(255, 255, 255, 0.1);
        }

        .ace_dark .ace_fold-widget:active {
            box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);
        }

        .ace_inline_button {
            border: 1px solid lightgray;
            display: inline-block;
            margin: -1px 8px;
            padding: 0 5px;
            pointer-events: auto;
            cursor: pointer;
        }

        .ace_inline_button:hover {
            border-color: gray;
            background: rgba(200, 200, 200, 0.2);
            display: inline-block;
            pointer-events: auto;
        }

        .ace_fold-widget.ace_invalid {
            background-color: #FFB4B4;
            border-color: #DE5555;
        }

        .ace_fade-fold-widgets .ace_fold-widget {
            transition: opacity 0.4s ease 0.05s;
            opacity: 0;
        }

        .ace_fade-fold-widgets:hover .ace_fold-widget {
            transition: opacity 0.05s ease 0.05s;
            opacity: 1;
        }

        .ace_underline {
            text-decoration: underline;
        }

        .ace_bold {
            font-weight: bold;
        }

        .ace_nobold .ace_bold {
            font-weight: normal;
        }

        .ace_italic {
            font-style: italic;
        }

        .ace_error-marker {
            background-color: rgba(255, 0, 0, 0.2);
            position: absolute;
            z-index: 9;
        }

        .ace_highlight-marker {
            background-color: rgba(255, 255, 0, 0.2);
            position: absolute;
            z-index: 8;
        }

        .ace_br1 {
            border-top-left-radius: 3px;
        }

        .ace_br2 {
            border-top-right-radius: 3px;
        }

        .ace_br3 {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .ace_br4 {
            border-bottom-right-radius: 3px;
        }

        .ace_br5 {
            border-top-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .ace_br6 {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .ace_br7 {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .ace_br8 {
            border-bottom-left-radius: 3px;
        }

        .ace_br9 {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .ace_br10 {
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .ace_br11 {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .ace_br12 {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .ace_br13 {
            border-top-left-radius: 3px;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .ace_br14 {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .ace_br15 {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .ace_text-input-ios {
            position: absolute !important;
            top: -100000px !important;
            left: -100000px !important;
        }

        /*# sourceURL=ace/css/ace_editor.css */
    </style>
    <style id="ace-tm">
        .ace-tm .ace_gutter {
            background: #f0f0f0;
            color: #333;
        }

        .ace-tm .ace_print-margin {
            width: 1px;
            background: #e8e8e8;
        }

        .ace-tm .ace_fold {
            background-color: #6B72E6;
        }

        .ace-tm {
            background-color: #FFFFFF;
            color: black;
        }

        .ace-tm .ace_cursor {
            color: black;
        }

        .ace-tm .ace_invisible {
            color: rgb(191, 191, 191);
        }

        .ace-tm .ace_storage,
        .ace-tm .ace_keyword {
            color: blue;
        }

        .ace-tm .ace_constant {
            color: rgb(197, 6, 11);
        }

        .ace-tm .ace_constant.ace_buildin {
            color: rgb(88, 72, 246);
        }

        .ace-tm .ace_constant.ace_language {
            color: rgb(88, 92, 246);
        }

        .ace-tm .ace_constant.ace_library {
            color: rgb(6, 150, 14);
        }

        .ace-tm .ace_invalid {
            background-color: rgba(255, 0, 0, 0.1);
            color: red;
        }

        .ace-tm .ace_support.ace_function {
            color: rgb(60, 76, 114);
        }

        .ace-tm .ace_support.ace_constant {
            color: rgb(6, 150, 14);
        }

        .ace-tm .ace_support.ace_type,
        .ace-tm .ace_support.ace_class {
            color: rgb(109, 121, 222);
        }

        .ace-tm .ace_keyword.ace_operator {
            color: rgb(104, 118, 135);
        }

        .ace-tm .ace_string {
            color: rgb(3, 106, 7);
        }

        .ace-tm .ace_comment {
            color: rgb(76, 136, 107);
        }

        .ace-tm .ace_comment.ace_doc {
            color: rgb(0, 102, 255);
        }

        .ace-tm .ace_comment.ace_doc.ace_tag {
            color: rgb(128, 159, 191);
        }

        .ace-tm .ace_constant.ace_numeric {
            color: rgb(0, 0, 205);
        }

        .ace-tm .ace_variable {
            color: rgb(49, 132, 149);
        }

        .ace-tm .ace_xml-pe {
            color: rgb(104, 104, 91);
        }

        .ace-tm .ace_entity.ace_name.ace_function {
            color: #0000A2;
        }

        .ace-tm .ace_heading {
            color: rgb(12, 7, 255);
        }

        .ace-tm .ace_list {
            color: rgb(185, 6, 144);
        }

        .ace-tm .ace_meta.ace_tag {
            color: rgb(0, 22, 142);
        }

        .ace-tm .ace_string.ace_regex {
            color: rgb(255, 0, 0)
        }

        .ace-tm .ace_marker-layer .ace_selection {
            background: rgb(181, 213, 255);
        }

        .ace-tm.ace_multiselect .ace_selection.ace_start {
            box-shadow: 0 0 3px 0px white;
        }

        .ace-tm .ace_marker-layer .ace_step {
            background: rgb(252, 255, 0);
        }

        .ace-tm .ace_marker-layer .ace_stack {
            background: rgb(164, 229, 101);
        }

        .ace-tm .ace_marker-layer .ace_bracket {
            margin: -1px 0 0 -1px;
            border: 1px solid rgb(192, 192, 192);
        }

        .ace-tm .ace_marker-layer .ace_active-line {
            background: rgba(0, 0, 0, 0.07);
        }

        .ace-tm .ace_gutter-active-line {
            background-color: #dcdcdc;
        }

        .ace-tm .ace_marker-layer .ace_selected-word {
            background: rgb(250, 250, 255);
            border: 1px solid rgb(200, 200, 250);
        }

        .ace-tm .ace_indent-guide {
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;
        }

        /*# sourceURL=ace/css/ace-tm */
    </style>
    <style>
        .error_widget_wrapper {
            background: inherit;
            color: inherit;
            border: none
        }

        .error_widget {
            border-top: solid 2px;
            border-bottom: solid 2px;
            margin: 5px 0;
            padding: 10px 40px;
            white-space: pre-wrap;
        }

        .error_widget.ace_error,
        .error_widget_arrow.ace_error {
            border-color: #ff5a5a
        }

        .error_widget.ace_warning,
        .error_widget_arrow.ace_warning {
            border-color: #F1D817
        }

        .error_widget.ace_info,
        .error_widget_arrow.ace_info {
            border-color: #5a5a5a
        }

        .error_widget.ace_ok,
        .error_widget_arrow.ace_ok {
            border-color: #5aaa5a
        }

        .error_widget_arrow {
            position: absolute;
            border: solid 5px;
            border-top-color: transparent !important;
            border-right-color: transparent !important;
            border-left-color: transparent !important;
            top: -5px;
        }
    </style>
    <style type="text/css">
        .fp__btn {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            height: 34px;
            padding: 4px 30px 5px 40px;
            position: relative;
            margin-bottom: 0;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-family: "Open Sans", sans-serif;
            font-size: 12px;
            font-weight: 600;
            line-height: 1.42857143;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background: #ef4925;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAVCAYAAABLy77vAAAABGdBTUEAALGPC/xhBQAAAJRJREFUOBHNUcEWgCAIy14fbl9egK5MRarHQS7ocANmOCgWh1gdNERig1CgwPlLxkZuE80ndHlU+4Lda1zz0m01dSKtcz0h7qpQb7WR+HyrqRPxahzwwMqqkEVs6qnv+86NQAbcJlK/X+vMeMe7XcBOYaRzcbItUR7/8QgcykmElQrQPErnmxNxl2yyiwcgEvQUocIJaE6yERwqXDIAAAAASUVORK5CYII=");
            background-repeat: no-repeat;
            background-position: 15px 6px;
            border: 1px solid transparent;
            border-radius: 17px
        }

        .fp__btn:hover {
            background-color: #d64533
        }

        .fp__btn::after {
            position: absolute;
            content: "";
            top: 15px;
            right: 14px;
            width: 7px;
            height: 4px;
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAICAYAAAA1BOUGAAAABGdBTUEAALGPC/xhBQAAAGlJREFUCB1j/P//vw4DA4MiEKOD+0xAkatA/AJNBsS/ysTIyPgfyDgHxO+hCkD0Oag4RAhoPDsQm4NoqCIGBiBnAhBjAxNAkkxAvBZNFsQHuQesmxPIOQZVAKI54UZDFYgABbcBsQhMAgDIVGYSqZsn6wAAAABJRU5ErkJggg==");
        }

        .fp__btn:hover::after {
            background-position: 0 -4px;
        }

        .fp__btn:active,
        .fp__btn:focus {
            outline: none
        }

        @media only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 2 / 1),
        only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min-device-pixel-ratio: 2) {
            .fp__btn {
                background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAqCAYAAADbCvnoAAAABGdBTUEAALGPC/xhBQAAAQFJREFUWAntWEESwjAIbBwfHl+upNoRNjKUJhk5kIvZQGG7bHOwPGltgdYtEJedShKyJnLHhEILz1Zi9HCOzFI7FUqFLAWseDgPdfeQ9QZ4b1j53nstnEJJyBqx20NeT1gEMB5uZG6Fzn5lV5UMp1ASQhMjdnvoqjewsYbDjcytEH5lsxULp1AS0sx8nJfVnjganf3NkVlKhVPIfQ9Zb6jF0atK3mNriXwpicPHvIeyr3sTDA53VgpgH8BvMu1ZCCz7ew/7MPwlE4CQJPNnQj2ZX4SYlEPbVpsvKFZ5TOwhcRoUTQiwwhVjArPEqVvRhMCneMXzDk9lwYphIwrZZOihF32oehMAa1qSAAAAAElFTkSuQmCC");
                background-size: 18px 21px
            }

            .fp__btn::after {
                background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAQCAYAAAAmlE46AAAABGdBTUEAALGPC/xhBQAAANpJREFUKBWVkU8KglAYxJ/u3HuBwmUX8BqepKN4ka4RguDOVYu2QVCrhIJ6/caekqLiGxi+PzPD58PAWrszxmygD84h7hpePFLy1mEQBJamgvcVYXkqZXTR0LwpJWw0z0Ba6bymDcrI4kkp4EvzCNoVztNKfVATwoOiyx/NDup1SVqPQVBbDDeK3txBb9JuHfhNW3HWjZhDX+SGRAgPHkl5f0+kieBxRVieaPD5LGJ4WghLiwehbkBI4HUirF3S+SYrhhQ2f2H16aR5vMSYwbdjNtYXZ0J7cc70BXnFMHIGznzEAAAAAElFTkSuQmCC");
                background-size: 7px 8px;
            }
        }
    </style>

<script> "use strict"; !function() { var t = window.driftt = window.drift = window.driftt || []; if (!t.init) { if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice.")); t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n = Array.prototype.slice.call(arguments); return n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) { t[e] = t.factory(e); }), t.load = function(t) { var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js"; var i = document.getElementsByTagName("script")[0]; i.parentNode.insertBefore(o, i); }; } }(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('2uy6g3spxi59');
</script>

</head>

<body ng-class="bodyCssClasses" flow-prevent-drop="" class="state-admin state-admin-onboarding" style="" cz-shortcut-listen="true">

    @if (session('status'))
    <div style="z-index: 10000;" class="w3-panel w3-red w3-display-container">
        {{ session('status') }}
    </div>
    @endif
    <!--[if lte IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <div growl="">
        <div class="growl">
            <!---->
        </div>
    </div>

    <!---->
    <!---->
    <div ui-view="" class="" style="">
        <script>
            _.contains = _.includes
        </script>
        <!---->
        <!---->
        <div ui-view="onboarding" ng-if="::!currentUser.show_custom_role_upgrade"></div>
        <!---->
        <!---->
        <search ng-if="::config.search &amp;&amp; !currentUser.show_custom_role_upgrade">
            <!---->
        </search>
        <!---->
        <!---->
        <section ng-if="::!currentUser.show_custom_role_upgrade">
            <!---->
            <div class="admin-sidebar ">
                <div class="school-link"><a ng-href="/" ng-bind="::school.name" target="_blank" class="school-link-name" href="/">{{$school->name}}</a>
                    <!----><a ng-if="::(config.search &amp;&amp; permissions.can('use_search'))" ng-click="showSearch()" class="search-icon fastclickable"><i class="fa fa-search"></i></a>
                    <!---->
                </div>
                <div class="navs">
                    <!--vue complète du menu-->
                    <ul id="admin-nav" what="admin nav" class="nav primary-nav nav-stacked ng-animate-disabled">
                        <!---->
                        <li ui-sref-active="active"

                          onboarding-tooltip-text="Complete the onboarding steps to launch your school.">
                            <!----><a ui-sref="admin.dashboard" href="{{url('schoolAdmin', $school)}}">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Dashboard" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-speed-fast"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <!--div href="" tooltip="Complete the onboarding steps to launch your school." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                  class="tch-onboarding-sidebar-tooltip"></div-->
                                <!----><span class="menu-item-label">Tableau de bord</span>
                            </a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          text="Users" icon="icon icon-users" sref="admin.users.students" include-active-state="admin.users">
                            <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Users" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-users"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Utilisateurs</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->

                        <li what="nav item" ui-sref-active="active"
                          text="Users" icon="icon icon-users" sref="admin.users.students" include-active-state="admin.users">
                            <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/authors">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Users" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-users"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Auteurs</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>

                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_financial')" text="Sales" icon="icon icon-cash-dollar" sref="admin.transactions">
                            <!----><a what="link" ui-sref="admin.transactions" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/sales">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Sales" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-cash-dollar"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Ventes</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active" style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('email_students') || permissions.can('view_gated_email')" text="Emails" icon="icon icon-envelope" sref="admin.emails">
                            <!----><a what="link" ui-sref="admin.emails" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/emails">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Emails" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-envelope"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Emails</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active" style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-2': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_support')" text="Help" icon="icon icon-question-circle" sref="admin.help" pin-to-bottom="2" top-border="!(school.school_plan.name == 'free' &amp;&amp; permissions.can('view_plan'))"
                          class="pin-bottom-level-2 pin-bottom">
                            <!----><a what="link" ui-sref="admin.help" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/help">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Help" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-question-circle"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Help</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active" style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-1': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_gated_teachable_u') || permissions.can('access_teachable_u')" text="TeachableU" icon="fa fa-building-o" sref="admin.teachable-u" pin-to-bottom="1" class="pin-bottom-level-1 pin-bottom">
                            <!----><a what="link" ui-sref="admin.teachable-u" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/teachable-u">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="TeachableU" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="fa fa-building-o"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">TeachableU</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active" style="display:none"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-3': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::(school.school_plan.name == 'free' &amp;&amp; permissions.can('view_plan'))" text="Plan" icon="icon icon-rocket" sref="admin.settings.plan" pin-to-bottom="3" never-highlight="true" label="UPGRADE" top-border="true"
                          class="pin-bottom-level-3 pin-bottom top-border">
                            <!----><a what="link" ui-sref="admin.settings.plan" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/plan"
                              class="never-highlight">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Plan" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-rocket"></i>
                                <!---->
                                <!---->
                                <!----><label ng-if="::label" ng-bind="::label" class="label label-sidebar">UPGRADE</label>
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Plan</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_settings') &amp;&amp; !permissions.can('view_settings_notifications')" text="Settings" icon="icon icon-cog2" sref="admin.settings">
                            <!----><a what="link" ui-sref="admin.settings" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/settings/general">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Settings" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-cog2"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Paramètres</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <hr ng-if="::permissions.can('view_courses')">
                        <!---->
                        <!---->
                        <h3 ng-if="::permissions.can('view_courses')" class="nav-section-title hide-on-expand"><a ui-sref="admin.courses" href="/schoolAdmin/{{$school->id}}/courses">Cours</a><a ui-sref="admin.courses.new" class="plus" href="/schoolAdmin/{{$school->id}}/courses/create">+</a>
                        </h3>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_courses')" text="Courses" icon="icon icon-book2" sref="admin.courses" show-on-expand="true" class="show-on-expand">
                            <!----><a what="link" ui-sref="admin.courses" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/courses">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Courses" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-book2"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Courses</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        @foreach($school->courses as $course)
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_courses')" ng-repeat="course in courses | limitTo: 3" text="Développeur Web Junior" sref="admin.courses.course.information({id: '594160'})" minimal="true" hide-on-expand="true"
                          class="hide-on-expand">
                            <!----><a what="link" ui-sref="admin.courses.course.information({id: '594160'})" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }"
                              href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/information" class="text-only">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">{{$course->name}}</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        @endforeach
                        <!---->
                        <!---->
                        <!---->

                    </ul>
                    <!--fin vue complète du menu-->

                    <ul id="users-nav" what="site nav" state="admin.users" class="nav nav-stacked secondary-nav ng-animate-disabled"
                      style="-webkit-transform: translate3d(230px, 0, 0) !important; transform: translate3d(230px, 0, 0) !important;-moz-transform: translate3d(230px, 0, 0) !important;">
                        <h3 class="nav-section-title">Utilisateurs</h3>
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Students"
                          sref="admin.users.students">
                            <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/students">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Élèves</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Owners"
                          sref="admin.users.owners" ng-if="permissions.can('create_and_manage_users')">
                            <!----><a what="link" ui-sref="admin.users.owners" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/owners">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Les propriétaires</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Authors"
                          sref="admin.users.authors" ng-if="permissions.can('create_and_manage_users')">
                            <!----><a what="link" ui-sref="admin.users.authors" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/authors">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Auteurs</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Affiliates"
                          sref="admin.users.affiliates" ng-if="permissions.can('create_and_manage_users')">
                            <!----><a what="link" ui-sref="admin.users.affiliates" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/affiliates">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Les affiliés</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Custom"
                          sref="admin.users.custom" label="" ng-if="permissions.can('manage_custom_roles') || permissions.can('view_gated_custom_roles')">
                            <!----><a what="link" ui-sref="admin.users.custom" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/custom">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Douane</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                    </ul>
                    <ul id="settings-nav" what="settings nav" state="admin.settings" class="nav nav-stacked secondary-nav ng-animate-disabled"
                      style="-webkit-transform: translate3d(230px, 0, 0) !important; transform: translate3d(230px, 0, 0) !important;-moz-transform: translate3d(230px, 0, 0) !important;">
                        <h3 class="nav-section-title">Paramètres</h3>
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_general_settings')" text="General" sref="admin.settings.general">
                            <!----><a what="link" ui-sref="admin.settings.general" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/general">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Général</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_payments')" text="Payments" sref="admin.settings.payments">
                            <!----><a what="link" ui-sref="admin.settings.payments" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/payments">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Paiements</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="permissions.can('view_tax_settings')" text="Taxes" sref="admin.settings.taxes">
                            <!----><a what="link" ui-sref="admin.settings.taxes" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/taxes">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Les taxes</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_notifications')" migrated="::permissions.can('view_migrated_notifications')" rhref="settings/notifications" text="Notifications" sref="admin.settings.notifications">
                            <!---->
                            <!---->
                            <!----><a ng-if="migrated" href="/admin-app/settings/notifications">
                                <!----><span class="menu-item-label"><span ng-bind="::text" ng-class="textClass">Les notifications</span></span></a>
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_plan')" text="Plan" sref="admin.settings.plan">
                            <!----><a what="link" ui-sref="admin.settings.plan" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/plan">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Plan</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_billing')" text="Billing" sref="admin.settings.billing">
                            <!----><a what="link" ui-sref="admin.settings.billing" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/billing">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Facturation</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_integrations')" text="Integrations" sref="admin.settings.integrations">
                            <!----><a what="link" ui-sref="admin.settings.integrations" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/integrations">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Intégrations</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_webhooks') || permissions.can('view_gated_webhooks')" text="Webhooks" sref="admin.settings.webhooks">
                            <!----><a what="link" ui-sref="admin.settings.webhooks" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/webhooks">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Webhooks</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('manage_custom_roles') || permissions.can('view_gated_custom_roles')" text="Roles" label="" sref="admin.settings.roles">
                            <!----><a what="link" ui-sref="admin.settings.roles" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/roles">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Les rôles</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('join_beta_program')" text="Beta Program" sref="admin.settings.beta">
                            <!----><a what="link" ui-sref="admin.settings.beta" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/beta">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Programme bêta</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                    </ul>
                    <ul id="emails-nav" what="emails nav" state="admin.emails" class="nav nav-stacked secondary-nav ng-animate-disabled"
                      style="-webkit-transform: translate3d(230px, 0, 0) !important; transform: translate3d(230px, 0, 0) !important;-moz-transform: translate3d(230px, 0, 0) !important;">
                        <h3 class="nav-section-title">Emails</h3>
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Compose"
                          ng-if="::(permissions.can('email_students') || permissions.can('view_emails')) || permissions.can('view_gated_email')" sref="admin.emails.compose">
                            <!----><a what="link" ui-sref="admin.emails.compose" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/emails/compose">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Composer</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="permissions.can('view_email_reports') || permissions.can('view_email_history')" text="History" sref="admin.emails.history">
                            <!----><a what="link" ui-sref="admin.emails.history" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }"
                              href="/admin/emails/history?mailer=StudentMailer%23custom_email&amp;aggregate_custom_emails=true">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Histoire</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="permissions.can('view_email_reports') || permissions.can('customize_email_templates') || permissions.can('view_gated_email')" text="Template Editor" sref="admin.emails.template-editor">
                            <!----><a what="link" ui-sref="admin.emails.template-editor" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }"
                              href="/admin/emails/template-editor">
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Éditeur de modèles</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                    </ul>
                    <!---->
                    <ul id="course-nav" what="course nav" ui-view="subnav" state="admin.courses.course" class="nav secondary-nav nav-stacked ng-animate-disabled"
                      style="-webkit-transform: translate3d(230px, 0, 0) !important; transform: translate3d(230px, 0, 0) !important;-moz-transform: translate3d(230px, 0, 0) !important;"></ul>
                    <!---->
                    <ul id="student-nav" what="student nav" ui-view="subnav" state="admin.users.user" class="nav secondary-nav nav-stacked ng-animate-disabled"
                      style="-webkit-transform: translate3d(230px, 0, 0) !important; transform: translate3d(230px, 0, 0) !important;-moz-transform: translate3d(230px, 0, 0) !important;"></ul>
                    <!---->
                    <ul id="transactions-nav" what="transactions nav" ui-view="subnav" state="admin.transactions" class="nav nav-stacked secondary-nav ng-animate-disabled"
                      style="-webkit-transform: translate3d(230px, 0, 0) !important; transform: translate3d(230px, 0, 0) !important;-moz-transform: translate3d(230px, 0, 0) !important;"></ul>
                </div>
                <div tooltip="David Yao" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="visible-xs" class="misc-buttons">
                    <div dropdown="" class="btn-group tch-dropdown-group dropup dropdown">
                        <!---->
                        <!----><a href="/users/settings" ng-if="::currentUser.is_teachable_account" target="_blank" class="tch-dropdown-group-selector"><img gravatar-src-once="user.email" align="left" gravatar-size="30" class="user-avatar"
                              src="/images/users/default/{{Auth::user()->image}}">
                            <div class="myteachable-icon-overlay">&nbsp;</div>
                            <div ng-bind="::user.name" class="user-name">{{Auth::user()->name}}</div>
                        </a>
                        <!----><a what="dropdown-toggle" onclick="show2()" dropdown-toggle="" type="button" href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-up"></i></a>
                        <ul role="menu" class="dropdown-menu dropdown-menu-left" id="drop1">
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://www.blog.oschoolelearning.com" target="_blank" what="experts-marketplace">Oschool Blog</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://discord.gg/hhbzcHE" target="_blank" what="instructor-community">Communauté Oschool</a></li>
                            <!---->
                            <!---->
                            <!--li ng-if="::permissions.can('view_fedora_references')"><a href="https://teachable.zendesk.com/" target="_blank" what="knowledge-base">Connaissances de base</a></li-->
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')" role="presentation" class="divider"></li>
                            <!---->
                            <!---->
                            <li ng-if="::currentUser.is_teachable_account"><a href="/users/settings" target="_blank" translate="FOOTER.MYTEACHABLE_PROFILE">Mon profil Oschool</a></li>
                            <!---->
                            <!---->
                            <!---->
                            <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">Se déconnecter</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="/js/admin_views/menu.js"></script>

            @yield('content')


        </section>
        <!---->
        <!---->
        <div data-ng-show="filepickerModalOpen" data-ng-click="modalClose()" class="modal-backdrop in fastclickable ng-hide">
            <div id="filepicker-modal-container" data-ng-show="filepickerModalOpen" class="ng-hide"><a data-ng-click="filepickerModalClose()" class="fa fa-close fastclickable"></a><iframe id="filepicker-modal" name="filepicker-modal" frameborder="0"
                  marginwidth="0" marginheight="0" data-ng-show="filepickerModalOpen" class="ng-hide" __idm_frm__="10597"></iframe></div>
        </div>
        <modal></modal>
    </div>

    <script type="text/javascript" src="https://api.filepicker.io/v2/filepicker.js"></script>
    <div class="cfp-hotkeys-container fade" ng-class="{in: helpVisible}" style="display: none;">
        <div class="cfp-hotkeys">
            <!---->
            <h4 class="cfp-hotkeys-title" ng-if="!header">Raccourcis clavier:</h4>
            <!---->
            <!---->
            <table>
                <tbody>
                    <!---->
                    <tr ng-repeat="hotkey in hotkeys | filter:{ description: '!$$undefined$$' }">
                        <td class="cfp-hotkeys-keys">
                            <!----><span ng-repeat="key in hotkey.format() track by $index" class="cfp-hotkeys-key">?</span>
                            <!---->
                        </td>
                        <td class="cfp-hotkeys-text">Afficher / masquer ce menu d'aide</td>
                    </tr>
                    <!---->
                    <tr ng-repeat="hotkey in hotkeys | filter:{ description: '!$$undefined$$' }" class="" style="">
                        <td class="cfp-hotkeys-keys">
                            <!----><span ng-repeat="key in hotkey.format() track by $index" class="cfp-hotkeys-key">f</span>
                            <!---->
                        </td>
                        <td class="cfp-hotkeys-text">Cherchez votre école</td>
                    </tr>
                    <!---->
                </tbody>
            </table>
            <!---->
            <div class="cfp-hotkeys-close fastclickable" ng-click="toggleCheatSheet()">×</div>
        </div>
    </div>

    <script type="text/javascript" src="/notifs/amaran/jquery.amaran.js"></script>
<!--youtube loading-->
    <script type="text/javascript" src="/nProgress/nprogress.js"></script>
    <script type="text/javascript">
    NProgress.configure({ showSpinner: false });
    NProgress.start();
    NProgress.done();
    </script>
    <!--fin youtube loading-->

    <script type="text/javascript" src="/js/admin_views/menu.js"></script>


</body>

</html>
