const searchInput = document.querySelector('[data-search]');
const flavourItems = document.querySelectorAll('.flavour');

const flavourItemsArray = Array.from(flavourItems);

searchInput.addEventListener("input", e => {
    const value = e.target.value.trim().toLowerCase();

    flavourItemsArray.forEach(item => {
        const iceCreamName = item.querySelector('h4').textContent.toLowerCase();

        if (iceCreamName.includes(value)) {
            item.style.display = "block";
            flavorFound = true;
        } else {
            item.style.display = "none";
        }
    });


});

// function changeImg(x,image){
//     if(x==1){
//        image.src= '/img/1b.jpeg';
//     }
//     if(x==2){
//        image.src= '/img/1.jpeg';
//     }
// }


document.addEventListener('DOMContentLoaded', function() {
    var imageContainers = document.querySelectorAll('.image-container');

    imageContainers.forEach(function(container) {
        var img = container.querySelector('.pic');
        var defaultImage = img.src;
        var hoverImage = img.getAttribute('data-hover');

        container.addEventListener('mouseover', function() {
            img.src = hoverImage;
        });

        container.addEventListener('mouseout', function() {
            img.src = defaultImage;
        });
    });
});




// JavaScript for both home and menu pages
// const searchInput = document.querySelector('[data-search]');
// const flavourItems = document.querySelectorAll('.flavour');

// const flavourItemsArray = Array.from(flavourItems);

// searchInput.addEventListener("input", e => {
//     const value = e.target.value.trim().toLowerCase();
//     let flavorFound = false; // Flag to track if a matching flavor is found

//     flavourItemsArray.forEach(item => {
//         const iceCreamName = item.querySelector('h4').textContent.toLowerCase();

//         if (iceCreamName.includes(value)) {
//             item.style.display = "block";
//             flavorFound = true; // Set the flag to true if a matching flavor is found
//         } else {
//             item.style.display = "none";
//         }
//     });

//     // Redirect to products page if a matching flavor is found
//     if (flavorFound) {
//         window.location.href = "./html/products.html?search=" + encodeURIComponent(value);
//     }
// });




// JavaScript for both home and menu pages
// const searchInput = document.querySelector('[data-search]');
// const flavourItems = document.querySelectorAll('.flavour');

// const flavourItemsArray = Array.from(flavourItems);

// searchInput.addEventListener("input", e => {
//     const value = e.target.value.trim().toLowerCase();
//     let flavorFound = false; // Flag to track if a matching flavor is found

//     flavourItemsArray.forEach(item => {
//         const iceCreamName = item.querySelector('h4').textContent.toLowerCase();

//         if (iceCreamName.includes(value)) {
//             item.style.display = "block";
//             flavorFound = true; // Set the flag to true if a matching flavor is found
//         } else {
//             item.style.display = "none";
//         }
//     });

//     // Redirect to products page if a matching flavor is found
//     if (flavorFound) {
//         window.location.href = "./html/products.html#" + value; // Redirect to products page with hash representing selected flavor
//     }
// });



// Get the search input element
// const searchInput = document.getElementById('search');

// // Function to handle search
// function handleSearch() {
//     // Get the search query
//     const query = searchInput.value.toLowerCase();
    
//     // If the search query is not empty
//     if (query.trim() !== '') {
//         // Redirect to the products page with the search query as URL parameter
//         window.location.href = `/html/products.html?search=${encodeURIComponent(query)}`;
//     } else {
//         // If the search query is empty, redirect to the products page without any filter
//         window.location.href = '/html/products.html';
//     }
// }

// // Attach an event listener to the search input for handling the search
// searchInput.addEventListener('keypress', function(event) {
//     // Check if the 'Enter' key is pressed
//     if (event.key === 'Enter') {
//         // Prevent the default form submission behavior
//         event.preventDefault();
//         // Call the function to handle the search
//         handleSearch();
//     }
// });



// // Get the search input element
// const searchInput = document.getElementById('search');
// const flavourItems = document.querySelectorAll('.flavour');

// // Function to handle search
// function handleSearch() {
//     // Get the search query
//     const query = searchInput.value.trim().toLowerCase();
    
//     // If the search query is not empty
//     if (query !== '') {
//         flavourItems.forEach(item => {
//             const iceCreamName = item.querySelector('h4').textContent.toLowerCase();
//             if (iceCreamName.includes(query)) {
//                 item.style.display = 'block';
//             } else {
//                 item.style.display = 'none';
//             }
//         });
//     } else {
//         // If the search query is empty, display all ice cream options
//         flavourItems.forEach(item => {
//             item.style.display = 'block';
//         });
//     }
// }

// // Attach an event listener to the search input for handling the search
// searchInput.addEventListener('input', handleSearch);


