let products = [];

fetch("JS/productos.json")
    .then(response => response.json())
    .then(data => {
        products = data;
        loadProducts(products);
        saveProductsToDataBase(products);
    })


const containerProducts = document.querySelector("#container-products");
const buttonCategory = document.querySelectorAll(".button-category");
const mainTitle = document.querySelector("#main-title");
let buttonAdd = document.querySelectorAll(".add-product");
const numerito = document.querySelector("#numerito");


buttonCategory.forEach(button => button.addEventListener("click", () => {
    aside.classList.remove("aside-visible");
}))


function loadProducts(chosenProduct) {

    containerProducts.innerHTML = "";

    chosenProduct.forEach(product => {

        const div = document.createElement("div");
        div.classList.add("col-12");
        div.innerHTML = `

        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="${product.imagen}" alt="${product.title}" class="img-fluid rounded-start px-4 py-4" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title" style="padding: 1em 0 0 0;">${product.title}</h3>
                    <p class="card-text" style="padding: 1em 0 1em 0;"><big >$${product.price}</big></p>
                    <button class="product-add" id="${product.id}">Agregar</button>
                </div>
                </div>
            </div>
        </div>

        `;

        containerProducts.append(div);
    })
}

window.onload =  function saveProductsToDataBase(products){

    const productosJSON = JSON.stringify(products);

    fetch("index.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "productos=" + productosJSON,
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Manejar la respuesta del servidor si es necesario
    })
    .catch(error => {
        console.error("Error al enviar datos al servidor:", error);
    });
}
