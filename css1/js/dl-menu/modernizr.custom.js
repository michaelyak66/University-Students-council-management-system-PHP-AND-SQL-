window.Modernizr = function(e, t, n) {
        function r(e) { m.cssText = e }

        function o(e, t) { return typeof e === t }

        function i(e, t) { return !!~("" + e).indexOf(t) }

        function a(e, t) { for (var r in e) { var o = e[r]; if (!i(o, "-") && m[o] !== n) return "pfx" != t || o } return !1 }

        function c(e, t, r) { for (var i in e) { var a = t[e[i]]; if (a !== n) return !1 === r ? e[i] : o(a, "function") ? a.bind(r || t) : a } return !1 }

        function l(e, t, n) { var r = e.charAt(0).toUpperCase() + e.slice(1),
                i = (e + " " + g.join(r + " ") + r).split(" "); return o(t, "string") || o(t, "undefined") ? a(i, t) : (i = (e + " " + b.join(r + " ") + r).split(" "), c(i, t, n)) }
        var s, u, f = {},
            d = t.documentElement,
            p = "modernizr",
            h = t.createElement(p),
            m = h.style,
            v = " -webkit- -moz- -o- -ms- ".split(" "),
            y = "Webkit Moz O ms",
            g = y.split(" "),
            b = y.toLowerCase().split(" "),
            E = {},
            j = [],
            C = j.slice,
            w = function(e, n, r, o) { var i, a, c, l, s = t.createElement("div"),
                    u = t.body,
                    f = u || t.createElement("body"); if (parseInt(r, 10))
                    for (; r--;) c = t.createElement("div"), c.id = o ? o[r] : p + (r + 1), s.appendChild(c); return i = ["&#173;", '<style id="s', p, '">', e, "</style>"].join(""), s.id = p, (u ? s : f).innerHTML += i, f.appendChild(s), u || (f.style.background = "", f.style.overflow = "hidden", l = d.style.overflow, d.style.overflow = "hidden", d.appendChild(f)), a = n(s, e), u ? s.parentNode.removeChild(s) : (f.parentNode.removeChild(f), d.style.overflow = l), !!a },
            x = {}.hasOwnProperty;
        u = o(x, "undefined") || o(x.call, "undefined") ? function(e, t) { return t in e && o(e.constructor.prototype[t], "undefined") } : function(e, t) { return x.call(e, t) }, Function.prototype.bind || (Function.prototype.bind = function(e) { var t = this; if ("function" != typeof t) throw new TypeError; var n = C.call(arguments, 1),
                r = function() { if (this instanceof r) { var o = function() {};
                        o.prototype = t.prototype; var i = new o,
                            a = t.apply(i, n.concat(C.call(arguments))); return Object(a) === a ? a : i } return t.apply(e, n.concat(C.call(arguments))) }; return r }), E.touch = function() { var n; return "ontouchstart" in e || e.DocumentTouch && t instanceof DocumentTouch ? n = !0 : w(["@media (", v.join("touch-enabled),("), p, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function(e) { n = 9 === e.offsetTop }), n }, E.cssanimations = function() { return l("animationName") }, E.csstransitions = function() { return l("transition") };
        for (var S in E) u(E, S) && (s = S.toLowerCase(), f[s] = E[S](), j.push((f[s] ? "" : "no-") + s));
        return f.addTest = function(e, t) { if ("object" == typeof e)
                    for (var r in e) u(e, r) && f.addTest(r, e[r]);
                else { if (e = e.toLowerCase(), f[e] !== n) return f;
                    t = "function" == typeof t ? t() : t, d.className += " " + (t ? "" : "no-") + e, f[e] = t } return f }, r(""), h = null,
            function(e, t) {
                function n(e, t) { var n = e.createElement("p"),
                        r = e.getElementsByTagName("head")[0] || e.documentElement; return n.innerHTML = "x<style>" + t + "</style>", r.insertBefore(n.lastChild, r.firstChild) }

                function r() { var e = y.elements; return "string" == typeof e ? e.split(" ") : e }

                function o(e) { var t = v[e[h]]; return t || (t = {}, m++, e[h] = m, v[m] = t), t }

                function i(e, n, r) { if (n || (n = t), u) return n.createElement(e);
                    r || (r = o(n)); var i; return i = r.cache[e] ? r.cache[e].cloneNode() : p.test(e) ? (r.cache[e] = r.createElem(e)).cloneNode() : r.createElem(e), i.canHaveChildren && !d.test(e) ? r.frag.appendChild(i) : i }

                function a(e, n) { if (e || (e = t), u) return e.createDocumentFragment(); for (var i = (n = n || o(e)).frag.cloneNode(), a = 0, c = r(), l = c.length; a < l; a++) i.createElement(c[a]); return i }

                function c(e, t) { t.cache || (t.cache = {}, t.createElem = e.createElement, t.createFrag = e.createDocumentFragment, t.frag = t.createFrag()), e.createElement = function(n) { return y.shivMethods ? i(n, e, t) : t.createElem(n) }, e.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + r().join().replace(/\w+/g, function(e) { return t.createElem(e), t.frag.createElement(e), 'c("' + e + '")' }) + ");return n}")(y, t.frag) }

                function l(e) { e || (e = t); var r = o(e); return y.shivCSS && !s && !r.hasCSS && (r.hasCSS = !!n(e, "article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")), u || c(e, r), e } var s, u, f = e.html5 || {},
                    d = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                    p = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
                    h = "_html5shiv",
                    m = 0,
                    v = {};! function() { try { var e = t.createElement("a");
                        e.innerHTML = "<xyz></xyz>", s = "hidden" in e, u = 1 == e.childNodes.length || function() { t.createElement("a"); var e = t.createDocumentFragment(); return void 0 === e.cloneNode || void 0 === e.createDocumentFragment || void 0 === e.createElement }() } catch (e) { s = !0, u = !0 } }(); var y = { elements: f.elements || "abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video", shivCSS: !1 !== f.shivCSS, supportsUnknownElements: u, shivMethods: !1 !== f.shivMethods, type: "default", shivDocument: l, createElement: i, createDocumentFragment: a };
                e.html5 = y, l(t) }(this, t), f._version = "2.6.2", f._prefixes = v, f._domPrefixes = b, f._cssomPrefixes = g, f.testProp = function(e) { return a([e]) }, f.testAllProps = l, f.testStyles = w, f.prefixed = function(e, t, n) { return t ? l(e, t, n) : l(e, "pfx") }, d.className = d.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + " js " + j.join(" "), f
    }(this, this.document),
    function(e, t, n) {
        function r(e) { return "[object Function]" == v.call(e) }

        function o(e) { return "string" == typeof e }

        function i() {}

        function a(e) { return !e || "loaded" == e || "complete" == e || "uninitialized" == e }

        function c() { var e = y.shift();
            g = 1, e ? e.t ? h(function() {
                ("c" == e.t ? d.injectCss : d.injectJs)(e.s, 0, e.a, e.x, e.e, 1) }, 0) : (e(), c()) : g = 0 }

        function l(e, n, r, o, i, l, s) {
            function u(t) { if (!p && a(f.readyState) && (b.r = p = 1, !g && c(), f.onload = f.onreadystatechange = null, t)) { "img" != e && h(function() { j.removeChild(f) }, 50); for (var r in N[n]) N[n].hasOwnProperty(r) && N[n][r].onload() } } var s = s || d.errorTimeout,
                f = t.createElement(e),
                p = 0,
                v = 0,
                b = { t: r, s: n, e: i, a: l, x: s };
            1 === N[n] && (v = 1, N[n] = []), "object" == e ? f.data = n : (f.src = n, f.type = e), f.width = f.height = "0", f.onerror = f.onload = f.onreadystatechange = function() { u.call(this, v) }, y.splice(o, 0, b), "img" != e && (v || 2 === N[n] ? (j.insertBefore(f, E ? null : m), h(u, s)) : N[n].push(f)) }

        function s(e, t, n, r, i) { return g = 0, t = t || "j", o(e) ? l("c" == t ? w : C, e, t, this.i++, n, r, i) : (y.splice(this.i++, 0, e), 1 == y.length && c()), this }

        function u() { var e = d; return e.loader = { load: s, i: 0 }, e } var f, d, p = t.documentElement,
            h = e.setTimeout,
            m = t.getElementsByTagName("script")[0],
            v = {}.toString,
            y = [],
            g = 0,
            b = "MozAppearance" in p.style,
            E = b && !!t.createRange().compareNode,
            j = E ? p : m.parentNode,
            p = e.opera && "[object Opera]" == v.call(e.opera),
            p = !!t.attachEvent && !p,
            C = b ? "object" : p ? "script" : "img",
            w = p ? "script" : C,
            x = Array.isArray || function(e) { return "[object Array]" == v.call(e) },
            S = [],
            N = {},
            T = { timeout: function(e, t) { return t.length && (e.timeout = t[0]), e } };
        (d = function(e) {
            function t(e) { var t, n, r, e = e.split("!"),
                    o = S.length,
                    i = e.pop(),
                    a = e.length,
                    i = { url: i, origUrl: i, prefixes: e }; for (n = 0; n < a; n++) r = e[n].split("="), (t = T[r.shift()]) && (i = t(i, r)); for (n = 0; n < o; n++) i = S[n](i); return i }

            function a(e, o, i, a, c) { var l = t(e),
                    s = l.autoCallback;
                l.url.split(".").pop().split("?").shift(), l.bypass || (o && (o = r(o) ? o : o[e] || o[a] || o[e.split("/").pop().split("?")[0]]), l.instead ? l.instead(e, o, i, a, c) : (N[l.url] ? l.noexec = !0 : N[l.url] = 1, i.load(l.url, l.forceCSS || !l.forceJS && "css" == l.url.split(".").pop().split("?").shift() ? "c" : n, l.noexec, l.attrs, l.timeout), (r(o) || r(s)) && i.load(function() { u(), o && o(l.origUrl, c, a), s && s(l.origUrl, c, a), N[l.url] = 2 }))) }

            function c(e, t) {
                function n(e, n) { if (e) { if (o(e)) n || (f = function() { var e = [].slice.call(arguments);
                            d.apply(this, e), p() }), a(e, f, t, 0, s);
                        else if (Object(e) === e)
                            for (l in c = function() { var t, n = 0; for (t in e) e.hasOwnProperty(t) && n++; return n }(), e) e.hasOwnProperty(l) && (!n && !--c && (r(f) ? f = function() { var e = [].slice.call(arguments);
                                d.apply(this, e), p() } : f[l] = function(e) { return function() { var t = [].slice.call(arguments);
                                    e && e.apply(this, t), p() } }(d[l])), a(e[l], f, t, l, s)) } else !n && p() } var c, l, s = !!e.test,
                    u = e.load || e.both,
                    f = e.callback || i,
                    d = f,
                    p = e.complete || i;
                n(s ? e.yep : e.nope, !!u), u && n(u) } var l, s, f = this.yepnope.loader; if (o(e)) a(e, 0, f, 0);
            else if (x(e))
                for (l = 0; l < e.length; l++) s = e[l], o(s) ? a(s, 0, f, 0) : x(s) ? d(s) : Object(s) === s && c(s, f);
            else Object(e) === e && c(e, f) }).addPrefix = function(e, t) { T[e] = t }, d.addFilter = function(e) { S.push(e) }, d.errorTimeout = 1e4, null == t.readyState && t.addEventListener && (t.readyState = "loading", t.addEventListener("DOMContentLoaded", f = function() { t.removeEventListener("DOMContentLoaded", f, 0), t.readyState = "complete" }, 0)), e.yepnope = u(), e.yepnope.executeStack = c, e.yepnope.injectJs = function(e, n, r, o, l, s) { var u, f, p = t.createElement("script"),
                o = o || d.errorTimeout;
            p.src = e; for (f in r) p.setAttribute(f, r[f]);
            n = s ? c : n || i, p.onreadystatechange = p.onload = function() {!u && a(p.readyState) && (u = 1, n(), p.onload = p.onreadystatechange = null) }, h(function() { u || (u = 1, n(1)) }, o), l ? p.onload() : m.parentNode.insertBefore(p, m) }, e.yepnope.injectCss = function(e, n, r, o, a, l) { var s, o = t.createElement("link"),
                n = l ? c : n || i;
            o.href = e, o.rel = "stylesheet", o.type = "text/css"; for (s in r) o.setAttribute(s, r[s]);
            a || (m.parentNode.insertBefore(o, m), h(n, 0)) } }(this, document), Modernizr.load = function() { yepnope.apply(window, [].slice.call(arguments, 0)) };