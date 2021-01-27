require("./bootstrap");
import axios from "axios";
// import Noty from "noty";

let addToCart = document.querySelectorAll(".add-to-cart");

let cartcounter = document.querySelector("#cartCounter");

function updateCart(item) {
    axios
        .post("/update-cart", item)
        .then((res) => {
            console.log(res);
            cartcounter.innerText = res.data.totalQty;
        })
        .catch((err) => {});
}

addToCart.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        console.log(e);
        let item = JSON.parse(btn.dataset.item);
        updateCart(item);
    });
});
