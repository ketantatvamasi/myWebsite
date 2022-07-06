<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->
<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>
</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
<script>
    // (function($) {
    //     $(".headingHover1").attr("data-showme","img-1");
    //     $(".headingHover2").attr("data-showme","img-2");
    //     $(".headingHover3").attr("data-showme","img-3");
    //     $(".headingHover4").attr("data-showme","img-4");
    //     $(".headingHover5").attr("data-showme","img-5");
    //     $(".headingHover6").attr("data-showme","img-6");
    //     $(".headingHover7").attr("data-showme","img-7");
    //     $(".headingHover8").attr("data-showme","img-8");
    //     $(".headingHover9").attr("data-showme","img-9");
    //     $(".headingHover10").attr("data-showme","img-10");
    //     $(".headingHover11").attr("data-showme","img-11");
    //     $(".headingHover12").attr("data-showme","img-12");
    //     // alert('hover');
    //     $('[data-showme]').hover(function(){
    //         var showme = $(this).attr('data-showme');
    //         $('.all-img').hide();
    //         $('.'+ showme).show();
    //     });
    //
    //     $(".benefitsBox1").attr("data-showicon","benefitsIcon1");
    //     $(".benefitsBox2").attr("data-showicon","benefitsIcon2");
    //     $(".benefitsBox3").attr("data-showicon","benefitsIcon3");
    //     $(".benefitsBox4").attr("data-showicon","benefitsIcon4");
    //     $(".benefitsBox5").attr("data-showicon","benefitsIcon5");
    //
    //     $('[data-showicon]').hover(function(){
    //         var showIcon = $(this).attr('data-showicon');
    //         $('.'+showIcon).css("transform", "scale(1.2)");
    //     }, function(){
    //         var showIcon = $(this).attr('data-showicon');
    //         $('.'+showIcon).css("transform", "scale(1)");
    //     });
    //     var height = $("#home").height();
    //     // $('#backToTop').hide();
    //     $(window).scroll(function(){
    //         // $("span").text( x+= 1);
    //         if ( $(this).scrollTop() > height) {
    //             $('#backToTop').fadeIn();
    //             $("#backToTop").css({ "z-index": "1" });
    //         } else {
    //             $('#backToTop').fadeOut();
    //         }
    //     });
    //     //
    // })( jQuery );
    // (function($) {
    //     $('[data-showme]').hover(function(){
    //         var showme = $(this).attr('data-showme');
    //         $('.'+showme).addClass('synced');
    //     }, function(){
    //         var showme = $(this).attr('data-showme');
    //         $('.'+showme).removeClass('synced');
    //     });
    //
    // })( jQuery );
    "function" != typeof Object.create && (Object.create = function (t) {
        function e() {
        }

        return e.prototype = t, new e
    }), function (t, e, o) {
        var i = {
            init: function (e, o) {
                var i = this;
                i.$elem = t(o), i.options = t.extend({}, t.fn.owlCarousel.options, i.$elem.data(), e), i.userOptions = e, i.loadContent()
            }, loadContent: function () {
                function e(t) {
                    var e, o = "";
                    if ("function" == typeof i.options.jsonSuccess) i.options.jsonSuccess.apply(this, [t]); else {
                        for (e in t.owl) t.owl.hasOwnProperty(e) && (o += t.owl[e].item);
                        i.$elem.html(o)
                    }
                    i.logIn()
                }
                var o, i = this;
                "function" == typeof i.options.beforeInit && i.options.beforeInit.apply(this, [i.$elem]), "string" == typeof i.options.jsonPath ? (o = i.options.jsonPath, t.getJSON(o, e)) : i.logIn()
            }, logIn: function () {
                var t = this;
                t.$elem.data({
                    "owl-originalStyles": t.$elem.attr("style"),
                    "owl-originalClasses": t.$elem.attr("class")
                }), t.$elem.css({opacity: 0}), t.orignalItems = t.options.items, t.checkBrowser(), t.wrapperWidth = 0, t.checkVisible = null, t.setVars()
            }, setVars: function () {
                var t = this;
                return 0 === t.$elem.children().length ? !1 : (t.baseClass(), t.eventTypes(), t.$userItems = t.$elem.children(), t.itemsAmount = t.$userItems.length, t.wrapItems(), t.$owlItems = t.$elem.find(".owl-item"), t.$owlWrapper = t.$elem.find(".owl-wrapper"), t.playDirection = "next", t.prevItem = 0, t.prevArr = [0], t.currentItem = 0, t.customEvents(), void t.onStartup())
            }, onStartup: function () {
                var t = this;
                t.updateItems(), t.calculateAll(), t.buildControls(), t.updateControls(), t.response(), t.moveEvents(), t.stopOnHover(), t.owlStatus(), t.options.transitionStyle !== !1 && t.transitionTypes(t.options.transitionStyle), t.options.autoPlay === !0 && (t.options.autoPlay = 5e3), t.play(), t.$elem.find(".owl-wrapper").css("display", "block"), t.$elem.is(":visible") ? t.$elem.css("opacity", 1) : t.watchVisibility(), t.onstartup = !1, t.eachMoveUpdate(), "function" == typeof t.options.afterInit && t.options.afterInit.apply(this, [t.$elem])
            }, eachMoveUpdate: function () {
                var t = this;
                t.options.lazyLoad === !0 && t.lazyLoad(), t.options.autoHeight === !0 && t.autoHeight(), t.onVisibleItems(), "function" == typeof t.options.afterAction && t.options.afterAction.apply(this, [t.$elem])
            }, updateVars: function () {
                var t = this;
                "function" == typeof t.options.beforeUpdate && t.options.beforeUpdate.apply(this, [t.$elem]), t.watchVisibility(), t.updateItems(), t.calculateAll(), t.updatePosition(), t.updateControls(), t.eachMoveUpdate(), "function" == typeof t.options.afterUpdate && t.options.afterUpdate.apply(this, [t.$elem])
            }, reload: function () {
                var t = this;
                e.setTimeout(function () {
                    t.updateVars()
                }, 0)
            }, watchVisibility: function () {
                var t = this;
                return t.$elem.is(":visible") !== !1 ? !1 : (t.$elem.css({opacity: 0}), e.clearInterval(t.autoPlayInterval), e.clearInterval(t.checkVisible), void (t.checkVisible = e.setInterval(function () {
                    t.$elem.is(":visible") && (t.reload(), t.$elem.animate({opacity: 1}, 200), e.clearInterval(t.checkVisible))
                }, 500)))
            }, wrapItems: function () {
                var t = this;
                t.$userItems.wrapAll('<div class="owl-wrapper">').wrap('<div class="owl-item"></div>'), t.$elem.find(".owl-wrapper").wrap('<div class="owl-wrapper-outer">'), t.wrapperOuter = t.$elem.find(".owl-wrapper-outer"), t.$elem.css("display", "block")
            }, baseClass: function () {
                var t = this, e = t.$elem.hasClass(t.options.baseClass), o = t.$elem.hasClass(t.options.theme);
                e || t.$elem.addClass(t.options.baseClass), o || t.$elem.addClass(t.options.theme)
            }, updateItems: function () {
                var e, o, i = this;
                if (i.options.responsive === !1) return !1;
                if (i.options.singleItem === !0) return i.options.items = i.orignalItems = 1, i.options.itemsCustom = !1, i.options.itemsDesktop = !1, i.options.itemsDesktopSmall = !1, i.options.itemsTablet = !1, i.options.itemsTabletSmall = !1, i.options.itemsMobile = !1, !1;
                if (e = t(i.options.responsiveBaseWidth).width(), e > (i.options.itemsDesktop[0] || i.orignalItems) && (i.options.items = i.orignalItems), i.options.itemsCustom !== !1) for (i.options.itemsCustom.sort(function (t, e) {
                    return t[0] - e[0]
                }), o = 0; o < i.options.itemsCustom.length; o += 1) i.options.itemsCustom[o][0] <= e && (i.options.items = i.options.itemsCustom[o][1]); else e <= i.options.itemsDesktop[0] && i.options.itemsDesktop !== !1 && (i.options.items = i.options.itemsDesktop[1]), e <= i.options.itemsDesktopSmall[0] && i.options.itemsDesktopSmall !== !1 && (i.options.items = i.options.itemsDesktopSmall[1]), e <= i.options.itemsTablet[0] && i.options.itemsTablet !== !1 && (i.options.items = i.options.itemsTablet[1]), e <= i.options.itemsTabletSmall[0] && i.options.itemsTabletSmall !== !1 && (i.options.items = i.options.itemsTabletSmall[1]), e <= i.options.itemsMobile[0] && i.options.itemsMobile !== !1 && (i.options.items = i.options.itemsMobile[1]);
                i.options.items > i.itemsAmount && i.options.itemsScaleUp === !0 && (i.options.items = i.itemsAmount)
            }, response: function () {
                var o, i, n = this;
                return n.options.responsive !== !0 ? !1 : (i = t(e).width(), n.resizer = function () {
                    t(e).width() !== i && (n.options.autoPlay !== !1 && e.clearInterval(n.autoPlayInterval), e.clearTimeout(o), o = e.setTimeout(function () {
                        i = t(e).width(), n.updateVars()
                    }, n.options.responsiveRefreshRate))
                }, void t(e).resize(n.resizer))
            }, updatePosition: function () {
                var t = this;
                t.jumpTo(t.currentItem), t.options.autoPlay !== !1 && t.checkAp()
            }, appendItemsSizes: function () {
                var e = this, o = 0, i = e.itemsAmount - e.options.items;
                e.$owlItems.each(function (n) {
                    var s = t(this);
                    s.css({width: e.itemWidth}).data("owl-item", Number(n)), (n % e.options.items === 0 || n === i) && (n > i || (o += 1)), s.data("owl-roundPages", o)
                })
            }, appendWrapperSizes: function () {
                var t = this, e = t.$owlItems.length * t.itemWidth;
                t.$owlWrapper.css({width: 2 * e, left: 0}), t.appendItemsSizes()
            }, calculateAll: function () {
                var t = this;
                t.calculateWidth(), t.appendWrapperSizes(), t.loops(), t.max()
            }, calculateWidth: function () {
                var t = this;
                t.itemWidth = Math.round(t.$elem.width() / t.options.items)
            }, max: function () {
                var t = this, e = -1 * (t.itemsAmount * t.itemWidth - t.options.items * t.itemWidth);
                return t.options.items > t.itemsAmount ? (t.maximumItem = 0, e = 0, t.maximumPixels = 0) : (t.maximumItem = t.itemsAmount - t.options.items, t.maximumPixels = e), e
            }, min: function () {
                return 0
            }, loops: function () {
                var e, o, i, n = this, s = 0, a = 0;
                for (n.positionsInArray = [0], n.pagesInArray = [], e = 0; e < n.itemsAmount; e += 1) a += n.itemWidth, n.positionsInArray.push(-a), n.options.scrollPerPage === !0 && (o = t(n.$owlItems[e]), i = o.data("owl-roundPages"), i !== s && (n.pagesInArray[s] = n.positionsInArray[e], s = i))
            }, buildControls: function () {
                var e = this;
                (e.options.navigation === !0 || e.options.pagination === !0) && (e.owlControls = t('<div class="owl-controls"/>').toggleClass("clickable", !e.browser.isTouch).appendTo(e.$elem)), e.options.pagination === !0 && e.buildPagination(), e.options.navigation === !0 && e.buildButtons()
            }, buildButtons: function () {
                var e = this, o = t('<div class="owl-buttons"/>');
                e.owlControls.append(o), e.buttonPrev = t("<div/>", {
                    "class": "owl-prev",
                    html: e.options.navigationText[0] || ""
                }), e.buttonNext = t("<div/>", {
                    "class": "owl-next",
                    html: e.options.navigationText[1] || ""
                }), o.append(e.buttonPrev).append(e.buttonNext), o.on("touchstart.owlControls mousedown.owlControls", 'div[class^="owl"]', function (t) {
                    t.preventDefault()
                }), o.on("touchend.owlControls mouseup.owlControls", 'div[class^="owl"]', function (o) {
                    o.preventDefault(), t(this).hasClass("owl-next") ? e.next() : e.prev()
                })
            }, buildPagination: function () {
                var e = this;
                e.paginationWrapper = t('<div class="owl-pagination"/>'), e.owlControls.append(e.paginationWrapper), e.paginationWrapper.on("touchend.owlControls mouseup.owlControls", ".owl-page", function (o) {
                    o.preventDefault(), Number(t(this).data("owl-page")) !== e.currentItem && e.goTo(Number(t(this).data("owl-page")), !0)
                })
            }, updatePagination: function () {
                var e, o, i, n, s, a, r = this;
                if (r.options.pagination === !1) return !1;
                for (r.paginationWrapper.html(""), e = 0, o = r.itemsAmount - r.itemsAmount % r.options.items, n = 0; n < r.itemsAmount; n += 1) n % r.options.items === 0 && (e += 1, o === n && (i = r.itemsAmount - r.options.items), s = t("<div/>", {"class": "owl-page"}), a = t("<span></span>", {
                    text: r.options.paginationNumbers === !0 ? e : "",
                    "class": r.options.paginationNumbers === !0 ? "owl-numbers" : ""
                }), s.append(a), s.data("owl-page", o === n ? i : n), s.data("owl-roundPages", e), r.paginationWrapper.append(s));
                r.checkPagination()
            }, checkPagination: function () {
                var e = this;
                return e.options.pagination === !1 ? !1 : void e.paginationWrapper.find(".owl-page").each(function () {
                    t(this).data("owl-roundPages") === t(e.$owlItems[e.currentItem]).data("owl-roundPages") && (e.paginationWrapper.find(".owl-page").removeClass("active"), t(this).addClass("active"))
                })
            }, checkNavigation: function () {
                var t = this;
                return t.options.navigation === !1 ? !1 : void (t.options.rewindNav === !1 && (0 === t.currentItem && 0 === t.maximumItem ? (t.buttonPrev.addClass("disabled"), t.buttonNext.addClass("disabled")) : 0 === t.currentItem && 0 !== t.maximumItem ? (t.buttonPrev.addClass("disabled"), t.buttonNext.removeClass("disabled")) : t.currentItem === t.maximumItem ? (t.buttonPrev.removeClass("disabled"), t.buttonNext.addClass("disabled")) : 0 !== t.currentItem && t.currentItem !== t.maximumItem && (t.buttonPrev.removeClass("disabled"), t.buttonNext.removeClass("disabled"))))
            }, updateControls: function () {
                var t = this;
                t.updatePagination(), t.checkNavigation(), t.owlControls && (t.options.items >= t.itemsAmount ? t.owlControls.hide() : t.owlControls.show())
            }, destroyControls: function () {
                var t = this;
                t.owlControls && t.owlControls.remove()
            }, next: function (t) {
                var e = this;
                if (e.isTransition) return !1;
                if (e.currentItem += e.options.scrollPerPage === !0 ? e.options.items : 1, e.currentItem > e.maximumItem + (e.options.scrollPerPage === !0 ? e.options.items - 1 : 0)) {
                    if (e.options.rewindNav !== !0) return e.currentItem = e.maximumItem, !1;
                    e.currentItem = 0, t = "rewind"
                }
                e.goTo(e.currentItem, t)
            }, prev: function (t) {
                var e = this;
                if (e.isTransition) return !1;
                if (e.options.scrollPerPage === !0 && e.currentItem > 0 && e.currentItem < e.options.items ? e.currentItem = 0 : e.currentItem -= e.options.scrollPerPage === !0 ? e.options.items : 1, e.currentItem < 0) {
                    if (e.options.rewindNav !== !0) return e.currentItem = 0, !1;
                    e.currentItem = e.maximumItem, t = "rewind"
                }
                e.goTo(e.currentItem, t)
            }, goTo: function (t, o, i) {
                var n, s = this;
                return s.isTransition ? !1 : ("function" == typeof s.options.beforeMove && s.options.beforeMove.apply(this, [s.$elem]), t >= s.maximumItem ? t = s.maximumItem : 0 >= t && (t = 0), s.currentItem = s.owl.currentItem = t, s.options.transitionStyle !== !1 && "drag" !== i && 1 === s.options.items && s.browser.support3d === !0 ? (s.swapSpeed(0), s.browser.support3d === !0 ? s.transition3d(s.positionsInArray[t]) : s.css2slide(s.positionsInArray[t], 1), s.afterGo(), s.singleItemTransition(), !1) : (n = s.positionsInArray[t], s.browser.support3d === !0 ? (s.isCss3Finish = !1, o === !0 ? (s.swapSpeed("paginationSpeed"), e.setTimeout(function () {
                    s.isCss3Finish = !0
                }, s.options.paginationSpeed)) : "rewind" === o ? (s.swapSpeed(s.options.rewindSpeed), e.setTimeout(function () {
                    s.isCss3Finish = !0
                }, s.options.rewindSpeed)) : (s.swapSpeed("slideSpeed"), e.setTimeout(function () {
                    s.isCss3Finish = !0
                }, s.options.slideSpeed)), s.transition3d(n)) : o === !0 ? s.css2slide(n, s.options.paginationSpeed) : "rewind" === o ? s.css2slide(n, s.options.rewindSpeed) : s.css2slide(n, s.options.slideSpeed), void s.afterGo()))
            }, jumpTo: function (t) {
                var e = this;
                "function" == typeof e.options.beforeMove && e.options.beforeMove.apply(this, [e.$elem]), t >= e.maximumItem || -1 === t ? t = e.maximumItem : 0 >= t && (t = 0), e.swapSpeed(0), e.browser.support3d === !0 ? e.transition3d(e.positionsInArray[t]) : e.css2slide(e.positionsInArray[t], 1), e.currentItem = e.owl.currentItem = t, e.afterGo()
            }, afterGo: function () {
                var t = this;
                t.prevArr.push(t.currentItem), t.prevItem = t.owl.prevItem = t.prevArr[t.prevArr.length - 2], t.prevArr.shift(0), t.prevItem !== t.currentItem && (t.checkPagination(), t.checkNavigation(), t.eachMoveUpdate(), t.options.autoPlay !== !1 && t.checkAp()), "function" == typeof t.options.afterMove && t.prevItem !== t.currentItem && t.options.afterMove.apply(this, [t.$elem])
            }, stop: function () {
                var t = this;
                t.apStatus = "stop", e.clearInterval(t.autoPlayInterval)
            }, checkAp: function () {
                var t = this;
                "stop" !== t.apStatus && t.play()
            }, play: function () {
                var t = this;
                return t.apStatus = "play", t.options.autoPlay === !1 ? !1 : (e.clearInterval(t.autoPlayInterval), void (t.autoPlayInterval = e.setInterval(function () {
                    t.next(!0)
                }, t.options.autoPlay)))
            }, swapSpeed: function (t) {
                var e = this;
                "slideSpeed" === t ? e.$owlWrapper.css(e.addCssSpeed(e.options.slideSpeed)) : "paginationSpeed" === t ? e.$owlWrapper.css(e.addCssSpeed(e.options.paginationSpeed)) : "string" != typeof t && e.$owlWrapper.css(e.addCssSpeed(t))
            }, addCssSpeed: function (t) {
                return {
                    "-webkit-transition": "all " + t + "ms ease",
                    "-moz-transition": "all " + t + "ms ease",
                    "-o-transition": "all " + t + "ms ease",
                    transition: "all " + t + "ms ease"
                }
            }, removeTransition: function () {
                return {"-webkit-transition": "", "-moz-transition": "", "-o-transition": "", transition: ""}
            }, doTranslate: function (t) {
                return {
                    "-webkit-transform": "translate3d(" + t + "px, 0px, 0px)",
                    "-moz-transform": "translate3d(" + t + "px, 0px, 0px)",
                    "-o-transform": "translate3d(" + t + "px, 0px, 0px)",
                    "-ms-transform": "translate3d(" + t + "px, 0px, 0px)",
                    transform: "translate3d(" + t + "px, 0px,0px)"
                }
            }, transition3d: function (t) {
                var e = this;
                e.$owlWrapper.css(e.doTranslate(t))
            }, css2move: function (t) {
                var e = this;
                e.$owlWrapper.css({left: t})
            }, css2slide: function (t, e) {
                var o = this;
                o.isCssFinish = !1, o.$owlWrapper.stop(!0, !0).animate({left: t}, {
                    duration: e || o.options.slideSpeed,
                    complete: function () {
                        o.isCssFinish = !0
                    }
                })
            }, checkBrowser: function () {
                var t, i, n, s, a = this, r = "translate3d(0px, 0px, 0px)", l = o.createElement("div");
                l.style.cssText = "  -moz-transform:" + r + "; -ms-transform:" + r + "; -o-transform:" + r + "; -webkit-transform:" + r + "; transform:" + r, t = /translate3d\(0px, 0px, 0px\)/g, i = l.style.cssText.match(t), n = null !== i && 1 === i.length, s = "ontouchstart" in e || e.navigator.msMaxTouchPoints, a.browser = {
                    support3d: n,
                    isTouch: s
                }
            }, moveEvents: function () {
                var t = this;
                (t.options.mouseDrag !== !1 || t.options.touchDrag !== !1) && (t.gestures(), t.disabledEvents())
            }, eventTypes: function () {
                var t = this, e = ["s", "e", "x"];
                t.ev_types = {}, t.options.mouseDrag === !0 && t.options.touchDrag === !0 ? e = ["touchstart.owl mousedown.owl", "touchmove.owl mousemove.owl", "touchend.owl touchcancel.owl mouseup.owl"] : t.options.mouseDrag === !1 && t.options.touchDrag === !0 ? e = ["touchstart.owl", "touchmove.owl", "touchend.owl touchcancel.owl"] : t.options.mouseDrag === !0 && t.options.touchDrag === !1 && (e = ["mousedown.owl", "mousemove.owl", "mouseup.owl"]), t.ev_types.start = e[0], t.ev_types.move = e[1], t.ev_types.end = e[2]
            }, disabledEvents: function () {
                var e = this;
                e.$elem.on("dragstart.owl", function (t) {
                    t.preventDefault()
                }), e.$elem.on("mousedown.disableTextSelect", function (e) {
                    return t(e.target).is("input, textarea, select, option")
                })
            }, gestures: function () {
                function i(t) {
                    if (void 0 !== t.touches) return {x: t.touches[0].pageX, y: t.touches[0].pageY};
                    if (void 0 === t.touches) {
                        if (void 0 !== t.pageX) return {x: t.pageX, y: t.pageY};
                        if (void 0 === t.pageX) return {x: t.clientX, y: t.clientY}
                    }
                }

                function n(e) {
                    "on" === e ? (t(o).on(l.ev_types.move, a), t(o).on(l.ev_types.end, r)) : "off" === e && (t(o).off(l.ev_types.move), t(o).off(l.ev_types.end))
                }

                function s(o) {
                    var s, a = o.originalEvent || o || e.event;
                    if (3 === a.which) return !1;
                    if (!(l.itemsAmount <= l.options.items)) {
                        if (l.isCssFinish === !1 && !l.options.dragBeforeAnimFinish) return !1;
                        if (l.isCss3Finish === !1 && !l.options.dragBeforeAnimFinish) return !1;
                        l.options.autoPlay !== !1 && e.clearInterval(l.autoPlayInterval), l.browser.isTouch === !0 || l.$owlWrapper.hasClass("grabbing") || l.$owlWrapper.addClass("grabbing"), l.newPosX = 0, l.newRelativeX = 0, t(this).css(l.removeTransition()), s = t(this).position(), p.relativePos = s.left, p.offsetX = i(a).x - s.left, p.offsetY = i(a).y - s.top, n("on"), p.sliding = !1, p.targetElement = a.target || a.srcElement
                    }
                }

                function a(n) {
                    var s, a, r = n.originalEvent || n || e.event;
                    l.newPosX = i(r).x - p.offsetX, l.newPosY = i(r).y - p.offsetY, l.newRelativeX = l.newPosX - p.relativePos, "function" == typeof l.options.startDragging && p.dragging !== !0 && 0 !== l.newRelativeX && (p.dragging = !0, l.options.startDragging.apply(l, [l.$elem])), (l.newRelativeX > 8 || l.newRelativeX < -8) && l.browser.isTouch === !0 && (void 0 !== r.preventDefault ? r.preventDefault() : r.returnValue = !1, p.sliding = !0), (l.newPosY > 10 || l.newPosY < -10) && p.sliding === !1 && t(o).off("touchmove.owl"), s = function () {
                        return l.newRelativeX / 5
                    }, a = function () {
                        return l.maximumPixels + l.newRelativeX / 5
                    }, l.newPosX = Math.max(Math.min(l.newPosX, s()), a()), l.browser.support3d === !0 ? l.transition3d(l.newPosX) : l.css2move(l.newPosX)
                }

                function r(o) {
                    var i, s, a, r = o.originalEvent || o || e.event;
                    r.target = r.target || r.srcElement, p.dragging = !1, l.browser.isTouch !== !0 && l.$owlWrapper.removeClass("grabbing"), l.newRelativeX < 0 ? l.dragDirection = l.owl.dragDirection = "left" : l.dragDirection = l.owl.dragDirection = "right", 0 !== l.newRelativeX && (i = l.getNewPosition(), l.goTo(i, !1, "drag"), p.targetElement === r.target && l.browser.isTouch !== !0 && (t(r.target).on("click.disable", function (e) {
                        e.stopImmediatePropagation(), e.stopPropagation(), e.preventDefault(), t(e.target).off("click.disable")
                    }), s = t._data(r.target, "events").click, a = s.pop(), s.splice(0, 0, a))), n("off")
                }

                var l = this, p = {
                    offsetX: 0,
                    offsetY: 0,
                    baseElWidth: 0,
                    relativePos: 0,
                    position: null,
                    minSwipe: null,
                    maxSwipe: null,
                    sliding: null,
                    dargging: null,
                    targetElement: null
                };
                l.isCssFinish = !0, l.$elem.on(l.ev_types.start, ".owl-wrapper", s)
            }, getNewPosition: function () {
                var t = this, e = t.closestItem();
                return e > t.maximumItem ? (t.currentItem = t.maximumItem, e = t.maximumItem) : t.newPosX >= 0 && (e = 0, t.currentItem = 0), e
            }, closestItem: function () {
                var e = this, o = e.options.scrollPerPage === !0 ? e.pagesInArray : e.positionsInArray, i = e.newPosX,
                    n = null;
                return t.each(o, function (s, a) {
                    i - e.itemWidth / 20 > o[s + 1] && i - e.itemWidth / 20 < a && "left" === e.moveDirection() ? (n = a, e.options.scrollPerPage === !0 ? e.currentItem = t.inArray(n, e.positionsInArray) : e.currentItem = s) : i + e.itemWidth / 20 < a && i + e.itemWidth / 20 > (o[s + 1] || o[s] - e.itemWidth) && "right" === e.moveDirection() && (e.options.scrollPerPage === !0 ? (n = o[s + 1] || o[o.length - 1], e.currentItem = t.inArray(n, e.positionsInArray)) : (n = o[s + 1], e.currentItem = s + 1))
                }), e.currentItem
            }, moveDirection: function () {
                var t, e = this;
                return e.newRelativeX < 0 ? (t = "right", e.playDirection = "next") : (t = "left", e.playDirection = "prev"), t
            }, customEvents: function () {
                var t = this;
                t.$elem.on("owl.next", function () {
                    t.next()
                }), t.$elem.on("owl.prev", function () {
                    t.prev()
                }), t.$elem.on("owl.play", function (e, o) {
                    t.options.autoPlay = o, t.play(), t.hoverStatus = "play"
                }), t.$elem.on("owl.stop", function () {
                    t.stop(), t.hoverStatus = "stop"
                }), t.$elem.on("owl.goTo", function (e, o) {
                    t.goTo(o)
                }), t.$elem.on("owl.jumpTo", function (e, o) {
                    t.jumpTo(o)
                })
            }, stopOnHover: function () {
                var t = this;
                t.options.stopOnHover === !0 && t.browser.isTouch !== !0 && t.options.autoPlay !== !1 && (t.$elem.on("mouseover", function () {
                    t.stop()
                }), t.$elem.on("mouseout", function () {
                    "stop" !== t.hoverStatus && t.play()
                }))
            }, lazyLoad: function () {
                var e, o, i, n, s, a = this;
                if (a.options.lazyLoad === !1) return !1;
                for (e = 0; e < a.itemsAmount; e += 1) o = t(a.$owlItems[e]), "loaded" !== o.data("owl-loaded") && (i = o.data("owl-item"), n = o.find(".lazyOwl"), "string" == typeof n.data("src") ? (void 0 === o.data("owl-loaded") && (n.hide(), o.addClass("loading").data("owl-loaded", "checked")), s = a.options.lazyFollow === !0 ? i >= a.currentItem : !0, s && i < a.currentItem + a.options.items && n.length && n.each(function () {
                    a.lazyPreload(o, t(this))
                })) : o.data("owl-loaded", "loaded"))
            }, lazyPreload: function (t, o) {
                function i() {
                    t.data("owl-loaded", "loaded").removeClass("loading"), o.removeAttr("data-src"), "fade" === a.options.lazyEffect ? o.fadeIn(400) : o.show(), "function" == typeof a.options.afterLazyLoad && a.options.afterLazyLoad.apply(this, [a.$elem])
                }

                function n() {
                    r += 1, a.completeImg(o.get(0)) || s === !0 ? i() : 100 >= r ? e.setTimeout(n, 100) : i()
                }

                var s, a = this, r = 0;
                "DIV" === o.prop("tagName") ? (o.css("background-image", "url(" + o.data("src") + ")"), s = !0) : o[0].src = o.data("src"), n()
            }, autoHeight: function () {
                function o() {
                    var o = t(s.$owlItems[s.currentItem]).height();
                    s.wrapperOuter.css("height", o + "px"), s.wrapperOuter.hasClass("autoHeight") || e.setTimeout(function () {
                        s.wrapperOuter.addClass("autoHeight")
                    }, 0)
                }

                function i() {
                    n += 1, s.completeImg(a.get(0)) ? o() : 100 >= n ? e.setTimeout(i, 100) : s.wrapperOuter.css("height", "")
                }

                var n, s = this, a = t(s.$owlItems[s.currentItem]).find("img");
                void 0 !== a.get(0) ? (n = 0, i()) : o()
            }, completeImg: function (t) {
                var e;
                return t.complete ? (e = typeof t.naturalWidth, "undefined" !== e && 0 === t.naturalWidth ? !1 : !0) : !1
            }, onVisibleItems: function () {
                var e, o = this;
                for (o.options.addClassActive === !0 && o.$owlItems.removeClass("active"), o.visibleItems = [], e = o.currentItem; e < o.currentItem + o.options.items; e += 1) o.visibleItems.push(e), o.options.addClassActive === !0 && t(o.$owlItems[e]).addClass("active");
                o.owl.visibleItems = o.visibleItems
            }, transitionTypes: function (t) {
                var e = this;
                e.outClass = "owl-" + t + "-out", e.inClass = "owl-" + t + "-in"
            }, singleItemTransition: function () {
                function t(t) {
                    return {position: "relative", left: t + "px"}
                }

                var e = this, o = e.outClass, i = e.inClass, n = e.$owlItems.eq(e.currentItem),
                    s = e.$owlItems.eq(e.prevItem),
                    a = Math.abs(e.positionsInArray[e.currentItem]) + e.positionsInArray[e.prevItem],
                    r = Math.abs(e.positionsInArray[e.currentItem]) + e.itemWidth / 2,
                    l = "webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend";
                e.isTransition = !0, e.$owlWrapper.addClass("owl-origin").css({
                    "-webkit-transform-origin": r + "px",
                    "-moz-perspective-origin": r + "px",
                    "perspective-origin": r + "px"
                }), s.css(t(a, 10)).addClass(o).on(l, function () {
                    e.endPrev = !0, s.off(l), e.clearTransStyle(s, o)
                }), n.addClass(i).on(l, function () {
                    e.endCurrent = !0, n.off(l), e.clearTransStyle(n, i)
                })
            }, clearTransStyle: function (t, e) {
                var o = this;
                t.css({
                    position: "",
                    left: ""
                }).removeClass(e), o.endPrev && o.endCurrent && (o.$owlWrapper.removeClass("owl-origin"), o.endPrev = !1, o.endCurrent = !1, o.isTransition = !1)
            }, owlStatus: function () {
                var t = this;
                t.owl = {
                    userOptions: t.userOptions,
                    baseElement: t.$elem,
                    userItems: t.$userItems,
                    owlItems: t.$owlItems,
                    currentItem: t.currentItem,
                    prevItem: t.prevItem,
                    visibleItems: t.visibleItems,
                    isTouch: t.browser.isTouch,
                    browser: t.browser,
                    dragDirection: t.dragDirection
                }
            }, clearEvents: function () {
                var i = this;
                i.$elem.off(".owl owl mousedown.disableTextSelect"), t(o).off(".owl owl"), t(e).off("resize", i.resizer)
            }, unWrap: function () {
                var t = this;
                0 !== t.$elem.children().length && (t.$owlWrapper.unwrap(), t.$userItems.unwrap().unwrap(), t.owlControls && t.owlControls.remove()), t.clearEvents(), t.$elem.attr({
                    style: t.$elem.data("owl-originalStyles") || "",
                    "class": t.$elem.data("owl-originalClasses")
                })
            }, destroy: function () {
                var t = this;
                t.stop(), e.clearInterval(t.checkVisible), t.unWrap(), t.$elem.removeData()
            }, reinit: function (e) {
                var o = this, i = t.extend({}, o.userOptions, e);
                o.unWrap(), o.init(i, o.$elem)
            }, addItem: function (t, e) {
                var o, i = this;
                return t ? 0 === i.$elem.children().length ? (i.$elem.append(t), i.setVars(), !1) : (i.unWrap(), o = void 0 === e || -1 === e ? -1 : e, o >= i.$userItems.length || -1 === o ? i.$userItems.eq(-1).after(t) : i.$userItems.eq(o).before(t), void i.setVars()) : !1
            }, removeItem: function (t) {
                var e, o = this;
                return 0 === o.$elem.children().length ? !1 : (e = void 0 === t || -1 === t ? -1 : t, o.unWrap(), o.$userItems.eq(e).remove(), void o.setVars())
            }
        };
        t.fn.owlCarousel = function (e) {
            return this.each(function () {
                if (t(this).data("owl-init") === !0) return !1;
                t(this).data("owl-init", !0);
                var o = Object.create(i);
                o.init(e, this), t.data(this, "owlCarousel", o)
            })
        }, t.fn.owlCarousel.options = {
            items: 5,
            itemsCustom: !1,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: !1,
            itemsMobile: [479, 1],
            singleItem: !1,
            itemsScaleUp: !1,
            slideSpeed: 200,
            paginationSpeed: 800,
            rewindSpeed: 1e3,
            autoPlay: !1,
            stopOnHover: !1,
            navigation: !1,
            navigationText: ["prev", "next"],
            rewindNav: !0,
            scrollPerPage: !1,
            pagination: !0,
            paginationNumbers: !1,
            responsive: !0,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: e,
            baseClass: "owl-carousel",
            theme: "owl-theme",
            lazyLoad: !1,
            lazyFollow: !0,
            lazyEffect: "fade",
            autoHeight: !1,
            jsonPath: !1,
            jsonSuccess: !1,
            dragBeforeAnimFinish: !0,
            mouseDrag: !0,
            touchDrag: !0,
            addClassActive: !1,
            transitionStyle: !1,
            beforeUpdate: !1,
            afterUpdate: !1,
            beforeInit: !1,
            afterInit: !1,
            beforeMove: !1,
            afterMove: !1,
            afterAction: !1,
            startDragging: !1,
            afterLazyLoad: !1
        }
    }(jQuery, window, document);
</script>
</body>
</html>
