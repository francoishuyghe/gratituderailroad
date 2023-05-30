import Isotope from 'isotope-layout/dist/isotope.pkgd.min.js'

let grid = document.getElementById('allPortfolio')
let iso = new Isotope( grid, {
    // options...
    itemSelector: '.post-card',
    layoutMode: 'fitRows',
    percentPosition: true,
    masonry: {
        columnWidth: '.grid-sizer',
        gutter: 30
    }
});

function changeFilters(filterString){
    if(filterString) {
        iso.arrange({ filter: filterString });
    } else {
        iso.arrange({ filter: '*' });
    }
}

let buttons = document.querySelectorAll('#portfolioFilters button')
buttons.forEach(button => {
    button.addEventListener('click', (e) => {
         // If the filter is already active
    if(e.target.classList.contains('active')){
        e.target.classList.remove('active')
        iso.arrange({ filter: '*' });
        return;
    }

    //If another filter is active
    if(document.querySelectorAll('button.active').length){
        document.querySelector('button.active').classList.remove('active')
        iso.arrange({ filter: '*' });
    } 

    e.target.classList.add('active')
    let filterValue = e.target.getAttribute('data-filter');
    changeFilters(filterValue)
    }) 
});

let categorySelect = document.querySelector('#portfolioFilters select')
categorySelect.addEventListener('change', (e) => {
    changeFilters(e.target.value)
})
