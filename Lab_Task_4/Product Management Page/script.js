const unitPrice = 1000;
function calculateTotal() {

    let qty = document.getElementById("qty").value;

    qty = Number(qty);

    if (qty < 0) {
        qty = 0;
        document.getElementById("qty").value = 0;
    }

    let total = unitPrice * qty;

    document.getElementById("total").value = total;

    if (total > 1000) {
        alert("You are eligible for a gift coupon!");
    }
}