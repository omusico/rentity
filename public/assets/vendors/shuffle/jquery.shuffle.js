/*
 * jQuery throttle / debounce - v1.1 - 3/7/2010
 * http://benalman.com/projects/jquery-throttle-debounce-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
/*!
 * Shuffle.js by @Vestride
 * Categorize, sort, and filter a responsive grid of items.
 * Dependencies: jQuery 1.9+, Modernizr 2.6.2+
 * @license MIT license
 * @version 3.1.1
 */
(function (b, c) {
    var $ = b.jQuery || b.Cowboy || (b.Cowboy = {}), a;
    $.throttle = a = function (e, f, j, i) {
        var h, d = 0;
        if (typeof f !== "boolean") {
            i = j;
            j = f;
            f = c
        }
        function g() {
            var o = this, m = +new Date() - d, n = arguments;

            function l() {
                d = +new Date();
                j.apply(o, n)
            }

            function k() {
                h = c
            }

            if (i && !h) {
                l()
            }
            h && clearTimeout(h);
            if (i === c && m > e) {
                l()
            } else {
                if (f !== true) {
                    h = setTimeout(i ? k : l, i === c ? e - m : e)
                }
            }
        }

        if ($.guid) {
            g.guid = j.guid = j.guid || $.guid++
        }
        return g
    };
    $.debounce = function (d, e, f) {
        return f === c ? a(d, e, false) : a(d, f, e !== false)
    }
})(this);
window.Modernizr = function (a, b, c) {
    function d(a) {
        s.cssText = a
    }

    function e(a, b) {
        return typeof a === b
    }

    function f(a, b) {
        return !!~("" + a).indexOf(b)
    }

    function g(a, b) {
        for (var d in a) {
            var e = a[d];
            if (!f(e, "-") && s[e] !== c)return "pfx" == b ? e : !0
        }
        return !1
    }

    function h(a, b, d) {
        for (var f in a) {
            var g = b[a[f]];
            if (g !== c)return d === !1 ? a[f] : e(g, "function") ? g.bind(d || b) : g
        }
        return !1
    }

    function i(a, b, c) {
        var d = a.charAt(0).toUpperCase() + a.slice(1), f = (a + " " + v.join(d + " ") + d).split(" ");
        return e(b, "string") || e(b, "undefined") ? g(f, b) : (f = (a + " " + w.join(d + " ") + d).split(" "), h(f, b, c))
    }

    var j, k, l, m = "2.6.2", n = {}, o = !0, p = b.documentElement, q = "modernizr", r = b.createElement(q), s = r.style, t = ({}.toString, " -webkit- -moz- -o- -ms- ".split(" ")), u = "Webkit Moz O ms", v = u.split(" "), w = u.toLowerCase().split(" "), x = {}, y = [], z = y.slice, A = function (a, c, d, e) {
        var f, g, h, i, j = b.createElement("div"), k = b.body, l = k || b.createElement("body");
        if (parseInt(d, 10))for (; d--;)h = b.createElement("div"), h.id = e ? e[d] : q + (d + 1), j.appendChild(h);
        return f = ["&#173;", '<style id="s', q, '">', a, "</style>"].join(""), j.id = q, (k ? j : l).innerHTML += f, l.appendChild(j), k || (l.style.background = "", l.style.overflow = "hidden", i = p.style.overflow, p.style.overflow = "hidden", p.appendChild(l)), g = c(j, a), k ? j.parentNode.removeChild(j) : (l.parentNode.removeChild(l), p.style.overflow = i), !!g
    }, B = {}.hasOwnProperty;
    l = e(B, "undefined") || e(B.call, "undefined") ? function (a, b) {
        return b in a && e(a.constructor.prototype[b], "undefined")
    } : function (a, b) {
        return B.call(a, b)
    }, Function.prototype.bind || (Function.prototype.bind = function (a) {
        var b = this;
        if ("function" != typeof b)throw new TypeError;
        var c = z.call(arguments, 1), d = function () {
            if (this instanceof d) {
                var e = function () {
                };
                e.prototype = b.prototype;
                var f = new e, g = b.apply(f, c.concat(z.call(arguments)));
                return Object(g) === g ? g : f
            }
            return b.apply(a, c.concat(z.call(arguments)))
        };
        return d
    }), x.csstransforms = function () {
        return !!i("transform")
    }, x.csstransforms3d = function () {
        var a = !!i("perspective");
        return a && "webkitPerspective"in p.style && A("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function (b) {
            a = 9 === b.offsetLeft && 3 === b.offsetHeight
        }), a
    }, x.csstransitions = function () {
        return i("transition")
    };
    for (var C in x)l(x, C) && (k = C.toLowerCase(), n[k] = x[C](), y.push((n[k] ? "" : "no-") + k));
    return n.addTest = function (a, b) {
        if ("object" == typeof a)for (var d in a)l(a, d) && n.addTest(d, a[d]); else {
            if (a = a.toLowerCase(), n[a] !== c)return n;
            b = "function" == typeof b ? b() : b, "undefined" != typeof o && o && (p.className += " " + (b ? "" : "no-") + a), n[a] = b
        }
        return n
    }, d(""), r = j = null, n._version = m, n._prefixes = t, n._domPrefixes = w, n._cssomPrefixes = v, n.testProp = function (a) {
        return g([a])
    }, n.testAllProps = i, n.testStyles = A, n.prefixed = function (a, b, c) {
        return b ? i(a, b, c) : i(a, "pfx")
    }, p.className = p.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (o ? " js " + y.join(" ") : ""), n
}(this, this.document), function (a) {
    "function" == typeof define && define.amd ? define(["jquery", "modernizr"], a) : "object" == typeof exports ? module.exports = a(require("jquery"), window.Modernizr) : window.Shuffle = a(window.jQuery, window.Modernizr)
}(function (a, b, c) {
    "use strict";
    function d(a) {
        return a ? a.replace(/([A-Z])/g, function (a, b) {
            return "-" + b.toLowerCase()
        }).replace(/^ms-/, "-ms-") : ""
    }

    function e(b, c, d) {
        var e, f, g, h = null, i = 0;
        d = d || {};
        var j = function () {
            i = d.leading === !1 ? 0 : a.now(), h = null, g = b.apply(e, f), e = f = null
        };
        return function () {
            var k = a.now();
            i || d.leading !== !1 || (i = k);
            var l = c - (k - i);
            return e = this, f = arguments, 0 >= l || l > c ? (clearTimeout(h), h = null, i = k, g = b.apply(e, f), e = f = null) : h || d.trailing === !1 || (h = setTimeout(j, l)), g
        }
    }

    function f(a, b, c) {
        for (var d = 0, e = a.length; e > d; d++)if (b.call(c, a[d], d, a) === {})return
    }

    function g(b, c, d) {
        return setTimeout(a.proxy(b, c), d)
    }

    function h(a) {
        return Math.max.apply(Math, a)
    }

    function i(a) {
        return Math.min.apply(Math, a)
    }

    function j(b) {
        return a.isNumeric(b) ? b : 0
    }

    function k(a) {
        var b, c, d = a.length;
        if (!d)return a;
        for (; --d;)c = Math.floor(Math.random() * (d + 1)), b = a[c], a[c] = a[d], a[d] = b;
        return a
    }

    if ("object" != typeof b)throw new Error("Shuffle.js requires Modernizr.\nhttp://vestride.github.io/Shuffle/#dependencies");
    var l = b.prefixed("transition"), m = b.prefixed("transitionDelay"), n = b.prefixed("transitionDuration"), o = {
        WebkitTransition: "webkitTransitionEnd",
        transition: "transitionend"
    }[l], p = b.prefixed("transform"), q = d(p), r = b.csstransforms && b.csstransitions, s = b.csstransforms3d, t = !!window.getComputedStyle, u = "shuffle", v = "all", w = "groups", x = 1, y = .001, z = window.getComputedStyle || function () {
        }, A = function (a, b) {
        this.x = j(a), this.y = j(b)
    };
    A.equals = function (a, b) {
        return a.x === b.x && a.y === b.y
    };
    var B = function () {
        if (!t)return !1;
        var a = document.body || document.documentElement, b = document.createElement("div");
        b.style.cssText = "width:10px;padding:2px;-webkit-box-sizing:border-box;box-sizing:border-box;", a.appendChild(b);
        var c = z(b, null).width, d = "10px" === c;
        return a.removeChild(b), d
    }(), C = 0, D = a(window), E = function (b, c) {
        c = c || {}, a.extend(this, E.options, c, E.settings), this.$el = a(b), this.element = b, this.unique = "shuffle_" + C++, this._fire(E.EventType.LOADING), this._init(), g(function () {
            this.initialized = !0, this._fire(E.EventType.DONE)
        }, this, 16)
    };
    return E.EventType = {
        LOADING: "loading",
        DONE: "done",
        LAYOUT: "layout",
        REMOVED: "removed"
    }, E.ClassName = {
        BASE: u,
        SHUFFLE_ITEM: "shuffle-item",
        FILTERED: "filtered",
        CONCEALED: "concealed"
    }, E.options = {
        group: v,
        speed: 250,
        easing: "ease-out",
        itemSelector: "",
        sizer: null,
        gutterWidth: 0,
        columnWidth: 0,
        delimeter: null,
        buffer: 0,
        columnThreshold: t ? .01 : .1,
        initialSort: null,
        throttle: e,
        throttleTime: 300,
        sequentialFadeDelay: 150,
        supported: r
    }, E.settings = {
        useSizer: !1,
        itemCss: {position: "absolute", top: 0, left: 0, visibility: "visible"},
        revealAppendedDelay: 300,
        lastSort: {},
        lastFilter: v,
        enabled: !0,
        destroyed: !1,
        initialized: !1,
        _animations: [],
        _transitions: [],
        _isMovementCanceled: !1,
        styleQueue: []
    }, E.Point = A, E._getItemTransformString = function (a, b) {
        return s ? "translate3d(" + a.x + "px, " + a.y + "px, 0) scale3d(" + b + ", " + b + ", 1)" : "translate(" + a.x + "px, " + a.y + "px) scale(" + b + ")"
    }, E._getNumberStyle = function (b, c, d) {
        if (t) {
            d = d || z(b, null);
            var e = E._getFloat(d[c]);
            return B || "width" !== c ? B || "height" !== c || (e += E._getFloat(d.paddingTop) + E._getFloat(d.paddingBottom) + E._getFloat(d.borderTopWidth) + E._getFloat(d.borderBottomWidth)) : e += E._getFloat(d.paddingLeft) + E._getFloat(d.paddingRight) + E._getFloat(d.borderLeftWidth) + E._getFloat(d.borderRightWidth), e
        }
        return E._getFloat(a(b).css(c))
    }, E._getFloat = function (a) {
        return j(parseFloat(a))
    }, E._getOuterWidth = function (a, b) {
        var c = z(a, null), d = E._getNumberStyle(a, "width", c);
        if (b) {
            var e = E._getNumberStyle(a, "marginLeft", c), f = E._getNumberStyle(a, "marginRight", c);
            d += e + f
        }
        return d
    }, E._getOuterHeight = function (a, b) {
        var c = z(a, null), d = E._getNumberStyle(a, "height", c);
        if (b) {
            var e = E._getNumberStyle(a, "marginTop", c), f = E._getNumberStyle(a, "marginBottom", c);
            d += e + f
        }
        return d
    }, E._skipTransition = function (a, b, c) {
        var d = a.style[n];
        a.style[n] = "0ms", b.call(c);
        var e = a.offsetWidth;
        e = null, a.style[n] = d
    }, E.prototype._init = function () {
        this.$items = this._getItems(), this.sizer = this._getElementOption(this.sizer), this.sizer && (this.useSizer = !0), this.$el.addClass(E.ClassName.BASE), this._initItems(), D.on("resize." + u + "." + this.unique, this._getResizeFunction());
        var a = this.$el.css(["position", "overflow"]), b = E._getOuterWidth(this.element);
        this._validateStyles(a), this._setColumns(b), this.shuffle(this.group, this.initialSort), this.supported && g(function () {
            this._setTransitions(), this.element.style[l] = "height " + this.speed + "ms " + this.easing
        }, this)
    }, E.prototype._getResizeFunction = function () {
        var b = a.proxy(this._onResize, this);
        return this.throttle ? this.throttle(b, this.throttleTime) : b
    }, E.prototype._getElementOption = function (a) {
        return "string" == typeof a ? this.$el.find(a)[0] || null : a && a.nodeType && 1 === a.nodeType ? a : a && a.jquery ? a[0] : null
    }, E.prototype._validateStyles = function (a) {
        "static" === a.position && (this.element.style.position = "relative"), "hidden" !== a.overflow && (this.element.style.overflow = "hidden")
    }, E.prototype._filter = function (a, b) {
        a = a || this.lastFilter, b = b || this.$items;
        var c = this._getFilteredSets(a, b);
        return this._toggleFilterClasses(c.filtered, c.concealed), this.lastFilter = a, "string" == typeof a && (this.group = a), c.filtered
    }, E.prototype._getFilteredSets = function (b, c) {
        var d = a(), e = a();
        return b === v ? d = c : f(c, function (c) {
            var f = a(c);
            this._doesPassFilter(b, f) ? d = d.add(f) : e = e.add(f)
        }, this), {filtered: d, concealed: e}
    }, E.prototype._doesPassFilter = function (b, c) {
        if (a.isFunction(b))return b.call(c[0], c, this);
        var d = c.data(w), e = this.delimeter && !a.isArray(d) ? d.split(this.delimeter) : d;
        return a.inArray(b, e) > -1
    }, E.prototype._toggleFilterClasses = function (a, b) {
        a.removeClass(E.ClassName.CONCEALED).addClass(E.ClassName.FILTERED), b.removeClass(E.ClassName.FILTERED).addClass(E.ClassName.CONCEALED)
    }, E.prototype._initItems = function (a) {
        a = a || this.$items, a.addClass([E.ClassName.SHUFFLE_ITEM, E.ClassName.FILTERED].join(" ")), a.css(this.itemCss).data("point", new A).data("scale", x)
    }, E.prototype._updateItemCount = function () {
        this.visibleItems = this._getFilteredItems().length
    }, E.prototype._setTransition = function (a) {
        a.style[l] = q + " " + this.speed + "ms " + this.easing + ", opacity " + this.speed + "ms " + this.easing
    }, E.prototype._setTransitions = function (a) {
        a = a || this.$items, f(a, function (a) {
            this._setTransition(a)
        }, this)
    }, E.prototype._setSequentialDelay = function (a) {
        this.supported && f(a, function (a, b) {
            a.style[m] = "0ms," + (b + 1) * this.sequentialFadeDelay + "ms"
        }, this)
    }, E.prototype._getItems = function () {
        return this.$el.children(this.itemSelector)
    }, E.prototype._getFilteredItems = function () {
        return this.$items.filter("." + E.ClassName.FILTERED)
    }, E.prototype._getConcealedItems = function () {
        return this.$items.filter("." + E.ClassName.CONCEALED)
    }, E.prototype._getColumnSize = function (b, c) {
        var d;
        return d = a.isFunction(this.columnWidth) ? this.columnWidth(b) : this.useSizer ? E._getOuterWidth(this.sizer) : this.columnWidth ? this.columnWidth : this.$items.length > 0 ? E._getOuterWidth(this.$items[0], !0) : b, 0 === d && (d = b), d + c
    }, E.prototype._getGutterSize = function (b) {
        var c;
        return c = a.isFunction(this.gutterWidth) ? this.gutterWidth(b) : this.useSizer ? E._getNumberStyle(this.sizer, "marginLeft") : this.gutterWidth
    }, E.prototype._setColumns = function (a) {
        var b = a || E._getOuterWidth(this.element), c = this._getGutterSize(b), d = this._getColumnSize(b, c), e = (b + c) / d;
        Math.abs(Math.round(e) - e) < this.columnThreshold && (e = Math.round(e)), this.cols = Math.max(Math.floor(e), 1), this.containerWidth = b, this.colWidth = d
    }, E.prototype._setContainerSize = function () {
        this.$el.css("height", this._getContainerSize())
    }, E.prototype._getContainerSize = function () {
        return h(this.positions)
    }, E.prototype._fire = function (a, b) {
        this.$el.trigger(a + "." + u, b && b.length ? b : [this])
    }, E.prototype._resetCols = function () {
        var a = this.cols;
        for (this.positions = []; a--;)this.positions.push(0)
    }, E.prototype._layout = function (a, b) {
        f(a, function (a) {
            this._layoutItem(a, !!b)
        }, this), this._processStyleQueue(), this._setContainerSize()
    }, E.prototype._layoutItem = function (b, c) {
        var d = a(b), e = d.data(), f = e.point, g = e.scale, h = {
            width: E._getOuterWidth(b, !0),
            height: E._getOuterHeight(b, !0)
        }, i = this._getItemPosition(h);
        A.equals(f, i) && g === x || (e.point = i, e.scale = x, this.styleQueue.push({
            $item: d,
            point: i,
            scale: x,
            opacity: c ? 0 : 1,
            skipTransition: c || 0 === this.speed,
            callfront: function () {
                c || d.css("visibility", "visible")
            },
            callback: function () {
                c && d.css("visibility", "hidden")
            }
        }))
    }, E.prototype._getItemPosition = function (a) {
        for (var b = this._getColumnSpan(a.width, this.colWidth, this.cols), c = this._getColumnSet(b, this.cols), d = this._getShortColumn(c, this.buffer), e = new A(Math.round(this.colWidth * d), Math.round(c[d])), f = c[d] + a.height, g = this.cols + 1 - c.length, h = 0; g > h; h++)this.positions[d + h] = f;
        return e
    }, E.prototype._getColumnSpan = function (a, b, c) {
        var d = a / b;
        return Math.abs(Math.round(d) - d) < this.columnThreshold && (d = Math.round(d)), Math.min(Math.ceil(d), c)
    }, E.prototype._getColumnSet = function (a, b) {
        if (1 === a)return this.positions;
        for (var c = b + 1 - a, d = [], e = 0; c > e; e++)d[e] = h(this.positions.slice(e, e + a));
        return d
    }, E.prototype._getShortColumn = function (a, b) {
        for (var c = i(a), d = 0, e = a.length; e > d; d++)if (a[d] >= c - b && a[d] <= c + b)return d;
        return 0
    }, E.prototype._shrink = function (b) {
        var c = b || this._getConcealedItems();
        f(c, function (b) {
            var c = a(b), d = c.data();
            d.scale !== y && (d.scale = y, this.styleQueue.push({
                $item: c,
                point: d.point,
                scale: y,
                opacity: 0,
                callback: function () {
                    c.css("visibility", "hidden")
                }
            }))
        }, this)
    }, E.prototype._onResize = function () {
        if (this.enabled && !this.destroyed) {
            var a = E._getOuterWidth(this.element);
            a !== this.containerWidth && this.update()
        }
    }, E.prototype._getStylesForTransition = function (a) {
        var b = {opacity: a.opacity};
        return this.supported ? b[p] = E._getItemTransformString(a.point, a.scale) : (b.left = a.point.x, b.top = a.point.y), b
    }, E.prototype._transition = function (b) {
        var c = this._getStylesForTransition(b);
        this._startItemAnimation(b.$item, c, b.callfront || a.noop, b.callback || a.noop)
    }, E.prototype._startItemAnimation = function (b, c, d, e) {
        function f(b) {
            b.target === b.currentTarget && (a(b.target).off(o, f), g._removeTransitionReference(h), e())
        }

        var g = this, h = {$element: b, handler: f};
        if (d(), !this.initialized)return b.css(c), void e();
        if (this.supported)b.css(c), b.on(o, f), this._transitions.push(h); else {
            var i = b.stop(!0).animate(c, this.speed, "swing", e);
            this._animations.push(i.promise())
        }
    }, E.prototype._processStyleQueue = function (b) {
        this.isTransitioning && this._cancelMovement();
        var c = a();
        f(this.styleQueue, function (a) {
            a.skipTransition ? this._styleImmediately(a) : (c = c.add(a.$item), this._transition(a))
        }, this), c.length > 0 && this.initialized && this.speed > 0 ? (this.isTransitioning = !0, this.supported ? this._whenCollectionDone(c, o, this._movementFinished) : this._whenAnimationsDone(this._movementFinished)) : b || g(this._layoutEnd, this), this.styleQueue.length = 0
    }, E.prototype._cancelMovement = function () {
        this.supported ? f(this._transitions, function (a) {
            a.$element.off(o, a.handler)
        }) : (this._isMovementCanceled = !0, this.$items.stop(!0), this._isMovementCanceled = !1), this._transitions.length = 0, this.isTransitioning = !1
    }, E.prototype._removeTransitionReference = function (b) {
        var c = a.inArray(b, this._transitions);
        c > -1 && this._transitions.splice(c, 1)
    }, E.prototype._styleImmediately = function (a) {
        E._skipTransition(a.$item[0], function () {
            a.$item.css(this._getStylesForTransition(a))
        }, this)
    }, E.prototype._movementFinished = function () {
        this.isTransitioning = !1, this._layoutEnd()
    }, E.prototype._layoutEnd = function () {
        this._fire(E.EventType.LAYOUT)
    }, E.prototype._addItems = function (a, b, c) {
        this._initItems(a), this._setTransitions(a), this.$items = this._getItems(), this._shrink(a), f(this.styleQueue, function (a) {
            a.skipTransition = !0
        }), this._processStyleQueue(!0), b ? this._addItemsToEnd(a, c) : this.shuffle(this.lastFilter)
    }, E.prototype._addItemsToEnd = function (a, b) {
        var c = this._filter(null, a), d = c.get();
        this._updateItemCount(), this._layout(d, !0), b && this.supported && this._setSequentialDelay(d), this._revealAppended(d)
    }, E.prototype._revealAppended = function (b) {
        g(function () {
            f(b, function (b) {
                var c = a(b);
                this._transition({$item: c, opacity: 1, point: c.data("point"), scale: x})
            }, this), this._whenCollectionDone(a(b), o, function () {
                a(b).css(m, "0ms"), this._movementFinished()
            })
        }, this, this.revealAppendedDelay)
    }, E.prototype._whenCollectionDone = function (b, c, d) {
        function e(b) {
            b.target === b.currentTarget && (a(b.target).off(c, e), f++, f === g && (h._removeTransitionReference(i), d.call(h)))
        }

        var f = 0, g = b.length, h = this, i = {$element: b, handler: e};
        b.on(c, e), this._transitions.push(i)
    }, E.prototype._whenAnimationsDone = function (b) {
        a.when.apply(null, this._animations).always(a.proxy(function () {
            this._animations.length = 0, this._isMovementCanceled || b.call(this)
        }, this))
    }, E.prototype.shuffle = function (a, b) {
        this.enabled && (a || (a = v), this._filter(a), this._updateItemCount(), this._shrink(), this.sort(b))
    }, E.prototype.sort = function (a) {
        if (this.enabled) {
            this._resetCols();
            var b = a || this.lastSort, c = this._getFilteredItems().sorted(b);
            this._layout(c), this.lastSort = b
        }
    }, E.prototype.update = function (a) {
        this.enabled && (a || this._setColumns(), this.sort())
    }, E.prototype.layout = function () {
        this.update(!0)
    }, E.prototype.appended = function (a, b, c) {
        this._addItems(a, b === !0, c !== !1)
    }, E.prototype.disable = function () {
        this.enabled = !1
    }, E.prototype.enable = function (a) {
        this.enabled = !0, a !== !1 && this.update()
    }, E.prototype.remove = function (b) {
        function c() {
            b.remove(), this.$items = this._getItems(), this._updateItemCount(), this._fire(E.EventType.REMOVED, [b, this]), b = null
        }

        b.length && b.jquery && (this._toggleFilterClasses(a(), b), this._shrink(b), this.sort(), this.$el.one(E.EventType.LAYOUT + "." + u, a.proxy(c, this)))
    }, E.prototype.destroy = function () {
        D.off("." + this.unique), this.$el.removeClass(u).removeAttr("style").removeData(u), this.$items.removeAttr("style").removeData("point").removeData("scale").removeClass([E.ClassName.CONCEALED, E.ClassName.FILTERED, E.ClassName.SHUFFLE_ITEM].join(" ")), this.$items = null, this.$el = null, this.sizer = null, this.element = null, this._transitions = null, this.destroyed = !0
    }, a.fn.shuffle = function (b) {
        var c = Array.prototype.slice.call(arguments, 1);
        return this.each(function () {
            var d = a(this), e = d.data(u);
            e ? "string" == typeof b && e[b] && e[b].apply(e, c) : (e = new E(this, b), d.data(u, e))
        })
    }, a.fn.sorted = function (b) {
        var d = a.extend({}, a.fn.sorted.defaults, b), e = this.get(), f = !1;
        return e.length ? d.randomize ? k(e) : (a.isFunction(d.by) && e.sort(function (b, e) {
            if (f)return 0;
            var g = d.by(a(b)), h = d.by(a(e));
            return g === c && h === c ? (f = !0, 0) : h > g || "sortFirst" === g || "sortLast" === h ? -1 : g > h || "sortLast" === g || "sortFirst" === h ? 1 : 0
        }), f ? this.get() : (d.reverse && e.reverse(), e)) : []
    }, a.fn.sorted.defaults = {reverse: !1, by: null, randomize: !1}, E
});

