! function (e) {
    function t(t) {
        for (var n, r, i = t[0], c = t[1], d = t[2], u = 0, p = []; u < i.length; u++) r = i[u], Object.prototype.hasOwnProperty.call(s, r) && s[r] && p.push(s[r][0]), s[r] = 0;
        for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
        for (l && l(t); p.length;) p.shift()();
        return a.push.apply(a, d || []), o()
    }

    function o() {
        for (var e, t = 0; t < a.length; t++) {
            for (var o = a[t], n = !0, i = 1; i < o.length; i++) {
                var c = o[i];
                0 !== s[c] && (n = !1)
            }
            n && (a.splice(t--, 1), e = r(r.s = o[0]))
        }
        return e
    }
    var n = {},
        s = {
            1: 0
        },
        a = [];

    function r(t) {
        if (n[t]) return n[t].exports;
        var o = n[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(o.exports, o, o.exports, r), o.l = !0, o.exports
    }
    r.m = e, r.c = n, r.d = function (e, t, o) {
        r.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: o
        })
    }, r.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, r.t = function (e, t) {
        if (1 & t && (e = r(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var o = Object.create(null);
        if (r.r(o), Object.defineProperty(o, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var n in e) r.d(o, n, function (t) {
                return e[t]
            }.bind(null, n));
        return o
    }, r.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return r.d(t, "a", t), t
    }, r.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, r.p = "";
    var i = window.webpackJsonp = window.webpackJsonp || [],
        c = i.push.bind(i);
    i.push = t, i = i.slice();
    for (var d = 0; d < i.length; d++) t(i[d]);
    var l = c;
    a.push([127, 2]), o()
}({
    127: function (e, t, o) {
        o(182), e.exports = o(181)
    },
    128: function (e, t) {
        !(function () {
            const e = document.querySelector("#same-address"),
                t = document.querySelector(".billing-address"),
                o = document.querySelectorAll('[name="checkoutPaymentMethod"]') || [],
                n = document.querySelector(".card-details"),
                s = document.querySelector(".transfer-bank"),
                d = document.querySelector(".virtual-bank");

            // Handle visibility of billing address based on "same address" checkbox
            if (e && t) {
                e.addEventListener("change", (e) => {
                    if (e && e.target && !e.target.checked) {
                        t.classList.remove("d-none");
                    } else {
                        t.classList.add("d-none");
                    }
                });
            }

            // Handle payment method changes
            if (o.length > 0) {
                o.forEach((paymentMethodRadio) => {
                    paymentMethodRadio.addEventListener("change", (e) => {
                        if (e && e.target && e.target.id) {
                            const {
                                id
                            } = e.target;

                            // Hide all payment-related sections first
                            s.classList.add("d-none");
                            n.classList.add("d-none");
                            d.classList.add("d-none");

                            // Show relevant section based on selected payment method
                            if (id === "checkoutPaymentStripe") {
                                n.classList.remove("d-none"); // Show card details
                            } else if (id === "checkoutPaymentTransferBank") {
                                s.classList.remove("d-none"); // Show transfer bank info
                            } else if (id === "checkoutPaymentVirtualAccount") {
                                d.classList.remove("d-none"); // Show virtual account info
                            }
                        }
                    });
                });
            }
        })();


    },
    129: function (e, t) {
        document.addEventListener("DOMContentLoaded", () => {
            (document.querySelectorAll(".offcanvas") || []).forEach(e => {
                e.classList.remove("d-none")
            })
        })
    },
    130: function (e, t) {
        document.addEventListener("DOMContentLoaded", () => {
            const e = document.querySelectorAll(".product-option select, .product-option input") || [];
            e.forEach(e => {
                e.addEventListener("change", t => {
                    (({
                        event: e,
                        option: t
                    }) => {
                        const o = !!e.target && e.target.closest(".product-option"),
                            n = !!o && o.querySelector(".selected-option"),
                            s = !(!e.target || !e.target.value) && e.target.value;
                        o && n && s && (n.innerText = s)
                    })({
                        event: t,
                        option: e
                    })
                })
            })
        })
    },
    131: function (e, t) {
        document.addEventListener("DOMContentLoaded", () => {
            (document.querySelectorAll("[data-pixr-scrollto]") || []).forEach(e => e.addEventListener("click", (function (e) {
                const t = !!(e && e.target && e.target.dataset && e.target.dataset.target) && e.target.dataset.target;
                if (t) {
                    const e = document.querySelector(t);
                    e && e.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    })
                }
            })))
        })
    },
    132: function (e, t) {
        document.addEventListener("DOMContentLoaded", () => {
            const e = document.querySelectorAll("[data-pr-search") || [],
                t = document.querySelectorAll(".btn-close-search") || [],
                o = document.querySelector(".search-overlay"),
                n = ({
                    show: e = !1
                }) => {
                    e && o ? document.body.classList.add("search-active") : document.body.classList.remove("search-active")
                };
            e.forEach(e => {
                e.addEventListener("click", () => {
                    n({
                        show: !0
                    })
                })
            }), t.forEach(e => {
                e.addEventListener("click", () => {
                    n({})
                })
            });
            const s = document.querySelectorAll(".filter-search") || [];
            s.forEach(e => {
                e.addEventListener("keyup", t => {
                    ((e, t) => {
                        const o = e.target.closest(".widget-filter"),
                            n = o ? o.querySelectorAll(".filter-options .form-group") : [];
                        t.value && n && o ? n.forEach(e => {
                            e.innerText.trim().toLowerCase().includes(t.value.toLowerCase().trim()) ? e.classList.remove("d-none") : e.classList.add("d-none")
                        }) : n.forEach(e => {
                            e.classList.remove("d-none")
                        })
                    })(t, e)
                })
            })
        })
    },
    180: function (e, t) {
        window.addEventListener("load", (function () {
            document.body.classList.add("page-loaded")
        }))
    },
    181: function (e, t, o) {},
    182: function (e, t, o) {
        "use strict";
        o.r(t);
        var n = o(46),
            s = o(117),
            a = o.n(s);
        document.addEventListener("DOMContentLoaded", () => {
            a.a.init({
                duration: 700,
                easing: "ease-out-quad",
                once: !0,
                startEvent: "load",
                disable: "mobile"
            })
        });
        var r = o(118),
            i = o.n(r);
        (document.querySelectorAll("[data-choices]") || []).forEach(e => {
            const t = {
                ...e.dataset.choices ? JSON.parse(e.dataset.choices) : {},
                shouldSort: !1,
                searchEnabled: !1,
                classNames: {
                    containerOuter: "position-relative w-100",
                    listSingle: "form-control w-100",
                    inputCloned: "form-control-xs",
                    listDropdown: "dropdown-menu",
                    itemChoice: "dropdown-item",
                    activeState: "show",
                    selectedState: "active"
                }
            };
            new i.a(e, t)
        });
        o(128);
        var c = o(119);
        class d {
            constructor(e) {
                this.hotspot = e, this.options = !(!this.hotspot.dataset || !this.hotspot.dataset.options) && JSON.parse(this.hotspot.dataset.options), this.type = this.options && this.options.type ? this.options.type : "tippy", this.trigger = this.options && this.options.trigger ? this.options.trigger : "click", this.hotspotContent = null, this.init()
            }
            init() {
                this.options.placement && this.positionHotspot(), this.options.alwaysVisible && this.hotspot.classList.add("always-show"), this.options.alwaysAnimate && this.hotspot.classList.add("always-animate"), this.setHotspotContent(), Object(c.a)(this.hotspot, {
                    allowHTML: !0,
                    trigger: this.trigger,
                    content: this.hotspotContent,
                    theme: "light",
                    animation: "shift-away",
                    interactive: !0,
                    hideOnClick: !0,
                    appendTo: document.body
                })
            }
            setHotspotContent() {
                if (this.options.contentTarget) {
                    let e = document.querySelector("" + this.options.contentTarget);
                    this.hotspotContent = e ? e.innerHTML : "Missing content"
                } else this.options.content ? this.hotspotContent = this.options.content : this.hotspotContent = "Missing content"
            }
            positionHotspot() {
                Object.keys(this.options.placement).forEach(e => {
                    this.hotspot.style[e] = "" + this.options.placement[e]
                })
            }
        }
        document.addEventListener("DOMContentLoaded", (function () {
            (document.querySelectorAll(".hotspot") || []).forEach(e => {
                new d(e)
            })
        }));
        var l = o(120);
        document.addEventListener("DOMContentLoaded", () => {
            (document.querySelectorAll("[data-zoomable]") || []).forEach(e => {
                new l.a(e, {
                    margin: 30
                })
            })
        });
        class u {
            constructor(e) {
                this.menuToggle = e, this.menuParent = !!this.menuToggle && this.menuToggle.closest(".dropdown"), this.dropdownMenu = !!this.menuParent && this.menuParent.querySelector(".dropdown-menu"), this.showEvents = ["mouseenter"], this.hideEvents = ["mouseleave", "click"], this.cssVarBreakPoint = getComputedStyle(document.documentElement).getPropertyValue("--theme-breakpoint-lg") || "992px", this.breakpointLG = parseInt(this.cssVarBreakPoint, 10), this.initMenu()
            }
            initMenu() {
                const e = this;
                this.menuParent && (this.showEvents.forEach(t => {
                    this.menuParent.addEventListener(t, (function () {
                        e.showMenu()
                    }))
                }), this.hideEvents.forEach(t => {
                    this.menuParent.addEventListener(t, (function () {
                        e.hideMenu()
                    }))
                }))
            }
            showMenu() {
                window.innerWidth < this.breakpointLG || (this.dropdownMenu && this.dropdownMenu.classList.add("show"), this.menuToggle && (this.menuToggle.classList.add("show"), this.menuToggle.setAttribute("aria-expanded", "true")))
            }
            hideMenu() {
                window.innerWidth < this.breakpointLG || (this.dropdownMenu && this.dropdownMenu.classList.remove("show"), this.menuToggle && (this.menuToggle.classList.remove("show"), this.menuToggle.setAttribute("aria-expanded", "false")))
            }
        }
        document.addEventListener("DOMContentLoaded", () => {
            const e = document.querySelectorAll(".navbar-nav .dropdown, .navbar-nav .dropend") || [],
                t = document.querySelectorAll(".navbar-toggler") || [];
            e.length > 0 && e.forEach(e => {
                new u(e)
            }), t.forEach(e => {
                e.addEventListener("click", e => {
                    e.target && e.target.classList.contains("btn-collapse-expand") || (document.body.classList.contains("navbar-active") ? document.body.classList.remove("navbar-active") : document.body.classList.add("navbar-active"))
                })
            })
        });
        var p = o(121),
            h = o.n(p);
        document.addEventListener("DOMContentLoaded", () => {
            var e = document.querySelectorAll(".filter-price") || [];
            const formatRupiah = (value) => {
                return new Intl.NumberFormat("id-ID", {
                    style: "decimal",
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                }).format(value);
            };
            const t = e => {
                const t = e.closest(".widget-filter-price");
                h.a.create(e, {
                    start: [50000, 2000000], // Awal range harga (Rp50.000 hingga Rp2.000.000)
                    connect: !0,
                    tooltips: [{
                            to: value => `Rp${formatRupiah(value)}`
                        },
                        {
                            to: value => `Rp${formatRupiah(value)}`
                        }
                    ],
                    range: {
                        min: 0,
                        max: 2000000 // Maksimum range harga (Rp2.000.000)
                    },
                    pips: {
                        mode: "values",
                        values: [0, 500000, 1000000, 1500000, 2000000], // Nilai pips untuk menunjukkan langkah harga
                        density: 1000,
                        format: {
                            to: value => `Rp${formatRupiah(value)}`,
                            from: value => parseFloat(value.replace(/\D/g, ""))
                        }
                    }
                });
                var o = !!t && t.querySelector(".filter-min"),
                    n = !!t && t.querySelector(".filter-max");
                const s = [o, n];
                e.noUiSlider.on("update", (function (e, t) {
                    s[t].value = formatRupiah(e[t]); // Tampilkan dalam format Rupiah
                })), o.addEventListener("change", (function () {
                    e.noUiSlider.set([this.value.replace(/\D/g, ""), null]); // Hapus format sebelum diubah
                })), n.addEventListener("change", (function () {
                    e.noUiSlider.set([null, this.value.replace(/\D/g, "")]); // Hapus format sebelum diubah
                }));
            };
            e.forEach(e => {
                t(e);
            });
        });


        o(129);
        document.addEventListener("DOMContentLoaded", () => {
            [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function (e) {
                const t = {
                    container: "body",
                    trigger: "focus",
                    ...e.dataset.bsOptions ? JSON.parse(e.dataset.bsOptions) : {}
                };
                return new n.a(e, t)
            }))
        });
        o(130), o(131), o(132);
        var m = o(122);
        document.addEventListener("DOMContentLoaded", () => {
            (document.querySelectorAll("[data-pixr-simplebar]") || []).forEach(e => {
                new m.a(e, {
                    autoHide: !1
                })
            })
        });
        var w = o(197),
            v = o(186),
            g = o(187),
            f = o(188),
            y = o(189),
            b = o(190),
            L = o(191),
            E = o(192),
            S = o(193),
            O = o(194),
            k = o(195),
            M = o(196);
        w.a.use([v.a, g.a, f.a, y.a, b.a, L.a, E.a, S.a, O.a, k.a, M.a]),
            function () {
                document.addEventListener("DOMContentLoaded", () => {
                    (document.querySelectorAll("[data-swiper]") || []).forEach(e => {
                        let t = e.dataset && e.dataset.options ? JSON.parse(e.dataset.options) : {};
                        new w.a(e, t)
                    });
                    const e = document.querySelector(".swiper-product-imgs");
                    if (e) {
                        const o = getComputedStyle(document.documentElement).getPropertyValue("--theme-breakpoint-lg") || "992px",
                            n = window.matchMedia(`(max-width: ${o})`),
                            s = document.querySelector(".swiper-wrap"),
                            a = {
                                slidesPerView: 1,
                                loop: !0,
                                autoHeight: !0,
                                effect: "fade",
                                fadeEffect: {
                                    crossFade: !0
                                },
                                pagination: {
                                    el: ".swiper-pagination",
                                    type: "fraction"
                                },
                                navigation: {
                                    nextEl: ".swiper-btn-next",
                                    prevEl: ".swiper-btn-prev"
                                },
                                autoplay: !1
                            };
                        let r;

                        function t() {
                            n.matches ? function () {
                                s && s.classList.add("swiper-wrapper");
                                r = new w.a(e, a)
                            }() : function () {
                                void 0 !== r && r.destroy(!0, !0);
                                s && s.classList.remove("swiper-wrapper")
                            }()
                        }
                        n.addListener(t), t()
                    }
                });
                var e = new w.a(".gallery-thumbs-horizontal", {
                        spaceBetween: 10,
                        slidesPerView: 4,
                        freeMode: !0,
                        watchSlidesVisibility: !0,
                        watchSlidesProgress: !0
                    }),
                    t = (new w.a(".gallery-top-horizontal", {
                        spaceBetween: 0,
                        loop: !0,
                        navigation: {
                            nextEl: ".swiper-next",
                            prevEl: ".swiper-prev"
                        },
                        thumbs: {
                            swiper: e
                        }
                    }), e = new w.a(".gallery-thumbs-vertical", {
                        spaceBetween: 5,
                        slidesPerView: "auto",
                        direction: "vertical"
                    }), new w.a(".gallery-top-vertical", {
                        spaceBetween: 0,
                        effect: "fade",
                        thumbs: {
                            swiper: e
                        }
                    }), new w.a(".swiper-linked-carousel-large", {
                        spaceBetween: 0,
                        slidesPerView: 1,
                        roundLengths: !0,
                        loop: !0,
                        controller: {
                            control: o
                        }
                    })),
                    o = new w.a(".swiper-linked-carousel-small", {
                        spaceBetween: 0,
                        slidesPerView: 1,
                        roundLengths: !0,
                        loop: !0,
                        navigation: {
                            nextEl: ".swiper-next-linked",
                            prevEl: ".swiper-prev-linked"
                        },
                        pagination: {
                            el: ".swiper-pagination-custom"
                        },
                        controller: {
                            control: t
                        }
                    }),
                    n = new w.a(".swiper-linked-lookbook", {
                        spaceBetween: 0,
                        slidesPerView: 1,
                        roundLengths: !0,
                        loop: !0
                    }),
                    s = new w.a(".lookbook-thumbs-horizontal", {
                        spaceBetween: 5,
                        slidesPerView: "auto"
                    });
                new w.a(".lookbook-top-horizontal", {
                    spaceBetween: 0,
                    pagination: {
                        el: ".swiper-pagination-lookbook",
                        type: "fraction"
                    },
                    navigation: {
                        nextEl: ".swiper-next-thumbs",
                        prevEl: ".swiper-prev-thumbs"
                    },
                    thumbs: {
                        swiper: s
                    },
                    controller: {
                        control: n
                    }
                })
            }(), document.addEventListener("DOMContentLoaded", () => {
                [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function (e) {
                    const t = {
                        boundary: "window",
                        fallbackPlacements: ["top"],
                        ...e.dataset.bsOptions ? JSON.parse(e.dataset.bsOptions) : {}
                    };
                    return new n.b(e, t)
                }))
            });
        o(180)
    }
});
