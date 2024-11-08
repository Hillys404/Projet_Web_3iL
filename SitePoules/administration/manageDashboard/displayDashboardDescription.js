document.addEventListener("DOMContentLoaded", function () {
    const e = document.getElementById("tableauDescriptions").getElementsByTagName("tbody")[0];
    let t = [];
    function n() {
        const o = new XMLHttpRequest();
        o.open("GET", "../administration/manageDashboard/getDescriptions.php", !0),
            (o.onload = function () {
                200 === o.status &&
                    ((t = JSON.parse(o.responseText)),
                        (function (t) {
                            (e.innerHTML = ""),
                                t.forEach((t) => {
                                    const n = e.insertRow(),
                                        o = n.insertCell(),
                                        i = n.insertCell(),
                                        s = n.insertCell(),
                                        a = n.insertCell();
                                    (o.innerHTML = `<img src="../img/descriptionIMG/${t.contenu}" alt="${t.contenu}">`),
                                        (i.innerHTML = t.contenu),
                                        (s.textContent = t.description),
                                        (a.innerHTML = `\n                <button class="modify-btn" data-id="${t.id}">Modifier</button>\n                <button class="delete-btn" data-id="${t.id}">Supprimer</button>\n            `);
                                });
                            document.querySelectorAll(".modify-btn").forEach((e) => {
                                e.addEventListener("click", function () {
                                    const e = this.dataset.id,
                                        t = this.closest("tr"),
                                        o = t.cells[2],
                                        i = o.textContent;
                                    (o.style.display = "flex"), (o.style.flexDirection = "column"), (o.innerHTML = `<textarea rows="4"  required class="description-input">${i}</textarea>`);
                                    const s = document.createElement("button");
                                    (s.textContent = "Sauvegarder"),
                                        s.classList.add("save-btn"),
                                        t.cells[2].appendChild(s),
                                        s.addEventListener("click", function () {
                                            const t = o.querySelector(".description-input").value,
                                                i = new XMLHttpRequest();
                                            i.open("POST", "../administration/manageDashboard/modifyDescription.php", !0),
                                                (i.onload = function () {
                                                    200 === i.status && (n(), (o.style.display = ""));
                                                }),
                                                i.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
                                                i.send(`id=${e}&description=${encodeURIComponent(t)}`),
                                                s.remove(),
                                                (o.textContent = t);
                                        });
                                });
                            });
                            document.querySelectorAll(".delete-btn").forEach((e) => {
                                e.addEventListener("click", function () {
                                    const e = this.dataset.id;
                                    if (confirm("Êtes-vous sûr de vouloir supprimer cette description ?")) {
                                        const t = new XMLHttpRequest();
                                        t.open("POST", "../administration/manageDashboard/deleteDescription.php", !0),
                                            (t.onload = function () {
                                                200 === t.status && (n(), alert("Suppression effectuée."));
                                            }),
                                            t.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
                                            t.send(`id=${e}`);
                                    }
                                });
                            });
                        })(t));
            }),
            o.send();
    }
    n(),
        document.getElementById("descriptionForm").addEventListener("submit", function (e) {
            e.preventDefault();
            let t = document.getElementById("image"),
                o = document.getElementById("description");
            if (0 === t.files.length) return void alert("Veuillez choisir une image.");
            const i = t.files[0],
                s = o.value;
            if (!["image/jpeg", "image/png"].includes(i.type)) return void alert("Format de fichier non supporté. Veuillez choisir un fichier jpg, jpeg ou png.");
            const a = new FormData();
            a.append("image", i);
            const r = new XMLHttpRequest();
            r.open("POST", "../administration/manageDashboard/uploadImage.php", !0),
                (r.onload = function () {
                    if (200 === r.status) {
                        const e = JSON.parse(r.responseText);
                        if ("success" === e.status) {
                            const t = e.imageName,
                                o = new XMLHttpRequest();
                            o.open("POST", "../administration/manageDashboard/addDescription.php", !0),
                                (o.onload = function () {
                                    200 === o.status && (n(), alert("Ajout réussi."));
                                }),
                                o.setRequestHeader("Content-type", "application/x-www-form-urlencoded"),
                                o.send(`imageName=${encodeURIComponent(t)}&description=${encodeURIComponent(s)}`);
                        } else alert("Erreur lors de l'upload de l'image : " + e.message);
                    } else alert("Une erreur est survenue lors de l'upload de l'image.");
                }),
                (r.onerror = function () {
                    alert("Erreur de connexion lors de l'upload de l'image.");
                }),
                r.send(a),
                (t.value = ""),
                (o.value = "");
        });
});
