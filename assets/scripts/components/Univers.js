import { univers } from "../data/Univers";
let universContainer = document.getElementById("univers");

let universContent = "";

univers.forEach(function(universitem) {
    universContent += `
    <div class="univers_item">
        <a href= ${universitem.url}>
            <img src= ${universitem.img } />
            <span class="univers_item_label">${universitem.label }</span>
        </a>
    </div>
    `;
}); 

universContainer.innerHTML = universContent;