// const $ = document.querySelector.bind(document);
// const $$ = document.querySelectorAll.bind(document);

const tabs = document.querySelectorAll(".tab-item");
const panes = document.querySelectorAll(".tab-pane");

const tabActive = document.querySelector(".tab-item.active");
const line = document.querySelector(".tabs .line");

if(line!=null) {
    line.style.left = tabActive.offsetLeft + "px";
    line.style.width = tabActive.offsetWidth + "px";
}

tabs.forEach((tab, index) => {
    const pane = panes[index];

    tab.onclick = function () {
        document.querySelector(".tab-item.active").classList.remove("active");
        document.querySelector(".tab-pane.active").classList.remove("active");

        line.style.left = this.offsetLeft + "px";
        line.style.width = this.offsetWidth + "px";

        this.classList.add("active");
        pane.classList.add("active");
    };
});

const avatar = document.querySelector(".rounded-circle")
const manage = document.querySelector(".manage-wrap")

const cartWrap = document.querySelector(".cart-wrap")
const cart = document.querySelector(".cart")

const booking = document.querySelector(".booking")
const mainBtn = document.querySelector(".main-btn")
if(document.querySelector(".booking-close")!=null) {
    const bookingClose = document.querySelector(".booking-close")
    bookingClose.onclick = () => {
        booking.classList.remove("booking-active")
    }
}


mainBtn.addEventListener("click", function () {
    booking.classList.toggle("booking-active")
})

avatar.addEventListener('click', function () {
    manage.classList.toggle('manage-wrap-active')
})

cart.addEventListener('click', function() {
    cartWrap.classList.toggle('cart-active')
})


