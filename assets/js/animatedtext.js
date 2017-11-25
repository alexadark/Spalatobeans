// Animated Text
! function(t) {
    "use strict";

    function n(t) {
        for (var n = t.length - 1; n > 0; n--) {
            var i = Math.floor(Math.random() * (n + 1)),
                a = t[n];
            t[n] = t[i], t[i] = a
        }
        return t
    }
    t.component("animatedText", {
        defaults: {
            animation: "uk-animation-fade",
            duration: 40
        },
        boot: function() {
            t.ready(function(n) {
                t.$("[data-uk-animatedtext]", n).each(function() {
                    var n, i = t.$(this);
                    i.data("animatedText") || (n = t.animatedText(i, t.Utils.options(i.attr("data-uk-animatedtext"))))
                })
            })
        },
        init: function() {
            this.on("display.uk.check", function(t) {
                this.element.is(":visible") && this.process()
            }.bind(this)), this.process()
        },
        process: function() {
            for (var t = this, i = this.element.text().split(""), a = [], e = 0; e < i.length; e++) a.push(e);
            a = n(a), i = i.map(function(n, i, e) {
                return e = a[i] * t.options.duration, '<span class="' + t.options.animation + '" style="-webkit-animation-delay:' + e + "ms;animation-delay:" + e + 'ms">' + n + "</span>"
            }).join(""), this.element.html(i)
        }
    })
}(UIkit);
