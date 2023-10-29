// Shery.makeMagnet(".magnet-target", {
//   //Parameters are optional.
//   //Default values:
//   ease: "cubic-bezier(3, 5, 3, 5)",
//   duration: .1,
// });
// Shery.mouseFollower({
//   //Parameters are optional.
//   skew: true,
//   ease: "cubic-bezier(0.23, 1, 0.320, 1)",
//   duration: .35,
 
// });
let cartIcon = document.getElementById("cartIcon");
let cartbar=document.getElementById("cartbar");
let cartHide= document.getElementById("carthide");
let cartLength = document.getElementById("cartLength");

cartHide.addEventListener("click",function(){
  cartbar.classList.remove("show")
})
cartIcon.addEventListener("click",function(){
 cartbar.classList.add("show")
})

gsap.from(".container>*",{
  backgroundColor:"black",
})
gsap.from(".magnet-target",{
y:800
})
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },  loop: true,
  },
);
let add = document.querySelectorAll(".CartBtn");
let cart=[];
let li='<hr class="my-4"></hr>';
let totalPrice=0;
let totalPricediv = document.getElementById("totalpricediv");


function cartList(){
  const itemBox = document.getElementById("itemBox");
  li='<hr class="my-4"></hr>';
  cart.map((item,index)=>{
    li+=`
    <div class="row  d-flex  align-items-center flex-nowrap">
        <div class="col-md-2 col-lg-2 col-xl-2">
          <img src="${item.image}" class="img-fluid rounded-3" alt="${item.name}">
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3">
          <h6 class="text-black mb-0">${item.name}</h6>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-3 d-flex"> 
          <input id="quantity-${index}" min="0" name="quantity" value="${item.quantity}" type="number" class="form-control form-control-sm" readonly />
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2">
          <h6 class="mb-0">₹ ${item.price.toFixed(2)}</h6>
        </div>
        <div>
          <button class="btn-dlt text-center mx-0">
  <svg viewBox="0 0 15 17.5" height="17.5" width="15" xmlns="http://www.w3.org/2000/svg" class="icon" onclick="removeItem(${index},${item.price.toFixed(2)})">
  <path transform="translate(-2.5 -1.25)" d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z" id="Fill">
  </path>
</svg>
</button>
</div>
      </div>
      <hr class="my-4">
    `;
  
})
itemBox.innerHTML=li;
totalPricediv.innerHTML= totalPrice;
}

function removeItem(index,price) {
  cart = cart.filter((item, ind) => {
      return ind !== index;
  });
totalPrice-=price;
totalPrice= Math.floor(totalPrice.toFixed(2))
 cartList()
 cartLength.textContent=`${cart.length} Item`;
}



add.forEach((e)=>{
   e.addEventListener("click",function(dets){
 let name =dets.target.parentElement.parentElement.parentElement.querySelector("a").innerHTML;
let img = dets.target.parentElement.parentElement.parentElement.parentElement.querySelector("img");
let finalPrice= dets.target.parentElement.parentElement.parentElement.querySelector("#finalPrice").textContent;
totalPrice+=Number(Math.ceil(finalPrice));
finalPrice=Number(finalPrice);
const check = cart.findIndex(item=>item.name===name)
if (check!== -1 ) {
  cart[check].quantity++;
  cart[check].price=eval(finalPrice * cart[check].quantity)
}
else{
  let obj={
    name :name ,
    image : img.src,
    price:finalPrice,
    quantity:1
  }
  cart.push(obj)
}

cartList();

   cartLength.textContent=`${cart.length} Item`;

   })
})

let confirm = document.getElementById("confirm");
 confirm.addEventListener("click",function(){
  let cartPrice = totalPrice;
  var xhr = new XMLHttpRequest();
            xhr.open("POST", "./process.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Handle the response from the server if needed
                    console.log(xhr.responseText);
                    totalPrice=0;
                    cart=[];
            cartList();
            cartLength.textContent=`${0} Item`;
           
                }
            };
            xhr.send("cartPrice=" + cartPrice);
            
 })