var shuffleme = (function ($) {
    'use strict';

    var $grid = $('#grid'),
        $filterOptions = $('.filter-options'),
        $sizer = $grid.find('.shuffle_sizer'),

        init = function () {

            // None of these need to be executed synchronously
            setTimeout(function () {
                listen();
                setupFilters();
            }, 100);

            // instantiate the plugin
            $grid.shuffle({
                itemSelector: '[class*="col-"]',
                sizer: $sizer
            });
        },

    // Set up button clicks
        setupFilters = function () {
            var $btns = $filterOptions.children();
            $btns.on('click', function () {
                var $this = $(this),
                    isActive = $this.hasClass('active'),
                    group = isActive ? 'all' : $this.data('group');

                // Hide current label, show current label in title
                if (!isActive) {
                    $('.filter-options .active').removeClass('active');
                }

                $this.toggleClass('active');

                // Filter elements
                $grid.shuffle('shuffle', group);
            });

            $btns = null;
        },

    // Re layout shuffle when images load. This is only needed
    // below 768 pixels because the .picture-item height is auto and therefore
    // the height of the picture-item is dependent on the image
    // I recommend using imagesloaded to determine when an image is loaded
    // but that doesn't support IE7
        listen = function () {
            var debouncedLayout = $.throttle(300, function () {
                $grid.shuffle('update');
            });

            // Get all images inside shuffle
            $grid.find('img').each(function () {
                var proxyImage;

                // Image already loaded
                if (this.complete && this.naturalWidth !== undefined) {
                    return;
                }

                // If none of the checks above matched, simulate loading on detached element.
                proxyImage = new Image();
                $(proxyImage).on('load', function () {
                    $(this).off('load');
                    debouncedLayout();
                });

                proxyImage.src = this.src;
            });

            // Because this method doesn't seem to be perfect.
            setTimeout(function () {
                debouncedLayout();
            }, 500);
        };

    return {
        init: init
    };
}(jQuery));


$(document).ready(function () {
    shuffleme.init();
});
