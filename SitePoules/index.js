document.addEventListener("DOMContentLoaded", function () {
    const e = document.getElementById("current-image"),
        t = document.getElementById("image-title"),
        n = document.getElementById("prev-btn"),
        l = document.getElementById("next-btn");
    let o = 0,
        c = [];
    function i(n) {
        n >= 0 && n < c.length && ((e.src = c[n].url), (t.textContent = c[n].title));
    }
    n.addEventListener("click", function () {
        (o = (o - 1 + c.length) % c.length), i(o);
    }),
        l.addEventListener("click", function () {
            (o = (o + 1) % c.length), i(o);
        }),
        (function () {
            const e = new XMLHttpRequest();
            e.open("GET", "IMGViewer/IMGViewer.xml", !0),
                (e.onload = function () {
                    if (200 === e.status) {
                        const t = e.responseXML.getElementsByTagName("image");
                        for (let e = 0; e < t.length; e++) {
                            const n = t[e].getElementsByTagName("url")[0].textContent,
                                l = t[e].getElementsByTagName("title")[0].textContent;
                            c.push({ url: n, title: l });
                        }
                        i(o);
                    }
                }),
                e.send();
        })();
});
