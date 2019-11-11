! function(e) {
    function t(t) {
        for (var i, r, a = t[0], l = t[1], c = t[2], d = 0, p = []; d < a.length; d++) r = a[d], s[r] && p.push(s[r][0]), s[r] = 0;
        for (i in l) Object.prototype.hasOwnProperty.call(l, i) && (e[i] = l[i]);
        for (u && u(t); p.length;) p.shift()();
        return o.push.apply(o, c || []), n()
    }

    function n() {
        for (var e, t = 0; t < o.length; t++) {
            for (var n = o[t], i = !0, a = 1; a < n.length; a++) {
                var l = n[a];
                0 !== s[l] && (i = !1)
            }
            i && (o.splice(t--, 1), e = r(r.s = n[0]))
        }
        return e
    }
    var i = {},
        s = {
            8: 0
        },
        o = [];

    function r(t) {
        if (i[t]) return i[t].exports;
        var n = i[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(n.exports, n, n.exports, r), n.l = !0, n.exports
    }
    r.m = e, r.c = i, r.d = function(e, t, n) {
        r.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, r.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, r.t = function(e, t) {
        if (1 & t && (e = r(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (r.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var i in e) r.d(n, i, function(t) {
                return e[t]
            }.bind(null, i));
        return n
    }, r.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e["default"]
        } : function() {
            return e
        };
        return r.d(t, "a", t), t
    }, r.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, r.p = "/";
    var a = window["webpackJsonp"] = window["webpackJsonp"] || [],
        l = a.push.bind(a);
    a.push = t, a = a.slice();
    for (var c = 0; c < a.length; c++) t(a[c]);
    var u = l;
    o.push([319, 0]), n()
}([, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MiyagiUtilsComponent", []), e.exports.service("MygUtilsService", n(8))
}, , function(e, t, n) {
    "use strict";

    function i(e, t) {
        for (var n = e.split("."), i = 0; i < n.length && (t = t[n[i]]); i++);
        return t
    }

    function s(e) {
        return function() {
            return {
                restrict: "A",
                compile: function() {
                    return function(t, n, s) {
                        s.swipeThreshold || (s.swipeThreshold = 100);
                        var o = s["swipe" + e],
                            r = i(o, t) || i(o, t.$parent);
                        if (!r) throw new Error("Cannot find callback by attribute ref for swipe" + e + " directive. Supplied reference was " + o);
                        var a = {
                            xDown: null,
                            yDown: null
                        };
                        n[0].addEventListener("touchstart", function(e) {
                            a.xDown = e.touches[0].clientX, a.yDown = e.touches[0].clientY
                        }), n[0].addEventListener("touchmove", function(e, t, n, i) {
                            if (e.xDown && e.yDown) {
                                var s, o = i.touches[0].clientX,
                                    r = i.touches[0].clientY,
                                    a = e.xDown - o,
                                    l = e.yDown - r;
                                (Math.abs(a) > t || Math.abs(l) > t) && ((s = Math.abs(a) > Math.abs(l) ? a > 0 ? "Left" : "Right" : l > 0 ? "Up" : "Down") && n(s, i), e.xDown = null, e.yDown = null)
                            }
                        }.bind(this, a, s.swipeThreshold, function(n, i) {
                            n === e && (r(i), t.$apply())
                        }))
                    }
                }
            }
        }
    }
    e.exports = function(e) {
        for (var t = {}, n = 0; n < e.length; n++) t[e[n]] = s(e[n]);
        return t
    }(["Left", "Right", "Up", "Down"])
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MiyagiCore", [n(2).name, n(70).name, n(71).name, n(72).name, n(1).name, n(21).name, n(24).name, n(25).name, n(7).name, n(37).name, n(40).name, n(23).name, n(46).name, n(48).name, n(53).name]).run(n(55)), e.exports.service("refreshToken", n(56)), e.exports.service("bootstrapData", n(57)), e.exports.service("disableScroll", n(17)), e.exports.service("breakpoints", n(18)), e.exports.directive("mygCheckFlexWrap", n(58)), e.exports.directive("mygCheckGrayscale", n(59)), e.exports.directive("mygTrackingRegisterScreenResolution", n(19)), e.exports.directive("mygTrackingLogin", n(20)), e.exports.directive("swipeLeft", n(3).Left), e.exports.directive("swipeRight", n(3).Right), e.exports.directive("swipeUp", n(3).Up), e.exports.directive("swipeDown", n(3).Down), e.exports.directive("windowResizeClass", n(60)), e.exports.directive("btnRipple", n(61)), e.exports.constant("MYG_EVENTS", n(62)), e.exports.constant("MYG_LESSON_URLS", {
        activities: "practice",
        quizzes: "practice",
        lesson: "video"
    }), e.exports.config(n(63)), e.exports.filter("hashPrefixHref", n(64)), e.exports.filter("sprintf", n(65)), e.exports.filter("bold", n(66)), e.exports.filter("unsafe", n(67)), e.exports.filter("sprintfbold", n(68)), e.exports.filter("truncate", n(69))
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygScrollTo", [n(1).name]), e.exports.directive("mygScrollTo", n(42)), e.exports.service("MygScrollToService", n(43))
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygSlickCarousel", []), e.exports.directive("mygSlickCarousel", n(29))
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygSurvey", [n(2).name, n(1).name, n(6).name]), e.exports.directive("mygSurvey", n(31)), e.exports.controller("mygSurveyToastController", n(33)), e.exports.controller("mygSurveyDialogController", n(35)), e.exports.service("SurveyApiService", n(36))
}, function(e, t, n) {
    "use strict";
    var i = function(e) {
        this.transitionEnd = this.getTransitionEnd(), this.animationEnd = this.getAnimationEnd(), this.matchesSelector = this.getMatchesSelector(), this.$window = e
    };
    i.$inject = ["$window"], i.prototype.getBaseUrl = function() {
        var e = this.$window.document.getElementsByTagName("base")[0];
        if (e && e.hasAttributes()) {
            var t = e.attributes.getNamedItem("href");
            if (t) return t.value
        }
    }, i.prototype.getUrlParameter = function(e) {
        e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var t = new RegExp("[\\?&]" + e + "=([^&#]*)").exec(this.$window.location.search);
        return null === t ? void 0 : decodeURIComponent(t[1].replace(/\+/g, " "))
    }, i.prototype.getCSSTransform = function() {
        for (var e = "transform WebkitTransform MozTransform OTransform msTransform".split(" "), t = document.createElement("div"), n = 0; n < e.length; n++)
            if (t && void 0 !== t.style[e[n]]) return e[n]
    }, i.prototype.getCSSTransition = function() {
        for (var e = "transition WebkitTransition MozTransition OTransition msTransition".split(" "), t = document.createElement("div"), n = 0; n < e.length; n++)
            if (t && void 0 !== t.style[e[n]]) return e[n]
    }, i.prototype.getTransitionEnd = function() {
        var e = document.createElement("div"),
            t = {
                transition: "transitionend",
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd"
            };
        for (var n in t)
            if (t.hasOwnProperty(n) && void 0 !== e.style[n]) return e = null, t[n]
    }, i.prototype.getAnimationEnd = function() {
        var e = document.createElement("div"),
            t = {
                animation: "animationend",
                WebkitAnimation: "webkitAnimationEnd",
                MozAnimation: "animationend",
                OAnimation: "oanimationend",
                MSAnimation: "MSAnimationEnd"
            };
        for (var n in t)
            if (t.hasOwnProperty(n) && void 0 !== e.style[n]) return t[n]
    }, i.prototype.getMatchesSelector = function() {
        var e = "undefined" != typeof Element && Element.prototype || {};
        return e.matches || e.webkitMatchesSelector || e.mozMatchesSelector || e.msMatchesSelector || e.oMatchesSelector || null
    }, i.prototype.getParent = function(e, t) {
        if ("string" != typeof e.tagName) throw new Error("MygUtilsService:getParent - Supply a valid DOM element.");
        if ("string" != typeof t) throw new Error("MygUtilsService:getParent - Supply a selector string.");
        for (var n = e, i = null; n.parentNode;) {
            if (this.matchesSelector.call(n, t)) {
                i = n;
                break
            }
            n = n.parentNode
        }
        return i
    }, i.prototype.nodesToArray = function(e) {
        return Array.prototype.slice.call(e)
    }, i.prototype.getElementHeight = function(e) {
        var t, n = window.getComputedStyle(e),
            i = n.display,
            s = n.position,
            o = n.visibility,
            r = n.maxHeight.replace("px", "").replace("%", "");
        return "none" !== i && "0" !== r ? e.offsetHeight : (e.style.position = "absolute", e.style.visibility = "hidden", e.style.display = "block", t = e.offsetHeight, e.style.position = s, e.style.visibility = o, e.style.display = i, t)
    }, i.prototype.bindDOMContentLoadedListener = function(e) {
        "complete" === document.readyState || "interactive" === document.readyState || "loaded" === document.readyState ? setTimeout(function() {
            e()
        }, 0) : document.addEventListener("DOMContentLoaded", function t() {
            document.removeEventListener("DOMContentLoaded", t, !1), setTimeout(function() {
                e()
            }, 0)
        }, !1)
    }, i.prototype.regexEmailValidityCheck = function(e) {
        return new RegExp(/[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i).test(e)
    }, i.prototype.regexUrlValidityCheck = function(e) {
        return new RegExp(/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,}))\.?)(?::\d{2,5})?(?:[\/?#]\S*)?$/i).test(e)
    }, i.prototype.throttle = function(e, t, n) {
        var i, s, o, r = null,
            a = 0;
        n || (n = {});
        var l = function() {
            a = !1 === n.leading ? 0 : (new Date).getTime(), r = null, o = e.apply(i, s), r || (i = s = null)
        };
        return function() {
            var c = (new Date).getTime();
            a || !1 !== n.leading || (a = c);
            var u = t - (c - a);
            return i = this, s = arguments, u <= 0 || u > t ? (clearTimeout(r), r = null, a = c, o = e.apply(i, s), r || (i = s = null)) : r || !1 === n.trailing || (r = setTimeout(l, u)), o
        }
    }, i.prototype.debounce = function(e, t, n) {
        var i;
        return function() {
            var s = this,
                o = arguments,
                r = n && !i;
            clearTimeout(i), i = setTimeout(function() {
                i = null, n || e.apply(s, o)
            }, t), r && e.apply(s, o)
        }
    }, i.prototype.easingFunctions = {
        linear: function(e) {
            return e
        },
        easeInQuad: function(e) {
            return e * e
        },
        easeOutQuad: function(e) {
            return e * (2 - e)
        },
        easeInOutQuad: function(e) {
            return e < .5 ? 2 * e * e : (4 - 2 * e) * e - 1
        },
        easeInCubic: function(e) {
            return e * e * e
        },
        easeOutCubic: function(e) {
            return --e * e * e + 1
        },
        easeInOutCubic: function(e) {
            return e < .5 ? 4 * e * e * e : (e - 1) * (2 * e - 2) * (2 * e - 2) + 1
        },
        easeInQuart: function(e) {
            return e * e * e * e
        },
        easeOutQuart: function(e) {
            return 1 - --e * e * e * e
        },
        easeInOutQuart: function(e) {
            return e < .5 ? 8 * e * e * e * e : 1 - 8 * --e * e * e * e
        },
        easeInQuint: function(e) {
            return e * e * e * e * e
        },
        easeOutQuint: function(e) {
            return 1 + --e * e * e * e * e
        },
        easeInOutQuint: function(e) {
            return e < .5 ? 16 * e * e * e * e * e : 1 + 16 * --e * e * e * e * e
        }
    }, i.prototype.isEmpty = function(e) {
        for (var t in e)
            if (e.hasOwnProperty(t)) return !1;
        return !0
    }, e.exports = i
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n, i, s) {
        var o = this;
        angular.extend(e, {
            active: null,
            moreItems: [],
            moreIsActive: !1,
            moreIsOpen: !1,
            highlightStyles: {},
            dropdownStyles: {}
        }), angular.extend(this, {
            $active: null,
            showBurgerNav: !1,
            onLinkClick: function(t, n, i) {
                "_blank" !== i && (e.active = n, this.setActive())
            },
            toggleMoreDropdown: function(t) {
                t.stopPropagation(), e.moreIsOpen = !e.moreIsOpen
            },
            setActive: function() {
                e.moreIsActive = !!o.element.querySelector('.nav__dropdown .nav__link[href="' + e.active + '"]'), e.moreIsActive ? e.highlightStyles = {} : (o.$active = o.element.querySelector('.nav__item[data-href="' + e.active + '"]'), o.setHighlightStyles())
            },
            setHighlightStyles: function() {
                e.highlightStyles = {
                    left: this.$active && this.$active.offsetLeft,
                    width: this.$active && this.$active.getBoundingClientRect().width
                }
            },
            positionMoreDropdown: function() {
                if (!s.under("medium") && !e.showBurgerNav) {
                    var i = this.$dropdownContainer = this.$dropdownContainer || n[0].querySelector(".nav__item--has-dropdown"),
                        o = i.getBoundingClientRect().left + t.pageXOffset || n[0].documentElement.scrollLeft,
                        r = t.innerWidth - (o + i.offsetWidth);
                    r < 155 ? e.dropdownStyles = {
                        right: -Math.abs(r),
                        left: "auto"
                    } : e.dropdownStyles.right && (e.dropdownStyles = {})
                }
            }
        }), angular.element(t).bind("resize", i.debounce(function() {
            this.setHighlightStyles(), e.$apply()
        }.bind(this), 250)), angular.element(t).bind("resize", i.throttle(function() {
            this.positionMoreDropdown(), e.$apply()
        }.bind(this), 250)), angular.element(t).bind("click", function() {
            e.moreIsOpen && (e.moreIsOpen = !1, e.$apply())
        }), this.positionMoreDropdown()
    }, e.exports.$inject = ["$scope", "$window", "$document", "MygUtilsService", "breakpoints"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n, i, s, o, r) {
        var a = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream,
            l = t[0].querySelector(".header__nav");
        angular.extend(e, {
            navIsOpen: !1,
            ariaHiddenBurgerNav: !1,
            ariaHiddenBehindNav: !0,
            tabIndexBurgerNav: -1,
            tabIndexBehindNav: 0,
            showBurgerNav: !1,
            headerHasLoaded: !1
        }), angular.extend(this, {
            toggleNav: function() {
                e.navIsOpen = !e.navIsOpen, e.ariaHiddenBurgerNav = !e.ariaHiddenBurgerNav, e.ariaHiddenBehindNav = !e.ariaHiddenBehindNav, e.navIsOpen ? (i.addEventListener("keyup", this.userTabbed, !1), e.tabIndexBurgerNav = 0, e.tabIndexBehindNav = -1) : (i.removeEventListener("keyup", this.userTabbed, !1), e.tabIndexBurgerNav = -1, e.tabIndexBehindNav = 0), o[e.navIsOpen ? "disable" : "enable"](), this.adjustNavForiOS()
            },
            closeNav: function() {
                e.navIsOpen && (e.navIsOpen = !1), o.enable(), this.adjustNavForiOS()
            }.bind(this),
            adjustNavForiOS: function() {
                a && (e.navIsOpen ? l.style.height = window.innerHeight + "px" : l.style.height = null)
            },
            userTabbed: function(t) {
                "small" !== r.breakpoint && "medium" !== r.breakpoint || (t.target.className.indexOf("nav") < 0 && this.toggleNav(), e.$apply())
            }.bind(this)
        }), o.enableOnElement(t[0].querySelector(".nav__wrapper")), r.on("large", !0, function() {
            e.tabIndexBurgerNav = 0, e.tabIndexBehindNav = -1, e.ariaHiddenBurgerNav = !1, e.ariaHiddenBehindNav = !0, e.navIsOpen && this.closeNav(this)
        }.bind(this)), r.on("medium", !0, function() {
            e.navIsOpen || (e.tabIndexBurgerNav = -1, e.tabIndexBehindNav = 0, e.ariaHiddenBurgerNav = !0, e.ariaHiddenBehindNav = !1)
        }), r.on("small", !0, function() {
            e.navIsOpen || (e.tabIndexBurgerNav = -1, e.tabIndexBehindNav = 0, e.ariaHiddenBurgerNav = !0, e.ariaHiddenBehindNav = !1)
        }), a && angular.element(i).bind("resize", this.adjustNavForiOS.bind(this)), "large" === r.breakpoint || "xlarge" === r.breakpoint ? (e.tabIndexBurgerNav = 0, e.tabIndexBehindNav = -1, e.ariaHiddenBurgerNav = !1, e.ariaHiddenBehindNav = !0) : e.navIsOpen || (e.tabIndexBurgerNav = -1, e.tabIndexBehindNav = 0, e.ariaHiddenBurgerNav = !0, e.ariaHiddenBehindNav = !1)
    }, e.exports.$inject = ["$scope", "$element", "$timeout", "$window", "MygUtilsService", "disableScroll", "breakpoints"]
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        return {
            restrict: "A",
            controller: "HeaderNavController",
            controllerAs: "ctrl",
            scope: !0,
            bindToController: {
                initialActive: "@active",
                showBurgerNav: "="
            },
            link: function(e, t, n, i) {
                e.active = i.initialActive, i.element = t[0], i.$active = t[0].querySelector('.nav__item[data-href="' + e.active + '"]'), i.$more = t[0].querySelector("#navMore"), e.moreIsActive = !!t[0].querySelector('.nav__dropdown .nav__link[href="' + i.initialActive + '"]'), e.moreIsActive ? i.$active = i.$more : i.setHighlightStyles()
            }
        }
    }
}, function(e, t, n) {
    "use strict";

    function i(e, t, n, i, s, o) {
        this.$el = e, this.el = e[0], this.$scope = t, this.throttle = n.throttle, this.$window = i, this.$timeout = s, this.breakpoints = o, this.init()
    }
    i.prototype = {
        hasUpdated: !1,
        init: function() {
            this.$scope.moreItems = [], this.navItems = [].slice.call(this.el.querySelectorAll(".nav__item:not(.nav__item--has-dropdown)")), this.makeFitItems(), this.bindEvents()
        },
        bindEvents: function() {
            angular.element(this.$window).bind("resize", this.throttle(this.makeFitItems.bind(this), 200))
        },
        makeFitItems: function() {
            if (!this.breakpoints.under("large")) {
                this.hasUpdated = !1;
                var e = this.hasOverflow();
                this.fitItems(e), this.hasUpdated && this.$timeout(function() {
                    this.hasUpdated = !1, this.$scope.onFitItems && this.$scope.onFitItems()
                }.bind(this))
            }
        },
        fitItems: function(e) {
            e ? (this.moveNavItem(), this.hasOverflow() && this.fitItems(e)) : this.$scope.moreItems.length && (this.restoreNavItem(), this.hasOverflow() ? this.moveNavItem() : this.fitItems(e))
        },
        hasOverflow: function() {
            for (var e, t = this.$el.width(), n = 0, i = 0; i < this.navItems.length; i++) {
                var s = angular.element(this.navItems[i]).outerHeight();
                angular.element(this.navItems[i].querySelector(".nav__link > div")).outerHeight() > s && (e = !0), n += angular.element(this.navItems[i]).outerWidth(!0)
            }
            return n > t && (e = !0), e
        },
        moveNavItem: function() {
            var e = this.navItems.pop(),
                t = e.querySelector(".nav__link");
            angular.element(e).detach(), this.$scope.moreItems.unshift({
                $el: e,
                href: t.getAttribute("href"),
                text: e.textContent,
                target: t.getAttribute("target")
            }), this.hasUpdated = !0
        },
        restoreNavItem: function() {
            var e = this.$scope.moreItems.shift().$el,
                t = this.navItems.slice(-1)[0];
            t ? this.el.insertBefore(e, t.nextSibling) : this.el.prepend(e), this.navItems.push(e), this.hasUpdated = !0
        }
    }, e.exports = function(e, t, n, s) {
        return {
            restrict: "A",
            scope: {
                onFitItems: "=",
                moreItems: "="
            },
            link: function(o, r) {
                o.fitItemsDirective = new i(r, o, t, e, n, s)
            }
        }
    }, e.exports.$inject = ["$window", "MygUtilsService", "$timeout", "breakpoints"]
}, function(e, t, n) {
    "use strict";
    var i = function(e, t, n, i) {
        this.$window = t, this.$scope = i, this.$el = angular.element(e), this.visibleUnderScrollX = 300, this.handleScroll = n(this.handleScroll.bind(this), 300), this.onMouseMove = n(this.onMouseMove.bind(this), 200), this.hideDelay = 1e3, this.init()
    };
    i.prototype = {
        lastScroll: 0,
        init: function() {
            this.bindEvents()
        },
        bindEvents: function() {
            var e = angular.element(this.$window);
            e.bind("scroll", this.onScroll.bind(this)), e.bind("mousemove", this.onMouseMove.bind(this))
        },
        show: function() {
            this.isHiding && clearTimeout(this.isHiding), this.$el.removeClass("hideOnScroll")
        },
        hide: function() {
            this.isHiding && clearTimeout(this.isHiding), this.$scope.navIsOpen || angular.element(this.$window).scrollTop() < this.visibleUnderScrollX || (this.isHiding = setTimeout(function() {
                this.$scope.navIsOpen || this.$el.addClass("hideOnScroll")
            }.bind(this), this.hideDelay))
        },
        onMouseMove: function(e) {
            e.pageY - angular.element(this.$window).scrollTop() < 65 && (this.show(), this.hide())
        },
        handleScroll: function(e, t) {
            t || this.show(), this.hide()
        },
        onScroll: function() {
            if (!this.$scope.navIsOpen) {
                var e = angular.element(this.$window).scrollTop(),
                    t = e > this.lastScroll;
                Math.abs(e - this.lastScroll) > 20 && (this.lastScroll = e, this.handleScroll(e, t))
            }
        }
    }, e.exports = function(e, t) {
        return {
            restrict: "A",
            link: function(n, s) {
                n.hideOnScrollDirective = new i(s, e, t.throttle, n)
            }
        }
    }, e.exports.$inject = ["$window", "MygUtilsService"]
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        return {
            bindToController: !0,
            controller: n(15),
            controllerAs: "LocaleSelectorCtrl",
            restrict: "A",
            replace: !1,
            scope: {
                eventXsrfToken: "@",
                xsrfToken: "@",
                showOnLoad: "@"
            },
            link: function(e, t, n, i) {
                t.on("change", function(e) {
                    e.preventDefault();
                    var n = t[0].selectedIndex,
                        s = t[0].options[n];
                    i.goToURL(s.value)
                })
            }
        }
    }
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n, i, s) {
        var o = this,
            r = n.baseUrl ? n.baseUrl : "";
        o.goToURL = function(e) {
            n.location.href = e
        }, o.showSuggestion = function() {
            var e = t.$new();
            e.hide = s.hide, s.show({
                hideDelay: 12e3,
                position: "bottom center",
                templateUrl: "locale-selector-toast",
                scope: e
            }).then(function(e) {
                void 0 === e ? o.rejectSuggestion() : o.goToURL(e)
            })
        }, o.rejectSuggestion = function() {
            return i({
                method: "POST",
                url: r + "/api/locale-suggestion-overruled",
                data: {
                    "xsrf-token": o.xsrfToken,
                    eventXsrfToken: o.eventXsrfToken
                }
            })
        }, "true" === o.showOnLoad.toLowerCase() && o.showSuggestion()
    }, e.exports.$inject = ["$scope", "$rootScope", "$window", "$http", "$mdToast"]
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = function(e, t) {
        return {
            link: function(n, s, o) {
                var r = encodeURI(o.href);
                if (!r || !r.length || !e.regexUrlValidityCheck(r)) throw new Error("Share URL provided must be valid with preceeding http:// or https://");
                var a, l = o.shareWidth || 400,
                    c = o.shareHeight || 400,
                    u = {
                        width: l,
                        height: c,
                        left: t.innerWidth / 2 - l / 2,
                        top: t.innerHeight / 2 - c / 2,
                        menubar: "no",
                        location: "no",
                        status: "no"
                    },
                    d = "";
                for (var p in Object.keys(u)) p && (a = Object.keys(u)[p], d += a + "=" + u[a] + ",");
                i.element(s).on("click", function(e) {
                    e.preventDefault(), t.open(r, "Share", d)
                })
            }
        }
    }, e.exports.$inject = ["MygUtilsService", "$window"]
}, function(e, t, n) {
    "use strict";
    var i = function(e, t) {
        this.body = e[0].body, this.$window = angular.element(t)
    };
    i.$inject = ["$document", "$window"];
    var s = [],
        o = function(e) {
            s.filter(function(t) {
                return t.contains(e.target)
            }).length || e.preventDefault()
        };
    i.prototype = {
        enable: function() {
            this.disabled = !1, this.$window.scrollTop(this.lastTop), document.documentElement.style.height = null, this.body.style.height = null, this.body.style.overflow = null, document.body.removeEventListener("touchmove", o, {
                passive: !1,
                capture: !1
            })
        },
        disable: function() {
            this.disabled = !0, this.lastTop = this.$window.scrollTop(), document.documentElement.style.height = "100%", this.body.style.overflow = "hidden", this.body.style.height = "100%", document.body.addEventListener("touchmove", o, {
                passive: !1,
                capture: !1
            })
        },
        enableOnElement: function(e) {
            s.push(e), e.addEventListener("touchmove", function(e) {
                0 === this.scrollTop && this.scrollTop + this.offsetHeight === this.scrollHeight ? e.preventDefault() : 0 === this.scrollTop ? this.scrollTop = 1 : this.scrollTop + this.offsetHeight === this.scrollHeight && (this.scrollTop = this.scrollTop - 1)
            })
        }
    }, e.exports = i
}, function(e, t, n) {
    "use strict";
    var i = function(e) {
        this.$window = e, this.breakpoint = this._getBreakpoint(), angular.element(e).bind("resize", this._handleResize.bind(this))
    };
    i.$inject = ["$window"], i.prototype = {
        rules: {
            xlarge: [1441, 1 / 0],
            large: [1024, 1440],
            medium: [600, 1023],
            small: [0, 599]
        },
        _callbacks: [],
        _handleResize: function() {
            var e = this._getBreakpoint();
            this.breakpoint !== e && (this.breakpoint = e, this._onChange())
        },
        _getBreakpoint: function() {
            var e, t = this._width();
            for (var n in this.rules)
                if (t >= this.rules[n][0] && t <= this.rules[n][1]) {
                    e = n;
                    break
                } return e
        },
        _width: function() {
            return this.$window.innerWidth
        },
        _onChange: function() {
            for (var e = this._callbacks, t = this._width(), n = 0; n < e.length; n++) {
                var i = e[n];
                i.rule && t >= i.rule[0] && t <= i.rule[1] ? i.func() : i.rule || i.func(this.breakpoint)
            }
        },
        under: function(e) {
            return this._width() < this.rules[e][0]
        },
        over: function(e) {
            return this._width() > this.rules[e][1]
        },
        on: function() {
            var e = Array.prototype.slice.call(arguments);
            switch (e.length) {
                case 3:
                    var t;
                    for (var n in this.rules) n === e[0] && (t = !0 === e[1] ? [this.rules[n][0], 1 / 0] : [0, this.rules[n][1]]);
                    this._callbacks.push({
                        func: e[2],
                        rule: t
                    });
                    break;
                case 2:
                    this._callbacks.push({
                        func: e[1],
                        rule: this.rules[e[0]]
                    });
                    break;
                default:
                    this._callbacks.push({
                        func: e[0]
                    })
            }
        }
    }, e.exports = i
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "E",
            scope: {},
            link: function() {
                var t = e[0].body.getAttribute("data-registration-screen-resolution");
                window && window.dataLayer && t && window.dataLayer.push({
                    regRes: t,
                    event: "regResPush"
                })
            }
        }
    }, e.exports.$inject = ["$document"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "E",
            scope: {
                hasUserSuccessfullySignedIn: "@",
                hasUserSuccessfullyRegistered: "@"
            },
            link: function(t) {
                "true" === t.hasUserSuccessfullyRegistered && e && e.dataLayer && e.dataLayer.push({
                    eCat: "User",
                    eAct: "registration",
                    eLab: "registrationSuccess",
                    event: "GAevent"
                }), "true" === t.hasUserSuccessfullySignedIn && e && e.dataLayer && e.dataLayer.push({
                    eCat: "User",
                    eAct: "signIn",
                    eLab: "signInSuccess",
                    event: "GAevent"
                })
            }
        }
    }, e.exports.$inject = ["$window"]
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("HeaderComponent", [n(1).name]), e.exports.controller("HeaderNavController", n(9)), e.exports.controller("HeaderController", n(10)), e.exports.directive("headerNav", n(11)), e.exports.directive("fitNavItems", n(12)), e.exports.directive("hideOnScroll", n(13))
}, , function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("AccordionComponent", [n(5).name, n(1).name]), e.exports.directive("mygAccordion", n(44))
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("FooterComponent", [n(2).name, n(1).name]), e.exports.directive("mygLocaleSelector", n(14)), e.exports.directive("mygShareLink", n(16))
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("DialogSignUpComponent", [n(2).name]), e.exports.controller("SignUpDialogController", n(26)), e.exports.directive("mygDialogSignUp", n(27)), e.exports.directive("mygDialogSignUpC", n(28))
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        this.dialogHide = function() {
            e.hide()
        }
    }, e.exports.$inject = ["$mdDialog"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "A",
            scope: {
                dialogSignUpTemplate: "@"
            },
            link: function(t, n) {
                n.on("click", function(n) {
                    n.preventDefault(), e.show({
                        templateUrl: t.dialogSignUpTemplate ? t.dialogSignUpTemplate : "signup-dialog",
                        controller: "SignUpDialogController",
                        controllerAs: "signUpDialog",
                        clickOutsideToClose: !0,
                        scope: t,
                        preserveScope: !0
                    })
                })
            }
        }
    }, e.exports.$inject = ["$mdDialog"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "A",
            scope: {
                dialogSignUpTemplate: "@"
            },
            link: function(t) {
                e.show({
                    templateUrl: t.dialogSignUpTemplate ? t.dialogSignUpTemplate : "signup-dialog-c",
                    clickOutsideToClose: !1,
                    scope: t,
                    preserveScope: !0
                })
            }
        }
    }, e.exports.$inject = ["$mdDialog"]
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    n(22), e.exports = function(e) {
        return {
            restrict: "E",
            controller: n(30),
            controllerAs: "SlickCtrl",
            scope: {
                carouselOptions: "=options"
            },
            link: function(t, n) {
                i.element(document).ready(function() {
                    t.carouselSelector = e.$(n).slick(t.carouselOptions)
                })
            }
        }
    }, e.exports.$inject = ["$window"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        this.getSlideCount = function() {
            return e.carouselSelector[0].querySelectorAll(".slick-slide:not(.slick-cloned)").length
        }, this.getCarouselElement = function() {
            return e.carouselSelector
        }
    }, e.exports.$inject = ["$scope"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, i) {
        return {
            restrict: "A",
            scope: {},
            link: function(e) {
                var s;
                (i.studentSurveys = i.studentSurveys[0], i.studentSurveys) && (i.studentSurveys.fields = Object.keys(i.studentSurveys.fields).map(function(e) {
                    return (s = i.studentSurveys.fields[e]).id = e, s
                }));
                e.showToast = function() {
                    window && window.dataLayer && window.dataLayer.push({
                        eCat: "User",
                        eAct: "surveyToast",
                        eLab: "showSurveyToast",
                        event: "GAevent"
                    }), t.show({
                        hideDelay: 0,
                        position: "bottom right",
                        controller: "mygSurveyToastController",
                        controllerAs: "ToastController",
                        template: n(32)
                    })
                }, i.studentSurveys && e.showToast()
            }
        }
    }, e.exports.$inject = ["$mdDialog", "$mdToast", "$window"]
}, function(e, t) {
    e.exports = '<md-toast class="survey__toast" ng-cloak>\n    <span class="md-toast-text example" flex>{{studentSurveyToast.survey_toast_copy}}</span>\n    <md-button ng-click="ToastController.closeToast()" class="eszett-button"\n        aria-label="{{studentSurveyToast.survey_toast_dismiss_label}}"\n        ng-bind-html="studentSurveyToast.survey_toast_dismiss_label | unsafe">\n    </md-button>\n    <md-button class="md-highlight eszett-button" ng-click="ToastController.openTakeTheSurvey($event)"\n        aria-label="{{studentSurveyToast.survey_toast_open_label}}"\n        ng-bind-html="studentSurveyToast.survey_toast_open_label | unsafe">\n    </md-button>\n</md-toast>\n'
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, i, s, o) {
        var r = this;
        e.studentSurveyToast = window.studentSurveyToast, this.submitStatusClass = !1, this.openTakeTheSurvey = function() {
            i.document.getElementsByTagName("html")[0].classList.add("js-sidenav-open"), t.hide(), s.show({
                controller: "mygSurveyDialogController",
                controllerAs: "DialogController",
                template: n(34),
                escapeToClose: !1,
                disableParentScroll: !1,
                clickOutsideToClose: !1
            })
        }, this.closeToast = function() {
            t.hide(), o.dismissForm({
                id: window.studentSurveys.id
            }).then(function() {
                r.submitStatusClass = !0, s.cancel(), i.document.getElementsByTagName("html")[0].classList.remove("js-sidenav-open")
            }, function() {
                r.submitStatusClass = !1, e.$new().resubmit = function(e) {
                    r.submit(e)
                }
            })
        }
    }, e.exports.$inject = ["$scope", "$mdToast", "$window", "$mdDialog", "SurveyApiService"]
}, function(e, t) {
    e.exports = '\n<md-dialog class="survey-modal js-survey-modal">\n    <md-dialog-content class="survey-modal__content answer-list--modal-content">\n        <md-tabs md-dynamic-height md-selected="selectedIndex">\n            <md-tab label="{{ studentSurveys.welcome_header }}">\n                <img ng-if="studentSurveys.bucket_welcome_image_url !== \'\'" ng-src="{{ studentSurveys.bucket_welcome_image_url }}" class="survey-modal__start__image" alt="" />\n                <div class="survey-modal__start">\n                    <h1 class="survey-modal__start__title">{{ studentSurveys.welcome_header }}</h1>\n                    <p>{{ studentSurveys.welcome_copy }}</p>\n                    <div class="survey-modal__buttons-bar">\n                        <md-button class="md-button md-accent md-default-theme survey-modal__survey-no eszett-button"\n                                   ng-click="DialogController.noSurvey()" aria-label="{{ studentSurveys.welcome_dismiss_label }}"\n                                   ng-bind-html="studentSurveys.welcome_dismiss_label | unsafe">\n                        </md-button>\n                        <md-button class="md-button md-primary md-raised md-default-theme survey-modal__survey-cta eszett-button"\n                                   ng-click="DialogController.takeSurvey()" aria-label="{{ studentSurveys.welcome_progress_label }}"\n                                   ng-bind-html="studentSurveys.welcome_progress_label | unsafe">\n                        </md-button>\n                    </div>\n                </div>\n\n            </md-tab>\n\n            <md-tab label="Survey">\n                <md-progress-linear md-mode="determinate" value="{{surveyProgress}}"></md-progress-linear>\n                <button class="action-close" ng-click="DialogController.submitSurvey(false)" aria-label="{{ studentSurveys.progress_close_aria }}"><i class="material-icons icon--close" ></i></button>\n                <div class="survey-dialog__carousel-container">\n                    <myg-slick-carousel class="survey-dialog__carousel js-survey-dialog-carousel">\n                        <form id="{{question.id}}" name="{{question.id}}" class="" novalidate ng-submit="DialogController.advanceSurvey(FormController)"\n                            class="survey-dialog__carousel-container js-form-question"\n                            ng-repeat="question in studentSurveys.fields | orderBy:\'order\'">\n                                <div ng-if="question.widget == \'Boolean\'">\n                                        <p class="survey-dialog__carousel__text">{{ studentSurveys.progress_copy | sprintf: ($index + 1):studentSurveys.fields.length}}</p>\n                                        <h1 class="survey-dialog__carousel__title">{{question.label}}</h1>\n                                        <md-input-container class="survey-dialog__carousel__question">\n                                            <md-checkbox aria-label="{{question.help_text}}" ng-model="question.value" id="checkbox" name="checkbox"\n                                                ng-required="{{question.required}}" required="{{question.required}}">\n                                                <span>{{question.help_text}}</span>\n                                            </md-checkbox>\n                                            <div ng-messages="currentFormController.checkbox.$error">\n                                                <div ng-message="required">{{question.error_messages.required}}</div>\n                                            </div>\n                                        </md-input-container>\n                                </div>\n                                <div ng-if="question.widget == \'MultipleChoice\' || question.widget == \'RadioSelect\' ">\n                                        <p class="survey-dialog__carousel__text">{{ studentSurveys.progress_copy | sprintf: ($index + 1):studentSurveys.fields.length}}</p>\n                                        <h1 class="survey-dialog__carousel__title">{{question.label}}</h1>\n                                        <md-input-container class="survey-dialog__carousel__question">\n                                            <md-radio-group ng-model="question.value" id="radio" name="radio"\n                                                ng-required="{{question.required}}" required="{{question.required}}">\n                                                <md-radio-button ng-repeat="choice in question.choices"\n                                                    value="{{choice[0]}}" aria-label="{{choice[1]}}">\n                                                    <span>{{choice[1]}}</span>\n                                                </md-radio-button>\n                                            </md-radio-group>\n                                            <div ng-messages="currentFormController.radio.$error">\n                                                <div ng-message="required">{{question.error_messages.required}}</div>\n                                            </div>\n                                        </md-input-container>\n                                </div>\n                                <div ng-if="question.widget == \'Textarea\'">\n                                        <p class="survey-dialog__carousel__text">{{ studentSurveys.progress_copy | sprintf: ($index + 1):studentSurveys.fields.length}}</p>\n                                        <h1 class="survey-dialog__carousel__title">{{question.label}}</h1>\n                                        <md-input-container class="survey-dialog__carousel__question">\n                                            <label>{{ studentSurveyToast.survey_textarea_placeholder }}</label>\n                                            <textarea id="textarea" name="textarea"  md-maxlength="400"\n                                                ng-required="{{question.required}}" required="{{question.required}}"\n                                                ng-model="question.value" max-rows="4" md-select-on-focus></textarea>\n                                            <div ng-messages="currentFormController.textarea.$error">\n                                                <div ng-message="required">{{question.error_messages.required}}</div>\n                                            </div>\n                                        </md-input-container>\n                            </div>\n                        </form>\n                    </myg-slick-carousel>\n                </div>\n                <div class="survey-modal__footer">\n                    <md-button ng-click="DialogController.rewindSurvey()" class="footer__button-close eszett-button"\n                               aria-label="{{ studentSurveys.previous_label }}"\n                               ng-bind-html="studentSurveys.previous_label | unsafe">\n                    </md-button>\n                    <md-button ng-click="DialogController.advanceSurvey()" type="submit" \n                               ng-disabled="currentFormController.$invalid" data-test="{{currentFormController.$name}}" \n                               class="footer__button-next eszett-button" aria-label="{{ studentSurveys.next_label }}"\n                               ng-bind-html="studentSurveys.next_label | unsafe">\n                    </md-button>\n                </div>\n            </md-tab>\n\n            <md-tab label="Thank you">\n                <img ng-if="studentSurveys.bucket_finish_image_url !== \'\'" ng-src="{{ studentSurveys.bucket_finish_image_url }}" class="survey-modal__end__image" alt="" />\n                <div class="survey-modal__end">\n                    \x3c!-- <button class="action-close" ng-click="DialogController.submitSurvey(false)" aria-label="Close"><i class="material-icons icon--close" ></i></button> --\x3e\n                    <h1 class="survey-modal__end__title">{{ studentSurveys.finish_header }}</h1>\n                    <p>{{ studentSurveys.finish_copy }}</p>\n                    <div class="survey-modal__buttons-bar">\n                        <md-button class="md-button md-primary md-raised md-default-theme survey-modal__survey-cta"\n                                   aria-label="{{ studentSurveys.finish_dismiss_label }}"\n                                   ng-click="DialogController.submitSurvey(true)"\n                                   ng-bind-html="studentSurveys.finish_dismiss_label | unsafe">\n                        </md-button>\n                    </div>\n                </div>\n            </md-tab>\n        </md-tabs>\n\n    </md-dialog-content>\n</md-dialog>\n'
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    n(22), e.exports = function(e, t, n, s, o, r) {
        var a = this;
        this.submitStatusClass = !1, e.studentSurveys = t.studentSurveys, e.studentSurveyToast = t.studentSurveyToast, e.selectedIndex = 0, e.surveyProgress = 0, e.currentForm = "", t.ontouchmove = function(e) {
            var t = !0;
            e.target.classList && e.target.classList.contains("md-dialog-container") && (t = !1), t || e.preventDefault()
        }, a.noSurvey = function() {
            t.ontouchmove = null, s.cancel(), t.document.getElementsByTagName("html")[0].classList.remove("js-sidenav-open"), r.dismissForm({
                id: e.studentSurveys.id
            }).then(function() {
                a.submitStatusClass = !0, a.submitting = !1, s.cancel(), t.document.getElementsByTagName("html")[0].classList.remove("js-sidenav-open")
            }, function() {
                a.submitStatusClass = !1, a.submitting = !1, e.$new().resubmit = function(e) {
                    a.submit(e)
                }
            })
        }, a.takeSurvey = function() {
            e.selectedIndex = 1;
            var s = n[0].querySelector(".js-survey-dialog-carousel"),
                o = i.element(s).controller("mygSlickCarousel");
            a.slickCarousel = o.getCarouselElement(), a.slickCarousel.slick("unslick");
            if (s) {
                a.slickCarousel = t.$(s).slick({
                    dots: !1,
                    draggable: !1,
                    arrows: !1,
                    infinite: !1,
                    swipeToSlide: !1,
                    swipe: !1,
                    accessibility: !1,
                    touchMove: !1,
                    adaptiveHeight: !0
                }), a.slickCarousel.on("afterChange", a.onSurveySlideChanged), e.currentFormName = s.querySelectorAll(".slick-slide")[0].getAttribute("name"), a.onSurveySlideChanged(null, e.currentFormName, 0);
                var r = s.querySelectorAll(".slick-slide")[0];
                e.currentFormController = i.element(r).scope()[e.currentFormName]
            }
        }, a.rewindSurvey = function() {
            a.slickCarousel.slick("slickCurrentSlide") <= 0 ? e.selectedIndex = 0 : a.slickCarousel.slick("slickPrev")
        }, a.advanceSurvey = function() {
            var t = n[0].querySelector(".js-survey-dialog-carousel"),
                s = i.element(t).controller("mygSlickCarousel").getSlideCount(),
                o = a.slickCarousel.slick("slickCurrentSlide");
            e.surveyProgress = (o + 1) / s * 100, e.currentFormName = t.querySelectorAll(".slick-slide")[o].getAttribute("name");
            var r = t.querySelectorAll(".slick-slide")[o],
                l = i.element(r).scope()[e.currentFormName];
            !0 === l.$valid && (o === s - 1 ? e.selectedIndex = 2 : (a.slickCarousel.slick("slickNext"), e.currentFormController = l))
        }, a.onSurveySlideChanged = function(t, s, r) {
            var l = n[0].querySelector(".js-survey-dialog-carousel"),
                c = i.element(l).controller("mygSlickCarousel").getSlideCount(),
                u = a.slickCarousel.slick("slickCurrentSlide");
            e.surveyProgress = u / c * 100, e.currentFormName = l.querySelectorAll(".slick-slide")[r].getAttribute("name");
            var d = l.querySelectorAll(".slick-slide")[r];
            o(function() {
                e.currentFormController = i.element(d).scope()[e.currentFormName]
            }, 0)
        }, a.submitSurvey = function(n) {
            t.ontouchmove = null, a.submitting = !0, e.studentSurveys.completed = n, s.cancel(), t.document.getElementsByTagName("html")[0].classList.remove("js-sidenav-open"), r.submitForm(e.studentSurveys).then(function() {
                a.submitStatusClass = !0, a.submitting = !1
            }, function() {
                a.submitStatusClass = !1, a.submitting = !1, e.$new().resubmit = function(e) {
                    a.submit(e)
                }
            })
        }
    }, e.exports.$inject = ["$scope", "$window", "$document", "$mdDialog", "$timeout", "SurveyApiService"]
}, function(e, t, n) {
    "use strict";

    function i(e) {
        return (i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        })(e)
    }
    var s = function(e, t) {
        this.$http = e, this.$q = t
    };
    s.$inject = ["$http", "$q"], s.prototype.submitForm = function(e) {
        var t = this.$q.defer(),
            n = this.$window ? this.$window.baseUrl : "";
        return this.$http.post(n + "/api/formbox_survey", e).success(function(e) {
            "object" === i(e) ? t.resolve(e) : t.reject({})
        }).error(t.reject), t.promise
    }, s.prototype.dismissForm = function(e) {
        var t = this.$q.defer(),
            n = this.$window ? this.$window.baseUrl : "";
        return this.$http.post(n + "/api/formbox_survey/dismiss", e).success(function(e) {
            "object" === i(e) ? t.resolve(e) : t.reject({})
        }).error(t.reject), t.promise
    }, e.exports = s
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygBroadcast", [n(2).name]), e.exports.controller("mygBroadcastController", n(38)), e.exports.service("mygBroadcastApiService", n(39))
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t) {
        e.broadcastShowed = function() {
            window && window.dataLayer && window.dataLayer.push({
                eCat: "User",
                eAct: "broadcastToast",
                eLab: "showBroadcastToast",
                event: "GAevent"
            })
        }, e.broadcastClicked = function() {
            window && window.dataLayer && window.dataLayer.push({
                eCat: "User",
                eAct: "broadcastToast",
                eLab: "clickBroadcastToast",
                event: "GAevent"
            }), t.hide()
        }
    }, e.exports.$inject = ["$scope", "$mdToast"]
}, function(e, t, n) {
    "use strict";

    function i(e) {
        return (i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        })(e)
    }
    var s = function(e, t) {
        this.$http = e, this.$q = t
    };
    s.$inject = ["$http", "$q"], s.prototype.dismiss = function(e) {
        var t = this.$q.defer(),
            n = this.$window ? this.$window.baseUrl : "";
        return this.$http.post(n + "/api/broadcasts/dismiss", e).success(function(e) {
            "object" === i(e) ? t.resolve(e) : t.reject({})
        }).error(t.reject), t.promise
    }, e.exports = s
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygToaster", [n(2).name]), e.exports.directive("mygToaster", n(41))
}, function(e, t, n) {
    "use strict";
    var i = n(0),
        s = {
            hideDelay: "=?mygHideDelay",
            position: "@?mygPosition",
            templateUrl: "@?mygTemplateUrl",
            template: "@?mygTemplate",
            autoWrap: "=?mygAutoWrap",
            preserveScope: "=?mygPreserveScope",
            toastClass: "@?mygToastClass",
            controller: "@?mygController",
            locals: "=?mygLocals",
            scope: "=?mygScope",
            bindToController: "=?mygBindToController",
            resolve: "=?mygResolve",
            controllerAs: "@?mygControllerAs",
            parent: "=?mygParent",
            textContent: "@?mygTextContent",
            action: "@?mygAction",
            highlightAction: "=?mygHighlightAction",
            highlightClass: "@?mygHighlightClass",
            capsule: "=?mygCapsule",
            theme: "@?mygTheme",
            onShow: "&?mygOnShow",
            onHide: "&?mygOnHide",
            onRemove: "&?mygOnRemove"
        };
    e.exports = function(e, t, n) {
        return {
            restrict: "AEC",
            scope: i.extend({
                preset: "@?mygPreset",
                showDelay: "=?mygShowDelay",
                onInit: "&?mygOnInit"
            }, s),
            link: function(o) {
                var r = {
                    toaster: o
                };
                o.$mdToast = e;
                var a = i.isFunction(e[o.preset]) ? e[o.preset]() : {};
                i.forEach(s, function(e, t) {
                    var n = o[t];
                    void 0 !== n && (i.isFunction(a[t]) ? a[t](n) : a[t] = n)
                });
                var l = n.defer();
                o.promise = n.promise, o.show = function() {
                    return e.show(a).then(l.resolve, l.reject)
                }, o.showDelay ? t(o.show, o.showDelay) : !1 !== o.showDelay && o.show(), i.isFunction(o.onInit) && o.onInit(r)
            }
        }
    }, e.exports.$inject = ["$mdToast", "$timeout", "$q"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n) {
        return {
            restrict: "A",
            scope: {
                targetElementClass: "@mygScrollToTarget",
                scrollDuration: "@?mygScrollToDuration",
                targetOffset: "@?mygScrollToTargetOffset"
            },
            link: function(i, s) {
                var o;
                t(function() {
                    if (!(o = e.document.getElementsByClassName(i.targetElementClass)[0])) return console.info("Unable to initialise scroll-to directive. myg-scroll-to-target not found."), void s.css("display", "none")
                }), s.on("click", function() {
                    var t;
                    o = e.document.getElementsByClassName(i.targetElementClass)[0];
                    var s = i.scrollDuration ? parseInt(i.scrollDuration, 10) : void 0;
                    t = "sub-nav" === i.targetOffset ? -e.document.getElementsByClassName("sub-header-nav")[0].scrollHeight : i.targetOffset ? parseInt(i.targetOffset, 10) : 0, n.scrollToElement(o, s, "js-gbl-header", t).then(function(e) {
                        i.$emit("myg:scroll-to:complete", o, e)
                    })
                })
            }
        }
    }, e.exports.$inject = ["$window", "$timeout", "MygScrollToService"]
}, function(e, t, n) {
    "use strict";
    var i = function(e, t, n) {
        this.$window = e, this.$q = t, this.MygUtilsService = n
    };
    i.$inject = ["$window", "$q", "MygUtilsService"], i.prototype.defaultDuration = 500, i.prototype.triggerScrollAnimation = function(e, t) {
        var n, i = this,
            s = i.$q.defer(),
            o = Date.now(),
            r = i.$window.scrollY || i.$window.pageYOffset,
            a = i.MygUtilsService.easingFunctions.easeInOutCubic;
        return n = i.$window.requestAnimationFrame(function l() {
            var c, u = (Date.now() - o) / t;
            r < e ? (c = r + e * a(u), c = Math.min(e, c)) : (c = (e - r) * a(u) + r, c = Math.max(e, c)), i.$window.scrollTo(0, c), u >= 1 ? (i.$window.cancelAnimationFrame(n), s.resolve(c)) : i.$window.requestAnimationFrame(l)
        }), s.promise
    }, i.prototype.scrollToElement = function(e, t, n, i) {
        var s = (this.$window.scrollY || this.$window.pageYOffset) + e.getBoundingClientRect().top;
        if (t || (t = this.defaultDuration), i && (s += i), n) {
            var o = this.$window.document.getElementsByClassName(n);
            o && o[0] && (s -= o[0].offsetHeight)
        }
        return this.triggerScrollAnimation(s, t)
    }, e.exports = i
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = function(e, t) {
        return {
            restrict: "E",
            scope: {
                itemClass: "@?",
                itemTriggerClass: "@?",
                itemPanelClass: "@?",
                itemActiveClass: "@?",
                selectedItemId: "=?",
                itemDelayOnOpen: "=?",
                itemDelayOnClose: "=?",
                scrollToSelectedItem: "=?",
                openMultiplePanels: "@?",
                labelAriaOpened: "=?",
                labelAriaClosed: "=?"
            },
            controller: n(45),
            controllerAs: "AccordionController",
            bindToController: !0,
            link: function(n, s, o, r) {
                var a = i.isNumber(r.itemDelayOnOpen) ? r.itemDelayOnOpen : 400,
                    l = i.isNumber(r.itemDelayOnClose) ? r.itemDelayOnClose : 400,
                    c = !0;
                r.selectedItemId && i.isDefined(r.scrollToSelectedItem) && (c = r.scrollToSelectedItem), r.selectedItems = [];
                var u, d = null,
                    p = !1,
                    m = i.element(s[0].querySelectorAll(r.options.itemTriggerClass));

                function h(n) {
                    var o = s[0].querySelector("#" + n);
                    if (!o) return !1;
                    ! function(n) {
                        if (!n.length) return !1;
                        g(n, r.labelAriaOpened);
                        var i = v(n),
                            s = t.getElementHeight(i[0]),
                            o = [].slice.call(i[0].children),
                            l = 0,
                            u = s;
                        i.css({
                            display: "block",
                            height: "0px"
                        }), o.length && (l = o.map(function(e) {
                            var t = e.getBoundingClientRect(),
                                n = Math.round(t.bottom - t.top);
                            return n
                        }).reduce(function(e, t) {
                            return e + t
                        }), u = l);
                        window.getComputedStyle(i[0]).opacity;
                        null;
                        i.css("height", u + 40 + "px"), e(function() {
                            n.addClass(r.options.itemActiveClass), d = n, p = !1, c && r.scrollToElement(d[0]), c = !0
                        }, a), p = !0
                    }(i.element(t.getParent(o, r.options.itemClass)))
                }

                function f(e) {
                    (13 === e.which || "click" === e.type && !1 === i.element(e.target).hasClass("js-accordion__ignore-click")) && function(e) {
                        if (p) return !1;
                        var i = t.getParent(e.target, r.options.itemClass).getAttribute("id");
                        u = !0, r.openMultiplePanels || -1 !== r.selectedItems.indexOf(i) ? -1 === r.selectedItems.indexOf(i) ? r.selectedItems.push(i) : r.selectedItems.splice(r.selectedItems.indexOf(i), 1) : r.selectedItems = [i];
                        n.$apply()
                    }(e)
                }

                function v(e) {
                    var t = r.options.itemPanelClass,
                        n = e[0].querySelector(t);
                    return i.element(n)
                }

                function g(e, t) {
                    e[0].querySelector("i").setAttribute("aria-label", t)
                }
                m.on("click keypress", f), n.$on("$destroy", function() {
                    m.off("click keypress", f), m = null
                }), n.$root.$on("myg-open-topic-header", function() {
                    r.scrollToElement(d[0])
                }), n.$watchCollection("AccordionController.selectedItems", function(n, o) {
                    o.forEach(function(o) {
                        -1 === n.indexOf(o) && function(n) {
                            var o = s[0].querySelector("#" + n);
                            if (!o) return !1;
                            ! function(n) {
                                var i = v(n),
                                    s = t.getElementHeight(i[0]);
                                i.css("height", s + "px");
                                window.getComputedStyle(i[0]).opacity;
                                null, i.css("height", "0px");
                                g(n, r.labelAriaClosed), e(function() {
                                    n.removeClass(r.options.itemActiveClass), i.removeAttr("style"), p = !1
                                }, l), p = !0
                            }(i.element(t.getParent(o, r.options.itemClass)))
                        }(o)
                    }), e(function() {
                        u = !0, n.forEach(function(e) {
                            -1 === o.indexOf(e) && h(e)
                        })
                    }, u ? 0 : 1e3)
                }), r.selectedItemId && (r.selectedItems = [r.selectedItemId], e(function() {
                    u = !0, h(r.selectedItemId)
                }, u ? 0 : 1e3))
            }
        }
    }, e.exports.$inject = ["$timeout", "MygUtilsService"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t) {
        var n = {
            itemClass: this.itemClass ? this.itemClass : ".js-accordion-item",
            itemTriggerClass: ".js-accordion-title",
            itemPanelClass: ".js-accordion-item-panel",
            itemActiveClass: "accordion__item--is-active"
        };
        this.options = {
            itemClass: this.itemClass ? this.itemClass : n.itemClass,
            itemTriggerClass: this.itemTriggerClass ? this.itemTriggerClass : n.itemTriggerClass,
            itemPanelClass: this.itemPanelClass ? this.itemPanelClass : n.itemPanelClass,
            itemActiveClass: this.itemActiveClass ? this.itemActiveClass : n.itemActiveClass
        }, this.scrollToElement = function(n) {
            e("(max-width: 1071px)") && t.scrollToElement(n, void 0, "js-gbl-header-wrapper", -80)
        }
    }, e.exports.$inject = ["$mdMedia", "MygScrollToService"]
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygSkipToExamButtonComponent", [n(2).name]), e.exports.directive("mygSkipToExamButton", n(47))
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "A",
            scope: {
                customOnClick: "&",
                preventDialog: "="
            },
            link: function(t, n) {
                n[0].addEventListener("click", function(i) {
                    t.customOnClick && t.customOnClick(), t.preventDialog || e.show({
                        targetEvent: i,
                        openFrom: n,
                        bindToController: !0,
                        clickOutsideToClose: !0,
                        escapeToClose: !0,
                        templateUrl: "myg-skip-to-exam-dialog",
                        controllerAs: "skipToExamCtrl",
                        controller: function() {
                            this.hideDialog = e.hide
                        }
                    })
                })
            }
        }
    }, e.exports.$inject = ["$mdDialog"]
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygIpsosSurveyComponent", [n(2).name]), e.exports.directive("mygIpsosSurvey", n(49)), e.exports.service("mygIpsosSurveyService", n(50)), e.exports.controller("mygIpsosSurveyToastController", n(51)), e.exports.controller("mygIpsosSurveyDialogController", n(52)), e.exports.constant("MYG_IPSOS_API_URL", "/api/ipsos_survey/action"), e.exports.constant("USER_DISMISSED_SURVEY", "dismissed"), e.exports.constant("USER_OPENED_SURVEY", "progressed")
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n) {
        return {
            restrict: "E",
            scope: {
                surveyId: "@mygIpsosSurveyId",
                xsrfToken: "@mygIpsosSurveyXsrf"
            },
            link: function(i) {
                n.init(i.surveyId, i.xsrfToken);
                var s = e.show({
                    hideDelay: 0,
                    templateUrl: "myg-ipsos-survey-toast",
                    position: "bottom right",
                    onComplete: function() {
                        t && t.dataLayer && t.dataLayer.push({
                            eCat: "User",
                            eAct: "surveyToast",
                            eLab: "showSurveyToast",
                            event: "GAevent"
                        })
                    },
                    controllerAs: "ipsosSurveyToastCtrl",
                    controller: "mygIpsosSurveyToastController"
                });
                n.handleUiDismissal(s)
            }
        }
    }, e.exports.$inject = ["$mdToast", "$window", "mygIpsosSurveyService"]
}, function(e, t, n) {
    "use strict";
    var i = function(e, t, n, i, s) {
        this.$http = e, this.$q = t, this.MYG_IPSOS_API_URL = n, this.USER_DISMISSED_SURVEY = i, this.USER_OPENED_SURVEY = s
    };
    i.$inject = ["$http", "$q", "MYG_IPSOS_API_URL", "USER_DISMISSED_SURVEY", "USER_OPENED_SURVEY"];
    var s = function(e) {
        var t = this.$q.defer(),
            n = {
                id: this.surveyId,
                xsrf_token: this.xsrfToken,
                state: e
            };
        return this.$http.post(this.MYG_IPSOS_API_URL, n).success(t.resolve).error(t.reject), t.promise
    };
    i.prototype.init = function(e, t) {
        this.surveyId = e, this.xsrfToken = t
    }, i.prototype.trackSurveyOpened = function() {
        return s.bind(this)(this.USER_OPENED_SURVEY)
    }, i.prototype.handleUiDismissal = function(e) {
        e.then(function(e) {
            e && s.bind(this)(this.USER_DISMISSED_SURVEY)
        }.bind(this), s.bind(this, this.USER_DISMISSED_SURVEY))
    }, e.exports = i
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n) {
        this.dismiss = function() {
            e.hide(!0)
        }, this.openDialog = function(i) {
            e.hide(!1);
            var s = t.show({
                escapeToClose: !1,
                disableParentScroll: !1,
                clickOutsideToClose: !1,
                targetEvent: i,
                bindToController: !0,
                controllerAs: "dialogController",
                templateUrl: "myg-ipsos-survey-dialog",
                controller: "mygIpsosSurveyDialogController"
            });
            n.handleUiDismissal(s)
        }
    }, e.exports.$inject = ["$mdToast", "$mdDialog", "mygIpsosSurveyService"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t) {
        this.dismiss = function() {
            e.hide(!0)
        }, this.openSurvey = function() {
            e.hide(!1), t.trackSurveyOpened()
        }
    }, e.exports.$inject = ["$mdDialog", "mygIpsosSurveyService"]
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygExampleComponent", []), e.exports.directive("mygFeedback", n(54))
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "A",
            link: function(t, n) {
                var i = e.get("feedback"),
                    s = {
                        productId: i.productId,
                        locale: i.locale,
                        bucket: i.bucket
                    };
                n.on("click", function(e) {
                    e.preventDefault(), userfeedback.api.startFeedback(s)
                })
            }
        }
    }, e.exports.$inject = ["bootstrapData"]
}, function(e, t, n) {
    "use strict";

    function i(e) {
        switch (e) {
            case "animation":
                return void 0 !== document.body.style.animationName;
            case "touch":
                return "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0
        }
    }
    e.exports = function(e) {
        window.MSInputMethodContext && document.documentMode && (document.body.classList.add("is-ie11"), e.isIe11 = !0), i("animation") || document.body.classList.add("no-animation"), window.StyleMedia && document.body.classList.add("is-edge");
        for (var t = ["enroll-success", "enroll-confirmation"], n = 0; n < t.length; n++) {
            var s = t[n];
            if (-1 !== location.search.indexOf(s)) {
                var o = new RegExp(s + "(=[^&]*)&?"),
                    r = new RegExp(/[?|&]*$/),
                    a = location.href.replace(o, "");
                history.replaceState({}, "", a.replace(r, ""))
            }
        }
        if (i("touch")) {
            document.body.classList.add("is-touch"), e.isTouch = !0;
            try {
                for (var l in document.styleSheets)
                    if (l) {
                        var c = document.styleSheets[l];
                        if (!c.rules) continue;
                        for (var u = c.rules.length - 1; u >= 0; u--) c.rules[u].selectorText && c.rules[u].selectorText.match(":hover") && c.deleteRule(u)
                    }
            } catch (e) {}
        }
        Array.prototype.findIndex || Object.defineProperty(Array.prototype, "findIndex", {
            value: function(e) {
                if (null == this) throw new TypeError('"this" is null or not defined');
                var t = Object(this),
                    n = t.length >>> 0;
                if ("function" != typeof e) throw new TypeError("predicate must be a function");
                for (var i = arguments[1], s = 0; s < n;) {
                    var o = t[s];
                    if (e.call(i, o, s, t)) return s;
                    s++
                }
                return -1
            },
            configurable: !0,
            writable: !0
        })
    }, e.exports.$inject = ["$rootScope"]
}, function(e, t, n) {
    "use strict";
    var i = function(e, t, n) {
        this.$http = e, this.$timeout = t, this.baseUrl = n.get("baseUrl") || "", this.bootstrapData = n
    };
    i.$inject = ["$http", "$timeout", "bootstrapData"], i.prototype = {
        defaults: {
            sessionTimeout: 126e5
        },
        startSessionTimeout: function(e) {
            return this.$timeout(this.refresh.bind(this), e || this.defaults.sessionTimeout)
        },
        refresh: function() {
            if (!this.bootstrapData.get("xsrf_token")) throw new Error("Unable to refresh xsrf token as xsrf_token is undefined");
            if (!this.bootstrapData.get("xsrf_action")) throw new Error("Unable to refresh xsrf token as xsrf_action is undefined");
            return this.$http({
                method: "POST",
                url: this.baseUrl + "/api/student/refresh-token",
                data: {
                    action: this.bootstrapData.get("xsrf_action"),
                    xsrf_token: this.bootstrapData.get("xsrf_token")
                }
            }).then(function(e) {
                return this.bootstrapData.update("xsrf_token", e.data.xsrf_token), e
            }.bind(this))
        }
    }, e.exports = i
}, function(e, t, n) {
    "use strict";
    var i, s = function() {
        if (!i) {
            i = window.__data__;
            var e = document.getElementById("__data__");
            window.__data__ && delete window.__data__, e && e.parentNode.removeChild(e)
        }
    };
    s.prototype = {
        get: function(e) {
            return !(!i || !i[e]) && i[e]
        },
        update: function(e, t) {
            if (i && i[e]) return !!(i[e] = t);
            throw new Error(e + " not found in bootstrapData")
        }
    }, e.exports = s
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        return {
            restrict: "A",
            link: function(e, t) {
                var n, i = "Webkit Moz O ms".split(" ");
                n = function(e) {
                    var t = document.createElement("div"),
                        n = t.style,
                        s = e.charAt(0).toUpperCase() + e.slice(1),
                        o = (e + " " + i.join(s + " ") + s).split(" ");
                    for (var r in o)
                        if (r && void 0 !== n[o[r]]) return t = null, !0;
                    return t = null, !1
                }("flexWrap") ? "flexwrap" : "no-flexwrap", t.addClass(n)
            }
        }
    }
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        return {
            restrict: "A",
            link: function(e, t) {
                var n = function() {
                    var e = " -webkit- -moz- -o- -ms- ".split(" "),
                        t = document.createElement("div");
                    t.style.cssText = e.join("filter: blur(2px);");
                    var n = !!t.style.length && (void 0 === document.documentMode || document.documentMode > 9);
                    return t = null, n
                }() ? "cssfilters" : "no-cssfilters";
                t.addClass(n)
            }
        }
    }
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        var t, n, i = {
            callbacks: {},
            on: function(e, t) {
                this.callbacks[e] ? this.callbacks[e].push(t) : this.callbacks[e] = [t]
            },
            off: function(e) {
                for (var t in this.callbacks) this.callbacks[t].indexOf(e) > -1 && this.callbacks[t].splice(this.callbacks[t].indexOf(e), 1)
            },
            emit: function(e) {
                var t = [].slice.call(arguments, 1);
                if (this.callbacks[e])
                    for (var n = 0; n < this.callbacks[e].length; n++) this.callbacks[e][n].apply(null, t)
            }
        };
        return angular.element(e).bind("resize", function() {
            t && clearTimeout(t), t = setTimeout(function() {
                n = !1, i.emit("resizeChange", n)
            }, 200), n || (n = !0, i.emit("resizeChange", n))
        }), {
            restrict: "A",
            link: function(e, t) {
                function n(e) {
                    t[(e ? "add" : "remove") + "Class"]("windowIsResizing")
                }
                i.on("resizeChange", n), t.on("$destroy", function() {
                    i.off(n)
                })
            }
        }
    }, e.exports.$inject = ["$window"]
}, function(e, t, n) {
    "use strict";
    var i = function(e) {
        this.$el = e, this.init()
    };
    i.prototype = {
        init: function() {
            this.$el.onclick = this.onclick.bind(this)
        },
        onclick: function(e) {
            this.cleanup(), this.positionRipple(e), this.setClasses()
        },
        cleanup: function() {
            this.$el.classList.remove("btn--ripple"), this.wrapper && (this.unwrapContent(), delete this.wrapper), this.stylesheet && (this.stylesheet.parentNode.removeChild(this.stylesheet), delete this.stylesheet), this.timer && clearTimeout(this.timer)
        },
        positionRipple: function(e) {
            var t = e.target.getBoundingClientRect(),
                n = {
                    x: 0,
                    y: 0
                };
            n.x = e.clientX - t.left, n.y = e.clientY - t.top;
            var i = ".btn--ripple:after { top: " + n.y + "px !important; left: " + n.x + "px !important; }";
            this.stylesheet = document.createElement("style"), this.stylesheet.type = "text/css", this.stylesheet.styleSheet ? this.stylesheet.styleSheet.cssText = i : this.stylesheet.appendChild(document.createTextNode(i)), (document.head || document.getElementsByTagName("head")[0]).appendChild(this.stylesheet)
        },
        setClasses: function() {
            this.$el.classList.add("btn--ripple"), this.timer = setTimeout(this.cleanup.bind(this), 750)
        },
        wrapContent: function() {
            for (this.wrapper = document.createElement("div"), this.wrapper.style["z-index"] = 2, this.wrapper.style.position = "relative"; this.$el.childNodes.length > 0;) this.wrapper.appendChild(this.$el.childNodes[0]);
            this.$el.appendChild(this.wrapper)
        },
        unwrapContent: function() {
            for (var e = document.createDocumentFragment(); this.wrapper.firstChild;) {
                var t = this.wrapper.removeChild(this.wrapper.firstChild);
                e.appendChild(t)
            }
            this.wrapper.parentNode.replaceChild(e, this.wrapper)
        }
    }, e.exports = function() {
        return {
            restrict: "A",
            compile: function() {
                return function(e, t) {
                    new i(t[0])
                }
            }
        }
    }
}, function(e, t, n) {
    "use strict";
    e.exports = {
        LESSON_COMPLETED: "myg-lesson--lesson-completed",
        LESSON_VIEWED: "myg-lesson--lesson-viewed",
        LESSON_BOOKMARKED: "myg-lesson--lesson-bookmarked",
        ACTION_PLAN_PROGRESS_UPDATE: "myg-action-plan--progress-update",
        ACTION_PLAN_STATUS_CHANGE: "myg-action-plan--status-change",
        YOUTUBE_PLAYER_API_LOADED: "myg-youtube-player--api-loaded",
        YOUTUBE_PLAYER_PLAY: "myg-youtube-player--play"
    }
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t) {
        e.startSymbol("{["), e.endSymbol("]}"), t.definePalette("mygPrimary", t.extendPalette("pink", {
            500: "00BFA5",
            600: "00E8C8"
        })), t.definePalette("mygSecondary", t.extendPalette("blue", {
            A200: "4054B2"
        })), t.theme("default").primaryPalette("mygPrimary").accentPalette("mygSecondary"), t.definePalette("mygFab", t.extendPalette("grey", {
            500: "FAFAFA",
            600: "EEEEEE"
        })), t.theme("mygFABs").primaryPalette("mygFab"), "serviceWorker" in navigator && "https:" === window.location.protocol && navigator.serviceWorker.register("/static/js/myg-service-worker.js").then(function(e) {
            console.info("ServiceWorker::registered", e)
        }).catch(function(e) {
            console.error("ServiceWorker::error", e)
        })
    }, e.exports.$inject = ["$interpolateProvider", "$mdThemingProvider"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return function(t) {
            return e.trustAsResourceUrl("#" + t)
        }
    }, e.exports.$inject = ["$sce"]
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        function e(e) {
            return isFinite(e) ? e.toString(10) : e
        }
        return function() {
            return function(e, t) {
                return e.replace(/\B(\$(\d+))\b(?![\.,]\d)/gi, function(e, n, i) {
                    return t[i - 1] || ""
                })
            }(Array.prototype.slice.call(arguments, 0, 1)[0], Array.prototype.slice.call(arguments, 1).map(e))
        }
    }
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return function(t) {
            var n = "<strong>" + t + "</strong>";
            return e.trustAsHtml(n)
        }
    }, e.exports.$inject = ["$sce"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return e.trustAsHtml
    }, e.exports.$inject = ["$sce"]
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        function t(e) {
            return isFinite(e) ? e.toString(10) : e
        }
        return function() {
            return function(t, n) {
                return t.replace(/\B(\$(\d+))\b(?![\.,]\d)/gi, function(t, i, s) {
                    var o = n[s - 1] || "";
                    return "string" == typeof o && "" !== o && isNaN(o) && (o = e("bold")(o)), o
                })
            }(Array.prototype.slice.call(arguments, 0, 1)[0], Array.prototype.slice.call(arguments, 1).map(t))
        }
    }, e.exports.$inject = ["$filter"]
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        return function(e, t, n) {
            return isNaN(t) && (t = 10), void 0 === n && (n = "..."), e.length <= t || e.length - n.length <= t ? e : String(e).substring(0, t - n.length) + n
        }
    }
}, , , , function(e, t) {
    e.exports = window.$
}, , , , , , function(e, t, n) {
    "use strict";
    var i = function(e, t, n) {
        this.$http = e, this.$q = t, this.baseUrl = n ? n.baseUrl : ""
    };
    i.$inject = ["$http", "$q", "$window"], i.prototype.sendData = function(e, t) {
        var n = this.$q.defer(),
            i = {
                xsrf_token: e.dataXsrfToken,
                student: t
            };
        return this.$http.post(this.baseUrl + "/api/student", i).success(n.resolve).error(n.reject), n.promise
    }, i.prototype.unenrollStudent = function(e) {
        var t = this.$q.defer(),
            n = {
                xsrf_token: e.unenrollXsrfToken
            };
        return this.$http.post(this.baseUrl + "/api/student/unenroll", n).success(t.resolve).error(t.reject), t.promise
    }, e.exports = i
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("Carousel", [n(2).name, n(4).name, n(1).name]);
    var s = n(81);
    e.exports.directive("carousel", s.carousel), e.exports.directive("carouselItem", s.item), e.exports.directive("carouselExternalDescription", s.externalDescription), e.exports.controller("carouselController", n(84))
}, function(e, t, n) {
    "use strict";
    e.exports = {
        carousel: function() {
            return {
                restrict: "E",
                template: n(82),
                controllerAs: "ctrl",
                transclude: !0,
                replace: !0,
                scope: {
                    smallItems: "=",
                    mediumItems: "=",
                    largeItems: "=",
                    items: "=",
                    touch: "=",
                    selectable: "=",
                    navigation: "=",
                    centeredSlides: "=",
                    pagination: "=",
                    touchSnap: "@",
                    touchAcceleration: "=",
                    justifyContent: "@"
                },
                bindToController: {
                    startIndex: "="
                },
                compile: function(e, t) {
                    ! function(e, t) {
                        for (var n in e) t[n] || (t[n] = e[n])
                    }({
                        smallItems: "1",
                        mediumItems: "2",
                        largeItems: "3",
                        items: "4",
                        touch: "true",
                        selectable: "false",
                        navigation: "true",
                        centeredSlides: "false",
                        pagination: "false",
                        touchAcceleration: "1.25",
                        touchSnap: "bidirectional",
                        justifyContent: "flex-start"
                    }, t)
                },
                controller: "carouselController"
            }
        },
        item: function() {
            return {
                restrict: "E",
                require: ["carouselItem", "^carousel"],
                template: n(83),
                controllerAs: "ctrl",
                transclude: !0,
                scope: !0,
                replace: !0,
                link: function(e, t, n, i) {
                    i[0].parentCtrl = i[1], i[1].items.push(i[0]), i[0].index = i[1].items.indexOf(i[0]), "xlarge" === i[1].breakpoint && i[1].startIndex ? i[1].set(i[1].startIndex) : i[1].set(0), i[1].setJustifyContent()
                },
                controller: ["$element", function(e) {
                    this.$element = e, this.onClick = function() {
                        this.active || this.parentCtrl.onItemClick(this)
                    }
                }]
            }
        },
        externalDescription: function() {
            return {
                restrict: "E",
                require: "^carouselItem",
                replace: !0,
                transclude: !0,
                template: "<span></span>",
                link: function(e, t, n, i, s) {
                    s(e, function(e) {
                        i.$externalDescription = e
                    })
                }
            }
        }
    }
}, function(e, t) {
    e.exports = '<div class="content__container--full-width carousel__container">\n    <div class="content__wrapper">\n        <div class="carousel carousel--col-{[ items ]} carousel--col-lg-{[ largeItems ]} carousel--col-md-{[ mediumItems ]} carousel--col-sm-{[ smallItems ]}">\n            <div class="carousel__wrapper" id="carousel" aria-label="carousel" role="list" ng-transclude></div>\n            <nav class="carousel__nav" ng-if="navigation && ctrl.items.length > ctrl.columns()" aria-controls="carousel">\n                <button class="carousel__nav__link carousel__nav__link--next" ng-click="ctrl.next($event);" ng-if="ctrl.index < ctrl.maxIndex()" aria-label="Next"><i class="material-icons">chevron_right</i></button>\n                <button class="carousel__nav__link carousel__nav__link--prev" ng-click="ctrl.prev($event);" ng-if="ctrl.index > 0" aria-label="Previous"><i class="material-icons">chevron_left</i></button>\n            </nav>\n        </div>\n        <div class="carousel__pagination" ng-if="pagination">\n            <span>{[ctrl.index + 1]}&#47;{[ctrl.items.length]}</span>\n        </div>\n    </div>\n</div>\n'
}, function(e, t) {
    e.exports = "<div class=\"carousel__item\" ng-click=\"ctrl.onClick($event);\" ng-class=\"{'carousel__item--active': ctrl.active, 'carousel__item--out-of-view': ctrl.outsideView, 'carousel__item--current': ctrl.index == ctrl.parentCtrl.index, 'carousel__item--current-minus-1': ctrl.index == ctrl.parentCtrl.index - 1, 'carousel__item--current-minus-3': ctrl.index == ctrl.parentCtrl.index - 3, 'carousel__item--current-minus-5': ctrl.index == ctrl.parentCtrl.index - 5, 'carousel__item--current-plus-1': ctrl.index == ctrl.parentCtrl.index + 1, 'carousel__item--current-plus-3': ctrl.index == ctrl.parentCtrl.index + 3}\" aria-label=\"Carousel item {[ ctrl.index + 1 ]} of {[ ctrl.parentCtrl.items.length ]}\" role=\"listitem\" aria-hidden=\"{[ ctrl.outsideView ? 'true' : 'false' ]}\">\n    <div class=\"carousel__item__contents\" ng-transclude></div>\n</div>\n"
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n, i, s, o, r) {
        var a = t[0].querySelector(".carousel__wrapper"),
            l = "rtl" === i[0].dir;
        angular.extend(this, {
            breakpoint: o.breakpoint,
            items: [],
            index: 0,
            pos: 0,
            maxIndex: function() {
                if (e.centeredSlides) return this.items.length - 1;
                var t = this.columns();
                return this.items.length > t ? this.items.length - t : 0
            },
            columns: function() {
                return "xlarge" === this.breakpoint ? e.items : e[this.breakpoint + "Items"]
            },
            set: function(t) {
                if (t < 0 && (t = 0), e.selectable) {
                    for (var n = 0; n < this.items.length; n++) this.items[n].active = !1;
                    this.items[t] && (this.items[t].active = !0), this.items[t] && this.items[t].$externalDescription && this._setExternalDescription(this.items[t].$externalDescription)
                }
                t > this.maxIndex() && (t = this.maxIndex()), this.index = t;
                var i = this._getPos();
                a.style.webkitTransform = i, a.style.msTransform = i, a.style.transform = i, this.setInview()
            },
            next: function() {
                this.set(this.index + 1)
            },
            prev: function() {
                this.set(this.index - 1)
            },
            onItemClick: function(t) {
                e.selectable && this.set(t.index)
            },
            setInview: function() {
                for (var t = 0; t < this.items.length; t++) e.centeredSlides ? t > this.index + 2 || t < this.index - 2 ? this.items[t].outsideView = !0 : this.items[t].outsideView = !1 : t >= this.index && t < this.columns() + this.index ? this.items[t].outsideView = !1 : this.items[t].outsideView = !0
            },
            setJustifyContent: function() {
                this.items.length < this.columns() ? a.style.justifyContent = e.justifyContent : a.style.justifyContent = null
            },
            _getPos: function() {
                return this.pos = -Math.abs(this.index * this._itemWidth()), l && (this.pos = this.pos - 2 * this.pos), e.centeredSlides && (this.pos = this.pos + (this._containerWidth() - this._itemWidth()) / 2), "translateX(" + this.pos + "px)"
            },
            _itemWidth: function() {
                return this.items[this.index] ? this.items[this.index].$element.outerWidth() : 0
            },
            _containerWidth: function() {
                return a ? a.offsetWidth : 0
            },
            _setExternalDescription: function(e) {
                this.$externalDescription && this.$externalDescription.remove(), angular.element(a).after(e), this.$externalDescription = e
            }
        }), angular.element(n).bind("resize", s.debounce(function() {
            var e = this._getPos();
            a.style.webkitTransform = e, a.style.msTransform = e, a.style.transform = e
        }.bind(this), 100)), o.on(function(t) {
            this.breakpoint = t, this.set(this.index), this.setJustifyContent(), e.$apply()
        }.bind(this)), e.touch && (angular.extend(this, {
            touchStart: function(e) {
                this._drag = {
                    dragging: !1,
                    touchStart: e.touches[0].clientX,
                    direction: !1,
                    position: 0
                }
            },
            touchMove: function(t) {
                var n = t.touches[0].clientX;
                if (!(Math.abs(this._drag.touchStart - n) < 50)) {
                    r.disabled || r.disable(), this._drag.direction = n > this._drag.touchStart ? "left" : "right", this._drag.dragging || (a.classList.add("carousel__wrapper--dragging"), this._drag.dragging = !0);
                    var i = (this._drag.touchStart - n) * parseFloat(e.touchAcceleration),
                        s = i - 2 * i;
                    this._drag.position = this.pos + s, (this._drag.position > 0 && !l || this._drag.position < 0 && l) && (this._drag.position = 0);
                    var o = -Math.abs(this.maxIndex() * this._itemWidth());
                    l && (o = Math.abs(o)), (this._drag.position < o && !l || this._drag.position > o && l) && (this._drag.position = o);
                    var c = "translateX(" + this._drag.position + "px)";
                    a.style.webkitTransform = c, a.style.msTransform = c, a.style.transform = c
                }
            },
            touchEnd: function() {
                if (r.disabled && r.enable(), this._drag.dragging) {
                    this._drag.dragging = !1, a.classList.remove("carousel__wrapper--dragging"), a.style.webkitTransform = null, a.style.msTransform = null, a.style.transform = null;
                    var t = l ? "floor" : "ceil",
                        n = l ? "ceil" : "floor",
                        i = "bidirectional" === e.touchSnap ? "round" : "right" === this._drag.direction ? t : n;
                    this.set(Math[i](Math.abs(this._drag.position) / this._itemWidth())), e.$apply()
                }
            }
        }), t[0].addEventListener("touchstart", this.touchStart.bind(this)), t[0].addEventListener("touchmove", this.touchMove.bind(this)), t[0].addEventListener("touchend", this.touchEnd.bind(this)))
    }, e.exports.$inject = ["$scope", "$element", "$window", "$document", "MygUtilsService", "breakpoints", "disableScroll"]
}, , , , , , , , , , , , , , function(e, t, n) {
    "use strict";
    e.exports = function() {
        return {
            scope: !0,
            controllerAs: "valCertCtrl",
            restrict: "A",
            controller: n(99),
            bindToController: {
                mygStatusId: "@",
                student: "=",
                xsrfToken: "@",
                isValidationCertificateFeatureActive: "=",
                nameHasBeenValidated: "=",
                assessmentPassed: "=?"
            }
        }
    }
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n) {
        var i = this;

        function s() {
            i.nameHasBeenValidated = !0, i.fullname = i.student.name + " " + i.student.lastName, i.initConditions(), t.$broadcast("mygNameHasBeenValidated", {
                val: !0,
                student: i.student
            })
        }

        function o(e) {
            console.log("error on ProfileApi: ", e)
        }
        i.student && (i.fullname = i.student.name + " " + i.student.lastName), i.showCtaButton = function() {
            return "certfication_completed" !== i.mygStatusId || "certfication_completed" === i.mygStatusId && i.isValidationCertificateFeatureActive && i.nameHasBeenValidated || "certfication_completed" === i.mygStatusId && !i.isValidationCertificateFeatureActive
        }, i.showValidateButton = function() {
            return i.isValidationCertificateFeatureActive && "certfication_completed" === i.mygStatusId && !i.nameHasBeenValidated
        }, i.showShareToProfileButton = function() {
            return i.isValidationCertificateFeatureActive && i.nameHasBeenValidated || !i.isValidationCertificateFeatureActive
        }, i.validateName = function() {
            n.sendData({
                dataXsrfToken: i.xsrfToken
            }, i.student, !1).then(s, o)
        }, i.initConditions = function() {
            i.showPostAssessmentScoreWrap = !i.assessmentPassed || !i.isValidationCertificateFeatureActive && i.assessmentPassed || i.isValidationCertificateFeatureActive && !i.nameHasBeenValidated && i.assessmentPassed, i.showPostAssessmentIntroWrap = !i.isValidationCertificateFeatureActive || i.isValidationCertificateFeatureActive && i.nameHasBeenValidated || !i.assessmentPassed, i.showValidationNameForm = i.isValidationCertificateFeatureActive && !i.nameHasBeenValidated && i.assessmentPassed, i.showBucketImage = i.isValidationCertificateFeatureActive && i.nameHasBeenValidated && i.assessmentPassed, i.showCardTitle = !i.assessmentPassed || !i.isValidationCertificateFeatureActive && i.assessmentPassed, i.showSuccessTitle = i.isValidationCertificateFeatureActive && i.nameHasBeenValidated && i.assessmentPassed, i.showDownloadCardText = i.isValidationCertificateFeatureActive && i.nameHasBeenValidated && i.assessmentPassed, i.confirmNameText = i.isValidationCertificateFeatureActive && !i.nameHasBeenValidated && i.assessmentPassed, i.showCardText = !i.isValidationCertificateFeatureActive && i.assessmentPassed || !i.assessmentPassed
        }, i.initConditions()
    }, e.exports.$inject = ["$scope", "$rootScope", "ProfileAPI"]
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        return {
            restrict: "A",
            controller: n(101),
            controllerAs: "certCtrl",
            scope: !0,
            bindToController: !0
        }
    }
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        this.hours = 0, this.minutes = 0, this.seconds = 0, this.showTimestamp = !1;
        var t = this;
        e.$watch("time", function() {
            var n = parseFloat(e.time);
            t.timer(n)
        }), this.timer = function(e) {
            var n = Date.now() + 1e3 * e,
                i = setInterval(function() {
                    var e = Math.round((n - Date.now()) / 1e3);
                    e <= 0 && (clearInterval(i), window.location.reload()), t.displayTimeLeft(e)
                }, 1e3)
        }, this.displayTimeLeft = function(n) {
            t.showTimestamp = !0, e.$apply(function() {
                var e = Math.floor(n / 86400);
                t.hours = t.addZeroPadding(Math.floor(n % 86400 / 3600) + 24 * e, 2), t.minutes = t.addZeroPadding(Math.floor(n % 86400 % 3600 / 60), 2), t.seconds = t.addZeroPadding(n % 60, 2)
            })
        }, this.addZeroPadding = function(e, t) {
            for (var n = e + ""; n.length < t;) n = "0" + n;
            return n
        }
    }, e.exports.$inject = ["$scope"]
}, , , , , , , function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n) {
        return {
            restrict: "A",
            link: function(i, s) {
                var o, r = e.get("enroll_xsrf_token"),
                    a = e.get("enroll_api_endpoint"),
                    l = e.get("login_enroll_flow_endpoint"),
                    c = e.get("is_student_logged_in");
                s.on("click", function(e) {
                    e.preventDefault(), c || (location.href = l), o || (o = !0, s.addClass("btn--disabled").prop("disabled", !0), t.post(a, {
                        xsrf_token: r
                    }).then(function() {
                        -1 !== location.href.search("enroll-success=1") ? location.reload() : location.href += (location.search ? "&" : "?") + "enroll-success=1"
                    }, function() {
                        s.removeClass("btn--disabled").prop("disabled", !1), o = !1, n.show({
                            templateUrl: "added-failure",
                            position: "top center",
                            hideDelay: 3e3,
                            toastClass: "myg-toast"
                        })
                    }))
                })
            }
        }
    }, e.exports.$inject = ["bootstrapData", "$http", "$mdToast"]
}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("CustomSelect", []), e.exports.directive("customSelect", n(110))
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "A",
            template: n(111),
            controllerAs: "ctrl",
            transclude: !0,
            replace: !0,
            scope: {
                value: "=",
                options: "=?"
            },
            link: function(e, t) {
                e.options = e.options || Array.prototype.slice.call(t[0].querySelectorAll("option")).map(function(e) {
                    return {
                        label: e.textContent,
                        value: e.value
                    }
                }), e.$watch("value", function(t) {
                    var n = e.options.filter(function(e) {
                        return e.value === t
                    })[0];
                    e.label = n && n.label
                }), e.hasTouch = "ontouchstart" in window || navigator.msMaxTouchPoints > 0
            },
            controller: ["$scope", function(t) {
                this.onClick = function(e, n) {
                    n.stopPropagation(), t.value = e.value, t.open = !1
                }, this.toggleSelect = function(e) {
                    e.stopPropagation(), t.open = !t.open
                }, angular.element(e).bind("click", function() {
                    t.open && (t.open = !1, t.$apply())
                })
            }]
        }
    }, e.exports.$inject = ["$window"]
}, function(e, t) {
    e.exports = '<div class="custom-select"  ng-class="{\'custom-select--open\': open}">\n    <button type="button" class="custom-select__value" ng-click="ctrl.toggleSelect($event);">\n        <span class="custom-select__value__label">{[ label ]}</span>\n        <ul class="custom-select__value__list" aria-hidden><li ng-repeat="option in options" aria-hidden>w{[ option.label ]}</li></ul>\n    </button>\n    <div class="custom-select__options">\n        <button type="button" class="custom-select__option" ng-click="ctrl.onClick(option, $event);" ng-repeat="option in options" ng-class="{\'custom-select__option--selected\': option.value == value}">{[ option.label ]}</button>\n    </div>\n    <select class="custom-select__native" ng-transclude ng-model="value" aria-hidden="true" ng-class="{\'custom-select__native--use-native\': hasTouch}"></select>\n</div>\n'
}, , , , , , , , , , , , , , , , , , , , , , , , , function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("MygYouTubePlayerComponent", [n(4).name]), e.exports.directive("mygYouTubePlayer", n(137)), e.exports.service("MygYouTubePlayerApi", n(138))
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n, i) {
        return {
            template: function(e) {
                return e.html()
            },
            restrict: "A",
            scope: {
                videoId: "=mygYtPlayerId",
                videoImg: "=",
                videoImgLabel: "="
            },
            link: function(e, t) {
                var s, o = t[0],
                    r = o.firstElementChild;

                function a(e) {
                    e.data === YT.PlayerState.PLAYING && n.$emit(i.YOUTUBE_PLAYER_PLAY, o)
                }
                e.play = function() {
                    o.classList.add("programmes__video-card--playing"), s.playVideo()
                }, e.onPlayerApiLoaded = function() {
                    s = new YT.Player(r, {
                        height: "100%",
                        width: "100%",
                        videoId: e.videoId,
                        playerVars: {
                            rel: 0,
                            showinfo: 0,
                            controls: 1,
                            color: "white",
                            modestbranding: 1,
                            playsinline: 1
                        },
                        events: {
                            onStateChange: a
                        }
                    }), e.ytApi = s
                }.bind(this), e.pauseOtherVideos = a.bind(this), e.pauseThisVideo = function(e, t) {
                    o !== t && s.pauseVideo()
                }.bind(this), e.$watch("videoId", function(e, t) {
                    e !== t && (s.cueVideoById(e), o.classList.remove("programmes__video-card--playing"))
                }), n.$on(i.YOUTUBE_PLAYER_PLAY, e.pauseThisVideo), n.$on(i.YOUTUBE_PLAYER_API_LOADED, e.onPlayerApiLoaded)
            }
        }
    }, e.exports.$inject = ["MygYouTubePlayerApi", "$window", "$rootScope", "MYG_EVENTS"]
}, function(e, t, n) {
    "use strict";
    var i = function(e, t, n) {
        this.$rootScope = e, this.$window = t, this.MYG_EVENTS = n, this.YOUTUBE_API_URL = "https://www.youtube.com/iframe_api", this.prepare()
    };
    i.$inject = ["$rootScope", "$window", "MYG_EVENTS"], i.prototype.prepare = function() {
        this.notifyAPILoaded = this.notifyAPILoaded.bind(this), this.$window.YT ? this.notifyAPILoaded() : (this.$window.onYouTubeIframeAPIReady = this.notifyAPILoaded, this.loadIframeAPI())
    }, i.prototype.notifyAPILoaded = function() {
        this.$rootScope.$broadcast(this.MYG_EVENTS.YOUTUBE_PLAYER_API_LOADED)
    }, i.prototype.loadIframeAPI = function() {
        var e = document.createElement("script");
        e.src = this.YOUTUBE_API_URL;
        var t = document.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(e, t)
    }, e.exports = i
}, , , , , , , function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n, i) {
        var s = this,
            o = s.content[0] && s.content[0].value ? s.content[0] : s.content[1] && s.content[1].value ? s.content[1] : void 0;
        s.highlightStyles = {
            top: 0,
            height: 0
        }, s.setActive = function(t) {
            t && (!s.activeSlide || s.activeSlide && t.value !== s.activeSlide.value) && (e.story = t.value, s.activeSlide = t, s.carouselOpenItem = t.value, setTimeout(r, 100))
        };
        var r = function() {
            var n = t[0].querySelector(".video-slider__slide--active");
            s.highlightStyles = {
                top: n.offsetTop,
                height: n.getBoundingClientRect().height
            }, e.$apply()
        };
        angular.element(n).bind("resize", i.debounce(r.bind(this), 100)), s.setActive(o), e.$watch("story", function() {
            var t = s.content.filter(function(t) {
                return t.value === e.story
            });
            s.setActive(t[0])
        })
    }, e.exports.$inject = ["$scope", "$element", "$window", "MygUtilsService"]
}, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , function(e, t, n) {
    n(320);
    var i = n(0);
    e.exports = i.module("CourseDetail", [n(4).name, n(1).name, n(80).name, n(321).name]), e.exports.directive("enrollLink", n(108)), e.exports.directive("mygReadMore", n(324)), e.exports.directive("mygCertificationCooldown", n(100)), e.exports.directive("mygValidateCertificate", n(98)), e.exports.service("ProfileAPI", n(79)), e.exports.controller("CourseDetailController", n(326))
}, function(e, t, n) {}, function(e, t, n) {
    "use strict";
    var i = n(0);
    e.exports = i.module("VideoSlider", [n(4).name, n(1).name, n(136).name, n(109).name]), e.exports.directive("videoSlider", n(322)), e.exports.controller("videoSliderController", n(145))
}, function(e, t, n) {
    "use strict";
    e.exports = function() {
        return {
            restrict: "E",
            template: n(323),
            controller: n(145),
            controllerAs: "VideoSliderCtrl",
            bindToController: !0,
            scope: {
                content: "="
            }
        }
    }
}, function(e, t) {
    e.exports = '<div class="video-slider cols">\n    <div class="video-slider__video col col--6-12 col--md-12-12 col--sm-12-12">\n        <div class="responsive-video-wrapper"\n            myg-you-tube-player\n            myg-yt-player-id="VideoSliderCtrl.activeSlide.value"\n            video-img="VideoSliderCtrl.activeSlide.img"\n            video-img-label="VideoSliderCtrl.activeSlide.label">\n            <div class="player"></div>\n            <div class="video-slider__video__preview"\n                ng-click="play()">\n                <img ng-src="{[videoImg]}" ng-animate-swap="videoImg" class="video-slider__video__preview--animate" alt="{[videoImgLabel]}">\n                <i class="material-icons">play_circle_filled</i>\n            </div>\n        </div>\n    </div>\n    <div class="video-slider__slide col col--6-12 col--md-12-12">\n        <div ng-repeat="slide in VideoSliderCtrl.content"\n            ng-if="slide.value"\n            class="video-slider__slide__wrapper"\n            ng-class="{\'video-slider__slide--active\': VideoSliderCtrl.activeSlide.value === slide.value}"\n            ng-click="VideoSliderCtrl.setActive(slide)">\n                <h3 class="video-slider__slide__title">{[ slide.label ]}</h3>\n                <p class="video-slider__slide__description">{[ slide.description ]}</p>\n        </div>\n        <hr class="video-slider__slide__highlight" ng-style="VideoSliderCtrl.highlightStyles"/>\n    </div>\n\n    <div class="video-slider__mobile-select col col--sm-12-12">\n        <select custom-select value="story" options="VideoSliderCtrl.content">\n            <option ng-repeat="story in VideoSliderCtrl.content" value="{[story.value]}">{[ story.label ]}</option>\n        </select>\n        <p class="video-slider__mobile-select__description">{[ VideoSliderCtrl.activeSlide.description ]}</p>\n    </div>\n\n\n\n</div>\n'
}, function(e, t, n) {
    "use strict";
    e.exports = function(e) {
        return {
            restrict: "A",
            scope: {
                copy: "=copy",
                maxWordCount: "=maxWordCount"
            },
            template: n(325),
            link: function(t) {
                t.showMoreText = !1;
                var n = t.copy.split(" "),
                    i = n.length;
                t.trustedCopy = e.trustAsHtml(t.copy), i < t.maxWordCount ? t.showMoreText = !0 : (t.showReadMoreBtn = !0, t.trustedShortCopy = e.trustAsHtml(n.slice(0, t.maxWordCount).join(" ") + " ..."), t.toggleMoreText = function() {
                    t.showMoreText = !t.showMoreText
                })
            }
        }
    }, e.exports.$inject = ["$sce"]
}, function(e, t) {
    e.exports = '<p\n    class="about-this-course__info__description"\n    ng-switch="showMoreText"\n>\n    <span ng-switch-when="false" ng-bind-html="trustedShortCopy"></span>\n    <span ng-switch-when="true" ng-bind-html="trustedCopy"></span>\n</p>\n\n<button\n    ng-cloak\n    ng-if="showReadMoreBtn"\n    ng-click="toggleMoreText();"\n    ng-switch="showMoreText"\n    class="btn btn--flat about-this-course__read-more"\n>\n    <span ng-switch-when="false">Read more</span>\n    <span ng-switch-when="true">Read less</span>\n</button>'
}, function(e, t, n) {
    "use strict";
    e.exports = function(e, t, n, i) {
        var s = this;
        s.popularCourses = e.get("popular_courses"), s.showMore = !0, s.wordCount = 75, s.showReadMore = function() {
            s.showMore = !s.showMore
        }, s.showEnrollSuccessToaster = function() {
            n.show({
                templateUrl: "added-success",
                position: "top center",
                hideDelay: 3e3,
                toastClass: "myg-toast"
            })
        }, s.showConfirmationDialog = function() {
            i.show({
                templateUrl: "enroll-confirmation-dialog",
                clickOutsideToClose: !0,
                escapeToClose: !0,
                controller: ["$scope", "$mdDialog", function(e, t) {
                    e.closeDialog = function() {
                        t.hide()
                    }
                }]
            })
        }
    }, e.exports.$inject = ["bootstrapData", "$scope", "$mdToast", "$mdDialog"]
}]);
