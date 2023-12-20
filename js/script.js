let cart = {
    "pizza1": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza2": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza3": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza4": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza5": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza6": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza7": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza8": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "pizza9": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "drink1": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "drink2": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "drink3": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "drink4": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "salad1": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "salad2": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "salad3": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "salad4": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "salad5": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "salad6": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
    "salad7": {
        'name' : '',
        'count' : 0,
        'price' : '',
        'image' : ''
    },
}


document.addEventListener("click", function(event){
    console.log(event.target.classList);
    if(event.target.classList.contains("particle__button-plus")){
        plusFunction(event.target.dataset.id)
    }
    if(event.target.classList.contains("particle__button-minus")){
        minusFunction(event.target.dataset.id)
    }
})

function plusFunction(id){
    cart[id]['count']++;
    renderCart();
}

function minusFunction(id){
    if(cart[id]['count'] == 0){
        cart[id]['count'] == 0;
        renderCart();
    }else{
        cart[id]['count']--;
        renderCart();
    }
}

function renderCart(){
    console.log(cart);
} 

const particle = document.querySelectorAll('.particle');

particle.forEach(particleItem => {
    const item = particleItem.children;
    for(let it of item){
        if(it.classList.contains("particle__name")){
        console.log(it.classList.contains("particle__name"));
        }
    }
})

const cartBody = document.querySelector('.cart');

document.addEventListener("click", menu);

function menu(event){
    if(event.target.closest('.menu__cart-button')){
        cartBody.classList.toggle('_active');
        console.log("click"); 
    }
    if(event.target.closest('.cart')){
        cartBody.classList.remove('_active');
        console.log("clack");
    }
}
const iconMenu = document.querySelector('.menu__icon');

if(iconMenu){
    const listMenu = document.querySelector('.menu__list');
    iconMenu.addEventListener("click", function(e){
        iconMenu.classList.toggle('_active');
        listMenu.classList.toggle('_active');
    });
}