// Script for navigation bar
function addcart(){
    alert("Product added to cart");
    }

    let cartitem = [];

    function addToCart(pid) {
        if(cartitem.includes(pid)){
        alert("the product is already in cart");
    }	
        else{
            cartitem.push(pid);
      const pname = document.getElementById("title").innerHTML;
      const quantity = document.getElementById("quantity").value;
      const price = 10.00; // Replace with actual product price
      const subtotal = quantity * price;
      
      const cartItems = document.getElementById("cart-items");
      const cartTotal = document.getElementById("cart-total");
      
      const item = document.createElement("li");
      item.innerText = `${pname} ${quantity}x $${subtotal.toFixed(2)}`;
      
      cartItems.appendChild(item);
      
      const total = parseFloat(cartTotal.innerText) + subtotal;
      cartTotal.innerText = total.toFixed(2);
      alert ("Product added to cart");
    }
    }
    
    var element=document.getElementById("cart");
    function toggle(){
        
        element.classList.toggle("toggle1");
    }