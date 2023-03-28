document.addEventListener("DOMContentLoaded", () => {
    let wlButtons = document.querySelectorAll(".WSlist");
    wlButtons.forEach(b => {
        b.addEventListener("click", (event) => {
            fetch(`/api/v1/accounts/${userId}/wishlist`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    action: event.target.classList.contains("add") ? "add" : "del",
                    id: event.target.id
                })
            }).then(res => {
                res.json().then(data => {
                    if (data.ok) {
                        if (event.target.classList.contains("add")) {
                            event.target.classList.remove("add");
                            event.target.classList.add("del");
                            event.target.innerText = "Supprimer de la liste de souhait";
                        }
                        else {
                            event.target.classList.add("add");
                            event.target.classList.remove("del");
                            event.target.innerText = "Ajouter à la liste de souhait";
                        }
                    }
                })
            })
        })
    })
})